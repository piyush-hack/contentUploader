<?php
// connect to the database
include "dbconnect.php";
$sql = "SELECT * FROM filesdata";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['savemanga'])) { // if save button on the form is clicked
    // name of the uploaded file
    $description = $_POST['description'];
    $name = $_POST['name'];
    $myimage = $_POST['myimage'];
    $manganame = $_POST['manganame'];
    
       
            $sql = "INSERT INTO filesdata (name, manganame, mangaimage, description) VALUES ('$name', '$manganame', '$myimage', '$description')";
            
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }else{
                echo $conn->error;
            }
} else {
   echo "failed";
    echo $conn->error;
}
    