
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
                @auth('client')
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong title="passegengers"><i class="fa fa-user"></i></strong> {{ auth()->guard('client')->user()->fullName }}</a>
                  
                  <div class="dropdown-menu">
                    
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




<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              
              <h2>Cars Listings</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if ($errors->any())
    <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-4 shadow-md">
        <div class="flex items-center">
            <div class="text-red-500">
                <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0zm0 18.75c-4.688 0-8.75-3.93-8.75-8.75S5.312 1.25 10 1.25 18.75 5.28 18.75 10 14.688 18.75 10 18.75z"/>
                    <path d="M11.25 5.625c-.39 0-.75.36-.75.75v5.625c0 .39.36.75.75.75s.75-.36.75-.75V6.375c0-.39-.36-.75-.75-.75zM10 13.125a.625.625 0 1 1 0-1.25.625.625 0 0 1 0 1.25z"/>
                </svg>
            </div>
            <div>
                <p class="text-sm text-red-700 font-bold">Oops! There are errors in your form submission.</p>
                <ul class="list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif



    <!-- Page Content -->
    <!-- Banner Starts Here -->
    
    <div class="latest-products" id="offers">
      <div class="container">
        <div class="row">
          @foreach ($cars as $car)
              
          
          <div class="col-md-4">
          <div class="product-item">
              <img height="250px" src={{asset("storage/$car->image")}} alt="">

              <div class="down-content">
                <h4>type: {{$car->type}}</h4>
                

                <h6><small>from </small> ${{$car->price}}<small> per weekend</small></h6>

                <p>{{substr($car->description , 0,75)}}...</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal{{$car->id}}">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModal{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <form action="{{route("bookingUser.store")}}" method="post" >
                      @csrf
                      <img height="250px" src={{asset("storage/$car->image")}} alt=""> <br><br>
                        <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="hidden" name="car_id" value="{{ $car->id }}">
                                </fieldset>
                             </div>
      
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="hidden" name="client_id" value="{{ auth()->guard('client')->user()->id }}">
                                </fieldset>
                             </div>
                             <div class="col-md-6">
                                <fieldset>
                                   <input type="text" class="form-control" readonly  value="{{ $car->nameCar  }}">
                                </fieldset>
                             </div>
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" readonly   value="{{ auth()->guard('client')->user()->fullName }}">
                                </fieldset>
                             </div>
                        </div>
      
                        <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                    Pick-up date
                                  <input type="date" class="form-control"  name="pick_up_date" placeholder="Pick-up date" >
                                </fieldset>
                             </div>
      
                             <div class="col-md-6">
                                <fieldset>
                                  Return date
                                  <input type="date" class="form-control" name="return_date" placeholder="Return date" >
                                </fieldset>
                             </div>
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" name="pick_up_and_return_location" placeholder="pick up and return location" >
                                </fieldset>
                             </div>
                        </div>
                        
      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Book Now</button>
                        </div>
                    </form>
                 </div>
                </div>
                
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