<?php include "header.php";
?>

<div class="scroll" style="padding-bottom: 120px;">
    <div class="container">
        <div class="row mt-5 mb-5 justify-content-center flex-nowrap">
            <div class="col-auto">
                <button type="button" class="btn btn-primary rounded-0 disabled">Dados Pessoais</button>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary rounded-0 disabled">Sintomas</button>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary rounded-0 ">Questionário</button>
            </div>
        </div>

        <div class="row mt-5 justify-content-center text-center">
            <div class="col-12">
                <p class="mt-4">1- Já fez tratamento de Quimioterapia ou Radioterapia?</p>
                <input class="form-check-input" type="radio" name="check1" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check1" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">2- Tem possibilidade de gravidez?</p>
                <input class="form-check-input" type="radio" name="check2" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check2" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>

            </div>
            <div class="col-12">
                <p class="mt-4">3- Tem alguma doença crônica?</p>
                <input class="form-check-input" type="radio" name="check3" value="1" id="flexCheckDefault"
                    onchange="exibeCampo3(this)">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check3" value="0" id="flexCheckDefault"
                    onchange="exibeCampo3(this)">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
                <br>
                <div class="mt-3" hidden id="3_obsdiv">
                    <label for="3_obs"> 3.1- Qual doença crônica?</label>
                    <p><input type="text" id="3_obs"></p>
                </div>
            </div>
            <div class="col-12">
                <p class="mt-2">4- Toma alguma medicação continua??</p>
                <input class="form-check-input" type="radio" name="check4" value="1" id="flexCheckDefault"
                    onchange="exibeCampo4(this)">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check4" value="0" id="flexCheckDefault"
                    onchange="exibeCampo4(this)">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
                <br>
                <div class="mt-3" hidden id="4_obsdiv">
                    <label for="4_obs">4.1- Qual medicação?</label>
                    <p><input type="text" id="4_obs"></p>
                </div>
            </div>
            <div class="col-12">
                <p class="mt-2">5- Alguma Alergia?</p>
                <input class="form-check-input" type="radio" name="check5" value="1" id="flexCheckDefault"
                    onchange="exibeCampo5(this)">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check5" value="0" id="flexCheckDefault"
                    onchange="exibeCampo5(this)">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
                <br>
                <div class="mt-3" hidden id="5_obsdiv">
                    <label for="5_obs">5.1- Qual(is) alergia(s)?</label>
                    <p><input type="text" id="5_obs"></p>
                </div>
            </div>
            <div class="col-12">
                <p class="mt-2">6- É fumante ou Ex-Fumante?</p>
                <input class="form-check-input" type="radio" name="check6" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check6" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">7- Usa álcool ou drogas?</p>
                <input class="form-check-input" type="radio" name="check7" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check7" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">8- Tem marca-passo cardíaco?</p>
                <input class="form-check-input" type="radio" name="check8" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check8" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">9- É pessoa com deficiência?</p>
                <input class="form-check-input" type="radio" name="check9" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check9" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">10- Tem insuficiência Renal/Faz hemodiálise?</p>
                <input class="form-check-input" type="radio" name="check10" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check10" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">11- Já teve AVC?</p>
                <input class="form-check-input" type="radio" name="check11" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check11" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
            <div class="col-12">
                <p class="mt-4">12- Acidentes ou quedas recentes?</p>
                <input class="form-check-input" type="radio" name="check12" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    SIM
                </label>
                <input class="form-check-input" type="radio" name="check12" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NÃO
                </label>
            </div>
        </div>
        <div class="col-12 col-md-12 mt-3">
            <div class="col-auto text-center">
                <form action="questionario.php">
                    <button type="submit" class="btn btn-primary ">Enviar</button>
                </form>
            </div>
        </div>

    </div>

</div>




<?php include "footer.php"; ?>