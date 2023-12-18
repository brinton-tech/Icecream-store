<?php

class LoginController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function userLogin($email,$password)
    {
        $checkLogin = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1";
        $result = $this->conn->query($checkLogin);
        if($result->num_rows >0){
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;

        }else{
            return false;
        }
    }

    public function userAuthentication($data)
    {
        $_SESSION['authentication'] = true;
        // $_SESSION['auth_role'] =$data['role_as'];
        $_SESSION['auth_user'] = [
            'user_id' =>$data['id'],
            'user_fullname' =>$data['fullname'],
            'user_email' =>$data['email'],
            'user_location' =>$data['location'],
            'user_phonenumber' =>$data['phonenumber'],
            

        ];
    }
}







?>