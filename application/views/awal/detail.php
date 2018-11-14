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
    
    <section id="" class="">
      <div class="row">
	<div class="col-md-8">
	  <div class="row">
	    <div class="col-md-4">
	      <img class="main-image" src=" <?php echo base_url('images/modules/barang/'.$a['id'].'/'.$a['gambar']) ?> "/>
	    </div> <!-- col-md-4 -->
	    <div class="col-md-8">
	      <h2><?php echo $a['nama'] ?></h2>
	      <div class="price">Rp <?php echo $a['harga'] ?></div>
	      <div class="price">Tersisa <?php echo $a['stock'] ?> Barang</div>
	      <a href="<?php echo base_url('user/buy') ?>" class="btn btn-success">Buy Now</a>
	      <br/><br/><br/>
	      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
		      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			Detail Product :
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
		      <?php echo $a['deskripsi'].$a['deskripsi'] ?>
		    </div>
		  </div>
		</div>
		</div>
	      </div>
	    </div> <!-- col-md-8 -->
	  </div> <!-- row -->
	</div> <!-- col-md-8 -->
      </div> <!-- row -->
    </section>
        
  </div> <!-- /container -->
  
  <footer>
    <p>MyStore Copyright &copy; 2015 - <a href="#">Terms</a> &middot; <a href="#">Privacy</a></p>
  </footer>  
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url('include/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
