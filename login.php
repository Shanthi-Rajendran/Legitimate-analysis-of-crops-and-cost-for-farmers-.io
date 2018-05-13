<html>
<head>
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>login_page</title>
</head>
<style>
    body{
     background-image: url("login.jpg");
            background-repeat: no-repeat;
            background-size: cover;
    }
    a{
        color:whitesmoke;
        text-decoration: none;
    }
    </style>
<body>
    <form action="check_login.php" method="post">    
    <table class="box">
        <tr><td colspan="2"><center>SIGN_IN<hr></center><td><tr>
            <tr>
                <td><center>USERNAME:</td>
                <td><center>
                    <input type="text" placeholder="Enter Username" name="username" required>
                </td>
            </tr>
             <tr>
                <td><center>PASSWORD:</td>
                <td><center>
                    <input type="password" placeholder="Enter Password" name="password" required>
                </td>
            </tr>
            <tr><td colspan="2"><center>
             <button type="submit"> Login </button></td>
             </tr>
             <tr><td colspan="2" align='right'><a href="forget.html">Forget password?</a></td></tr>
             <tr>
                <td colspan="2"><center>or<br>
                    <a href="new_acc.php">---Create new account---</a>
                </td>
            </tr><br><br>
             <tr>
                <td colspan="2"><center>
                    <a href="start.php">---home---</a>
                </td>
            </tr>
    </table>
    </form>
       </body>
       </html>
