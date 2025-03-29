<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evenu</title>
  <link rel="stylesheet" href="client/css/style.css">
</head>
<body>

  <nav class="navbar navbar-trans navbar-expand-lg fixed-top">
    <div class="container head-nav">
      <a class="navbar-brand text-brand" href="#">Eve<span class="text-b">nu</span></a>
    
      <div class="justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client/php/service.php">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client/php/decoration.php">Decoration</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client/php/about.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="client/php/contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <div class="buttons">
        <a href="authentication/php/login.php" class="btn button">Login</a>
        <a href="authentication/php/register.php" class="btn button">Register</a>
      </div>
    </div>
  </nav>

  <div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
  </div>

  <!-- <div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
  </div> -->

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="assets/images/new-hall-1.jpg" class="d-block w-100 image" alt="Image 1">
      <div class="carousel-caption">
        <h1 class="fw-bold">Welcome to Evenu</h1>
        <p>Plan your perfect event with us!</p>
        <a href="client/php/service.php" class="btn btn-success">Get Started</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="assets/images/new-hall -2.jpg" class="d-block w-100 image" alt="Image 2">
      <div class="carousel-caption">
        <h1 class="fw-bold">Make Your Events Memorable</h1>
        <p>We provide the best decoration and services</p>
        <a href="client/php/service.php" class="btn btn-success">Get Started</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="assets/images/new-hall-3.jpg" class="d-block w-100 image" alt="Image 3">
      <div class="carousel-caption">
        <h1 class="fw-bold ">Your Dream Event Starts Here</h1>
        <p>Book your event hassle-free with Evenu</p>
        <a href="client/php/service.php" class="btn btn-success">Get Started</a>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon custom-green" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon custom-green" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>

  <div class="">
    <div class="container">
      <div class="service-head">
        <h2>Our services</h2>
        <a class="text-decoration-none text-dark" href="#">Services <i class="bi bi-chevron-right"></i></a>
      </div>
    </div>
  </div>

  <div class="container service-body">
    <div class="d-flex justify-content-center gap-2 services">
        <!-- Image 1 -->
        <div class="col">
            <img src="assets/images/capture2.PNG" alt="Graduation">
            <div class="overlay">
                <h3>Wedding party</h3>
                <p>Celebrate your unforgettable wedding party.</p>
                <a href="#" class="btn-custom">Learn More</a>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="col">
            <img src="assets/images/grad2.jpg" alt="Graduation Event">
            <div class="overlay">
                <h3>Graduation Party</h3>
                <p>Make memories that last a lifetime with your friends and family.</p>
                <a href="#" class="btn-custom">Get Started</a>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="col">
            <img src="assets/images/birth1.jpg" alt="Birthday">
            <div class="overlay">
                <h3>Birthday Celebration</h3>
                <p>Let us help you throw the perfect birthday party.</p>
                <a href="#" class="btn-custom">Plan Now</a>
            </div>
        </div>
    </div>
</div>

  <div class="">
    <div class="container">
      <div class="agent-head">
        <h2>Best Agent</h2>
        <a class="text-decoration-none text-dark" href="#">Agents <i class="bi bi-chevron-right"></i></a>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="assets/images/testi-2.jpg" alt="">
        </div>
        <div class="col">
            <div class="one">
             <div class="d-flex gap-2">
              <div class="bi bi-person"></div><strong>NAME</strong>
             </div> 
              <span class="">Ntoh Baldwin</span>
            </div>
            <div class="one">
              <div class="d-flex gap-2">
                <div class="bi bi-envelope"></div><strong>EMAIL</strong> 
              </div>
              <span class="">ntohbaldwin39@gmail.com</span>
            </div>
            <div class="one">
              <div class="d-flex gap-2">
                <div class="bi bi-geo-alt"></div><strong>ADDRESS</strong>
              </div> 
              <span class="">Damas</span>
            </div>
            <div class="one">
              <div class="d-flex gap-2">
                <div class="bi bi-pin-map"></div><strong>LOCATION</strong>
              </div> 
              <span class="">Younde</span>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container">
      <div class="service-head">
        <h2>Testimonial</h2>
      </div>
    </div>
  </div>


  <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Testimonial 1 -->
        <div class="carousel-item active">
            <div class="container">
                <div class="testimonial-item">
                    <img src="assets/images/testi-2.jpg" alt="User Image" class="testimonial-img">
                    <div class="testimonial-content">
                        <p class="testimonial-text">Using Evenu made planning my conference stress-free. The platform’s user-friendly interface and automated reminders saved me hours of work. I can’t imagine organizing another event without it!</p>
                        <div class="testimonial-user">
                            <img src="assets/images/testi-2.jpg" alt="User">
                            <strong>Albert</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="carousel-item">
            <div class="container">
                <div class="testimonial-item">
                    <img src="assets/images/testi-1.jpg" alt="User Image" class="testimonial-img">
                    <div class="testimonial-content">
                        <p class="testimonial-text">Evenu transformed our wedding planning! The seamless interface and vendor recommendations made everything effortless.</p>
                        <div class="testimonial-user">
                            <img src="assets/images/testi-1.jpg" alt="User">
                            <strong>Sophie</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicators -->
    <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
    </div> -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #28a745;"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #28a745;"></span>
    </button>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About Evenu -->
            <div class="col-md-4">
                <h2>Evenu</h2>
                <p style="font-size:17px;">Effortlessly plan and manage your events with confidence. From conferences and weddings to corporate gatherings, Evenu provides intuitive tools and real-time insights to ensure every detail is perfect.</p>
                <p style="font-size:17px;">Phone: <strong>+237 650 892 022</strong></p>
                <p style="font-size:17px;">Email: <strong><a href="mailto:evenu@gmail.com">evenu@gmail.com</a></strong></p>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
                <h2>Our Services</h2>
                <ul class="list-unstyled">
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Site Map</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Legal</a>
                    </li>
                    <li>
                      
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Agent Admin</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Careers</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Affiliate</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <!-- Events -->
            <div class="col-md-4">
                <h2>Events</h2>
                <ul class="list-unstyled">
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Yaoundé</a>
                      <link href="" rel="stylesheet">
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Douala</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Buea</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Baffoussam</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Limbe</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Nkonsamba</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="mb-2 d-flex gap-3">
                <a href="#">Home</a> 
                <a href="#">About</a> 
                <a href="#">Property</a> 
                <a href="#">Blog</a> 
                <a href="#">Contact</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center b">
          <p style="font-size: 17px;">© Copyright <strong>EvenuAgency</strong> All Rights Reserved.</p>
          <p style="font-size: 17px;">Designed by <strong>CHUADEU GABRIELLA</strong></p>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<div class="scroll-top" onclick="scrollToTop()">&#8593;</div>

<script>
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>


  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




</body>
</html>