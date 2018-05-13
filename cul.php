<html>
<style>
body {
    background-image: url("c_main_bg.jpg");
     background-repeat: no-repeat;
     background-size: cover;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    
}
a{
    color:white;
    color: white;
    background: rgba(0,0,0,0.5);
    text-decoration: none;
    text-shadow: 2px 2px 2px black;
}
</style>
    <body>
        <h1>REPORT</h1>
<?php
$s = $_POST['soil'];
$c = $_POST['crop']; 
if(empty($c))//if soil is empty
{
echo "SORRY!!Please fill your desired crop name";

}
else {
   
if ( (strcasecmp( $s, "Alluvial" ) == 0 )&&(strcasecmp( $c, "jute" ) == 0))
{ $image = "JUTE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
 echo "Cultivation of Jute in Alluvial Soil is possible.<br>
    Required temperature:22®C-35®C.<br>
    Required amout of rainfall:120cm-150cm.";
   
}
elseif ((strcasecmp( $s, "Alluvial" ) == 0) && (strcasecmp( $c, "wheat" ) == 0))
{
    $image = "WHEAT.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Wheat in Alluvial Soil is possible.<br>
Required temperature:21®C-26®C.<br>
Required amout of rainfall:75cm-100cm.";
   
}
elseif ((strcasecmp( $s, "Alluvial" ) == 0) && (strcasecmp( $c, "rice" ) == 0))
{
     $image = "RICE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
    echo "Cultivation of  in Alluvial Soil is possible.<br>
    Required temperature:22®C-32®C.<br>
    Required amout of rainfall:150cm-300cm.";
  
}
elseif ((strcasecmp( $s, "Alluvial" ) == 0) && (strcasecmp( $c, "sugarcane" ) == 0))
{$image = "SUGARCANE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
    echo "Cultivation of Sugarcane in Alluvial Soil is possible.<br>
    Required temperature:21®C-27®C.<br>
    Required amout of rainfall:75cm-150cm.";
   
}
elseif ((strcasecmp( $s, "Alluvial" ) == 0) && (strcasecmp( $c, "cotton" ) == 0))
{$image = "COTTON.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Cotton in Alluvial Soil is possible.<br>
    Required temperature:21®C-30®C.<br>
    Required amout of rainfall:50cm-100cm.";
}
elseif ((strcasecmp( $s, "Alluvial" ) == 0) && (strcasecmp( $c, "maize" ) == 0))
{$image = "MAIZE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Maize in Alluvial Soil is possible.<br>
    Required temperature:18®C-27®C.<br>
    Required amout of rainfall:60cm-110cm."; 
}
elseif ((strcasecmp( $s, "Alluvial" ) == 0) && (strcasecmp( $c, "oilseeds" ) == 0))
{$image = "oil.png";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Oilseeds in Alluvial Soil is possible.<br>
    Required temperature:20®C-30®C.<br>
    Required amout of rainfall:150cm-300cm.";
}
elseif ((strcasecmp( $s, "Black" ) == 0) && (strcasecmp( $c, "maize" ) == 0))
{$image = "MAIZE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Maize in Black Soil is possible.<br>
    Required temperature:18®C-27®C.<br>
    Required amout of rainfall:60cm-110cm."; 
}
elseif ((strcasecmp( $s, "Black" ) == 0) && (strcasecmp( $c, "wheat" ) == 0))
{
    $image = "WHEAT.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Wheat in Black Soil is possible.<br>
Required temperature:21®C-26®C.<br>
Required amout of rainfall:75cm-100cm.";
}
elseif ((strcasecmp( $s, "Black" ) == 0) && (strcasecmp( $c, "rice" ) == 0))
{
     $image = "RICE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
    echo "Cultivation of  in Black Soil is possible.<br>
    Required temperature:22®C-32®C.<br>
    Required amout of rainfall:150cm-300cm.";
  
}
elseif ((strcasecmp( $s, "Black" ) == 0) && (strcasecmp( $c, "millet" ) == 0))
{$image = "MILLET.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
      echo "Cultivation of Millet in Black Soil is possible.<br>
    Required temperature:27®C-32®C.<br>
    Required amout of rainfall:50cm-100cm.";

}
elseif ((strcasecmp( $s, "Black" ) == 0) && (strcasecmp( $c, "cotton" ) == 0))
{$image = "COTTON.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
        echo "Cultivation of Cotton in Black Soil is possible.<br>
    Required temperature:21®C-30®C.<br>
    Required amout of rainfall:50cm-100cm.";
}
elseif ((strcasecmp( $s, "Black" ) == 0) && (strcasecmp( $c, "sugarcane" ) == 0))
{$image = "SUGARCANE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
     echo "Cultivation of Sugarcane in Black Soil is possible.<br>
    Required temperature:21®C-27®C.<br>
    Required amout of rainfall:75cm-150cm.";  
}
elseif ((strcasecmp( $s, "Red" ) == 0) && (strcasecmp( $c, "cotton" ) == 0))
{$image = "COTTON.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
    echo "Cultivation of Cotton in Red Soil is possible.<br>
    Required temperature:21®C-30®C.<br>
    Required amout of rainfall:50cm-100cm.";

}
elseif ((strcasecmp( $s, "Red" ) == 0) && (strcasecmp( $c, "wheat" ) == 0))
{
    $image = "WHEAT.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Wheat in Red Soil is possible.<br>
Required temperature:21®C-26®C.<br>
Required amout of rainfall:75cm-100cm.";

}
elseif ((strcasecmp( $s, "Red" ) == 0) && (strcasecmp( $c, "rice" ) == 0))
{$image = "RICE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
    echo "Cultivation of Rice in Red Soil is possible.<br>
    Required temperature:22®C-32®C.<br>
    Required amout of rainfall:150cm-300cm.";

}
elseif ((strcasecmp( $s, "Red" ) == 0) && (strcasecmp( $c, "millet" ) == 0))
{$image = "MILLET.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
      echo "Cultivation of Millet in Red Soil is possible.<br>
    Required temperature:27®C-32®C.<br>
    Required amout of rainfall:50cm-100cm.";

}
elseif ((strcasecmp( $s, "Red" ) == 0) && (strcasecmp( $c, "sugarcane" ) == 0))
{$image = "SUGARCANE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
    echo "Cultivation of Sugarcane in Red Soil is possible.<br>
    Required temperature:21®C-27®C.<br>
    Required amout of rainfall:75cm-150cm.";
  
}
elseif ((strcasecmp( $s, "Red" ) == 0) && (strcasecmp( $c, "pulses" ) == 0))
{$image = "PULSE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Pulses in Red Soil is possible.<br>
    Required temperature:20®C-25®C.<br>
    Required amout of rainfall:40cm-45cm.";    
}
elseif ((strcasecmp( $s, "Laterite" ) == 0) && (strcasecmp( $c, "tea" ) == 0))
{
     $image = "TEA.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
   echo "Cultivation of Tea in Laterite Soil is possible.<br>
    Required temperature:20®C-30®C.<br>
Required amout of rainfall:150cm-300cm.";

}
elseif ((strcasecmp( $s, "Laterite" ) == 0) && (strcasecmp( $c, "coffee" ) == 0))
{$image = "COFFEE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
   echo "Cultivation of Coffee in Laterite Soil is possible.<br>
    Required temperature:15®C-28®C.<br>
Required amout of rainfall:150cm-250cm."; 
}
elseif ((strcasecmp( $s, "Mountain" ) == 0) && (strcasecmp( $c, "coffee" ) == 0))
{$image = "COFFEE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
  echo "Cultivation of Coffee in Mountain Soil is possible.<br>
    Required temperature:15®C-28®C.<br>
Required amout of rainfall:150cm-250cm.";    
}
elseif ((strcasecmp( $s, "Mountain" ) == 0) && (strcasecmp( $c, "tea" ) == 0))
{
    $image = "TEA.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Tea in Mountain Soil is possible.<br>
    Required temperature:20®C-30®C.<br>
Required amout of rainfall:150cm-300cm.";    
}
elseif ((strcasecmp( $s, "Mountain" ) == 0) && (strcasecmp( $c, "wheat" ) == 0))
{$image = "WHEAT.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
     echo "Cultivation of Wheat in Mountain Soil is possible.<br>
    Required temperature:21®C-26®C.<br>
Required amout of rainfall:75cm-100cm.";
   
}
elseif ((strcasecmp( $s, "Mountain" ) == 0) && (strcasecmp( $c, "maize" ) == 0))
{$image = "MAIZE.jpg";
   echo "<img src=\"$image\" style=width:304px;height:228px; /><br>";
echo "Cultivation of Maize in Mountain Soil is possible.<br>
    Required temperature:18®C-27®C.<br>
    Required amout of rainfall:60cm-110cm."; 
}
else 
{
    echo "Cultivation of $c is not possible in $s soil<br>";
}
}
?><br>
       <button onclick="window.location.href='cultivation.php'">Check another crop</button>
       <h6 style="text-align: center"><a href = "logout.php">Sign Out</a></h6>
    </body>
</html>