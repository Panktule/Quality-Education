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
    <!-- #NAVBAR -->
    <div class="main-container">
        <!-- <div class="container"> -->
        <section>
        
        
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
              <div class="buttons">
                <a href="" class="btn">Register</a>
              <a href="" class="btn"> Log In</a>
              </div>
            </div>
          </nav>
    </section>
    <!-- #BODY -->
  <section>
  <div class="container">
        <div class="hero-section">
          <div class="hero-text">
          <h1 style="color: #0F5888 ;">
            <strong>
            We are your online
               study buddy!
            </strong>
              </h1>
              ... giving you a head start
            We provide every African child the access to the complete secondary school curriculum.
            <p class="pt-3">
            <a href="" class="btn">Get Started</a>
            </p>
          </div>
            <img src="{{url('/images/kisspng-student-education-test-texas-review-kisspng-5ace767242ae68 1.png')}}" alt="" width="53%">
            
        </div>
        
    </div>
  </section>
  <!-- #INFO-SECTION -->
  <section class="info-page">
    <div class="container">
        <div class="row row-cols-2">
        <div class="column">
            <img src="{{url('/images/kisspng-think-and-grow-rich-book-reading-education-explora-education-intersoft-5d17573606cf66 1.png')}}" alt="" width="100%">

            </div>
            <div class="column pt-3 mt-3" >
                <h1 style="color:#0F5888 ;">
               <b>
               How it works
               </b>
                </h1>
                <p>
                Register with us and you’ll be granted full access to our limitless resources.
                We have text books, past questions of both WAEC, NECO & NABTEB depending on your need.
                We are a non profit site that is here to see that no child s left behind. 
                We believe every child deserves the right to quality education.
                </p>
                <p class="pt-3">
            <a href="" class="btn">My class</a>
            </p>
            </div>
           

        </div>
   
    </div>
  
  </section>

  <!-- #CLASS SECTION -->
  <section class="select-section">
    
  <div class="container">
        <div class="row row-cols-2 mt-4">
        
            <div class="column pt-3 mt-3" >
              <div class="column mx-2 px-2" style="background-color:#0F5888; color:white; border-radius:7px;">
              JSS1
                <hr>
                <p>
                    Junior Ed
                </p>
              </div>
                <div class="column">
                    jss3
                    <div class="column">
                        jss3
                    </div>
                </div>

            </div>
            

            <div class="column">
        <img src="{{url('/images/transparent-study-skills-competitive-examination-reading-compr-5f477454aaa586 1.png')}}" alt="" width="100%">

           

            </div>
           

        </div>
   
    </div>
   
  
 
  </section>
  <!-- #NEWSLETTER-SECTION -->
  <section style="background-color: #0F5888; padding:5%; " >
  <h3 style="text-align: center; color:white;">
   <b> Subscribe to our monthly updates!</b>
  </h3>
  <div class="container">
  <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="enter your email">
  <div class="input-group-append">
    <button class="mx-2 btn-2 btn" type="button">Subscribe</button>
  </div>
</div>
  </div>
    
  </section>
  <!-- #TESTIMONY -->
  <section class="pt-5 pb-5" style="background-color: #ddf1ff;">
  <h3 style="text-align: center; color:#0F5888;">Testimonials</h3>
  <p>
    <h4 style="text-align: center; color:#0F5888;">
    Read for yourself, it’s not just hype...
    </h4>
  </p>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3"> </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{url('/images/clipart172602 1.png')}}" width="20%">
                                        <div class="card-body">
                                            <h4 class="card-title">Amina Okafor</h4>
                                            <p>
                                              St John's College
                                            </p>
                                            <p class="card-text">I was struggling with my English classes until i was introduced to Go read. What a site!</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{url('/images/clipart172602 1.png')}}" width="20%">
                                        <div class="card-body">
                                            <h4 class="card-title">Jordan Yinka</h4>
                                            <p>F.G.C Jos</p>
                                            <p class="card-text">I was struggling with my English classes until i was introduced to Go read. What a site!</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{url('/images/clipart172602 1.png')}}" width="20%">
                                        <div class="card-body">
                                            <h4 class="card-title">John Doe</h4>
                                            <p>
                                              St.Murumba College
                                            </p>
                                            <p class="card-text">I was struggling with my English classes until i was introduced to Go read. What a site!</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #CONTACT FORM -->
<section class="mt-4"> 
  <h1 style="text-align: center ;color:#0F5888; ">
    <b>Contact Us</b>
  </h1>
  <p style="text-align:center; color:#0F5888;"><b>Lets Hear from you</b></p>
  <div class="container">
    <div class="form-group">
      <label for="fname">Fullname</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Your Message</label>
      <textarea name="message" id="" cols="30" rows="10"class="form-control"></textarea>
    </div>
    <a href="" class="btn mt-2" style="width: 10%;">Send</a>
  
  </div>
</section>
  

<!-- #FOOTER -->
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
<!-- End of .container -->









</div>
    








</div>
   
        
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>