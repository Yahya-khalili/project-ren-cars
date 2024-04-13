
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> {{ config("app.name") }} </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"><h2>Drive With  <em>Yahya</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                
                <li class="nav-item"><a class="nav-link" href="#offers">Offers</a></li>

                <li class="nav-item"><a class="nav-link" href="#aboutUs">About Us</a></li>
                
                <li class="nav-item" id="yahya"><a class="nav-link" >Contact Us</a></li>
                @auth('client')
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong title="passegengers"><i class="fa fa-user"></i></strong> {{ auth()->guard('client')->user()->fullName }}</a>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="">profile</a>
                    <a class="dropdown-item" href="{{route("logout.logout")}}">bookings</a>
                    <a class="dropdown-item" href="{{route("logout.logout")}}">logout</a>
                    
                    
                  </div>
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{route("login.index")}}" >login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route("register.index")}}" >register</a></li>
                
                @endauth

            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- Add this script at the end of your HTML body or in a separate JavaScript file -->




    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text" id="home">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Welcom to our Website!</h4>
            <h2>Find your car today!</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Welcom to our Website!</h4>
            <h2>Find your car today!</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Welcom to our Website!</h4>
            <h2>Find your car today!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products" id="offers">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Offers</h2>
              <a href="{{route('indexOffers')}}">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach ($cars as $car)
              
          
          <div class="col-md-4">
          <div class="product-item">
              <img  height="250px" src={{asset("storage/$car->image")}} alt="">

              <div class="down-content">
                <h4>type: {{$car->type}}</h4>

                <h6><small>from </small> ${{$car->price}}<small> per weekend</small></h6>

                <p>{{$car->description}}</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>
          @endforeach

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter password" required="">
                          </fieldset>
                       </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter cin" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>
          <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="register">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="{{route("user.store")}}" method="post" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Full name"  name="fullName">
                            
                          </fieldset>
                          @error('fullName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter cin"  name="cin">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address"  name="email" >
                          </fieldset>
                       </div>

                       
                  </div>
                  

                  
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" name="phone">
                          </fieldset>
                       </div>

                       >
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                  </div>
              </form>
           </div>
          </div>
        </div>
      </div>
    </div>


    
<div class="best-features" id="aboutUs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>At Drive With Yahya, we are passionate about providing seamless and reliable car rental services to enhance your travel experience. Founded by Yahya khalili , our company is dedicated to offering top-notch vehicles, exceptional customer service, and a commitment to making your journeys memorable.</p>
              <ul class="featured-list">
                <li><a href="#">We believe in transparent and fair pricing</a></li>
                <li><a href="#">We strive to empower your travels by offering a diverse fleet of well-maintained vehicles</a></li>
                <li><a href="#">We're here to make your car rental experience exceptional.</a></li>
                <li><a href="#">our satisfaction is our priority</a></li>
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Yahya elkhal </h4>
                  <p class="n-m"><em>"At Drive With Yahya, the experience surpassed my expectations. The seamless booking process and the well-maintained vehicles made my journey not just a ride but an adventure."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Yassine essabir</h4>
                  <p class="n-m"><em>"I can't express enough how satisfied I am with my experience at Drive With Yahya. From the moment I made my reservation to the end of my journey, every interaction with the team was delightful."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Sohail idlahsen</h4>
                  <p class="n-m"><em>" I highly recommend Drive With Yahya to anyone seeking a smooth, stress-free, and enjoyable travel experience.""</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Youness Elasbat</h4>
                  <p class="n-m"><em>"Our success at Drive With Yahya is measured by the satisfaction of our clients. We're privileged to share in the joy of countless journeys that have left smiles on the faces of our valued customers. "</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Mohammed Bouzaidi </h4>
                  <p class="n-m"><em>"Drive With Yahya is more than a car rental service"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Ilyass Baderedinne</h4>
                  <p class="n-m"><em>t's a reliable partner for every traveler seeking comfort and quality. Highly recommended!"</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






    



    


    <!-- Page Content -->


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.2741566772693!2d-7.578470389882411!3d33.546252573240466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda633ccbd5456c7%3A0x880efa80fd11245b!2sBoulevard%20Driss%20El%20Harti!5e0!3m2!1sfr!2sma!4v1709738860653!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>our office is more than a workplace; it's a hub of energy and enthusiasm where our team comes together to orchestrate seamless journeys for our clients. The atmosphere is a reflection of our commitment to excellence and customer satisfaction. Here, you'll find a team of passionate individuals ready to assist you in every aspect of your car rental experience. From booking inquiries to personalized travel advice, our office is the starting point for turning your travel plans into memorable adventures. Feel free to drop by, and let's make your journey with Drive With Yahya an unforgettable one.</p>
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/yehya.khalili/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                
                <li><a href="https://www.linkedin.com/in/yahya-khalili-b6857b294/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/Yahya-khalili" target="_blank"><i class="fa fa-github"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message"  >
      <div class="container" id="contactUs">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact"  >
                @csrf
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button" onclick="sendEmail()">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/yaha.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">Yahya khalili</h5>
          </div>
        </div>
      </div>
    </div>

    












    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Drive With Yahya |<a href="{{route("indexDash")}}">admin</a> </p>
              

            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>