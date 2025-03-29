<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <nav class="navbar navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand text-brand" href="#">Eve<span class="text-b">nu</span></a>
    
      <div class="justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="service.php">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="decoration.php">Decoration</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <div class="buttons">
        <a href="../../authentication/php/login.php" class="btn button">Login</a>
        <a href="../../authentication/php/register.php" class="btn button">Register</a>
      </div>
    </div>
  </nav>

  <div class="container" style="padding-top: 200px;">
    <div class="d-flex justify-content-between" style="border-left: 3px solid #2eca6a;padding: 1rem 0 1rem 2rem;">
      <div class="title-single-box">
        <h1 class="title-single">Contact US</h1>
        <span class="color-text-a">
          We’d love to hear from you! Whether you’re planning your next big event or simply have <br> 
          a question about our services, our team is here to help. Reach out to us using the <br> 
          details below or fill out the contact form, and we’ll get back to you as soon as possible.
        </span>
      </div>
      <p style="font-size: 17px;">Home/About</p>
    </div>
  </div>
  <br><br><br><br>


  <section class="contact">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Say Hello</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a">evenu@gmail.com</span>
                      </p>
                      <p class="mb-1">Phone.
                        <span class="color-a">+237 650 892 022 </span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Find us in</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        Cameroon, Yaounde 7.045,
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Social networks</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br><br><br>

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