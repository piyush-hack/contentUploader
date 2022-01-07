<?php
// connect to the database
include "dbconnect.php";
// $sql = "SELECT * FROM filesdata";

// $result = mysqli_query($conn, $sql);

// $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $password = $_POST['password'];
    $sql = "UPDATE filesdata SET password ='$password' WHERE id=1";
            
            // mysqli_query($conn, $sql) or die(mysqli_error($conn));
            
            if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
                echo "<script>alert('File uploaded successfully')</script>";
                echo "<script>window.location.href = '/index.php'</script>";
                
            }
} else {
   
    echo $conn->error;
}
    