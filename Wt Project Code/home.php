<?php
session_start();
if(isset($_SESSION['user_id'])){
  $point=$_SESSION['user_id'];
  $urladd="logout.php";
  $npoint="Logout";
}
else{
  $point="Login";
  $urladd="Form.html";
  $npoint="Login";
}
?>
<html>

<head>
    <title>
        Homepage
    </title>
<style>
.dropbtn {
  background-color: rgb(0, 0, 0);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: 2;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.alignleft {
float:left;
}
.alignright {
float:right;
}

.dropdown-content a:hover {background-color: rgb(255, 255, 255);}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #000000;}
</style>
</head>

<body background="https://images.wallpaperscraft.com/image/fractal_lines_glare_152652_1920x1080.jpg">
    
    <hr>
        <p style="Color:white; font-size:25; text-align:left; image-resolution:1000"><a href="home.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_O9EvmdMKu3CtWz5K0scG6yObxkkGp4upWe7tM55u73xWK6Fe" height=100 width=200></a><i>“Where words leave off, music begins.”-<u>Heinrich Heine</u>.</i></p>
    <hr>
    <div>
      <div class="dropdown">
        <input type="button" class="dropbtn" value="Instrument Type">
        <div class="dropdown-content">
          <a href="StringedInstruments.html"><img src="https://www.newsservice.org/getimage.php?p=c2dpZD02NTg0NCZzaWQ9MQ==" height=150 width=200>Stringed Instruemnts</a>
          <a href="PersussionInstruments.html"><img src="https://farm3.static.flickr.com/2858/33441334052_07df10acdc_b.jpg"height=150 width=200>Percussion Instruments</a>
          <a href="WindInstruments.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSoxYYUeoySZjCc77XaBjha4SChf7fjV5kAyFb3xQ0H9tWBOrFK" height=150 width=200>Wind Instruments</a>
          <a href="ElectronicInstruments.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT-ZsjFDJ3wW8Ev1rfDaEHLGBFicd8MnoREvIx4E8J4OpqNKwIL" height=150 width=200>Electronic Instruments</a>
        </div>
      </div>
          <input class="dropbtn" id="login" type="button" onclick="location.href='<?php echo $urladd ?>'" target="_blank" value="<?php echo $point ?>" onmouseover="document.getElementById('login').value='<?php echo $npoint?>'" onmouseleave="document.getElementById('login').value='<?php echo $point?>'" style="position: absolute; right:345">
          <input class="dropbtn" type="button" onclick="location.href='RegForm.html'" target="_blank" value="Register" style="position: absolute; right:240">
          <input class="dropbtn" type="button" onclick="location.href='About.html'" target="_blank" value="About" style="position: absolute; right:152">
          <input class="dropbtn" type="button" onclick="location.href='Contact.html'" target="_blank" value="Contact" style="position: absolute; right:50">
          <!--<input class="dropbtn" type="button" onclick="" value="" style="position:Fixed;right: 100 ">-->

    </div>  
    <hr>
    <iframe width="700" height="340" src="https://www.youtube-nocookie.com/embed/ZldWzf16kFg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe align=right width="700" height="340" src="https://www.youtube-nocookie.com/embed/29EacYXQMlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <br>
    <iframe width="700" height="340" src="https://www.youtube-nocookie.com/embed/0xxeRFEP1Y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe  align= right width="700" height="340" src="https://www.youtube-nocookie.com/embed/2yXm_3dEBNA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <hr>
    <br>
    <center><iframe width="720" height="400" src="https://www.youtube-nocookie.com/embed/6i0a7RDPkM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    <hr>
</body>

</html>