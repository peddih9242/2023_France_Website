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
            <li><a href="">Informatio<span class="space">n</span></a></li>
            <li><a class="bar-btn dropbtn" href="">Attraction<span class="space">s</span></a>
            <ul class="dropdown bar-drop hide-menu" id="bar-drop">
                <li><a href="" class="nav">Eiffel Tower</a></li>
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

        <div class="box main">

        <p>Welcome to the France Website! This is a website that shows some of the amazing things that France has to offer to those interested.</p>

        <p>If you are thinking about a holiday in France, you are definitely up for one the best experiences of your life. No matter which region you decide to visit, the numerous attractions at every corner are enticing enough to keep you hooked. Whether it is the history and culture of the North East region, the sun filled valleys and villas of South West France, or the beautiful beaches in the North West, there won't be a dull moment while you're travelling there. So, whether you are going for a family holiday or for an ideal romantic getaway, France is surely one of the best places to visit.</p>
    
        <p>All images used have been taken from <a href="https://pixabay.com/">Pixabay</a> under a CC license to respect copyright laws.</p>
        </div>
       
        <div class="box footer">
            CC Harish Peddi 2023
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->

    </div> <!-- / content -->

<script>

let down_count = 1;
let drop_count = 1;

$(".navT").on("click", function(){
$(this).toggleClass("active");
$("#bar-menu").toggleClass("open");
$(".content").toggleClass("shift");

$('#bar-menu').toggleClass('hide-menu');
$('.dropdown').toggleClass('hide-menu');

// force close dropdown if dropdown is shown
drop_count += 1;
var dropdown = document.getElementById('bar-drop');
var content = document.getElementById('page');
var bar_menu = document.getElementById('bar-menu');

bar_menu.style.height = null;

if (drop_count % 2 == 1 && dropdown.classList.contains('display') == true) {
    content.classList.remove("shift");
    content.classList.remove("full-shift");

    dropdown.classList.remove("display");
    
    down_count += 1
    bar_height = 270
}

})

// code for making dropdown and content shift work in half width
let height_change = 180;
let bar_height = 270;
let content_shift = 335;
$('.bar-btn').mouseover(function()
{
    $('.bar-drop').toggleClass('display');

    var bar_menu = document.getElementById("bar-menu");

    down_count += 1;
    
    if (down_count % 2 == 0) {
        bar_height += height_change;
    }
    else {
        bar_height -= height_change;
    }

    bar_style = bar_height.toString() + 'px';

    bar_menu.style.height = bar_style;
    $('.content').toggleClass('shift');
    $('.content').toggleClass('full-shift');
}
)
</script>

</body>        
