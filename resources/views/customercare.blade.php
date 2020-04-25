<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>create</title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="css/myCreate.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                      <li class="nav-item">
                          <a href="#" class="nav-link active">WELCOME TO XYZ_PAGE WHERE YOU CAN CONNECT WITH PEOPLE GLOBALLY</a>
                      </li>
                  </ul>
              </div>
           </div>
      </nav>
<div class="container mt-5">
      <h3>Most of the information you need can be found on our web site.</h3>

      If you can’t find what you are looking for, please let us know. We’ll be happy to help you in any way we can. You can <a href="#contact">click here</a> to get tips and idea or you can email at <a href="#">xyz@gmail.com.</a>
      <form>
      <div class="form-group">
          <label>name:</label>
          <input type="text" name="" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label>email:</label>
          <input type="email" name="" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label>COMMENTS:</label>
          <textarea cols="60" rows="5" class="form-control"></textarea>
        </div>
          <input type="submit" name="submit" class="btn btn-primary"> 
      </form>
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
</body>
</html>