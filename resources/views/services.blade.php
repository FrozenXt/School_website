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
    }

    /* Hero Section */
    .hero-services {
      height: 70vh;
      background-size: cover;
      background-position: center;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      transition: background-image 1s ease-in-out;
    }

    .hero-services::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 64, 32, 0.55);
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
      font-size: 3rem;
      text-transform: uppercase;
    }

    .hero-content p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    /* Navigation Arrows */
    .hero-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      font-size: 30px;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      cursor: pointer;
      z-index: 3;
      transition: all 0.3s;
    }

    .hero-arrow:hover {
      background: rgba(255, 255, 255, 0.5);
      color: #0a3622;
    }

    .hero-arrow.left { left: 20px; }
    .hero-arrow.right { right: 20px; }

    /* Service Section */
    .section-title {
      text-align: center;
      font-weight: 700;
      color: #198754;
      margin-bottom: 50px;
      position: relative;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 80px;
      height: 4px;
      background: #198754;
      margin: 15px auto 0;
      border-radius: 3px;
    }

    .service-box {
      background: white;
      border-radius: 15px;
      padding: 35px 25px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
    }

    .service-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(25,135,84,0.25);
      border: 1px solid #198754;
    }

    .service-icon {
      font-size: 45px;
      color: #198754;
      margin-bottom: 20px;
      transition: all 0.3s ease;
    }

    .service-box:hover .service-icon {
      color: #0a3622;
      transform: scale(1.2);
    }

    .service-box h4 {
      font-weight: 600;
      color: #0a3622;
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      background: #198754;
      color: white;
      text-align: center;
      padding: 25px 10px;
      margin-top: 60px;
    }

    footer p {
      margin: 0;
      font-size: 0.95rem;
      opacity: 0.9;
    }

    /* Animations */
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
    <button class="hero-arrow left" id="prevBtn">&#10094;</button>
    <div class="hero-content">
      <h1>Our Services</h1>
      <p>Building a brighter future through learning and leadership</p>
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
          <p>Comprehensive curriculum focused on knowledge, discipline, and creativity for overall growth.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-laptop"></i></div>
          <h4>Digital Learning</h4>
          <p>Equipped with modern computer labs and smart classrooms promoting digital education.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-heart-pulse"></i></div>
          <h4>Counseling & Care</h4>
          <p>Guidance and mentoring programs that nurture confidence, compassion, and self-belief.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-bus-front"></i></div>
          <h4>Transportation</h4>
          <p>Safe and reliable bus service ensuring timely and comfortable travel for all students.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-building"></i></div>
          <h4>Hostel & Cafeteria</h4>
          <p>Hygienic meals and secure accommodation to make school a second home for our students.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-trophy"></i></div>
          <h4>Co-curricular Activities</h4>
          <p>Sports, art, and leadership events to encourage creativity and teamwork among learners.</p>
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
      'assets/digital.jpg',
      'assets/boys.jpg',
      'assets/parents.jpg'
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

    // Auto-slide every 5 seconds
    changeBackground();
    setInterval(nextImage, 5000);
  </script>
</body>
</html>
