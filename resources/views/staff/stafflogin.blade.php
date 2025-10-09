<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Login | Ambassador Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(120deg, #eaf4f3, #d6ebe7);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Header */
    .navbar {
      background-color: #198754;
    }

    .navbar-brand img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      margin-right: 8px;
    }

    /* Login Section */
    .login-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 15px;
    }

    .login-container {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-container img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .login-container h3 {
      font-weight: 700;
      color: #198754;
      margin-bottom: 25px;
    }

    .form-control {
      border-radius: 6px;
      padding: 12px;
    }

    .btn-login {
      background-color: #198754;
      border: none;
      color: #fff;
      font-weight: 600;
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #157347;
    }

    .footer-links {
      text-align: center;
      margin-top: 20px;
      color: #777;
      font-size: 14px;
    }

    footer {
      background: #198754;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      font-size: 14px;
    }

    footer a {
      color: #fff;
      margin: 0 8px;
      text-decoration: none;
    }

    footer a:hover {
      color: #c9f1db;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <nav class="navbar navbar-dark shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        <img src="{{ asset('assets/school.jpg') }}" alt="School Logo">
        <span class="fw-bold fs-5 text-white">Ambassador Academy</span>
      </a>
    </div>
  </nav>

  <!-- Login Section -->
  <section class="login-section">
    <div class="login-container">
      <img src="{{ asset('assets/school.jpg') }}" alt="Staff Logo">
      <h3>Staff Login</h3>

      @if(session('error'))
        <div class="alert alert-danger py-2">{{ session('error') }}</div>
      @endif

      <form action="{{ route('staff.login.submit') }}" method="POST">
        @csrf
        <div class="mb-3 text-start">
          <label for="username" class="form-label fw-semibold">Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
        </div>

        <div class="mb-3 text-start">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn btn-login mt-2">Login</button>
      </form>

      <div class="footer-links mt-3">
        <p>Only authorized staff can access this dashboard.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Ambassador Academy | All Rights Reserved</p>
    <div>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
