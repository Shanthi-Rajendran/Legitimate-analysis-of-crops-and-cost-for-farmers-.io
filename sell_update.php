<?php
define('DB_NAME','login');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
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
if(isset($_POST['s1']))
{
$a1=$_POST['s_crop'];
$a2=$_POST['price'];
{
    if($a2==NULL || $a2=NULL)
    {
        echo "<center><p style='color:red;'>ERROR:You failed to enter either crop name or price<br>INSERTION FAILED!!!</p>";
    }
else{
$sql = "INSERT INTO selling (s_crop,price) VALUES ('$a1','$a2')";
if(!mysql_query($sql))
{
die('Error:'.mysql_error());
}
 else {
echo("updated sucessfully");    
echo "crop:$a1";
echo "price:$a2";
}
}
}
}
if(isset($_POST['s2']))
{  
$a1=$_POST['s_crop'];
$a2=$_POST['price'];
mysqli_query($sql,"update selling set price='$a2' where s_crop=''");
if(!mysql_query($sql))
{
die('Error:'.mysql_error());
}
 else {
echo("value update successfull");    
echo "crop:$a1<br>";
echo "price:$a2<br>";
}
}
if(isset($_POST['s3']))
{ 
    echo "<center>";
    $a1=$_POST['s_crop'];
if($a1==NULL)
{
    echo "<p style='color:red;'>ERROR:You failed to enter crop name<br>DELETION FAILED!!!<br>";  
}
 else {
 $q="SELECT * from selling where s_crop='$a1'";
 $result=mysql_query($q);
$count=mysql_num_rows($result);
if($count>=1){
$sql ="DELETE FROM selling WHERE s_crop='$a1'";
if(!mysql_query($sql))
{
die('not found in database'.mysql_error());
}
 else {
echo("Deleted successfully");    
echo "Deleted crop:$a1";
}
}

else {
    echo "$a1 NOT FOUND in database<br>";
    }
}
}
\header("Refresh:5; url=admin_page.html");
echo "<img src='hourglass.gif' alt='..loading..' style='width:100px;height:100px;'>";
echo "<p style='color:blue'>----[wait for automatic redirection]----</p>";
exit();
   
