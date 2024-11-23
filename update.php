<?php
session_start();
include 'bd.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_email = $_POST['email'];
    $user_id = $_SESSION['user_id'];
    $stmt = $pdo->prepare("UPDATE user SET email = :email WHERE id = :id");
    $stmt->execute(['email' => $new_email, 'id' => $user_id]);
    header('Location: home.php?message=email_updated');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à jour l'email</title>
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
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .container h1 {
            font-size: 24px;
            color: #1c1e21;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            font-size: 14px;
            color: #1c1e21;
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddfe2;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #1877f2;
            color: white;
            font-size: 16px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #165dc5;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #606770;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mise à jour de l'email</h1>
        <form method="POST" action="update.php">
            <label for="email">Nouveau email :</label>
            <input type="email" name="email" id="email" placeholder="Entrez votre nouvel email" required>
            <button type="submit">Mettre à jour</button>
        </form>
        <div class="footer">
            <p>© 2024 Facebook</p>
        </div>
    </div>
</body>
</html>
