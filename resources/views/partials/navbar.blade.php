<!-- Navbar -->
<style>
    .school-logo {
  width: 50px;       /* fixed width */
  height: 50px;      /* fixed height */
  object-fit: cover; /* makes sure it doesn’t stretch */
}
.offcanvas-body ul li a {
      text-decoration: none;
      color: #333;
      padding: 10px 15px;
      border-radius: 6px;
      display: block;
      transition: all 0.3s ease;
      font-weight: 500;
    }
    .offcanvas-body ul li a:hover {
      background-color: #198754;
      color: #fff;
      transform: translateX(5px);
    }
    .dropdown-menu .dropdown-item:hover {
      background-color: #198754;
      color: #fff;
    }
</style>
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container-fluid d-flex align-items-center">

    <!-- Sidebar Toggle (Menu Button) -->
    <button class="btn btn-outline-secondary me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuSidebar">
      ☰ Menu
    </button>

    <!-- Logo + School Name -->
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('assets/school.jpg') }}"
           alt="School Logo" 
           class="me-2 rounded-circle school-logo">
      <span class="fw-bold">Ambassador Academy</span>
    </a>

    <!-- Right Buttons -->
    <div class="d-flex ms-auto">
      <a href="{{ route('apply.form') }}" class="btn btn-primary me-2">Apply Now</a>
      <a href="{{ route('admin.login') }}" class="btn btn-outline-secondary me-2">Admin</a>
      <a href="#" class="btn btn-success">Login</a>
    </div>
  </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="menuSidebar">
    <div class="offcanvas-header">
      <!-- Logo inside Sidebar -->
      <h5 class="offcanvas-title d-flex align-items-center">
        <img src="assets/school.jpg"
             alt="Sidebar Logo" class="me-2 rounded-circle school-logo">
        Ambassador Academy
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled">
        <li><a href="{{ route('about') }}" class="d-block py-2">About Us</a></li>
        <li><a href="{{ route('services') }}" class="d-block py-2">Services</a></li>
        <li><a href="{{ route('contact') }}" class="d-block py-2">Contact Us</a></li>
        <li><a href="{{ route('voices') }}" class="d-block py-2">Voices</a></li>
        <li><a href="{{ route('gallery') }}" class="d-block py-2">Gallery</a></li>
        <li><a href="{{ route('alumni') }}" class="d-block py-2">Alumni</a></li>
        <li><a href="{{ route('eca') }}">ECA Activities</a></li>
        
        <!-- Dropdown for ECA -->
        <li class="dropdown">
          <a class="dropdown-toggle d-block py-2" href="#" id="ecaMenu" data-bs-toggle="dropdown" aria-expanded="false">
            ECA (Extra Co-Curricular Activities)
          </a>
          <ul class="dropdown-menu" aria-labelledby="ecaMenu">
            <li><a class="dropdown-item" href="{{ route('eca.taekwondo') }}">Taekwondo</a></li>
            <li><a class="dropdown-item" href="{{ route('eca.sports') }}">Sports</a></li>
            <li><a class="dropdown-item" href="{{ route ('eca.dance') }}">Dance</a></li>
            <li><a class="dropdown-item" href="{{ route ('eca.music') }}">Music</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
