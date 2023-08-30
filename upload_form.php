<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload Images</h2>
    <form method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <input type="submit" value="Upload">
    </form>
    
    <h2>Uploaded Images</h2>
    <div id="uploaded-images">
        <?php include("upload.php"); ?>
    </div>
</body>
</html>
