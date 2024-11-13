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
        <input class="form-control mb-4" type="text" placeholder="Nome" id="nome"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Sobrenome" id="sobrenome"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Data de Nascimento" id="data_nascimento"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Sexo" id="sexo"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="CPF" id="cpf"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Cartão SUS" id="cartao_sus"
          aria-label="default input example">

      </div>
      <div class="col-12 col-md-6">
        <input class="form-control mb-4" type="text" placeholder="CEP" id="cep"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Rua" id="rua"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Número" id="numero"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Bairro" id="bairro"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Cidade" id="cidade"
          aria-label="default input example">
        <input class="form-control mb-4" type="text" placeholder="Estado" id="estado"
          aria-label="default input example">
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