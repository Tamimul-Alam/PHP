<?php include "control/result.php"; ?>
<html>
    <body>
        <h1>Registration Form</h1>
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
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
            <td>Designation :</td>
            <td>
            Junior programmer <input type="radio" name="myGender">
            Senior Programmer <input type="radio" name="myGender">
            Project Lead <input type="radio" name="myGender">
            <?php echo $validateradio; ?>
            </td> 
            </tr>
            <tr>
             <td>Preffered Language :</td>
             <td>
             JAVA<input type="checkbox" name="java">
             PHP<input type="checkbox" name="php">
             C++<input type="checkbox" name="cpp"> 
             <?php echo $validationcb; ?>           
            </td>   
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
            <td>Please choose a file:</td>
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