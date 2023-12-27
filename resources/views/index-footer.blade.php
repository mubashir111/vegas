
<style type="text/css">
      body{
        background: #fff;
      }
      .xc-footer{
          background: #fff;
          padding-bottom: 2em;
          padding-top: 5em;
      }
      .xc-footer-logo img{
        max-width: 50px;
        margin-right: 5px;
      }
      .xc-footer-logo{
          display: flex;
          align-items: center;
      }
      .xc-footer-logo p{
        margin-bottom: 0;
        font-weight: 600;
        font-family: 'Nunito', sans-serif;
      }

      .xc-footer-address .xc-title{
          font-weight: 700;
          margin-bottom: 10px;
          font-family: 'Nunito', sans-serif;
      }
      .xc-footer-address .xc-content{
        font-weight: 500;
        font-size: 14px;
        font-family: 'Nunito', sans-serif;
        margin-bottom: 0;
      }
      .xc-footer-address .xc-content a{
        text-decoration: none;
        color: #000;
        font-family: 'Nunito', sans-serif;
      }
      .xc-footer-links{
          list-style-type: none;
          display: flex;
          justify-content: center;
          margin-top: 2em;
      }
      .xc-footer-links li a{
          color: #000;
          text-decoration: none;
          font-size: 14px;
          font-weight: 500;
      }

    .xc-about-us-head {
        font-weight: 800;
        margin-bottom: .3em;
    }
      @media (max-width: 767px){
          .xc-footer {
              padding-bottom: 1em;
              padding-top: 0em;
          }
          .xc-footer-logo {
              margin-bottom: 20px;
          }
          .about .content h3 {
              font-size: 18px;
          }
          .xc-section-2 {
              padding-bottom: 8em;
          }

      }
      @media (min-width: 768px) and (max-width: 991px){
          .xc-footer {
              padding-bottom: 1em;
              padding-top: 0em;
          }
          .xc-footer-logo {
              margin-bottom: 20px;
          }
      }
      @media (min-width: 992px) and (max-width: 1280px){}
      @media (min-width: 1281px) and (max-width: 1400px){}
      @media (min-width: 1401px) and (max-width: 1600px){}
      @media (min-width: 1600px){}

      .xc-footer-logo img {
    max-width: 150px !important;
}
#screenshot .info h4 {
    padding: 0 0 0 60px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;

}

    </style>

    <section class="xc-footer" >
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3">
            <div class="xc-footer-logo">
              <a href="index.php"><img class=""  src="{{asset('assets/img/vegas/Outlook-cexf32zv.png')}}"></a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="xc-footer-address">
              <p class="xc-title">Quick Links</p>
              <!-- <p class="xc-content"><a href="terms-and-conditions.php">Terms and Conditions</a></p> -->
              <p class="xc-content"><a href="#">Privacy Policy</a></p>
              <!-- <p class="xc-content"><a href="refund-policy.php">Refund Policy</a></p> -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="xc-footer-address">
              <p class="xc-title">Get in touch</p>
              <p class="xc-content"><a href="mailto:wiselearningapp@gmail.com">Vegas Consulting was designed to help oil and gas companies achieve API quality management system and compliance quickly and with affordable cost.</a></p>
              <!-- <p class="xc-content">+91 9048 679 679</p> -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="xc-footer-address">
              <p class="xc-title">Address</p>
              <p class="xc-content">#309, 2nd Floor, Al Reyami Bld, Al Karama, Dubai, UAE.</p>
              <p><a href="http://contact@vegascg.com
                " target="_blank" rel="noopener noreferrer">contact@vegascg.com
            </a></p>
            <p></p>
            </div>
          </div>
        </div>

        <!-- <div class="row">
           <ul class="xc-footer-links">
              <li><a href="privacy-policy.php">Privacy Policy</a></li>
           </ul>
        </div> -->

      </div>




    </section>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js'></script>
<!-- <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText3.min.js'></script> -->
<script type="text/javascript">
  const h1s = document.querySelectorAll('.h1');

const letters = new SplitText(h1s).chars;

[...h1s].forEach((h1) => {
  h1.style.display = 'block'
});

const to = gsap.from(letters, {
  yPercent: 100,
  rotation: 20,
  duration: 1,
  stagger: 0.1,
  ease: "power3.inOut"
});

</script>


</body>

</html>
