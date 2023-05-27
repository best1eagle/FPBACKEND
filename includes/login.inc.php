<?php

if(isset($_POST["submit"])){

    $email=$_POST["email"];
    $pwd=$_POST["password"];

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login=new loginContr($email,$pwd);
    $login->loginUser();
    header ("location: ../manageUsers.php?error=none");

}

?>



