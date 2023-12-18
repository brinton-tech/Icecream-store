<?php

// // include('config/app.php');
include_once('controllers/RegisterController.php');
include_once('controllers/LoginController.php');


// login controller 
if(isset($_POST['login'])){
    
    $email = validateInput($db->conn,$_POST['email']);
    $password = validateInput($db->conn,$_POST['password']);

    $auth = new LoginController;
    $checkLogin = $auth->userLogin($email, $password);
    if($checkLogin){
        redirect("Logged in successfully", "home.php");
    }
    else
    {
        redirect("Invalid Email Id or password", "login.php");
    }
}

// signup controller 
if(isset($_POST['submit']))
{

  $fullname =  validateInput($db->conn,$_POST['fullname']);
  $email =  validateInput($db->conn,$_POST['email']);
  $location =  validateInput($db->conn,$_POST['location']);
  $phonenumber =  validateInput($db->conn,$_POST['phonenumber']);
  $password =  validateInput($db->conn,$_POST['password']);
  $cpassword =  validateInput($db->conn,$_POST['cpassword']);
  

  $register = new RegisterController;
  $result_password = $register->confirmpassword($password,$cpassword);

  if($result_password)
  {
    $result_user = $register->isUserExists($email);
    if($result_user)
    {
      redirect("Already Email Exists", "index.php");
    }
    else
    {
      $register_query = $register->registration($fullname,$email,$location,$phonenumber,$password);
      if($register_query)
      {
        redirect("Resgistered Successfully","login.php");
      }
      else{
        redirect("something went wrong","signup.php");
      }
    }
  }
  else
  {
    redirect("password and confirm password Does not match", "user.php");
  }
}
