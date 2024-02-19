<?php
include_once('db_connection.php');
if(isset($_POST['owner'])){
    header("Location:login_owner.php");
}
if(isset($_POST['tenant'])){
    header("Location:login_tenant.php");
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Connexion"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform a SQL query to check if the email and password exist
    $sql = "SELECT * FROM proprietaire WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, do something (e.g., set session variables, redirect, etc.)
        // For example:
        $user_data = $result->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_type'] = 'proprietaire';
        header("Location: houses.php");
        exit();
    } else {
        // User not found or incorrect email/password
        $error_message = "Invalid email or password. Please try again.";
        echo"$error_message <br>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Connexion2"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform a SQL query to check if the email and password exist
    $sql = "SELECT * FROM client WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, do something (e.g., set session variables, redirect, etc.)
        // For example:
        $user_data = $result->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_type'] = 'client';
        header("Location: houses.php");
        exit();
    } else {
        // User not found or incorrect email/password
        $error_message = "Invalid email or password. Please try again.";
        echo"$error_message <br>";
    }
}

// Close the database connection
$conn->close();
?>

// Close the database connection
$conn->close();
?>