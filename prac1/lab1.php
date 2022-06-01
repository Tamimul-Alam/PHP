<?php include "result.php"; ?>
<html>
    <body>
        <h1>Login Form</h1>
        <form action="" method="post">
            <table>
                
            <tr>
            <td>First Name :</td>
            <td><input type="name" name="fname"><?php echo $validatename; ?></td>
            </tr>
            <tr>
            <td>Last Name :</td>
            <td><input type="name" name="lname"><?php echo $validatename1; ?></td>
            </tr>
            <tr>
            <td>Gender :</td>
            <td>
            Male <input type="radio" name="myGender">
            female <input type="radio" name="myGender">
            Other <input type="radio" name="myGender">
            <?php echo $validateradio; ?>
            </td> 
            
            </tr>
            <tr>
            <td>Date of birth :</td>
            <td><input type="date" name="dob"><?php echo $validationdob; ?></td>
            </tr>
            <tr>
            <td>Email :</td>
            <td><input type="email" name="email"> <?php echo $validateemail; ?></td>
            </tr>
            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass"><?php echo $validationpass; ?></td>
            </tr>
            <tr>
            <td>Phone(optinal):</td>
            <td><input type="tel" name="num"><?php echo $validationnum; ?></td>
            </tr>
            <tr>
            <td>Address :</td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td>Attach Docs:</td>
            <td><input type="file"></td>
            </tr>
            <tr>
            <td>
            <input type="reset" value="Reset"> 
            <input type="submit" value="Submit">
            </td>
            </tr>
            
            
               
</table>
</form>
</body>
    </html>