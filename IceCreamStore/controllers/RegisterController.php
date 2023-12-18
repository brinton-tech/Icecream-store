<?php
// include('config/app.php');
class Registercontroller
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function registration($fullname,$email,$location,$phonenumber,$password)
    {
        $register_query = "INSERT INTO user (fullname,email,location,phonenumber,password) VALUES('$fullname', '$email','$location','$phonenumber','$password')";
        $result = $this->conn->query($register_query);
        return $result;
    }
    public function isUserExists()
    {

        $checkUser = "SELECT email FROM  user WHERE email = '$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    public function confirmpassword($password,$cpassword)
    {
        if($password == $cpassword){
            return true;


        }else{
            return false;
        }
    }

}

?>