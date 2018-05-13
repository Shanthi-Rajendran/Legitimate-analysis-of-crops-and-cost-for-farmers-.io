<html>
    <head>
        <title>
         cultivation_analysis   
        </title>
    </head>
    <style>
        body{
            background-image: url("c_main_bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center; 
            font-size: 150%;
            color: white;
        }
        h1{
            background: rgba(0,0,0,0.5);
        }
        table{
            color: black;
            font-family: "verdana";
            font-size: 20px;
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
        <h1>CULTIVATION</h1><br><br><br><br><br>
    <form method="POST" action="cul.php" autocomplete="OFF" style='text-transform:uppercase'>
        <table align="center">
           
            <tr>
            <td><bold>
                SELECT YOUR SOIL TYPE:
            </td>
            <td><input type="radio" name="soil" value="Alluvial" checked/>Alluvial Soil
            <input type="radio" name="soil" value="Black"/>Black Soil
            <input type="radio" name="soil" value="Red"/>Red Soil
            <input type="radio" name="soil" value="Laterite"/>Laterite Soil
            <input type="radio" name="soil" value="Mountain"/>Mountain Soil
            </tr>
        <tr>
        <td>
                ENTER THE CROP NAME:
        </td>
        <td>
            <input type="text" name="crop"  maxlength="20" placeholder="Eg:Jute,Tea,..etc" size="35">
        </td>
        </tr>
        <tr><td></td><td><input type="reset" value="Reset"/><input type="submit" value="Submit"/></td></tr>
            </table>
    </form>
        <h4 style="text-align: center"><br><a href = "modules_page.html">Back to Cultivation/Selling</a><br><br><a href = "logout.php">Sign Out</a></h4>
    
    </body>
</html>