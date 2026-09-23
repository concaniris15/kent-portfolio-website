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

    /* Push hero down so it doesn't hide behind fixed nav */
    .hero {
        position: relative;
        min-height: 88vh;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
        padding: 140px 7% 60px 7%; /* Added top padding for navbar */
        overflow: hidden;
    }

    /* SOFT BACKGROUND */
    .hero::before {
        content: "";
        position: absolute;
        width: 450px;
        height: 450px;
        border-radius: 50%;
        background: rgba(111, 222, 226, 0.14);
        filter: blur(90px);
        top: -180px;
        right: -100px;
    }

    .hero::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(157, 213, 237, 0.20);
        filter: blur(80px);
        bottom: -120px;
        left: -80px;
    }

    .hero-text {
        max-width: 620px;
        position: relative;
        z-index: 2;
    }

    .welcome {
        display: inline-block;
        padding: 9px 15px;
        border-radius: 30px;
        background: rgba(40, 17, 103, 0.1);
        border: 1px solid rgba(91, 178, 216, 0.20);
        color: #438fb6;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 22px;
    }

    .hero h1 {
        font-size: clamp(48px, 7vw, 82px);
        line-height: 1;
        letter-spacing: -4px;
        color: #17364d;
        font-weight: 850;
    }

    .hero h1 .name {
        display: block;
        color: #7656d4;
    }

    .hero-description {
        max-width: 570px;
        margin-top: 28px;
        color: #71899a;
        font-size: 17px;
        line-height: 1.85;
    }

    .hero-description strong {
        color: #443575;
    }

    .hero-buttons {
        display: flex;
        gap: 13px;
        flex-wrap: wrap;
        margin-top: 32px;
    }

    /* ================= PROFILE ================= */
    .profile-area {
        position: relative;
        width: 410px;
        height: 410px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        z-index: 2;
    }

    .profile-backdrop {
        position: absolute;
        width: 360px;
        height: 360px;
        border-radius: 50%;
        background: linear-gradient(135deg, #c4bdf9, #fde9e9);
        box-shadow: 0 25px 70px rgba(100, 74, 194, 0.18);
    }

    .profile-image {
        position: relative;
        z-index: 3;
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 50%;
        border: 8px solid rgba(255, 255, 255, 0.95);
        box-shadow: 0 20px 60px rgba(67, 142, 178, 0.22);
        animation: floating 4s ease-in-out infinite;
    }

    /* DECORATIONS */
    .decor {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.78);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(146, 112, 214, 0.2);
        box-shadow: 0 12px 35px rgba(50, 120, 155, 0.12);
        font-size: 22px;
    }

    .decor-one {
        top: 30px;
        right: 5px;
    }

    .decor-two {
        bottom: 40px;
        left: 0;
    }

    .decor-three {
        top: 145px;
        left: -15px;
    }

    @keyframes floating {
        0% { transform: translateY(0); }
        50% { transform: translateY(-9px); }
        100% { transform: translateY(0); }
    }

    @media (max-width: 992px) {
        .nav-links {
            display: none; /* You can implement a mobile hamburger menu here if needed */
        }
        
        .hero {
            flex-direction: column-reverse;
            text-align: center;
            padding: 120px 6% 60px 6%;
        }

        .hero-description {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            justify-content: center;
        }

        .profile-area {
            width: 320px;
            height: 320px;
        }

        .profile-backdrop {
            width: 280px;
            height: 280px;
        }

        .profile-image {
            width: 235px;
            height: 235px;
        }
    }
</style>

<!-- NAVIGATION BAR -->
<nav class="navbar">
    <a href="{{ route('home') }}" class="nav-brand">Kent<span>.</span></a>
    <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="active">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('skills') }}">Skills</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('experience') }}">Experience & Education</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<!-- HERO SECTION -->
<section class="hero">

    <div class="hero-text">

        <div class="welcome">
            ✦ Welcome to my portfolio
        </div>

        <h1>
            Hello, I'm
            <span class="name">
                Kent Abella
            </span>
        </h1>

        <p class="hero-description">
            I'm a passionate
            <strong>Information Technology student</strong>
            who enjoys exploring technology, building websites,
            learning new skills, and turning creative ideas into
            meaningful digital projects.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('projects') }}" class="btn">
                Explore My Projects →
            </a>

            <a href="{{ route('about') }}" class="btn-outline">
                More About Me
            </a>
        </div>

    </div>

    <div class="profile-area">

        <div class="profile-backdrop"></div>

        <img
            src="{{ asset('images/profile.jpg') }}"
            alt="Kent Profile"
            class="profile-image"
        >

        <div class="decor decor-one">
            💻
        </div>

        <div class="decor decor-two">
            ⚡
        </div>

        <div class="decor decor-three">
            ✦
        </div>

    </div>

</section>

@endsection