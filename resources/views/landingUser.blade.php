<!DOCTYPE html {{ Auth::user()->name }}>

<head>
  <meta charset="utf-8">
  <title>Uranus Corporation
  </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/logo.png" rel="icon">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">URANUS</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="{{ route('logout') }}">Log out</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/6.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Uranus Developer</h2>
                <p>Consider. Shape. Influence. Shine.</p>
                <a href="#contact" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/7.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Design</h2>
                <p>Imagination. Creativity. Finesse.</p>
                <a href="#contact" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/8.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Web Developer</h2>
                <p>The goal isn’t to build a website. The goal is to build your business.</p>
                <a href="#contact" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/9.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Android Developer</h2>
                <p>Willing to get your application designed with best user interface? We are having the solutions for all your problems</p>
                <a href="#contact" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/10.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are Professional</h2>
                <p>Don’t waste your time on thinking, share your ideas with us and we will turn them into reality</p>
                <a href="#contact" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>

  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Tell us your wish !</h3>
        <p>Our ideas will definitely meet your expectations</p>
      </div>

      <div id="form" class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="{{ route('wish/store') }}" method="POST" role="form" class="contactForm">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Services</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="services">
              <option selected>Choose...</option>
              <option value="1">Design</option>
              <option value="2">Web Development</option>
              <option value="3">Android Development</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="jenis" id="subject" placeholder="Jenis aplikasi/desain (e-commerce, blog, etc)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="deskripsi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Deskripsikan dengan singkat tentang keinginan anda"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center">
            <button type="submit">Send Your Wish</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-4 footer-info">
            <h3>URANUS</h3>
            <p>Uranus merupakan kumpulan mahasiswa gabut yang sangat menyukai dunia perkodingan,
              Dan kami merupakan mahasiswa yang mempunyai keahlian masing masing,
              dari mulai desain suatu aplikasi hingga pembuatan aplikasi itu sendiri.</p>
          </div>

          <div class="col-md-4 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jalan Raya Tlogomas <br>
              Kota Malang, 65138<br>
              Indonesia <br>
              <strong>Phone:</strong> +628123456789<br>
              <strong>Email:</strong> uranus@gmaail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-md-4 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Mari berlangganan newsletter kami agar tidak ketinggalan promo menarik</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>URANUS</strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

</body>

</html>