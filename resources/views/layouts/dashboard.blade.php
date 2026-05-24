<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f5f6fa;
        }

        .sidebar{
            width: 250px;
            min-height: 100vh;
            background: #111827;
        }

        .sidebar a{
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a:hover{
            background: #1f2937;
        }

        .content{
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar">

        <h4 class="text-white p-3">
            Admin Panel
        </h4>

        <a href="{{ route('admin.dashboard') }}">
            Dashboard
        </a>

        <a href="{{ route('admin.contacts.index') }}">
            Pesan Masuk
        </a>

        <a href="{{ route('admin.quotations.index') }}">
            Quotation
        </a>

        <a href="{{ route('admin.products.index') }}">
            Produk
        </a>

        <a href="{{ route('admin.portfolios.index') }}">
            Portfolio
        </a>

    </div>

    <!-- Content -->
    <div class="content">

        @yield('content')

    </div>

</div>

</body>
</html>