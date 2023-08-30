<?php
$uploadDir = 'Media/';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $imageFile = $_FILES["image"];
    $uploadPath = $uploadDir . basename($imageFile["name"]);
    
    if (move_uploaded_file($imageFile["tmp_name"], $uploadPath)) {
        echo "<p>Image uploaded successfully!</p>";
    } else {
        echo "<p>Failed to upload image.</p>";
    }
}

$uploadedImages = scandir($uploadDir);
$uploadedImages = array_diff($uploadedImages, array('.', '..'));

foreach ($uploadedImages as $image) {
    echo "<img src='$uploadDir$image' alt='Uploaded Image' width='200'>";
}
?>
