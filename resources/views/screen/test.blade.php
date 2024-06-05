

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register/Login - Global Express Lotto</title>
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
   <!-- preloader end -->

   <!-- template-version start -->
<!-- <div class="template-version">
  <button type="button"><i class="fa fa-cog"></i></button>
  <div class="color-version-area">
    <a href="home-two.html" class="dark-vesion">Dark Version</a>
    <a href="home-one.html" class="light-vesion">Light Version</a>
  </div>
</div> -->

  <!--  header-section start  -->
    @include('component.header')  
  <!--  header-section end  -->
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
                <form action="add-member" method="post">
                  @csrf
                  <div class="frm-group">
                    <label>Username or Email Address</label>
                    <input type="email" name="registration_email" placeholder="Username or Email Address">
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
            <h1 class="page-title">Register/Login</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home-one.html">Home</a></li>
               
                <li class="breadcrumb-item active">Register/Login</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner end -->
  
  <!-- contact-section start -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-wrapper">
            <div class="contact-area d-flex">
              <div class="contact-form-area">
              <div class="container" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                @if(Session::has('fail'))
                  <div class="alert alert-danger">
                    {{Session::get('fail')}}
                  </div>
                @endif
                <form class="registration-form cmn-frm" action="add-member" method="post">
                  @csrf
                <div class="frm-group">
                

                      
                    <h1>Register</h1>
                </br>
                    <label>Firstname</label>
                    <input type="text" name="firstname" id="registration_email" placeholder="" value="" required>
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname" id="registration_email" placeholder="" value="" required>
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Username </label>
                    <input type="text" name="UserName" id="registration_email" placeholder="" value="" required>
                    <i class="fa fa-id-badge"></i>
                  </div>
                  <div class="frm-group">
                  <p class="text-danger">  </p>
                    <label>Email Address</label>
                    <input type="email" name="Email" id="registration_email" placeholder="" value="" required>
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="frm-group">
                  <p class="text-danger">  </p>
                    <label>Password</label>
                    <input type="password" name="txtpassword" id="registration_pass" placeholder="" value="" required>
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <label>Confirm Password</label>
                    <input type="password" name="txtcpassword" id="registration_re_pass" placeholder="" value="" required>
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                  <p class="text-danger">  </p>
                    <label>Phone Number</label>
                    <input type="phone" name="PhoneNumber" id="registration_email" placeholder="" value="" required>
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="frm-group">
                  <label>Country</label>
                    <input type="text" name="Country" id="registration_email" placeholder="" value="" required>
                    <i class="fa fa-globe"></i>
                    <!-- <select name="Country" class="form-select form-select-lg" aria-label="Default select example">
                            <option selected>-Select Country-</option>
                            <option data-mobile_code="93"
                                            value="Afghanistan"
                                            data-code="AF">Afghanistan</option>
                                                                        <option data-mobile_code="358"
                                            value="Aland Islands"
                                            data-code="AX">Aland Islands</option>
                                                                        <option data-mobile_code="355"
                                            value="Albania"
                                            data-code="AL">Albania</option>
                                                                        <option data-mobile_code="213"
                                            value="Algeria"
                                            data-code="DZ">Algeria</option>
                                                                        <option data-mobile_code="1684"
                                            value="AmericanSamoa"
                                            data-code="AS">AmericanSamoa</option>
                                                                        <option data-mobile_code="376"
                                            value="Andorra"
                                            data-code="AD">Andorra</option>
                                                                        <option data-mobile_code="244"
                                            value="Angola"
                                            data-code="AO">Angola</option>
                                                                        <option data-mobile_code="1264"
                                            value="Anguilla"
                                            data-code="AI">Anguilla</option>
                                                                        <option data-mobile_code="672"
                                            value="Antarctica"
                                            data-code="AQ">Antarctica</option>
                                                                        <option data-mobile_code="1268"
                                            value="Antigua and Barbuda"
                                            data-code="AG">Antigua and Barbuda</option>
                                                                        <option data-mobile_code="54"
                                            value="Argentina"
                                            data-code="AR">Argentina</option>
                                                                        <option data-mobile_code="374"
                                            value="Armenia"
                                            data-code="AM">Armenia</option>
                                                                        <option data-mobile_code="297"
                                            value="Aruba"
                                            data-code="AW">Aruba</option>
                                                                        <option data-mobile_code="61"
                                            value="Australia"
                                            data-code="AU">Australia</option>
                                                                        <option data-mobile_code="43"
                                            value="Austria"
                                            data-code="AT">Austria</option>
                                                                        <option data-mobile_code="994"
                                            value="Azerbaijan"
                                            data-code="AZ">Azerbaijan</option>
                                                                        <option data-mobile_code="1242"
                                            value="Bahamas"
                                            data-code="BS">Bahamas</option>
                                                                        <option data-mobile_code="973"
                                            value="Bahrain"
                                            data-code="BH">Bahrain</option>
                                                                        <option data-mobile_code="880"
                                            value="Bangladesh"
                                            data-code="BD">Bangladesh</option>
                                                                        <option data-mobile_code="1246"
                                            value="Barbados"
                                            data-code="BB">Barbados</option>
                                                                        <option data-mobile_code="375"
                                            value="Belarus"
                                            data-code="BY">Belarus</option>
                                                                        <option data-mobile_code="32"
                                            value="Belgium"
                                            data-code="BE">Belgium</option>
                                                                        <option data-mobile_code="501"
                                            value="Belize"
                                            data-code="BZ">Belize</option>
                                                                        <option data-mobile_code="229"
                                            value="Benin"
                                            data-code="BJ">Benin</option>
                                                                        <option data-mobile_code="1441"
                                            value="Bermuda"
                                            data-code="BM">Bermuda</option>
                                                                        <option data-mobile_code="975"
                                            value="Bhutan"
                                            data-code="BT">Bhutan</option>
                                                                        <option data-mobile_code="591"
                                            value="Plurinational State of Bolivia"
                                            data-code="BO">Plurinational State of Bolivia</option>
                                                                        <option data-mobile_code="387"
                                            value="Bosnia and Herzegovina"
                                            data-code="BA">Bosnia and Herzegovina</option>
                                                                        <option data-mobile_code="267"
                                            value="Botswana"
                                            data-code="BW">Botswana</option>
                                                                        <option data-mobile_code="55"
                                            value="Brazil"
                                            data-code="BR">Brazil</option>
                                                                        <option data-mobile_code="246"
                                            value="British Indian Ocean Territory"
                                            data-code="IO">British Indian Ocean Territory</option>
                                                                        <option data-mobile_code="673"
                                            value="Brunei Darussalam"
                                            data-code="BN">Brunei Darussalam</option>
                                                                        <option data-mobile_code="359"
                                            value="Bulgaria"
                                            data-code="BG">Bulgaria</option>
                                                                        <option data-mobile_code="226"
                                            value="Burkina Faso"
                                            data-code="BF">Burkina Faso</option>
                                                                        <option data-mobile_code="257"
                                            value="Burundi"
                                            data-code="BI">Burundi</option>
                                                                        <option data-mobile_code="855"
                                            value="Cambodia"
                                            data-code="KH">Cambodia</option>
                                                                        <option data-mobile_code="237"
                                            value="Cameroon"
                                            data-code="CM">Cameroon</option>
                                                                        <option data-mobile_code="1"
                                            value="Canada"
                                            data-code="CA">Canada</option>
                                                                        <option data-mobile_code="238"
                                            value="Cape Verde"
                                            data-code="CV">Cape Verde</option>
                                                                        <option data-mobile_code=" 345"
                                            value="Cayman Islands"
                                            data-code="KY">Cayman Islands</option>
                                                                        <option data-mobile_code="236"
                                            value="Central African Republic"
                                            data-code="CF">Central African Republic</option>
                                                                        <option data-mobile_code="235"
                                            value="Chad"
                                            data-code="TD">Chad</option>
                                                                        <option data-mobile_code="56"
                                            value="Chile"
                                            data-code="CL">Chile</option>
                                                                        <option data-mobile_code="86"
                                            value="China"
                                            data-code="CN">China</option>
                                                                        <option data-mobile_code="61"
                                            value="Christmas Island"
                                            data-code="CX">Christmas Island</option>
                                                                        <option data-mobile_code="61"
                                            value="Cocos (Keeling) Islands"
                                            data-code="CC">Cocos (Keeling) Islands</option>
                                                                        <option data-mobile_code="57"
                                            value="Colombia"
                                            data-code="CO">Colombia</option>
                                                                        <option data-mobile_code="269"
                                            value="Comoros"
                                            data-code="KM">Comoros</option>
                                                                        <option data-mobile_code="242"
                                            value="Congo"
                                            data-code="CG">Congo</option>
                                                                        <option data-mobile_code="243"
                                            value="The Democratic Republic of the Congo"
                                            data-code="CD">The Democratic Republic of the Congo</option>
                                                                        <option data-mobile_code="682"
                                            value="Cook Islands"
                                            data-code="CK">Cook Islands</option>
                                                                        <option data-mobile_code="506"
                                            value="Costa Rica"
                                            data-code="CR">Costa Rica</option>
                                                                        <option data-mobile_code="225"
                                            value="Cote d&#039;Ivoire"
                                            data-code="CI">Cote d&#039;Ivoire</option>
                                                                        <option data-mobile_code="385"
                                            value="Croatia"
                                            data-code="HR">Croatia</option>
                                                                        <option data-mobile_code="53"
                                            value="Cuba"
                                            data-code="CU">Cuba</option>
                                                                        <option data-mobile_code="357"
                                            value="Cyprus"
                                            data-code="CY">Cyprus</option>
                                                                        <option data-mobile_code="420"
                                            value="Czech Republic"
                                            data-code="CZ">Czech Republic</option>
                                                                        <option data-mobile_code="45"
                                            value="Denmark"
                                            data-code="DK">Denmark</option>
                                                                        <option data-mobile_code="253"
                                            value="Djibouti"
                                            data-code="DJ">Djibouti</option>
                                                                        <option data-mobile_code="1767"
                                            value="Dominica"
                                            data-code="DM">Dominica</option>
                                                                        <option data-mobile_code="1849"
                                            value="Dominican Republic"
                                            data-code="DO">Dominican Republic</option>
                                                                        <option data-mobile_code="593"
                                            value="Ecuador"
                                            data-code="EC">Ecuador</option>
                                                                        <option data-mobile_code="20"
                                            value="Egypt"
                                            data-code="EG">Egypt</option>
                                                                        <option data-mobile_code="503"
                                            value="El Salvador"
                                            data-code="SV">El Salvador</option>
                                                                        <option data-mobile_code="240"
                                            value="Equatorial Guinea"
                                            data-code="GQ">Equatorial Guinea</option>
                                                                        <option data-mobile_code="291"
                                            value="Eritrea"
                                            data-code="ER">Eritrea</option>
                                                                        <option data-mobile_code="372"
                                            value="Estonia"
                                            data-code="EE">Estonia</option>
                                                                        <option data-mobile_code="251"
                                            value="Ethiopia"
                                            data-code="ET">Ethiopia</option>
                                                                        <option data-mobile_code="500"
                                            value="Falkland Islands (Malvinas)"
                                            data-code="FK">Falkland Islands (Malvinas)</option>
                                                                        <option data-mobile_code="298"
                                            value="Faroe Islands"
                                            data-code="FO">Faroe Islands</option>
                                                                        <option data-mobile_code="679"
                                            value="Fiji"
                                            data-code="FJ">Fiji</option>
                                                                        <option data-mobile_code="358"
                                            value="Finland"
                                            data-code="FI">Finland</option>
                                                                        <option data-mobile_code="33"
                                            value="France"
                                            data-code="FR">France</option>
                                                                        <option data-mobile_code="594"
                                            value="French Guiana"
                                            data-code="GF">French Guiana</option>
                                                                        <option data-mobile_code="689"
                                            value="French Polynesia"
                                            data-code="PF">French Polynesia</option>
                                                                        <option data-mobile_code="241"
                                            value="Gabon"
                                            data-code="GA">Gabon</option>
                                                                        <option data-mobile_code="220"
                                            value="Gambia"
                                            data-code="GM">Gambia</option>
                                                                        <option data-mobile_code="995"
                                            value="Georgia"
                                            data-code="GE">Georgia</option>
                                                                        <option data-mobile_code="49"
                                            value="Germany"
                                            data-code="DE">Germany</option>
                                                                        <option data-mobile_code="233"
                                            value="Ghana"
                                            data-code="GH">Ghana</option>
                                                                        <option data-mobile_code="350"
                                            value="Gibraltar"
                                            data-code="GI">Gibraltar</option>
                                                                        <option data-mobile_code="30"
                                            value="Greece"
                                            data-code="GR">Greece</option>
                                                                        <option data-mobile_code="299"
                                            value="Greenland"
                                            data-code="GL">Greenland</option>
                                                                        <option data-mobile_code="1473"
                                            value="Grenada"
                                            data-code="GD">Grenada</option>
                                                                        <option data-mobile_code="590"
                                            value="Guadeloupe"
                                            data-code="GP">Guadeloupe</option>
                                                                        <option data-mobile_code="1671"
                                            value="Guam"
                                            data-code="GU">Guam</option>
                                                                        <option data-mobile_code="502"
                                            value="Guatemala"
                                            data-code="GT">Guatemala</option>
                                                                        <option data-mobile_code="44"
                                            value="Guernsey"
                                            data-code="GG">Guernsey</option>
                                                                        <option data-mobile_code="224"
                                            value="Guinea"
                                            data-code="GN">Guinea</option>
                                                                        <option data-mobile_code="245"
                                            value="Guinea-Bissau"
                                            data-code="GW">Guinea-Bissau</option>
                                                                        <option data-mobile_code="595"
                                            value="Guyana"
                                            data-code="GY">Guyana</option>
                                                                        <option data-mobile_code="509"
                                            value="Haiti"
                                            data-code="HT">Haiti</option>
                                                                        <option data-mobile_code="379"
                                            value="Holy See (Vatican City State)"
                                            data-code="VA">Holy See (Vatican City State)</option>
                                                                        <option data-mobile_code="504"
                                            value="Honduras"
                                            data-code="HN">Honduras</option>
                                                                        <option data-mobile_code="852"
                                            value="Hong Kong"
                                            data-code="HK">Hong Kong</option>
                                                                        <option data-mobile_code="36"
                                            value="Hungary"
                                            data-code="HU">Hungary</option>
                                                                        <option data-mobile_code="354"
                                            value="Iceland"
                                            data-code="IS">Iceland</option>
                                                                        <option data-mobile_code="91"
                                            value="India"
                                            data-code="IN">India</option>
                                                                        <option data-mobile_code="62"
                                            value="Indonesia"
                                            data-code="ID">Indonesia</option>
                                                                        <option data-mobile_code="98"
                                            value="Iran, Islamic Republic of Persian Gulf"
                                            data-code="IR">Iran, Islamic Republic of Persian Gulf</option>
                                                                        <option data-mobile_code="964"
                                            value="Iraq"
                                            data-code="IQ">Iraq</option>
                                                                        <option data-mobile_code="353"
                                            value="Ireland"
                                            data-code="IE">Ireland</option>
                                                                        <option data-mobile_code="44"
                                            value="Isle of Man"
                                            data-code="IM">Isle of Man</option>
                                                                        <option data-mobile_code="972"
                                            value="Israel"
                                            data-code="IL">Israel</option>
                                                                        <option data-mobile_code="39"
                                            value="Italy"
                                            data-code="IT">Italy</option>
                                                                        <option data-mobile_code="1876"
                                            value="Jamaica"
                                            data-code="JM">Jamaica</option>
                                                                        <option data-mobile_code="81"
                                            value="Japan"
                                            data-code="JP">Japan</option>
                                                                        <option data-mobile_code="44"
                                            value="Jersey"
                                            data-code="JE">Jersey</option>
                                                                        <option data-mobile_code="962"
                                            value="Jordan"
                                            data-code="JO">Jordan</option>
                                                                        <option data-mobile_code="77"
                                            value="Kazakhstan"
                                            data-code="KZ">Kazakhstan</option>
                                                                        <option data-mobile_code="254"
                                            value="Kenya"
                                            data-code="KE">Kenya</option>
                                                                        <option data-mobile_code="686"
                                            value="Kiribati"
                                            data-code="KI">Kiribati</option>
                                                                        <option data-mobile_code="850"
                                            value="Democratic People&#039;s Republic of Korea"
                                            data-code="KP">Democratic People&#039;s Republic of Korea</option>
                                                                        <option data-mobile_code="82"
                                            value="Republic of South Korea"
                                            data-code="KR">Republic of South Korea</option>
                                                                        <option data-mobile_code="965"
                                            value="Kuwait"
                                            data-code="KW">Kuwait</option>
                                                                        <option data-mobile_code="996"
                                            value="Kyrgyzstan"
                                            data-code="KG">Kyrgyzstan</option>
                                                                        <option data-mobile_code="856"
                                            value="Laos"
                                            data-code="LA">Laos</option>
                                                                        <option data-mobile_code="371"
                                            value="Latvia"
                                            data-code="LV">Latvia</option>
                                                                        <option data-mobile_code="961"
                                            value="Lebanon"
                                            data-code="LB">Lebanon</option>
                                                                        <option data-mobile_code="266"
                                            value="Lesotho"
                                            data-code="LS">Lesotho</option>
                                                                        <option data-mobile_code="231"
                                            value="Liberia"
                                            data-code="LR">Liberia</option>
                                                                        <option data-mobile_code="218"
                                            value="Libyan Arab Jamahiriya"
                                            data-code="LY">Libyan Arab Jamahiriya</option>
                                                                        <option data-mobile_code="423"
                                            value="Liechtenstein"
                                            data-code="LI">Liechtenstein</option>
                                                                        <option data-mobile_code="370"
                                            value="Lithuania"
                                            data-code="LT">Lithuania</option>
                                                                        <option data-mobile_code="352"
                                            value="Luxembourg"
                                            data-code="LU">Luxembourg</option>
                                                                        <option data-mobile_code="853"
                                            value="Macao"
                                            data-code="MO">Macao</option>
                                                                        <option data-mobile_code="389"
                                            value="Macedonia"
                                            data-code="MK">Macedonia</option>
                                                                        <option data-mobile_code="261"
                                            value="Madagascar"
                                            data-code="MG">Madagascar</option>
                                                                        <option data-mobile_code="265"
                                            value="Malawi"
                                            data-code="MW">Malawi</option>
                                                                        <option data-mobile_code="60"
                                            value="Malaysia"
                                            data-code="MY">Malaysia</option>
                                                                        <option data-mobile_code="960"
                                            value="Maldives"
                                            data-code="MV">Maldives</option>
                                                                        <option data-mobile_code="223"
                                            value="Mali"
                                            data-code="ML">Mali</option>
                                                                        <option data-mobile_code="356"
                                            value="Malta"
                                            data-code="MT">Malta</option>
                                                                        <option data-mobile_code="692"
                                            value="Marshall Islands"
                                            data-code="MH">Marshall Islands</option>
                                                                        <option data-mobile_code="596"
                                            value="Martinique"
                                            data-code="MQ">Martinique</option>
                                                                        <option data-mobile_code="222"
                                            value="Mauritania"
                                            data-code="MR">Mauritania</option>
                                                                        <option data-mobile_code="230"
                                            value="Mauritius"
                                            data-code="MU">Mauritius</option>
                                                                        <option data-mobile_code="262"
                                            value="Mayotte"
                                            data-code="YT">Mayotte</option>
                                                                        <option data-mobile_code="52"
                                            value="Mexico"
                                            data-code="MX">Mexico</option>
                                                                        <option data-mobile_code="691"
                                            value="Federated States of Micronesia"
                                            data-code="FM">Federated States of Micronesia</option>
                                                                        <option data-mobile_code="373"
                                            value="Moldova"
                                            data-code="MD">Moldova</option>
                                                                        <option data-mobile_code="377"
                                            value="Monaco"
                                            data-code="MC">Monaco</option>
                                                                        <option data-mobile_code="976"
                                            value="Mongolia"
                                            data-code="MN">Mongolia</option>
                                                                        <option data-mobile_code="382"
                                            value="Montenegro"
                                            data-code="ME">Montenegro</option>
                                                                        <option data-mobile_code="1664"
                                            value="Montserrat"
                                            data-code="MS">Montserrat</option>
                                                                        <option data-mobile_code="212"
                                            value="Morocco"
                                            data-code="MA">Morocco</option>
                                                                        <option data-mobile_code="258"
                                            value="Mozambique"
                                            data-code="MZ">Mozambique</option>
                                                                        <option data-mobile_code="95"
                                            value="Myanmar"
                                            data-code="MM">Myanmar</option>
                                                                        <option data-mobile_code="264"
                                            value="Namibia"
                                            data-code="NA">Namibia</option>
                                                                        <option data-mobile_code="674"
                                            value="Nauru"
                                            data-code="NR">Nauru</option>
                                                                        <option data-mobile_code="977"
                                            value="Nepal"
                                            data-code="NP">Nepal</option>
                                                                        <option data-mobile_code="31"
                                            value="Netherlands"
                                            data-code="NL">Netherlands</option>
                                                                        <option data-mobile_code="599"
                                            value="Netherlands Antilles"
                                            data-code="AN">Netherlands Antilles</option>
                                                                        <option data-mobile_code="687"
                                            value="New Caledonia"
                                            data-code="NC">New Caledonia</option>
                                                                        <option data-mobile_code="64"
                                            value="New Zealand"
                                            data-code="NZ">New Zealand</option>
                                                                        <option data-mobile_code="505"
                                            value="Nicaragua"
                                            data-code="NI">Nicaragua</option>
                                                                        <option data-mobile_code="227"
                                            value="Niger"
                                            data-code="NE">Niger</option>
                                                <option data-mobile_code="234"
                                            value="Nigeria"
                                            data-code="NG">Nigeria</option>
                                                                        <option data-mobile_code="683"
                                            value="Niue"
                                            data-code="NU">Niue</option>
                                                                        <option data-mobile_code="672"
                                            value="Norfolk Island"
                                            data-code="NF">Norfolk Island</option>
                                                                        <option data-mobile_code="1670"
                                            value="Northern Mariana Islands"
                                            data-code="MP">Northern Mariana Islands</option>
                                                                        <option data-mobile_code="47"
                                            value="Norway"
                                            data-code="NO">Norway</option>
                                                                        <option data-mobile_code="968"
                                            value="Oman"
                                            data-code="OM">Oman</option>
                                                                        <option data-mobile_code="92"
                                            value="Pakistan"
                                            data-code="PK">Pakistan</option>
                                                                        <option data-mobile_code="680"
                                            value="Palau"
                                            data-code="PW">Palau</option>
                                                                        <option data-mobile_code="970"
                                            value="Palestinian Territory"
                                            data-code="PS">Palestinian Territory</option>
                                                                        <option data-mobile_code="507"
                                            value="Panama"
                                            data-code="PA">Panama</option>
                                                                        <option data-mobile_code="675"
                                            value="Papua New Guinea"
                                            data-code="PG">Papua New Guinea</option>
                                                                        <option data-mobile_code="595"
                                            value="Paraguay"
                                            data-code="PY">Paraguay</option>
                                                                        <option data-mobile_code="51"
                                            value="Peru"
                                            data-code="PE">Peru</option>
                                                                        <option data-mobile_code="63"
                                            value="Philippines"
                                            data-code="PH">Philippines</option>
                                                                        <option data-mobile_code="872"
                                            value="Pitcairn"
                                            data-code="PN">Pitcairn</option>
                                                                        <option data-mobile_code="48"
                                            value="Poland"
                                            data-code="PL">Poland</option>
                                                                        <option data-mobile_code="351"
                                            value="Portugal"
                                            data-code="PT">Portugal</option>
                                                                        <option data-mobile_code="1939"
                                            value="Puerto Rico"
                                            data-code="PR">Puerto Rico</option>
                                                                        <option data-mobile_code="974"
                                            value="Qatar"
                                            data-code="QA">Qatar</option>
                                                                        <option data-mobile_code="40"
                                            value="Romania"
                                            data-code="RO">Romania</option>
                                                                        <option data-mobile_code="7"
                                            value="Russia"
                                            data-code="RU">Russia</option>
                                                                        <option data-mobile_code="250"
                                            value="Rwanda"
                                            data-code="RW">Rwanda</option>
                                                                        <option data-mobile_code="262"
                                            value="Reunion"
                                            data-code="RE">Reunion</option>
                                                                        <option data-mobile_code="590"
                                            value="Saint Barthelemy"
                                            data-code="BL">Saint Barthelemy</option>
                                                                        <option data-mobile_code="290"
                                            value="Saint Helena"
                                            data-code="SH">Saint Helena</option>
                                                                        <option data-mobile_code="1869"
                                            value="Saint Kitts and Nevis"
                                            data-code="KN">Saint Kitts and Nevis</option>
                                                                        <option data-mobile_code="1758"
                                            value="Saint Lucia"
                                            data-code="LC">Saint Lucia</option>
                                                                        <option data-mobile_code="590"
                                            value="Saint Martin"
                                            data-code="MF">Saint Martin</option>
                                                                        <option data-mobile_code="508"
                                            value="Saint Pierre and Miquelon"
                                            data-code="PM">Saint Pierre and Miquelon</option>
                                                                        <option data-mobile_code="1784"
                                            value="Saint Vincent and the Grenadines"
                                            data-code="VC">Saint Vincent and the Grenadines</option>
                                                                        <option data-mobile_code="685"
                                            value="Samoa"
                                            data-code="WS">Samoa</option>
                                                                        <option data-mobile_code="378"
                                            value="San Marino"
                                            data-code="SM">San Marino</option>
                                                                        <option data-mobile_code="239"
                                            value="Sao Tome and Principe"
                                            data-code="ST">Sao Tome and Principe</option>
                                                                        <option data-mobile_code="966"
                                            value="Saudi Arabia"
                                            data-code="SA">Saudi Arabia</option>
                                                                        <option data-mobile_code="221"
                                            value="Senegal"
                                            data-code="SN">Senegal</option>
                                                                        <option data-mobile_code="381"
                                            value="Serbia"
                                            data-code="RS">Serbia</option>
                                                                        <option data-mobile_code="248"
                                            value="Seychelles"
                                            data-code="SC">Seychelles</option>
                                                                        <option data-mobile_code="232"
                                            value="Sierra Leone"
                                            data-code="SL">Sierra Leone</option>
                                                                        <option data-mobile_code="65"
                                            value="Singapore"
                                            data-code="SG">Singapore</option>
                                                                        <option data-mobile_code="421"
                                            value="Slovakia"
                                            data-code="SK">Slovakia</option>
                                                                        <option data-mobile_code="386"
                                            value="Slovenia"
                                            data-code="SI">Slovenia</option>
                                                                        <option data-mobile_code="677"
                                            value="Solomon Islands"
                                            data-code="SB">Solomon Islands</option>
                                                                        <option data-mobile_code="252"
                                            value="Somalia"
                                            data-code="SO">Somalia</option>
                                                                        <option data-mobile_code="27"
                                            value="South Africa"
                                            data-code="ZA">South Africa</option>
                                                                        <option data-mobile_code="211"
                                            value="South Sudan"
                                            data-code="SS">South Sudan</option>
                                                                        <option data-mobile_code="500"
                                            value="South Georgia and the South Sandwich Islands"
                                            data-code="GS">South Georgia and the South Sandwich Islands</option>
                                                                        <option data-mobile_code="34"
                                            value="Spain"
                                            data-code="ES">Spain</option>
                                                                        <option data-mobile_code="94"
                                            value="Sri Lanka"
                                            data-code="LK">Sri Lanka</option>
                                                                        <option data-mobile_code="249"
                                            value="Sudan"
                                            data-code="SD">Sudan</option>
                                                                        <option data-mobile_code="597"
                                            value="Suricountry"
                                            data-code="SR">Suricountry</option>
                                                                        <option data-mobile_code="47"
                                            value="Svalbard and Jan Mayen"
                                            data-code="SJ">Svalbard and Jan Mayen</option>
                                                                        <option data-mobile_code="268"
                                            value="Swaziland"
                                            data-code="SZ">Swaziland</option>
                                                                        <option data-mobile_code="46"
                                            value="Sweden"
                                            data-code="SE">Sweden</option>
                                                                        <option data-mobile_code="41"
                                            value="Switzerland"
                                            data-code="CH">Switzerland</option>
                                                                        <option data-mobile_code="963"
                                            value="Syrian Arab Republic"
                                            data-code="SY">Syrian Arab Republic</option>
                                                                        <option data-mobile_code="886"
                                            value="Taiwan"
                                            data-code="TW">Taiwan</option>
                                                                        <option data-mobile_code="992"
                                            value="Tajikistan"
                                            data-code="TJ">Tajikistan</option>
                                                                        <option data-mobile_code="255"
                                            value="Tanzania"
                                            data-code="TZ">Tanzania</option>
                                                                        <option data-mobile_code="66"
                                            value="Thailand"
                                            data-code="TH">Thailand</option>
                                                                        <option data-mobile_code="670"
                                            value="Timor-Leste"
                                            data-code="TL">Timor-Leste</option>
                                                                        <option data-mobile_code="228"
                                            value="Togo"
                                            data-code="TG">Togo</option>
                                                                        <option data-mobile_code="690"
                                            value="Tokelau"
                                            data-code="TK">Tokelau</option>
                                                                        <option data-mobile_code="676"
                                            value="Tonga"
                                            data-code="TO">Tonga</option>
                                                                        <option data-mobile_code="1868"
                                            value="Trinidad and Tobago"
                                            data-code="TT">Trinidad and Tobago</option>
                                                                        <option data-mobile_code="216"
                                            value="Tunisia"
                                            data-code="TN">Tunisia</option>
                                                                        <option data-mobile_code="90"
                                            value="Turkey"
                                            data-code="TR">Turkey</option>
                                                                        <option data-mobile_code="993"
                                            value="Turkmenistan"
                                            data-code="TM">Turkmenistan</option>
                                                                        <option data-mobile_code="1649"
                                            value="Turks and Caicos Islands"
                                            data-code="TC">Turks and Caicos Islands</option>
                                                                        <option data-mobile_code="688"
                                            value="Tuvalu"
                                            data-code="TV">Tuvalu</option>
                                                                        <option data-mobile_code="256"
                                            value="Uganda"
                                            data-code="UG">Uganda</option>
                                                                        <option data-mobile_code="380"
                                            value="Ukraine"
                                            data-code="UA">Ukraine</option>
                                                                        <option data-mobile_code="971"
                                            value="United Arab Emirates"
                                            data-code="AE">United Arab Emirates</option>
                                                                        <option data-mobile_code="44"
                                            value="United Kingdom"
                                            data-code="GB">United Kingdom</option>
                                                                        <option data-mobile_code="1"
                                            value="United States"
                                            data-code="US">United States</option>
                                                                        <option data-mobile_code="598"
                                            value="Uruguay"
                                            data-code="UY">Uruguay</option>
                                                                        <option data-mobile_code="998"
                                            value="Uzbekistan"
                                            data-code="UZ">Uzbekistan</option>
                                                                        <option data-mobile_code="678"
                                            value="Vanuatu"
                                            data-code="VU">Vanuatu</option>
                                                                        <option data-mobile_code="58"
                                            value="Venezuela"
                                            data-code="VE">Venezuela</option>
                                                                        <option data-mobile_code="84"
                                            value="Vietnam"
                                            data-code="VN">Vietnam</option>
                                                                        <option data-mobile_code="1284"
                                            value="British Virgin Islands"
                                            data-code="VG">British Virgin Islands</option>
                                                                        <option data-mobile_code="1340"
                                            value="U.S. Virgin Islands"
                                            data-code="VI">U.S. Virgin Islands</option>
                                                                        <option data-mobile_code="681"
                                            value="Wallis and Futuna"
                                            data-code="WF">Wallis and Futuna</option>
                                                                        <option data-mobile_code="967"
                                            value="Yemen"
                                            data-code="YE">Yemen</option>
                                                                        <option data-mobile_code="260"
                                            value="Zambia"
                                            data-code="ZM">Zambia</option>
                                                                        <option data-mobile_code="263"
                                            value="Zimbabwe"
                                            data-code="ZW">Zimbabwe</option>
<i class="fa fa-globe"></i></select> -->


                  </div>
                  <div class="frm-group">
                    <!-- <input type="submit"  id="registration_submit" value="Registration" id="Button"> -->
                    <!-- <button type="submit" class="submit-btn" id="registration_submit">Register</button> -->
                    <input type="submit" id="Button" value="Register">
                  </div>
                 <!-- <div class="frm-group">
                    <div class="checkbox-area">
                      <input type="checkbox" id="registration_remember_pass">
                      <label for="registration_remember_pass" required>I Agree with the Terms of Use</label>
                    </div>
                     <div class="forgot-pass-area">
                      <a href="#0">Forgot Password?</a>
                    </div> 
                  </div>-->
                  <!-- <div class="frm-group">
                    <div class="or-text">
                      <span>Or login with</span>
                    </div>
                  </div> -->
                  <!-- <div class="frm-group">
                    <div class="login-with-area">
                      <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                      <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                    </div>
                  </div> -->
                </form>
                <!-- <div class="have-not-account">
                  <p>Already have an account?<a href="#0">Login</a></p>
                </div> -->
              </div>
              </div><!-- contact-form-area end -->
              <!-- <div class="address-area has_bg_image" data-background="assets/images/contact-mg.jpg"> -->
              <div class="address-area has_bg_image text-light" style="background-color:#33b5f7;">
                <div class="address-area-header">
                <h1>Login</h1>
                </div>
                <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                @if(Session::has('fail'))
                  <div class="alert alert-danger">
                    {{Session::get('fail')}}
                  </div>
                @endif
                <form class="login-form cmn-frm" action="login-member" method="post">
                @csrf
                  <p class="text-danger">  </p>
                  <div class="frm-group">
                    <label>Email Address</label>
                    <input type="email" name="UserName1" id="login_email" placeholder="Email Address" value="" required>
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Password</label>
                    <input type="password" name="password" id="login_pass" placeholder="Enter Password" required>
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <input type="submit" name="btnlogin" id="Button" value="login">
                  </div>
                  <!-- <div class="frm-group">
                    <div class="checkbox-area">
                      <input type="checkbox" id="login_remember_pass">
                      <label for="login_remember_pass">Remember Password</label>
                    </div>
                    <div class="forgot-pass-area">
                      <a href="#0">Forgot Password?</a>
                    </div>
                  </div> -->
                  <!-- <div class="frm-group">
                    <div class="or-text">
                      <span>Or login with</span>
                    </div>
                  </div> -->
                  <!-- <div class="frm-group">
                    <div class="login-with-area">
                      <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                      <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                    </div> -->
                  </div>
                </form>
                <!-- <div class="have-not-account">
                  <p>You don’t have an account?<a href="#0">Register Now</a></p>
                </div> -->
              </div>
             
            </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

  
  <!-- map-section end -->
  </br></br>
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
  <!-- google map init js file -->
  <script src="assets/js/goolg-map-activate.js"></script>
  <!-- google map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&amp;callback=initMap"
  async defer></script> 
  <!-- main script js file -->
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from Global Express Lotto.com/test by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 13:00:27 GMT -->
</html>