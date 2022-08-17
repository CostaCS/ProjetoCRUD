<?php include_once "headersite.php"; ?>
<div class="container mt-5">
<h2>Listar Lutadores</h2>
<?php
    include_once "conexao.php";
 
    $sql = "SELECT * FROM user_fight";

    $res = $conexao->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Estilo Marcial</th>";
            print "<th>Tempo de Treinamento</th>";
            print "<th>Local de Treino</th>";
            print "<th>Gênero</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while ($row = $res -> fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->name_fighter."</td>";
            print "<td>".$row->modality_fighter."</td>";
            print "<td>".$row->traintime_fighter."</td>";
            print "<td>".$row->gym_fighter."</td>";
            print "<td>".$row->genre_fighter."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-primary'>Editar</button>

                   <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td";
            print "</tr>";
        }
          print "</table>";
    }else{
        print "<p class='alert alert-danger'> Nenhum resultado encontrado!</p>";
    }


?>
</div>
<?php include_once "footer.php" ?>