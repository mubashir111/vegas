
@extends('index-header')

<style type="text/css">
  .contact .info h4 {

    color: #306166;
}

.contact .info p {

    color: #000000;
  }
  .hero-img{
    text-align: center;
    display: flex;
    flex-direction: row;
    justify-content: center;

  }
  #services {
    background: #fff;
}
  .xc-img-title-1{
    font-weight: 800;
  }
  .xc-lg-6{
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.xc-mx {
    height: 59px;
}
.xc-mx2 {
    height: 53px;
}
.xc-flex {
    margin-left: -0.7em;
    align-items: center;
}
.xc-section-2 {
    background: #748b2d5c;

}
#screenshot {
    background: #748b2d5c !important;
}
.services .icon-box {

    background: #ccd5b6 !important;

}
.xc-section-2 .section-title {
    text-align: center;
    padding-bottom: 0px;
}
#screenshot .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
}
.xc-w-fit{
  width: fit-content !important;
}
.contact .info {
    border-top: 3px solid #11297b !important;
    border-bottom: 3px solid #11297b !important;

}
.contact .php-email-form {

    border-top: 3px solid #11297b !important;
    border-bottom: 3px solid #11297b !important;

}
@media only screen and (max-width: 767px) {
   .xc-f-center{
      display: flex;
      align-items: center;
   }
}

</style>

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex xc-f-center flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1 class="h1">Pioneering innovation in  and ISO
            Consulting solutions</h1>
        <h2 class="h1"></h2>
            <a href="javascript:void(0);" onclick="navigateToSection('contact')">
                <div class="btn btn-sucees fw-bold" style="background: #597302d4;
                color: wheat;
                font-weight: 700;">Contact Us</div>
            </a>

         {{-- <a  href="#"><lottie-player class=" xc-mx" src="assets/img/27173-googleplay-button.json" background="transparent"  speed="1"  style="" loop  autoplay></lottie-player></a>
          <a  href="#"><lottie-player class=" xc-mx2" src="assets/img/27169-apple-download.json" background="transparent"  speed="1"  style="" loop  autoplay></lottie-player></a> --}}

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
       <img src="{{asset('assets/img/vegas/pp.png')}}" class="img-fl animated" alt="">
    <!-- animated -->
       <!--  <lottie-player class="animated" src=">assets/img/UJWyjd9xtq.json" background="transparent"  speed="1"  style="" loop  autoplay></lottie-player> -->
<!--
        <lottie-player src="72266-vr-learning.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay></lottie-player> -->
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-center">
        <!-- <h5>Do you like this? Share with your friends!</h5> -->
        <div class="mt-5">
          <ul class="share_links">
            <li class="bg_fb"><a href="#" class="share_icon"  rel="tooltip" title="Facebook"><i class="icofont-facebook"></i></a></li>

            <li class="bg_insta"><a href="#" class="share_icon" rel="tooltip" title="Instagram"><i class="icofont-instagram"></i></a></li>

            <li class="bg_whatsapp"><a href="#" class="share_icon" rel="tooltip" title="Whatsapp"><i class="icofont-whatsapp" aria-hidden="true"></i></a>
            </li>

            <li class="bg_fb"><a href="#" class="share_icon" rel="tooltip" title="Instagram"><i class="icofont-linkedin"></i></a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="about" class="xc-section-2">
      <div class="container">

        <div>
          <!-- <div class="xc-about-text text-center" data-aos="fade-up">
            Explore the concepts through an immpresive visualisation experience that is high on ineractivity and engagement
        </div> -->

      <div class="xc-image-wrapper">
          <div class="row xc-flex-v-center"  >
            <div class="col-lg-6">
              <div class="xc-eduon-about-img" data-aos="fade-right">

                <lottie-player class="lottie-player-1 xc-flex" src="assets/img/113119-e-learning.json" background="transparent"  speed="1"  style="" loop  autoplay></lottie-player>


              </div>
            </div>
            <div class="col-lg-6 xc-lg-6 text-center" data-aos="fade-left">
              <div class="section-title"><h2>About Us</h2></div>
              <p class="xc-img-title xc-img-title-1" >The Vegas Consulting established in UAE branded as Vegas consulting originated to provide consulting, auditing, training, and certification services to organizations globally. Since inception we have actively servicing the client at world class consulting on Q1 /Q2 & monogram, product engineering services for GCC and MENA region it also offers supportive solutions to other management standards. At VCG, we extensively provide ISO & API QMS based management systems consultancy & certification support services, API Q1, API Q2 Consulting services, and training for individuals as well as for organizations, API preparatory audit and testing services.</p>

              <!-- <p class="xc-img-title xc-img-title-1" >support everyone who is preparing for competitive examinations.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section id="services" class="services ">
  <div class="container aos-init aos-animate" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
    </div>

    <div id="features-row-1" class="row" data-aos="fade-up">


      <div class="col-xl-3 xc-ww xc-checkcolor col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/vegas/consultation.png')}}" /></div>
          <p>Consultancy</p>
        </div>
      </div>


      <div class="col-xl-3  xc-ww  col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/vegas/iso.png')}}" /></div>
          <p>ISO Certification</p>
        </div>
      </div>


      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/vegas/prototype.png')}}" /></div>
          <p>Auditing</p>
        </div>
      </div>

      <div class="col-xl-3   xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/i3.png')}}" /></div>
          <p>Inspection Testing</p>
        </div>
      </div>

      <div class="col-xl-3   xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/vegas/teaching.png')}}" /></div>
          <p>Training</p>
        </div>
      </div>

      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/duration.png')}}" /></div>
          <p>NC Closure</p>
        </div>
      </div>


      <div class="col-xl-3 xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/decision.png')}}" /></div>
          <p>Design and Engineering</p>
        </div>
      </div>

      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/vegas/api.png')}}" /></div>
          <p>API QMS Maintenance</p>
        </div>
      </div>






    </div>



   <div id="features-row-2" class="row" data-aos="fade-up">


      <div class="col-xl-3 xc-ww xc-checkcolor col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/training.png')}}" /></div>
          <p>Pre recorded class</p>
        </div>
      </div>


       <div class="col-xl-3   xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/i3.png')}}" /></div>
          <p>Subscription for courses</p>
        </div>
      </div>

        <div class="col-xl-3  xc-ww  col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/b9.png')}}" /></div>
          <p>Online class+ recording</p>
        </div>
      </div>

       <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/i12.png')}}" /></div>
          <p>Doubts clearing</p>
        </div>
      </div>









      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/search.png')}}" /></div>
          <p>Online addmission</p>
        </div>
      </div>

      <div class="col-xl-3   xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/b1.png')}}" /></div>
          <p>Attractive interface for students to watch class</p>
        </div>
      </div>

      <div class="col-xl-3 xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/decision.png')}}" /></div>
          <p>Evaluation test and report</p>
        </div>
      </div>

      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/duration.png')}}" /></div>
          <p>Study material</p>
        </div>
      </div>



      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/i7.png')}}" /></div>
          <p>Affordable  Pricing</p>
        </div>
      </div>


       <div class="col-xl-3 xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/i11.png')}}" /></div>
          <p>Subscription for 1 year and 6month</p>
        </div>
      </div>




      <div class="col-xl-3  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/i10.png')}}" /></div>
          <p>Digital Marketing Support</p>
        </div>
      </div>





      <div class="col-xl-3 xc-checkcolor  xc-ww col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"> <img  src="{{asset('assets/img/features/b8.png')}}" /></div>
          <p>
          Continuous admin support</p>
        </div>
      </div>


    </div>





  </div>
</section>

<section id="screenshot" data-aos="fade-up">
<div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Get in touch with a global locations</h2>

        </div>

       <div class="row text-center">
        <div class="col">
            <div class="info">
            <h4>United Arab Emirates</h4>
            <p>Head Office - UAE</p>
            <p>#309, 2nd Floor, Al Reyami Building, Al Karama, Dubai, United Arab Emirates</p>
            <p>+971 52 777 3484</p>
            <a href="http://ccontact@vegascg.com">contact@vegascg.com</a>
            </div>
        </div>
        <div class="col">
            <div class="info">
            <h4>Singapore</h4>
            <p>Regional Office - Singapore</p>
            <p>60 Paya Lebar Road, #07-54 Paya Lebar Square, Singapore 409051</p>
            <p>+65 9457 0514</p>
            <a href="http://contact@vegascg.com">contact@vegascg.com</a>
        </div>
        </div>
        <div class="col">
            <div class="info">
            <h4>India - Coimbatore</h4>
            <p>Regional Technical Office - Coimbatore</p>
            <p>#23-26, Ansari Street, Ram Nagar, Coimbatore-641009</p>
            <p>+91 90420 64300</p>
            <a href="http://contact@vegascg.com">contact@vegascg.com</a>
        </div>
        </div>
       </div>
      </div>
    </section>

</section>
<section id="contact" class="contact" data-aos="fade-up">
      <div class="container aos-init aos-animate" >

        <div class="section-title">
          <h2>Contact Us</h2>

        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p> #309, 2nd Floor, Al Reyami Bld, Al Karama, Dubai, UAE/p>

              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>contact@vegascg.com</p>
              </div>

              <!-- <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p></p>
              </div> -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.746342281544!2d55.30624072465703!3d25.245467179745177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4362295440eb%3A0xd4b0e6c1350c5d84!2sAl%20Reyami%20Technologies%20(Head%20Office)!5e0!3m2!1sen!2sin!4v1703677408036!5m2!1sen!2sin" width="100%" height="290" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('form_submition')}}" method="post" role="form" class="  php-email-form">
                @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" required>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                @if (session('success'))
                <div class="sent-message" style="display: BLOCK !important;">Your message has been sent. Thank you!</div>

                {{-- <script type="text/javascript">
                    location.reload();
                </script> --}}
            @endif
            @if (session('error'))

                <div class="error-message" style="display: BLOCK !important;">{{ session('error') }}</div>

            @endif
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

@extends('index-footer')

<script type="text/javascript">

$(()=>{


$('#xc-send').



});

</script>


