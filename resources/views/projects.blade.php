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

    /* ================= PROJECTS PAGE ================= */
    .projects-page {
        position: relative;
        overflow: hidden;
        padding: 140px 7% 80px 7%;
    }

    .projects-page::before {
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

    .projects-grid {
        display: grid;
        grid-template-columns: 1fr;
        max-width: 650px;
        margin: 50px auto 0 auto;
    }

    .project-card {
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 23px;
        background: rgba(255,255,255,0.75);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(102,181,212,0.18);
        box-shadow: 0 18px 50px rgba(70, 139, 169, 0.09);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }

    .project-card:hover {
        transform: translateY(-8px);
        border-color: rgba(82,170,208,0.40);
        box-shadow: 0 25px 60px rgba(61, 136, 171, 0.15);
    }

    .project-image-container {
        width: 100%;
        height: 260px;
        border-radius: 14px;
        overflow: hidden;
        margin-bottom: 20px;
        border: 1px solid rgba(102,181,212,0.2);
    }

    .project-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .project-number {
        color: #59add0;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 12px;
    }

    .project-card h2 {
        color: #23455a;
        font-size: 23px;
        margin-bottom: 14px;
    }

    .project-card p {
        color: #71899a;
        line-height: 1.75;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .project-links {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 15px;
    }

    .btn-project {
        padding: 10px 18px;
        border-radius: 12px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .btn-github {
        background: #17364d;
        color: #fff;
    }

    .btn-github:hover {
        background: #23455a;
    }

    .btn-download {
        background: #e8f7fc;
        color: #438fb6;
        border: 1px solid rgba(67, 143, 182, 0.2);
    }

    .btn-download:hover {
        background: #d4f1fa;
    }

    .project-tag {
        display: inline-block;
        width: fit-content;
        margin-bottom: 15px;
        padding: 6px 12px;
        border-radius: 20px;
        background: #e8f7fc;
        color: #438fb6;
        font-size: 11px;
        font-weight: 700;
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
        <li><a href="{{ route('projects') }}" class="active">Projects</a></li>
        <li><a href="{{ route('experience') }}">Experience & Education</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<section class="projects-page">

    <div class="container">

        <h1 class="section-title">
            My <span>Projects</span>
        </h1>

        <p class="section-subtitle">
            A featured networking project showcasing configuration, setup, and implementation skills.
        </p>

        <div class="projects-grid">

            <div class="project-card">
                <div>
                    <!-- Siguraduhing na-save mo ang screenshot bilang router-project.jpg sa public/images/ -->
                    <div class="project-image-container">
                        <img src="{{ asset('images/router-project.jpg') }}" alt="Networking Router Project">
                    </div>

                    <div class="project-number">
                        FEATURED PROJECT
                    </div>

                    <h2>
                        Networking Router Configuration
                    </h2>

                    <span class="project-tag">
                        Networking • Cisco Packet Tracer • IT Infrastructure
                    </span>

                    <p>
                        A comprehensive computer networking project focusing on router configuration, network topology design, IP addressing, and connectivity implementation.
                    </p>
                </div>

                <div class="project-links">
                    <!-- GitHub Repository Link -->
                    <a href="https://github.com/concaniris15/networking-router-setup" target="_blank" class="btn-project btn-github">
                        GitHub Link ↗
                    </a>

                    <!-- Direct Raw Download Link para sa iyong .pkt file -->
                    <a href="https://raw.githubusercontent.com/concaniris15/networking-router-setup/main/router%20(2).pkt" target="_blank" class="btn-project btn-download">
                        View Raw / Download 📥
                    </a>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection