<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$passed = sha1($pass);
$salt = rand(0,1000000000000000000);
$verify = $passed . $salt;
$real = sha1($verify);
/* Above is login salted, below is pre-set pass salt*/
$check = sha1("password");
$check_real = sha1($check . $salt);
if($user == "admin"
&& $check_real == $real)
{
        include("../secure.html");
}
else
{
echo "Wrong pass";
}
?>