<html lang="es">
  <head>    
    <title>Reaseuradora</title>    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <META NAME="revisit-after" content="7 days">
    <META NAME="robots" content="index,follow">
    <META NAME="distribution" content="global">
    <!-- CSS de Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">    
    <link href="<?php echo base_url('css/jasny-bootstrap.min.css');?>" rel="stylesheet" media="screen"> 
    <link href="<?php echo base_url('css/maquetado.css');?>" rel="stylesheet" media="screen">    
    <!-- JS de Bootstrap -->
    <script src="<?php echo base_url('js/jquery-1.11.1.min.js');?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('js/jasny-bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('js/principal.js');?>"></script>
    <?php 
    if(isset($script) && count($script))
      foreach ($script as $s)
        echo '<script src="'.base_url($s).'" ></script>';
    ?>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device‐width, initial‐scale=1.0, maximum‐scale=1.0, user‐scalable=no">
  </head>
  <body>
    <header role="banner">      
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">                
        <div class="container">          
          <div class="navbar-header">            
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Barra de Navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SIIA</a>
          </div>                      
            <?php
              echo $menu;
            ?>          
        </div>
      </div>
    </header>
 

