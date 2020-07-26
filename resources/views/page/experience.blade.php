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
    <title>Experience</title>
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
    
      {{-- experience --}}
      <section class="page-section bg-info text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Experience</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- About Section Content-->

            <div class="row">
                <div class="col-lg-3 ml-auto"><p class="lead"><b>Seminar DSC</b><br>
                  <img src="img/dsc.jpg" width="200px">
                  <p>Development Student Clubs(DSC) disini saya <br>
                     mendapat ilmu baru dan banyak pengetahuan <br>
                     baru tentang dunia IT juga programmer.</p>
            </div>

            <div class="col-lg-3 ml-auto"><p class="lead"><b>Kunjungan Industri</b><br>
              <img src="img/cinovasi.jpg" width="200px">
              <p>Di kelas 10 ada kegiatan kunjungan industri<br>
                 ke PT. Cinovasi Rekprima, dari kegiatan tersebut<br>
                 pikiran saya tentang dunia pekerjaan di dunia IT jadi meluas<br>
              </p>
            </div>

            <div class="col-lg-3 ml-auto"><p class="lead"><b>Dicoding</b><br>
              <img src="img/sertifikat.jpg" width="200px">
              <p>Dicoding mengadakan ID Camp dan saya mengikuti 
                kelas web dasar dan submissionnya saya membuat 
                web profile menggunakan HTML dan CSS<br>
              </p>
            </div>

            <div class="col-lg-3 ml-auto"><p class="lead"><b>Starbhak Day</b><br>
              <img src="img/sbd.jpg" width="132px">
              <p>Starbhak Day adalah kegiatan ajang pameran karya siswa, di SMK Taruna Bhakti  <br>
                 rutin menggelar acara seperti itu untuk mengexplore para murid <br>
                 agar lebih memahami kondisi saat turun kelapangan seperti apa<br>
              </p>
            </div>
    </section>

     <!-- Footer-->
  <footer class="footer text-center bg-secondary" style="height: 80px;">
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
    
</body>
</html>