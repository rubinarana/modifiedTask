 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Home</title>
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
                        <a href="{{ route('home') }}" class="nav-link" title="Home" data-toggle="tooltip" data-placement="left"><i class="fa fa-home fa-2x"></i></a>
                    </li>

                     <li class="nav-item dropdown" title="Message" data-toggle="tooltip" data-placement="left">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                         <i class="fa fa-comments-o fa-2x"></i></a>
                             <ul class="dropdown-menu">
                                <li class="dropdown-header"><a href="#" class="dropdown-item">Message1</a></li>
                                <li class="dropdown-header"><a href="#" class="dropdown-item">Message2</a></li>
                            </ul>
                    </li>

                    <li class="nav-item dropdown" title="Request" data-toggle="tooltip" data-placement="left">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                         <i class="fa fa-smile-o fa-2x"></i></a>
                             <ul class="dropdown-menu">
                                <li class="dropdown-header"><a href="#" class="dropdown-item">Friend_Request1</a></li>
                                <li class="dropdown-header"><a href="#" class="dropdown-item">Friend_Request2</a></li>
                            </ul>
                    </li>

                    <li class="nav-item dropdown" title="Notification" data-toggle="tooltip" data-placement="left">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                         <i class="fa fa-bell-o fa-2x"></i></a>
                             <ul class="dropdown-menu">
                                <li class="dropdown-header"><a href="#" class="dropdown-item">Notification1</a></li>
                                <li class="dropdown-header"><a href="#" class="dropdown-item">Notification2</a></li>
                            </ul>
                    </li>

                    <li class="nav-item dropdown active" title="Profile" data-toggle="tooltip" data-placement="left">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                          <img src="image/profile1.png"></a>
                       
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"><a href="{{ route('logout') }}" class="dropdown-item">Log Out</a></li>
                            <li class="dropdown-header"><a href="{{ route('profile') }}" class="dropdown-item">View Profile</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Settings" data-toggle="tooltip" data-placement="left"><i class="fa fa-cogs fa-2x"></i></a>
                    </li>
                  </ul>
              </div>
           </div>
      </nav>
  </div>

    <div class="container">
      <div class="row mt-3">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
          <div class="card" style="position: sticky; top: 0;">
            <img src="image/profile3.png" height ="100px">
            <div class="card-body text-center">
              <p class="card-title font-weight-bold">Web Developer Wanter</p>
              <button class="btn bg-danger text-light">Apply Now</button>
            </div>
          </div>
          <br>
          <div class="card" style="position: sticky; top: 0;">
            <img src="image/profile1.png" height ="100px">
            <div class="card-body text-center">
              <p class="card-title font-weight-bold">Java Developer Wanter</p>
              <button class="btn bg-danger text-light">Apply Now</button>
            </div>
          </div>
          <br>
          <div class="card" style="position: sticky; top: 0;">
            <img src="image/profile.png" height ="100px">
            <div class="card-body text-center">
              <p class="card-title font-weight-bold">Network Engineer Wanter</p>
              <button class="btn bg-danger text-light">Apply Now</button>
            </div>
          </div>
        </div>
        <br>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">


              <button class="btn btn-success" data-target="#mymodal" data-toggle="modal">
                  <span>Hello {{ $user->name }} Share Thought With Others.</span>
              </button>

              <div id="mymodal" class="modal fade">
                  <div class="modal-dialog modal-dialog-centered">

                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-body">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <br>
                           <form action="{{URL::to('/store')}}" method="POST" enctype="multipart/form-data">
                              <input type="text" name="body" class="form-control" placeholder="Hey, want to share something.">
                            
                            <br>
                            <div class="d-flex justify-content-around">
                                  {{-- <button type="button" class="btn btn-primary">
                                      Photo
                                  </button> --}}

                                 {{--  <label for="image">Photo</label>
                                  <input type="file" name="image">
                                  <input type="hidden" name="_token" value="{{ csrf_token()
                                  }}"> --}}

                                {{--   <button type="button" class="btn btn-success">
                                      Video
                                  </button>
                                   <button type="button" class="btn btn-info">
                                      Tag
                                  </button>
                                   <button type="button" class="btn btn-warning">
                                      Live Video
                                  </button>
                                  <button type="button" class="btn btn-secondary">
                                      Story
                                  </button> --}}
                              </div>
                              </form>
                     </div>
                      <div class="modal-footer justify-content-center">
                        <button class="btn btn-danger" data-dismiss="modal">POST</button>
                      </div>
                    </div>
              </div>
              </div>

              <button class="open-button"  onclick="openForm()">Online
                <i class="fa fa-circle" style="color: green;"></i>
              </button>
                <div class="chat-popup" id="myForm">
                  <form class="form-container">
                    <div class="chatbox">
                        <div class="d-flex justify-content-around">
                              <i class="fa fa-user"></i>

                              
                               @foreach($user->followers as $follower)

                                        {{ $follower->user->name }}
                                
                               @endforeach

                              <i class="fa fa-circle" style="color: green;"></i>&emsp;&emsp;</p>
                        </div>
                    </div>

                    <button class="btn cancel text-light" onclick="closeForm()">Close</button>
                  </form>
                </div>

              <div class="container">

              {{-- <img src="{{ asset("storage/$post->image") }}"> --}}
                <br><h5>Rubina</h5>
                <div class="card">
                  <div class="card-body text-center">
                   <img src="image/profile1.png" class="img-fluid">
                    <div class="card-footer mt-3">
                        <div class="btn-group d-flex justify-content-between">
                          <button type="button" class="btn btn-outline-dark"> Like</button>
                          <button type="button" class="btn btn-outline-dark">Comment
                          </button> 
      
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
        </div>

          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            
          </div>
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
            <script>
                function openForm() {
                  document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                  document.getElementById("myForm").style.display = "none";
                }
                </script>
</body>
</html> 