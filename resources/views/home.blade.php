@extends('layouts.app')

@section('title')
<title> Oils | Home </title>
@endsection

@section('content')


<!--================================= banner -->
    <section class="banner">
        <div class="swiper-container">
          <div class="swiper-wrapper h-700 h-sm-500">
            <div class="swiper-slide banner-1 d-flex responsive-overlap-md bg-overlay-black-30">
              <div class="video-wrapper">
                <video playsinline autoplay muted loop poster="{{asset('images/project/place-2.png')}}" data-wf-ignore="true" muted="true" loop="true" data-object-fit="cover" autoplay="true">
                  <source src="{{asset('images/video/united-petrol.mp4')}}" type="video/webm">
                </video>
                <div class="swipeinner swep1">
                  <div class="row m-0 justify-content-center">
                    <div class="col-lg-9 col-md-10 position-relative">
                      <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Developing Ideas Worldwide
                      </h1>
                      <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Through our diverse business
                        portfolio we identify and develop profitable, strategic opportunities.</h6>
                      <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                        data-delay="0.75s" href="#">Get Started Now<i class="fas fa-arrow-right ps-3 w-30px"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide banner-2 align-items-center d-flex responsive-overlap-md bg-overlay-black-30">
              <div class="swipeinner container ">
                <div class="row ">
                  <div class="col-lg-9 col-md-11  position-relative">
                    <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Increasing Production With
                      Natural Resources</h1>
                    <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">We want to foster a culture
                      that values knowledge of these biological environments, its plants and animals, and encourages their
                      preservation.</h6>
                    <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                      data-delay="0.75s" href="#">View Our Solution<i class="fas fa-arrow-right ps-3 w-30px"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide banner-3 align-items-center d-flex responsive-overlap-md bg-overlay-black-30">
              <div class="swipeinner container ">
                <div class="row ">
                  <div class="col-lg-9 col-md-11  position-relative">
                    <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Strengthen the Enterprise
                    </h1>
                    <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">We want to foster a culture
                      that values knowledge of these biological environments, its plants and animals, and encourages their
                      preservation.</h6>
                    <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                      data-delay="0.75s" href="#">View Our Solution<i class="fas fa-arrow-right ps-3 w-30px"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide banner-4 align-items-center d-flex responsive-overlap-md bg-overlay-black-30">
              <div class="swipeinner container ">
                <div class="row ">
                  <div class="col-lg-9 col-md-11  position-relative">
                    <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Most sophisticated
                      Storage & Transport </h1>
                    <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Quickly disintermediate collaborative web services via high standards in products.
                      Compellingly fabricate cutting-edge portals through alternative
                      opportunities. Objectively customize.</h6>
                    <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                      data-delay="0.75s" href="#">View Our Solution<i class="fas fa-arrow-right ps-3 w-30px"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide banner-5 align-items-center d-flex responsive-overlap-md bg-overlay-black-30">
              <div class="swipeinner container ">
                <div class="row ">
                  <div class="col-lg-9 col-md-11  position-relative">
                    <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Targeting high impact exploration

                    </h1>
                    <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Holisticly brand sustainable solutions rather than clicks-and-mortar applications.
                      Phosfluorescently whiteboard fully tested initiatives.</h6>
                    <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                      data-delay="0.75s" href="#">View Our Solution<i class="fas fa-arrow-right ps-3 w-30px"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"><i class="fas fa-arrow-left "></i></div>
          <div class="swiper-button-next"><i class="fas fa-arrow-right "></i></div>
        </div>
      </section>
      <!--=================================
        banner -->

      <!--=================================
         About Us Section Start -->
      <section class="about-us-section-home">
        <div class="main-about-section-b row pt-5 pb-5 m-0 ">
          <div class="col-md-6 col-12 a-u-s-right p-0">
            <div class="a-u-s-right-inner">
              <img class="img-responsive " src="{{asset('images/about/about-us-background.png')}}" alt="Image">
            </div>
          </div>
          <div class="col-md-6 col-12 a-u-s-left p-0 ">
            <div class="a-u-s-left-inner bg-blue">
              <div class="a-u-s-l-h">
                <h2 class="my-title text-white mb-0">About Us</h2>
                <img src="{{asset('images/about/img-i.png')}}">
              </div>
              <div class="space-pb1">
                <ul class="list list-unstyled">
                  <li class="d-flex font-xl space-pb-li">
                    <div class="icon-a-u">
                       <img src="{{asset('images/about/analytics.png')}}" alt="History Image">
                    </div>
                    <div class="content-a-u">
                      <p class="content-a-u-h mb-0 text-white">History</p>
                      <p class="content-a-u-p mb-0 text-white">Part of United oil and Gas which was established in 2004.</p>
                    </div>
                  </li>
                  <li class="d-flex font-xl space-pb-li">
                    <div class="icon-a-u">
                       <img src="{{asset('images/about/management.png')}}" alt="History Image">
                    </div>
                    <div class="content-a-u">
                      <p class="content-a-u-h mb-0 text-white">The Team </p>
                      <p class="content-a-u-p mb-0 text-white">We will work together across boundaries to meet the needs of customers and help our company grow to meet our vision.</p>
                    </div>
                  </li>
                  <li class="d-flex font-xl space-pb-li">
                    <div class="icon-a-u">
                       <img src="{{asset('images/about/modernization.png')}}" alt="History Image">
                    </div>
                    <div class="content-a-u">
                      <p class="content-a-u-h mb-0 text-white">Go Green Initiative</p>
                      <p class="content-a-u-p mb-0 text-white">The Go Green Initiative improves lifelong outcomes for children by
                        advancing environmental health, safety, and sustainability at school.</p>
                    </div>
                  </li>
                  <li class="d-flex font-xl space-pb-li">
                    <div class="icon-a-u">
                       <img src="{{asset('images/about/strategy.png')}}" alt="History Image">
                    </div>
                    <div class="content-a-u">
                      <p class="content-a-u-h mb-0 text-white">Buyer on Board </p>
                      <p class="content-a-u-p mb-0 text-white">Buyer’s Enquiry / Registration</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="">
                <a class=" btn btn1 text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                data-delay="0.75s" href="#">Know More<i class="fas fa-arrow-right ps-3 w-30px"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!--=================================
         About Us Section End  -->


          <!--=================================
          Projects Section Start -->
        <section class="pb-5 product-section">
          <div class="container">
            <div class="row d-lg-flex align-items-center justify-content-center pb-4 pb-md-4">
              <div class="col-12 text-center">
                <h2 class="mb-0 mb-lg-0">Projects</h2>
                <img src="{{asset('images/about/img-i-b.png')}}">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- owl carousel -->
                <div class="owl-carousel text-start" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1">
                  <!--Item  Start-->
                  <div class="items">
                    <div class="feature-info feature-info-style-077 text-center">
                      <div class="feature-info-img">
                        <img class="img-fluid" src="{{asset('images/project/place-1.png')}}" alt="">
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Mexico</h4>
                        <div class="feature-p-c">
                         <p class="mb-0">-500 million barrels Crude oil Tank Farms</p>
                         <p>-5 million barrels Petroleum products tank farms</p>
                       </div>
                        <a href="#" class="read-more-product">Read More <i class="fas fa-angle-double-right"></i></i></a>
                      </div>
                    </div>
                  </div>
                  <!--Item  Stop-->

                  <!--Item  Start-->
                  <div class="items">
                    <div class="feature-info feature-info-style-077 text-center">
                      <div class="feature-info-img">
                        <img class="img-fluid" src="{{asset('images/project/place-2.png')}}" alt="">
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">South Africa</h4>
                        <div class="feature-p-c">
                          <p>Crude Oil Tank Storage -21 million barrels facilities at Sulthana Bay, South Africa</p>
                        </div>
                        <a href="#" class="read-more-product">Read More <i class="fas fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!--Item  Stop-->

                  <!--Item  Start-->
                  <div class="items">
                    <div class="feature-info feature-info-style-077 text-center">
                      <div class="feature-info-img">
                        <img class="img-fluid" src="{{asset('images/project/floating-store.jpg')}}" alt="">
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Malaysia</h4>
                        <div class="feature-p-c">
                          <p>An Aframax vessel is an oil tanker with a deadweight between 80,000 and 120,000 metric tonnes.</p>
                        </div>
                        <a href="#" class="read-more-product">Read More <i class="fas fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!--Item  Stop-->

                  <!--Item  Start-->
                  <div class="items">
                    <div class="feature-info feature-info-style-077 text-center">
                      <div class="feature-info-img">
                        <img class="img-fluid" src="{{asset('images/project/place-1.png')}}" alt="">
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Mexico</h4>
                        <div class="feature-p-c">
                         <p class="mb-0">-500 million barrels Crude oil Tank Farms</p>
                         <p>-5 million barrels Petroleum products tank farms</p>
                       </div>
                        <a href="#" class="read-more-product">Read More <i class="fas fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!--Item  Stop-->

                  <!--Item  Start-->
                  <div class="items">
                    <div class="feature-info feature-info-style-077 text-center">
                      <div class="feature-info-img">
                        <img class="img-fluid" src="{{asset('images/project/place-2.png')}}" alt="">
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">South Africa</h4>
                        <div class="feature-p-c">
                          <p>Crude Oil Tank Storage -21 million barrels facilities at Sulthana Bay, South Africa</p>
                        </div>
                        <a href="#" class="read-more-product">Read More <i class="fas fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!--Item  Stop-->

                  <!--Item  Start-->
                  <div class="items">
                    <div class="feature-info feature-info-style-077 text-center">
                      <div class="feature-info-img">
                        <img class="img-fluid" src="{{asset('images/project/floating-store.jpg')}}" alt="">
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Malaysia</h4>
                        <div class="feature-p-c">
                          <p>An Aframax vessel is an oil tanker with a deadweight between 80,000 and 120,000 metric tonnes.</p>
                        </div>
                        <a href="#" class="read-more-product">Read More <i class="fas fa-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!--Item  Stop-->

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--=================================
         Projects Section End-->


         <!--=================================
          Product & Services Section Start -->
        <section class="product-and-services-section  pt-5 pb-5">
          <div class="container">
            <div class="row d-lg-flex align-items-center justify-content-center pb-4 pb-md-4">
              <div class="col-12 text-center">
                <h2 class="mb-0 mb-lg-0 text-white">Projects & Services</h2>
                <img src="{{asset('images/about/img-i.png')}}">
              </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="product-and-services-section-content bg-white">
                   <div class="p-s-content-inner">
                    <div class="d-flex font-xl space-pb-p-s">
                      <div class="p-s-img">
                         <img src="{{asset('images/service/research.png')}}" alt="History Image">
                      </div>
                      <div class="p-s-conent">
                        <p class="p-s-conent-h mb-0 text-blue">Trading</p>
                        <p class="p-s-conent-p mb-0 ">Part of United oil and Gas which was established in 2004.</p>
                      </div>
                    </div>
                    <div class="p-s-conent-read-more ">
                      <a href="#" class="">
                        <span>Read More</span>
                        <span><i class="fas fa-arrow-right ps-3 w-30px"></i></span>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="product-and-services-section-content bg-white">
                   <div class="p-s-content-inner">
                    <div class="d-flex font-xl space-pb-p-s">
                      <div class="p-s-img">
                         <img src="{{asset('images/service/oil-refinery.png')}}" alt="History Image">
                      </div>
                      <div class="p-s-conent">
                        <p class="p-s-conent-h mb-0 text-blue">Stroage Terminals</p>
                        <p class="p-s-conent-p mb-0 ">Part of United oil and Gas which was established in 2004.</p>
                      </div>
                    </div>
                    <div class="p-s-conent-read-more ">
                      <a href="#" class="">
                        <span>Read More</span>
                        <span><i class="fas fa-arrow-right ps-3 w-30px"></i></span>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="product-and-services-section-content bg-white">
                   <div class="p-s-content-inner">
                    <div class="d-flex font-xl space-pb-p-s">
                      <div class="p-s-img">
                         <img src="{{asset('images/service/ship.png')}}" alt="History Image">
                      </div>
                      <div class="p-s-conent">
                        <p class="p-s-conent-h mb-0 text-blue">Shipping</p>
                        <p class="p-s-conent-p mb-0 ">Part of United oil and Gas which was established in 2004.</p>
                      </div>
                    </div>
                    <div class="p-s-conent-read-more ">
                      <a href="#" class="">
                        <span>Read More</span>
                        <span><i class="fas fa-arrow-right ps-3 w-30px"></i></span>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="product-and-services-section-content bg-white">
                   <div class="p-s-content-inner">
                    <div class="d-flex font-xl space-pb-p-s">
                      <div class="p-s-img">
                         <img src="{{asset('images/service/oil-industry.png')}}" alt="History Image">
                      </div>
                      <div class="p-s-conent">
                        <p class="p-s-conent-h mb-0 text-blue">Contract Refinery</p>
                        <p class="p-s-conent-p mb-0 ">Part of United oil and Gas which was established in 2004.</p>
                      </div>
                    </div>
                    <div class="p-s-conent-read-more ">
                      <a href="#" class="">
                        <span>Read More</span>
                        <span><i class="fas fa-arrow-right ps-3 w-30px"></i></span>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="product-and-services-section-content bg-white">
                   <div class="p-s-content-inner">
                    <div class="d-flex font-xl space-pb-p-s">
                      <div class="p-s-img">
                         <img src="{{asset('images/service/investment.png')}}" alt="History Image">
                      </div>
                      <div class="p-s-conent">
                        <p class="p-s-conent-h mb-0 text-blue">Investments</p>
                        <p class="p-s-conent-p mb-0 ">Part of United oil and Gas which was established in 2004.</p>
                      </div>
                    </div>
                    <div class="p-s-conent-read-more ">
                      <a href="#" class="">
                        <span>Read More</span>
                        <span><i class="fas fa-arrow-right ps-3 w-30px"></i></span>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <!--=================================
         Product & Services Section End-->

         <!--=================================
          Consistent Delivery Section Start -->
          <section class="consistent-delivery-section pt-5 pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class=" text-center">
                    <h2>Consistent Delivery</h2>
                    <p class=" consistent-delivery-p">Through our subsidiaries, the group provides market-leading solutions within various industry sectors. Our experienced teams consistently
                      deliver innovative projects that enable our clients worldwide to realise their ambitions.</p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <!--Count item start-->
                <div class="col-md-3 col-sm-6 col-6">
                  <div class="counter br-c justify-content-center text-center pt-0 pb-4 pb-md-0">
                    <div class="counter-content">
                      <div class="counter-content-img ">
                        <img class="bg-blue" src="{{asset('images/icons/experience.png')}}" alt="image">
                      </div>
                      <div class="counter-content-number mt-3 mb-2">
                        <span class="timer text-dark" data-to="18" data-speed="1000">18</span><span class="timer1 text-dark">+</span>
                      </div>
                      <div class="counter-content-p">
                        <p>Years of Experience</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Count item End-->

                <!--Count item start-->
                <div class="col-md-3 col-sm-6 col-6">
                  <div class="counter br-c justify-content-center text-center pt-0 pb-4 pb-md-0">
                    <div class="counter-content">
                      <div class="counter-content-img ">
                        <img class="bg-blue" src="{{asset('images/icons/petroleum.png')}}" alt="image">
                      </div>
                      <div class="counter-content-number mt-3 mb-2">
                        <span class="timer text-dark" data-to="59" data-speed="1000">59</span><span class="timer1 text-dark">+</span>
                      </div>
                      <div class="counter-content-p">
                        <p>Projects</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Count item End-->

                <!--Count item start-->
                <div class="col-md-3 col-sm-6 col-6">
                  <div class="counter br-c justify-content-center text-center pt-0 pb-4 pb-md-0">
                    <div class="counter-content">
                      <div class="counter-content-img ">
                        <img class="bg-blue" src="{{asset('images/icons/group.png')}}" alt="image">
                      </div>
                      <div class="counter-content-number mt-3 mb-2">
                        <span class="timer text-dark" data-to="106" data-speed="1000">106</span><span class="timer1 text-dark">+</span>
                      </div>
                      <div class="counter-content-p">
                        <p>Global Clients</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Count item End-->

                <!--Count item start-->
                <div class="col-md-3 col-sm-6 col-6">
                  <div class="counter justify-content-center text-center pt-0 pb-4 pb-md-0">
                    <div class="counter-content">
                      <div class="counter-content-img ">
                        <img class="bg-blue" src="{{asset('images/icons/coronavirus.png')}}" alt="image">
                      </div>
                      <div class="counter-content-number mt-3 mb-2">
                        <span class="timer text-dark" data-to="16" data-speed="1000">16</span><span class="timer1 text-dark">+</span>
                      </div>
                      <div class="counter-content-p">
                        <p>Serving Countries</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Count item End-->
              </div>
            </div>
          </section>
          <!--=================================
          Consistent Delivery Section End -->

           <!--=================================
          Our Major Sectors Start -->
          <section class="our-major-sectors pt-5 pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class=" text-center mb-5">
                    <h2>Our Major Sectors</h2>
                  </div>
                </div>
              </div>
              <div class="sectors-row ">
                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-1-img img-cover-s" >
                    <button class="">Crude & Petroleum Products Trading</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Crude & Petroleum Products Trading</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-2-img img-cover-s" >
                    <button class="">Offshore Supply Base</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Offshore Supply Base</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-3-img img-cover-s" >
                    <button class="">Crude Oil Tank Farms Storage</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Crude Oil Tank Farms Storage</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-4-img img-cover-s" >
                    <button class="">Oil Rigs Repairs & Maintenance</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Oil Rigs Repairs & Maintenance</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-5-img img-cover-s" >
                    <button class="">Refinery</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Refinery</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-6-img img-cover-s" >
                    <button class="">Shipping & Logistics</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Shipping & Logistics</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-7-img img-cover-s" >
                    <button class="">Oil & Gas Projects</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Oil & Gas Projects</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-8-img img-cover-s" >
                    <button class="">Investments</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Investments</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-9-img img-cover-s" >
                    <button class="">Oil Port</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Oil Port</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-10-img img-cover-s" >
                    <button class="">Petrochemicals</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Petrochemicals</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-11-img img-cover-s" >
                    <button class="">Tanker Supply</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Tanker Supply</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->

                <!-- Sector Start-->
                <div class="sectors">
                  <div class="sectors-inner sectors-inner-item">
                    <div class="sectors-inner-img case-study-lg sector-12-img img-cover-s" >
                    <button class="">Petroleum Products Tank Farms</button>
                    </div>
                    <div class="sectors-inner-info">
                      <a class="sectors-inner-title fw-bold text-white" href="#">Petroleum Products Tank Farms</a>
                      <p class="mt-2 text-white">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print …</p>
                      <a href="#" class="icon-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Sector End-->


              </div>
            </div>
          </section>

        <!--================================= Our Major Sectors Section End -->

@endsection
