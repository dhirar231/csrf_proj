<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Facebook Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #1877f2;
            padding: 15px;
            color: white;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .welcome {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .logout-button, .update-email-button {
            background-color: #e53935;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }
        .logout-button:hover, .update-email-button:hover {
            background-color: #d32f2f;
        }
        .ad-card {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            margin: 30px auto;
            text-align: center;
        }
        .ad-card img {
            width: 100%;
            max-width: 350px;
            border-radius: 8px;
        }
        .ad-card h2 {
            font-size: 20px;
            margin: 15px 0;
            color: #333;
        }
        .ad-card p {
            font-size: 16px;
            color: #555;
        }
        .ad-card button {
            background-color: #1b74e4;
            color: white;
            font-size: 16px;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .ad-card button:hover {
            background-color: #155ab4;
        }
    </style>
</head>
<body>
    <div class="navbar">
        Fake Facebook
    </div>
    <div class="container">
        <p class="welcome">Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</p>
        
        <button class="logout-button" onclick="window.location.href='?logout=true';">Logout</button>
        
        <button class="update-email-button" onclick="window.location.href='update_sec.php';">Update Email</button>
        
        <div class="ad-card">
            <img src="gift_card.jpg" alt="Steam Gift Card">
            <h2>Win a 100€ Steam Gift Card!</h2>
            <p>Click below to participate and claim your reward!</p>
            <button onclick="window.location.href='attack.php';">
                Participate Now
            </button>
        </div>
    </div>
</body>
</html>
