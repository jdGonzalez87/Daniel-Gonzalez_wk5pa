<?php
session_start();

$stored_name = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : "No cookie found";
$stored_dob = isset($_SESSION['user_dob']) ? $_SESSION['user_dob'] : "No session found";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Name Wk 5 Performance Assessment</title>
</head>
<body>

<h2>Stored Data</h2>

<p>The Name in the Cookie is: <?php echo $stored_name; ?></p>
<p>The Birthdate in the Session is: <?php echo $stored_dob; ?></p>

<br>
<a href="data_entry.php">Back to Data Entry Page</a>

</body>
</html>
