<?php include "header.php"; ?>

<div class="container overflow-auto celular" style="width:50%;">
    <div class="row rounded justify-content-end px-4 py-4" style="background-color: #d1d1d1;">
        <!-- DIV NOME FANTASIA -->
        <div class="col-12 col-md-6" style="height: 30rem; width: 20rem;">
            <img src="img/nome_fantasia.png" style="width: 100%; height: 100%;">
        </div>

        <div class="col-12 col-md-6">
            <div class="row">
                <!-- DIV DO MÉDICO -->
                <div class="col-12 col-md-12" style="height: 14.5rem; width: 20rem;">
                    <a href="medico/login.php"><img src="img/medico.png" style="width: 100%; height: 100%;"></a>
                </div>

                <!-- DIV DO PACIENTE -->
                <div class="col-12 col-md-12" style="height: 14.5rem; width: 20rem; margin-top: 1rem">
                    <a href="dadospessoais.php"><img src="img/paciente.png" style="width: 100%; height: 100%;"></a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>