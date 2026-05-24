<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body{
            background:#f5f7fb;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#111827;
            position:fixed;
            left:0;
            top:0;
            color:white;
            padding:20px;
        }

        .sidebar a{
            color:#d1d5db;
            text-decoration:none;
            display:block;
            padding:12px 15px;
            border-radius:10px;
            margin-bottom:10px;
            transition:.3s;
        }

        .sidebar a:hover{
            background:#1f2937;
            color:white;
        }

        .main-content{
            margin-left:250px;
            padding:20px;
        }

        .topbar{
            background:white;
            padding:15px 20px;
            border-radius:15px;
            margin-bottom:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .card{
            border:none;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <h3 class="fw-bold mb-4">
            Admin Panel
        </h3>

        <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-home me-2"></i>
            Dashboard
        </a>

        <a href="{{ route('admin.contacts.index') }}">
            <i class="fa fa-envelope me-2"></i>
            Pesan
        </a>

        <a href="{{ route('admin.quotations.index') }}">
            <i class="fa fa-file me-2"></i>
            Quotation
        </a>

        <a href="{{ route('admin.products.index') }}">
            <i class="fa fa-box me-2"></i>
            Produk
        </a>

        <a href="{{ route('admin.portfolios.index') }}">
            <i class="fa fa-image me-2"></i>
            Portfolio
        </a>

    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Topbar -->
        <div class="topbar d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                Dashboard Admin
            </h4>

            <div>
                <span class="badge bg-danger">
                    Admin
                </span>
            </div>

        </div>

        @yield('content')

    </div>

</body>
</html>