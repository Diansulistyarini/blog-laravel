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
    <title>Home</title>
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

  <p style="text-align: center">Hallo saya Dian Sulistyarini kelas XII RPL 1 di blog ini terdapat Profile, Experience, dan Portofolio saya. <br> 
    Blog ini sebenarnya adalah tugas namun bagi saya ini adalah tempat untuk mengexplore karya, atau menunjukkan kreatifan diri. <br>
    Untuk yang penasaran tentang saya, bisa lihat blog ini!!</p>
  
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
              <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://github.com/Diansulistyarini"><i class="fab fa-github"></i></a>
              <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://www.youtube.com/channel/UCJvcsKmPA-omCqB6OVzsw7w?view_as=subscriber"><i class="fab fa-fw fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://www.instagram.com/dianslstyrn/"><i class="fab fa-instagram"></i></a>
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