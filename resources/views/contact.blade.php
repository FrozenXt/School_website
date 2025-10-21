<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Ambassador Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }

    /* Hero Section */
    .hero-contact {
      background: url('assets/ladies.jpg') no-repeat center center/cover;
      height: 50vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .hero-contact::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.6);
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    /* Contact Section */
    .contact-section {
      padding: 60px 0;
    }

    .contact-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 40px;
      transition: 0.3s;
    }

    .contact-card:hover {
      transform: translateY(-5px);
    }

    .contact-info i {
      font-size: 25px;
      color: #198754;
      margin-right: 15px;
    }

    .social-icons a {
      color: #198754;
      font-size: 24px;
      margin: 0 10px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #0a3622;
      transform: scale(1.2);
    }

    .footer {
      background: #f8f9fa;
      padding: 20px 0;
      text-align: center;
      color: #333;
      border-top: 1px solid #ddd;
    }

    .btn-green {
      background-color: #198754;
      color: white;
    }

    .btn-green:hover {
      background-color: #0f5132;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Hero Section -->
  <section class="hero-contact">
    <div class="hero-content">
      <h1 class="display-4 fw-bold">Get in Touch</h1>
      <p class="lead">We'd love to hear from you! Reach out with any questions or feedback.</p>
    </div>
  </section>

  <!-- Contact Info & Form -->
  <section class="contact-section container">
    <div class="row g-5 align-items-center">
      
      <!-- Contact Info -->
      <div class="col-md-5">
        <div class="contact-card">
          <h3 class="fw-bold mb-4 text-success">Contact Information</h3>
          <div class="contact-info mb-3">
            <i class="fas fa-map-marker-alt"></i> 
            <span>Jorpati, opposite of lama petrol pump, Kathmandu, Nepal</span>
          </div>
          <div class="contact-info mb-3">
            <i class="fas fa-phone"></i> 
            <span>+977 01-4911929</span>
          </div>
          <div class="contact-info mb-3">
            <i class="fas fa-envelope"></i> 
            <span>ambassadoracademy111@gmail.com</span>
          </div>

          <hr>

          <h5 class="fw-bold text-success mt-4 mb-3">Follow Us</h5>
          <div class="social-icons">
            <a href="https://www.facebook.com/p/AMBASSADOR-ACADEMY-100064007831573/"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-md-7">
        <div class="contact-card">
          <h3 class="fw-bold mb-4 text-success">Send Us a Message</h3>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" placeholder="+977...">
              </div>
              <div class="col-md-6">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Message subject">
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..."></textarea>
              </div>
              <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-green px-5 py-2">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 Ambassador Academy | All Rights Reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
