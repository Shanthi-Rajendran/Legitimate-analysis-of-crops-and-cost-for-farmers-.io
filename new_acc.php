<!DOCTYPE html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="UTF-8">
        <title>new_user</title>
    </head>
    <style>
    body{
     background-image: url("login.jpg");
            background-repeat: no-repeat;
            background-size: cover;
    }
    a{
        color: whitesmoke;
        text-decoration: none;
    }
    
    </style>
    
    <form action="n_login_action.php" method="post" autocomplete="off"/>
    
            <table class="box">
                <div style="overflow-y:scroll; height:100%">
                <tr><td colspan="2"><center>SIGN_UP<hr></center><td></tr>
                <tr>
                    <td>
                        FIRST NAME:
                    </td>
                    <td><input type="text" placeholder="Enter first name" name="fname" required></td>
                </tr>
                <tr>
                    <td>
                        LAST NAME:
                    </td>
                    <td><input type="text" placeholder="Enter last name" name="lname" required></td>
                </tr>
                <tr>
                    <td>
                        GENDER:
                    </td>
                    <td><input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other </td>
                </tr>
                <tr>
                    <td>
                       DATE OF BIRTH:
                    </td>
                    <td>
                        <input type="date" name="bday" min="1000-01-02" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        AGE(between 18 and 100):
                    </td>
                    <td>
                        <input type="number" name="age" min="18" max="100" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        PHONE NUMBER:
                    </td>
                    <td>
                        <input type="tel" name="phone" placeholder=7582-221434  maxlength="10" required>
                    </td>
                </tr>
                <tr>
                <td>
            SELECT YOUR DISTRICT:
                 </td>
                 <td>
                     <select name="district">
                        <option value="Ariyalur" selected>Ariyalur</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Coimbatore" >Coimbatore</option>
                        <option value="Cuddalore">Cuddalore</option>
                        <option value="Dharmapuri">Dharmapuri</option>
                        <option value="Dindigul" >Dindigul</option>
                        <option value="Erode">Erode</option>
                        <option value="Kanchipuram">Kanchipuram</option>
                        <option value="Karur" >Karur</option>
                        <option value="Krishnagiri">Krishnagiri</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Nagapattinam" >Nagapattinam</option>
                        <option value="Nagercoil">Nagercoil</option>
                        <option value="Namakkal">Namakkal</option>
                        <option value="Perambalur" >Perambalur</option>
                        <option value="Pudukkottai">Pudukkottai</option>
                        <option value="Ramanathapuram">Ramanathapuram</option>
                        <option value="Salem" >Salem</option>
                        <option value="Sivagangai">Sivagangai</option>
                        <option value="Thanjavur">Thanjavur</option>
                        <option value="Theni" >Theni</option>
                        <option value="Thiruvallur">Thiruvallur</option>
                        <option value="Thiruvarur">Thiruvarur</option>
                        <option value="Thoothukudi" >Thoothukudi</option>
                        <option value="Tiruchirappalli">Tiruchirappalli</option>
                        <option value="Tirunelveli">Tirunelveli</option>
                        <option value="Tiruppur" >Tiruppur</option>
                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                        <option value="Ooty">Ooty</option>
                        <option value="Vellore" >Vellore</option>
                        <option value="Vilupuram">Vilupuram</option>
	  <option value="Virudhunagar">Virudhunagar</option>
                      </select>
                 </td>
            </tr>
            <tr>
                <td>
                    SELECT A SECURITY QUESTION:
                </td>
                <td>
                   <select name="security_question">
                       <option value="Name of town where you were born" selected>Name of town where you were born</option>
                       <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                       <option value="What is your favorite movie?">What is your favorite movie?</option>
                       <option value="What was the name of the hospital where you were born?">What was the name of the hospital where you were born?</option>
                       <option value="In what town was your first job?">In what town was your first job?</option>
                       <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                </td>
            </tr>
            <tr>
                <td>
                   SECURITY ANSWER:
                </td>
                <td>
                   <input type="text" placeholder="Enter security answer" name="security_answer" required>
                </td>
            </tr>
            
            <tr>
                <td>PASSWORD:</td>
                <td><input type="password" name="passcode" required>
                </td>
            </tr>
            <tr>
                <td>CONFIRM PASSWORD:</td>
                <td><input type="password" name="cpassword" required></td>
            </tr>
            <tr>
                <td colspan="2"><center>
  <button type="reset" value="Reset">Reset</button><button type="submit" value="Submit">Submit</button>
            </tr>
            <tr></tr>
            <tr>
                <td colspan="2"><center>or<br>
                    <a href="login.php">---I already have an account!!!---</a>
                </td>
            </tr>
            <br><br>
             <tr>
                <td colspan="2"><center>
                    <a href="start.php">---home---</a>
                </td>
            </tr>
            </table>
        </div>
        </form>
    </body>

