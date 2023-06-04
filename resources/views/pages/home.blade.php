@include('layout.app')

@section('title', 'Abdullah Al Omar')

@section('content')
<div class="tp-hero-area tp-hero-space p-relative z-index-1 fix">
    <div class="tp-hero-shape">
       <div class="shape-circle-yellow d-none"></div>
       <div class="shape-circle-blue"></div>
       <div class="shape-one"><img src="assets/img/hero/shape-1.png" alt=""></div>
    </div>
    <div class="tp-hero-wapper">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-7 col-lg-7">
                <div class="tp-hero-content">
                   <div class="tp-hero-text">
                      <h2 class="tp-hero-title wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">We make things look good</h2>
                      <p class="wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">At Collax we specialize in designing, building, shipping and scaling beautiful, <br>
                         usable products with blazing-fast efficiency</p>
                      <div class="tp-hero-button mb-140 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                         <a class="tp-btn mr-30" href="portfolio-details.html">Visit Case Studies</a>
                         <a class="tp-btn-grey" href="about-me.html">About Collax <i class="far fa-arrow-right"></i></a>
                      </div>
                      <div class="tp-hero-social pb-30 wow tpfadeIn" data-wow-duration=".7s" data-wow-delay="1.2s">
                         <div class="tp-hero-social bp-hero-social">
                            <a class="social-icon-1" href="#">
                               <i class="fab fa-facebook-f social-icon-1"></i><span>Facebook</span>
                            </a>
                            <a class="social-icon-3" href="#"><i
                                  class="fab fa-youtube social-icon-3"></i><span>youtube</span></a>
                            <a class="social-icon-2" href="#"><i
                                  class="fab fa-twitter social-icon-2"></i><span>twitter</span></a>
                            <a class="social-icon-4" href="#"><i
                                  class="fab fa-behance social-icon-4"></i><span>behance</span></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-5 col-lg-5">
                <div class="tp-hero-big-img wow fadeInRight"  data-wow-duration=".7s" data-wow-delay="1.2s">
                   <img src="assets/img/hero/hero-2.png" alt="">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection