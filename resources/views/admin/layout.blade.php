<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Admin Panel - Ambassador Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f5f7;
      margin: 0;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      height: 100vh;
      background: #198754;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px 0;
    }

    .sidebar h4 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 12px 20px;
      border-radius: 6px;
      transition: all 0.3s;
    }

    .sidebar a:hover, .sidebar a.active {
      background: #157347;
    }

    .main-content {
      margin-left: 240px;
      padding: 25px;
    }

    .navbar {
      background: white;
      border-bottom: 1px solid #ddd;
      padding: 15px 25px;
    }

    .navbar h5 {
      color: #198754;
      font-weight: 600;
    }

    footer {
      text-align: center;
      padding: 15px;
      color: #777;
      margin-top: 40px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4><i class="bi bi-mortarboard"></i> Admin</h4>
    <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}"><i class="bi bi-house-door me-2"></i> Home</a>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-table me-2"></i> Applications</a>
    <a href="#"><i class="bi bi-person-lines-fill me-2"></i> Alumni</a>
    <a href="#"><i class="bi bi-chat-left-dots me-2"></i> Messages</a>
    <a href="{{ route('admin.logout') }}"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
  </div>

  <!-- Main -->
  <div class="main-content">
    <nav class="navbar d-flex justify-content-between align-items-center shadow-sm">
      <h5>@yield('title')</h5>
      <div class="d-flex align-items-center">
        <span class="me-3 text-secondary">Welcome, Admin</span>
        <img src="{{ asset('assets/school.jpg') }}" width="40" height="40" class="rounded-circle">
      </div>
    </nav>

    <div class="container-fluid mt-4">
      @yield('content')
    </div>

    <footer>&copy; 2025 Ambassador Academy | Admin Panel</footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
