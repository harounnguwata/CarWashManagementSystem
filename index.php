<?php
include("includes/config.php");
if (isset($_POST["book"])) 
{
$ptype = $_POST['packagetype'];
$ws= $_POST['washingpoint'];
$fname = $_POST['fname'];
$mobile = $_POST['contactno'];
$date = $_POST['washdate'];
$time = $_POST['washtime'];
$message = $_POST['message'];
$status = 'New';
$bno =mt_rand(100000000, 999999999);
$sql = "INSERT INTO tblcarwashbooking(bookingId,packageType,carwashPoint,fullname,mobilenumber,washDate,washTime,message,status) VALUES(:bno,:ptype,:wpoint,:fname,:mobile,:date,:time,:message,:status)";
$query = $pdo->prepare($sql);
$query->bindParam(':bno',$bno,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':wpoint',$wpoint,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':time',$time,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $pdo->lastInsertId();
if($lastInsertId)
{
 
  echo '<script>alert("Your booking done successfully. Booking number is "+"'.$bno.'")</script>';
 echo "<script>window.location.href ='washing-plans.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Car Wash management System | Home Page</title>


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<?php include_once('includes/header.php');?>

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/img6.png" alt="Image" style="height:390px">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                       
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/img5.png" alt="Image"  style="height:390px">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                      
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/img1.jpg" alt="Image"   style="height:390px">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/img6.png" alt="Image" style="height:460px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                               CarWsh ni small company located at,d9r99==-0s0dd0fk Lorem ipsum dolor sit amet elit. In vitae turpis. Donec in hendre dui, vel blandit massa. Ut vestibu suscipi cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window wiping</li>
                            </ul>
                            <a class="btn btn-custom" href="about.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Reparing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">17</h3>
                                <p>ITEngineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Completed Works</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        

        <!----team model--------->
   <div class="container text-center" style="height:1200px;margin-top:10px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
   <br>
   <center><h4> OUR TEAM/WAFANYAKAZI</h4></center>
   <center><p>Top management. </p></center>
   <br>
   <!----row 1------->
  <div class="row">
  <div class="col-md-4">
   <div class="card">
   <div class="card-header" style="background-color:white;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
   <center>MANAGER</center>
   </div>
   <div class="card-body" style="height:250px">
   <img src="./img/img7.jpg" style="height:190px;width:240px"><br>
     <i class="fa fa-phone"></i>  +07882131140
   </div>
   </div>
   </div>
   <div class="col-md-4">
     <div class="card">
   <div class="card-header" style="background-color:white;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
   <center>CASHIER</center>
   </div>
   <div class="card-body" style="height:250px">
   <img src="./img/cashiers.png" style="height:190px;width:240px"><br>
     <i class="fa fa-phone"></i>  +06888131140
   </div>
   </div>
   </div>
   <div class="col-md-4">
   <div class="card">
   <div class="card-header" style="background-color:white;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
   <center>SUPERVISOR</center>
   </div>
   <div class="card-body" style="height:250px">
   <img src="./img/testimonial-1.jpg" style="height:190px;width:240px"><br>
     <i class="fa fa-phone"></i>  +0682131140
   </div>
   </div>
   </div>
</div>
<br><br><br>



<!----row --------- 2------------->
 <center><b> SERVICE PROVIDERS/ WATOAJI HUDUMA.</b></center>
   <div class="row" style="margin-top:30px">
  
    <div class="col-md-3">
       <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>SALIM SAID</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/salim.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +0782131140
   </div>
   </div>
    </div>
    <div class="col-md-3">
   <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>JUMA JUMA</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/w1.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +0782131140
   </div>
   </div>
    </div>
     <div class="col-md-3">
    <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>ASHA SAIDI</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/w2.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +067992131140
   </div>
   </div>
    </div>
    <div class="col-md-3">
     <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>ISSA SAIDI</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/w3.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +06892131140
   </div>
   </div>
    </div>
   </div>


<!----row --------- 3------------->
   <div class="row" style="margin-top:30px">
  
    <div class="col-md-3">
       <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>ADBULAZACK JUMA</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/w4.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +0784131140
   </div>
   </div>
    </div>
    <div class="col-md-3">
   <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>HAMADI ISSA</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/W5.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +0782131140
   </div>
   </div>
    </div>
     <div class="col-md-3">
    <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>KASIM AMIDU</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/w6.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +067992131140
   </div>
   </div>
    </div>
    <div class="col-md-3">
     <div class="card">
   <div class="card-header" style="background-color:white;">
   <center>MUSSA MADENI</center>
   </div>
   <div class="card-body" style="height:220px">
   <img src="./img/w8.png" style="height:150px;width:170px"><br>
     <i class="fa fa-phone"></i> call  +06892131140
   </div>
   </div>
    </div>
   </div>


   </div>
        <!-----ends---------->
        



        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan/Aina za usafishaji</p>
                    <h2>Choose Your Plan/Chagua</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning/Usafishaji wa mdogo</h3>
                                <h2><span>Tshs</span><strong>7000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning/Usafishaji wa kati</h3>
                                <h2><span>Tshs</span><strong>12000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning/Usafishaji wa juu</h3>
                                <h2><span>Tshs</span><strong>15000</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        


        <!-- Footer Start -->
   <?php include_once('includes/footer.php');?>
        



<!-- book Model-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog  modal-xl">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#13294C;color:white">
          <h4 class="modal-title" style="color:white">Car Wash Booking</h4>
        </div>
        <div class="modal-body">
     <form method="post">   
       <div class="container-fluid  text-centre">
      <div class="row">
     <div class="col-md-6">
      <div class="form-group">
      <label class="form-label"> Chagua aina ya usafishaji</label>
      <select type="text" name="packagetype" required class="form-control">
                <option value="">Package Type</option>
                <option value="1">BASIC CLEANING/Usafishsji mdogo (7000/Tshs)</option>
                 <option value="2">PREMIUM CLEANING/Usafishaji wa kati (12000/Tshs)</option>
                  <option value="3 ">COMPLEX CLEANING/Usafishaji mkubwa(15000/Tshs)</option>
         </select>
      </div>
     </div>
     <div class="col-md-6">
      <div class="form-group">
      <label class="form-label">Service/Washing point</label>
        <select name="washingpoint" required class="form-control">
                <option value="">Select Washing Point</option>
           <?php $sql = "SELECT * from tblwashingpoints";
           $query = $pdo -> prepare($sql);
            $query->execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
                   foreach($results as $result)
                {               ?>  
                   <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->washingPointName);?> (<?php echo htmlentities($result->washingPointAddress);?>)</option><?php } ?>
            </select>
      </div>
     </div>
      </div>

 <div class="row">
     <div class="col-md-6">
      <div class="form-group">
      <label class="form-label">fullName</label>
    <input type="text" name="fname" class="form-control" required placeholder="Full Name">
      </div>
     </div>
     <div class="col-md-6">
      <div class="form-group">
      <label class="form-label">Mobile NO#</label>
  <input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No.">
      </div>
     </div>
      </div>


  <div class="row">
     <div class="col-md-6">
      <div class="form-group">
      <label class="form-label">Washing date/Siku ya usafishaj</label>
     <input type="date" name="washdate" required class="form-control">
      </div>
     </div>
     <div class="col-md-6">
      <div class="form-group">
      <label class="form-label">Washing time/Muda</label>
     <input type="time" name="washtime" required class="form-control">
      </div>
     </div>
      </div>

       <div class="row">
       <div class="col-md-12">
        <label class="form-label">Any comment</label>
        <textarea name="message"  class="form-control" placeholder="Message if any" style="height:110px"></textarea>
       </div>
       </div>
       <br>
    <input type="submit" class="btn btn-custom" name="book" value="Book Now">
       </div>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>



