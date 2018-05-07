<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas UTS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>

    <!-- Custom styles for this template -->
    <link rel ="stylesheet" href="assets/css/clean-blog.min.css">

  </head>

<?php

      echo form_open('home/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <?php echo validation_errors(); ?>
        <tr>
          <td>Nama Barang</td>
          <td>:</td>
          <td><input type="text" name="input_nama_barang" value="<?php echo set_value('input_nama_barang'); ?>"></td>
        </tr>
        <tr>
          <td>Jumlah Stok</td>
          <td>:</td>
          <td><input type="text" name="input_jumlah_stok" value="<?php echo set_value('input_jumlah_stok'); ?>"></td>
        </tr>
        <tr>
          <td>Harga Satuan </td>
          <td>:</td>
          <td><input type="text" name="input_harga_satuan" value="<?php echo set_value('input_harga_satuan'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Keterangan </td>
          <td>:</td>
          <td><input type="text" name="input_keterangan" value="<?php echo set_value('input_keterangan'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" id="date1" alt="date" class="IP_calendar" title="d/m/Y" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        


        <tr>
          <label>Kategori : </label>
          <select name="id_kategori" class="form-control" required> 
            <option value="">Pilih Category</option>
            <?php foreach ($Category as $Category): ?>
              <option value="<?php echo $Category->id_kategori; ?>"><?php echo $Category->nama_kategori; ?></option>
              <?php endforeach; ?>
            </select>
            

        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="<?php echo set_value('input_gambar'); ?>simpan"></td>
        </tr>

      </table>
    </div>