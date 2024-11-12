<?php include "header.php" ?>

<div class="container">
  <div class="row mt-5 mb-5 justify-content-center flex-nowrap">
    <div class="col-auto">
      <button type="button" class="btn btn-primary rounded-0">Dados Pessoais</button>
    </div>
    <div class="col-auto">
      <button type="button" class="btn btn-primary rounded-0 disabled">Sintomas</button>
    </div>
    <div class="col-auto">
      <button type="button" class="btn btn-primary rounded-0 disabled">Questionário</button>
    </div>
  </div>






  <div class="text-center" style="margin-top: 10vh;">
    <div class="row">
      <div class="col-12 col-md-6" style="font-size: 16px;">
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
        <div class="col-auto text-end">
          <form action="sintomas.php">
            <button type="submit" class="btn btn-primary" style="font-size: 16px;">Próximo</button>
          </form>
        </div>
      </div>

    </div>
  </div>

</div>
<?php include "footer.php"; ?>