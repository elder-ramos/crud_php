<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $tel = $_POST["telefone"];
            $codigo = $_POST["encomenda"];

            $sql = "INSERT INTO usuarios (numero, codigo) VALUES ('{$tel}', '{$codigo}')";

            $res = $conexao->query($sql);

            if($res==true){
                print"<script>alert('Cadastro realizado com sucesso!')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
            }else{
                print"<script>alert('ERRO! Cadastro NÃO realizado')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
            }
            break;
        case "editar":
            $tel = $_POST["telefone"];
            $codigo = $_POST["encomenda"];

            $sql = "UPDATE usuarios SET numero = '{$tel}', codigo = '{$codigo}' WHERE id=".$_REQUEST['id'];

            $res = $conexao->query($sql);

            if($res==true){
                print"<script>alert('Atualização realizada com sucesso!')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
            }else{
                print"<script>alert('ERRO! Cadastro NÃO atualizado')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
            }
            break;
        case "excluir":
            $sql = "DELETE FROM `usuarios` WHERE id=".$_REQUEST['id'];;
            $res = $conexao->query($sql);

            if($res==true){
                print"<script>alert('Usuário apagado!')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
            }else{
                print"<script>alert('ERRO ao deletar!')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
            }
            break;
    }
?>