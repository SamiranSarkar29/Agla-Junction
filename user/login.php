<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Page</title>
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
        <h2>Login</h2>
        <form action="/login" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        </form>
        <p>Not have an account? <a href="signup.html">Sign Up Here</a></p>
    </div>
</body>
</html>
