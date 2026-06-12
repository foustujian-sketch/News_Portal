@extends('layouts.frontend')

@section('title', 'About Us - Beautique')

@section('content')
    <div class="py-5 bg-light">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">About Beautique</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">"Discover Beauty, Share Confidence"</p>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/about/about-beautique.png') }}"
                        alt="About Beautique"
                        class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="mb-4">Our Story</h2>
                    <p class="lead mb-4">Beautique was founded with a simple yet powerful mission: to empower everyone to discover their unique beauty and share it with confidence.</p>
                    <p class="mb-4">In a world where beauty standards are constantly changing, we believe that real beauty comes from self-expression and knowledge. Our portal is dedicated to providing honest reviews, expert tips, and the latest news from the beauty industry.</p>
                    
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="fas fa-eye fa-fw"></i>
                                </div>
                                <h5 class="mb-0">Our Vision</h5>
                            </div>
                            <p class="small text-muted">To be the most trusted and inclusive beauty information portal in the world, inspiring millions to embrace their authentic selves.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="fas fa-bullseye fa-fw"></i>
                                </div>
                                <h5 class="mb-0">Our Mission</h5>
                            </div>
                            <p class="small text-muted">To provide high-quality, accessible, and diverse beauty content that helps our audience make informed decisions about products and trends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
