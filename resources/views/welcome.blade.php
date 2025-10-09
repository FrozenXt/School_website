<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ambassador Academy | Home</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      background-color: #fff;
    }

    /* Navbar */
    .navbar {
      background: #ffffff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      padding: 0.7rem 1rem;
    }

    .navbar-brand span {
      color: #198754;
      font-weight: 700;
      font-size: 1.25rem;
    }

    .school-logo {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      object-fit: cover;
    }

    .btn-outline-secondary {
      border-color: #198754;
      color: #198754;
    }
    .btn-outline-secondary:hover {
      background: #198754;
      color: #fff;
    }

    /* Sidebar Links */
    .offcanvas-body ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      padding: 10px 15px;
      display: block;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .offcanvas-body ul li a:hover {
      background-color: #198754;
      color: #fff;
      transform: translateX(4px);
    }

    /* Carousel */
    .carousel-item {
      height: 85vh;
      min-height: 500px;
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .carousel-item::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.55);
    }

    .carousel-caption {
      bottom: 25%;
      z-index: 2;
      text-align: left;
    }

    @media (max-width: 768px) {
      .carousel-caption {
        text-align: center;
        bottom: 20%;
      }
    }

    .carousel-caption h1 {
      font-size: 2.8rem;
      font-weight: 700;
      color: #fff;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
      animation: fadeInDown 1.2s ease;
    }

    .carousel-caption p {
      font-size: 1.1rem;
      color: #f1f1f1;
      margin-top: 10px;
      animation: fadeInUp 1.2s ease;
    }

    .carousel-caption .btn {
      margin-top: 20px;
      padding: 10px 25px;
      font-size: 1.1rem;
      border-radius: 25px;
      transition: all 0.3s;
    }

    .carousel-caption .btn:hover {
      transform: scale(1.05);
    }

    /* Fade effect for carousel */
    .carousel-fade .carousel-item {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    .carousel-fade .carousel-item.active {
      opacity: 1;
    }

    /* About Section */
    #about {
      padding: 90px 20px;
      background: #f8f9fa;
      text-align: center;
    }

    #about h2 {
      color: #198754;
      font-weight: 700;
      margin-bottom: 20px;
      font-size: 2rem;
    }

    #about p {
      max-width: 800px;
      margin: auto;
      color: #555;
      line-height: 1.8;
      font-size: 1.1rem;
    }

    /* Footer */
    .footer {
      background: #198754;
      color: white;
      text-align: center;
      padding: 35px 0 20px;
    }

    .footer i {
      color: white;
      font-size: 1.5rem;
      margin: 0 10px;
      transition: 0.3s;
    }
    .footer i:hover {
      color: #d4edda;
    }

    /* Animations */
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
      <button class="btn btn-outline-secondary me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuSidebar">
        ☰ Menu
      </button>

      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="assets/school.jpg" alt="School Logo" class="me-2 school-logo">
        <span>Ambassador Academy</span>
      </a>

      <div class="d-flex ms-auto">
        <a href="{{ route('apply.form') }}" class="btn btn-success me-2">Apply Now</a>
        <a href="{{ route('admin.login') }}" class="btn btn-outline-secondary me-2">Admin</a>
        <a href="{{ route('staff.login') }}" class="btn btn-primary">Login</a>
      </div>
    </div>
  </nav>

  <!-- Offcanvas Menu -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="menuSidebar">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title d-flex align-items-center">
        <img src="assets/school.jpg" alt="Sidebar Logo" class="me-2 school-logo">
        Ambassador Academy
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled">
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
        <li><a href="{{ route('voices') }}">Voices</a></li>
        <li><a href="{{ route('gallery') }}">Gallery</a></li>
        <li><a href="{{ route('alumni') }}">Alumni</a></li>
        <li><a href="{{ route('eca') }}">ECA Activities</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" id="ecaMenu" data-bs-toggle="dropdown">ECA (Activities)</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Taekwondo</a></li>
            <li><a class="dropdown-item" href="#">Sports</a></li>
            <li><a class="dropdown-item" href="#">Dance</a></li>
            <li><a class="dropdown-item" href="#">Music</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

  <!-- Hero Carousel -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4500">
    <div class="carousel-inner">

      <div class="carousel-item active" style="background-image: url('assets/cover.jpg');">
        <div class="container">
          <div class="carousel-caption">
            <h1>Welcome to Ambassador Academy</h1>
            <p>Shaping young minds with knowledge, discipline, and compassion.</p>
            <a href="{{ route('apply.form') }}" class="btn btn-success">Join Us Today</a>
          </div>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('assets/kids1.jpg');">
        <div class="container">
          <div class="carousel-caption">
            <h1>Inspiring Excellence</h1>
            <p>Empowering students through academics and beyond.</p>
            <a href="{{ route('services') }}" class="btn btn-light text-success">Discover More</a>
          </div>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('assets/ladies.jpg');">
        <div class="container">
          <div class="carousel-caption">
            <h1>Beyond Classrooms</h1>
            <p>Sports, Arts, and Leadership for holistic growth.</p>
            <a href="#gallery" class="btn btn-outline-light">Explore Activities</a>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- About Section -->
  <section id="about">
    <div class="container">
      <h2>About Our School</h2>
      <p>
        <strong>Ambassador Academy</strong> — located in Jorpati, Kathmandu, Nepal — is dedicated to 
        nurturing future leaders through a balanced blend of academics, values, and creativity. 
        We emphasize discipline, innovation, and teamwork, ensuring every child achieves excellence 
        both in and outside the classroom.
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p class="mb-2">&copy; 2025 Ambassador Academy | All Rights Reserved</p>
      <p>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-tiktok"></i>
        <i class="fab fa-twitter"></i>
      </p>
      <p>Email: info@ambassadoracademy.com | Phone: +977 9841223044</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
