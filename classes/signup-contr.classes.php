
<?php

class signupContr extends Signup {

    private $uname;
    private $email;
    private $pwd;
    private $pwdcon;

    public function __construct($uname, $email, $pwd, $pwdcon) {
        $this->uname = $uname;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdcon = $pwdcon;
    }

    public function signupUser() {
        if ($this->emptyInput() === false) {
            header("Location: ../register.php?error=emptyinput");
            exit();
        }

        if ($this->invalidUname() === false) {
            header("Location: ../register.php?error=username");
            exit();
        }

        if ($this->invalidEmail() === false) {
            header("Location: ../register.php?error=email");
            exit();
        }

        if ($this->pwdMatch() === false) {
            header("Location: ../register.php?error=passwordmatch");
            exit();
        }


        $this->setUser($this->uname, $this->email, $this->pwd);
    }

    private function emptyInput() {
        $result;
        if (empty($this->uname) || empty($this->email) || empty($this->pwd) || empty($this->pwdcon)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function invalidUname() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uname)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function pwdMatch() {
        $result;
        if ($this->pwd !== $this->pwdcon) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


}