<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM `usuarios` WHERE id=".$_REQUEST["id"];
    $res = $conexao->query($sql);
    $row = $res->fetch_object();
    // print var_dump($res);
?>

<form action="?page=usuario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $_REQUEST["id"]?>">
        <div class='mb-3'>
            <label for='telefone'>Número de telefone:</label>
            <input type='number' name='telefone' class='form-control' value="<?php print $row->numero?>" required>
        </div>
        <div class='mb-3'>
            <label for='encomenda'>Código da encomenda</label>
            <input type='text' name='encomenda' class='form-control' value="<?php print $row->codigo; ?>" required>
        </div>
        <div class='mb-3'>
            <button type='submit' class='btn btn-primary'>Enviar</button>
        </div>
</form>