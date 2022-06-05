<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png')}}" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/{{asset('js/all.js')}}"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
   <!-- <script src="https://translate.google.com/translate_a/element.js')}}?cb=googleTranslateElementInit" type="text/javascript"></script> -->
  <!-- CSS Global Compulsory (Do not remove)-->


  <link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/flaticon/flaticon.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" />

  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
  <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" />

  <!-- Template Style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>

    <!--================================= header -->
    <header class="header header-transparent">
        <!--=================================
             Top Bar Start-->
        <div class="topbar">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-12">
                <div class="d-block d-md-flex align-items-center text-center justify-content-end">
                  <!-- <div class="me-3 d-inline-block py-1 top-1">
                      <a href="tel:+97192243757">+971 9 224 3757</a>
                    </div> -->
                  <div class="me-3 d-inline-block py-1 top-2">
                    <a href="mailto:info@unitedpetrogroup.com"><i
                        class="fas fa-envelope me-2 fa-flip-horizontal text-white"></i>info@unitedpetrogroup.com</a>
                  </div>
                  <div class="me-3 d-inline-block py-1 top-5">
                    <button class="enquire-b-t">
                      <span class="enquire-b-t-i">
                        <i class="fas fa-phone-alt"></i>
                      </span>
                      <span class="enquire-b-t-t">
                        Enquire NOW
                      </span>
                    </button>
                  </div>
                  <div class="me-1 d-inline-block py-1 top-3">
                    <!-- <div id="google_translate_element"></div> -->
                    <button class="enquire-b-t">
                      <span class="enquire-b-t-i">
                        <img src="{{asset('images/svg/united-kingdom.png')}}" alert="Flag">
                      </span>
                      <span class="enquire-b-t-t">
                        ENGLISH
                      </span>

                    </button>
                  </div>
                  <!-- <div class="me-3 d-inline-block py-1 top-4">
                      <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div> -->

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=================================
             Top Bar End-->

        <!--=================================
             Nav Bar Start-->
        <nav class="navbar  navbar-static-top navbar-expand-lg border-top-white border-bottom-white">
          <div class="container-fluid pd-0">
            <button type="button" class="navbar-toggler nav-link1" data-bs-toggle="collapse"
              data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
            <a class="navbar-brand p-0" href="index.html">
              <img class="img-fluid" src="{{asset('images/logo-united.png')}}" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-end pr-60">
              <!-- <a href="javascript:void(0)" class="closebtn nav-link1" ><i class="fas fa-arrow-left text-danger"></i> <span>Back</span></a> -->
              <ul class="nav navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Home</a>

                </li>
                <li class="dropdown nav-item mega-menu">
                  <a href="./about-us.php" class="nav-link" data-bs-toggle="dropdown">About Us </a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row m-0">
                        <div class="col-md-5  col-12 bg-blue-patern pr-80 pl-80 mega-left">
                          <div class="py-5 my-2">
                            <div class="simple-mega-menu mega-menu-item ">
                              <div class="clearfix ">
                                <p>The United Petro Group is a global energy trading company. UPG was founded by Dr. Ganapathi Dhiwaghar. United Petro has its
                                  presence globally at Singapore, United Arab Emirates, China, Netherlands and in Ireland.
                                </p>
                              </div>
                              <div class="cta text-white">
                                <a href="./about-us.php" class="text-white"><span class="mega-learn-a">Learn More</span> <span
                                    class="mega-i-a"><i class="fas fa-arrow-right ps-3 w-30px"></i></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-12 pr-80 pl-80 mega-right">
                          <div class="row m-0 py-5 my-2">
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">About Us</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <!-- <li><a href="#" class="fw-600  f-18">Over View </a></li> -->
                                <li><a href="./about-us.php#united-petro-group-story" class="fw-600">Our Story </a></li>
                                <li><a href="./about-us.php#united-petro-group-history" class="fw-600">Our History </a></li>
                                <li><a href="./about-us.php#united-petro-group-statements" class="fw-600">Our Statements </a></li>
                                <li><a href="./about-us.php#united-petro-group-values" class="fw-600">Our Values </a></li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Group Charman's
                                  Message</a></h6>
                            </div>
                          </div>

                        </div>

                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown nav-item mega-menu">
                  <a href="#" class="nav-link" data-bs-toggle="dropdown">Our Businesses </a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row m-0">
                        <div class="col-md-5  col-12 bg-blue-patern pr-80 pl-80 mega-left">
                          <div class="py-5 my-2">
                            <div class="simple-mega-menu mega-menu-item ">
                              <div class="clearfix ">
                                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.
                                  Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo</p>
                              </div>
                              <div class="cta text-white">
                                <a href="/about-us" class="text-white"><span class="mega-learn-a">Learn More</span> <span
                                    class="mega-i-a"><i class="fas fa-arrow-right ps-3 w-30px"></i></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-12  pl-80 mega-right">
                          <div class="row m-0 py-5 my-2">
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Heading 1</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Sub Menu 01 </a></li>
                                <li><a href="#" class="fw-600">Sub Menu 02 </a></li>
                                <li><a href="#" class="fw-600">Sub Menu 03 </a></li>
                              </ul>
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Heading 02</a></h6>
                              <ul class="list-unstyled">
                                <li><a href="#" class="fw-600">Sub Menu 04 </a></li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Heading 03</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Sub Menu 05 </a></li>
                                <li><a href="#" class="fw-600">Sub Menu 06 </a></li>
                                <li><a href="#" class="fw-600">Sub Menu 07 </a></li>
                                <li><a href="#" class="fw-600">Sub Menu 08 </a></li>
                              </ul>
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Heading 04</a></h6>
                              <ul class="list-unstyled">
                                <li><a href="#" class="fw-600">Sub Menu 09</a></li>
                              </ul>
                            </div>
                          </div>

                        </div>

                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown nav-item mega-menu">
                  <a href="#" class="nav-link" data-bs-toggle="dropdown">Products</a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row m-0">
                        <div class="col-md-5  col-12 bg-blue-patern pr-80 pl-80 mega-left">
                          <div class="py-5 my-2">
                            <div class="simple-mega-menu mega-menu-item ">
                              <div class="clearfix ">
                                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                                  and publishing industries for previewing layouts and visual mockups.</p>
                              </div>
                              <div class="cta text-white">
                                <a href="/about-us" class="text-white">
                                  <span class="mega-learn-a">Learn More</span>
                                  <span class="mega-i-a">
                                    <i class="fas fa-arrow-right ps-3 w-30px"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-12 pr-80 pl-80 mega-right">
                          <div class="row m-0 py-5 my-2">
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Products</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Products 01 </a></li>
                                <li><a href="#" class="fw-600">Products 02 </a></li>
                                <li><a href="#" class="fw-600">Products 03 </a></li>
                                <li><a href="#" class="fw-600">Products 04 </a></li>
                                <li><a href="#" class="fw-600">Products 05 </a></li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Products</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Products 01 </a></li>
                                <li><a href="#" class="fw-600">Products 02 </a></li>
                                <li><a href="#" class="fw-600">Products 03 </a></li>
                                <li><a href="#" class="fw-600">Products 04 </a></li>
                                <li><a href="#" class="fw-600">Products 05 </a></li>
                              </ul>
                            </div>
                          </div>

                        </div>

                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown nav-item mega-menu">
                  <a href="#" class="nav-link" data-bs-toggle="dropdown">Investors</a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row m-0">
                        <div class="col-md-5  col-12 bg-blue-patern pr-80 pl-80 mega-left">
                          <div class="py-5 my-2">
                            <div class="simple-mega-menu mega-menu-item ">
                              <div class="clearfix ">
                                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                                  and publishing industries for previewing layouts and visual mockups.</p>
                              </div>
                              <div class="cta text-white">
                                <a href="/about-us" class="text-white">
                                  <span class="mega-learn-a">Learn More</span>
                                  <span class="mega-i-a">
                                    <i class="fas fa-arrow-right ps-3 w-30px"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-12 pr-80 pl-80 mega-right">
                          <div class="row m-0 py-5 my-2">
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Investors</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Investors 01 </a></li>
                                <li><a href="#" class="fw-600">Investors 02 </a></li>
                                <li><a href="#" class="fw-600">Investors 03 </a></li>
                                <li><a href="#" class="fw-600">Investors 04 </a></li>
                                <li><a href="#" class="fw-600">Investors 05 </a></li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Investors</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Investors 01 </a></li>
                                <li><a href="#" class="fw-600">Investors 02 </a></li>
                                <li><a href="#" class="fw-600">Investors 03 </a></li>
                                <li><a href="#" class="fw-600">Investors 04 </a></li>
                                <li><a href="#" class="fw-600">Investors 05 </a></li>
                              </ul>
                            </div>
                          </div>

                        </div>

                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown nav-item mega-menu">
                  <a href="#" class="nav-link" data-bs-toggle="dropdown">Projects</a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row m-0">
                        <div class="col-md-5  col-12 bg-blue-patern pr-80 pl-80 mega-left">
                          <div class="py-5 my-2">
                            <div class="simple-mega-menu mega-menu-item ">
                              <div class="clearfix ">
                                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                                  and publishing industries for previewing layouts and visual mockups.</p>
                              </div>
                              <div class="cta text-white">
                                <a href="/about-us" class="text-white">
                                  <span class="mega-learn-a">Learn More</span>
                                  <span class="mega-i-a">
                                    <i class="fas fa-arrow-right ps-3 w-30px"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-12 pr-80 pl-80 mega-right">
                          <div class="row m-0 py-5 my-2">
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Project</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Malaysia </a></li>
                                <li><a href="#" class="fw-600">South Africa </a></li>
                                <li><a href="#" class="fw-600">Mexico </a></li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-12">
                              <h6 class="mb-1 nav-title fw-600 f-18"><a class="text-black" href="#">Project</a></h6>
                              <ul class="list-unstyled mt-lg-3">
                                <li><a href="#" class="fw-600">Project 01 </a></li>
                                <li><a href="#" class="fw-600">Project 02 </a></li>
                                <li><a href="#" class="fw-600">Project 03 </a></li>
                                <li><a href="#" class="fw-600">Project 04 </a></li>
                                <li><a href="#" class="fw-600">Project 05 </a></li>
                              </ul>
                            </div>
                          </div>

                        </div>

                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Contact</a>
                </li>

                <li class="nav-item">
                  <div class="search nav-link">
                    <a class="search-btn not_click" href="javascript:void(0);"></a>
                    <div class="search-box not-click">
                      <form action="https://themes.potenzaglobalsolutions.com/html/United Petrol/search.html" method="get">
                        <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                        <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </nav>
        <!--=================================
             Nav Bar End-->
    </header>
<!--================================= header -->


    @yield('content')

<!--================================= Top Footer Sectors Start -->
  <section class="top-footer-section pt-4 pb-4 ">
    <div class="container">
      <div class="row t-f-s-me">
        <div class="col-md-6 col-12 justify-content-center ">
          <div class="top-footer-left-inner">
            <div class="t-f-inner-img">
              <img src="{{asset('images/icons/placeholder.png')}}" alt="image">
            </div>
            <div class="t-f-inner-content">
              <p class="text-white"> A 27, Phase 2, Fujairah Free Zone P.O.Box: 50659, Fujairah, U.A.E. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 justify-content-center text-end">
          <div class="top-footer-right-inner">
            <div class="me-3 d-inline-block btg">
              <a class="text-white" href="tel:+97192243757"> <i class="fas fa-phone-alt"></i> +971 9 224 3757</a>
            </div>
            <div class="me-3 d-inline-block btg">
              <a class="text-white" href="mailto:info@unitedpetrogroup.com"><i
                  class="fas fa-envelope me-2 fa-flip-horizontal "></i>info@unitedpetrogroup.com</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!--=================================
      Top Footer Sectors End -->
  <!--=================================
    footer section start-->
  <footer class="footer pb-5 pt-5 bg-blue">
    <div class="">
      <div class="row m-0">
        <div class="footer-col1 col-sm-6 col-lg-3 mb-4 mb-lg-0">
          <div class="footer-log-img">
            <img src="{{asset('images/united-petro-group-log.png')}}" alt="footer logo">
          </div>
          <div class="footer-conetnt">
            <p>
              The United Petro Group (UPG) is an Oil & Gas Corporation, having offices in Singapore,
               South Africa, Malaysia, USA, China, Hong Kong, Mexico, Nederland, Al Fujairah and other
               few more countries. UPG is developing the largest Petroleum & Petrochemical Complex in
               Gulf of Mexico, Mexico with the investment of US$ 47 Billion as the North America Largest
               O&G Project.
            </p>
          </div>
        </div>
        <div class="footer-col2 col-sm-6 col-lg-3 mb-4 mb-lg-0">
          <h5 class="text-white mb-2 mb-sm-4">Quick Links</h5>
          <div class="footer-link">
            <ul class="list-unstyled mb-0">
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> GD Foundation</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Go Green Initiative</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Media Center</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Shipping & Logistics</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Vendor Registration</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Vendor Announcements</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Group of Companies</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Downloads</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Corporate Social Responsibility</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Sponsorship</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Energy World</a></li>
              <li><a href="#"> <i class="fas fa-angle-double-right"></i> Office Directory</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-col3 col-sm-6 col-lg-3 mb-4 mb-sm-0">
          <h5 class="text-white mb-2 mb-sm-4 ">Announcement</h5>
          <div class="space-pb1">
            <ul class="list list-unstyled">
              <li class="d-flex font-xl space-pb-li">
                <div class="icon-a-u">
                  <img src="{{asset('images/blog/01.jpg')}}" alt="History Image">
                </div>
                <div class="content-a-u">
                  <p class="content-a-u-h text-white">
                  UnitedPetro is finalizing oil exploration contract with a Texas based company.
                  UPG will be investing on 10 land rigs at the initial stages.
                  </p>
                  <p class="content-a-u-p mb-0 ">
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    <span>
                    October 15,2021
                    </span>
                  </p>
                </div>
              </li>
              <li class="d-flex font-xl space-pb-li">
                <div class="icon-a-u">
                  <img src="{{asset('images/blog/02.jpg')}}" alt="History Image">
                </div>
                <div class="content-a-u">
                  <p class="content-a-u-h text-white">
                  UnitedPetro Group starts its crude oil tank operations at Port of Saldanha Bay, South Africa
                  With a long-term lease arrangement. Tank # 4 in operations from April 1,2022 onwards and Tanks
                   # 3 & 4 will commence operations from June 2022 under United Petro SA
                  </p>
                  <p class="content-a-u-p mb-0 ">
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    <span>
                    March 1, 2022
                    </span>
                  </p>
                </div>
              </li>
              <li class="d-flex font-xl space-pb-li">
                <div class="icon-a-u">
                  <img src="{{asset('images/blog/03.jpg')}}" alt="History Image">
                </div>
                <div class="content-a-u">
                  <p class="content-a-u-h text-white">
                  UnitedPetro Shipping, Singapore has started its Bonny Oil Crude sales as FOB delivery at
                  SBTF -Tank farms to a European Buyer. Confirmed orders on hand for CIF as well as FOB
                  deliveries.
                  </p>
                  <p class="content-a-u-p mb-0 ">
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    <span>
                    April 10,2022
                    </span>
                  </p>
                </div>
              </li>
              <li class="d-flex font-xl space-pb-li">
                <div class="icon-a-u">
                  <img src="{{asset('images/blog/01.jpg')}}" alt="History Image">
                </div>
                <div class="content-a-u">
                  <p class="content-a-u-h text-white">
                  UPG Shipping is setting up a Aframax class floating storage vessel at Tanjong Pelepas,
                  Malaysia & also a MR class vessel at Port Elizabeth, South Africa. These new storage
                  facilities will serve UPG gasoil business in that regions.
                  </p>
                  <p class="content-a-u-p mb-0 ">
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    <span>
                    May 15,2022
                    </span>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-col4 col-sm-6 col-lg-3">
          <div class="footer-contact-info">
            <h5 class="text-white mb-2 mb-sm-4 ">News letter</h5>
            <div class="contact-address">
              <div class="news-sign">
                <p>Sign up today for hints, tips and the latest product news</p>
              </div>
              <div class="contact-item">

                <div class="input-group d-flex align-content-center align-items-center newsletter1">
                  <i class="fas fa-envelope me-2 fa-flip-horizontal text-white "></i>
                  <input type="email" class="form-control" placeholder="Enter your email">
                  <span class="input-group-btn">
                    <button class="btn btn-theme" type="submit"> <i class="fa fa-paper-plane text-white "
                        aria-hidden="true"></i></button>
                  </span>
                </div>
              </div>
              <h5 class="text-white mb-2 mb-sm-3 ">Follow Us On</h5>
              <ul class="list-unstyled mb-0 d-flex social-icon">
                <li class="text-white"><a href="#"><i class="fab fa-facebook-f text-white"></i></a></li>
                <li class="text-white"><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
                <li class="text-white"><a href="#"><i class="fab fa-linkedin-in text-white"></i></a></li>
                <li class="text-white"><a href="#"><i class="fab fa-github text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=================================
    footer section end-->

  <!--=================================
    Copyright section start-->
  <section class="copyright-section pt-2 pb-2">
    <div class="container">
      <div class=" row d-flex justify-content-between align-content-center align-items-center ">
        <div class="col-md-6 col-lg-6 col-12 copy-left">
          <p class="mb-0"><span class="text-white">Copyright © 2022</span><span class="text-white"> United Petro
              Group</span></p>
        </div>
        <div class="col-md-6 col-lg-6 col-12 copy-right text-end">
          <ul class="list-inline mb-0">
            <li class="brr"><a href="#" class="text-white ">Privacy Statement</a></li>
            <li class="brr"><a href="#" class="text-white ">Terms of Use</a></li>
            <li class="brr"><a href="#" class="text-white ">Disclaimer</a></li>
            <li class="brr"><a href="#" class="text-white ">Legal</a></li>
            <li><a href="#" class="text-white ">Scam Notice</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
    Copyright section end-->






    <!-- === START ====== -->
    <div class="cookie">
        <p class="cookie__message">This website uses cookies to provide you with a great user experience.
          By using it, you accept our <a href="#">use of cookies</a></p>
        <button class="cookie__accept">Accept cookies</button>
      </div>
    <!-- === END ====== -->


  <!--=================================
    Back To Top-->
  <div id="back-to-top" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
  <!--=================================
    Back To Top-->

</body>

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('js/popper/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="{{asset('js/jquery.appear.js')}}"></script>
  <script src="{{asset('js/swiper/swiper.min.js')}}"></script>
  <script src="{{asset('js/swiperanimation/SwiperAnimation.min.js')}}"></script>
  <script src="{{asset('js/counter/jquery.countTo.js')}}"></script>
  <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
function cookie() {

var cookieAcceptButton = $('.cookie__accept'),
    cookieDeclineButton = $('.cookie__decline'),
    cookieAlert = $('.cookie');

cookieAcceptButton.on('click', function() {
  cookieAlert.fadeOut('slow');
});

cookieDeclineButton.on('click', function() {
  cookieAlert.fadeOut('slow');
});

}

$(function() {
cookie();
});
  </script>

  <script>
    $(".nav-link1").click(function () {
      if ($(this).hasClass("active")) {
        $(".nav-link1").removeClass("show");
      }
      else {
        $(".pr-60.collapse").removeClass("show");
        $(this).addClass("show");
      }
    });
  </script>
  <script>
    $('.file-upload').file_upload();
  </script>
  <script>
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
  </script>
</html>
