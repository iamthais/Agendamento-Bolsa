<?php include "header.php" ?>

  <div class="row mt-5 mb-5 " style="justify-content: center">
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-primary disabled">Left</button>
      <button type="button" class="btn btn-primary disabled">Middle</button>
      <button type="button" class="btn btn-primary disabled">Right</button>
    </div>
  </div>


  <div class="text-center" style="margin-top: 10vh;">
    <div class="row">
      <div class="col-12 col-md-6">
        <input class="form-control mb-4" type="text" placeholder="Nome" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Data de Nascimento"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Sexo" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="CPF" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Cartão SUS" aria-label="default input example">

      </div>
      <div class="col-12 col-md-6">
        <input class="form-control mb-4" type="text" placeholder="CEP" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Rua" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Número" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Bairro" aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Cidade" aria-label="default input example">
      </div>

      <div class="col-12 col-md-12">
        <div class="col-auto text-right">
          <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
      </div>

    </div>
  </div>


  <?php include "footer.php";?>