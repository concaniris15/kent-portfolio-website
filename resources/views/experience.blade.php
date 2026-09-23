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

    /* ================= EXPERIENCE & EDUCATION PAGE ================= */
    .experience-page {
        position: relative;
        overflow: hidden;
        padding: 140px 7% 80px 7%;
    }

    .experience-page::before {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: rgba(100, 190, 225, 0.12);
        filter: blur(100px);
        left: -180px;
        top: 150px;
    }

    .timeline-container {
        max-width: 800px;
        margin: 50px auto 0 auto;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .timeline-card {
        padding: 30px;
        border-radius: 23px;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(102, 181, 212, 0.18);
        box-shadow: 0 18px 50px rgba(70, 139, 169, 0.09);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }

    .timeline-card:hover {
        transform: translateY(-5px);
        border-color: rgba(82, 170, 208, 0.40);
        box-shadow: 0 25px 60px rgba(61, 136, 171, 0.15);
    }

    .timeline-year {
        color: #59add0;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .timeline-card h2 {
        color: #23455a;
        font-size: 21px;
        margin-bottom: 8px;
    }

    .timeline-company {
        font-size: 14px;
        font-weight: 700;
        color: #7656d4;
        margin-bottom: 15px;
    }

    .timeline-card p {
        color: #71899a;
        line-height: 1.75;
        font-size: 14px;
    }

    @media (max-width: 992px) {
        .nav-links {
            display: none;
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
        <li><a href="{{ route('experience') }}" class="active">Experience & Education</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<section class="experience-page">

    <div class="container">

        <h1 class="section-title">
            Experience & <span>Education</span>
        </h1>

        <p class="section-subtitle">
            A summary of my academic background and milestones in Information Technology.
        </p>

        <div class="timeline-container">

            <div class="timeline-card">
                <div class="timeline-year">2023 - Present</div>
                <h2>Bachelor of Science in Information Technology</h2>
                <div class="timeline-company">College / University Student</div>
                <p>
                    Currently pursuing a degree in Information Technology, focusing on full-stack web application development, database systems, UI/UX design, and computer networking.
                </p>
            </div>

            <div class="timeline-card">
                <div class="timeline-year">2025 - 2026</div>
                <h2>IT Student Projects & Systems Development</h2>
                <div class="timeline-company">Academic & Practical Hands-on Work</div>
                <p>
                    Developed various systems including product authenticity verification platforms (VerifyGuard), task management dashboards using CodeIgniter 4 and PHP, and computer networking infrastructure layouts using Cisco Packet Tracer.
                </p>
            </div>

            <div class="timeline-card">
                <div class="timeline-year">Until 2023</div>
                <h2>Senior High School (TVL - ICT Track)</h2>
                <div class="timeline-company">Secondary Education</div>
                <p>
                    Completed foundational studies in Information and Communications Technology, building early technical skills in computer systems, basic troubleshooting, and programming concepts.
                </p>
            </div>

        </div>

    </div>

</section>

@endsection