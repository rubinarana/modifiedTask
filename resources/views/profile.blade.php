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
                        <a href="#" class="nav-link" title="Home" data-toggle="tooltip" data-placement="top"><i class="fa fa-home fa-2x"></i></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Message" data-toggle="tooltip" data-placement="top"><i class="fa fa-commenting fa-2x"></i></a>
                    </li>

                     <li class="nav-item">
                        <a href="#" class="nav-link" title="Notification" data-toggle="tooltip" data-placement="top"><i class="fa fa-bell-o fa-2x"></i></a>
                    </li>

                    <li class="nav-item dropdown active" title="Profile" data-toggle="tooltip" data-placement="top">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-2x"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"><a href="#" class="dropdown-item">Log Out</a></li>
                            <li class="dropdown-header"><a href="#" class="dropdown-item">View Profile</a></li>
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
        <div class="row mt-5 " style="overflow: hidden;">
            <div class="row" id="aboutme">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="image">
                        <img src="image/profile1.png" class="img-fluid">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <p>I am Rubina Rana. I am student and currently doing my bachelors degree in Bsc. CSIT(Computer Science and Internet Technology) from Asian College Of Higher Studies. Beside this, I love sports and do some sketches during my free time.</p>
                    <hr style="border: 0px;height: 60px; width: 100%; background-image: url(image/type_7.png);background-repeat:repeat-x;">
                    <h2>Personal Information</h2>
                        <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td><i class="fa fa-phone-square fa-2x"></i></td>
                                <td>9860294884</td>
                              </tr>
                              <tr>
                                <td><i class="fa fa-envelope fa-2x"></i></td>
                                <td><a href="#" target="_blank">rubinaranamgr@gmail.com</a></td>
                                </td>
                              </tr>
                              <tr>
                                <td><i class="fa fa-map-marker fa-2x"></i></td>
                                <td>Handigaun, Kathmandu</td>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        
    </div>
   <hr><br>
   <div>
       <div class="footer">
        <h2 style="text-align: center;">Connected With</h2>
        <div class="media">
            <a href="https://www.facebook.com/rubina.magar.71" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
            <a href="https://github.com/rubinarana" target="_blank"><i class="fa fa-github fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/rubina-rana-396a7016a/" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
        </div>
    </div>
   </div>
   <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
</body>
</html>