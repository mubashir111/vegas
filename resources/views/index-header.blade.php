

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wise Learning App</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

<link href="{{ asset('assets/img/wise-logo.png') }}" rel="icon">
<link href="{{ asset('assets/img/wise-logo.png') }}" rel="apple-touch-icon">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">


</head>

<style type="text/css">

  #footer .footer-bottom
  {
    color: #0e282b !important;
    /*font-style: italic;*/
    font-weight: 400;
  }
  .get-started-btn {
    background-color: #812892;
    border: unset;
}
  .logotext
  {
    text-transform: unset !important;
    letter-spacing: unset !important;
    margin-right: auto !important;
  }
  #hero .btn-watch-video i
  {
    color: #306166;
   /* border: 2px solid #306166;
    border-radius: 50px;
    padding: 4px;*/
  }

  #hero .btn-watch-video
  {
    color: #131f20;
    font-weight:600;
  }
  .nav-menu > ul > li
  {
    padding: 10px 0 10px 60px !important;
  }

 #hero {
    height: 100%;
    background: #ffffff !important;
    /* min-height: 137ex; */
    min-height: 100vh;
}

 #screenshot {
     background: #dcedf3;
}



  body{
   /* background: #ebf0e8;*/

  }

  section h2{

    color: #000 !important;
  }

</style>
<style type="text/css">
  *{
    /*font-family: 'Be Vietnam', sans-serif;*/
    font-family: 'Nunito Sans', sans-serif !important;
  }
  .share_btn {
    font-size:36px;
    cursor:pointer;
  }
  .share_links { list-style: none;
  }

  .share_links li {
    display: inline-block;
    background-color: black;
    margin: 15px;
    border-radius: 50%;
    background: #000;
  }
  .share_icon {
    color: white;
    display: table-cell;
    vertical-align: middle;
    /*text-align: center;*/
    text-decoration: none;
    font-size: 32px;
    height: 50px;
    width: 50px;

  }
  .share_links .bg_fb:hover {
   color: #fff;
   background:#3b5998;
 }
 .share_links .bg_insta:hover {
   color: #fff;
   background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
 }
 .share_links .bg_whatsapp:hover {
   color: #fff;
   background:#25D366;
 }


 .share_links li:hover  .share_icon {
   color: #fff;
 }

 #myModal
 {

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

#header.header-scrolled, #header.header-inner-pages {
    background: #ffff;
}

#about h2{
  color: #000;
}

.services .icon-box {
    box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
    padding: 1.2em;
    transition: all ease-in-out 0.4s;
    /* background: #432679; */
    background: #2999bf;
    text-align: center;
    border-radius: 2em;
}

.services .icon-box  img{
  width: 30%;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
  color: #fff;
}

.xc-ww{
  margin-bottom: 2em;

}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #306166;
  bottom: 0;
  left: calc(50% - 20px);
}

.back-to-top i {
 background: #306166;

}

.xc-logo img{
      position: absolute;
    top: .6em;
}

.mobile-nav-toggle i {
    color: #316266;
}
.nav-menu > ul > li {
    padding: 7px 0 10px 2em !important;
}

.header-scrolled .logo img{
  max-height: 40px !important;
  position: relative;
  top: 0em;
}
.header-scrolled{
  padding: 6px 0 !important;

}
.mobile-nav a {

    color: #03143c !important;

}
.mobile-nav {
    bottom: unset;

}
.nav-menu a{
color: #03143a;
}
.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
    color: #1b2223;
}
.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i{
  background: #209dd8;
}
.mobile-nav-toggle i{
  color: #26adf8 !important;
}
.get-started-btn:hover {
    background: #1b2223 ;
    color: #fff;
}
.contact .info h4 {
    color: #1b2223 !important;
}

.back-to-top i:hover {
    background: #1b2223;
    color: #fff;
}

@media only screen and (max-width: 678px) {
 .xc-ww {
  width: 49%;
}
}

.xc-checkcolor .icon-box {
    background: #fff;
    color: #000 !important;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.xc-checkcolor p{
  color: #000 !important;
}


</style>

<body>
<div style="    position: fixed;
  z-index: 99999999;
  width: 100%;
  height: 100%;
  background: #3c3b3b2e;
  display: none;
  " id="ajaxloader">
  <img style="
  position: fixed;
  z-index: 99999999;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  width: 100px;
  " src="{{asset('assets/img/loader/1.gif')}}" />


</div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

 <h1 class="logo mr-auto">

     <a href="" class="logo xc-logo "><img src="{{asset('assets/img/vegas/Outlook-cexf32zv.png')}}" alt="" class="img-fluid"></a>

 </h1>

 <nav class="nav-menu d-none d-lg-block">
    <ul>
        <li><a href="javascript:void(0);" onclick="navigateToSection('hero')">Home</a></li>
        <li><a href="javascript:void(0);" onclick="navigateToSection('about')">About us</a></li>
        <li><a href="javascript:void(0);" onclick="navigateToSection('services')">Services</a></li>
        <li><a href="javascript:void(0);" onclick="navigateToSection('contact')">Contact</a></li>
    </ul>
</nav>

<script>
    function navigateToSection(sectionId) {
        var $target = $('#' + sectionId);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'linear', function () {
            // Change the URL without scrolling back
            history.pushState({}, '', '#' + sectionId);
        });
    }
</script>






    <!-- <a href="signup" class="get-started-btn scrollto">Get Started Free</a> -->

  </div>
</header>
