<?php
// connect to the database
include "dbconnect.php";
$sql = "SELECT * FROM files";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $chaptername = $_POST['chaptername'];
    $mangalink = $_POST['mangalink'];
    $manganame = $_POST['manganame'];
    $cpass ="";
    $img = "";
    if (isset($_POST['img'])) {
        $img = $_POST['img'];
    }
    $type = $_POST['type'];
    $type = "";
    if (isset($_POST['type'])) {
        $type = $_POST['type'];
    }

    if (isset($_POST['cpass'])) {
        $cpass = $_POST['cpass'];
    }
    
    echo $chaptername.$manganame.$mangalink.$img;
    
       
       
            $sql = "INSERT INTO files (img, manganame, mangalink, chaptername , type , cpassword) VALUES ('$img', '$manganame', '$mangalink', '$chaptername' , '$type' , '$cpass')";
            
            // mysqli_query($conn, $sql) or die(mysqli_error($conn));
            
            if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
                echo "<script>alert('File uploaded successfully')</script>";
                echo "<script>window.location.href = '/index.php'</script>";
                
            }
} else {
   
    echo $conn->error;
}
    






// Downloads files
// if (isset($_GET['file_id'])) {
//     $id = $_GET['file_id'];

//     // fetch file to download from database
//     $sql = "SELECT * FROM files WHERE id=$id";
//     $result = mysqli_query($conn, $sql);

//     $file = mysqli_fetch_assoc($result);
//     $filepath = 'uploads/' . $file['name'];

//     if (file_exists($filepath)) {
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename=' . basename($filepath));
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize('uploads/' . $file['name']));
//         readfile('uploads/' . $file['name']);

//         // Now update downloads count
//         $newCount = $file['downloads'] + 1;
//         $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
//         mysqli_query($conn, $updateQuery);
//         exit;
        
//     }

// }