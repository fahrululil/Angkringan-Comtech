<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Angkringan comtech</title>
    <link rel="shortcut icon" href="<?php echo base_url('include/admin/images/logo.png')?>" />

    <!-- <link href="http://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet" type="text/css"/> -->

    <!-- Custom styles for this template (imports bootstrap from LESS) -->
    <link href="<?php echo base_url('include/css/style.css')?>" rel="stylesheet">

  </head>

  <body>

  <div class="container">

    <header>
    <div class="row">
	<div class="col-md-5 col-sm-12">
	 <img src="<?php echo base_url('images/logo.png')?>" alt="logo"><br><br>
	</div> <!-- col-md-4 -->
		<div class="col-md-12 col-sm-12">

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
    
    <!-- Main component for a primary marketing message or call to action -->
	<!-- Nav tabs -->
	
	<!-- Tab panes -->
	 <!-- jumbotron -->

    <section id="products" class="">
      <div class="row">
      	 	<div class="col-md-4">
			  <div class="thumbnail">
			    <img src="<?php echo image_module('barang',$sp['id'].'/'.$sp['gambar']) ?>">
			    <div class="caption">
			      <h4 class="pull-right">Rp <?php echo $sp['harga'] ?></h4>
			      <h4><a href="<?php echo 'detail/'.$sp['id'] ?>"><?php echo $sp['nama'] ?></a></h4>
			      <p><?php echo $sp['deskripsi'] ?></p>
			    </div> <!-- caption -->
			    <div class="ratings" id="">
			      <p class="pull-right">15 Reviews</p>
			      <p>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
			      </p>
			    </div>
			  </div> <!-- thumbnail -->
      </div>
          <div class="col-md-4">
        <div class="thumbnail">
          <img src="<?php echo image_module('barang',$sp1['id'].'/'.$sp1['gambar']) ?>">
          <div class="caption">
            <h4 class="pull-right">Rp <?php echo $sp1['harga'] ?></h4>
            <h4><a href="<?php echo 'detail/'.$sp['id'] ?>"><?php echo $sp1['nama'] ?></a></h4>
            <p><?php echo $sp1['deskripsi'] ?></p>
          </div> <!-- caption -->
          <div class="ratings" id="">
            <p class="pull-right">15 Reviews</p>
            <p>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
            </p>
          </div>
        </div> <!-- thumbnail -->
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="<?php echo image_module('barang',$sp2['id'].'/'.$sp2['gambar']) ?>">
          <div class="caption">
            <h4 class="pull-right">Rp <?php echo $sp2['harga'] ?></h4>
            <h4><a href="<?php echo 'detail/'.$sp['id'] ?>"><?php echo $sp2['nama'] ?></a></h4>
            <p><?php echo $sp2['deskripsi'] ?></p>
          </div> <!-- caption -->
          <div class="ratings" id="">
            <p class="pull-right">15 Reviews</p>
            <p>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star"></span>
            </p>
          </div>
        </div> <!-- thumbnail -->
      </div>
          
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
