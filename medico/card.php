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
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <div class="container">
                    <div class="row rounded mt-3 overflow-auto" style="height:45vh; border:2px solid black;">
                        <div class="col-md-6 text-center" style="border: 1px solid black;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, atque dolor. Temporibus, molestias ratione amet debitis asperiores tempora quas illum illo, soluta alias dolorem, quam sint numquam voluptates magnam autem!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil soluta adipisci mollitia eius maxime aspernatur vel placeat sed culpa fugit molestias suscipit aut enim dicta, aliquid et laboriosam consectetur. Et.</p>
                        </div>
                        <div class="col-md-6 text-center" style="border: 1px solid black;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore facere dignissimos voluptatum, maxime at dolorum quae delectus harum laudantium nobis nesciunt, autem, laboriosam ex doloremque veritatis sint! Voluptas, in ab.</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="row rounded mt-3 overflow-auto" style="height:45vh; border:2px solid black;">
                            <div class="col-md-12 mt-2 mr-2">
                                <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
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