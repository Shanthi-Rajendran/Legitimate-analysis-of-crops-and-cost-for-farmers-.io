<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$c=$_POST['s_crop'];
$q=$_POST['quantity'];
$sql = "SELECT price,s_crop FROM selling where s_crop='$c'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<center>";
        echo "<p style='color:blue'>-----CURRENT GOVERNMENT PRICE-----<p><br>";
        $rate=$row["price"]*$q;
        echo "<table><tr><td>Crop name:</td><td>".$row["s_crop"]."</td></tr><tr><td>1KG cost:</td><td>".$row["price"]."</td></tr><tr><td>Total cost:</td><td>RS.".$rate."</td></tr></table>";
    echo "<img src='default.gif' alt='..loading..' style='width:100px;height:100px;'><br>";
echo "<p style='color:blue'>----[wait for automatic redirection]----</p><br>";
     header('Refresh:5; url=selling module.html');   
    }
} else {
 echo "0 results";
}
$conn->close();
