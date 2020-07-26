<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
      .jumbotron{
        background-image: url(img/foto1.jpg);

      }
    </style>
    <title>Home Laravel</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" style="margin-left:530px;color:white" href="/home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style="color:white" href="/profile">Profile</a>
      <a class="nav-item nav-link" style="color:white" href="/experience">Experience</a>
      <a class="nav-item nav-link" style="color:white" href="/portfolio">Portofolio</a>
    </div>
  </div>
</nav>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <center>
        <img src="img/dian.jpg" width="90px" height="90px" class="rounded-circle">
      </center>
      <br>
      <h3 style="color: black; text-align:center">Dian Sulistyarini</h3>
    </div>
  </div>

    <div style="margin-left: 3cm;">
      <h2 style="font-size: 25px;"> My Profile </h2>
      <p class="p"> Nama saya Dian Sulistyarini, saya lahir di Depok, 31 Juli 2003. Sekarang usiaku sudah
        menginjak 17 tahun, dan sekarang aku telah duduk di bangku kelas 12 di SMK Taruna Bhakti. Hobbiku adalah bermain basket,
        tapi cita-citaku ingin menjadi seorang IT Bisnis dan juga programmer. Satu impian yang
        ingin kuwujudkan adalah membahagiakan orang tuaku dengan prestasi yang aku raih.
        Dan ingin sekali dapat beasiswa kuliah di luar negeri untuk membanggakan kedua ortuku.
      </p>
    
    </div>
    
    <div class="text1" style="margin-left: 3cm;">
      <h2 style="font-size: 18px;"> Pendidikan: </h2>
      <hr width="150px">
      SD : SDN Mekarsari 2 (2009-2014)<br>
      SMP : SMPN 209 Jakarta (2014-2017<br>
      SMK : SMK Taruna Bhakti <br>
    
      Motto Hidup : Jika kita mempunyai suatu keinginan maka bertekadlah bahwa kita bisa <br>
      menggapainya, karena semua hal di dunia ini bisa kita dapatkan asal kita
      mau berusaha.
    
    </div>
  
  <!-- Footer-->
  <footer class="footer text-center bg-secondary" style="height: 80px;margin-top: 90px;">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-3 mb-lg-0" style="margin-top: -60px;">
              <h4 class="text-uppercase mb-4" style="margin-right: 10px">Lets Visit</h4>
              <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://www.instagram.com/dianslstyrn/"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://www.youtube.com/channel/UCJvcsKmPA-omCqB6OVzsw7w?view_as=subscriber"><i class="fa fa-youtube-play"></i></a>
              <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://github.com/Diansulistyarini"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
  </footer>

  <!-- Copyright Section-->
  <div class="copyright py-4 text-center text-white" style="height: 10px">
    <div class="container" style="text-align: center"><small>dian's_blog@2020</small></div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/js/app.js') }}" defer></script>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script> 

</body>

</html>