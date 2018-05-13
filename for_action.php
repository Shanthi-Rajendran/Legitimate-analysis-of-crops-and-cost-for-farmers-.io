<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "database";
$a=$_POST['user'];
$b=$_POST['phone'];
$c=$_POST['question'];
$d=$_POST['answer'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM admin WHERE username='$a' and phone='$b' and security_question='$c' and security_answer='$d'";
if (mysqli_query($conn, $sql)) {
{

  echo "<center><table>";
     echo "<tr><td colspan=2><p style='color:red'>-YOUR ACCOUNT HAS BEEN SUCCESSFULLY DELETED-</td></tr><br>";
     echo "<tr><td colspan=2><p style='color:green'>PLEASE CREATE NEW ACCOUNT</td>";
    echo "<center><br><img src='default.gif' alt='..loading..' style='width:80px;height:80px;'><br>";
    echo "<p style='color:blue'>....LOADING....<br>----[wait for automatic redirection]----</p><br>";
    header('Refresh:5; url=start.php');
}
}
else {
    echo "Error deleting record: " . mysqli_error($conn);
    header('Refresh:5;url=forget.html');
}
mysqli_close($conn);
