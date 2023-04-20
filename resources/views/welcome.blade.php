<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Google Fonts 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"-->

        <!-- Vendor CSS Files -->
        <!--link href="{{ url('template/assets/vendor/aos/aos.css') }}" rel="stylesheet"-->
        <link href="{{ url('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ url('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ url('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ url('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ url('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

         <!--Template Main CSS File -->
        <link href="{{ url('template/assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('template/assets/js/main.js') }}">

    </head>

    <body class="antialiased">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Quiz</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/quizes') }}" class="getstarted scrollto">Get Started</a>
                        @else
                            <a href="{{ route('login') }}" class="getstarted scrollto">Get Started</a>
                        @endauth
                    @endif
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i> 
                
            </nav>
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

        <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>The best way to practice on coding</h1>
            <h2></h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <!--<a href="#about" class="getstarted scrollto">Get Started</a-->
                <a href="" class="glightbox btn-watch-video"><i class="getstarted scrollto"></i><span>Watch Video</span></a>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="template/assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
        </div>
        </section><!-- End Hero -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/skills.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                <h3></h3>
                <p class="fst-italic">
                </p>

                <div class="skills-content">

                <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                </div>

            </div>
            </div>

        </div>
        </section><!-- End Skills Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <!--div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div-->
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
            </div>

        </div>
        </section> <!--End Cta Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Contact</h2>
             </div>

            <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>nelson mandella</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>21055@supnum.mr</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55s</p>
                </div>

                <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe-->
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
            </div>
        </div>
        </section> <!--End Contact Section -->

    <footer id="footer">
        <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span> blabal</span></strong>. All Rights Reserved
        </div>
        </div>
  </footer> <!--End Footer -->

    </body>
</html>
