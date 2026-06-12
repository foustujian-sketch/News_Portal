<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beautique - Discover Beauty, Share Confidence')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF5FA2;
            --secondary-color: #FFC2D9;
            --bg-color: #FFFFFF;
            --light-gray: #F5F5F5;
            --text-color: #222222;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
            overflow-x: hidden;
        }
        h1, h2, h3, .navbar-brand {
            font-family: 'Playfair Display', serif;
        }
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid var(--light-gray);
            padding: 1rem 0;
            transition: all 0.4s ease;
        }
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 0.5rem 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .navbar-brand {
            font-size: 2.5rem;
            color: var(--primary-color) !important;
            font-weight: 700;
            transition: all 0.4s ease;
        }
        .navbar.scrolled .navbar-brand {
            font-size: 2rem;
        }
        .navbar.scrolled .navbar-brand img {
            height: 60px !important;
        }
        .nav-link {
            font-weight: 500;
            color: var(--text-color) !important;
            margin: 0 10px;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
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
        .badge.bg-light.text-primary {
            background-color: var(--secondary-color) !important;
            color: var(--primary-color) !important;
        }
        .footer {
            background-color: var(--light-gray);
            padding: 4rem 0 2rem;
            margin-top: 4rem;
        }
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1rem;
            display: block;
        }
        .footer a {
            color: var(--text-color);
            text-decoration: none;
            transition: 0.3s;
        }
        .footer a:hover {
            color: var(--primary-color);
        }
        .social-links a {
            font-size: 1.2rem;
            margin-right: 15px;
        }
        .card {
            border: none;
            transition: 0.3s;
            margin-bottom: 2rem;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .category-badge {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
        }
        .article-title {
            text-decoration: none;
            color: var(--text-color);
            transition: 0.3s;
        }
        .article-title:hover {
            color: var(--primary-color);
        }
        .article-thumbnail {
            width: 100%;
            height: 280px;
            object-fit: cover;
            object-position: center;
            border-radius: inherit;
            display: block;
        }
        .article-detail-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 16px;
        }

        /* Pagination Styling */
        .pagination {
            gap: 5px;
        }
        .pagination .page-item .page-link {
            color: var(--text-color);
            border-radius: 50px;
            padding: 8px 16px;
            border-color: var(--light-gray);
            transition: 0.3s;
        }
        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
        }
        .pagination .page-item .page-link:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--primary-color);
        }
        .pagination .page-item.disabled .page-link {
            background-color: #fff;
            color: #ccc;
        }

        /* Breadcrumb Styling */
        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
        }
        .breadcrumb-item a:hover {
            color: #e54b8e;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo/beautique-logo.png') }}" alt="Beautique Logo" style="height: 75px; width: auto;" class="me-2">
                <span>Beautique</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('articles.*') ? 'active' : '' }}" href="{{ route('articles.index') }}">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <form action="{{ route('articles.index') }}" method="GET" class="me-3 d-none d-lg-block">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control form-control-sm" placeholder="Search articles...">
                            <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm rounded-pill px-3">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <span class="footer-logo">Beautique</span>
                    <p class="text-muted">"Discover Beauty, Share Confidence" - Your ultimate destination for beauty news, trends, and reviews.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('articles.index') }}">Articles</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-5 mb-4">
                    <h5 class="mb-3">Categories</h5>
                    <ul class="list-unstyled row g-2">
                        @foreach(\App\Models\Category::take(6)->get() as $cat)
                            <li class="col-6"><a href="{{ route('categories.show', $cat->slug) }}">{{ $cat->name }}</a></li>
                        @endforeach
                        <li class="col-12"><a href="{{ route('categories.index') }}">View All Categories</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 text-muted">
            <div class="text-center small text-muted">
                &copy; {{ date('Y') }} Beautique. All rights reserved.
            </div>
        </div>
    </footer>

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
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
