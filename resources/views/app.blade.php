<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Travel Gallery')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1920');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .navbar {
            background: rgba(44, 62, 80, 0.95);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-left {
            display: flex;
            gap: 25px;
        }

        .nav-left a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
            padding: 8px 16px;
            border-radius: 4px;
        }

        .nav-left a:hover, .nav-left a.active {
            background: rgba(52, 152, 219, 0.3);
            color: #3498db;
        }

        .nav-center, .nav-right {
            color: white;
            font-size: 12px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .header h1 {
            font-size: 32px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 16px;
            opacity: 0.9;
        }

        .badge {
            display: inline-block;
            background: rgba(52, 152, 219, 0.8);
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 10px;
            }

            .nav-center, .nav-right {
                font-size: 10px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        </div>
        <div class="nav-center">2301010036 - HAURA FEBRIA HIDAYAH(HAURA)</div>
        <div class="nav-right">230100041 - SALEH HALID (SALEH)</div>
    </nav>

    @yield('content')

    @stack('scripts')
</body>
</html>
