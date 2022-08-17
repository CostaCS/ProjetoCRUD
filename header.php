<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IchigekiClub-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  
    <style >
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
    </style >
</head>
<body class="bg-dark bg-gradient">
    



<div class="container">
     <div class="row justify-content-start align-items-center">
        <div class="col-auto ">

            <img src="css/img/ichigeki.png" width="150px">
            

        </div>
        <div class="col-auto pb-5 pt-5" style="font-family: 'Exo', sans-serif; text-shadow: 2px 2px 10px black;">
            
            <h3 class="text-light">ICHIGEKI CLUB</h3>

        </div>
    </div>
   