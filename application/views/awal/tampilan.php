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
	   	<form class="navbar-form" action="<?php echo base_url('User/hasil')?>" method="post">
	      <div class="form-group">
		<input type="Search" class="form-control" name = "keyword" />
	      </div>
	      <input type="submit"  class="btn btn-default" name="q" value = "Search" />
	    </form>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
	<!-- Nav tabs -->
	<ul class="tablist" role="tablist">
	  <li role="presentation" class="active"><a href="#featured-item" aria-controls="featured-item" role="tab" data-toggle="tab">Hot News</a></li>
	  <li role="presentation"><a href="#best-seller" aria-controls="best-seller" role="tab" data-toggle="tab">Aksesoris</a></li>
	  <li role="presentation"><a href="#discount" aria-controls="discount" role="tab" data-toggle="tab">Komputer</a></li>
	  <li role="presentation"><a href="#premium" aria-controls="premium" role="tab" data-toggle="tab">Laptop</a></li>
	  <li role="presentation"><a href="#gift-idea" aria-controls="gift-idea" role="tab" data-toggle="tab">Sperpart</a></li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane active" id="featured-item">
	    <div class="tab-text">
	    
	    	
	      <h2><?php echo $feature['nama'] ?></h2>
	      <p><?php echo $feature['isi'] ?></p>
	      <a href="http://localhost/angkringan/user/detail/30" class="btn btn-default">Read More</a>
	    </div> <!-- tab-text -->
	   
	    <img style="width: 400px; height: 300px;" src="<?php echo image_module('artikel',$feature['id'].'/'.$feature['iklan']) ?>"/>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="best-seller">
	    <div class="tab-text">
	      <h2><?php echo $feature2['nama'] ?></h2>
	      <p><?php echo $feature2['isi'] ?></p>
	      <a href="http://localhost/angkringan/user/detail/32" class="btn btn-default">Read More</a>
	    </div> <!-- tab-text -->
	    <img style="width: 400px; height: 300px;" src="<?php echo image_module('artikel',$feature2['id'].'/'.$feature2['iklan']) ?>"/>
	  </div>	    
	  <div role="tabpanel" class="tab-pane" id="discount">
	    <div class="tab-text">
	      <h2><?php echo $feature['nama'] ?></h2>
	      <p><?php echo $feature['isi'] ?></p>
	      <a href="http://localhost/angkringan/user/detail/30" class="btn btn-default">Read More</a>
	    </div> <!-- tab-text -->
	    <img style="width: 400px; height: 300px;" src="<?php echo image_module('artikel',$feature['id'].'/'.$feature['iklan']) ?>"/>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="premium">
	    <div class="tab-text">
	      <h2><?php echo $feature3['nama'] ?></h2>
	      <p><?php echo $feature3['isi'] ?></p>
	      <a href="http://localhost/angkringan/user/detail/27" class="btn btn-default">Read More</a>
	    </div> <!-- tab-text -->
	    <img style="width: 400px; height: 300px;"  src="<?php echo image_module('artikel',$feature3['id'].'/'.$feature3['iklan']) ?>"/>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="gift-idea">
	    <div class="tab-text">
	      <h2><?php echo $feature4['nama'] ?></h2>
	      <p><?php echo $feature4['isi'] ?></p>
	      <a href="http://localhost/angkringan/user/detail/28" class="btn btn-default">Read More</a>
	    </div> <!-- tab-text -->
	   <img style="width: 400px; height: 300px;"  src="<?php echo image_module('artikel',$feature4['id'].'/'.$feature4['iklan']) ?>"/>
	  </div>
	</div>
    </div> <!-- jumbotron -->

    <section id="products" class="">
      <div class="row">
      	<?php
      	if(count($barang)>0){
      	foreach ($barang as $key => $value) {
      	 	?>
      	 	<div class="col-md-4">
			  <div class="thumbnail">
			    <img src="<?php echo image_module('barang',$value['id'].'/'.$value['gambar']) ?>">
			    <div class="caption">
			      <h4 class="pull-right">Rp <?php echo $value['harga'] ?></h4>
			      <h4><a href="<?php echo 'user/detail/'.$value['id'] ?>"><?php echo $value['nama'] ?></a></h4>
			      <p><?php echo $value['deskripsi'] ?></p>
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
      	 	<?php
      	 } 
      	}
      	?>
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
