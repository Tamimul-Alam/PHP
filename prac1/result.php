<?php
$validatename="";
$validatename1="";
$validateemail="";
$validateradio="";
$validationpass="";
$validationnum="";
$validationdob="";
$name=$name1=$email=$number=$dob=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    $name1=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pass"];
    $number=$_REQUEST["num"];
    $dob=$_REQUEST["dob"];

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
if((strlen($_REQUEST["pass"])<8))
{
    $validationpass= "*your password must be 8 characters";

}

$number=$_REQUEST["num"];
if((strlen($_REQUEST["num"])<11))
{
    $validationnum= "*your Phone number must contain 11 numbers";
}
else
{
    $validationnum="Your Phone Number : " .$number;
}

if(isset($_REQUEST["myGender"]))
{
    $validateradio= $_REQUEST["myGender"];
}
else
{
    $validateradio= "*please select at least one radio";
}
$validationdob=$_REQUEST["dob"];
if(empty($_REQUEST["dob"]))
{
    $validationdob= "*please select your Date of Birth";   
}
else
{
    $validationdob= "Date of Birth :".$dob;
}

}