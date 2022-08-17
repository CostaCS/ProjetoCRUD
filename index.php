<?php include_once "header.php" ?>
     <div class="row justify-content-evenly align-items-center pt-4">
            
        <div class="col-auto ">
            <img src="css/img/mma.png" width="500px">

        </div>
        <div class="col-auto bg-dark p-5 rounded border border-dark border-1 text-light" style="box-shadow: 2px 2px 5px red ,2px 2px 5px red inset">
            <h3 class="col-auto text-light pb-1">Login</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])){
                    ?>
                    <div class="notification bg-danger bg-gradient p-1 rounded border border-danger border-2">
                      <h6 class="pt-1 fw-bolder"> ERRO: Usuário ou senha inválidos.</h6>
                    </div>
                    <?php
                   }
                    unset($_SESSION['nao_autenticado']);
                    ?>
                  
            <form action="login.php" method="POST" class="d-grid gap-3 " >
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuário:</label>
                    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do usuário">       
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha:</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-danger border-2 border-danger">Entrar</button>
                 
                <div>
                      <a href="cadastrauser.php" class="text-decoration-none fst-italic">
                          Ainda não tem conta? Cadastre-se.
                       </a>
                 </div>
            </form>
                
        </div>
        
    </div>
    
</div>
    
<?php include_once "footer.php" ?>