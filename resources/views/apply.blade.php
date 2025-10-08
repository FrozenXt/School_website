<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - Ambassador Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
            body {
            background: url('{{ asset('assets/kids.jpg') }}') no-repeat center center/cover;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

        .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .form-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 750px;
            margin: 80px auto; /* space below navbar */
        }

        .form-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .form-card h5 {
            color: #0d6efd;
            border-left: 4px solid #0d6efd;
            padding-left: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-control, .form-select, textarea {
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus, .form-select:focus, textarea:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 6px rgba(13, 110, 253, 0.4);
        }

        .btn-primary {
            background: #0d6efd;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: #0b5ed7;
            transform: scale(1.02);
        }

        .header-title {
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin-bottom: 25px;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.6);
        }

        /* Navbar */
        .navbar-brand img {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container-fluid">
            <!-- Logo + School Name -->
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="https://scontent.fluh1-3.fna.fbcdn.net/v/t39.30808-6/466739029_973080638168855_8284356080744771225_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=3O7cvHj1FcAQ7kNvwEe4757&_nc_oc=AdkU_OMseOlk6q_MT4AoCRLg_IxivTN9LVIHqN9U9TQbf-Agqf9RAA_oINkGw6jnBDMpZ2yw9nd2jnQrjku6QeZc&_nc_zt=23&_nc_ht=scontent.fluh1-3.fna&_nc_gid=WgR1IyU_kcdm5AgDoS12Dw&oh=00_Afdsr9QyxHpSc6VTGpz-tvjOR-U82XXuKxifzoVMPcNvRg&oe=68E61308" 
                     alt="School Logo" class="me-2 rounded-circle">
                <span class="fw-bold">Ambassador Academy</span>
            </a>

            <!-- Nav links -->
            <div class="d-flex ms-auto">
                <a href="{{ route('apply.form') }}" class="btn btn-primary me-2">Apply Now</a>
                <a href="{{ route('admin.login') }}" class="btn btn-outline-secondary me-2">Admin</a>
                <a href="#" class="btn btn-success">Login</a>
            </div>
        </div>
    </nav>

    <!-- Dark overlay on background -->
    <div class="overlay"></div>

    <!-- Form -->
    <div class="form-container">
        <h2 class="header-title">Apply Now - Ambassador Academy</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Application Form -->
        <form action="{{ route('apply.submit') }}" method="POST" class="form-card">
            @csrf

            <!-- Student Info -->
            <h5>Student Information</h5>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter student's full name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Class Applying For</label>
                <select name="class" class="form-select" required>
                    <option value="">Select Class</option>
                    <option value="Nursery">Nursery</option>
                    <option value="Primary">Primary</option>
                    <option value="Secondary">Secondary</option>
                    <option value="Higher Secondary">Higher Secondary</option>
                </select>
            </div>

            <!-- Parent Info -->
            <h5>Parent / Guardian Information</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father's Name</label>
                    <input type="text" name="father_name" class="form-control" placeholder="Enter father's name" value="{{ old('father_name') }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Father's Contact Number</label>
                    <input type="text" name="father_number" class="form-control" placeholder="Enter father's phone" value="{{ old('father_number') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother's Name</label>
                    <input type="text" name="mother_name" class="form-control" placeholder="Enter mother's name" value="{{ old('mother_name') }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Mother's Contact Number</label>
                    <input type="text" name="mother_number" class="form-control" placeholder="Enter mother's phone" value="{{ old('mother_number') }}">
                </div>
            </div>

            <!-- Address Info -->
            <h5>Address Information</h5>
            <div class="mb-3">
                <label class="form-label">Temporary Address</label>
                <textarea name="temp_address" class="form-control" rows="2" placeholder="Enter temporary address">{{ old('temp_address') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Permanent Address</label>
                <textarea name="perm_address" class="form-control" rows="2" placeholder="Enter permanent address">{{ old('perm_address') }}</textarea>
            </div>

            <!-- Message -->
            <div class="mb-3">
                <label class="form-label">Message (Optional)</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Tell us more...">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit Application</button>
        </form>
    </div>

</body>
</html>
