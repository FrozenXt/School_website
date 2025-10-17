<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services | Ambassador Academy</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8fff9;
      color: #333;
      scroll-behavior: smooth;
    }

    /* Hero Section */
    .hero-services {
      height: 80vh;
      background-size: cover;
      background-position: center;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      overflow: hidden;
      transition: background-image 1s ease-in-out;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 60, 30, 0.55);
      backdrop-filter: blur(2px);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      animation: fadeInUp 1.2s ease;
    }

    .hero-content h1 {
      font-weight: 700;
      font-size: 3.5rem;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .hero-content p {
      font-size: 1.2rem;
      opacity: 0.9;
      margin-top: 10px;
    }

    .hero-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      font-size: 32px;
      border-radius: 50%;
      width: 55px;
      height: 55px;
      cursor: pointer;
      z-index: 3;
      transition: all 0.3s ease;
    }

    .hero-arrow:hover {
      background: rgba(255, 255, 255, 0.5);
      color: #0a3622;
      transform: translateY(-50%) scale(1.1);
    }

    .hero-arrow.left { left: 25px; }
    .hero-arrow.right { right: 25px; }

    /* Section Title */
    .section-title {
      text-align: center;
      font-weight: 700;
      color: #198754;
      margin-bottom: 60px;
      position: relative;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 90px;
      height: 4px;
      background: #198754;
      margin: 15px auto 0;
      border-radius: 3px;
    }

    /* Service Boxes */
    .service-box {
      background: white;
      border-radius: 18px;
      padding: 40px 25px;
      text-align: center;
      box-shadow: 0 6px 25px rgba(0,0,0,0.08);
      transition: all 0.35s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .service-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 35px rgba(25,135,84,0.25);
      border: 1px solid #198754;
    }

    .service-icon {
      font-size: 50px;
      color: #198754;
      margin-bottom: 15px;
      transition: all 0.3s ease;
    }

    .service-box:hover .service-icon {
      color: #0a3622;
      transform: scale(1.1);
    }

    .service-box h4 {
      font-weight: 600;
      color: #0a3622;
      margin-bottom: 8px;
    }

    .service-box p {
      color: #555;
      font-size: 0.95rem;
      margin: 0;
    }

    .service-details {
      max-height: 0;
      overflow: hidden;
      opacity: 0;
      transition: all 0.4s ease;
      margin-top: 10px;
      color: #444;
      font-size: 0.9rem;
    }

    .service-box.active .service-details {
      max-height: 300px;
      opacity: 1;
      padding-top: 10px;
    }

    /* Footer */
    footer {
      background: #198754;
      color: white;
      text-align: center;
      padding: 30px 10px;
      margin-top: 70px;
    }

    footer p {
      margin: 0;
      font-size: 0.95rem;
      opacity: 0.9;
    }

    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Hero Section -->
  <section class="hero-services" id="heroServices">
    <div class="hero-overlay"></div>
    <button class="hero-arrow left" id="prevBtn">&#10094;</button>
    <div class="hero-content">
      <h1>Our Services</h1>
      <p>Empowering students through quality education and modern learning</p>
    </div>
    <button class="hero-arrow right" id="nextBtn">&#10095;</button>
  </section>

  <!-- Services Section -->
  <section class="container my-5">
    <h2 class="section-title">What We Offer</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-book-half"></i></div>
          <h4>Academic Excellence</h4>
          <p>Focused on growth and discipline.</p>
          <div class="service-details">
            <p>Our academic programs blend traditional learning with innovative techniques, fostering critical thinking, creativity, and lifelong learning habits. Each student is guided to achieve personal and academic success.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-laptop"></i></div>
          <h4>Digital Learning</h4>
          <p>Smart, modern, and tech-enabled.</p>
          <div class="service-details">
            <p>Our smart classrooms and computer labs integrate technology into everyday lessons, preparing students for the digital world and enhancing engagement through interactive education tools.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-heart-pulse"></i></div>
          <h4>Counseling & Care</h4>
          <p>Supporting emotional and mental growth.</p>
          <div class="service-details">
            <p>Our team of counselors ensures that every child feels heard, valued, and supported—mentally, socially, and academically—creating a nurturing space to grow with confidence.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-bus-front"></i></div>
          <h4>Transportation</h4>
          <p>Safe, punctual, and comfortable.</p>
          <div class="service-details">
            <p>Our fleet of school buses is equipped with safety features and trained staff, ensuring your child’s journey to and from school is secure and hassle-free.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-building"></i></div>
          <h4>Hostel & Cafeteria</h4>
          <p>Healthy food and homely environment.</p>
          <div class="service-details">
            <p>Our hostel provides a safe and supportive residential environment, complemented by a hygienic cafeteria that serves nutritious meals designed to promote well-being.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-trophy"></i></div>
          <h4>Co-curricular Activities</h4>
          <p>Building confidence and creativity.</p>
          <div class="service-details">
            <p>We offer sports, arts, and leadership activities that help students discover their strengths, build character, and learn teamwork and discipline beyond classrooms.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Ambassador Academy | All Rights Reserved</p>
    <p>Email: info@ambassadoracademy.com | Phone: +977 01-1234567</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const hero = document.getElementById('heroServices');
    const images = [
      'assets/building.jpg',
      'assets/classroom.jpg',
      'assets/debate.jpg',
      'assets/kinderworld.jpg'
    ];
    let index = 0;

    function changeBackground() {
      hero.style.backgroundImage = `url('${images[index]}')`;
    }

    function nextImage() {
      index = (index + 1) % images.length;
      changeBackground();
    }

    function prevImage() {
      index = (index - 1 + images.length) % images.length;
      changeBackground();
    }

    document.getElementById('nextBtn').addEventListener('click', nextImage);
    document.getElementById('prevBtn').addEventListener('click', prevImage);
    changeBackground();
    setInterval(nextImage, 6000);

    // Expand/Collapse on Click
    document.querySelectorAll('.service-box').forEach(box => {
      box.addEventListener('click', () => {
        box.classList.toggle('active');
      });
    });
  </script>
</body>
</html>
