<?php
include('config/app.php');
include('codes/authentication.php');


?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            font-weight: bold;
            color: #555;
        }
        
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        
    </style>

 </head>
 <body>
    <div class="container">
      <?php  include_once('message.php');  ?>
        <h1>Sign Up</h1>
        <form action="" method = "POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="fullname" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" id="name" name="email" placeholder="Enter your Email Address" required>
            </div>
            <div class="form-group">
                <label for="name">Location</label>
                <input type="text" id="name" name="location" placeholder="Enter your Location" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="tel" id="number" name="phonenumber"placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" id="password" name="cpassword" placeholder="Enter your password" required>
            </div>
            
            
            
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
