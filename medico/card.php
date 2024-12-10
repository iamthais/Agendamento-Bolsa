<?php include "../header.php" ?>


<a class="button-style" data-bs-toggle="modal" data-bs-target="#modalPrincipal">
    <div class="border shadow m-3 p-2" style="width: 260px; height: 95px; border-radius: 10px;">
        <span>Paciente</span>
        <p>
            <span>30/11/2007</span>
        </p>
        <div class="rounded ms-2" style="height: 10px; width: 10px; background-color: #000000;"></div>
    </div>
</a>

<!-- Modal Principal-->
<div class="modal" id="modalPrincipal" data-bs-backdrop="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-start">
                <div class="container">
                    <div class="row justify-content-end" style="font-size: large;">
                        <div class="col-md-4">
                            <h5>Nome: Nathalia Paluch Sampaio</h5>
                            <h5>Data de Nascimento: 27/12/1900</h5>
                        </div>
                        <div class="col-md-4">
                            <h5>Leito 27</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-end">
                                <a type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal"
                                    style="width: 5rem;">Fechar</a>
                            </div>
                        </div>
                    </div>

                    <div class="row border border-dark border-3 rounded px-3 py-3">
                        <div class="col-md-4">
                            <div class="row mb-3 me-3">
                                <div class="border border-dark border-3 rounded-4 px-2 py-2">
                                    <h5 class="mt-1">Cidade: Mafra</h5>
                                </div>
                            </div>
                            <div class="row me-3">
                                <h5>Sintomas:</h5>
                                <div class="border border-dark border-3 rounded-4 overflow-y-scroll custom-scrollbar px-2 py-2"
                                    style="height: 22rem; font-size: large;">
                                    <p>Sintomas 1</p>
                                    <p>Sintomas 2</p>
                                    <p>Sintomas 3</p>
                                    <p>Sintomas 4</p>
                                    <p>Sintomas 5</p>
                                    <p>Sintomas 6</p>
                                    <p>Sintomas 7</p>
                                    <p>Sintomas 8</p>
                                    <p>Sintomas 9</p>
                                    <p>Sintomas 10</p>
                                    <p>Sintomas 11</p>
                                    <p>Sintomas 12</p>
                                    <p>Sintomas 13</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 overflow-auto border border-dark border-3 rounded-4"
                            style="height: 456px;">
                            <div class="row  text-center px-2 py-2 mt-2 "
                                style="justify-content: center; font-size: large;">
                                <p>1 - Já fez algum tratamento de Quimioterapia ou Radioterapia?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>2 - Tem possibilidade de gravidez?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Sim</p>

                                <p>3 - Tem alguma doença crônica?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>4 - Toma alguma medicação continua?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Sim</p>

                                <p>5- Alguma Alergia?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>6- É fumante ou Ex-Fumante?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Sim</p>

                                <p>7- Usa álcool ou drogas?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>8- Tem marca-passo cardíaco?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>9- É pessoa com deficiência?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Sim</p>

                                <p>10- Tem insuficiência Renal/Faz hemodiálise?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>11- Já teve AVC?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Não</p>

                                <p>12- Acidentes ou quedas recentes?</p>
                                <p class="border border-dark rounded text-center"
                                    style="background-color: #90D0EF; width: 10%;">Sim</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 border border-dark border-3 rounded overflow-auto px-3 py-3">
                        <div class="col-md-12 mt-2 mr-2">
                            <h5>Observações:</h5>
                            <textarea class="form-control border border-dark border-3 rounded"
                                id="exampleFormControlTextarea1" rows="10">Paciente tanana tanana dadaskfas kdjakdkdas

Paciente tanana tanana dadaskfas kdjakdkdas

Paciente tanana tanana dadaskfas kdjakdkdas  
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalStatus"
                    style="width: 7rem; height: 2.5rem; background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">Status</a>
                <a type="submit" class="btn btn-primary"
                    style="width: 7rem; height: 2.5rem; background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">Salvar</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Status-->
<div class="modal" id="modalStatus" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-start">
                <div class="container">
                    <div class="row justify-content-end" style="font-size: large;">
                        <div class="col-md-4">
                            <h5>Nome: Nathalia Paluch Sampaio</h5>
                            <h5>Data de Nascimento: 27/12/1900</h5>
                        </div>
                        <div class="col-md-4">
                            <h5>Leito 27</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-end">
                                <a type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal"
                                    style="width: 5rem;">Fechar</a>
                            </div>
                        </div>
                    </div>

                    <div class="row border border-dark border-3 rounded py-4 px-4" style="font-size: large;">
                        <div class="row" style="font-size: large;">
                            <div class="col-md-6 mb-3">
                                <h5 class="d-inline" style="margin-right: 0.5rem;">Receituário</h5>

                                <div class="d-inline">
                                    <a type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal"
                                        data-bs-target="#modalStatus"
                                        style="background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">
                                        <i class="bi bi-plus-lg"></i>
                                    </a>

                                    <a type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal"
                                        data-bs-target="#modalStatus"
                                        style="background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">
                                        <i class="bi bi-dash"></i>
                                    </a>

                                    <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalStatus"
                                        style="background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">
                                        Alta
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row justify-content-end">
                                    <a type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal"
                                        data-bs-target="#modalStatus"
                                        style="width: 2.5rem; height: 2.5rem; background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </div>
                            </div>

                            <p class="table-group-divider"></p>
                        </div>

                        <div class="row">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Medicamento/Exame</th>
                                        <th scope="col">Administração</th>
                                        <th scope="col">Horário</th>
                                        <th scope="col">Confirmação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Insulina NPH</td>
                                        <td>sc</td>
                                        <td>08:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Droflex</td>
                                        <td>vo</td>
                                        <td>09:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Soro NPH</td>
                                        <td>sc</td>
                                        <td>10:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Insulina NPH</td>
                                        <td>sc</td>
                                        <td>08:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Droflex</td>
                                        <td>vo</td>
                                        <td>09:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Soro NPH</td>
                                        <td>sc</td>
                                        <td>10:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Insulina NPH</td>
                                        <td>sc</td>
                                        <td>08:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Droflex</td>
                                        <td>vo</td>
                                        <td>09:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Soro NPH</td>
                                        <td>sc</td>
                                        <td>10:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Insulina NPH</td>
                                        <td>sc</td>
                                        <td>08:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Droflex</td>
                                        <td>vo</td>
                                        <td>09:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Soro NPH</td>
                                        <td>sc</td>
                                        <td>10:00</td>
                                        <td><i class="bi bi-check"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>