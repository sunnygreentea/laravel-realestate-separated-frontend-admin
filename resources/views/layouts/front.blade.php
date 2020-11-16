<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Laravel Real Estate</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>

    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>

        <div class="box-collapse-wrap form">
            <form class="form-a"  action="{{ route('front.listings.search') }}" method="GET">
                
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Type</label>
                            <select class="form-control form-control-lg form-control-a"  name="ptype">
                                <option value=0>All Types</option>
                                @foreach ($globalPtypes as $ptype)
                                <option value={{$ptype->id}}>{{$ptype->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control form-control-lg form-control-a" name="city">
                                <option value=0>All Cities</option>
                                @foreach ($globalCities as $city)
                                <option value={{$city->id}}>{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bedrooms">Bedrooms</label>
                            <select class="form-control form-control-lg form-control-a" name="beds">
                                <option value=0>Any</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bathrooms">Bathrooms</label>
                            <select class="form-control form-control-lg form-control-a" name="baths">
                                <option value=0>Any</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="garages">Garages</label>
                            <select class="form-control form-control-lg form-control-a" name="garage">
                                <option value=0>Any</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="price">Min Price</label>
                            <select class="form-control form-control-lg form-control-a" name="price">
                                <option value=0>Unlimite</option>
                                <option value=500000>$500,000</option>
                                <option value=600000>$600,000</option>
                                <option value=700000>$700,000</option>
                                <option value=800000>$800,000</option>
                                <option value=900000>$900,000</option>
                                <option value=1000000>$1,000,000</option>
                                
                        </select>
                        </div>
                    </div>
                    @csrf
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                    </div>
                </form>
            </div>
    </div>
    <!-- End Property Search Section -->>

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{route('front.home')}}">Laravel<span class="color-b"> Real Estate</span></a>
          <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('front.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('front.listings.index')}}">Properties</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('front.agents.index')}}">Agents</a>
                    </li>
                    <li class="nav-item">
                    @if (Route::has('login'))
                     @auth
                    <a class="nav-link" href="{{route('admin.home')}}">My admin</a>
                    @else
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                    @endauth
                    </li>
                    @endif

                </ul>
                
            </div>
          <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
              <span class="fa fa-search" aria-hidden="true"></span>
          </button>
        </div>
    </nav>
    <!-- End Header/Navbar -->

    @yield("content")



    <!-- ======= Footer ======= -->
    <section class="section-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="widget-a">
                <div class="w-header-a">
                  <h3 class="w-title-a text-brand">EstateAgency</h3>
                </div>
                <div class="w-body-a">
                  <p class="w-text-a color-text-a">
                    Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                    sed aute irure.
                  </p>
                </div>
                <div class="w-footer-a">
                  <ul class="list-unstyled">
                    <li class="color-a">
                      <span class="color-text-a">Phone .</span> contact@example.com</li>
                    <li class="color-a">
                      <span class="color-text-a">Email .</span> +54 356 945234</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
              <div class="widget-a">
                <div class="w-header-a">
                  <h3 class="w-title-a text-brand">The Company</h3>
                </div>
                <div class="w-body-a">
                  <div class="w-body-a">
                    <ul class="list-unstyled">
                      <li class="item-list-a">
                        <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                      </li>
                      <li class="item-list-a">
                        <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                      </li>
                      <li class="item-list-a">
                        <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                      </li>
                      <li class="item-list-a">
                        <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                      </li>
                      <li class="item-list-a">
                        <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                      </li>
                      <li class="item-list-a">
                        <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
              <div class="widget-a">
                <div class="w-header-a">
                  <h3 class="w-title-a text-brand">International sites</h3>
                </div>
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">China</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav class="nav-footer">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">About</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">Property</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">Blog</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </nav>
              <div class="socials-a">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset( 'vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset( 'vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset( 'vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset( 'vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset( 'vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset( 'vendor/scrollreveal/scrollreveal.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset( 'js/main.js') }}"></script>
</body>


</html>