<?php
include 'database.php';

// Email check logic for AJAX request
if (isset($_POST['check_email'])) {
    $email = mysqli_real_escape_string($con, $_POST['check_email']);
    $email_check_query = "SELECT * FROM consumer WHERE Email = '$email' LIMIT 1";
    $result = mysqli_query($con, $email_check_query);
    $existing_user = mysqli_fetch_assoc($result);

    if ($existing_user) {
        echo 'exists'; // Email already exists
    } else {
        echo 'available'; // Email is available
    }
    exit(); // Exit after handling the AJAX request
}

// Form submission logic for handling user data (when the form is submitted)
if (isset($_POST['submit'])) {
    // Retrieve and sanitize input data to prevent SQL injection
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $des = mysqli_real_escape_string($con, $_POST['des']);

    // Check if email already exists before inserting the record
    $email_check_query = "SELECT * FROM consumer WHERE Email = '$email' LIMIT 1";
    $result = mysqli_query($con, $email_check_query);
    $existing_user = mysqli_fetch_assoc($result);

    if ($existing_user) {
        // If email already exists, display an error message
        echo "<script>alert('Email is already registered! Please use a different email.');</script>";
    } else {
        // SQL query to insert the new user data
        $sql = "INSERT INTO consumer (Name, Email, Password, DOB, Gender, Phone_Number, College_Name, Course, Branch, Year, Description) 
                VALUES ('$name', '$email', '$password', '$dob', '$gender', '$phone', '$college', '$course', '$branch', '$year', '$des')";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Successfully Registered!');</script>";
            // Redirect to the desired page after successful submission
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 20);</script>";
        } else {
            echo "<script>alert('Error: Could not insert record.');</script>";
        }
    }
}
?>
