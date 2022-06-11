@extends('layouts.app')

@section('title')
<title> Contact Us </title>
@endsection

@section('content')

    <!--=================================
    bradcum-header start -->
    <section class="bradcum-header contact-us-bradcum pt-200 pb-80">
      <div class="pl-50 pr-50 ">
          <div class="breadcum-main">
              <div class="breadcum-content">
                  <div class="braedcum-page-heading">
                      <h1>Contact Us</h1>
                  </div>
                  <div class="breadcum-path">
                      <p class="b-p-para text-white">
                          <span>Home</span>
                          <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                          <span>Contact Us</span>
                      </p>
                  </div>

              </div>
          </div>
      </div>
  </section>
  <!--=================================
  banner Stop-->

  <!--=================================
  Our Address start -->
  <section class="c-u-our-address pt-5 pb-5">
      <div class="pl-40 pr-40">
          <div class="row m-0 d-lg-flex align-items-center justify-content-center pb-4 pb-md-4">
              <div class="col-12 text-center border-b-22 pb-4">
                  <h2 class="mb-0 mb-lg-0 text-blue border-b-1">Our Address</h2>
              </div>
          </div>
          <div class="row m-0 d-lg-flex align-items-center justify-content-center ">

            @foreach ($pageData->content as $key=>$item)
            <div class="col-md-3 col-12  c-u-our-address-inner-d w3-animate-zoom">
              <div class="c-u-address-body  {{ ($key%2==0)?'c-u-bg-blue':'c-u-bg-white' }}  radial-gradient">
                  <div class="c-u-address-flag">
                      <img src="{{asset(''.$item->file)}}" alt="">
                  </div>
                  <div class="c-u-address-h">
                      <p>{{$item->title}}</p>
                  </div>
                  <div class="c-u-address-detail">
                      <ul class="list-unstyled">
                          <li>
                              {{-- <span class="c-u-a-d-icon">
                                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                              </span>
                              <span class="c-u-a-d-p">
                                  A 27, Phase 2, Fujairah Free Zone P.O.Box: 50659, Fujairah, U.A.E.
                              </span> --}}
                             
                              {!!  str_replace( array('<font color="#000000">','</font>'),'',$item->body) !!}
                          </li>


                          {{-- <li>
                              <a href="mailto:info@unitedpetrogroup.com">
                                  <span class="c-u-a-d-icon">
                                      <i class="fas fa-envelope me-2 fa-flip-horizontal text-white"></i>
                                  </span>
                                  <span class="c-u-a-d-p">
                                      info@unitedpetrogroup.com
                                  </span>
                              </a>
                          </li>--}}
                      
                      </ul>
                  </div>
              </div>
          </div>
            @endforeach
              
             

          </div>
      </div>
  </section>
  <!--=================================
  Our Address stop -->

  <!--=================================
  contact us form start -->
  <section class="contact-us-form  ">
      <div class="pl-40 pr-40">
          <div class="row m-0 d-lg-flex align-items-center justify-content-center ">
              <div class="col-md-6 col-12 contact-us-left-s">
              <div class="story-inner-right-content">
          <p class="sub-heading-r1">Get in touch <span><img src="{{asset('images/buyer-on-board/blue-ic.png')}}"></span></p>
          <p class="main-heading-r2"> Don't hesitate to contact with us for inquiries!</p>
        </div>
                  <form class="needs-validation" novalidate>
                      <div class="form-row row m-0">
                          <div class="col-md-6 mb-3">
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="text" class="form-control form-control1" id="validationCustomUsername"
                                      placeholder="Your Name" aria-describedby="inputGroupPrepend" required>
                                  <div class="invalid-feedback">
                                      Please Enter Your Name.
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <input type="tel" class="form-control form-control1" id="validationCustom03"
                                  placeholder="Phone Number" required>
                              <div class="invalid-feedback">
                                  Please provide you phone number.
                              </div>
                          </div>
                          <div class="col-12 mb-3">
                              <select class="my-select form-control1" name="subject" id="subject">
                                  <option value="select-year">Subject..</option>
                                  <option value="Subject 01">Subject 01</option>
                                  <option value="Subject 02">Subject 02</option>
                              </select>
                          </div>
                          <div class="col-12 mb-3">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                                  placeholder="Message..."></textarea>
                          </div>
                          <div class="col-12">
                              <button class="btn btn-primary" type="submit">
                                  <span>
                                      <i class="fa fa-paper-plane " aria-hidden="true"></i>
                                  </span>
                                  <span>Submit form</span>
                              </button>
                          </div>
                      </div>

                  </form>

                  <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function() {
                      'use strict';
                      window.addEventListener('load', function() {
                          // Fetch all the forms we want to apply custom Bootstrap validation styles to
                          var forms = document.getElementsByClassName('needs-validation');
                          // Loop over them and prevent submission
                          var validation = Array.prototype.filter.call(forms, function(form) {
                              form.addEventListener('submit', function(event) {
                                  if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                  }
                                  form.classList.add('was-validated');
                              }, false);
                          });
                      }, false);
                  })();
                  </script>
              </div>
              <div class="col-md-6 col-12 contact-us-left-r">
                  <div class="right-c-girl">
                  <img src="{{asset('images/contact-us/girl.png')}}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--=================================
  contact us form stop -->
@endsection
