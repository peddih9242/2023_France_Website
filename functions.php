<?php

// function displays all images in a folder as a gallery while taking descriptions for each
function make_gallery($folder_name, $descriptions) {
            
    $dirname = "images/$folder_name/";
    $images = glob($dirname."*.jpg");
    $count = 0;

    foreach($images as $images) {
        
        // get image properties
        $exif = exif_read_data($images, 0, true);

        foreach ($exif as $key => $section) {
            foreach ($section as $name => $val) {

                if($key == 'IFD0') {
                    
                    // strips 'special' characters, allows a-z,
                    // spaces, dashes and round brackets
                    $val = preg_replace('/[^A-Za-z0-9\- ()]/', '', $val);
                
                    $title = $val;

                }

            } // end $section loop

        } // end $exif loop

?>

    <div class="responsive-gallery">

        <div class="lightbox gallery">

        <a href="<?php echo $images ?>" class="big"><img src="<?php echo $images ?>" alt=<?php echo $title ?> title=<?php echo $title ?>></a>
            <p class="desc"><?php echo $descriptions[$count] ?></p>
        </div>

    </div>

        <?php

    $count += 1;

    } // end of $images loop

} // end of function

?>
