<?php
include "auth.php";
requireLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

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
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 40px;
    text-align: center;
}

h1 {
    font-size: 28px;
    font-weight: 500;
    color: #222;
    margin-bottom: 10px;
}

.subtitle {
    color: #666;
    font-size: 14px;
    margin-bottom: 25px;
}

.welcome {
    font-size: 16px;
    color: #444;
    margin-bottom: 15px;
}

.role {
    display: inline-block;
    background: #f5f5f5;
    border: 1px solid #ddd;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    color: #333;
    margin-bottom: 25px;
}

.btn {
    display: block;
    width: 100%;
    padding: 14px;
    margin-bottom: 12px;
    background: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 15px;
}

.btn:hover {
    background: #333;
    transform: translateY(-1px);
}

.btn:active {
    transform: translateY(0);
}

.logout {
    background: #d32f2f;
}

.logout:hover {
    background: #b71c1c;
}

.footer {
    margin-top: 20px;
    font-size: 13px;
    color: #777;
}
</style>

</head>

<body>

<div class="container">

    <h1>Dashboard</h1>


    <div class="welcome">
        Welcome, <strong><?php echo getUsername(); ?></strong>
    </div>

    <div class="role">
        Role: <?php echo ucfirst($_SESSION['role']); ?>
    </div>
    <?php if($_SESSION['role'] == "admin"){ ?>
        <a href="report.php" class="btn"> View Reports</a>
    <?php } ?>

    <a href="logout.php" class="btn logout">Logout</a>


</div>

</body>
</html>