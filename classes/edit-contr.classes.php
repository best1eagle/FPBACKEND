
<?php

class EditContr extends Edit {

    private $id;
    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct($id,$name,$email,$password,$role) {
        $this->id=$id;
        $this->name=$name;  
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
    }

    public function editUser() {
        if ($this->emptyInput() === false) {
            header("Location: ../manageUsers.php?error=emptyinput");
            exit();
        }

        if ($this->invalidUname() === false) {
            header("Location: ../manageUsers.php?error=username");
            exit();
        }

        if ($this->invalidEmail() === false) {
            header("Location: ../manageUsers.php?error=email");
            exit();
        }

        if ($this->invalidRole() === false) {
            header("Location: ../manageUsers.php?error=invalidrole");
            exit();
        }


        $this-> updateUser($this->id,$this->name, $this->email, $this->password,$this->role);
    }

    private function emptyInput() {
        $result;
        if (empty($this->id) || empty($this->name) || empty($this->email) || empty($this->role)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function invalidUname() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
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

    private function invalidRole() {
        $result;
        if ($this->role !== "1" && $this->role !== "2") {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    


}