<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $tel = $_POST["telefone"];
            $codigo = $_POST["encomenda"];

            $api = file_get_contents("https://api.linketrack.com/track/json?user=elderrramos@gmail.com&token=2b0f5d48bb39f9700990173e1f9fb6c1a1ae57491e87b09e25c7d07c1d656547&codigo=".$codigo);

            // código inválido
            if($api == FALSE){
                print "<script>alert('ERRO! Código inválido')</script>";
                print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
                break;
            }else{
                $objetoAPI = json_decode($api);
                $data = $objetoAPI->eventos[0]->data;

                // dd/mm/yyyy -> yyyy/mm/dd + hh:mm
                $dateTime = implode('-', array_reverse(explode('/', "{$data}")))." ".$objetoAPI->eventos[0]->hora;

                $sql = "INSERT INTO usuarios (numero, codigo, atualizacao) VALUES ('{$tel}', '{$codigo}', '{$dateTime}')";
                $res = $conexao->query($sql);

                if($res==true){
                    print"<script>alert('Cadastro realizado com sucesso!')</script>";
                    print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
                }else{
                    print"<script>alert('ERRO! Cadastro NÃO realizado')</script>";
                    print"<meta http-equiv='refresh' content='0; url=index.php?page=listar'>";
                }
                break;
            }
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
