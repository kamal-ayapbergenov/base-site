<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="@yield('description')" name="description">
  <meta content="@yield('keywords')" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('nova/assets/img/favicon.ico')}}" rel="icon">
  <link href="{{URL::asset('nova/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('nova/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('nova/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('nova/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{URL::asset('nova/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('nova/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('nova/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <style>
    .navbar .dropdown ul a {
    	padding: 9px 20px;
    	font-size: 10px;
    }
  </style>
  <!-- Template Main CSS File -->
  <link href="{{URL::asset('nova/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{Voyager::image('/')}}{{setting('site.logo')}}" alt="">
        <h1 class="d-flex align-items-center">Dr.Yakubov</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
          {!! menu('Menu', 'bootstrap') !!}
      </nav>



      

    </div>
  </header><!-- End Header -->



  @yield('content')
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="{{Voyager::image('/')}}{{setting('site.logo')}}" alt=""><span>Dr.Yakubov</span>
            </a>
            <p>Клиника NANO Medical Clinic.
              Ташкент, ул Чимбай 2А
              <br>
              <br>
              <strong>Tel:</strong><a href="tel:+998 90 900 04 08"> +998 90 900 04 08<br></a>
              <strong>Tel:</strong><a href="tel:+998 94 620 67 67"> +998 94 620 67 67<br></a>
              <strong>Telegram:<a href="https://@DrYakubovPlastic.t.me/"></strong> Dr.Yakubov<br></a>
            </p>

              <div class="social-links d-flex  mt-3">
                <a target="blank" href="https://@DrYakubovPlastic.t.me/" class="twitter"><i class="bi bi-telegram"></i></a>
                <a target="blank" href="https://www.facebook.com/dr.yakubov.plastic.surgeon/?locale=ru_RU" class="facebook"><i class="bi bi-facebook"></i></a>
                <a target="blank" href="https://instagram.com/yakubov_doctor?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bi bi-instagram"></i></a>
              </div>
              
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Пластическая Хирургия</h4>
            <ul>
             {!! menu('Plastic surgery') !!}
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Косметология</h4>
            <ul>
            {!! menu('Cosmetology') !!}
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Быстрые ссылки</h4>
            <ul>
            {!! menu('Quick links') !!}
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Dr.Yakubov</span></strong>. All Rights Reserved. <a target="blank" href="https://@kamalrustamovich.t.me/">Kamal Ayapbergenov</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->


  <script>
    window.replainSettings = { id: '15e0a121-28c5-4ffc-b21e-69d1e985fa75' };
    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
    var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
    </script>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('nova/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('nova/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('nova/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL::asset('nova/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL::asset('nova/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('nova/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::asset('nova/assets/js/main.js')}}"></script>

</body>

</html>