<?php
if(isset($_POST["submit"])){

    $uname=$_POST["username"];
    $email=$_POST["email"];
    $pwd=$_POST["password"];
    $pwdcon=$_POST["passwordCon"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup=new signupContr($uname,$email,$pwd,$pwdcon);
    $signup->signupUser();
    header ("location: ../index.php?error=none");

}



    ?>