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

    /* ================= ABOUT PAGE ================= */
    .about-page {
        position: relative;
        overflow: hidden;
        padding: 140px 7% 80px 7%; /* Added top padding para hindi matakpan ng fixed navbar */
    }

    .about-page::before {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        background: rgba(100, 190, 222, 0.12);
        filter: blur(90px);
        right: -120px;
        top: 100px;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 45px;
        align-items: center;
        margin-top: 50px;
    }

    .about-text {
        color: #71899a;
        font-size: 16px;
        line-height: 1.9;
    }

    .about-text p {
        margin-bottom: 20px;
    }

    .about-card {
        padding: 35px;
        border-radius: 24px;
        background: rgba(83, 43, 43, 0.72);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(19, 81, 107, 0.2);
        box-shadow: 0 20px 60px rgba(64, 139, 173, 0.10);
    }

    .about-card h2 {
        color: #24475d;
        margin-bottom: 20px;
    }

    .skills {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 13px;
    }

    .skill {
        padding: 15px;
        border-radius: 14px;
        background: rgba(225,246,253,0.65);
        border: 1px solid rgba(96,178,211,0.15);
        color: #456a7e;
        font-weight: 600;
        transition: 0.3s ease;
    }

    .skill:hover {
        transform: translateY(-4px);
        background: rgba(207,239,250,0.9);
        color: #318ebd;
    }

    @media (max-width: 992px) {
        .nav-links {
            display: none;
        }
        .about-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- NAVIGATION BAR -->
<nav class="navbar">
    <a href="{{ route('home') }}" class="nav-brand">Kent<span>.</span></a>
    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="active">About</a></li>
        <li><a href="{{ route('skills') }}">Skills</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('experience') }}">Experience & Education</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<section class="about-page">

    <div class="container">

        <h1 class="section-title">
            About <span>Me</span>
        </h1>

        <p class="section-subtitle">
            Get to know me, my interests, and the skills
            I'm developing as an Information Technology student.
        </p>

        <div class="about-grid">

            <div class="about-text">

                <p>
                    Hello! I'm Kent, an Information Technology
                    student who is passionate about technology,
                    programming, and web development.
                </p>

                <p>
                    I enjoy learning how websites and systems work
                    and creating projects that allow me to improve
                    my technical and creative skills.
                </p>

                <p>
                    As I continue my journey in IT, I want to
                    develop my skills and become a professional
                    who can create useful and innovative solutions.
                </p>

            </div>

            <div class="about-card">

                <h2>
                    My Skills
                </h2>

                <div class="skills">

                    <div class="skill">
                        💻 HTML & CSS
                    </div>

                    <div class="skill">
                        ⚡ Laravel
                    </div>

                    <div class="skill">
                        🐘 PHP
                    </div>

                    <div class="skill">
                        ☕ Java
                    </div>

                    <div class="skill">
                        🗄️ Database
                    </div>

                    <div class="skill">
                        🌐 Networking
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection