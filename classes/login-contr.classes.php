<?php

class loginContr extends Login{

    private $email;
    private $pwd;

    public function __constract($email,$pwd){
       $this->email=$email;
       $this->pwd=$pwd;
    }



    public function loginUser(){
        if($this->emptyInput()==false){
            header("location: ../registar.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->email,$this->pwd);

    }


    private function emptyOutput(){
        $result;
        if( empty($this->email) || empty($this->pwd)){
            $result=false;
    }else{
        $result=true;
    }
    return $result;
    }

      
}
?>