<?php
session_start();
if(!isset($_SESSION['login']))
header('location:index.html');
?>
<html>
    <head>
        <title>Car Rental Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "icon" href ="images/b.png" type = "image/x-icon">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand"><b>Bismillah Cabs</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link active" href="admin.php"><b>Admin</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="message.php"><b>Messages</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/logout.php"><b>Logout <i class="fa fa-sign-out" style="font-size:24px"></i></b></a>
                </li>
              </ul>
            </div>
        </nav>



        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="jumbotron">
                                <th>Trip Id</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Phone no.</th>
                                <th>Pickup Address</th>
                                <th>Pickup Time</th>
                                <th>Payment Type</th>
                                <th>Trip Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Car Type</th>
                                <th>Package Hours</th>
                                <th>Delete Trip Info.</th>
                            </tr>
                            <tbody>
<?php
$dbuser="m5fc2zgidt96";
$dbpass="%an39&O0yg1";
$dbserver="localhost";
$dbname="bismillah_cabs";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
$sql="SELECT * FROM trips";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{        
?>
<form action="php/delete.php" method="POST">
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['pickup_address']; ?></td>
                                <td><?php echo $row['pickup_time']; ?></td>
                                <td><?php echo $row['payment']; ?></td>
                                <td><?php echo $row['trip_type']; ?></td>
                                <td><?php echo $row['city_from']; ?></td>
                                <td><?php echo $row['city_to']; ?></td>
                                <td><?php echo $row['start_date']; ?></td>
                                <td><?php echo $row['end_date']; ?></td>
                                <td><?php echo $row['car_type']; ?></td>
                                <td><?php echo $row['hours']; ?></td>
                                <td><input class="btn btn-danger" name="delete" type="submit" value=<?php echo $row['id'] ?>></td>
                            </tr>
                            
</form>
<?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>