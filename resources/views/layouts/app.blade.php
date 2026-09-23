<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

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

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #f8fcff 0%,
                    #eef8ff 50%,
                    #f7fbff 100%
                );

            color: #163047;

            min-height: 100vh;

        }


        /* ================= NAVBAR ================= */

        .navbar {

            position: sticky;

            top: 0;

            z-index: 1000;

            width: 100%;

            background:
                rgba(255, 255, 255, 0.82);

            backdrop-filter: blur(18px);

            -webkit-backdrop-filter: blur(18px);

            border-bottom:
                1px solid
                rgba(125, 190, 225, 0.20);

        }


        .nav-container {

            max-width: 1200px;

            margin: auto;

            padding:
                18px 35px;

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

        }


        .nav-links a {

            text-decoration: none;

            color: #557084;

            font-size: 14px;

            font-weight: 600;

            padding:
                9px 15px;

            border-radius: 10px;

            transition:
                all 0.3s ease;

        }


        .nav-links a:hover {

            color: #318ebd;

            background:
                rgba(92, 180, 220, 0.10);

        }


        .nav-links a.active {

            color: #318ebd;

            background:
                rgba(92, 180, 220, 0.12);

        }


        /* ================= CONTAINER ================= */

        .container {

            max-width: 1150px;

            margin: auto;

            padding:
                70px 35px;

        }


        /* ================= TITLES ================= */

        .section-title {

            font-size:
                clamp(40px, 6vw, 64px);

            font-weight: 800;

            letter-spacing: -2px;

            color: #17364d;

            line-height: 1.1;

        }


        .section-title span {

            color: #55afd4;

        }


        .section-subtitle {

            margin-top: 15px;

            max-width: 650px;

            color: #71899a;

            font-size: 16px;

            line-height: 1.8;

        }


        /* ================= BUTTONS ================= */

        .btn {

            display: inline-block;

            padding:
                13px 22px;

            border-radius: 12px;

            text-decoration: none;

            background:
                linear-gradient(
                    135deg,
                    #63b9dc,
                    #439bc5
                );

            color: white;

            font-size: 14px;

            font-weight: 700;

            box-shadow:
                0 10px 25px
                rgba(67, 155, 197, 0.22);

            transition:
                all 0.3s ease;

        }


        .btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 15px 30px
                rgba(67, 155, 197, 0.28);

        }


        .btn-outline {

            display: inline-block;

            padding:
                12px 21px;

            border-radius: 12px;

            text-decoration: none;

            color: #438fb6;

            background:
                rgba(255,255,255,0.65);

            border:
                1px solid
                rgba(83, 166, 207, 0.30);

            font-size: 14px;

            font-weight: 700;

            transition:
                all 0.3s ease;

        }


        .btn-outline:hover {

            background:
                rgba(91, 177, 216, 0.10);

            transform:
                translateY(-3px);

        }


        /* ================= FOOTER ================= */

        .footer {

            text-align: center;

            padding:
                25px;

            color: #8ba0ae;

            font-size: 13px;

            border-top:
                1px solid
                rgba(125, 190, 225, 0.15);

            background:
                rgba(255,255,255,0.45);

        }


        /* ================= MOBILE ================= */

        @media (max-width: 700px) {

            .nav-container {

                flex-direction: column;

                gap: 15px;

                padding:
                    18px 20px;

            }


            .nav-links {

                flex-wrap: wrap;

                justify-content: center;

            }


            .container {

                padding:
                    50px 20px;

            }

        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="nav-container">

            <a
                href="{{ route('home') }}"
                class="logo"
            >
                Kent<span>.</span>
            </a>


            <ul class="nav-links">

                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li>
                    <a href="{{ route('projects') }}">
                        Projects
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </nav>


    <!-- PAGE CONTENT -->

    @yield('content')


    <!-- FOOTER -->

    <footer class="footer">

        © {{ date('Y') }} Kent Portfolio.
        Built with Laravel.

    </footer>


</body>

</html>