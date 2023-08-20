<h1>Lista de usuários</h1>
<?php
    $sql = "SELECT * FROM `usuarios`";
    $res = $conexao->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p class='alert alert-success'>Exibindo $qtd resultado(s)!</p>";
        print "<table class='table table-striped table-bordered'>";
        print "<tr>
                <th>#</th>
                <th>Número</th>
                <th>Código</th>
                <th>Ações</th>
            </tr>";
        while($row = $res->fetch_object()){
            print "<tr>
                <td>$row->id</td>
                <td>$row->numero</td>
                <td>$row->codigo</td>
                <td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                        location.href='?page=usuario&acao=excluir&id=".$row->id."'
                    }\" class='btn btn-danger'>Excluir</button>
                </td>
            </tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Sem resultados!</p>";
    }
?>