<?php
session_start();
if(!isset($_SESSION['from']) and !isset($_SESSION['to']))
header('location:index.html');
?>
<html>
    <head>
        <title>Bismillah Cabs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel = "icon" href ="images/b.png" type = "image/x-icon">
        <link rel="stylesheet" href="css/index.css">

        <script>
          $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
          });
          </script>

    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html"><b>Home</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"><b>About</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cars.html"><b>Cars</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html"><b>Services</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html"><b>Contact Us</b></a>
                </li>
              </ul>
            </div>
          </nav>

        <div class="container-fluid mt-5 mb-5 text-center">
            <a href="index.html"><h1 class="link">Bismillah <label class="text-warning">Cabs</label></h1></a>
            <a href="index.html"><img src="images/logo.png" width="70px" height="70px"></a><br>
            <a href="index.html#booking" class="btn btn-warning mt-3">Book Now</a>
        </div>


        <div class="container mb-5">
          <div class="row">
                <div class="col-sm-8">
                    
                    <div class="row">
                            <div class="col-sm-5">
                              <h3>Hatchback</h3>
                              <div id="demo1" class="carousel slide" data-ride="carousel">
                                  <ul class="carousel-indicators">
                                    <li data-target="#demo1" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo1" data-slide-to="1"></li>
                                    <li data-target="#demo1" data-slide-to="2"></li>
                                  </ul>
                                  
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="img-fluid" src="images/hatch1.jpg">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="images/hatch2.png">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="images/hatch3.jpg">
                                    </div>
                                  </div>
                                  
                                  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark"></span>
                                  </a>
                                  <a class="carousel-control-next" href="#demo1" data-slide="next">
                                    <span class="carousel-control-next-icon bg-dark"></span>
                                  </a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-sm-12">
                                  <form action="php/selection.php?type=hatch" method="POST">
                                    <table>
                                      <tr>
                                        <td class="col-sm-7"><h5>Indica or Similar</h5></td>
                                        <td class="p-2 text-warning"><h3>Rs. <?php echo $_SESSION['amtH']; ?></h3></td>
                                      </tr>
                                      <tr>
                                        <td><p>Rs. <?php echo $_SESSION['kmH']; ?> per/KM</p></td>
                                      </tr>
                                      <tr><td><p>Distance: <?php echo $_SESSION['distance']." Km" ?></p></td></tr>
                                      <tr>
                                        <td><a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Driver betta - Rs. 300 per trip and beyond 400Km driver betta will  be Rs. 600">More</a></td>
                                        <td class="col-sm-5"><input type="submit" class="btn btn-warning" value="Book"></td>
                                      </tr>
                                      </table>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><hr>
          
                          <div class="row">
                            <div class="col-sm-5">
                              <h3>Sedan</h3>
                              <div id="demo2" class="carousel slide" data-ride="carousel">
                                  <ul class="carousel-indicators">
                                    <li data-target="#demo2" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo2" data-slide-to="1"></li>
                                    <li data-target="#demo2" data-slide-to="2"></li>
                                  </ul>
                                  
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="img-fluid" src="images/sedan1.jpg">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="images/sedan2.jpg">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="images/sedan3.jpg">
                                    </div>
                                  </div>
                                  
                                  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark"></span>
                                  </a>
                                  <a class="carousel-control-next" href="#demo2" data-slide="next">
                                    <span class="carousel-control-next-icon bg-dark"></span>
                                  </a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-sm-12">
                                  <form method="POST" action="php/selection.php?type=sedan">
                                    <table>
                                      <tr>
                                        <td class="col-sm-7"><h5>Etios/ Dzire/ Amaze</h5></td>
                                        <td class="p-2 text-warning"><h3>Rs. <?php echo $_SESSION['amtSe']; ?></h3></td>
                                      </tr>
                                      <tr>
                                        <td><p>Rs. <?php echo $_SESSION['kmSe']; ?> per/KM</p></td>
                                      </tr>
                                      <tr><td><p>Distance: <?php echo $_SESSION['distance']." Km" ?></p></td></tr>
                                      <tr>
                                        <td><a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Driver betta - Rs. 300 per trip and beyond 400Km driver betta will  be Rs. 600">More</a></td>
                                        <td class="col-sm-5"><input type="submit" class="btn btn-warning" value="Book"></td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><hr>
                          
                          <div class="row">
                            <div class="col-sm-5">
                              <img src="images/tavera.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-sm-12">
                                  <form method="POST" action="php/selection.php?type=tavera">
                                    <table>
                                      <tr>
                                        <td class="col-sm-8"><h5>Tavera</h5></td>
                                        <td class="p-2 text-warning"><h3>Rs. <?php echo $_SESSION['amtT']; ?></h3></td>
                                      </tr>
                                      <tr>
                                        <td><p>Rs. <?php echo $_SESSION['kmT']; ?> per/KM</p></td>
                                      </tr>
                                      <tr><td><p>Distance: <?php echo $_SESSION['distance']." Km" ?></p></td></tr>
                                      <tr>
                                        <td><a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Driver betta - Rs. 300 per trip and beyond 400Km driver betta will  be Rs. 600">More</a></td>
                                        <td class="col-sm-5"><input type="submit" class="btn btn-warning" value="Book"></td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><hr>
          
                          <div class="row">
                            <div class="col-sm-5">
                              <h3>SUV</h3>
                              <div id="demo3" class="carousel slide" data-ride="carousel">
                                  <ul class="carousel-indicators">
                                    <li data-target="#demo3" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo3" data-slide-to="1"></li>
                                    <li data-target="#demo3" data-slide-to="2"></li>
                                  </ul>
                                  
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="img-fluid" src="images/suv1.jpg">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="images/suv2.jpg">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="images/suv3.jpg">
                                    </div>
                                  </div>
                                  
                                  <a class="carousel-control-prev" href="#demo3" data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark"></span>
                                  </a>
                                  <a class="carousel-control-next" href="#demo3" data-slide="next">
                                    <span class="carousel-control-next-icon bg-dark"></span>
                                  </a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-sm-12">
                                  <form method="POST" action="php/selection.php?type=suv">
                                    <table>
                                      <tr>
                                        <td class="col-sm-6"><h5>Xylo/ Innova/ Lodge/ Enjoy</h5></td>
                                        <td class="p-2 text-warning"><h3>Rs. <?php echo $_SESSION['amtS']; ?></h3></td>
                                      </tr>
                                      <tr>
                                        <td><p>Rs. <?php echo $_SESSION['kmS']; ?> per/KM</p></td>
                                      </tr>
                                      <tr><td><p>Distance: <?php echo $_SESSION['distance']." Km" ?></p></td></tr>
                                      <tr>
                                        <td><a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Driver betta - Rs. 300 per trip and beyond 400Km driver betta will  be Rs. 600">More</a></td>
                                        <td class="col-sm-5"><input type="submit" class="btn btn-warning" value="Book"></td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><hr>
                          
                          
                        
                        <div class="row">
                            <div class="col-sm-5">
                              <img src="images/tempo.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-sm-12">
                                  <form method="POST" action="php/selection.php?type=van">
                                    <table>
                                      <tr>
                                        <td class="col-sm-7"><h5>Tempo Traveller</h5></td>
                                        <td class="p-2 text-warning"><h3>Rs. <?php echo $_SESSION['amtV'];; ?></h3></td>
                                      </tr>
                                      <tr><td><p class="text-danger"><i class='fas fa-exclamation-circle'></i> Only available for Roundtrip<br><i class='fas fa-exclamation-circle'></i> Also distance must be more than 200Kms</p></td></tr>
                                      <tr>
                                        <td><p>Rs. <?php echo $_SESSION['kmV']; ?> per/KM</p></td>
                                      </tr>
                                      <tr><td><p>Distance: <?php echo $_SESSION['distance']." Km" ?></p></td></tr>
                                      <tr>
                                        <td><a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Driver betta - Rs. 500 per trip and beyond 400Km driver betta need to be changed">More</a></td>
                                        <td class="col-sm-5"><input type="submit" class="btn btn-warning" value="Book"></td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    
                    
                </div>

              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header"><h4>Additional Details</h4></div>
                      <div class="card-body">
                          <p class="text-danger"><i class='fas fa-hand-point-right'></i> For Roundtrip, more than 250Km makes additional charges depends upon the type of car.</p>
                          <p class="text-danger"><i class='fas fa-hand-point-right'></i> For Package, permissible distance is 10 Km for one hour, otherwise you have to pay according to your distance.</p>
                        <p><i class='fas fa-hand-point-right'></i> Extra Charges: Interstate Tax, Toll & Parking</p>
                        <p><i class='fas fa-hand-point-right'></i> No Extra Night Charges</p>
                        <p><i class='fas fa-hand-point-right'></i> Package Fare/KMS are approximate</p>
                        <p><i class='fas fa-hand-point-right'></i> Pricing will be calculated from Pick-up/Garage</p>
                        <p><i class='fas fa-hand-point-right'></i> Midnight to Midnight is a Day</p>
                        <p><i class='fas fa-hand-point-right'></i> Cab booked for Outstation cannot be used within city travel</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>


        <div class="container-fluid bg-warning p-5">
            <div class="row justify-content-around p-5">
                <div class="col-sm-4 mt-3">
                  <p><b>Bismillah Cabs</b> &#169; 2020 | Privacy Policy <br>Designed by Arun and Kesavan</p>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                    <b>SOCIAL MEDIA</b><br>
                  <a href="https://m.facebook.com/BismillahCabs26/" target="_blank" class="facebook"><i class='fab fa-facebook-square' style='font-size:36px'></i></a>
                  <a target="_blank" href="https://instagram.com/bismillah.cabs?igshid=iqjuqezhk5bf" class="insta"><i class='fab fa-instagram insta ml-3 mr-3' style='font-size:36px'></i></a>
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=+918220234556" class="whatsapp"><i class='fab fa-whatsapp-square whatsapp' style='font-size:36px'></i></a>
                </div>
                <div class="col-sm-4 mt-4">
                  <h4><a href="tel:8220234556" target="_blank"><p class="link"><i class='fas fa-phone-square-alt' style='font-size:26px'></i> 8220234556</p></a></h4>
              </div>
            </div>
        </div>

        </div>
    </body>
</html>