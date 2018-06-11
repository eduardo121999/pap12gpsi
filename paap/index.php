﻿<?php
 require_once 'easysql.php';

 //Para conectar têm de criar um novo objecto do easysql
 $objecto = new easySQL();
 
 //Agora para conectar a db têm de ir ao ficheiro easySQL e no host meter localhost, no username: root e na pw a branco

  $objecto->Connect();

  //Agora para um query é so fazer aqueles comandos de sql e meter no query
  $cafes = $objecto->query("select * from perfplace.cafe_style");
  $comida = $objecto->query("select * from perfplace.food");
  $utilizador = $objecto->query("select * from perfplace.utilizadores");
  
?>
<html lang="en">
<head>
<title>PerfPlace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body  style="background-color:#3C3C41"; background="255373_gorod_-restoran_-zaliv_2560x1440_www.Gde-Fon.com.jpg";>


<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white; font-family:arial black;" > PerfPlace </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="nav-link" href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurantes <span class="caret"></span></a>
        <ul class="dropdown-menu">
			<?php 
				if (isset($comida))
				{
					foreach($comida as $c)
					{
						echo "<li><a class=\"nav-link\" href='".$c['f_pagename']."'>". $c['f_name'] ."</a></li>";
					}
				}
					
				
			?>
        </ul>
      </li>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cafés <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <?php
				if (isset($cafes))
				{
					foreach($cafes as $ca)
					{
						echo "<li><a class=\"nav-link\" href='".$ca['c_pagename']."'>". $ca['c_name'] ."</a></li>";
					}
				}
		  ?>

    </ul>
    
	
  </div>


 </nav>
<div class="container">

<br>
<br>
<img src="Capturar.png"  class="img-rounded" align="middle">

</body>
</html>