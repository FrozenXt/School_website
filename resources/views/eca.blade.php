<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECA | Ambassador Academy</title>

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
    .eca-hero {
      position: relative;
      height: 75vh;
      background: url('assets/eca/main-eca.jpg') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .eca-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(25,135,84,0.8), rgba(10,60,40,0.8));
    }

    .eca-hero h1 {
      position: relative;
      font-weight: 700;
      font-size: 3.5rem;
      text-transform: uppercase;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }

    .eca-hero p {
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

    /* ECA Card */
    .eca-card {
      border-radius: 18px;
      overflow: hidden;
      background: white;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      transition: all 0.4s ease;
    }

    .eca-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 35px rgba(25, 135, 84, 0.25);
    }

    .eca-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .eca-card:hover .eca-img {
      transform: scale(1.08);
    }

    .eca-content {
      padding: 20px;
      text-align: center;
    }

    .eca-content h5 {
      color: #198754;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .eca-content p {
      color: #555;
      font-style: italic;
    }

    /* Quote Section */
    .eca-quote {
      background: linear-gradient(135deg, #198754, #0a3d2b);
      color: white;
      text-align: center;
      padding: 70px 20px;
      margin: 80px 0;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(25, 135, 84, 0.4);
    }

    .eca-quote h3 {
      font-weight: 700;
      font-size: 1.8rem;
      margin-bottom: 20px;
    }

    .eca-quote p {
      font-size: 1.1rem;
      color: #c8f7d2;
    }

    /* Counters */
    .eca-counter {
      background: #fff;
      padding: 60px 0;
      text-align: center;
    }

    .counter-box {
      padding: 30px;
      background: #f1fdf4;
      border-radius: 18px;
      box-shadow: 0 5px 20px rgba(25, 135, 84, 0.1);
      transition: all 0.3s ease;
    }

    .counter-box:hover {
      background: #198754;
      color: white;
      transform: translateY(-5px);
    }

    .counter-box i {
      font-size: 2.5rem;
      color: #198754;
      margin-bottom: 15px;
    }

    .counter-box:hover i {
      color: white;
    }

    .counter-number {
      font-size: 2rem;
      font-weight: 700;
    }

    /* Social Activities Section */
    .social-activities {
      background: #f1fdf4;
      padding: 70px 0;
    }

    .social-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 5px 25px rgba(25, 135, 84, 0.1);
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .social-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(25, 135, 84, 0.25);
    }

    .social-card img {
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    .social-card .card-body {
      padding: 20px;
      text-align: center;
    }

    .social-card h5 {
      color: #198754;
      font-weight: 700;
    }

    .social-card p {
      color: #555;
    }

    /* Gallery */
    .eca-gallery img {
      border-radius: 12px;
      transition: all 0.3s ease;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }

    .eca-gallery img:hover {
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
  <section class="eca-hero">
    <div class="container">
      <h1>Extra-Curricular Activities</h1>
      <p>Where creativity, discipline, and teamwork build tomorrow’s leaders.</p>
    </div>
  </section>

  <!-- ECA Activities -->
  <section class="container my-5">
    <h2 class="section-title">Our Signature Programs</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="eca-card">
          <img src="assets/sports1.jpg" class="eca-img" alt="Sports">
          <div class="eca-content">
            <h5>⚽ Sports & Athletics</h5>
            <p>Teamwork, dedication, and spirit — every victory teaches more than the score.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="eca-card">
          <img src="assets/taekwondo.jpg" class="eca-img" alt="Taekwondo">
          <div class="eca-content">
            <h5><i class="bi bi-shield-check"></i> Taekwondo</h5>
            <p>Discipline meets strength — excellence in every kick and stance.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="eca-card">
          <img src="assets/music1.jpg" class="eca-img" alt="Music & Dance">
          <div class="eca-content">
            <h5><i class="bi bi-music-note-beamed"></i> Music & Dance</h5>
            <p>Every beat tells a story, every move expresses emotion.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section class="eca-quote container">
    <h3>“Education is not only in books, but in experiences that shape the heart and mind.”</h3>
    <p>At Ambassador Academy, we nurture creativity, leadership, and confidence through dynamic activities.</p>
  </section>

  <!-- Social Activities -->
  <section class="social-activities">
    <div class="container">
      <h2 class="section-title">Our Social Initiatives</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="social-card">
            <img src="assets/dental.jpg" alt="Free Dental Camp">
            <div class="card-body">
              <h5><i class="bi bi-heart-pulse"></i> Free Dental Camp</h5>
              <p>Promoting health awareness through dental checkups for students and community members.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-card">
            <img src="assets/blood1.jpg" alt="Blood Donation Drive">
            <div class="card-body">
              <h5><i class="bi bi-droplet-half"></i> Blood Donation Drive</h5>
              <p>Encouraging humanity and social responsibility among students through life-saving initiatives.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-card">
            <img src="assets/social.jpg" alt="Community Cleaning Campaign">
            <div class="card-body">
              <h5><i class="bi bi-recycle"></i> Cleaning Campaign</h5>
              <p>Fostering respect for the environment with hands-on community cleanliness programs.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-card">
            <img src="assets/festival.jpg" alt="Festival and Traditions">
            <div class="card-body">
              <h5><i class="bi bi-balloon"></i> Festival Celebration</h5>
              <p>Celebrating and wishing everyone a joyful and prosperous festival filled with peace, happiness, and togetherness</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="social-card">
            <img src="assets/parentsmeeting.jpg" alt="Festival and Traditions">
            <div class="card-body">
              <h5><i class="bi bi-balloon"></i> Parent- Teacher Meeting</h5>
              <p>A Parent-Teacher Meeting is held to discuss student's progress and strengthen cooperation between home and school.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="container my-5">
    <h2 class="section-title">ECA Gallery</h2>
    <div class="row g-3 eca-gallery">
      <div class="col-md-4 col-sm-6"><img src="assets/sing.jpg" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="assets/kids2.jpg" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="assets/class1.jpg" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="assets/social2.jpg" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="assets/ourpicnic.jpg" alt=""></div>
      <div class="col-md-4 col-sm-6"><img src="assets/sathwik.jpg" alt=""></div>
    </div>
  </section>

  <!-- Counters -->
  <section class="eca-counter">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-3 col-6">
          <div class="counter-box">
            <i class="bi bi-trophy"></i>
            <div class="counter-number">15+</div>
            <p>Sports Wins</p>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="counter-box">
            <i class="bi bi-people-fill"></i>
            <div class="counter-number">200+</div>
            <p>Active Participants</p>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="counter-box">
            <i class="bi bi-brush"></i>
            <div class="counter-number">30+</div>
            <p>Art Exhibits</p>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="counter-box">
            <i class="bi bi-star-fill"></i>
            <div class="counter-number">50+</div>
            <p>Performances</p>
          </div>
        </div>
      </div>
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
