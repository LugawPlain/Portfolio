<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Time Page</title>
    <meta http-equiv="refresh" content="5"> <!-- Refresh the page every 5 seconds -->
</head>
<body>
    <div>
        <h1>Current Date and Time:</h1>
        <?php
            date_default_timezone_set('Asia/Manila');
            echo "<p>" . date('Y-m-d H:i:s') . "</p>"; // Display current date and time
        ?>
    </div>
</body>
</html>
