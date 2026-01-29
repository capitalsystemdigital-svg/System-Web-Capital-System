<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>💻CAPITAL SYSTEM DIGITAL | Ingeniería de Software & Soluciones Digitales</title>
    <meta name="description" content="Desarrollo de software a medida, aplicaciones web y móviles. Transformamos tu negocio con tecnología de punta en Zacatecas y México.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary: #0F172A;
            --primary-accent: #2563EB;
            --bg-body: #F8FAFC;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--primary);
            overflow-x: hidden;
        }

        h1, h2, h3, .font-heading {
            font-family: 'Outfit', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #0F172A 0%, #2563EB 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 6px -1px rgba(15, 23, 42, 0.1), 0 2px 4px -1px rgba(15, 23, 42, 0.06);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(15, 23, 42, 0.2);
            background: #1e293b;
        }

        .nav-link {
            color: #475569;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            font-weight: 500;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-accent);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--primary-accent);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="antialiased selection:bg-blue-600 selection:text-white">
    <div id="app" class="relative">
        <header class="fixed top-0 left-0 right-0 z-50 p-4 md:p-6 transition-all duration-300">
            <nav class="max-w-7xl mx-auto glass-panel rounded-full px-6 py-3 flex items-center justify-between transition-all duration-300">
                <!-- Logo -->
                <div class="flex items-center space-x-3 shrink-0">
                    <img src="{{ asset('images/logo_cs.png') }}" alt="Capital System Logo" class="h-8 md:h-10 w-auto hover:scale-105 transition-transform">
                    <span class="text-lg md:text-xl font-bold tracking-tight text-slate-900 font-heading">CAPITAL SYSTEM DIGITAL</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link">Inicio</a>
                    <a href="#services" class="nav-link">Servicios</a>
                    <a href="#about" class="nav-link">Nosotros</a>
                    <a href="#contact" class="nav-link">Contacto</a>
                </div>

                <!-- Right Actions (Socials + CTA) -->
                <div class="hidden md:flex items-center gap-4">
                    <div class="flex items-center gap-2 border-r border-slate-200 pr-4 mr-1">
                         <a href="https://www.facebook.com/profile.php?id=61586483584994" target="_blank" class="text-slate-400 hover:text-blue-600 transition-colors">
                             <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                         </a>
                         <a href="https://www.instagram.com/capital_system_digital/" target="_blank" class="text-slate-400 hover:text-pink-600 transition-colors">
                             <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2Zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5ZM12 7a5 5 0 110 10 5 5 0 010-10Zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7ZM18 4.75a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5Z"/></svg>
                         </a>
                    </div>
                    <a href="https://wa.me/5215661885745?text=Hola%2C%20quisiera%20cotizar%20un%20proyecto." target="_blank" class="flex items-center gap-2 bg-[#25D366] text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-[#128C7E] transition-colors shadow-lg shadow-green-500/20 hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.466c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Cotizar Ahora</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-slate-700 hover:text-blue-600 focus:outline-none p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </nav>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden absolute top-20 left-4 right-4 bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-slate-100 p-6 md:hidden flex-col gap-4 animate-on-scroll">
                <a href="#home" class="mobile-nav-link text-lg font-medium text-slate-700 hover:text-blue-600 py-2 border-b border-slate-100">Inicio</a>
                <a href="#services" class="mobile-nav-link text-lg font-medium text-slate-700 hover:text-blue-600 py-2 border-b border-slate-100">Servicios</a>
                <a href="#about" class="mobile-nav-link text-lg font-medium text-slate-700 hover:text-blue-600 py-2 border-b border-slate-100">Nosotros</a>
                <a href="#contact" class="mobile-nav-link text-lg font-medium text-slate-700 hover:text-blue-600 py-2">Contacto</a>
                <div class="mt-4 pt-4 border-t border-slate-100 flex flex-col gap-3">
                    <a href="https://wa.me/5215661885745" target="_blank" class="w-full text-center bg-[#25D366] text-white rounded-xl py-3 font-bold shadow-lg shadow-green-600/20 hover:bg-[#128C7E] transition-colors flex items-center justify-center gap-2">
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.466c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        WhatsApp Directo
                    </a>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="py-12 border-t border-slate-200 bg-white mt-auto">
            <div class="max-w-7xl mx-auto px-6 text-center text-slate-500 text-sm">
                <p>&copy; {{ date('Y') }} Capital System Digital. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</body>
</html>
