<?php include "header.php" ?>

<div class="container">
    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-auto mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary rounded-0 disabled w-100 w-sm-auto">Dados Pessoais</button>
            </div>
            <div class="col-auto mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary rounded-0 w-100 w-sm-auto">Sintomas</button>
            </div>
            <div class="col-auto mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary rounded-0 disabled w-100 w-sm-auto">Questionário</button>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Sangramento
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Dor no peito
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Falta de ar
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Dor de cabeça
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Tontura
                </label>
            </div>
        </div>


        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Convulsão
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Desmaio
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Dores no corpo
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Fraqueza
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Febre
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Dificuldade na fala
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Constipação
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Diárreia
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Enjoo
                </label>
            </div>
        </div>
        <div class="col-12 col-md-4 p-3">
            <div class="form-check fs-5 border rounded-1 p-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Vômito
                </label>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12">
        <div class="col-auto text-end m-3">
            <form action="questionario.php">
                <button type="submit" class="btn btn-primary ">Próximo</button>
            </form>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>