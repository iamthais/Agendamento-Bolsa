<?php include "../header.php";
include "../config.php";
?>

<div class="container">
    <div class="col text-center mt-1">
        <span>Atendimentos em aberto</span>
    </div>
    <div class="row rounded mt-4 overflow-auto box" style="height:42vh;">

        <?php
        $max = 1;
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
        <div class="col text-center mt-1">
            <span>Atendimentos fechados</span>
        </div>
        <div class="row rounded mt-4 overflow-auto box" style="height:42vh;">
            <div class="col">
                <form action="search.php" method="GET">
                    <div class="input-group mb-5 mt-3">
                        <input type="text" class="form-control" placeholder="Digite sua pesquisa" name="search">
                        <a class="btn btn-light" type="button"><i class="bi bi-search"></i></a>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col-4">Nome</th>
                                <th scope="col-4">Nascimento</th>
                                <th scope="col-4">Nome da mãe</th>
                            </tr>
                        </thead>
                </form>
                <div class="row">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <td>Lucas Andrade da Silva</td>
                                <td>15/03/1988</td>
                                <td>Mariana Andrade da Silva</td>
                            </tr>
                            <tr>
                                <td>Ana Beatriz Ferreira</td>
                                <td>22/07/1995</td>
                                <td>Júlia Ferreira Costa</td>
                            </tr>
                            <tr>
                                <td>Rafael Souza Oliveira</td>
                                <td>10/11/1980</td>
                                <td>Helena Souza Oliveira</td>
                            </tr>
                            <tr>
                                <td>Bianca Menezes Santos</td>
                                <td>05/01/2002</td>
                                <td>Cláudia Menezes Santos</td>
                            </tr>
                            <tr>
                                <td>João Pedro Almeida</td>
                                <td>19/09/1974</td>
                                <td>Renata Almeida dos Santos</td>
                            </tr>
                            <tr>
                                <td>Carolina Duarte Lima</td>
                                <td>28/06/1990</td>
                                <td>Patrícia Duarte Lima</td>
                            </tr>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>