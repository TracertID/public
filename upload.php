<?php
$target_dir = "uploads/";
$kode = $_GET['kode'];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "<h1 align=center>Sorry, your file is too large.</h1>\r\n";
    $uploadOk = 0;
}

// Check Kode
if ($kode != 5307) {
    echo "<h1 align=center>Sorry, How are you?.</h1>\r\n";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<h1 align=center>Your file was not uploaded.</h1>\r\n";
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header('Location: ../public');
    } else {
        echo "<h1 align=center>Sorry, there was an error uploading your file.";
    }
}
?>
