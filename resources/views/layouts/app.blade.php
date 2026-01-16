<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capital System Digital - Bespoke Software Solutions</title>
    <meta name="description" content="Custom software development services tailored to your business needs. High-quality web and mobile applications.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary: #00f2ff;
            --primary-dark: #0088cc;
            --bg-dark: #020617;
            --bg-card: rgba(30, 41, 59, 0.5);
            --text-light: #f8fafc;
            --text-dim: #94a3b8;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            margin: 0;
            overflow-x: hidden;
        }

        h1, h2, h3, .font-heading {
            font-family: 'Outfit', sans-serif;
        }

        .glass {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
        }

        .gradient-text {
            background: linear-gradient(135deg, #fff 0%, var(--primary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--bg-dark);
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.4);
        }

        .nav-link {
            color: var(--text-dim);
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--primary);
        }
    </style>
</head>
<body class="antialiased">
    <div id="app">
        <header class="fixed top-0 left-0 right-0 z-50 p-6">
            <nav class="max-w-7xl mx-auto glass px-8 py-4 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-cyan-400 rounded-lg flex items-center justify-center transform rotate-12">
                        <span class="text-slate-900 font-bold">C</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight">CAPITAL SYSTEM <span class="text-cyan-400">DIGITAL</span></span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link">Home</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </div>

                <div>
                    <a href="#contact" class="btn-primary">Let's Talk</a>
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="py-12 border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-6 text-center text-slate-500">
                <p>&copy; {{ date('Y') }} Capital System Digital. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</body>
</html>
