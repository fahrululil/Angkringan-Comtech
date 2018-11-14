<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Angkringan-comtech</title>
    <link rel="shortcut icon" href="<?php echo base_url('include/admin/images/logo.png')?>" />

    <link href="http://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template (imports bootstrap from LESS) -->
    <link href="<?php echo base_url('include/css/style.css')?>" rel="stylesheet">

  </head>

  <body>

  <div class="container">

    <header>
      <div class="row">
	<div class="col-md-5 col-sm-12">
	 <img src="<?php echo base_url('images/logo.png')?>" alt="logo">
	</div> <!-- col-md-4 -->
		<div class="col-md-8 col-sm-12">
			
	  	
		</div>
      </div> <!-- row -->
    </header>

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
            <li><a href="<?php echo base_url('user/news') ?>">What's New</a></li>
            <li><a href="<?php echo base_url('user/spesial') ?>">Specials</a></li>
            <li><a href="<?php echo base_url('user/about') ?>">About Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
	    <form class="navbar-form">
	      <div class="form-group">
		<input type="text" class="form-control" placeholder="Search..."/>
	      </div>
	      <button type="submit" class="btn btn-default">Search</button>
	    </form>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <h3>Untuk Pembelian Barang ini anda bisa menghubungi WA,FB,EMAIL berikut:</h3>
      <img style="width: 50px; height: 50px;" src="<?php echo base_url('images/wa.jpg') ?>">     085212135757 Hari istiandi <br><br>
      <img style="width: 50px; height: 50px;" src="<?php echo base_url('images/wa.jpg') ?>">     08991900095 Galih Bagus w. <br><br>
      <img style="width: 40px; height: 40px;" src="<?php echo base_url('images/fb.png') ?>">       Hari istiandi <br><br>
      <img style="width: 40px; height: 40px;" src="<?php echo base_url('images/fb.png') ?>">       Galihwijaya <br><br>
      <img style="width: 40px; height: 40px;" src="<?php echo base_url('images/em.jpg') ?>">     kowekiesopo@gmail.com <br><br>
      <img style="width: 40px; height: 40px;" src="<?php echo base_url('images/em.jpg') ?>">     ghalichwijaya@gmail.com
    
    <!-- Main component for a primary marketing message or call to action -->
    
      </div> <!-- row -->
    </section>
    
  </div> <!-- /container -->
  
  <footer>
    <p>Copyright kelompom 8 SMK N 1 BANGSRI &copy; 2018 - <a href="#">Terms</a> &middot; <a href="#">Privacy</a></p>
  </footer>  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url('include/js/bootstrap.min.js')?>"></script>
  </body>
</html>
