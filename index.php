<?php include "header.php"; ?>

<div class="container overflow-auto celular" style="width:50%; ">
    <div class="div" style="background-color: #ccc;">
        <div class=" row text-center " style="height: 64vh;">

            <!-- DIV NOME FANTASIA -->
            <div class="col-12 col-md-6" style=" padding:2rem; background-color: #ccc;">
                <div class="bg-white rounded-2 " style="height: 55vh;">
                    <img class="w-75" src="img/nome_fantasia.png">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="row" style="height: 55vh; ">

                    <!-- DIV DO MÉDICO -->
                    <div class="col-12 col-md-12"
                        style="background-color: #ccc; padding-top:2rem; padding-bottom:0rem; padding-right:2rem; padding-left:2rem;">
                        <div class="bg-white rounded-2 pt-1" style="height: 26vh;">
                            <a href="medico/login.php"><img class="w-100" src="img/medico.png"></a>
                        </div>
                    </div>

                    <!-- DIV DO PACIENTE -->
                    <div class=" col-12 col-md-12"
                        style="background-color: #ccc; padding-top:1.5rem; padding-bottom:2rem; padding-right:2rem; padding-left:2rem;">
                        <div class="bg-white rounded-2 pt-1" style="height: 26vh;">
                            <a href="dadospessoais.php"><img class="w-100" src="img/paciente.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>