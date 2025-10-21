<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery & Memories | Ambassador Academy</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
      color: #333;
    }

    /* Hero Section */
    .gallery-hero {
      position: relative;
      height: 70vh;
      background: url('assets/memories.jpg') center center / cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .gallery-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(25, 135, 84, 0.55); /* Green overlay for readability */
    }

    .gallery-hero h1,
    .gallery-hero p {
      position: relative;
      z-index: 1;
    }

    .gallery-hero h1 {
      font-weight: 700;
      font-size: 3.2rem;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .gallery-hero p {
      font-size: 1.2rem;
      color: #f1f1f1;
      max-width: 700px;
      margin: 0 auto;
    }

    /* Section Title */
    .section-title {
      color: #198754;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 40px;
      position: relative;
    }

    .section-title::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background-color: #198754;
      border-radius: 10px;
    }

    /* Memory Cards */
    .memory-card {
      border-radius: 15px;
      overflow: hidden;
      background: white;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      transition: all 0.4s ease;
    }

    .memory-card:hover {
      transform: translateY(-8px);
      box-shadow: 0px 16px 35px rgba(25, 135, 84, 0.25);
    }

    .memory-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .memory-card:hover .memory-img {
      transform: scale(1.05);
    }

    .memory-content {
      padding: 20px;
    }

    .memory-content h5 {
      color: #198754;
      font-weight: 700;
    }

    .memory-content p {
      color: #555;
      font-style: italic;
      margin-top: 10px;
    }

    /* Carousel Controls */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #198754;
      border-radius: 50%;
      padding: 15px;
    }

    /* Footer */
    .footer {
      background: #198754;
      color: white;
      padding: 25px 0;
    }

    .footer a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
      transition: 0.3s;
    }

    .footer a:hover {
      color: #d4edda;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .gallery-hero {
        height: 50vh;
      }

      .gallery-hero h1 {
        font-size: 2rem;
      }

      .gallery-hero p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Hero Section -->
  <section class="gallery-hero">
    <div class="container">
      <h1>Our Memories & Moments</h1>
      <p>Captured moments that tell our story — of learning, laughter, and togetherness</p>
    </div>
  </section>

  <!-- Memory Carousel -->
  <section class="container my-5">
    <h2 class="section-title">Memories We Cherish</h2>

    <div id="memoryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/sports.jpg" class="memory-img" alt="Sports Day">
                <div class="memory-content">
                  <h5>Sports Day Victory</h5>
                  <p>“I still remember the roar of the crowd as we crossed the finish line together — not just teammates, but family.”</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/parentsday.jpg" class="memory-img" alt="Parents Day">
                <div class="memory-content">
                  <h5>Parents Day</h5>
                  <p>“A day to honor the love, sacrifice, and endless support of our parents — our first teachers, our forever heroes.”</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/ladies.jpg" class="memory-img" alt="Cultural Day">
                <div class="memory-content">
                  <h5>Cultural Day</h5>
                  <p>“We danced, laughed, and celebrated who we are — one family, many stories.”</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/picnic.jpg" class="memory-img" alt="Outing">
                <div class="memory-content">
                  <h5>Outing & Hiking</h5>
                  <p>“That day wasn’t just a picnic; it was freedom, laughter, and friendship all in one.”</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/farewell.jpg" class="memory-img" alt="Farewell">
                <div class="memory-content">
                  <h5>Farewell Ceremony</h5>
                  <p>“Tears, laughter, and gratitude filled the hall. We left with hearts full of memories.”</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/classroom.jpg" class="memory-img" alt="Classroom">
                <div class="memory-content">
                  <h5>Classroom Fun</h5>
                  <p>“We learned, laughed, and even failed sometimes — but every day, we grew together.”</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/swimming.jpg" class="memory-img" alt="Swimming">
                <div class="memory-content">
                  <h5>Swimming Day</h5>
                  <p>“The splash of water and the laughter of friends — it was the coolest day under the sun.”</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/seminar.jpg" class="memory-img" alt="Seminar">
                <div class="memory-content">
                  <h5>Educational Seminar</h5>
                  <p>“We shared ideas, learned from mentors, and left inspired to dream bigger.”</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="memory-card">
                <img src="assets/food.jpg" class="memory-img" alt="Food Festival">
                <div class="memory-content">
                  <h5>Food Festival</h5>
                  <p>“From momos to noodles — the aroma, laughter, and joy filled every corner of our school grounds.”</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#memoryCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#memoryCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p class="mb-1">&copy; 2025 Ambassador Academy | All Rights Reserved</p>
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
