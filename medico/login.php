<?php include "../header.php" ?>

<div class="container border border-black rounded-5 position-absolute top-50 start-50 translate-middle"
    style="background-color: #d9d9d9;">
    <div class="row" style="text-align: center;">
        <h5 class="mt-5 mb-5" style="font-size: 4rem;">Login</h5>
    </div>
    <div class="row mb-5 mt-5" style="justify-content: center;">
        <input type="email" class="form-control w-50 p-3 h-75 d-inline-block border border-black rounded-4"
            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login">
    </div>
    <div class="row mt-5" style="justify-content: center;">
        <input type="email" class="form-control w-50 p-3 h-75 d-inline-block border border-black rounded-4"
            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Senha">
    </div>
    <div class="row mt-5 px-5" style="text-align: center; justify-content: center;">
        <div class="col-6 w-25">
            <a>Esqueci minha senha.</a>
        </div>
        <div class="col-6 w-25">
            <div class="btn btn-primary"
                style="width: 7rem; height: 2.5rem; background: linear-gradient(0deg, rgba(49,78,116,1) 0%, rgba(126,172,229,1) 100%); border: none;">
                Login</div>
        </div>
    </div>
    <div class="row h-100 mt-5 mb-5" style="justify-content: center;">
        <div class="border border-black rounded-5" style="text-align: center; width: 17rem;">
            <p class="fs-4 align-middle mb-0">UPA Mahatma Gandhi</p>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>