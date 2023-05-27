<?php

class Signup extends Dbh {

    protected function setUser($uname, $email, $pwd) {
        $conn = $this->connect();
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt = $conn->prepare('INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)');
        $stmt->execute([$uname, $email, $hashedpwd]);
        $stmt = null;
    }
    }
?>



