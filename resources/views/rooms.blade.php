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
  </head>
  <body>
    
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">    
    <div class="container">
      <a class="navbar-brand" href="/index">Booking Portal For Resthouse - Universty of Jaffna</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item "><a  href="/home" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="/rooms" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="/profile" class="nav-link">Profile</a></li>
        </ul>
      </div>

    </div>
  </nav>


  
  <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Rooms</span>
          <h2 class="heading">Rooms &amp; Suites</h2>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <!-- <div class="block-32">
            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block">Available Rooms</button>
                </div>
              </div>
            </form>
          </div> -->
        </div>
      </div>
      
    
    </div>

   

    
    <div class="site-section bg-light">
      <div class="col-md-7 section-heading">
            <span class="subheading-sm">Available Rooms On</span>
            <div class="inner" id="divToHide"> 
            <h2 class="bookbtn-padding"><?php echo date("Y/M/d")?></h2>
            
            </div>
          </div>

       <div class="row">
            <div class="col-md-12">

              <div class="nonloop-block-13 owl-carousel">

                  @foreach($rooms as $room)
                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="images/img_1.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">{{Auth::user()->Position}}</h2>
                        <div class="price"><sup>Rs</sup><span class="number">{{$room->price}}</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                          <center>
                          <a href="/bookThisRoom" class="btn py-2 px-3 btn-success">BOOK NOW</a>
                          </center>


                        </ul>
                      </div>
                    </div>
                  </div>
                  @endforeach
 
              </div>
    
            </div> <!-- .col-md-12 -->
          </div>

    </div>
    





  
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <span class="subheading-sm">Reviews</span>
            <h2 class="heading">Guest Reviews</h2>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_3.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Martin Newmansfield</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Nancy Green</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Elizabeth Charles</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div> -->


      </div>
    </div>

  

  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt.</p>
          <p><a href="#" class="btn btn-primary px-4">Button</a></p>
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
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
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
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>