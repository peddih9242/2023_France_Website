<!DOCTYPE HTML>

<?php
    // function allows easy insertion of gallery code
    include("functions.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>France Website</title>
    
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
            <li><a class="bar-btn dropbtn" href="#">Attraction<span class="space">s</span></a>
            <ul class="dropdown bar-drop hide-menu" id="bar-drop">
                <li><a href="eiffel-tower.php" class="nav">Eiffel Tower</a></li>
                <li><a href="" class="nav">Louvre Museum</a></li>
                <li><a href="" class="nav">Palace of Versailles</a></li>
            </ul>
        </li>
            <li><a href="">Contac<span class="space">t</span></a></li>
            </ul>
        </div> <!-- / bar-menu -->
        </div> <!-- / container -->

        
        <div class="title">
            <h1>France Website</h1>
        </div>

        <div class="box menu-content">
            <!-- full width navigation -->
            <nav class="menu menu-1">
				<ul>
                    <li><a href="index.php" class="nav">Home</a></li>
                    <li><a href="food.php" class="nav">Food</a></li>
                    <li><a class="nav dropbtn" href="#">Attractions<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="eiffel-tower.php" class="nav">Eiffel Tower</a></li>
                        <li><a href="" class="nav">Louvre Museum</a></li>
                        <li><a href="" class="nav">Palace of Versailles</a></li>
                    </ul>
                </li>
                    <li><a href="" class="nav">Contact</a></li>
                </ul>
				</nav>

        </div>