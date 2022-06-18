<?php
$validatename="";
$validatename1="";
$validateemail="";
$validateradio="";
$validationpass="";
$validationcb="";
$name=$name1=$email=$des="";
// if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST["submission"]))
{
    $name=$_REQUEST["fname"];
    $name1=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pass"];
    
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "*you must enter first name";

}
else
{
    $validatename="First Name : " .$name;
}

$name=$_REQUEST["lname"];
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatename1= "*you must enter last name";

}
else
{
    $validatename1="Last Name : " .$name1;
}

$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}

$password=$_REQUEST["pass"];
if((strlen($_REQUEST["pass"])<6))
{
    $validationpass= "*your password must be 6 characters";

}


if(isset($_REQUEST["myGender"]))
{
    $validateradio= $_REQUEST["myGender"];
}
else
{
    $validateradio= "*please select at least one radio";
}
if(isset($_REQUEST["java"])||isset($_REQUEST["php"])||isset($_REQUEST["cpp"]))
{
    $validationcb = "Checkbox selected";
    
}
else
{
    $validationcb="*please select at least one checkbox";

}
echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"uploads/" . $_FILES["myfile"]["name"]))
{
    echo " file uploaded";
}

else
{
    echo "uploading error";
    echo $_FILES["myfile"]["error"];
}


}