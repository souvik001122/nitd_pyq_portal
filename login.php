<?php
// Start session to manage user login state
session_start();

// Include the database connection file
include 'database.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Sanitize and retrieve input data
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Query the database to find a user with the entered email
    $query = "SELECT * FROM consumer WHERE Email = '$email' AND password='$password'";
    $result = mysqli_query($con, $query);
    //$user = mysqli_fetch_assoc($result);
    $user=mysqli_num_rows($result);

    if ($user==1) {
        // Verify the password entered by the user
        // if (password_verify($password, $user['Password'])) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['Email'];

            // Redirect to the homepage or dashboard
            header('Location: index.php'); // Change this to your homepage or dashboard
            exit();
        //  
    } else {
        // No user found with the entered email
        echo "<script>alert('Invalid Credentials.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - NIT Delhi PYP</title>
    <style>
        /* Add your styling here for the login page */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3498db, #8e44ad);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #3498db;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    
    <form method="POST" action="login.php">
        <!-- Email Input -->
        <input type="email" name="email" placeholder="Enter Your Email" required><br>
        
        <!-- Password Input -->
        <input type="password" name="password" placeholder="Enter Your Password" required><br>
        
        <!-- Submit Button -->
        <input type="submit" name="submit" value="Login">

        <p>Don't have an account? <a href="signUp.html">Sign Up</a></p>
    </form>
</div>

</body>
</html>
