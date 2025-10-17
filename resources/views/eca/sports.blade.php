<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sports Club | Ambassador Academy</title>

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
    .sports-hero {
      position: relative;
      height: 75vh;
      background: url('{{ asset("assets/eca/sports-main.jpg") }}') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .sports-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(25,135,84,0.85), rgba(5,60,30,0.9));
    }

    .sports-hero h1 {
      position: relative;
      font-weight: 700;
      font-size: 3.5rem;
      text-transform: uppercase;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }

    .sports-hero p {
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

    /* About */
    .sports-about img {
      border-radius: 20px;
      width: 100%;
      height: 350px;
      object-fit: cover;
      box-shadow: 0 10px 25px rgba(25,135,84,0.25);
    }

    .sports-about p {
      color: #444;
      line-height: 1.8;
      font-size: 1rem;
    }

    /* Events */
    .event-card {
      border-radius: 18px;
      overflow: hidden;
      background: white;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: all 0.4s ease;
    }

    .event-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 35px rgba(25, 135, 84, 0.25);
    }

    .event-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .event-card h5 {
      color: #198754;
      font-weight: 700;
      margin: 15px 0 5px;
    }

    .event-card p {
      font-style: italic;
      color: #555;
      margin-bottom: 15px;
    }

    /* Quote */
    .sports-quote {
      background: linear-gradient(135deg, #198754, #0a3d2b);
      color: white;
      text-align: center;
      padding: 70px 20px;
      margin: 80px 0;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(25, 135, 84, 0.4);
    }

    /* Gallery */
    .sports-gallery img {
      border-radius: 12px;
      transition: all 0.3s ease;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    .sports-gallery img:hover {
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
  <section class="sports-hero">
    <div class="container">
      <h1>Sports Club</h1>
      <p>Building teamwork, discipline, and leadership through athletic excellence.</p>
    </div>
  </section>

  <!-- About -->
  <section class="container my-5 sports-about">
    <h2 class="section-title">About Our Sports Club</h2>
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="{{ asset('assets/finalsports.jpg') }}" alt="Sports Activities">
      </div>
      <div class="col-md-6">
        <p>
          The Sports Club at Ambassador Academy plays a vital role in nurturing the physical and mental well-being 
          of students. Through structured games, inter-house competitions, and tournaments, our athletes learn the 
          essence of sportsmanship and teamwork.
        </p>
        <p>
          Students are encouraged to participate in various outdoor and indoor sports including football, basketball, 
          cricket, badminton, and athletics — with professional coaches guiding them every step of the way.
        </p>
      </div>
    </div>
  </section>

  <!-- Events -->
  <section class="container my-5">
    <h2 class="section-title">Highlights & Events</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/boys.jpg') }}" alt="Football">
          <h5>Football Tournaments</h5>
          <p>Annual inter-school matches showcasing skill, teamwork, and determination.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/basketball.jpg') }}" alt="Basketball">
          <h5>Basketball League</h5>
          <p>Fast-paced action that fosters unity and leadership among players.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/basketball1.jpg') }}" alt="Athletics">
          <h5>Track & Field</h5>
          <p>Developing stamina, focus, and persistence through athletic events.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote -->
  <section class="sports-quote container">
    <h3>“Champions are made from practice, persistence, and the will to never give up.”</h3>
    <p>Our students learn that success is earned through teamwork, discipline, and dedication.</p>
  </section>

  <!-- Gallery -->
  <section class="container my-5">
    <h2 class="section-title">Sports Gallery</h2>
    <div class="row g-3 sports-gallery">
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/sports.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/sports1.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/sports2.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/swimming.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/swimming1.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/myboys.jpg') }}" alt=""></div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>&copy; 2025 Ambassador Academy | All Rights Reserved</p>
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
