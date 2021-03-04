<div class="position-relative">
    <!--Cabeçalho-->
    <div class="bg-dark">
        <div class="container p-2 d-flex justify-content-between">
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="./src/assets/img/brasao.png" height="22" width="20"/>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <span class="text-white"><?php echo($_SESSION['nome']); ?></span>
                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!--Corpo-->
    <div class="container">
        <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle-x pt-2">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Cadastro</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Consulta</label>
                </div>
            </div>
        </div>
    </div>
</div>