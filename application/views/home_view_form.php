<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas UTS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel ="stylesheet" href="assets/css/clean-blog.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="../../assets/img/logo.jpg" width="60" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-trigger" href="welcome">Home</a>
            </li>
          

            <li class="nav-item">
              <a class="nav-link" href="home">Data Barang</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="home">Data Tabel</a>
            </li>



          </ul>
        </div>
      </div>
    </nav>



    <br><br><br>

	<div class="container">
		<h1><?=$tipe?> Edit Data Barang</h1>
		  <form method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama Barang
				</label>
				  <div class="col-sm-10">
					   <input type="text" class="form-control" name="nama_barang" value="<?=isset($default['nama_barang'])? $default['nama_barang'] : ""?>" required>
				  </div>
        <label class="control-label col-sm-2">
          Jumlah Stok
        </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jumlah_stok" value="<?=isset($default['jumlah_stok'])? $default['jumlah_stok'] : ""?>" required>
        </div>
				<label class="control-label col-sm-2">
					Harga Satuan					
				</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jumlah_stok" value="<?=isset($default['jumlah_stok'])? $default['jumlah_stok'] : ""?>" required>
          </div>
        <label class="control-label col-sm-2">
          Keterangan          
        </label>
				  <div class="col-sm-10">
					   <textarea name="content" class="form-control" required><?=isset($default['content'])? $default['content'] : ""?></textarea>
				  </div>
			</div>
			
			     <center>
			           <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
			     </center>
		</form>
</div>
      <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/clean-blog.min.js"></script>
</body>
</html>
