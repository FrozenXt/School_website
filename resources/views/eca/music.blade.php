<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Club | Ambassador Academy</title>

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
    .music-hero {
      position: relative;
      height: 75vh;
      background: url('{{ asset("assets/eca/music-main.jpg") }}') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .music-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(25,135,84,0.85), rgba(10,60,40,0.9));
    }

    .music-hero h1 {
      position: relative;
      font-weight: 700;
      font-size: 3.5rem;
      text-transform: uppercase;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }

    .music-hero p {
      position: relative;
      font-size: 1.1rem;
      color: #eaffea;
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
    .music-about img {
      border-radius: 20px;
      width: 100%;
      height: 350px;
      object-fit: cover;
      box-shadow: 0 10px 25px rgba(25, 135, 84, 0.25);
    }

    .music-about p {
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

    /* Quote Section */
    .music-quote {
      background: linear-gradient(135deg, #198754, #0a3d2b);
      color: white;
      text-align: center;
      padding: 70px 20px;
      margin: 80px 0;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(25, 135, 84, 0.4);
    }

    /* Gallery */
    .music-gallery img {
      border-radius: 12px;
      transition: all 0.3s ease;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    .music-gallery img:hover {
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
  <section class="music-hero">
    <div class="container">
      <h1>Music Club</h1>
      <p>Where every note inspires, and every melody brings joy to learning.</p>
    </div>
  </section>

  <!-- About -->
  <section class="container my-5 music-about">
    <h2 class="section-title">About Our Music Club</h2>
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="{{ asset('assets/music.jpg') }}" alt="Music Performance">
      </div>
      <div class="col-md-6">
        <p>
          The Music Club at Ambassador Academy helps students explore the world of rhythm, sound, and creativity.
          From classical melodies to modern beats, our young musicians learn the art of expression through music.
        </p>
        <p>
          The club encourages teamwork, stage performance, and confidence — creating harmony both in sound and spirit.
        </p>
      </div>
    </div>
  </section>

  <!-- Events -->
  <section class="container my-5">
    <h2 class="section-title">Highlights & Performances</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/music1.jpg') }}" alt="Annual Concert">
          <h5>Annual Concert</h5>
          <p>Students showcase their talent in a grand musical evening filled with harmony and creativity.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/music5.jpg') }}" alt="Instrument Workshop">
          <h5>Instrument Workshop</h5>
          <p>Hands-on learning with guitars, keyboards, drums, and more under expert guidance.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-card">
          <img src="{{ asset('assets/choir.jpg') }}" alt="Choir Day">
          <h5>Choir Day</h5>
          <p>Celebrating unity through group performances and soulful harmonies.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote -->
  <section class="music-quote container">
    <h3>“Music gives a soul to the universe, wings to the mind, and life to everything.”</h3>
    <p>At Ambassador Academy, we let every student discover their inner rhythm and passion for music.</p>
  </section>

  <!-- Gallery -->
  <section class="container my-5">
    <h2 class="section-title">Music Gallery</h2>
    <div class="row g-3 music-gallery">
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/music4.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/paino.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/sing.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/music3.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/group.jpg') }}" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="{{ asset('assets/guitar.jpg') }}" alt=""></div>
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
