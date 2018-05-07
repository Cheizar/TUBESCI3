<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php echo form_open( 'Category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
   <label for="nama_kategori">Nama Kategori</label>
   <input type="text" class="form-control" name="nama_kategori" value="<?php echo set_value('nama_kategori') ?>" required>
   <div class="invalid-feedback"></div>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</body>
</html>