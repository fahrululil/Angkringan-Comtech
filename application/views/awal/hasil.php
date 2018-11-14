<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
      
		else
		{
			echo "Data tidak ditemukan";
		}
 
		?>

</body>
</html>