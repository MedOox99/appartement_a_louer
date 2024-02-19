<?php
session_start();
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tele = $_POST["tele"];
    $date_naissance = $_POST["date_naissance"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

    if ($user_type == "client") {
        $sql = "INSERT INTO client (nom, prenom, tele, date_naissance, email, password) 
                VALUES ('$nom', '$prenom', '$tele', '$date_naissance', '$email', '$password')";
    } elseif ($user_type == "proprietaire") {
        $sql = "INSERT INTO proprietaire (nom, prenom, tele, date_naissance, email, password) 
                VALUES ('$nom', '$prenom', '$tele', '$date_naissance', '$email', '$password')";
    }

    if ($conn->query($sql) === TRUE) {
        $success_message = "تم إنشاء الحساب بنجاح!";
    } else {
        $error_message = "خطأ في إنشاء الحساب: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>إنشاء حساب</title>
</head>
<body>
    <h2>إنشاء حساب</h2>

    <?php
    if (isset($success_message)) {
        echo "<p style='color: green;'>$success_message</p>";
    }

    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form action="register.php" method="post">
        <label for="nom">الاسم:</label>
        <input type="text" name="nom" required>

        <label for="prenom">اللقب:</label>
        <input type="text" name="prenom" required>

        <label for="tele">رقم الهاتف:</label>
        <input type="text" name="tele" required>

        <label for="date_naissance">تاريخ الميلاد:</label>
        <input type="date" name="date_naissance" required>

        <label for="email">البريد الإلكتروني:</label>
        <input type="text" name="email" required>

        <label for="password">كلمة المرور:</label>
        <input type="password" name="password" required>

        <label for="user_type">نوع المستخدم:</label>
        <select name="user_type">
            <option value="client">عميل</option>
            <option value="proprietaire">مالك</option>
        </select>

        <button type="submit">إنشاء الحساب</button>
    </form>
</body>
</html>
