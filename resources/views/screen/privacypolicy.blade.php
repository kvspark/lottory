
<!DOCTYPE html>
<html lang="en">


<head>
    
    <title>Privacy Policy - Global Express Lotto</title>
    <!-- site favicon -->
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
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

  <!-- template-version start -->
<!-- <div class="template-version">
  <button type="button"><i class="fa fa-cog"></i></button>
  <div class="color-version-area">
    <a href="home-two.html" class="dark-vesion">Dark Version</a>
    <a href="home-one.html" class="light-vesion">Light Version</a>
  </div>
</div> -->

  <div class="main-light-version">
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
   

    

    


   

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding">
      <!--<div class="choose-us-image"><img src="assets/images/elements/mouse.png" alt="image"></div>-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-header text-center">
              <h1 class="section-title fs-2">Privacy Policy</h1>
            </div>
            <div><h5>The Multi-State Lottery Association (MUSL) provides access to and use of the Global premier lottery, MUSL, and other associated web sites subject to these terms and conditions. PLEASE READ THESE TERMS CAREFULLY AS USE OF THESE WEBSITES CONSTITUTES ACCEPTANCE OF THESE TERMS AND CONDITIONS AND TO THE PRIVACY POLICY.</h5></div>
          <p class="fs-5"><strong>Disclaimer of Liability</strong><br />
Neither MUSL nor any of its member lotteries, Directors, Officers or employees shall be held liable for any improper or incorrect use of the information described and/or contained herein and assumes no responsibility for anyone's use of the information. In no event shall the MUSL or its member lotteries, Directors, Officers or employees be liable for any direct, indirect, incidental, special, exemplary, or consequential damages (including, but not limited to, procurement or substitute goods or services; loss of use, data, or profits; or business interruption) however caused and on any theory of liability, whether in contract, strict liability, or tort (including negligence or otherwise) arising in any way out of the use of this system, even if advised of the possibility of such damage. 
This disclaimer of liability applies to any damages or injury, including but not limited to those caused by any failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communication line failure, theft or destruction or unauthorized access to, alteration of, or use of record, whether for breach of contract, tortious behavior, negligence or under any other cause of action.</p>
          </div>
        </div>
       
      </div>
    </section>
    <!-- choose-us-section end -->

   

   
   

  

    <!-- brand-section start -->
    <!-- <div class="brand-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="brand-slider">
              <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/1.png" alt="image">
                </div>
              </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/2.png" alt="image">
                </div>
              </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/3.png" alt="image">
                </div> -->
              <!-- </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/4.png" alt="image">
                </div> -->
              <!-- </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/5.png" alt="image">
                </div>
              </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/3.png" alt="image">
                </div>
              </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/4.png" alt="image">
                </div>
              </div> -->
              <!-- single-slide end -->
              <!-- <div class="single-slide">
                <div class="slide-inner">
                  <img src="assets/images/brand/5.png" alt="image">
                </div>
              </div> -->
              <!-- single-slide end -->
            <!-- </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- brand-section end -->

    <!-- footer-section start -->
    <footer class="footer-section">
      <div class="footer-top border-top border-bottom has_bg_image" data-background="assets/images/bg-four.jpg">
        <div class="footer-top-first">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                <a href="home-one.html" class="site-logo">
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
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="lottery.html">Lottery</a></li>
                    <li><a href="lottery-result.html">Results</a></li>
                     <li><a href="latest-winner.html">Winners</a></li> 
                    <li><a href="about.html">About</a></li>
                    <li><a href="privacypolicy.html">Privacy Policy</a></li>
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
    </footer>    <!-- footer-section end -->
    
  </div>

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
  <script>
    var clock = $('.clock').FlipClock(99000 * 24 * 3, {
      clockFace: 'DailyCounter',
      countdown: true
    });
      jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
          map: 'world_en',
          color: '#eaedef',
          backgroundColor: '#f7fcff',
          hoverOpacity: 0.8,
          selectedColor: '#eaedef',
          scaleColors: ['#f7fcff', '#f7fcff'],
          normalizeFunction: 'polynomial'
        });
      });
    </script>  
</body>
<script language="JavaScript">

  StartCountDown("clock1","02/20/2023 12:33 PM -0400")
  StartCountDown("clock2","02/21/2023 2:00 PM -0400")
  StartCountDown("clock3","02/16/2023 2:00 PM -0400")
  StartCountDown("clock4","02/19/2023 2:00 PM -0400")
  
  /*
  	Author:		Robert Hashemian (http://www.hashemian.com/)
  	Modified by:	Munsifali Rashid (http://www.munit.co.uk/)
  	Modified by:	Tilesh Khatri
  */
  
  function StartCountDown(myDiv,myTargetDate)
  {
    var dthen	= new Date(myTargetDate);
    var dnow	= new Date();
    ddiff		= new Date(dthen-dnow);
    gsecs		= Math.floor(ddiff.valueOf()/1000);
    CountBack(myDiv,gsecs);
  }
  
  function Calcage(secs, num1, num2)
  {
    s = ((Math.floor(secs/num1))%num2).toString();
    if (s.length < 2) 
    {	
      s = "0" + s;
    }
    return (s);
  }
  
  function CountBack(myDiv, secs)
  {
    var DisplayStr;
    var DisplayFormat = "%%D%% Days %%H%%:%%M%%:%%S%%";
    DisplayStr = DisplayFormat.replace(/%%D%%/g,	Calcage(secs,86400,100000));
    DisplayStr = DisplayStr.replace(/%%H%%/g,		Calcage(secs,3600,24));
    DisplayStr = DisplayStr.replace(/%%M%%/g,		Calcage(secs,60,60));
    DisplayStr = DisplayStr.replace(/%%S%%/g,		Calcage(secs,1,60));
    if(secs > 0)
    {	
      document.getElementById(myDiv).innerHTML = DisplayStr;
      setTimeout("CountBack('" + myDiv + "'," + (secs-1) + ");", 990);
    }
    else
    {
      document.getElementById(myDiv).innerHTML = "Time to Draw Ended";
    }
  }

</script>

<!-- Mirrored from Global Express Lotto.com/privacypolicy by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 13:00:26 GMT -->
</html>