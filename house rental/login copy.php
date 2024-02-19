<?php
session_start();
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql_client = "SELECT * FROM client WHERE email='$email' AND password='$password'";
    $result_client = $conn->query($sql_client);

    $sql_proprietaire = "SELECT * FROM proprietaire WHERE email='$email' AND password='$password'";
    $result_proprietaire = $conn->query($sql_proprietaire);

    if ($result_client->num_rows > 0) {
        $user_data = $result_client->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_type'] = 'client';
        header("Location: houses.php");
        exit();
    } elseif ($result_proprietaire->num_rows > 0) {
        $user_data = $result_proprietaire->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_type'] = 'proprietaire';
        header("Location: houses.php");
        exit();
    } else {
        $error_message = "خطأ في تسجيل الدخول. يرجى التحقق من البريد الإلكتروني وكلمة المرور.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>تسجيل الدخول</title>
</head>
<body>
    <h2>تسجيل الدخول</h2>

    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form action="login.php" method="post">
        <label for="email">البريد الإلكتروني:</label>
        <input type="text" name="email" required>

        <label for="password">كلمة المرور:</label>
        <input type="password" name="password" required>

        <label for="user_type">نوع المستخدم:</label>
        <select name="user_type">
            <option value="client">عميل</option>
            <option value="proprietaire">مالك</option>
        </select>

        <button type="submit">تسجيل الدخول</button>
    </form>
</body>
</html>
