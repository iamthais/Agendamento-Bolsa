<?php include "../header.php" ?>


<a class="button-style" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="abrirModal()">
    <div class="border shadow m-3 p-2" style="width: 260px; height: 95px; border-radius: 10px;">
        <span>Paciente</span>
        <p>
            <span>30/11/2007</span>
        </p>
        <div class="rounded ms-2" style="height: 10px; width: 10px; background-color: #000000;"></div>
    </div>
</a>

<!-- Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-start">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Nome: Nathalia Paluch Sampaio</p>
                            <p>Data de Nascimento: 27/12/1900</p>
                        </div>
                        <div class="col-md-6">
                            <p>Leito 27</p>
                        </div>
                    </div>

                    <div class="row border border-dark border-3 rounded px-3 py-3">
                        <div class="col-md-6">
                            <div class="row mb-3 me-3">
                                <div class="border border-dark border-3 rounded">
                                    <p>Cidade</p>
                                </div>
                            </div>
                            <div class="row me-3">
                                <div class="border border-dark border-3 rounded">
                                    <p>Sintomas 1</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row border border-dark border-3 rounded text-center px-2 py-2" style="justify-content: center;">
                                <p>1 - Já fez algum tratamento de Quimioterapia ou Radioterapia?</p>
                                <p class="border border-dark rounded text-center" style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>2 - Tem possibilidade de gravidez?</p>
                                <p class="border border-dark rounded text-center" style="background-color: #90D0EF; width: 10%;">Sim</p>

                                <p>3 - Tem alguma doença crônica?</p>
                                <p class="border border-dark rounded text-center" style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>4 - Toma alguma medicação continua?</p>
                                <p class="border border-dark rounded text-center" style="background-color: #90D0EF; width: 10%;">Sim</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 border border-dark overflow-auto">
                        <div class="col-md-12 mt-2 mr-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <a type="submit" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
                <a type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>