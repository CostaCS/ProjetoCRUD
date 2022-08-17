<?php include_once "header.php" ?>


     <div class="row justify-content-around align-items-center ">
        <div class="col">
            <img src="css/img/kyokushin.png" width="400px">
        </div>   
        <div class="col-5 bg-dark p-5 rounded border border-dark border-1 text-light" style="box-shadow: 2px 2px 5px red ,2px 2px 5px red inset">

            <h3 class="col-12 text-light pb-1">Novo usuário</h3>
            <form action="salvaruser.php" method="POST">
           
            <div class="mb-3">
                <label>Nome:</label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="mb-3">
                <label>Senha:</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label>E-mail:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-danger">Enviar</button>
            </div>
        </form>

        </div>
       
        
    </div>
    
</div>

<div class="container pt-4">
    <div class="row justify-content-evenly align-items-end">
        <div class="col-auto fst-italic">
            <a href="index.php" class="text-decoration-none text-light"><i class="bi bi-box-arrow-left"></i> VOLTAR </a>
        </div>
    </div>
</div>

<?php include_once "footer.php" ?>