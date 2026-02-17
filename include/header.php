<?php
session_start();
include 'config/config.php';

/* ------------------------------
   FIX: Undefined $email variable
--------------------------------*/
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$user = null;

if($email != ''){
    $stmt = mysqli_prepare($conn, "SELECT * FROM user_registration WHERE email=?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $SiteTitle; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Local CSS -->
    <link rel="stylesheet" href="public/assest/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
<div class="container">

<header class="header">

    <a href="index.php" id="logo">
        Construction
        <img src="public/assest/images/logo.png" width="100">
    </a>

    <nav class="nav nav-expand-lg">
        <a href="index.php">Home</a>
        <a href="gallary.php">Gallery</a>
        <a href="about.php">About</a>
        <a href="#">Blog</a>
        <a href="contact-us.php">Contact</a>
    </nav>

    <!-- Right Side -->
    <div class="d-flex align-items-center gap-2">

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <?php if($user){ ?>
            <!-- Logged in -->
            <span class="text-success fw-bold">
                Welcome, <?php echo htmlspecialchars($user['name']); ?>
            </span>

            <a href="logout.php" class="btn btn-danger">Logout</a>

        <?php } else { ?>
            <!-- Not logged in -->
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="register.php" class="btn btn-warning">Register</a>
        <?php } ?>

    </div>

</header>
