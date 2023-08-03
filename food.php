<?php include("topbit.php") ?>

        <div class="box main">

        <h2>French Food</h2>

        <?php
                $food_desc = array("Baguette", 
                "Crepe", 
                "Croissant", 
                "Eclair", 
                "Macarons", 
                "Quiche");
                make_gallery("food", $food_desc);
        ?>

        </div>

<?php include("bottombit.php") ?>