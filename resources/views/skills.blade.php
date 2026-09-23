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

    /* ================= SKILLS PAGE ================= */
    .skills-page {
        position: relative;
        overflow: hidden;
        padding: 140px 7% 80px 7%;
    }

    .skills-page::before {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: rgba(111, 222, 226, 0.14);
        filter: blur(90px);
        top: 80px;
        left: -100px;
    }

    .section-title {
        font-size: clamp(36px, 5vw, 52px);
        color: #17364d;
        font-weight: 850;
        letter-spacing: -2px;
    }

    .section-title span {
        color: #7656d4;
    }

    .section-subtitle {
        color: #71899a;
        font-size: 16px;
        margin-top: 10px;
        margin-bottom: 40px;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 30px;
        position: relative;
        z-index: 2;
    }

    .skill-card {
        padding: 30px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.78);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(146, 112, 214, 0.15);
        box-shadow: 0 20px 60px rgba(64, 139, 173, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .skill-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 25px 70px rgba(100, 74, 194, 0.15);
    }

    .skill-card h3 {
        color: #17364d;
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 750;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .skill-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .skill-item {
        padding: 12px 15px;
        border-radius: 14px;
        background: rgba(225, 246, 253, 0.65);
        border: 1px solid rgba(96, 178, 211, 0.15);
        color: #456a7e;
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: 0.3s ease;
    }

    .skill-item:hover {
        background: rgba(207, 239, 250, 0.9);
        color: #318ebd;
        transform: translateX(4px);
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
        <li><a href="{{ route('skills') }}" class="active">Skills</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('experience') }}">Experience & Education</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<!-- SKILLS SECTION -->
<section class="skills-page">
    <div class="container">

        <h1 class="section-title">
            My <span>Skills</span>
        </h1>

        <p class="section-subtitle">
            A comprehensive overview of the programming languages, frameworks, tools, and technologies I work with.
        </p>

        <div class="skills-grid">

            <!-- Frontend Card -->
            <div class="skill-card">
                <h3>💻 Frontend Development</h3>
                <div class="skill-list">
                    <div class="skill-item">HTML5 & CSS3</div>
                    <div class="skill-item">JavaScript</div>
                    <div class="skill-item">Responsive Web Design</div>
                    <div class="skill-item">UI/UX Prototyping (Figma / Canva)</div>
                </div>
            </div>

            <!-- Backend Card -->
            <div class="skill-card">
                <h3>⚡ Backend & Frameworks</h3>
                <div class="skill-list">
                    <div class="skill-item">PHP</div>
                    <div class="skill-item">Laravel Framework</div>
                    <div class="skill-item">CodeIgniter 4</div>
                    <div class="skill-item">Java Programming</div>
                </div>
            </div>

            <!-- Database & Tools Card -->
            <div class="skill-card">
                <h3>🗄️ Databases & Tools</h3>
                <div class="skill-list">
                    <div class="skill-item">MySQL / Database Management</div>
                    <div class="skill-item">Visual Studio Code</div>
                    <div class="skill-item">Git & Version Control</div>
                    <div class="skill-item">API Integration & QR Scanning</div>
                </div>
            </div>

            <!-- Hardware & Networking Card -->
            <div class="skill-card">
                <h3>🔌 Hardware & Networking</h3>
                <div class="skill-list">
                    <div class="skill-item">Arduino Programming & Sensors</div>
                    <div class="skill-item">Basic Electronics & Circuit Design</div>
                    <div class="skill-item">Computer Networking Basics</div>
                    <div class="skill-item">Hardware Troubleshooting</div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection