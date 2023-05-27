<?php
class Edit extends Dbh {

    protected function updateUser($id, $name, $email, $password, $role) {
        $conn = $this->connect();
        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

        if (!$this->hasPermission($id)) {
            header ("location: ../manageUsers.php?error=notaddmin");
            exit();
        }
            $query = "UPDATE users SET user_name = ?, user_email = ?, user_password = ?, user_role = ? WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$name, $email,$hashedpwd, $role, $id]);
            $stmt=null;
     
    }


    private function hasPermission($id)
    {
        $query = "SELECT role FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result['role'] == 1);
    }




}


      
    
