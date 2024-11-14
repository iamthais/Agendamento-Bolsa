<?php include "../header.php" ?>


<a class="button-style" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="abrirModal()">
    <div class="border shadow m-3 p-2" style="width: 240px; height: 95px; border-radius: 10px;">
        <span>Paciente</span>
        <p>
            <span>30/11/2007</span>
        </p>
        <div class="rounded ms-2" style="height: 10px; width: 10px; background-color: #000000;"></div>
    </div>
</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>