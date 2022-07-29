<?php
session_start();
if(!isset($_SESSION['from']) and !isset($_SESSION['to']) and !isset($_SESSION['distance']) and !isset($_SESSION['type']) and !isset($_SESSION['travelTime']) and !isset($_SESSION['start']) and !isset($_SESSION['amt']))
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


<div class="container">
    <div class="row">
        <div class="col-sm-6 mt-5">
            <div class="card">
                  <div class="card-header"><h4>Other Details</h4></div>
                  <div class="card-body">
                  <table class="table table-borderless">
                      <tr>
                          <td>Source</td>
                          <td><?php if(isset($_SESSION['from']))echo $_SESSION['from']; ?></td>
                      </tr>
                      <tr>
                          <td>Destination</td>
                          <td><?php if(isset($_SESSION['to']))echo $_SESSION['to']; ?></td>
                      </tr>
                      <tr>
                          <td>Distance</td>
                          <td><?php if(isset($_SESSION['distance']))echo $_SESSION['distance']." KM"; ?></td>
                      </tr>
                      <tr>
                          <td>Travelling Time</td>
                          <td><?php if(isset($_SESSION['travelTime']))echo $_SESSION['travelTime']; ?></td>
                      </tr>
                      <tr>
                          <td>Pickup Date</td>
                          <td><?php if(isset($_SESSION['start']))echo $_SESSION['start']; ?></td>
                      </tr>
                      <tr  class="jumbotron">
                          <td>Price</td>
                          <td>Rs. <?php if(isset($_SESSION['amt']))echo $_SESSION['amt']; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
        </div>
        <div class="col-sm-6 jumbotron mt-5">
                    <h2 class="text-center">Your Personal Information</h2>
                    <form action="php/payment.php" method="POST">
                        <table class="table table-borderless">
                            <tr>
                                <td><label for="">NAME</label></td>
                                <td><input required name="name" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="">EMAIL</label></td>
                                <td><input name="email" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="">CONTACT NUMBER</label></td>
                                <td><input required name="phone" type="number" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="">PICK UP ADDRESS</label></td>
                                <td><input required name="address" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="">PICK UP TIME</label></td>
                                <td><select required name="time" class="form-control">
                                    <option value="12:00 AM">12:00 AM</option>
                                    <option value="12:30 AM">12:30 AM</option>
                                    <option value="01:00 AM">01:00 AM</option>
                                    <option value="01:30 AM">01:30 AM</option>
                                    <option value="02:00 AM">02:00 AM</option>
                                    <option value="02:30 AM">02:30 AM</option>
                                    <option value="03:00 AM">03:00 AM</option>
                                    <option value="03:30 AM">03:30 AM</option>
                                    <option value="04:00 AM">04:00 AM</option>
                                    <option value="04:30 AM">04:30 AM</option>
                                    <option value="05:00 AM">05:00 AM</option>
                                    <option value="05:30 AM">05:30 AM</option>
                                    <option value="06:00 AM">06:00 AM</option>
                                    <option value="06:30 AM">06:30 AM</option>
                                    <option value="07:00 AM">07:00 AM</option>
                                    <option value="07:30 AM">07:30 AM</option>
                                    <option value="08:00 AM">08:00 AM</option>
                                    <option value="08:30 AM">08:30 AM</option>
                                    <option value="09:00 AM">09:00 AM</option>
                                    <option value="09:30 AM">09:30 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="10:30 AM">10:30 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="11:30 AM">11:30 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="12:30 PM">12:30 PM</option>
                                    <option value="01:00 PM">01:00 PM</option>
                                    <option value="01:30 PM">01:30 PM</option>
                                    <option value="02:00 PM">02:00 PM</option>
                                    <option value="02:30 PM">02:30 PM</option>
                                    <option value="03:00 PM">03:00 PM</option>
                                    <option value="03:30 PM">03:30 PM</option>
                                    <option value="04:00 PM">04:00 PM</option>
                                    <option value="04:30 PM">04:30 PM</option>
                                    <option value="05:00 PM">05:00 PM</option>
                                    <option value="05:30 PM">05:30 PM</option>
                                    <option value="06:00 PM">06:00 PM</option>
                                    <option value="06:30 PM">06:30 PM</option>
                                    <option value="07:00 PM">07:00 PM</option>
                                    <option value="07:30 PM">07:30 PM</option>
                                    <option value="08:00 PM">08:00 PM</option>
                                    <option value="08:30 PM">08:30 PM</option>
                                    <option value="09:00 PM">09:00 PM</option>
                                    <option value="09:30 PM">09:30 PM</option>
                                    <option value="10:00 PM">10:00 PM</option>
                                    <option value="10:30 PM">10:30 PM</option>
                                    <option value="11:00 PM">11:00 PM</option>
                                    <option value="11:30 PM">11:30 PM</option>
                                </select></td>
                            </tr>
                        </table>
                        <table class="table table-borderless">
                            <tr>
                                <td><input required value="Advance 500 paid" type="radio" name="payment"> Pay advance Rs. 500 and Rest of the payment to driver and Get Rs.50 Off</td>
                            </tr>
                            <tr>
                                <td><input required value="Full amount is need to be pay" type="radio" name="payment"> Pay full payment to driver.</td>
                            </tr>
                            <tr>
                                <td><input required type="checkbox"> By continuing, you agree to Terms and Conditions.</td>
                            </tr>
                            <tr>
                                <td class="text-center"><input class="btn btn-warning" type="submit" value="CONFIRM BOOKING"></td>
                            </tr>
                        </table>
                    </form>
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
        
    </body>
</html>