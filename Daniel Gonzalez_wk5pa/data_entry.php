<?php
session_start();

// If form submitted, store values
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];

    // Store name in cookie (expires in 1 hour)
    setcookie("user_name", $name, time() + 3600);

    // Store DOB in session
    $_SESSION['user_dob'] = $dob;
}

// Load stored values if they exist
$stored_name = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : "";
$stored_dob = isset($_SESSION['user_dob']) ? $_SESSION['user_dob'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Name Wk 5 Performance Assessment</title>
</head>
<body>

<h2>Store your name in a cookie and birthdate in the Session</h2>

<form method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $stored_name; ?>"><br><br>

    <label>Date of Birth:</label>
    <input type="date" name="dob" value="<?php echo $stored_dob; ?>"><br><br>

    <button type="submit">Submit</button>
</form>

<br>
<a href="data_display.php">Show Data Display Page</a>

</body>
</html>
