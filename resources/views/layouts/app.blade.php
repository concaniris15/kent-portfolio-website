<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kent Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #f8fcff 0%, #eef8ff 50%, #f7fbff 100%);
            color: #163047;
            min-height: 100vh;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(125, 190, 225, 0.20);
        }

        .nav-container {
            max-width: 1200px;
            margin: auto;
            padding: 18px 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            text-decoration: none;
            color: #163047;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: #55add3;
        }

        .nav-links {
            display: flex;
            gap: 8px;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #557084;
            font-size: 14px;
            font-weight: 600;
            padding: 9px 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #318ebd;
            background: rgba(92, 180, 220, 0.12);
        }

        /* Hamburger Menu Button */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
            background: none;
            border: none;
            padding: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #163047;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        /* ================= CONTAINER ================= */
        .container {
            max-width: 1150px;
            margin: auto;
            padding: 70px 35px;
        }

        /* ================= FOOTER ================= */
        .footer {
            text-align: center;
            padding: 25px;
            color: #8ba0ae;
            font-size: 13px;
            border-top: 1px solid rgba(125, 190, 225, 0.15);
            background: rgba(255,255,255,0.45);
        }

        /* ================= MOBILE RESPONSIVE ================= */
        @media (max-width: 850px) {
            .hamburger {
                display: flex;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(18px);
                border-bottom: 1px solid rgba(125, 190, 225, 0.20);
                padding: 20px 0;
                box-shadow: 0 10px 20px rgba(0,0,0,0.05);
                text-align: center;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                width: 100%;
            }

            .nav-links a {
                display: block;
                padding: 12px;
                font-size: 15px;
            }

            .nav-container {
                padding: 15px 20px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="logo">
                Kent<span>.</span>
            </a>

            <!-- Hamburger Button para sa Mobile -->
            <button class="hamburger" id="hamburger" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-links" id="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('skills') }}">Skills</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li><a href="{{ route('experience') }}">Experience & Education</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer class="footer">
        © {{ date('Y') }} Kent Portfolio. Built with Laravel.
    </footer>

    <!-- JavaScript para umandar ang Hamburger Menu -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>

</body>

</html>