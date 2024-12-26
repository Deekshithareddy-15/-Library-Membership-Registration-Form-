<?php 
$registered_ids = isset($_COOKIE['registered_ids']) ? 
unserialize($_COOKIE['registered_ids']) : []; 
$message = ''; 
$member_details = []; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$name = htmlspecialchars($_POST['name']); 
$age = (int) $_POST['age']; 
$library_id = htmlspecialchars($_POST['library_id']); 
$address = htmlspecialchars($_POST['address']); 
if ($age < 12) { 
$message = "You are not eligible because age is under 12."; 
$member_details = [ 
'Name' => $name, 
'Age' => $age, 
'Library ID' => $library_id, 
'Address' => $address 
]; 
} else { 
if (in_array($library_id, $registered_ids)) { 
$message = "Library ID already registered. Please use a different 
ID."; 
} else { 
$message = "Eligible for library membership. Welcome, $name!"; 
$member_details = [ 
'Name' => $name, 
 
 
 
                'Age' => $age, 
                'Library ID' => $library_id, 
                'Address' => $address 
            ]; 
             
            $registered_ids[] = $library_id; 
            setcookie("registered_ids", serialize($registered_ids), time() + 
(86400 * 30), "/"); // Store for 30 days 
            setcookie("member_details", serialize($member_details), time() + 
(86400 * 30), "/"); // Store for 30 days 
        } 
    } 
} 
?> 
 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial
scale=1.0"> 
    <title>Library Membership Registration</title> 
    <style> 
        body { 
            font-family: 'Times New Roman', Times, serif; 
            background-color: #f0f4f8; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0; 
            color: #333; 
        } 
        .container { 
            background-color: #ffffff; 
            border-radius: 8px; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
            padding: 20px 30px; 
            max-width: 500px; 
            width: 100%; 
            margin: 20px; 
 
 
 
            box-sizing: border-box; 
        } 
        h2 { 
            text-align: center; 
            color: black; 
            margin-bottom: 20px; 
        } 
        label { 
            font-weight: bold; 
            display: block; 
            margin-top: 10px; 
        } 
        input, textarea, button { 
            width: 100%; 
            margin-top: 8px; 
            padding: 12px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            font-size: 16px; 
            box-sizing: border-box; 
        } 
        button { 
            background-color: #007bff; 
            color: white; 
            border: none; 
            font-weight: bold; 
            cursor: pointer; 
            margin-top: 20px; 
            padding: 12px; 
            transition: background-color 0.3s; 
        } 
        button:hover { 
            background-color: #0056b3; 
        } 
        .message { 
            margin-top: 20px; 
            padding: 15px; 
            font-size: 16px; 
            border-radius: 5px; 
            text-align: center; 
 
 
 
        } 
        .success { 
            background-color: #d4edda; 
            color: #155724; 
        } 
        .error { 
            background-color: #f8d7da; 
            color: #721c24; 
        } 
        .member-details { 
            margin-top: 20px; 
            padding: 15px; 
            background-color: #f1f3f5; 
            border-radius: 5px; 
            color: #333; 
        } 
        .member-details h3 { 
            color: #007bff; 
            font-size: 18px; 
            margin-bottom: 10px; 
        } 
        .member-details p { 
            margin: 5px 0; 
            font-size: 15px; 
        } 
    </style> 
</head> 
<body> 
    <div class="container"> 
        <h2>Library Membership Registration</h2> 
        <form method="POST" action=""> 
            <label for="name">Name</label> 
            <input type="text" id="name" name="name" required> 
 
            <label for="age">Age</label> 
            <input type="number" id="age" name="age" required min="1"> 
 
            <label for="library_id">Library ID</label> 
            <input type="text" id="library_id" name="library_id" required> 
 
 
 
 
            <label for="address">Address</label> 
            <textarea id="address" name="address" required></textarea> 
 
            <button type="submit">Register</button> 
        </form> 
 
        <?php if ($message): ?> 
            <div class="message <?= $age >= 12 ? 'success' : 'error' ?>"> 
                <?= $message ?> 
            </div> 
        <?php endif; ?> 
 
        <?php 
        if (!empty($member_details)) { 
            echo "<div class='member-details'>"; 
            echo "<h3>Member Details:</h3>"; 
            echo "<p><strong>Name:</strong> " . $member_details['Name'] . 
"</p>"; 
            echo "<p><strong>Age:</strong> " . $member_details['Age'] . 
"</p>"; 
            echo "<p><strong>Library ID:</strong> " . 
$member_details['Library ID'] . "</p>"; 
            echo "<p><strong>Address:</strong> " . 
$member_details['Address'] . "</p>"; 
            echo "</div>"; 
        } 
        ?> 
    </div> 
</body> 
</html>