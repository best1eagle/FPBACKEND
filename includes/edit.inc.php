<?php
if (isset($_POST['submit'])) {
        $id = $_POST['id']; 
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        include "../classes/dbh.classes.php";
        include "../classes/edit.classes.php";
        include "../classes/edit-contr.classes.php";
        $edit = new EditContr($id,$name,$email,$password,$role);
        $edit->editUser();
        header ("location: ../manageUsers.php?error=none");
    }