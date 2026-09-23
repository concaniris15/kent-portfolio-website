@extends('layouts.app')

@section('content')

<style>
    /* ================= NAVIGATION ================= */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 7%;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(146, 112, 214, 0.1);
        z-index: 1000;
    }

    .nav-brand {
        font-size: 20px;
        font-weight: 850;
        color: #17364d;
        text-decoration: none;
    }

    .nav-brand span {
        color: #7656d4;
    }

    .nav-links {
        display: flex;
        gap: 30px;
        list-style: none;
        align-items: center;
        margin: 0;
    }

    .nav-links a {
        text-decoration: none;
        color: #71899a;
        font-size: 15px;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .nav-links a:hover,
    .nav-links a.active {
        color: #7656d4;
    }

    /* ================= CONTACT PAGE ================= */
    .contact-page {
        position: relative;
        overflow: hidden;
        padding: 140px 7% 80px 7%;
    }

    .contact-page::before {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: rgba(103, 192, 225, 0.12);
        filter: blur(100px);
        right: -150px;
        top: 100px;
    }

    .contact-box {
        max-width: 800px;
        margin: 50px auto 0 auto;
        padding: 35px;
        border-radius: 23px;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(103, 181, 213, 0.20);
        box-shadow: 0 18px 50px rgba(65, 139, 170, 0.09);
        transition: all 0.35s ease;
    }

    .contact-box:hover {
        border-color: rgba(82, 170, 208, 0.40);
        box-shadow: 0 25px 60px rgba(61, 136, 171, 0.15);
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 20px 0;
        border-bottom: 1px solid rgba(90, 160, 190, 0.12);
    }

    .contact-item:last-child {
        border-bottom: none;
    }

    .contact-icon {
        width: 52px;
        height: 52px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        background: #e9f7fc;
        border: 1px solid rgba(91, 174, 211, 0.16);
        font-size: 21px;
    }

    .contact-item h3 {
        font-size: 13px;
        color: #8298a6;
        margin-bottom: 5px;
    }

    .contact-item p {
        color: #36576b;
        font-size: 16px;
        font-weight: 600;
        margin: 0;
    }

    @media (max-width: 992px) {
        .nav-links {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .contact-box {
            padding: 22px;
        }
    }
</style>

<!-- NAVIGATION BAR -->
<nav class="navbar">
    <a href="{{ route('home') }}" class="nav-brand">Kent<span>.</span></a>
    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('skills') }}">Skills</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('experience') }}">Experience & Education</a></li>
        <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
    </ul>
</nav>

<section class="contact-page">

    <div class="container">

        <h1 class="section-title">
            Contact <span>Me</span>
        </h1>

        <p class="section-subtitle">
            Have a project or just want to say hello? Feel free to reach out.
        </p>

        <div class="contact-box">

            <div class="contact-item">
                <div class="contact-icon">
                    📧
                </div>
                <div>
                    <h3>Email</h3>
                    <p>kent@example.com</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    📱
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+63 XXX XXX XXXX</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    📍
                </div>
                <div>
                    <h3>Location</h3>
                    <p>Philippines</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    💬
                </div>
                <div>
                    <h3>Facebook</h3>
                    <p>Kent</p>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection