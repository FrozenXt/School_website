<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voices | Ambassador Academy</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9fafb;
    }

    /* Hero Section */
    .voices-hero {
      background: linear-gradient(to right, #198754, #2aa666);
      color: white;
      padding: 100px 20px;
      text-align: center;
    }

    .voices-hero h1 {
      font-weight: 700;
      font-size: 3rem;
    }

    .voices-hero p {
      font-size: 1.1rem;
      margin-top: 10px;
    }

    /* Voice Cards */
    .voice-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.08);
      padding: 40px 25px;
      text-align: center;
      border-top: 5px solid #198754;
      transition: all 0.4s ease;
    }

    .voice-card:hover {
      transform: translateY(-8px);
      box-shadow: 0px 16px 35px rgba(25, 135, 84, 0.25);
    }

    .voice-img {
      width: 110px;
      height: 110px;
      border-radius: 50%;
      border: 5px solid #198754;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .voice-card h5 {
      color: #198754;
      font-weight: 700;
    }

    .quote {
      font-style: italic;
      color: #444;
      font-size: 1.05rem;
      margin-top: 15px;
    }

    .section-title {
      color: #198754;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }

    .section-title::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background-color: #198754;
      border-radius: 10px;
    }

    /* Carousel controls */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #198754;
      border-radius: 50%;
      padding: 15px;
    }

    /* Footer */
    .footer {
      background: #198754;
      color: white;
      padding: 25px 0;
    }

    .footer a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      transition: 0.3s;
    }

    .footer a:hover {
      color: #d4edda;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Hero Section -->
  <section class="voices-hero">
    <div class="container">
      <h1>Voices of Leadership</h1>
      <p>Words of inspiration from our Principal, Vice Principal, and our community</p>
    </div>
  </section>

  <!-- Leadership Section -->
  <section class="container my-5">
    <h2 class="section-title">Meet Our Leadership</h2>
    <div class="row g-5 justify-content-center">

      <div class="col-md-5">
        <div class="voice-card">
          <img src="assets/principal.jpg" alt="Principal" class="voice-img">
          <h5>Mohan Malla</h5>
          <p class="text-muted">Principal</p>
          <p class="quote">“At Ambassador Academy, we go beyond academics. Our vision is to nurture confident, responsible, and compassionate individuals who can make a difference in the world.”</p>
        </div>
      </div>

      <div class="col-md-5">
        <div class="voice-card">
          <img src="assets/viceprincipal.jpg" alt="Vice Principal" class="voice-img">
          <h5>Krishna Bhandari</h5>
          <p class="text-muted">Vice Principal</p>
          <p class="quote">“Education is not just about books; it's about experiences, growth, and values. We strive to create an environment where every student thrives with purpose and passion.”</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Testimonials Carousel -->
  <section class="container my-5">
    <h2 class="section-title">Voices of Our Community</h2>

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="voice-card">
                <img src="assets/student1.jpg" alt="Student" class="voice-img">
                <h5>Sujal Shrestha</h5>
                <p class="text-muted">Student, Grade 10</p>
                <p class="quote">“Ambassador Academy motivates me every day to learn and lead. The teachers are always supportive and kind.”</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="voice-card">
                <img src="assets/teacher1.jpg" alt="Teacher" class="voice-img">
                <h5>Amrita Malla</h5>
                <p class="text-muted">English Teacher</p>
                <p class="quote">“Our students are our pride. We guide them not only to score high but to think critically and creatively.”</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="voice-card">
                <img src="assets/parent1.jpg" alt="Parent" class="voice-img">
                <h5>Rajesh Adhikari</h5>
                <p class="text-muted">Parent</p>
                <p class="quote">“My child has become more confident and curious. Ambassador Academy truly cares about holistic growth.”</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="voice-card">
                <img src="assets/student2.jpg" alt="Student" class="voice-img">
                <h5>Ritika Sharma</h5>
                <p class="text-muted">Student, Grade 8</p>
                <p class="quote">“I love how every teacher encourages creativity and curiosity. Ambassador Academy is like my second home.”</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="voice-card">
                <img src="assets/rupesh.jpg" alt="Alumni" class="voice-img">
                <h5>Rupesh Khatiwoda</h5>
                <p class="text-muted">Alumni</p>
                <p class="quote">“The foundation I built here shaped my career. I'm proud to call myself an Ambassadorian.”</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="voice-card">
                <img src="assets/teacher2.jpg" alt="Teacher" class="voice-img">
                <h5>Sudip Ghimire</h5>
                <p class="text-muted">Science Teacher</p>
                <p class="quote">“Our focus is hands-on learning. We believe every student has a scientist within them.”</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p class="mb-1">&copy; 2025 Ambassador Academy | All Rights Reserved</p>
      <div>
        <a href="#"><i class="bi bi-facebook fs-4"></i></a>
        <a href="#"><i class="bi bi-instagram fs-4"></i></a>
        <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
        <a href="#"><i class="bi bi-tiktok fs-4"></i></a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
