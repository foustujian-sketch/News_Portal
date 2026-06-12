<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Beautique')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF5FA2;
            --sidebar-bg: #2c3e50;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        #wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: var(--sidebar-bg);
            color: #fff;
            transition: all 0.3s;
            min-height: 100vh;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #1a252f;
        }
        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }
        #sidebar ul li a {
            padding: 15px 20px;
            display: block;
            color: #bdc3c7;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        #sidebar ul li a:hover {
            color: #fff;
            background: var(--primary-color);
            padding-left: 30px;
        }
        #sidebar ul li a i {
            transition: all 0.3s ease;
        }
        #sidebar ul li a:hover i {
            transform: scale(1.2);
        }
        #sidebar ul li {
            animation: slideInSidebar 0.5s ease forwards;
            opacity: 0;
            transform: translateX(-20px);
        }
        @keyframes slideInSidebar {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        #sidebar ul li:nth-child(1) { animation-delay: 0.1s; }
        #sidebar ul li:nth-child(2) { animation-delay: 0.2s; }
        #sidebar ul li:nth-child(3) { animation-delay: 0.3s; }
        #sidebar ul li:nth-child(4) { animation-delay: 0.4s; }
        #sidebar ul li:nth-child(5) { animation-delay: 0.5s; }
        #sidebar ul li:nth-child(6) { animation-delay: 0.6s; }

        #sidebar ul li.active > a {
            color: #fff;
            background: var(--primary-color);
            padding-left: 30px;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-primary:hover {
            background-color: #e54b8e;
            border-color: #e54b8e;
        }
        .text-primary {
            color: var(--primary-color) !important;
        }
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        .border-primary {
            border-color: var(--primary-color) !important;
        }
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
        }
        #content {
            width: 100%;
            padding: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 20px;
        }
        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        /* Pagination Styling */
        .pagination {
            gap: 5px;
        }
        .pagination .page-item .page-link {
            color: #222;
            border-radius: 50px;
            padding: 8px 16px;
            border-color: #eee;
            transition: 0.3s;
        }
        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
        }
        .pagination .page-item .page-link:hover {
            background-color: #FFC2D9;
            border-color: #FFC2D9;
            color: var(--primary-color);
        }
        .pagination .page-item.disabled .page-link {
            background-color: #fff;
            color: #ccc;
        }

        /* Form Control Focus */
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(255, 95, 162, 0.25);
        }
    </style>
</head>
<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Beautique Admin</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                </li>
                <li class="{{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.articles.index') }}"><i class="fas fa-file-alt me-2"></i> Articles</a>
                </li>
                <li class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories.index') }}"><i class="fas fa-tags me-2"></i> Categories</a>
                </li>
                <li class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.users.index') }}"><i class="fas fa-users me-2"></i> Users</a>
                </li>
                <li>
                    <a href="{{ route('home') }}" target="_blank"><i class="fas fa-external-link-alt me-2"></i> View Site</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="confirmLogout(event)">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary d-md-none">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div class="ms-auto d-flex align-items-center">
                        <span class="me-3">Welcome, <strong>{{ auth()->user()->name }}</strong></span>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    @include('components.beautique-confirmation')

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50
        });

        document.getElementById('sidebarCollapse')?.addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });

        function confirmLogout(event) {
            event.preventDefault();
            const form = event.target.closest('form');
            showConfirmationModal(
                'Logout',
                'Are you sure you want to logout from Beautique Admin?',
                'Logout',
                'btn-primary',
                () => form.submit()
            );
        }

        function confirmDelete(event, title, message) {
            event.preventDefault();
            const form = event.target.closest('form');
            showConfirmationModal(
                title || 'Delete Confirmation',
                message || 'Are you sure you want to delete this item? This action cannot be undone.',
                'Delete',
                'btn-danger',
                () => form.submit()
            );
        }

        function confirmAction(event, title, message, confirmBtnText) {
            event.preventDefault();
            const form = event.target.closest('form');
            showConfirmationModal(
                title,
                message,
                confirmBtnText || 'Confirm',
                'btn-primary',
                () => form.submit()
            );
        }
    </script>
</body>
</html>
