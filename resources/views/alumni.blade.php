<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proud Alumni | Ambassador Academy</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }

    /* ===== Hero Section ===== */
    .hero-carousel {
      position: relative;
      height: 70vh;
      overflow: hidden;
    }

    .hero-carousel .carousel-item {
      height: 70vh;
      background-size: cover;
      background-position: center;
      position: relative;
      transition: transform 1s ease-in-out;
    }

    .hero-overlay {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: linear-gradient(120deg, rgba(25,135,84,0.9), rgba(0,100,0,0.6));
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      padding: 0 15px;
      animation: fadeIn 1.5s ease;
    }

    .hero-overlay h1 {
      font-weight: 700;
      font-size: 3rem;
      letter-spacing: 1px;
      text-shadow: 0 3px 8px rgba(0,0,0,0.3);
    }

    .hero-overlay p {
      font-size: 1.2rem;
      max-width: 700px;
      margin-top: 10px;
      opacity: 0.95;
    }

    /* ===== Alumni Section ===== */
    .alumni-section {
      padding: 80px 0;
      background: white;
    }

    .alumni-title {
      text-align: center;
      color: #198754;
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    .alumni-intro {
      text-align: center;
      color: #555;
      max-width: 750px;
      margin: 0 auto 50px;
      font-size: 1rem;
    }

    .alumni-card {
      background: #f0fdf4;
      border: 2px solid #198754;
      border-radius: 20px;
      box-shadow: 0 6px 15px rgba(25,135,84,0.25);
      padding: 45px 25px;
      text-align: center;
      max-width: 800px;
      margin: 0 auto;
      transition: all 0.4s ease;
      animation: fadeInUp 1s ease;
    }

    .alumni-card:hover {
      transform: scale(1.03);
      box-shadow: 0 10px 25px rgba(25,135,84,0.35);
    }

    .alumni-photo {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #198754;
      margin-bottom: 15px;
    }

    .alumni-name {
      font-weight: 700;
      font-size: 1.4rem;
      color: #198754;
    }

    .alumni-batch {
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 12px;
    }

    .alumni-quote {
      font-style: italic;
      font-size: 1rem;
      color: #333;
      margin-bottom: 15px;
      position: relative;
    }

    .alumni-quote::before {
      content: "“";
      font-size: 2rem;
      color: #198754;
      position: absolute;
      left: -10px;
      top: -10px;
    }

    .alumni-journey {
      color: #444;
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #198754;
      border-radius: 50%;
      padding: 15px;
    }

    .carousel-indicators [data-bs-target] {
      background-color: #198754;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  @include('partials.navbar')

  <!-- ===== HERO SLIDER ===== -->
  <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('assets/school1.jpg');">
        <div class="hero-overlay">
          <h1>Our Proud Alumni</h1>
          <p>Ambassador Academy — where every graduate shines bright and carries our legacy forward.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('assets/farewell.jpg');">
        <div class="hero-overlay">
          <h1>Inspiring Journeys</h1>
          <p>Leaders, innovators, artists, and changemakers — our alumni continue to make us proud worldwide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('assets/ourpicnic.jpg');">
        <div class="hero-overlay">
          <h1>Ambassador Legacy</h1>
          <p>Once an Ambassador, always an Ambassador — the bond that lasts beyond school walls.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== ALUMNI SECTION ===== -->
  <section class="alumni-section container">
    <h2 class="alumni-title">Meet Our Stars</h2>
    <p class="alumni-intro">
      From classrooms to careers, our alumni carry the values of Ambassador Academy into the world — 
      leading with integrity, creativity, and compassion.
    </p>

    <div id="alumniCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <!-- 1️⃣ Sujal -->
        <div class="carousel-item active">
          <div class="alumni-card">
            <img src="assets/sujal1.jpg" alt="Sujal Lamichhane" class="alumni-photo">
            <h4 class="alumni-name">Sujal Lamichhane</h4>
            <p class="alumni-batch">Batch of 2076 | Computer Science Engineer</p>
            <p class="alumni-quote">"Ambassador Academy gave me more than education — it gave me purpose, patience, and people who believed in me."</p>
            <p class="alumni-journey">
              Now working as a CS Engineer in AI-based systems, Sujal reflects Ambassador’s values of logic, leadership, and lifelong learning.
            </p>
          </div>
        </div>

        <!-- 2️⃣ Rupesh -->
        <div class="carousel-item">
          <div class="alumni-card">
            <img src="assets/rupesh1.jpg" alt="Rupesh Khatiwoda" class="alumni-photo">
            <h4 class="alumni-name">Rupesh Khatiwoda</h4>
            <p class="alumni-batch">Batch of 2076 | BSc.CSIT Graduate</p>
            <p class="alumni-quote">"Discipline and curiosity — two things I learned here that still drive me every day."</p>
            <p class="alumni-journey">
              Rupesh contributes to Nepal’s growing tech ecosystem, inspired by Ambassador’s emphasis on innovation and perseverance.
            </p>
          </div>
        </div>

        <!-- 3️⃣ Santosh -->
        <div class="carousel-item">
          <div class="alumni-card">
            <img src="assets/santosh.jpg" alt="Santosh Lamichhane" class="alumni-photo">
            <h4 class="alumni-name">Santosh Lamichhane</h4>
            <p class="alumni-batch">Batch of 2075 | BBA Graduate</p>
            <p class="alumni-quote">"Leadership begins in classrooms — and mine began at Ambassador Academy."</p>
            <p class="alumni-journey">
              Santosh pursued entrepreneurship with the confidence and communication skills nurtured during his school years.
            </p>
          </div>
        </div>

        <!-- 4️⃣ Darwin -->
        <div class="carousel-item">
          <div class="alumni-card">
            <img src="assets/darwin.jpg" alt="Darwin Rai" class="alumni-photo">
            <h4 class="alumni-name">Darwin Rai</h4>
            <p class="alumni-batch">Batch of 2075 | British Army</p>
            <p class="alumni-quote">"Discipline was not just taught — it was lived here every day."</p>
            <p class="alumni-journey">
              From Ambassador to the British Army, Darwin's journey shows the strength, honor, and discipline he built in school.
            </p>
          </div>
        </div>

        <!-- 5️⃣ Mausam -->
        <div class="carousel-item">
          <div class="alumni-card">
            <img src="assets/vazra1.jpg" alt="Mausam Bhattarai" class="alumni-photo">
            <h4 class="alumni-name">Mausam Bhattarai (VaZra)</h4>
            <p class="alumni-batch">Batch of 2074 | Rapper & Music Artist</p>
            <p class="alumni-quote">"Art found me here — in the corridors, in the laughter, in the rhythm of everyday life."</p>
            <p class="alumni-journey">
              Now performing as <b>VaZra</b>, Mausam carries his creative spark from school halls to concert stages nationwide.
            </p>
          </div>
        </div>

        <!-- 6️⃣ Apsara -->
        <div class="carousel-item">
          <div class="alumni-card">
            <img src="assets/apsara.jpg" alt="Apsara Khatiwoda" class="alumni-photo">
            <h4 class="alumni-name">Apsara Khatiwoda</h4>
            <p class="alumni-batch">Batch of 2075 | Registered Nurse</p>
            <p class="alumni-quote">"The compassion I practice today was planted as a seed in Ambassador’s classrooms."</p>
            <p class="alumni-journey">
              Apsara’s nursing journey reflects the kindness and empathy nurtured through Ambassador’s caring environment.
            </p>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#alumniCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#alumniCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <div class="carousel-indicators mt-4">
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="5"></button>
      </div>
    </div>
  </section>

  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
