<?php
class login extends Dbh{ 

    protected function getUser($email,$pwd){
        $stmt = $this->connect()->prepare('SELECT user_password FROM users WHERE user_email=? ');

        if(!$stmt->execute(array($email, $pwd))){
            $stmt=null;
            header("location ../index.php ?error=stmtfaild");
            exit();
    }
    $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($loginData ) == 0) {
                $stmt = null;
                header("location: index.php?error=usernotfound");
                exit();
    }
    return $profileData;

    $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPwd=password_verify($pwd,$pwdHashed[0]["user_password"]);
    $stmt->execute(array($user_name, $user_email, $pwdHashed[0]['user_pwd']));

    if($checkPwd==false){
        $stmt=null;
        header("location ../index.php?error=wrongpassword");
        exit();
    }
    elseif($checkPwd==true)
    {
        $stmt = $this->connect()->prepare('SELECT user_password FROM users WHERE user_email=? ');

        if(!$stmt->execute(array($email, $pwd))){
            $stmt=null;
            header("location ../index.php ?error=stmtfaild");
            exit();

        }
           $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($loginData ) == 0) {
            $stmt = null;
            header("location: index.php?error=usernotfound");
            exit();
            }
            return $profileData;

            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['user_id']=$user["user_id"];
            $_SESSION['user_name']=$user["user_name"];
            $_SESSION['user_email']=$user["user_email"];
            $_SESSION['user_password']=$user["user_password"];
            $_SESSION['user_role']=$user["user_role"];
            $_SESSION['created_at']=$user["created_at"];
             $stmt=null;


    }


    $stmt=null;

}

}


?>
