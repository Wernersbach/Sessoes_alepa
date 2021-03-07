<?php
$pag = isset($_REQUEST['pag']) ? $pag = $_REQUEST['pag'] : $pag = 0;
$checked0 = '';
$checked1 = '';
if($pag == 0){
    $checked0 = 'checked';
} else {
    $checked1 = 'checked';
}
?>
<div class="position-relative">
    <!--Cabeçalho-->
    <div class="bg-dark">
        <div class="container p-2 d-flex justify-content-between">
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="./src/assets/img/brasao.png" height="22" width="20"/>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <span class="text-white"><?php echo($_SESSION['nome']); ?></span>
                <button type="button" onclick="window.location.href='/sair.php?'" class="btn-close btn-close-white" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!--Corpo-->
    <div class="container">

        <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle-x pt-2">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                    <input type="radio" class="btn-check" onclick="window.location.href='/?pag=0'" name="btnradio" id="btnradio1" autocomplete="off" <?php echo($checked0)?>>
                    <label class="btn btn-outline-primary" for="btnradio1">Cadastro</label>

                    <input type="radio" class="btn-check" onclick="window.location.href='/?pag=1'" name="btnradio" id="btnradio2" autocomplete="off"  <?php echo($checked1)?>>
                    <label class="btn btn-outline-primary" for="btnradio2">Consulta</label>

                </div>
            </div>
        </div>

        <div class="" style="padding-top: 80px;">
            <?php
                if($pag == 1){
                    include_once './src/views/formularios/consulta.php';
                } else {
                    include_once './src/views/formularios/cadastro.php';
                }
            ?>
        </div>
    </div>
</div>

