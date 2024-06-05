<!DOCTYPE html>
<html lang="en">


  <head>
   
    <title>About Us - Global Express lotto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- site favicon -->
     <link rel="shortcut icon" type="image/png" href="User/assets/images/head.png">
    <link rel="shortcut icon" type="image/png" href="User/assets/images/head.png">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <!-- slick css link -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="assets/css/flipclock.css">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="assets/css/jqvmap.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <meta name="keywords" content="Online Lottery,Live Lotter,Poolmond,Mega Pool Lotto Lottery,USA and UK National Lottery,Official USA and UK National Lottery Website,UK National Lottery Website,2021 USA Lottery">
    <link href="../cdn.jsdelivr.net/npm/bootstrap%405.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
<body>
  <!-- preloader start -->
  <div id="preloader"></div>
  

@include('component.header')
  
<!--login registration Modal -->
  			
<div class="modal fade login-registration-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="login-registration-area">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Registration</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form class="login-form cmn-frm" method="post">
                  <div class="frm-group">
                    <label>Username or Email Address</label>
                    <input type="email" name="UserName1" id="login_email" placeholder="Username or Email Address">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Password</label>
                    <input type="password" name="password" id="login_pass" placeholder="Enter Password">
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <input type="submit" name="btnlogin" id="Button" value="login">
                  </div>
                  <div class="frm-group">
                    <div class="checkbox-area">
                      <input type="checkbox" id="login_remember_pass">
                      <label for="login_remember_pass">Remember Password</label>
                    </div>
                    <div class="forgot-pass-area">
                      <a href="#0">Forgot Password?</a>
                    </div>
                  </div>
                  <div class="frm-group">
                    <div class="or-text">
                      <span>Or login with</span>
                    </div>
                  </div>
                  <div class="frm-group">
                    <div class="login-with-area">
                      <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                      <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                    </div>
                  </div>
                </form>
                <div class="have-not-account">
                  <p>You don’t have an account?<a href="#0">Register Now</a></p>
                </div>
              </div>
              <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                <form class="registration-form cmn-frm">
                  <div class="frm-group">
                    <label>Username or Email Address</label>
                    <input type="email" name="registration_email" id="registration_email" placeholder="Username or Email Address">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Password</label>
                    <input type="password" name="registration_pass" id="registration_pass" placeholder="Enter Password">
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <label>Confirm Password</label>
                    <input type="password" name="registration_re_pass" id="registration_re_pass" placeholder="Enter Password">
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <input type="submit" name="registration_submit" id="registration_submit" value="Registration">
                  </div>
                  <div class="frm-group">
                    <div class="checkbox-area">
                      <input type="checkbox" id="registration_remember_pass">
                      <label for="registration_remember_pass">I Agree with the Terms of Use</label>
                    </div>
                    <div class="forgot-pass-area">
                      <a href="#0">Forgot Password?</a>
                    </div>
                  </div>
                  <div class="frm-group">
                    <div class="or-text">
                      <span>Or login with</span>
                    </div>
                  </div>
                  <div class="frm-group">
                    <div class="login-with-area">
                      <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                      <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                    </div>
                  </div>
                </form>
                <div class="have-not-account">
                  <p>Already have an account?<a href="#0">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- inner-page-banner start -->
  <section class="inner-page-banner has_bg_image" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-page-banner-area">
            <h1 class="page-title">About Us</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
           
                <!--<li class="breadcrumb-item active">About</li>-->
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner end -->

  <!-- about-section start -->
  <section class="about-section section-padding">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-xl-5 p-xl-0">
          <div class="thumb">
            <img src="assets/images/about-image.jpg" alt="image">
          </div>
        </div>
        <div class="col-xl-6 p-xl-0">
          <div class="content">
            <h2 class="title">A FEW WORDS ABOUT US</h2>
            <p>We are a US based certified lottery platform that works virtually. </p>
            <p>Our goal is to provide our customers with the most convenient and enjoyable lottery purchasing experience.</p>
            <p>It’s not just what we do, it’s who we are. From past to present, we are a success story still in the making.With an enthusiasm to serve, our commitment to providing fun and fair games is matched by our desire to make a positive difference in the community.</p>
            <ul class="cmn-list">
              <li>Playing It Global for Over a Decade</li>
              <li>Play from Anywhere in the World</li>
              <!-- <li>Absolutely No Commissions Taken</li> -->
              <li>A Simple and Secure Service</li>
              <li>Winning Made Easy</li>
            </ul>
            <!-- <a href="#0" class="cmn-btn">a bit of history</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-section end -->

  <!-- choose-us-section start -->
  <section class="choose-us-section section-padding border-top border-bottom has_bg_image" data-background="assets/images/inner-page-banner.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Why Choose Us?</h2>
            <p>With a selection of the world’s biggest and best international jackpots to choose from, there are already millions of reasons why you should be playing with Global Express Lotto lottery. But you don’t need a million reasons. All you need is six - and every one of them’s a winner:</br>We are reliable and trusted with swift and fast payments.</p>
          </div>
        </div>
      </div>
      <div class="row mt-mb-15">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/1.svg" alt="icon">
              </div>
              <h4 class="title">Biggest lottery jackpots</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/2.svg" alt="icon">
              </div>
              <h4 class="title">No commission on Winnings</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/3.svg" alt="icon">
              </div>
              <h4 class="title"> Safe and Secure Playing</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/4.svg" alt="icon">
              </div>
              <h4 class="title">Instant payout system</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/5.svg" alt="icon">
              </div>
              <h4 class="title">Performance Bonuses</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/6.svg" alt="icon">
              </div>
              <h4 class="title">Dedicated Support</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/7.svg" alt="icon">
              </div>
              <h4 class="title">Reliable Payment </h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="choose-item text-center choose-item--gray-border">
            <div class="front">
              <div class="icon">
                <img src="assets/images/svg-icons/choose-us-icons/8.svg" alt="icon">
              </div>
              <h4 class="title">Unlimited Affiliates</h4>
            </div>
            <div class="back">
              <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
            </div>
          </div>
        </div><!-- choose-item end -->
      </div>
    </div>
  </section>
  <!-- choose-us-section end -->

  <!-- testimonial-section start -->
  <section class="testimonial-section section-padding border-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="testimonial-content">
              <h5 class="sub-title">hat they think about us</h5>
              <h2 class="title">Testimonials</h2>
              <div class="total-ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span class="ratings-count-num">3.4M Reviews</span>
              </div>
              <p>With over 12 years of experience as the world’s leading online lottery service provider, Global Express Lotto has catered to over a million users. Find out what our members have to say about us! </p>
              <div class="testimonial-slider-arrows d-flex">
                <div class="button-next"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="button-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="testimonial-slider swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/1.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Albert G.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2022</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Global Express Lotto for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  Global Express Lotto!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/2.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Edward L.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th December, 2021</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>Global premier lottery is the best online lottery platform, i won the powerball and i was paid...thanks</p>
                    </div>
                  </div>
                </div><!--swiper-slide end -->
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/1.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Albert G.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Global Express Lotto for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  Global Express Lotto!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/2.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Edward L.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Global Express Lotto for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  Global Express Lotto!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/1.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Albert G.</h5>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                      </div>
                    </div>
                    <div class="testimonial-slide-body">
                      <p>I've played with Global Express Lotto for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  Global Express Lotto!"</p>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- testimonial-section end -->

  <!-- team-section start -->
  <section class="team-section section-padding section-bg border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Our Management Team</h2>
              <p>Our team of creative programmers, marketing experts, and members of the global lottery community have worked together to build the ultimate lottery site, and every win and happy customer reminds us how lucky we are to be doing what we love.</p>
            </div>
          </div>
        </div>
        <div class="row m-bottom-not-30">
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/larry.jpg" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Philip Brower</h3>
                <span class="designation">Co-Founder & CEO</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/paulson.jpg" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Penny Tool</h3>
                <span class="designation">IT Specialist</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/smith%20martins.jpg" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Conrad Berry</h3>
                <span class="designation">Consultant</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/emma%20smith.jpg" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Alexis Brady</h3>
                <span class="designation">Financial Adviser</span>
              </div>
            </div>
          </div><!-- team-single end -->
        </div>
      </div>
    </section>
  <!-- team-section end -->

  

  <!-- footer-section start -->
  <footer class="footer-section">
      <div class="footer-top border-top border-bottom has_bg_image" data-background="assets/images/bg-four.jpg">
        <div class="footer-top-first">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                <a href="/" class="site-logo">
                  <img src="assets/images/Globalpremierlottowebsite.png" style="height:30%; width:60%; alt="logo">
                </a>
              </div>
              <div class="col-lg-6 col-md-7 col-sm-8">
                <div class="number-count-part d-flex">
                  <div class="number-count-item">
                    <span class="number">23,302,233</span>
                    <p>TOTAL MEMBERS</p>
                  </div>
                  <div class="number-count-item">
                    <span class="number">9,017,575</span>
                    <p>TOTAL winner</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-top-second">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget widget-about">
                  <h3 class="widget-title">About Global Express Lotto</h3>
                  <ul class="footer-list-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="lottery">Lottery</a></li>
                    <li><a href="lottery-result">Results</a></li>
                     <li><a href="latest-winner">Winners</a></li> 
                    <li><a href="about">About</a></li>
                    <li><a href="privacypolicy">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <!-- <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                <div class="footer-widget widget-links">
                  <h3 class="widget-title">Quick links</h3>
                  <ul class="footer-list-menu">
                  <li><a href="#0">Faq</a>
                    <li><a href="#0">Affiliate Program</a></li>
                    <li><a href="#0">Terms & Conditions</a></li>
                    <li><a href="#0">Privacy Policy</a></li>
                     <li><a href="#0">Global Express Lotto Licenses</a></li> 
                  </ul>
                </div>
              </div> -->
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget widget-subscribe">
                  <h3 class="widget-title">email newsletters</h3>
                  <div class="subscribe-part">
                    <p>Subscribe now and receive weekly newsletter for latest draw and offer news and much more!</p>
                    <form class="subscribe-form">
                      <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                      <input type="submit" value="subscribe">
                    </form>
                  </div>
                </div>
              </div>
</br></br></br>
              <center><strong><p style="color:red;">You must be 18 or older to order a lottery ticket. Please play responsibly.</br> If you or someone you know has a gambling problem, kindly send an email to <a href = "mailto: admin@globalexpresslotto.com"><span style="color:blue;" class="text-decoration-underline">admin</span>.</a></p></strong></center>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-sm-7">
              <div class="copy-right-text">
                <p>© 2023 <a href="#">Global Express Lotto</a> - All Rights Reserved.</p>
              </div>
            </div>
            <!-- <div class="col-lg-6 col-sm-5">
              <ul class="footer-social-links d-flex justify-content-end">
                <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </footer>  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-angle-up"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->  
  
    <!-- jquery library js file -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js file -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- flipclock js file -->
    <script src="assets/js/flipclock.min.js"></script>
    <!-- countdown js file -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- slick js file -->
    <script src="assets/js/slick.min.js"></script>
    <!-- swiper js file -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- lightcase js file -->
    <script src="assets/js/lightcase.js"></script>
    <!-- wow js file -->
    <script src="assets/js/wow.min.js"></script>
    <!-- vamp js files -->
    <script src="assets/js/jquery.vmap.min.js"></script>
    <script src="assets/js/jquery.vmap.world.js"></script>
    <!-- main script js file -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from Global Express Lotto.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 13:00:26 GMT -->
</html>