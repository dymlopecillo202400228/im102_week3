<?php
include "auth.php";
requireAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reports</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            text-align: center;
        }

        h1 {
            font-size: 26px;
            font-weight: 500;
            color: #222;
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        .welcome {
            color: #111;
            font-weight: 500;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 18px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.2s;
            font-size: 14px;
        }

        a:hover {
            background: #333;
        }

    </style>
</head>
<body>

<div class="container">
    <h1> Reports</h1>
    <p class="welcome">Welcome Admin <?php echo getUsername(); ?></p>
    <p>hi.</p>
    <a href="index.php">Back</a>

</div>

</body>
</html>