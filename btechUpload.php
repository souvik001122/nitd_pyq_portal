<?php
include "upload.php";
include "database.php";

// To Upload PDF File in Database at btech table...

// To check "localhost/website/database.php"

// Check if the form was submitted...
if(isset($_POST['submit'])) 
{
    // Check if a file was selected...
    if(empty($_FILES["pdfFile"]["name"])) 
    {
        // echo "Error: Please choose a file to upload!";
        echo '<script>alert("Please choose a file to upload !");</script>';
    } 
    else 
    {
        // Check if a file was uploaded...
        if($_FILES["pdfFile"]["error"] == 4) 
        {
            // echo "Error: Please choose a file to upload!";
            echo '<script>alert("Please choose a file to upload !");</script>';
        } 
        else 
        {
            $targetDir = "btech/";
            $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            
            // Check if file is a PDF and less than 5MB ...
            if($fileType != "pdf" || $_FILES["pdfFile"]["size"] > 5000000) 
            {
                // echo "Error : ";
                if($fileType != "pdf") 
                {
                    // echo "Only PDF files are allowed to upload! ";
                    echo '<script>alert("Only PDF files are allowed to upload !");</script>';
                }
                if($_FILES["pdfFile"]["size"] > 5000000) 
                {
                    // echo "File size must be less than 5MB!";
                    echo '<script>alert("File size must be less than 5MB !");</script>';
                }
            } 
            else 
            {
                // Move uploaded file to uploads folder ... 
                if(move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) 
                {
                    $filename = $_FILES["pdfFile"]["name"];
                    $folder_path = $targetDir;
                    // $time_stamp = date('Y-m-d H:i:s');
                    $sql = "INSERT INTO btech (filename, folder_path) VALUES ('$filename', '$folder_path')";

                    if($con -> query($sql) === TRUE) 
                    {
                        echo '<script>alert("File uploaded successfully !");</script>';
                    } 
                    else 
                    {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }
                } 
                else 
                {
                    // echo "Error uploading File !";
                    echo '<script>alert("Error uploading File !");</script>';
                }
            }
        }
    }
} 

// else {
//     // Display the form
//     echo "<form action='' method='post' enctype='multipart/form-data'>
//             Select PDF file to upload:
//             <input type='file' name='pdfFile' id='pdfFile'>
//             <input type='submit' value='Upload PDF' name='submit'>
//           </form>";
// }

$con->close();
?>
