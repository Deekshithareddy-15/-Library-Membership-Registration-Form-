# -Library-Membership-Registration-Form-
 Library Membership Registration Form in PHP
<!DOCTYPE html>  
<html lang="en">  
<head>  
 <meta charset="UTF-8">  
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  
 <title>Document</title>  
 <style>  
 .grid  
 {  
 display: grid;  
 grid-template-rows: auto;  
 grid-template-columns: 15% 85%;  
 }  
 .box1  
 {  
 display: flex;  
 width: 100%;  
 justify-content: center;  
 align-items: center;  
 background-color: rgba(42, 42, 42, 0.692);  
 }  
 .box2  
 {  
 display: flex;  
 width: 100%;  
 justify-content: center;  
 align-items: center;  
 background-color: rgba(42, 42, 42, 0.692);  
 color: white;  
 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  
 }  
 /* .grid2  
 {  
 display: grid;  
 grid-template-columns: 10%;  
 grid-template-rows: 100%;  
 height: 100%;  
 }  
 .bg1  
 {  
 background-color: rgba(42, 42, 42, 0.692);  
 display: flex;  
 justify-content: center;  
 grid-row-end: 2;  
 } */  
  
.input  
{  
    background-color: rgba(249, 247, 247, 0);  
    color : white;  
}  
.input:hover  
{  
    background-color: rgba(249, 247, 247, 0.692);  
    color : black;  
}  
  
.n  
{  
    border-radius: 5px;  
}  
 </style>  
</head>  
<body>  
    <div class="grid">  
        <div class="box1">  
            <img src="secondry-logo.png" alt="logo" style="border-radius: 50cap; 
width: 20%;  
height: 45%;">  
        </div>  
        <div class="box2">  
            <p style="font-size: xx-large;">Online Railway Reservation System</p>  
        </div>   
    </div>  
 <!-- <div class="grid2">  
 <div class="bg1">  
 1 <br> 2  
 </div>  
 </div> -->  
    <div>  
        <div style="display: flex; flex-direction: column; background-color: rgba(42, 
42, 42,  
0.692); width: 10%; height: 1000px; align-items: left; padding-left: 1cap; 
padding-right:  
1cap; float: left;">  
            <br>   
            <input type="button" value="HOME" onclick="home()" class="input">  
            <br>  
            <input type="button" value="BOOKING" onclick="booking()" 
class="input">  
            <br>  
            <input type="button" value="CHECK AVAILABILITY" onclick="ac()"  
class="input">  
        </div>  
        <div style="display: inline-block; float: left; padding-left: 5%; padding-top: 
5%;  
height:1000px" >  
  
            <div id="content" style="font-size: large;">   
                Welcome to online Railway Reservation  
            </div>  
  
  
            <div id="book" style="display: none;">  
                  
                From: <input type="text" id="from" placeholder="" class="n"> &nbsp; 
&nbsp;  
&nbsp; &nbsp;  
                To: <input type="text" id="to" placeholder="" class="n">  
                <br><br>  
                Train Name:   
                <select id="train name" class="n">  
                    <option value="Select">Select Train name</option>  
                    <option value="LAL BAGH">LAL BAGH</option>  
                    <option value="VANDE BHARAT">VANDE BHARAT</option>  
                    <option value="SADAPTHI EXPRESS">SADAPTHI EXPRESS</option>  
                    <option value="RAJDHANI EXPRESS">RAJDHANI EXPRESS</option>  
                    <option value="KORAMANDALAM">KORAMANDALAM</option>  
                    <option value="NILGIRI EXPRESS">NILGIRI EXPRESS</option>  
                    <option value="BHRINDAVAN EXPRESS">BHRINDAVAN  
EXPRESS</option>  
                </select> &nbsp; &nbsp; &nbsp; &nbsp;  
                Coach Numbers:  
                <select  id="cn" class="n">  
                    <option value="Select">Select Coach</option>  
                    <option value="AC">AC</option>  
                    <option value="Sleeper">Sleeper</option>  
                    <option value="1A">1A</option>  
                    <option value="1B">1B</option>  
                    <option value="1C">1C</option>  
                    <option value="2A">2A</option>  
                    <option value="2B">2B</option>  
                    <option value="2C">2C</option>  
                </select>  
  
                <br> <br>  
                Date: <input type="date" id="date" class="n">  
                <br><br>  
                Timing: <input type="text" id="time" placeholder="-" class="n">  
                <br><br>  
                Gender:  
                <select id="gender" class="n">  
                    <option value="Male">Male</option>  
                    <option value="Female">Female</option>  
                </select>  
                &nbsp; &nbsp; &nbsp; &nbsp;  
                Count: <input type="text" id="count" class="n" vlaue="0" 
style="width: auto;">  
                <br> <br>  
                <input type="submit" value="Submit" onclick="ac()"> &nbsp; &nbsp; 
&nbsp;  
&nbsp;   
                <input type="reset" value="Reset" onclick="reset()">  
            </div>  
  
  
            <div id="ac" style="display: none;">  
                <div id="div1" style="display: none;">  
                    <p>tickets available</p>  
                </div>  
                <div id="div2" style="display: none; ">  
                    <p>tickets not available</p>  
                </div>  
            </div>  
  
        </div>   
    </div>  
  
      
  
    <script>  
        function booking()  
        {  
            var p = document.getElementById("content").style.display = "none";  
            var b = document.getElementById("book").style.display = "block";  
            var b = document.getElementById("ac").style.display = "none";  
            //p.innerHTML = "hello";  
        }  
  
        function ac()  
        {  
            var p = document.getElementById("content").style.display = "none";  
            var b = document.getElementById("ac").style.display = "block";   
            var b = document.getElementById("book").style.display = "none";    
  
            let randomChoice = Math.random() < 0.5 ? 1 : 2;  
            console.log(randomChoice);  
  
            if(randomChoice == 1)  
            {  
                document.getElementById("div1").style.display = "block";  
                document.getElementById("div2").style.display = "none";  
            }  
            else  
            {  
                document.getElementById("div1").style.display = "none";  
                document.getElementById("div2").style.display = "block";  
                  
            }  
        }  
  
        function home()  
        {  
            var p = document.getElementById("content").style.display = "block";  
            var b = document.getElementById("book").style.display = "none";  
            var b = document.getElementById("ac").style.display = "none";   
        }  
  
        function reset()  
        {  
            document.getElementById("from").value = "";  
            document.getElementById("to").value = "";  
            document.getElementById("train name").value = "";  
            document.getElementById("cn").value = "";  
            document.getElementById("date").value = "";  
            document.getElementById("time").value = "";  
            document.getElementById("gender").value = "";  
            document.getElementById("count").value = "";  
        }  
  
    </script>  
</body>  
</html> 
