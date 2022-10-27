<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Go Learn</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/goLearn.css') }}" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{url('/images/Group 1.png')}}" alt="Image" width="25%"/></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Library</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" >Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link ">Contact Us</a>
                  </li>
                </ul>      
              </div> -->
              <!-- <div class="buttons">
                <a href="" class="btn">Register</a>
              <a href="" class="btn"> Log In</a>
              </div> -->
            </div>
          </nav>















    <!-- #LogIn -->
    <section>
        <div class="container">
         <div class="row row-cols-2">
           <div class="card">
           <div class="column">
            <form action="">
            <div class="form-group">
                <label for="fname"></label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="fname"></label>
                <input type="email" class="form-control" placeholder="password">
            </div>
            <!-- <a href="" class="btn mt-2">Log in</a> -->
            </form>
            <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mt-3">
              <input class="form-check-input me-2" type="checkbox"  />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start pt-2">
            <a href="" class="btn">Login</a>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>
            </div>
           </div>
            <div class="column">
                <img src="{{url('/images/kisspng-certified-public-accountant-tutor-software-develop-5cac48ac679cb8 1.png')}}" alt="" width="80%">
            </div>
            
         </div>
        
        </div>
    </section>




























<!-- !-- #FOOTER --> 
<div style="background-color:#0F5888 ;">

    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: white;">Go Learn</h5>

          <ul class="list-unstyled mb-4">
            <li>
              <a href="#!" class="text-white">About us</a>
            </li>
            <li>
              <a href="#!" class="text-white">Collections</a>
            </li>
            <li>
              <a href="#!" class="text-white">Environmental philosophy</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 text-white">Community</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">About</a>
            </li>
            <li>
              <a href="#!" class="text-white">Volunteer</a>
            </li>
            <li>
              <a href="#!" class="text-white">Donate</a>
            </li>
            
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 text-white">Policy</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Terms of use</a>
            </li>
            <li>
              <a href="" class="text-white">Press</a>
            </li>
            <li>
              <a href="" class="text-white">Affiliates</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 text-white" >Sign up to our newsletter</h5>

          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example2" class="form-control" />
            <label class="form-label text-white" for="form5Example2">Email address</label>
          </div>

          <button type="submit" class="btn-2 btn-outline-white btn-block">Subscribe</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 border-top border-white text-white">
      © 2022 Copyright:
      <a class="text-white" href="#">GoLearn.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>