
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Drive with Yahya </title>

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
                
                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Add this script at the end of your HTML body or in a separate JavaScript file -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get all the links in the navigation
        var navLinks = document.querySelectorAll('.navbar-nav a');

        // Loop through each link
        navLinks.forEach(function (link) {
            // Add a click event listener to each link
            link.addEventListener('click', function (event) {
                // Prevent the default behavior of the link
                event.preventDefault();

                // Get the target element's ID from the href attribute
                var targetId = this.getAttribute('href');

                // Scroll smoothly to the target element
                document.querySelector(targetId).scrollIntoView({
                    behavior: 'smooth'
                });

                // Close the navbar menu if it's open (for small screens)
                document.querySelector('.navbar-toggler').click();
            });
        });
    });
</script>


<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              
              <h2>Offers</h2>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Page Content -->
    <!-- Banner Starts Here -->
    
    <div class="latest-products" id="offers">
      <div class="container">
        <div class="row">
          @foreach ($cars as $car)
              
          
          <div class="col-md-4">
          <div class="product-item">
              <img src={{asset("storage/$car->image")}} alt="">

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
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
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


    


    
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>