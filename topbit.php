<!DOCTYPE HTML>

<?php
    // function allows easy insertion of gallery code
    include("functions.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="France Website">
    <meta name="keywords" content="france, tourism, attractions, landmarks">
    <meta name="author" content="Harish Peddi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Discover France</title>
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="css/bar-links.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/simple-lightbox.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Link to JQuery -->
    <script src="js/j_query_min.js"></script>

</head>
    
<body>

    <div class="content" id="page">

    <div class="wrapper">
        
        <!-- bar at top to open links -->
        <div id="container">
        <div class="navT">
            <div class="icon"></div>
        </div>
        
        <div id="bar-menu" class="hide-menu">
            <ul>
            <li><a href="index.php">Hom<span class="space">e</span></a></li>
            <li><a href="food.php">Foo<span class="space">d</span></a></li>
            <li><a class="bar-btn dropbtn" href="#">Attraction<span class="space">s <i class="fa fa-chevron-down"></i></span></a>
            <ul class="dropdown bar-drop hide-menu" id="bar-drop">
                <li><a href="eiffel-tower.php" class="nav">Eiffel Tower</a></li>
                <li><a href="louvre-museum.php" class="nav">Louvre Museum</a></li>
                <li><a href="mont-saint-michel.php" class="nav">Mont Saint-Michel</a></li>
            </ul>
        </li>
            <li><a href="contact.php">Contac<span class="space">t</span></a></li>
            </ul>
        </div> <!-- / bar-menu -->
        </div> <!-- / container -->

        
        <div class="title">
            <h1>Discover France</h1>
        </div>

        <div class="box menu-content">
            <!-- full width navigation -->
            <nav class="menu menu-1">
				<ul>
                    <li><a href="index.php" class="nav">Home</a></li>
                    <li><a href="food.php" class="nav">Food</a></li>
                    <li><a class="nav dropbtn" href="#">Attractions <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="eiffel-tower.php" class="nav">Eiffel Tower</a></li>
                        <li><a href="louvre-museum.php" class="nav">Louvre Museum</a></li>
                        <li><a href="mont-saint-michel.php" class="nav">Mont Saint-Michel</a></li>
                    </ul>
                </li>
                    <li><a href="contact.php" class="nav">Contact</a></li>
                </ul>
				</nav>

        </div>