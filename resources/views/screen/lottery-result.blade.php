
<!DOCTYPE html>
<html lang="en">


<head>
    
    <title>Lottery Result-Global Express Lotto</title>
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

  <!--  header-section start  -->
    @include('component.header')
    <!--  header-section end  -->
  <!--login registration Modal -->
  			
  <!-- inner-page-banner start -->
  <section class="inner-page-banner has_bg_image" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-page-banner-area">
            <h1 class="page-title">Latest Lottery Results</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home-one.html">Home</a></li>
                <li class="breadcrumb-item">result</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner end -->

  <!-- lottery-result-section start -->
  <section class="lottery-result-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title">Latest Lottery results</h2>
            <p>Check the current lotto results and to see if you have won! All of the results presented on our website are the official results of the last draw of a particular lottery. We advise you to check lotto numbers from your ticket and compare them with the numbers drawn in a particular lottery draw.</p>
          </div>
        </div>
      </div>
      <div class="row mt-mb-15">
        @foreach($wins as $win)
        <div class="col-lg-6">
          <div class="latest-result-item">
            <div class="latest-result-item-header d-flex align-items-center justify-content-between">
              <div class="icon">
                <h3 class="mt-3">{{$win->lottery_name}}</h3>
              </div>
              <div class="btn-area">
                <a href="#0" class="cmn-btn"> Result </a>
              </div>
            </div>
            <div class="latest-result-item-body d-flex align-items-center justify-content-between">
              <div class="winner-num">
                <span class="winner-num-title">Winning numbers</span>
                <ul class="number-list">
                  @php 
                    $result = $win->winning_number;
                    $results = preg_split('/ /', $result);
                  @endphp
                  @foreach($results as $r)
                  <li> {{$r}} </li>
                  @endforeach
                </ul>
              </div>
              <div class="next-jack-amount">
                <span>Next estimated jackpot</span>
                <span class="amount">US  {{number_format($win->next_jackpot,2)}}</span>
              </div>
            </div>
            <div class="latest-result-item-footer">
              <div class="text-center"><i class="fa fa-hourglass-half"></i> {{$win->created_at}} </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- latest-result-item end -->
        
        <div class="col-lg-12 text-center">
          <button type="button" class="cmn-btn">load more</button>
        </div>
      </div>
    </div>
  </section>
  <!-- lottery-result-section end -->

  <!-- question-section start -->
 
  <!-- question-section end -->

  

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


<!-- Mirrored from Global Express Lotto.com/lottery-result by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 13:00:16 GMT -->
</html>