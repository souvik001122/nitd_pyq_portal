<?php

// For connectivity with database ...
$server = "localhost";
$user = "root";
$password = "";
$database = "project";
$con = mysqli_connect($server, $user, $password, $database);
//
if(!$con)
{
    die("Error Detected !" . mysqli_error($con));
}
else
{
    // echo "Conecction Successful !";
}

// To check "localhost/project/database.php"


//
// $sql = "SELECT * FROM file_upload";
// $result = $con->query($sql);

// $con->close();

?>