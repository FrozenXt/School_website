<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Ambassador Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #ffffff;
      color: #333;
      overflow-x: hidden;
    }

    /* ====================== HERO SLIDESHOW ====================== */
    .hero-about {
      position: relative;
      height: 70vh;
      overflow: hidden;
      font-family: 'Poppins', sans-serif;
    }

    .hero-slides {
      position: relative;
      height: 100%;
      width: 100%;
    }

    .hero-slide {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 1.2s ease-in-out, transform 5s ease-in-out;
      transform: scale(1.1);
    }

    .hero-slide.active {
      opacity: 1;
      transform: scale(1);
      z-index: 1;
    }

    .hero-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      z-index: 5;
      animation: fadeIn 1.5s ease-in-out;
    }

    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .hero-content p {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .hero-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(25, 135, 84, 0.7);
      border: none;
      color: white;
      font-size: 1.4rem;
      padding: 10px 14px;
      border-radius: 50%;
      cursor: pointer;
      transition: background 0.3s;
      z-index: 10;
    }
    .hero-btn:hover {
      background: rgba(25, 135, 84, 1);
    }
    .hero-btn.prev { left: 25px; }
    .hero-btn.next { right: 25px; }

    @media (max-width: 768px) {
      .hero-content h1 { font-size: 2rem; }
    }

    /* ====================== ABOUT PAGE ====================== */
    .section-title {
      font-weight: 700;
      color: #198754;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 40px;
      position: relative;
      display: inline-block;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 60%;
      height: 3px;
      background: #198754;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .image-frame {
      display: inline-block;
      padding: 12px;
      background: linear-gradient(135deg, #198754, #32a875);
      border-radius: 18px;
      box-shadow: 0 8px 20px rgba(25, 135, 84, 0.3);
      position: relative;
      overflow: hidden;
      transition: 0.4s ease;
    }

    .image-frame::before {
      content: "";
      position: absolute;
      top: 6px;
      left: 6px;
      right: 6px;
      bottom: 6px;
      border: 3px solid white;
      border-radius: 12px;
      pointer-events: none;
      transition: 0.3s;
    }

    .image-frame:hover {
      transform: scale(1.03) rotate(-1deg);
      box-shadow: 0 12px 30px rgba(25, 135, 84, 0.4);
    }

    .icon-box {
      background: #f8f9fa;
      border-radius: 12px;
      padding: 25px;
      transition: all 0.4s ease;
      text-align: center;
      cursor: pointer;
      border: 2px solid transparent;
    }

    .icon-box:hover {
      background: #198754;
      color: white;
      transform: translateY(-8px);
      border-color: #198754;
      box-shadow: 0 6px 20px rgba(25,135,84,0.3);
    }

    .principal-box {
      background: linear-gradient(135deg, #f8f9fa, #e9f7ef);
      padding: 30px;
      border-left: 6px solid #198754;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }

    .principal-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(25,135,84,0.2);
    }

    .team-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 20px rgba(25,135,84,0.3);
    }

    .team-card img {
      width: 100%;
      height: 260px;
      object-fit: cover;
    }

    .team-info { padding: 20px; }
    .team-info h5 { color: #198754; font-weight: 600; margin-bottom: 5px; }

    .map-container {
      height: 400px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .footer {
      background: #198754;
      color: white;
      padding: 30px 0;
    }
    .footer p { margin: 0; opacity: 0.9; }

    [data-reveal] {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.7s ease;
    }
    [data-reveal].visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  @include('partials.navbar')

  <!-- ====================== HERO SECTION ====================== -->
  <section class="hero-about position-relative">
    <div class="hero-slides">
      <div class="hero-slide active" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('assets/team.jpg');"></div>
      <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('assets/school1.jpg');"></div>
      <div class="hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('assets/assembly.jpg');"></div>
    </div>

    <div class="hero-content text-center">
      <h1>About Ambassador Academy</h1>
      <p>Located at Jorpati, Kathmandu, Nepal</p>
    </div>

    <button class="hero-btn prev"><i class="fas fa-chevron-left"></i></button>
    <button class="hero-btn next"><i class="fas fa-chevron-right"></i></button>
  </section>

  <!-- ====================== WHO WE ARE ====================== -->
  <section class="container my-5 text-center" data-reveal>
    <h2 class="section-title">Who We Are</h2>
    <p class="fs-5">
      <strong>Ambassador Academy</strong> is a leading educational institution situated in Jorpati, Kathmandu. 
      Our mission is to provide quality education while instilling discipline, creativity, and compassion.
      We believe in nurturing students who are confident, skilled, and value-driven citizens.
    </p>
  </section>

  <!-- ====================== OUR JOURNEY ====================== -->
  <section class="container my-5" data-reveal>
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <div class="image-frame">
          <img src="assets/building1.jpg" alt="School Building" class="img-fluid rounded shadow">
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="section-title">Our Journey</h2>
        <p>
          Founded in <strong>2005</strong>, Ambassador Academy began as a humble vision to redefine education in Nepal. 
          Over time, it has grown into one of the region’s most trusted institutions — known for its academic excellence, 
          character development, and student-centered approach.
        </p>
        <p>
          Today, we proudly serve hundreds of students and continue to foster a culture of innovation, 
          inclusivity, and lifelong learning.
        </p>
      </div>
    </div>
  </section>

  <!-- ====================== MISSION / VISION ====================== -->
  <section class="container my-5 text-center" data-reveal>
    <h2 class="section-title">Our Mission, Vision & Core Values</h2>
    <div class="row g-4">
      <div class="col-md-4"><div class="icon-box"><h4>🎯 Mission</h4><p>To inspire disciplined, confident, and capable learners who thrive globally while valuing their roots.</p></div></div>
      <div class="col-md-4"><div class="icon-box"><h4>🌍 Vision</h4><p>To be a leading academic institution recognized for innovation, inclusion, and integrity.</p></div></div>
      <div class="col-md-4"><div class="icon-box"><h4>💡 Core Values</h4><p>Discipline, Innovation, Respect, Leadership, and Lifelong Learning.</p></div></div>
    </div>
  </section>

  <!-- ====================== TEAM ====================== -->
  <section class="container my-5 text-center" data-reveal>
    <h2 class="section-title">Meet Our Team</h2>
    <div class="row g-4">
      <div class="col-md-3"><div class="team-card"><img src="assets/principal.jpg"><div class="team-info"><h5>Mohan Malla</h5><p>Principal</p></div></div></div>
      <div class="col-md-3"><div class="team-card"><img src="assets/viceprincipal.jpg"><div class="team-info"><h5>Krishna Bhandari</h5><p>Vice Principal</p></div></div></div>
      <div class="col-md-3"><div class="team-card"><img src="assets/hari.jpg"><div class="team-info"><h5>Hari Kumar Karki</h5><p>Chairperson</p></div></div></div>
      <div class="col-md-3"><div class="team-card"><img src="assets/finance.jpg"><div class="team-info"><h5>Jhamak Kumar Ghimire</h5><p>Head of Finance</p></div></div></div>
    </div>
  </section>

  <!-- ====================== PRINCIPAL MESSAGE ====================== -->
  <section class="container my-5" data-reveal>
    <h2 class="section-title text-center">Principal’s Message</h2>
    <div class="principal-box">
      <p>“Education at Ambassador Academy is not confined to textbooks. It is an experience that cultivates discipline, 
      compassion, and creativity. Our mission is to prepare students to face life’s challenges with confidence and grace.”</p>
      <p class="fw-bold text-success mb-0">— Mohan Malla, Principal</p>
    </div>
  </section>

  <!-- ====================== MAP ====================== -->
  <section class="container my-5 text-center" data-reveal>
    <h2 class="section-title">Where We Are</h2>
    <p>We are proudly located in Jorpati, Kathmandu, Nepal</p>
    <div class="map-container mt-3">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3418.0!2d85.379160!3d27.723400!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1700000000000" 
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </section>

  <!-- ====================== FOOTER ====================== -->
  <footer class="footer text-center">
    <p>&copy; 2025 Ambassador Academy | All Rights Reserved</p>
    <p>Email: info@ambassadoracademy.com | Phone: +977 01-1234567</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Reveal Animation
    const revealEls = document.querySelectorAll('[data-reveal]');
    window.addEventListener('scroll', () => {
      revealEls.forEach(el => {
        const rect = el.getBoundingClientRect().top;
        if (rect < window.innerHeight - 100) el.classList.add('visible');
      });
    });

    // Hero slideshow
    document.addEventListener("DOMContentLoaded", function() {
      const slides = document.querySelectorAll('.hero-slide');
      let currentSlide = 0;
      const nextBtn = document.querySelector('.hero-btn.next');
      const prevBtn = document.querySelector('.hero-btn.prev');

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle('active', i === index);
        });
      }

      nextBtn.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
      });

      prevBtn.addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
      });

      // Auto slide every 4 seconds
      setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
      }, 4000);
    });
  </script>

</body>
</html>
