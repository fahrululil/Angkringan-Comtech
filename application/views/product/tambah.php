<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<?php
//print_r($category);
    echo '<h2>Input Data Product</h2>';
	echo form_open_multipart();
	echo form_label('nama');
	echo '<br>';
	echo form_input('nama');
	echo '<br>';
    echo form_label('harga');
    echo '<br>';
    echo form_input(array('name'=>'harga','type'=>'number'));
    echo '<br>';
    echo form_label('stock');
    echo '<br>';
    echo form_input(array('name'=>'stock','type'=>'number'));
    echo '<br>';
    echo form_label('id_kategori');
    echo '<br>';
    echo '<select name="id_kategori">';
    foreach ($category as $key => $value) 
    {
	    echo '<option value="'.$value['id'].'">'.$value['nama'].'</option>';
    }
    echo '</select>';
    ?>
    <?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
    <table cellpadding="8">
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="input_gambar"></td>
        </tr>
    </table>
        
    <hr>
    <input type="submit" name="submit" value="Simpan">
    <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>

</body>
</html>