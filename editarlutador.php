
<?php
    include_once "conexao.php";
    include_once "headersite.php";
    $sql = "SELECT * FROM user_fight WHERE id=".$_REQUEST["id"];
    $res = $conexao->query($sql);
    $row = $res->fetch_object();


?>


<div class="container mt-5">
   
    <div class="row justify-content-center">
        <div class="col-9 p-1 bg-dark rounded border border-dark border-1 text-light" style="box-shadow: 4px 4px 9px black ,4px 4px 9px black inset">
        <div class="row justify-content-center p-2" style="font-family: 'Exo', sans-serif;">
                        <div class="col-auto">
                <h1>Editar Lutador</h1>
        </div>
        </div>

   <form action="salvarlutador.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <label>Nome:</label>
                <input type="text" name="name_fighter" value="<?php print $row->name_fighter?>" class="form-control" >
            </div>
            <div class="col">
                <label>Estilo de Luta:</label>
                <input type="text" name="modality_fighter" value="<?php print $row->modality_fighter?>" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                
                <label for="traintime">Tempo de treinamento:</label>
                <select name="traintime_fighter" id="traintime " value="<?php print $row->traintime_fighter?>" class="form-control">
                    <option value="Sem treinamento">Sem treinamento</opition>
                    <option value="0 a 2 anos">0 a 2 anos</opition>
                    <option value="2 a 5 anos">2 a 5 anos</opition>
                    <option value="5 a 10 anos">5 a 10 anos</opition>
                    <option value="10 a 20 anos">10 a 20 anos</opition>
                    <option value="20 anos ou mais">20 anos ou mais</opition>
                </select>
            </div>
            <div class="col">
                <label>Nome da academia:</label>
                <input type="text" name="gym_fighter" value="<?php print $row->gym_fighter?>" class="form-control">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-auto">
                <p>Gênero:</p>
            </div>
            <div class="col-auto">
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genre_fighter" value="<?php print $row->genre_fighter?>" id="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genre_fighter" value="<?php print $row->genre_fighter?>" id="feminino" value="feminino">
                    <label class="form-check-label" for="feminino">Feminino</label>
                </div>        
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>     
        </div>
             
    </div>

</form>
        </div>
    </div>
</div>



<?php include_once "footer.php" ?>