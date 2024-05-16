<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['firstname']
        $lastname = $_POST['lastname']
        $create_password = $_POST['create_password']
        $confirm_password = $_POST['confirm_password']
        $email_address = $_POST['email_address']
        $phone_number = $_POST['phone_number']
        $gender = $_POST['gender']
        $address = $_POST['address']

        if(!empty($email_address) && !empty($create_password) && !is_numeric($email_address))
        {
            $query = "insert into user (firstname, lastname, create_password, confirm_password, email_address, phone_number, gender, address) values ('$firstname', '$lastname', '$create_password', '$confirm_password', '$email_address', '$phone_number', '$gender', '$address')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter Correct Credentials')</script>";
        }
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(Image/background\ image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            /* margin: 0; */
            /* padding: 0; */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            backdrop-filter: blur(10px);
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="password"], input[type="email"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #483cc4;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            color: white;
            background-color: rgb(33, 148, 64);
        }
        .bottom{
            text-align: center;
        }
    </style>
</head>
<body>
        <div class="container">
        <h2>Sign Up</h2>
        <form action="/signup" method="POST">
            <input type="text" name="firstname" placeholder="Firstname" required>
            <input type="text" name="lastname" placeholder="Lastname" required>
            <input type="password" name="create_password" placeholder="Create Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="email" name="email_address" placeholder="Email Address" required>
            <input type="number" name="phone_number" placeholder="Phone Number" required>
            <p><b>Gender:-</b></p>
            <p>Male<input type="radio" name="gender" placeholder="Male" required>
               Female<input type="radio" name="gender" placeholder="Female" required>
               Prefer not to say<input type="radio" name="gender" placeholder="Prefer not to say" required></p>
               
               <input type="text" name="address" placeholder="Address">
               <input type="submit" value="Sign Up">
        </form>
        <div class="bottom">
        <p>By clicking on the Sign Up button, you agree to our
            <a href="terms_and_condition.html">Terms and Condition</a> and <a href="privacy_policy.html">Privacy Policy</a>
        </p>
        <p>Already have an account? <a href="login.html">Login Here</a></p>
    </div>
    </div>
</body>
</html>
