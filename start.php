<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>start_page</title>
        <link rel="stylesheet" href="start.css">
        <style>
            ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background-color:rgba(0,0,0,0.3);
    text-shadow: 3px 3px 3px black;
}

li a:hover {
    background-color: #111;
}
p{
    color:#fff;
    text-shadow: 2px 2px 2px black;
}
* {box-sizing:border-box}
body {margin:0}
.mySlides {display:none}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: blue;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.text1 {
  color: #f2f2f2;
  font-size:30px;
  padding: 8px 12px;
  position: absolute;
top: 8px;
  width: 100%;
  text-align: center;
  text-shadow: 2px 2px 2px black;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text1 {font-size: 11px}
}

        </style>
    </head>
    <body>
        <div class="container">
            <video autoplay="true" loop >
                <source src="bg.mp4" video="video/mp4">
                <source src="bg.webm" type="video/webm">
                </video> 
        </div>
<div class="text">
                <h1><br>legitimate analysis of cost and crops for farmers</h1>
                <ul>
  <li><a href="#home">HOME</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="new_acc.php">SIGN UP</a></li>
  <p align="right">
      <?php
    echo "" . date("d.m.Y").",". date("l");
      ?>
  </p>
</ul>
<br><br>
   <div class="slideshow-container">

<div class="mySlides fade">
  <img src="http://hd.wallpaperswide.com/thumbs/agriculture-t2.jpg" style="width:100%">
  <div class="text1"><br><br>OUR FOCUS<br><br><br><br><br><br>
Help farmers to cultivate according to their soil type.<br>
To give information about the original value of  their crops (i.e) Govt. allocated value.<br>
Help them to avoid intermediate persons.

</div>
</div>

<div class="mySlides fade">
  <img src=http://hd.wallpaperswide.com/thumbs/serenity_7-t2.jpg style="width:100%">
  <div class="text1"><br>JOIN HANDS WITH US<br><br><br><br><br><br>
Farmers are the backbone of our nation.<br>
If you are poor then it proves our nation is literally poor.<br>
We will guide you to get what you deserve.<br><br><br>"SAY NO TO INTERMEDIATORS"
</div>
  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<p><center>2017</center><p>
</div>
    </body>
</html>

