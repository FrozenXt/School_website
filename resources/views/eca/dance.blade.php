<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dance Club | Ambassador Academy</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff7fa;
      color: #333;
      overflow-x: hidden;
    }

    /* Hero Section */
    .dance-hero {
      position: relative;
      height: 75vh;
      background: url('{{ asset("assets/eca/dance-main.jpg") }}') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .dance-hero::before {
      content: "";
      position: absolute;
      inset: 0;
       background: linear-gradient(135deg, rgba(25,135,84,0.85), rgba(5,60,30,0.9));
    }

    .dance-hero h1 {
      position: relative;
      font-weight: 700;
      font-size: 3.5rem;
      text-transform: uppercase;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }

    .dance-hero p {
      position: relative;
      font-size: 1.1rem;
      color: #ffe5ec;
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
    .dance-about img {
      border-radius: 20px;
      width: 100%;
      height: 350px;
      object-fit: cover;
      box-shadow: 0 10px 25px rgba(220, 20, 60, 0.25);
    }

    .dance-about p {
      color: #444;
      line-height: 1.8;
      font-size: 1rem;
    }

    /* Event Cards */
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
      box-shadow: 0 18px 35px rgba(220, 20, 60, 0.25);
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
    .dance-quote {
      background: linear-gradient(135deg, #198754, #85002d);
      color: white;
      text-align: center;
      padding: 70px 20px;
      margin: 80px 0;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(220, 20, 60, 0.4);
    }

    /* Gallery */
    .dance-gallery img {
      border-radius: 12px;
      transition: all 0.3s ease;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    .dance-gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(220, 20, 60, 0.4);
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
      color: #ffd6e0;
    }
  </style>
</head>
<body>

  @include('partials.navbar')

  <!-- Hero -->
  <section class="dance-hero">
    <div class="container">
      <h1>Dance Club</h1>
      <p>Expressing creativity, rhythm, and confidence through the art of movement.</p>
    </div>
  </section>

  <!-- About -->
  <section class="container my-5 dance-about">
    <h2 class="section-title">About Our Dance Club</h2>
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="{{ asset('assets/winnerdance.jpg') }}" alt="Dance Performance">
      </div>
      <div class="col-md-6">
        <p>
          The Dance Club at Ambassador Academy is a vibrant community where students explore various dance forms,
          from classical and contemporary to hip-hop and cultural performances. 
        </p>
        <p>
          Our club aims to help students develop rhythm, confidence, and expression — 
          transforming every stage into a platform for creativity and celebration.
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
          <img src="{{ asset('assets/dance.jpg') }}" alt="Annual Dance Fest">
          <h5>Annual Dance Fest</h5>
          <p>Showcasing talent through diverse performances and creative storytelling.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/dance1.jpg') }}" alt="Cultural Program">
          <h5>Cultural Program</h5>
          <p>Bringing cultural heritage alive through expressive traditional dances.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/dance3.jpg') }}" alt="Inter-School Dance Battle">
          <h5>Inter-School Dance Battle</h5>
          <p>Where passion meets rhythm — the ultimate stage for young performers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote -->
  <section class="dance-quote container">
    <h3>“Dance is the hidden language of the soul.”</h3>
    <p>Every move tells a story — and our students learn to speak it beautifully.</p>
  </section>

  <!-- Gallery -->
  <section class="container my-5">
    <h2 class="section-title">Dance Gallery</h2>
    <div class="row g-3 dance-gallery">
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/dance.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/dance1.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/dance2.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/dance3.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/kidsdance.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/winnerdance.jpg') }}" alt=""></div>
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
