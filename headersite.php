<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style >
         
          .navbar{
            font-family: 'Exo', sans-serif;
            background-color: black;
          }
          {
            background-color:black;
          }
          .container-fluid{
            background-color: black;
          }
          .carousel-item img{
              width: 100%;
              height: 300px;
              object-fit: cover;
          }
          .banner-icons{
              display:flex;
              align-items:center;
              justify-content:center;
              width:40px;
              height:40px;
              border-radius:50%;
              cursor: pointer;
              background-color: white;
              color: black;

          }
          .carousel-indicators li{
              height: 0.8rem;
              width: .8rem;
              border-radius: 50%;
              background-color: white;
          }
          .mybackground{
            background-image: url("rock.jpg");"
          }
          .fst-italic {
        overflow: hidden;
        position: relative;
        display: inline-block;
        color: red;
      }

      .fst-italic::before,
      .fst-italic::after {
      content: '';
        position: absolute;
        width: 100%;
        left: 0;
        color: white;
      }
      .fst-italic::before {
        background-color: red;
        height: 2px;
        bottom: 0;
        transform-origin: 100% 50%;
        transform: scaleX(0);
        transition: transform .3s cubic-bezier(0.76, 0, 0.24, 1);
        color: white;
      }
      .fst-italic:hover{
        color:white;
      }

      .fst-italic:hover::before {
        transform-origin: 0% 50%;
        transform: scaleX(1);
        color: white;
      }
      .fst-italic:hover::after {
        transform: translate3d(0, 0, 0);
        color: white;
      }
      .body{background-image: url(css/img/rock.jpg)}
    </style>

    <title>Ichigeki Club</title>
  </head>
  <body class="">
      
      <nav class="navbar navbar-expand-lg navbar-light  bg-gradient border-bottom border-2 border-dark ">
            
                  <a class="navbar-brand text-white" href="#"><img src="css/img/ichigeki.png" alt="logo" style="width:100px;"> ICHIGEKI CLUB </a>
                  
                  
                  <div class="collapse navbar-collapse flex-row-reverse " id="navbarNavDropdown">
                        <ul class="navbar-nav">
                             
                            
                              <li class="nav-item active ">
                                <a class="nav-link text-white" href="painel.php"><i class="bi bi-house-door-fill"></i> Home </a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link text-white" href="cadastrarlutador.php"> <i class="bi bi-person-plus-fill"></i> Novo Lutador</a>
                              </li>

                              <li class="nav-item ">
                                <a class="nav-link text-white" href="listarlutador.php"><i class="bi bi-person-check-fill"></i> Listar lutadores</a>
                              </li>
                              <li class="nav-item active">
                                <a class="nav-link text-white" href="logout.php"> <i class="bi bi-door-open-fill"></i> Sair</a>
                              </li>
                
                        </ul>
                  </div>
      </nav>
      <!-- <h2>Olá, <?php echo $_SESSION['usuario'];?></h2> -->
      <?php
                   
                  switch (@$_REQUEST["page"]) {
                      case "editar":
                        include("editarlutador.php");
                      break;
                      case "salvar":
                        include("salvarlutador.php");
                      break;
                  
                    } 
                ?>
  <nav class="navbar navbar-expand-lg">
  <div class="ms-5 text-light">Olá <?php echo $_SESSION['usuario'];?>, seja bem-vindo.</div>
  <div class="container-fluid col-5">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  text-light">
        <li class="nav-item  border-end border-1 border-danger">
          <a class="nav-link text-danger fst-italic" aria-current="page" href="kickboxing.php">KickBoxing Ichigeki</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-danger fst-italic" href="kyokushin.php">Karatê Kyokushin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      
      