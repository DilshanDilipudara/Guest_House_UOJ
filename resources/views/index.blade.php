<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/customcss.css">

  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #555;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }
</style>

  </head>
  <body>
    
  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">    
    <div class="container">
      <a class="navbar-brand" href="index.html">Booking Portal For Resthouse - Universty of Jaffna</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/index" class="nav-link">Home</a></li>
           <li class="nav-item"><a href="/rooms" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="/profile" class="nav-link">Profile</a></li>

         @if(Auth::user()->Position =='Admin')  
          <li class="nav-item"><a href="/confirmlist" class="nav-link">Admin Panel</a></li>
         @endif

        </ul>
      </div>

    </div>
  </nav>

  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">

    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2 class="heading">A Luxury Experience</h2>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  
    <div class="container ">
       <div class="block-32 bg-dark border border-info">
     
              <form action="/date" method="POST" >
              {{csrf_field()}}
                <div class="row">
                <!------ cheeck in date--------->
                  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label for="checkin" class="text-warning">Check In</label>
                    <div class="field-icon-wrap"> 
                      <input type="date" id="checkin_date" name ="startdate" class="form-control" >
                    </div>
                  </div>
                <!------ cheeck out date--------->
                  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label for="checkin" class="text-warning">Check Out</label>
                    <div class="field-icon-wrap">
                      <input type="date" id="checkout_date" name ="enddate" class="form-control">
                    </div>
                  </div>  
                  <!------ submit--------->
                    <div class="col-md-6 col-lg-3 align-self-end">
                      <button  type ="submit" class="btn btn-primary btn-block">Available Rooms</button>
                    </div>
                </div>    
              </form>
            </div>
      </div>

      @if(count($errors)>0)
          <ul>
            @foreach($errors->all() as $error)
            <div class="container alert alert-danger">{{$error}}</div>
            @endforeach
          </ul>
          @endif


      @php ($b[] = 0) 
          @if(count($b)>0)
          <div class="site-section block-13 bg-light">
         <div class="container">
         <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Featured Rooms</span>
              <h2 class="heading">Rooms &amp; Suites</h2>
              <p>Luxury Rooms for Administration, Staff and Non-Acedemic</p>
            </div>
          </div>

         
                  
           <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-13 owl-carousel">
                @foreach($b as $room)
                 <div class="item">
                    
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="images/img_2.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading"></h2>
                        <div class="price"><sup>Rs</sup><span class="number">5000</span><sub>/per night</sub></div>
                        <ul class="specs">
                        <li><strong>Room Number:{{$room}}</strong></li>
                          <li><strong>Description:</strong></li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView" type="button">Book Now</button>
                      </div>
                    </div>
                    
                  </div>               
            @endforeach 
              </div>
            </div> 
          </div>
      </div>
    </div>
  @endif

   
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt.</p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Blog</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_1.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Our Luxury Hotel &amp; Restaurants</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Our Luxury Hotel &amp; Restaurants</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_3.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Our Luxury Hotel &amp; Restaurants</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> May 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Colombo 07</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">02644558788</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
         
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
 
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
 
    
  </body>
</html>




<!-- Modal: modalQuickView -->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <h2 class="h2">
              <strong>Please Fill out the Booking Requeset Form.</strong>
            </h2>
           

            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
             
              <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{Auth::user()->Uname}}" placeholder="Name of the Applicant" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{Auth::user()->Position}}" placeholder="Position" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{Auth::user()->Department}}" placeholder="Department" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="" placeholder="{{Auth::user()->Pno}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Input" class="form-control">
                    </div>
                </div>
           
               
              
            </div>
            <!-- Accordion wrapper -->


            <!-- Add to Cart -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                  <select class="md-form mdb-select colorful-select dropdown-primary">
                    <option value="" disabled selected>Choose Location</option>
                    <option value="1">Guest House Colombo</option>
                    <option value="2">Guest House Jaffna</option>
                    <option value="3">Guest House Ariviyal Nagar</option>
                    <option value="3">Guest House Vauniya Campus</option>

                  </select>

                </div>
                <div class="col-md-6">


                </div>
                <div class="col-md-6">


                </div>
              </div>
              <div class="text-center">

                
              <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
            
            
             
             <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              
             <input type="submit" name="submit" value="submit" />
            </form>
              </div>
            </div>
            
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

