<html>
    <head>
        <title>
            Registration
        </title>
        <h1>User Registration</h1>
    </head>
    <body>       
        <form action="userLog.php" method="post">
            <fieldset>
            <legend><h3>Personal Information</h3></legend>
                
            <table>
               <tr>
               <td><label for="fname">First Name: </label></td>
               <td><input type="text" id="fname" name="fname" required></td>
               </tr>
                <tr>              
                <td><label for="lname">Last Name: </label></td>
                <td><input type="text" id="lname" name="fname"></td>
                </tr>
                <tr>
                <td><label for="birthday">Date Of Birth:</label></td>
                <td><input type="date" id="birthday" name="birthday"></td>
                </tr>  
               </table>

               <table>
               <tr>
                <td><label for="gend">Gender:</label></td>
                <td><input type="radio" id="mal" name="gend" value="male"><label for="mal">Male</label></td>
                <td><input type="radio" id="fmal" name="gend" value="female"><label for="fmal">Female</label></td>
                </tr>               
                </table>
               
            </fieldset>



            <fieldset><legend><h3>Contact Details</h3></legend>
            <table>
                <tr>
                    <td><label for="phn"></label>Phone Number</td>
                    <td><input type="tel" id="phn" name="phn" required></td>
                </tr>
                <tr>
                    <td><label for="add">Address:</label></td>
                    <td><textarea name="add" id="add" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="dis">District:</label></td>
                    <td><select name="dis" id="dis" required>
                         <option >Dhaka</option>
                        <option  >Narsingdi</option>
                        <option  >Gazipur</option>
                        <option  >Narayanganj</option>
                    </select></td>
                </tr>
            </table>
        
        
            </fieldset>

            <fieldset>
                <legend><h3>Account Security</h3></legend>
                <table>
                    <tr>
                        <td><label for="pass">Password:</label></td>
                        <td><input type="password" name="pass" id="pass"></td>
                    </tr>
                    
                    <tr>
                    <td><label for="Cpass">Confirm Password:</label></td>
                    <td><input type="password" name="Cpass" id="pass"></td>
                    
                    </tr>

                </table>
            </fieldset>





            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>


</html>