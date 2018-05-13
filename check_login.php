<?php
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: modules_page.html");
      }else {
         echo "<center><br><p style='color:red'>Your User Name or Password is invalid</p><br>";
          \header("Refresh:5; url=login.php");
echo "<img src='hourglass.gif' alt='..loading..' style='width:100px;height:100px;'>";
echo "<p style='color:blue'>----[wait for automatic redirection]----</p>";
      }
    }