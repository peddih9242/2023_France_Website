<?php

// function displays all images in a folder as a gallery while taking descriptions for each
function make_gallery($folder_name, $descriptions, $titles) {
            
    $dirname = "images/$folder_name/";
    $images = glob($dirname."*.jpg");
    $count = 0;

    foreach($images as $images) {

?>

    <div class="responsive-gallery">

        <div class="lightbox gallery">
        <a href="<?php echo $images ?>" class="big"><img src="<?php echo $images ?>" alt="<?php echo $titles[$count] ?>" title="<?php echo $titles[$count] ?>"></a>
            <p class="desc"><?php echo $descriptions[$count] ?></p>
        </div>

    </div>

        <?php

    $count += 1;

    } // end of $images loop

} // end of function

?>
