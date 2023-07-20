<!DOCTYPE HTML>

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
    
    <!-- Link to JQuery -->
    <script src="js/j_query_min.js"></script>

</head>
    
<body>
    
    <div class="wrapper">
        
        <!-- bar at top to open links -->
        <div id="container">
        <div class="navT">
            <div class="icon"></div>
        </div>
        
        <div id="bar-menu">
            <ul>
            <li><a>Hom<span class="space">e</span></a></li>
            <li><a>Informatio<span class="space">n</span></a></li>
            <li><a>Attraction<span class="space">s</span></a></li>
            <li><a>Contac<span class="space">t</span></a></li>
            </ul>
        </div>

        </div>

        <div class="title">
            <h1>France Website</h1>
        </div>

        <div class="box nav">
            <!-- full width navigation -->
            <nav class="menu menu-1">
				<ul>
                    <li><a href="index.php" class="nav">Home</a></li>
                    <li><a href="" class="nav">Information</a></li>
                    <li><a class="nav dropbtn" href="#">Attractions<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="" class="nav">Eiffel Tower</a></li>
                        <li><a href="" class="nav">Louvre Museum</a></li>
                        <li><a href="" class="nav">Palace of Versailles</a></li>
                    </ul>
                </li>
                    <li><a href="" class="nav">Contact</a></li>
                </ul>
				</nav>

        </div>

        <div class = "box main">

        <p>Welcome to the France Website! This is a website that shows some of the amazing things that France has to offer to those interested.</p>

        <p>If you are thinking about a holiday in France, you are definitely up for one the best experiences of your life. No matter which region you decide to visit, the numerous attractions at every corner are enticing enough to keep you hooked. Whether it is the history and culture of the North East region, the sun filled valleys and villas of South West France, or the beautiful beaches in the North West, there won't be a dull moment while you're travelling there. So, whether you are going for a family holiday or for an ideal romantic getaway, France is surely one of the best places to visit.</p>
    
        <p>All images used have been taken from <a href="https://pixabay.com/">Pixabay</a> under a CC license to respect copyright laws.</p>
        </div>
       

        <div class="box footer">
            CC Harish Peddi 2023
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
<script>
    $(".navT").on("click", function(){
    $(this).toggleClass("active");
    $("#bar-menu").toggleClass("open");
    $(".content").toggleClass("shift");
    })
</script>

</body>        
