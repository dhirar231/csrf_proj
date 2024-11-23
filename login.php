<?php
session_start();
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header('Location: home.php');
        exit;
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }
        .left {
            flex: 1;
            padding: 20px;
        }
        .left h1 {
            color: #1877f2;
            font-size: 48px;
            font-weight: bold;
        }
        .left p {
            font-size: 24px;
            color: #606770;
        }
        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #1c1e21;
        }
        .login-form label {
            font-size: 14px;
            color: #1c1e21;
            display: block;
            margin-bottom: 5px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddfe2;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-form button {
            background-color: #1877f2;
            color: white;
            font-size: 16px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .login-form button:hover {
            background-color: #165dc5;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>facebook</h1>
            <p>Connectez-vous avec vos amis et le monde qui vous entoure sur Facebook.</p>
        </div>
        <div class="right">
            <form method="POST" action="login.php" class="login-form">
                <h2>Connexion</h2>
                <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>
