<?php

require_once './src/controllers/Banco2.php';

$conn = new Database2();
$conexao = $conn->obj();
$table = 'usuarios';
$data = $_REQUEST;
$ativo = false;

$tipos = array(1 => "Planária", 2 => "Comissões", 3 => "Outras");
if (in_array([1, 2, 3], $data['tipo'])) {
    $ativo = true;
}

if(count($data) > 0 && $ativo){
    
    $sql = 'INSERT INTO ' . self::$table . ' (tipo, data, link_gravacao, solicitante) VALUE (:tipo, :data, :link, :solicitante)';
    $cmd = $conexao->prepare($sql);
    $cmd->bindValue(':tipo', $data['tipo']);
    $cmd->bindValue(':data', $data['email']);
    $cmd->bindValue(':link', $data['email']);
    $cmd->bindValue(':solicitante', $data['email']);
    $cmd->execute();

    if ($cmd->rowCount() > 0) {
        return 'Usuário(a) inserido com sucesso!';
    } else {
        throw new \Exception("Falha ao inserir usuário(a)!");
    }
} else {
    echo("Erro ao salvar");
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <select class="form-select mb-3" name="tipo" aria-label="Default select example">
        <option selected>Tipo de sessão</option>
        <option value="1">Plenária</option>
        <option value="2">Comissões</option>
        <option value="3">Outras</option>
    </select>
    <div class="d-flex mb-3 row g-1">
        <div class="col input-group">
            <span class="input-group-text" id="basic-addon2">Data</span>
            <input type="text" class="form-control" name="data" placeholder="" aria-label="data" aria-describedby="basic-addon2">
        </div>
        <div class="col input-group">
            <span class="input-group-text" id="basic-addon3">Link</span>
            <input type="text" class="form-control" name="link" placeholder="url" aria-label="link" aria-describedby="basic-addon3">
        </div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon4">Solicitante</span>
        <input type="text" class="form-control" name="solicitante" placeholder="Código do gabinete que solicitou a sessão" aria-label="solicitante" aria-describedby="basic-addon4">
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <input class="btn btn-primary" type="submit" value="Salvar">
    </div>

</form>