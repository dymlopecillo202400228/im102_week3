<?php
session_start();

// Users
$users = [
    "admin" => [
        "password" => "123",
        "role" => "admin"
    ],
    "staff" => [
        "password" => "111",
        "role" => "staff"
    ]
];

// Login
function login($username, $password)
{
    global $users;

    if (isset($users[$username]) &&
        $users[$username]['password'] === $password) {

        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];

        return true;
    }

    return false;
}

// Check login
function requireLogin()
{
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
}

// Admin only
function requireAdmin()
{
    requireLogin();

    if ($_SESSION['role'] != "admin") {
        echo "<h2>Access Denied</h2>";
        echo "<p>Only the Admin can access this page.</p>";
        exit;
    }
}

function getUsername()
{
    return $_SESSION['username'];
}

function logout()
{
    session_destroy();
}
?>