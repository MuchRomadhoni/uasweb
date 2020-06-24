<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Uranus Corporation</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <link href="img/logo.png" rel="icon">


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
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
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
                <h2>We Are Developer</h2>
                <p> Consider. Shape. Influence. Shine.</p>
                <a href="{{ url('/register') }}" class="btn-get-started">Jadilah Klien Kami</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <main id="main">

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Uranus merupakan kumpulan mahasiswa gabut yang sangat menyukai dunia perkodingan,
            Dan kami merupakan mahasiswa yang mempunyai keahlian masing masing,
            dari mulai desain suatu aplikasi hingga pembuatan aplikasi itu sendiri, Pelayanan yang kami berikan yaitu desain, web development, dan android development</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Misi kami yaitu memberikan pelayanan terhadap pelanggan yang menggunakan
                jasa kami dengan harga yang kompetitif dan hasil yang unik serta berbeda dari developer lain
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Saat ini kami merencanakan berbagai hal di dalam dunia desain dan
                perkodingan dan terus menerus memberikan pelayanan terbaik untuk anda
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Visi kedepan kami yaitu terus menerus membuat portofolia dari apa yang akan kami buat untuk anda serta kami ingin mewujudkan web ini secara asli kedepannya
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Desain, Web Development, Android Development</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Desain</a></h4>
            <p class="description">Pendekatan kami adalah membuat desain
              yang memperkuat merek perusahaan Anda sambil memastikan kemudahan
              penggunaan dan kesederhanaan untuk audiens Anda.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Web Development</a></h4>
            <p class="description">Proses pengembangan web melibatkan mengambil elemen grafis yang didefinisikan
              dalam proses desain dan mengkodekannya menjadi website yang menarik</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Android Development</a></h4>
            <p class="description">Pengembangan perangkat lunak Android adalah
              proses di mana aplikasi baru dibuat untuk sistem operasi Android.</p>
          </div>
        </div>

      </div>
    </section>

    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      </div>
    </section>

    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Skill kami terdiri dari 3 hal, yaitu yang pertama adalah desain, kemudian website development dan terakhir yaitu mobile development</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Desain <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Website <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Android Application <i class="val">75%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">0</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">365</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">3</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>

    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-des">Desain</li>
              <li data-filter=".filter-app">Android</li>
              <li data-filter=".filter-web">Website</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-des wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/desain.png" class="img-fluid" alt="">
                <a href="img/portfolio/desain.png" data-lightbox="portfolio" data-title="Desain" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Desain</a></h4>
                <p>Desain Logo 80's Shoes Treatment</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Android</a></h4>
                <p>Schema (Schedule Maker)</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-des wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/desain-2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/desain-2.jpg" data-lightbox="portfolio" data-title="Desain" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Desain</a></h4>
                <p>Desain Feed Instagram</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web3.png" class="img-fluid" alt="">
                <a href="img/portfolio/web3.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Website</a></h4>
                <p>Website Uranus</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app2.png" class="img-fluid" alt="">
                <a href="img/portfolio/app2.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Android</a></h4>
                <p>80's Shoes Treatment</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web2.png" class="img-fluid" alt="">
                <a href="img/portfolio/web2.png" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Website</a></h4>
                <p>Website Tugas UTS</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web1.png" class="img-fluid" alt="">
                <a href="img/portfolio/web1.png" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Website</a></h4>
                <p>Website Makanan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-des wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/desain-3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/desain-3.jpg" data-lightbox="portfolio" data-title="Desain" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <<a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Desain</a></h4>
                <p>Desain Vektor</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app3.png" class="img-fluid" alt="">
                <a href="img/portfolio/app3.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('/portofolio') }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ url('/portofolio') }}">Android</a></h4>
                <p>80's Shoes Treatment</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/zulfan.jpg" class="testimonial-img" alt="">
            <h3>Zulfan Faizal</h3>
            <h4>Ceo &amp; Founder of 80's shoes treatment</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Uranus kami pilih menyelesaikan pekerjaan dengan cepat,
              teliti dan bisa diandalkan. Saya memilih Uranus
              sebagai solusi untuk desain logo usaha saya.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/helmi.jpg" class="testimonial-img" alt="">
            <h3>Helmi Ramadan</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Kalo desain web jangan ditanya deh,
              Uranus jagonya .. beberapa proyek saya berhasil .. Terima kasih.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/dawam.jpg" class="testimonial-img" alt="">
            <h3>M Dawam Amrillah</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Uranus sangat membantu dan sangat informative
              dalam melayani pelanggan, tidak tahu harus bagaimana tanpa Uranus.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/agung.jpg" class="testimonial-img" alt="">
            <h3>Agung Triadi</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Terasa sulit untuk memulai...tapi setelah saya menemukan Uranus,
              ternyata menjadi mudah semuanya.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>

    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Inilah mahasiswa - mahasiswa gabut dibalik kesuksesan Uranus Corp</p>
        </div>

        <div class="row">

          <div class="col-md-4 wow fadeInUp">
            <div class="member">
              <img src="img/jagi.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Moch Inzaghi Hafidzh</h4>
                  <span>Web Developer | 201810370311341</span>
                  <div class="social">
                    <a href="https://twitter.com/halojagii" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/halojagi/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=62885156711512" target="_blank"><i class="fa fa-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/doni.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Much Romadhoni</h4>
                  <span>Android Developer | 201810370311346</span>
                  <div class="social">
                    <a href="https://twitter.com/donidonidon_" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/donidonidon_/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=62882230066867" target="_blank"><i class="fa fa-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/bimo.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bimo Gempar Buono</h4>
                  <span>Designer | Web Developer | 201810370311345</span>
                  <div class="social">
                    <a href="https://www.twitter.com/bimogempar/" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/bimogempar/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=628819417402" target="_blank"><i class="fa fa-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Anda bisa menghubungi kami pada detail yang kami cantumkan dibawah</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Jalan Raya Tlogomas</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+628123456789</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">uranus@gmail.com</a></p>
            </div>
          </div>

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