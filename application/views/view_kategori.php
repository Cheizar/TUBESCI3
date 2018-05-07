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

    <!-- Custom styles for this template -->
    <link rel ="stylesheet" href="assets/css/clean-blog.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/logo.jpg" width="60" height="40"></a>
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

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/zalora.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Inventaris Barang</h1>
              <span class="subheading">Jaya Makmur</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->              

<br>
    <h1 class="black-text">TAMPIL KATEGORI</h1>
    <br>
    <td><a href='Category/create' class='btn btn-sm btn-info'>Tambah</a></td>



    <div class="card-content table-responsive">
      <div  class="col-sm-12 col-md-12">
        <table class="table">
          <thead class="text-primary">
            <th>Id Kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
          </thead>

          <tbody>
            <?php 
              foreach ($Category as $key)  : 
            ?>
            <tr>
            <td><?php echo $key->id_kategori ?></td>
            <td><?php echo $key->nama_kategori ?></td>
            <td><a href="Category/edit/<?php echo $key->id_kategori ?>" class='btn btn-info'>edit</a>
                  <a href='Category/delete/<?php echo $key->id_kategori ?>' class='btn btn-sm btn-danger'>Hapus</a></td>
            </tr>
          </tbody>
        <?php endforeach;?>
      </table>
    </div>
</div>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/clean-blog.min.js"></script>

  </body>

</html>
