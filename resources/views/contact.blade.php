@extends('layouts.frontend')

@section('title', 'Contact Us - Beautique')

@section('content')
    <div class="py-5 bg-light">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Get in Touch</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Have questions or want to collaborate? We'd love to hear from you!</p>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card border-0 shadow-sm p-4 h-100">
                        <h3 class="mb-4">Send us a Message</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Fauzia Doe">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="fauzia@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <select class="form-select">
                                    <option>General Inquiry</option>
                                    <option>Collaboration</option>
                                    <option>Product Review Request</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" placeholder="Your message here..."></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-lg rounded-pill px-5">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h3 class="mb-4">Contact Information</h3>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Our Office</h5>
                            <p class="text-muted mb-0">Beauty Tower, 12th Floor, Samarinda, Indonesia</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Email Us</h5>
                            <p class="text-muted mb-0">hello@beautique.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Call Us</h5>
                            <p class="text-muted mb-0">+62 8215 3124 3131</p>
                        </div>
                    </div>

                    <h3 class="mt-5 mb-4">Follow Us</h3>
                    <div class="social-links">
                        <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
