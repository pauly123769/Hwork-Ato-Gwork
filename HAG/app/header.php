<?php
// Start the session
session_start();
if (isset($_GET['logout'])) {
    // Destroy the session
    session_destroy();
    // Redirect to the login page
    header('Location: .');
    exit;
}
// Configure Database
include("db_config.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Advice Group</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="stylehag.css">
    <link rel="stylesheet" href="style_policy.css">
    <link rel="stylesheet" href="styleinfo.css">

</head>

<body class="bg-light">
	<section id="header">
			<a href="."><img src="apple.png" height="120px" width="120px" class="logo" alt=""></a>
			<div>
				<ul id="navbar">
                <?php if (isset($_SESSION['username'])) {
                    echo'
				<li><a href=".">Home</a></li>
				<li><a href="infopage.php">info page</a></li>
				<li><a href="Weather_webApp-main/index.html">weather</a></li>
				<li><a href="about.html">contact us</a></li>
				<li><a href="policy.php">Policy</a></li>
                <li><a href="Air_Quality_Service_1/index.html">map</a></li>
                
                <li><a href="?logout=1">Logout</a></li>
                    ';
                 } else {
                    echo'
                <li><a href="login.php">login</a></li>   
                    ';
                 } 
                 ?>
				<a href="https://www.facebook.com/Starbucks/?locale=en_GB" class="fa fa-facebook"></a>
				<a href="https://twitter.com/Starbucks" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/starbucks/?hl=en" class="fa fa-instagram"></a>
				<a href="https://www.youtube.com/starbucks" class="fa fa-youtube"></a>
				<a href="#" class="fa fa-snapchat-ghost"></a>
				</ul>
			</div>
		</section>