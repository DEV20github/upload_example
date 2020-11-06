<?php
$username = $_POST['username'];
$f = $_FILES['myfile'];
echo "Hello dear user, $username";
echo "</br>";
echo "File Name: ".$f['name'];
echo "</br>";
echo " File Type: ".$f['type'];
echo "</br>";
echo " File Size: ".$f['size'];

if (file_exists("photos/".$f['name'])) {
    echo $f['name']." already exists";
}
elseif ($f['type']=="image/jpeg") {
    move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
}
else
echo"File format is not valid, unable to upload";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded</title>
</head>
<body>
    <h4>Your file is uploaded successfully.</h4>
     <button><a href="home.html">Home Page</a></button>
</body>
</html>