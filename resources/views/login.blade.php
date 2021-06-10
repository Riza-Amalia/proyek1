<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <title>Login #4</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
    
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3><strong>LOGIN</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="Masukkan Username" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Masukkan Password" id="password">
                </div>
                <br><br>
                <input type="submit" value="LOGIN" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    
    <script src="{{ asset('js/popper.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/main.js') }}"></script>
    
  </body>
</html>