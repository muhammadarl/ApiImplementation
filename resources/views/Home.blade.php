<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="frontend/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" style="color: black;" href="index.html">Download.Io</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color: black;" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color: black;" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color: black;" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" ">
    <div class="jumbotron" style="background-image: url('frontend/img/home-bg.jpg')">
        <h1 class="display-4" style="text-align: Center;">Download Tools</h1>
        <h2 style="text-align: Center;">Easy To Use Online Download Tools</h2>
    </div>
  </header>

  <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-youtube fa-5x"></i>
                        <h5 class="card-title" style="text-align:center;">Youtube</h5>
                        <a href="#" class="btn btn-primary" >Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-tiktok fa-5x"></i>
                        <h5 class="card-title" style="text-align:center;">Tiktok</h5>
                        <a href="#" class="btn btn-primary" >Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-twitter fa-5x"></i>
                        <h5 class="card-title" style="text-align:center;">Twitter</h5>
                        <a href="#" class="btn btn-primary" >Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-instagram fa-5x"></i>
                        <h5 class="card-title" style="text-align:center;">Instagram</h5>
                        <a href="#" class="btn btn-primary" >Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-virus fa-3x"></i>
                        <h5 class="card-title" style="text-align:center;">Corona</h5>
                        <?php
                             $kawalcorona = Http::get('https://api.kawalcorona.com/indonesia');
                             $dataK = $kawalcorona->Json();
                             echo "Daerah: ".$dataK[0]['name']."<br>";
                             echo "Positif: ".$dataK[0]['positif']."<br>";
                             echo "Sembuh: ".$dataK[0]['sembuh']."<br>";
                             echo "Meninggal: ".$dataK[0]['meninggal'];
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-thumbtack fa-3x"></i>
                        <h5 class="card-title" style="text-align:center;">Gempa Bumi</h5>
                        <?php
                             // Kode Baris PHP untuk Mengolah Data gempaterkini.xml
                             $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                             echo "Tanggal: " . $data->gempa->Tanggal . "<br>";
                             echo "Jam: " .  $data->gempa->Jam . "<br>";
                             echo "Magnitudo: " . $data->gempa->Magnitude . "<br>";
                             echo "Kedalaman: " . $data->gempa->Kedalaman . "<br>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-bolt fa-3x"></i>
                        <h5 class="card-title" style="text-align:center;">Cuaca</h5>
                        <?php
                             $Cuaca = Http::get('https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0010_Soekarno%20-%20Hatta.json');
                             $dataC = $Cuaca->Json();
                             echo "Daerah: ".$dataC['name']."<br>";
                             echo "Waktu: ".$dataC['data'][0]['valid_from']."<br>";
                             echo "Cuaca: ".$dataC['data'][0]['weather']."<br>";
                             echo "Wind: ".$dataC['data'][0]['wind_to']."<br>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
       <br><br>
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container ">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="frontend/vendor/jquery/jquery.min.js"></script>
  <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="frontend/js/clean-blog.min.js"></script>

</body>

</html>
