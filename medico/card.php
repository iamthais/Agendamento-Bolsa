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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                    <div class="">
                        <div class="row rounded mt-3 overflow-auto" style="height:45vh; border:2px solid black;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a type="submit" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>