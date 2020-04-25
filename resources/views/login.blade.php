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
<div class="container login-container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  login-form-1 bg-dark shadow p-5 mb-5 bg-white rounded" style="background-color:#292b2c !important;">
                    <h3 class="text-center text-light">Login</h3>
                    <hr style="background-color: #FFFFFF";>

                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                             <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div><br>

                        <div class="form-group">
                             <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 login-form-2 bg-light shadow p-5 mb-5 bg-white rounded" style="background-color:white; !important;">
                    <h3 class="text-center">Create New</h3>
                     <hr style="background-color: #000000";>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group d-flex">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
          
                        <div class="form-group">
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <h6></h6>
                        </div>
                         <div class="form-group">
                              <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
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
                        <a href="{{ route('services') }}">Services</a>
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