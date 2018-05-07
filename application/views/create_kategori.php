<title>Tugas UTS</title>
<div class="container">
  <?php echo validation_errors(); ?>
  
      <?php
        echo form_open('Category/create', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Nama Kategori</td>
          <td>:</td>
          <td><input type="text" name="nama_kategori" value="<?php echo set_value('nama_kategori'); ?>"></td>
        </tr>
        <tr>
    <tr>
        <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>