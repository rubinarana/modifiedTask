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
                              <a href="#">See in mobile view</a>
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
      <script type="text/javascript">
          $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
          });
      </script>

<div class="container mt-4">
    <h2 class="text-center">Followers</h2>
    <hr>
    <table class="table table-bordered mt-4">
                        <tr class="bg-dark text-light">
                            <th> 
                                NAME
                            </th>
                           
                           {{--  <th>
                                Followers
                            </th> --}}
                            <th>
                                Action
                            </th>
                        </tr>
                        @foreach($user as $u)
                            <tr>
                                <td>
                                    <i class="fa fa-user"></i>&emsp;{{  $u->name }}
                                </td>
                             
                               {{--  <td>
                                    @foreach($u->followers as $follower) 
                                        
                                        <span>{{ $follower->user->name }} </span>
                                    @endforeach
                                </td> --}}
                                <td>
                                    @if(auth()->user()->follows($u))
                                    <form action="{{ route('unfollow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit" class="btn btn-outline-secondary">Following</button>
                                    </form>
                                    @else
                                    <form action="{{ route('follow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit" class="btn btn-secondary">Follow</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $user->links() }}
</div>

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