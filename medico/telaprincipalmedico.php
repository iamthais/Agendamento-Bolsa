<?php include "../header.php";
include "../config.php";
?>

<div class="container">
    <div class="col text-center mt-3">
        <span>Atendimentos em aberto</span>
    </div>
    <div class="row rounded mt-4 overflow-auto box" style="height:42vh;">

        <?php
        $max = 15;
        $i = 0;

        while ($i < $max) {
        ?>
            <div class="col-auto text-center">
                <span><?php include 'card.php' ?></span>
            </div>
        <?php
            $i++;
        } ?>
    </div>


    <div class="">
        <div class="row rounded mt-4 overflow-auto box" style="height:42vh;">
            <div class="col">
                <form action="search.php" method="GET">
                    <div class="input-group mb-5 mt-3">
                        <input type="text" class="form-control" placeholder="Digite sua pesquisa" name="search">
                        <a class="btn btn-light" type="button"><i class="bi bi-search"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>