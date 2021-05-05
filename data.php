<?php

$email=$_GET["emailid"];
$pass=$_GET["pass1"];

if(!empty($email) && !empty($pass))
{
    echo "<b>Email_id :: </b>".$email."<br>";
    echo "<b>Password :: </b>".$pass."<br>";
}
else
{
    echo "<b>Error occur...  </b>Fill all the feilds..!";
}

?>