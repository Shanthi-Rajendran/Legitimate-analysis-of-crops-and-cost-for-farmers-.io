<?php
define('DB_NAME','database');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$value=$_POST['fname'];
$value1=$_POST['lname'];
$value2=$_POST['gender'];
$value3=$_POST['bday'];
$value4=$_POST['age'];
$value5=$_POST['phone'];
$value6=$_POST['district'];
$value7=$_POST['passcode'];
$check_pass=$_POST['cpassword'];
$sec=$_POST['security_question'];
$se=$_POST['security_answer'];
$c=$value." ".$value1;
if($value7==$check_pass)
{
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link)
{
die('Could not connect:'.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected)
{
die('cant use'.DB_NAME.':'.mysql_error());
}
echo "<div style='font:14 Arial,sans-serif;color:#ff0000;'>";
echo "<center >ACCOUNT CREATION SUCCESSFULL!!!<br><hr></center>";
echo "HI ".$value.",<br>";
echo"Thanks for joining hands with us..<br>";
echo "<center><table>";
     echo "<tr><td colspan=2>-PLEASE NOTE THE FOLLOWING DETAILS TO LOGIN-</td></tr><br>";
     echo "<tr><td>USERNAME:</td>";
     echo "<td>".$c."</td><br></tr>";
      echo "<tr><td>YOUR PASSWORD:</td>";
     echo "<td>".$value7."</td>";
     echo "<br>";
     echo "</tr>";
     echo "</table><br>...Welcome you PROUD FARMER...";
     echo "</div>";
    echo "<center><br><img src='default.gif' alt='..loading..' style='width:80px;height:80px;'><br>";
    echo "<p style='color:blue'>....LOADING....<br>----[wait for automatic redirection]----</p><br>";

$sql = "INSERT INTO admin (fname,lname,gender,bday,age,phone,district,username,passcode,security_question,security_answer) VALUES ('$value','$value1','$value2','$value3','$value4','$value5','$value6','$c','$value7','$sec','$se')";
if(!mysql_query($sql))
{
die('Error:'.mysql_error());
}
\header("Refresh:10; url=start.php");
exit;
}
else
{
header('Refresh:5; url=new_acc.php');
echo "<center>";
echo "<br><br><br><br><br><div style ='font:6 Arial,sans-serif;color:#ff0000;'>ALERT!!!!!!!!!!:YOUR PASSWORD DOESNT MATCH<br></div>";
echo "<img src='default.gif' alt='..loading..' style='width:100px;height:100px;'><br>";
echo "<p style='color:blue'>----[wait for automatic redirection]----</p><br>";

}
exit();
   