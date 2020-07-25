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
    <title>Portofolio</title>
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
          <a class="nav-item nav-link " style="margin-left:530px" href="/home">Home</a>
          <a class="nav-item nav-link" href="/profile">Profile</a>
          <a class="nav-item nav-link" href="/experience">Experience</a>
          <a class="nav-item nav-link active" href="/portfolio">Portofolio<span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
      <div class="container">
          <!-- Portfolio Section Heading-->
          <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
          <!-- Icon Divider-->
          <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          <!-- Portfolio Grid Items-->
          <div class="row">
              <!-- Portfolio Item 1-->
              <div class="col-md-6 col-lg-4 mb-5">
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="" />
                  </div>
              </div>
              <!-- Portfolio Item 2-->
              <div class="col-md-6 col-lg-4 mb-5">
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="" />
                  </div>
              </div>
              <!-- Portfolio Item 3-->
              <div class="col-md-6 col-lg-4 mb-5">
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="" />
                  </div>
              </div>
              <!-- Portfolio Item 4-->
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="assets/img/portfolio/game.png" alt="" />
                  </div>
              </div>
              <!-- Portfolio Item 5-->
              <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="" />
                  </div>
              </div>
              <!-- Portfolio Item 6-->
              <div class="col-md-6 col-lg-4">
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                      </div>
                      <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="" />
                  </div>
              </div>
          </div>
      </div>
  </section>
    
  <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Log Cabin</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 2-->
      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Tasty Cake</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 3-->
      <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Circus Tent</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 4-->
      <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Controller</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 5-->
      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Locked Safe</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 6-->
      <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                  </button>
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Submarine</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

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