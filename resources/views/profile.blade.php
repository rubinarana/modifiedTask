<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Profile</title>
</head>
<body>
<div class="background">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
        <a href="index.html" class="navbar-brand">
            <img src="image/logo2.png" class="logostyle">
        RUBINA</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarid">
        
                <ul class="navbar-nav ml-auto">
                     <form class="form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link" title="Home" data-toggle="tooltip" data-placement="top"><i class="fa fa-home fa-2x"></i></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Message" data-toggle="tooltip" data-placement="top"><i class="fa fa-commenting fa-2x"></i></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Request" data-toggle="tooltip" data-placement="top"><i class="fa fa-smile-o fa-2x"></i></a>
                    </li>

                     <li class="nav-item">
                        <a href="#" class="nav-link" title="Notification" data-toggle="tooltip" data-placement="top"><i class="fa fa-bell-o fa-2x"></i></a>
                    </li>

                    <li class="nav-item dropdown active" title="Profile" data-toggle="tooltip" data-placement="top">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-2x"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"><a href="#" class="dropdown-item">Log Out</a></li>
                            <li class="dropdown-header"><a href="{{ route('profile') }}" class="dropdown-item">View Profile</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Settings" data-toggle="tooltip" data-placement="top"><i class="fa fa-cogs fa-2x"></i></a>
                    </li>
                </ul>
            </div>
         </div>
    </nav>
</div>
    <div class="container">
        <div class="row mt-5" id="aboutme" style="overflow: hidden;">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="image">
                        <img src="image/profile1.png" class="img-fluid">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center">Rubina Rana</h1><br>
                         <div class="d-flex justify-content-center">
                             <i class="fa fa-map-marker fa-2x"></i>&emsp;&emsp;
                                   <p> Handigaun, Kathmandu</p>
                        </div><br>

                        <div class="d-flex justify-content-center">
                             <i class="fa fa-phone-square fa-2x"></i>&emsp;
                                <p>9860294884 / 9803208339</p>
                        </div><br>
                        
                         <div class="d-flex justify-content-center">
                             <i class="fa fa-envelope fa-2x"></i>&emsp;
                                <a href="#" target="_blank">rubinaranamgr@gmail.com</a>
                        </div>

                        

                        <hr style="border: 0px;height: 60px; width: 100%; background-image: url(image/type_7.png);background-repeat:repeat-x;">
                        <div class="d-flex justify-content-around">
                            <button type="button" class="btn btn-success">
                                Friends <span class="badge badge-light">4</span>
                            </button>
                            <button type="button" class="btn btn-danger">
                                Following <span class="badge badge-light">7</span>
                            </button>
                             <button type="button" class="btn btn-info"><a href=""></a>
                                Posts <span class="badge badge-light"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   <hr><br>
<div class="section" style="overflow: hidden;">
  <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="container">
            <h2 class="text-center">About</h2><br>
                <p>I am Rubina Rana. I am student and currently doing my bachelors degree in Bsc. CSIT(Computer Science and Internet Technology) from Asian College Of Higher Studies. Beside this, I love sports and do some sketches during my free time.</p> 
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h2 style="text-align: center;">Connected With</h2>
            <div class="media">
                    <a href="https://www.facebook.com/rubina.magar.71" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
                    <a href="https://github.com/rubinarana" target="_blank"><i class="fa fa-github fa-3x"></i></a>
                    <a href="https://www.linkedin.com/in/rubina-rana-396a7016a/" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
            </div>
        </div>
    </div>
  </div>
</div>
<hr>
 <div class="container">
      <div class="row mt-5">
         <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
              <div class="container">
                <div class="card">
                  <div class="card-body text-center">
                   <img src="image/profile1.png" class="img-fluid">
                    <div class="card-footer mt-3">
                        <div class="btn-group d-flex justify-content-between">
                          <button type="button" class="btn btn-outline-dark">Like</button>
                          <button type="button" class="btn btn-outline-dark">Comment</button>
                          <button type="button" class="btn btn-outline-dark">Share</button>
                        </div>
                    </div>
                  </div>
                </div>

                  <br><h5>Rubina</h5>
                <div class="card">
                  <div class="card-body text-center">
                   <img src="image/login.png" class="img-fluid">
                    <div class="card-footer mt-3">
                        <div class="btn-group d-flex justify-content-between">
                          <button type="button" class="btn btn-outline-dark">Like</button>
                          <button type="button" class="btn btn-outline-dark">Comment</button>
                          <button type="button" class="btn btn-outline-dark">Share</button>
                        </div>
                    </div>
                  </div>
                </div>

                    <br><h5>Rubina</h5>
                <div class="card">
                  <div class="card-body text-center">
                   <img src="image/profile.png" class="img-fluid">
                    <div class="card-footer mt-3">
                        <div class="btn-group d-flex justify-content-between">
                          <button type="button" class="btn btn-outline-dark">Like</button>
                          <button type="button" class="btn btn-outline-dark">Comment</button>
                          <button type="button" class="btn btn-outline-dark">Share</button>
                        </div>
                    </div>
                  </div>
                </div>
             

                  <br><h5>Rubina</h5>
                <div class="card">
                  <div class="card-body text-center">
                   <img src="image/profile1.png" class="img-fluid">
                    <div class="card-footer mt-3">
                        <div class="btn-group d-flex justify-content-between">
                          <button type="button" class="btn btn-outline-dark">Like</button>
                          <button type="button" class="btn btn-outline-dark">Comment</button>
                          <button type="button" class="btn btn-outline-dark">Share</button>
                        </div>
                    </div>
                  </div>
                </div>

                   <br><h5>Rubina</h5>
                <div class="card">
                  <div class="card-body text-center">
                   <img src="image/profile3.png" class="img-fluid">
                    <div class="card-footer mt-3">
                        <div class="btn-group d-flex justify-content-between">
                          <button type="button" class="btn btn-outline-dark">Like</button>
                          <button type="button" class="btn btn-outline-dark">Comment</button>
                          <button type="button" class="btn btn-outline-dark">Share</button>
                        </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
          <div class="card">
            <h2 class="text-center">2020</h2>
            <img src="image/profile3.png" height ="200px">
            <div class="card-body text-center">
              <p class="card-title font-weight-bold text-center">Your Collection</p>
            </div>
          </div>
          <br>
          <div class="card">
            <h2 class="text-center">2019</h2>
            <img src="image/profile1.png" height ="200px">
            <div class="card-body text-center">
              <p class="card-title font-weight-bold text-center">Your Collection</p>
            </div>
          </div>
          <br>
           <div class="card">
            <h2 class="text-center">2018</h2>
            <img src="image/profile1.png" height ="200px">
            <div class="card-body text-center">
              <p class="card-title font-weight-bold text-center">Your Collection</p>
            </div>
          </div>
          <br>
          <div class="card">
            <h2 class="text-center mt-3">2017</h2>
            <div class="card-body">
              <h3 class="card-title text-center">Joined XYZ Page</h3>
              <h2 class="text-center">WELCOME</h2>
            </div>
          </div>
        </div>
         
        </div>



          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            
          </div>
      </div>
    </div>

   <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <footer class="page-footer pt-4 bg-dark text-light">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt-md-0 mt-3">
                    <h3>ABOUT US</h3>
                    <p>
                       XYZ is a one of the social media connecting the people of different background. 
                       XYZ is having the feature of ease-use-interface. For any query and help please visit to mentioned useful links or directly contact with the customer care section. NOTE: Please only post geninue and related posts. If found temporarily suspended from this platform.
                    </p>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mb-md-0 mb-3">
                    <h3>Useful Links</h3>
                    <ul class="list-unstyled">
                      <li>
                        <a href="{{ route('services') }}" class=>Services</a>
                      </li>
                      <li>
                        <a href="{{ route('privacypolicy') }}">Privacy and Policy</a>
                      </li>
                      <li>
                        <a href="{{ route('termcondition') }}">Terms and Conditions</a>
                      </li>
                    </ul>
                  </div>
                 
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mb-3">

                    <h3>Contact</h3>

                    <ul class="list-unstyled">
                      <li>
                        <a href="{{ route('help') }}">Help</a>
                      </li>
                      <li>
                        <a href="#">xyz@gmail.com</a>
                      </li>
                    <li>
                        <a href="{{ route('customercare') }}">Customer Care</a>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr style="background-color: #FFFFFF">
              <div class="footer-copyright text-center py-3">&copy; 2020 Copyright:2020
              </div>
            </footer>
</body>
</html> 