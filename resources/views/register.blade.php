<!DOCTYPE html>
<html lang="en">

<head>
  <title>OwerriTechHub Official Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


  

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/img-2.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                  @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
            @endif
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">A 5 months practical oriented training class. 
            There will be a tutor lead section,<br> class programming session and a project development section.
             Every student will be expected to complete a web project (a Computer Based Test
              or a Responsive Personal Resume Website or both) using the technology 
              learnt during the training. All registered students will benefit from free Co-Working Space 
            and free internet access, which will be provided by the hub.</p>
            <div>
            <h4 style="color:white; ">All at an affordable fee of
             <strike>N</strike>50,000.</h4>
              </div>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="/"
                      class="btn btn-primary py-3 px-5 btn-pill">Back</a></p>

                </div>
               
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                
                  <form action="/student-registration" method="post" class="form-box">
                    {{ csrf_field() }}

                    <h3 class="h4 text-black mb-4">Fill The Following </h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Full Name" name="fullname"
                       required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" 
                       placeholder="Email" required name="email">
                    </div>
                    <div class="form-group mb-4">
                      <input required type="text" 
                      class="form-control" placeholder="Phone-Number" name="number">
                    </div>
                    <div>
                    <label for="">Course</label>
                        <select name="course" id="" class="form-group mb-4">
                            <option value="web-development">Web Development</option>
                            <option value="web-development">Design Training</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Register">
                    </div>
                  </form>

                </div>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


   


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

</body>

</html>