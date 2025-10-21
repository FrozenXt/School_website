<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taekwondo | Ambassador Academy</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7fff7;
      color: #333;
      overflow-x: hidden;
    }

    /* Hero Section */
    .tkd-hero {
      position: relative;
      height: 75vh;
      background: url('{{ asset("assets/eca/taekwondo-main.jpg") }}') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .tkd-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(25,135,84,0.85), rgba(5,60,30,0.9));
    }

    .tkd-hero h1 {
      position: relative;
      font-weight: 700;
      font-size: 3.5rem;
      text-transform: uppercase;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }

    .tkd-hero p {
      position: relative;
      font-size: 1.1rem;
      color: #dfffe1;
      max-width: 700px;
      margin: 20px auto 0;
      animation: fadeInUp 1.3s ease;
    }

    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    /* Section Title */
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
      width: 90px;
      height: 4px;
      background-color: #198754;
      border-radius: 10px;
    }

    /* About Section */
    .tkd-about img {
      border-radius: 20px;
      width: 100%;
      height: 350px;
      object-fit: cover;
      box-shadow: 0 10px 25px rgba(25,135,84,0.25);
    }

    .tkd-about p {
      color: #444;
      line-height: 1.8;
      font-size: 1rem;
    }

    /* Instructors */
    .instructor-card {
      border-radius: 18px;
      overflow: hidden;
      background: white;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: all 0.4s ease;
    }

    .instructor-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 35px rgba(25, 135, 84, 0.25);
    }

    .instructor-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .instructor-card h5 {
      color: #198754;
      font-weight: 700;
      margin: 15px 0 5px;
    }

    .instructor-card p {
      font-style: italic;
      color: #555;
      margin-bottom: 15px;
    }

    /* Quote */
    .tkd-quote {
      background: linear-gradient(135deg, #198754, #0a3d2b);
      color: white;
      text-align: center;
      padding: 70px 20px;
      margin: 80px 0;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(25, 135, 84, 0.4);
    }

    /* Gallery */
    .tkd-gallery img {
      border-radius: 12px;
      transition: all 0.3s ease;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    .tkd-gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(25, 135, 84, 0.4);
    }

    /* Footer */
    .footer {
      background: #198754;
      color: white;
      padding: 30px 0;
    }

    .footer a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
    }

    .footer a:hover {
      color: #d4edda;
    }
  </style>
</head>
<body>

  @include('partials.navbar')

  <!-- Hero Section -->
  <section class="tkd-hero">
    <div class="container">
      <h1>Taekwondo Club</h1>
      <p>Empowering students with discipline, confidence, and self-defense skills through Taekwondo excellence.</p>
    </div>
  </section>

  <!-- About -->
  <section class="container my-5 tkd-about">
    <h2 class="section-title">About Our Taekwondo Program</h2>
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="{{ asset('assets/taekwondo6.jpg') }}" alt="Taekwondo Training">
      </div>
      <div class="col-md-6">
        <p>
          At Ambassador Academy, Taekwondo isn’t just a sport — it’s a path to self-mastery. 
          Our program emphasizes respect, discipline, and perseverance while enhancing physical fitness and mental strength. 
          Students learn essential self-defense techniques and the philosophy of harmony and balance that Taekwondo represents.
        </p>
        <p>
          With regular training, belt tests, and inter-school championships, our Taekwondo team represents the Academy in 
          various competitions, fostering a spirit of sportsmanship and pride.
        </p>
      </div>
    </div>
  </section>

  <!-- Instructors -->
  <section class="container my-5">
    <h2 class="section-title">Meet Our Instructors</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="instructor-card">
          <img src="{{ asset('assets/coach.jpg') }}" alt="Instructor 1">
          <h5>Guru Sonamnorbu Bomjan</h5>
          <p>Black Belt (5th Dan) | National Coach</p>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Quote -->
  <section class="tkd-quote container">
    <h3>“Taekwondo teaches not only how to fight, but how to live with respect and courage.”</h3>
    <p>Our students embody strength, humility, and determination — the true spirit of martial arts.</p>
  </section>

  <!-- Gallery -->
  <section class="container my-5">
    <h2 class="section-title">Taekwondo Moments</h2>
    <div class="row g-3 tkd-gallery">
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/taekwondo5.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/taekwondo2.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/taekwondo3.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/taekwondo4.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/kesang.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/taekwondo.jpg') }}" alt=""></div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>&copy; 2025 Ambassador Academy | All Rights Reserved</p>
      <p class="developer">Developed by <strong>Sujal Lamichhane</strong></p>
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
