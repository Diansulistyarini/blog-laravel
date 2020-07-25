<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/js/app.js') }}" defer></script>

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
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <center>
        <img src="img/dian.jpg" width="90px" height="90px" class="rounded-circle">
      </center>
      
      <h3 style="color: black; text-align:center">Dian Sulistyarini</h3>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -32px;">
    
    
      <div class="navbar-nav">
        <a class="nav-item nav-link active" style="margin-left:530px" href="/home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/profile">Profile</a>
        <a class="nav-item nav-link" href="/experience">Experience</a>
        <a class="nav-item nav-link" href="/portfolio">Portofolio</a>
      </div>
    </div>
  </nav>

  Hallo saya Dian Sulistyarini kelas XII RPL 1 di blog ini terdapat Profile, Experience, dan Portofolio saya

</body>

<!-- Footer-->
<div class="col-lg-4 mb-5 mb-lg-0">
  <h4 class="text-uppercase mb-4">Lets Visit</h4>
  <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/dianslstyrn/"><i class="fab fa-instagram"></i></a>
  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
  <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/Diansulistyarini"><i class="fab fa-github"></i></a>
</div>

</html>