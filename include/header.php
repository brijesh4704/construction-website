<?php
include 'config/config.php';
$sql = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email'");
$result = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $SiteTitle;?></title>
    <!--bootstap library-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <!--local library--> 
 <link rel="stylesheet" href="public/assest/css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
    <header class="header">
         <a href="#" id="logo">Construction
 <img src="public/assest/images/logo.png"width="100"></a>
<navbar class="nav nav-expand-lg">
            <a href="index.php">home</a>
            <a href="gallary.php">gallery</a>
            <a href="about.php">about</a>
            <a href="#">blog</a>
            <a href="#">contact</a>
        </navbar>
         <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
              <form class="d-flex">
                <a href="contact-us.php" class="btn btn-lg btn-warning">contact us</a>
            </form>
        </div>
      </header>



