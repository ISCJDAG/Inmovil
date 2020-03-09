<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <link rel="stylesheet" href=" <?php echo PATH_CSS.'/materialize.min.css';?>" >
    <link rel="stylesheet" href="<?php echo PATH_CSS.'/fonts-icons.css'?>" >
    <link rel="stylesheet" href=" <?php echo  PATH_CSS.'/sweetalert2.css'?>" >
    <link rel="stylesheet" href=" <?php echo PATH_CSS.'/body.css'?>" >
    <title>HOME</title>
    <style media="screen">
    body{
      text-transform: uppercase;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      

    }
    main {
      flex: 1 0 auto;
      
    }

    </style>
  </head>
  <body>

    <main>
      <?php ////aqui la condicion para ver que menu se mostrara dependiendo del nivel del
      //usuario. sea admin o usuario o supervisor ?>
      <?php //require_once 'alert_message.php'; ?>
      <?php require_once 'menu_admin.php' ?>
