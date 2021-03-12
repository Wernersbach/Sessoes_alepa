<?php
$pag = isset($_REQUEST['pag']) ? $pag = $_REQUEST['pag'] : $pag = 0;
$checked0 = '';
$checked1 = '';
if ($pag == 0) {
    $checked0 = 'checked';
} else {
    $checked1 = 'checked';
}
?>
<div class="bg2-primary row g-0 position-absolute bottom-0 start-0 end-0 top-0">
    <!--Barra lateral-->
    <div class="col-3 position-relativ p-2">

        <div class="position-relative d-flex justify-content-center p-2">
            <img class="img-fluid" src="./src/assets/img/brasao.png" height="30" width="30" />
        </div>

        <div class="d-flex shadow-sm bg-body rounded p-2 p-2" style="margin-top: 33px !important;">
            <div class="d-flex align-items-center px-1">
                <i class="font-titulo-3 fas fa-portrait" style="font-size: 30px;"></i>
            </div>

            <span class="d-flex flex-column">
                <strong class="text-1 font-titulo-2">HANDERSEN MONTEIRO</strong>
                <span class="text-1 font-titulo">Administrador</span>
            </span>
        </div>

        <div class=" shadow-sm bg-body rounded p-2 p-2" style="margin-top: 31px !important;">
            <div class="p-2">
                <a class="simple-item" id="list-home-list" href="#" aria-controls="cadastro">Sessões</a>
            </div>
        </div>
        <!--
        <div class="container p-2 d-flex justify-content-between">
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="./src/assets/img/brasao.png" height="22" width="20"/>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <span class="text-white"><?php echo ($_SESSION['nome']); ?></span>
                <button type="button" onclick="window.location.href='/sair.php?'" class="btn-close btn-close-white" aria-label="Close"></button>
            </div>
        </div>
        -->
    </div>

    <!--Corpo-->
    <div class="col p-2">
        <div class="shadow-sm bg-body rounded p-2">
            <?php
            if ($pag == 1) {
                echo '<i class="font-titulo-3 fas fa-search"></i>';
            } else {
                echo '<i class="font-titulo-3 fas fa-file-alt"></i>';
            }
            ?>
        </div>

        <div class="py-2">
            <h5 class="font-titulo-3 text-dark">Controle de Sessões</h5>
        </div>

        <div class="shadow-sm bg-body rounded p-2">
            <div class="">
                <a class="btn btn-primary btn-sm" href="/?pag=0">Adicionar</a>
                <a class="btn btn-secondary btn-sm" href="/?pag=1">Visualização</a>
            </div>
            <div class="bg2-primary p-3 mt-3">
                <?php
                if ($pag == 1) {
                    include_once './src/views/formularios/consulta.php';
                } else {
                    include_once './src/views/formularios/cadastro.php';
                }
                ?>
            </div>
        </div>
    </div>
</div>