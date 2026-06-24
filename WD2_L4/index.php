<?php
session_start();

$users = [
    "admin" => "12345",
    "jetro" => "12345"
];

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($users[$username]) && $users[$username] == $password){

        $_SESSION['username'] = $username;

        header("Location: landing.php");
        exit();

    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login Page</h2>

    <?php
    if(isset($error)){
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>