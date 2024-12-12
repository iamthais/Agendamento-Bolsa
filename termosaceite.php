<?php
require "header.php";
?>

<div class="container mt-5 mb-3 text-center">
    <div class="row">
        <h1>TERMO DE ACEITE PARA TRATAMENTO DE DADOS PESSOAIS </h1>
        <div class="col mt-2">
            Termo de aceite
        </div>
    </div>


    <div class="container termo ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-4" style="text-align: justify;">
                <p>
                    Eu autorizo o uso das minhas informações médicas fornecidas à [Nome da
                    Instituição/Clínica/Hospital],
                    incluindo, mas não se limitando a, históricos médicos, exames, diagnósticos e tratamentos, para
                    os
                    seguintes fins:

                    Realização de diagnósticos, tratamentos e acompanhamento médico.
                    Compartilhamento dessas informações com outros profissionais de saúde, sempre que necessário
                    para a
                    continuidade do meu cuidado.
                    Cumprimento de obrigações legais, regulatórias ou éticas aplicáveis.
                    Estou ciente de que as informações médicas serão tratadas com a devida confidencialidade e
                    segurança,
                    conforme as normas de proteção de dados pessoais (Lei Geral de Proteção de Dados - LGPD). Também
                    estou
                    ciente de que tenho o direito de acessar, corrigir ou solicitar a exclusão dessas informações,
                    conforme
                    a legislação vigente.

                    Declaro que forneço este consentimento de forma livre e esclarecida, e que entendo que posso
                    revogar
                    este consentimento a qualquer momento, sem prejuízo das ações realizadas com base no
                    consentimento
                    previamente dado.

                    Assino abaixo, confirmando meu aceite.</p>
            </div>
            <div class="col-md-2"></div>
            <br>
            <legend>Você aceita os termos?</legend>

            <div class="checkbox">
                <!-- <input type="radio" id="box1" name="aceite" checked />
                <label for="aceite">Aceito</label>
                <input type="radio" id="box2" name="aceite" />
                <label for="Não aceito">Não aceito</label> -->
                <input type="checkbox" id="chektermo" name="aceite">
                <label for="chektermo" class="form-check-label">
                    Declaro que li e aceito os termos
                </label>
                

            </div>
            <div class="col-12 col-md-12">
                <div class="col-auto center mt-3">
                    <form action="dadospessoais.php">
                        <button disabled type="submit" id="botaoenviar" class="btn btn-primary"
                            style="font-size: 18px;">Próximo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php" ?>