<?php
session_start();
$passwords = array("admin"   =>"pass1234");
                   
if ($passwords){
    setcookie("username",  time()+1200);

}else{
    setcookie("username", "", time()-3600);
    echo "<H2>Invalid user name or password: access denied.</H2>";
}

if(isset($_POST["submitButton"])){
    header('home.php');
}
?>