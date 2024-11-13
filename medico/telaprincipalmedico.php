<?php include "../header.php"; ?>

<div class="container">
    <div class="row rounded mt-3 overflow-auto" style="height:45vh; border:2px solid black;">
        <?php
        $max = 15;
        $i = 0;

        while ($i < $max) {


        ?>
            <div class="col-auto">
                <span><?php include 'card.php' ?></span>
            </div>
        <?php
            $i++;
        } ?>
    </div>


    <div class="">
        <div class="row rounded mt-3 overflow-auto" style="height:45vh; border:2px solid black;">
            <?php
            $max = 15;
            $i = 0;

            while ($i < $max) {


            ?>
                <div class="col-auto">
                    <span><?php include 'card.php' ?></span>
                </div>
            <?php
                $i++;
            } ?>
        </div>
    </div>
</div>

<?php include "footer.php" ?>