<?php include "header.php"; ?>

<div class="container celular" style="width:50%; overflow-y: auto; overflow-x: hidden;">
    <div class="row rounded justify-content-end px-4 py-4">
        <!-- DIV NOME FANTASIA -->
        <div class=" col-12 col-md-6" style="height: 30rem; width: 20rem;">
            <img src="img/nome_fantasia.png" style="width: 100%; height: 100%;">
        </div>

        <div class="col-12 col-md-6 telapequena">
            <div class="row">
                <!-- DIV DO MÉDICO -->
                <div class="col-12 col-md-12 " style="height: 14.5rem; width: 20rem;">
                    <a href="medico/login.php"><img class="imagem" src="img/medico.png"
                            style="width: 100%; height: 100%;  transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                </div>

                <!-- DIV DO PACIENTE -->
                <div class="col-12 col-md-12" style="height: 14.5rem; width: 20rem; margin-top: 1rem;">
                    <a href="dadospessoais.php"><img class="imagem" src="img/paciente.png"
                            style="width: 100%; height: 100%;  transition: transform 0.3s ease, box-shadow 0.3s ease;"></a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>