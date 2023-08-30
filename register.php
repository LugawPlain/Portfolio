<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = checkInput($_POST["name"]);
    $email = checkInput($_POST["email"]);
    $password = checkInput($_POST["password"]);
    
    $errors = [];

    function checkInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    
    if (strlen($name) < 3) {
        $errors[] = "Name should be at least 3 characters long.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password should be at least 6 characters long.";
    }
    
    if (empty($errors)) {
        $success = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
</head>
<body>
    <?php if (!empty($errors)) : ?>
        <h2>Error(s) occurred:</h2>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($success)) : ?>
        <h2><?php echo $success; ?></h2>
    <?php endif; ?>
        <a href="Projects.html"><h2>Back</h2></a>
</body>
</html>
