       
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

<!-- Lightbox Javscript -->
<script src="js/simple-lightbox.min.js"></script>

<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>

</body>        
