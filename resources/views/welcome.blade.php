@extends('layouts.app')

@section('content')
    <div class="relative overflow-hidden">
        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center justify-center pt-24 px-6">
            <div class="absolute inset-0 z-0">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/10 blur-[120px] rounded-full"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 blur-[120px] rounded-full"></div>
            </div>

            <div class="max-w-5xl mx-auto text-center relative z-10">
                <span
                    class="inline-block py-1 px-3 glass text-cyan-400 text-xs font-semibold tracking-wider uppercase mb-6 animate-pulse">
                    Innovative Software Engineering
                </span>
                <h1 class="text-6xl md:text-8xl font-bold mb-8 leading-tight tracking-tighter">
                    <span class="gradient-text">Bespoke Software,</span><br>
                    <span class="text-white/90">Mastered.</span>
                </h1>
                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Transformamos sus ideas en soluciones digitales de alto impacto. Desarrollamos software a la medida con
                    las últimas tecnologías del mercado.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="#services" class="btn-primary px-10 py-4 text-lg">Explorar Servicios</a>
                    <a href="#portfolio" class="text-white font-medium hover:text-cyan-400 transition-colors">Ver Nuestros
                        Proyectos &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-24 px-6 relative">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Nuestros Servicios</h2>
                    <p class="text-slate-400 max-w-xl mx-auto">Ofrecemos un espectro completo de servicios de desarrollo
                        para impulsar su negocio.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="glass p-8 hover:border-cyan-500/50 transition-all group">
                        <div
                            class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-cyan-500/40 transition-colors">
                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Desarrollo Web</h3>
                        <p class="text-slate-400">Aplicaciones web escalables y robustas utilizando tecnologias modernas
                            como Laravel, Vue y React.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="glass p-8 hover:border-cyan-500/50 transition-all group">
                        <div
                            class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500/40 transition-colors">
                            <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Apps Móviles</h3>
                        <p class="text-slate-400">Experiencias nativas y multiplataforma que conectan con sus usuarios en
                            cualquier lugar.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="glass p-8 hover:border-cyan-500/50 transition-all group">
                        <div
                            class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-500/40 transition-colors">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Arquitectura Cloud</h3>
                        <p class="text-slate-400">Diseño e implementación de infraestructura en la nube optimizada para el
                            rendimiento y costo.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Carousel Section --}}
        @php
            $slides = [
                [
                    'src' => asset('images/slide-1.png'),
                    'title' => '',
                    'desc' => '',
                ],
                [
                    'src' => asset('images/slide-2.png'),
                    'title' => '',
                    'desc' => '',
                ],
                ['src' => asset('images/slide-3.png'), 'title' => '', 'desc' => ''],
            ];
        @endphp

        <x-carousel id="carousel-portfolio" :slides="$slides" title="Portafolio"
            subtitle="Algunos proyectos y piezas visuales de Capital System Digital." />


        <!-- Stats Section -->
        <section class="py-24 bg-slate-900/50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold text-white mb-2">50+</div>
                        <div class="text-slate-500 uppercase text-xs tracking-widest">Proyectos Entregados</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-white mb-2">12+</div>
                        <div class="text-slate-500 uppercase text-xs tracking-widest">Años de Experiencia</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-white mb-2">30+</div>
                        <div class="text-slate-500 uppercase text-xs tracking-widest">Clientes Felices</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-white mb-2">100%</div>
                        <div class="text-slate-500 uppercase text-xs tracking-widest">Compromiso</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About Section --}}
        <section id="about" class="py-24 px-6 relative">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div class="glass p-10 rounded-2xl">
                        <span
                            class="inline-block py-1 px-3 glass text-cyan-400 text-xs font-semibold tracking-wider uppercase mb-5">
                            Sobre nosotros
                        </span>

                        <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">
                            Construimos software con enfoque en negocio
                        </h2>

                        <p class="text-slate-400 leading-relaxed mb-6">
                            En Capital System Digital diseñamos y desarrollamos soluciones a la medida para automatizar
                            procesos,
                            mejorar la operación y acelerar el crecimiento de nuestros clientes. Priorizamos estabilidad,
                            seguridad
                            y una experiencia de usuario moderna.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                <div class="text-white font-bold mb-1">Misión</div>
                                <div class="text-slate-400 text-sm">Crear soluciones digitales que generen valor real.</div>
                            </div>
                            <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                <div class="text-white font-bold mb-1">Visión</div>
                                <div class="text-slate-400 text-sm">Ser aliados tecnológicos a largo plazo.</div>
                            </div>
                            <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                <div class="text-white font-bold mb-1">Valores</div>
                                <div class="text-slate-400 text-sm">Calidad, transparencia y compromiso.</div>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-10 rounded-2xl relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20">
                            <div class="absolute -top-10 -left-10 w-56 h-56 bg-cyan-500/20 blur-[80px] rounded-full"></div>
                            <div class="absolute -bottom-10 -right-10 w-56 h-56 bg-purple-500/20 blur-[80px] rounded-full">
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold mb-6 relative">Lo que nos diferencia</h3>

                        <div class="space-y-4 relative">
                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center shrink-0">
                                    <span class="text-cyan-400">✓</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Desarrollo a la medida</div>
                                    <div class="text-slate-400 text-sm">Nos adaptamos a tu proceso, no al revés.</div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center shrink-0">
                                    <span class="text-cyan-400">✓</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Entrega por etapas</div>
                                    <div class="text-slate-400 text-sm">Visibilidad de avances y mejoras continuas.</div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center shrink-0">
                                    <span class="text-cyan-400">✓</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Soporte y mantenimiento</div>
                                    <div class="text-slate-400 text-sm">Acompañamiento después de publicar.</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 relative">
                            <a href="#contact" class="btn-primary px-8 py-3 inline-flex">Hablemos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Socials Section --}}
        <section id="socials" class="py-20 px-6 relative">
            <div class="max-w-7xl mx-auto">
                <div class="glass p-10 rounded-2xl relative overflow-hidden">
                    <div class="absolute inset-0 opacity-20 pointer-events-none">
                        <div class="absolute -top-10 -left-10 w-64 h-64 bg-cyan-500/20 blur-[90px] rounded-full"></div>
                        <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-500/20 blur-[90px] rounded-full">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative">
                        <div>
                            <span
                                class="inline-block py-1 px-3 glass text-cyan-400 text-xs font-semibold tracking-wider uppercase mb-5">
                                Redes sociales
                            </span>

                            <h2 class="text-3xl md:text-4xl font-bold gradient-text mb-4">
                                Síguenos y conoce nuestro trabajo
                            </h2>

                            <p class="text-slate-400 leading-relaxed mb-6">
                                Publicamos avances de proyectos, tips de tecnología, lanzamientos y contenido útil para
                                negocios.
                                Si quieres ver nuestro estilo y resultados, aquí es el mejor lugar.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                    <div class="text-white font-bold mb-1">Contenido</div>
                                    <div class="text-slate-400 text-sm">Casos, demos, mejoras y UI.</div>
                                </div>
                                <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                    <div class="text-white font-bold mb-1">Tips</div>
                                    <div class="text-slate-400 text-sm">Seguridad, rendimiento, buenas prácticas.</div>
                                </div>
                                <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                    <div class="text-white font-bold mb-1">Soporte</div>
                                    <div class="text-slate-400 text-sm">Actualizaciones y noticias del servicio.</div>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-wrap gap-4">
                                <a href="#" class="btn-primary px-7 py-3">Enviar mensaje</a>
                                <a href="#portfolio" class="text-white/90 hover:text-cyan-400 transition">Ver portafolio
                                    →</a>
                            </div>
                        </div>

                        {{-- Cards redes --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                                <div class="flex items-center gap-4 mb-3">
                                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 flex items-center justify-center">
                                        {{-- Icono simple --}}
                                        <span class="text-cyan-400 font-bold">f</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Facebook</div>
                                        <div class="text-slate-400 text-sm">Noticias y comunidad</div>
                                    </div>
                                </div>
                                <div class="text-slate-300 text-sm">
                                    Publicaciones, contacto rápido y actualizaciones.
                                </div>
                            </a>

                            <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                                <div class="flex items-center gap-4 mb-3">
                                    <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center">
                                        <span class="text-purple-300 font-bold">ig</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Instagram</div>
                                        <div class="text-slate-400 text-sm">Diseño y contenido visual</div>
                                    </div>
                                </div>
                                <div class="text-slate-300 text-sm">
                                    Historias, reels y avances de proyectos.
                                </div>
                            </a>

                            <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                                <div class="flex items-center gap-4 mb-3">
                                    <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center">
                                        <span class="text-emerald-300 font-bold">in</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">LinkedIn</div>
                                        <div class="text-slate-400 text-sm">Proyectos y alianzas</div>
                                    </div>
                                </div>
                                <div class="text-slate-300 text-sm">
                                    Casos de éxito y perfil profesional.
                                </div>
                            </a>

                            <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                                <div class="flex items-center gap-4 mb-3">
                                    <div class="w-12 h-12 rounded-xl bg-slate-500/20 flex items-center justify-center">
                                        <span class="text-slate-200 font-bold">wa</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">WhatsApp</div>
                                        <div class="text-slate-400 text-sm">Atención directa</div>
                                    </div>
                                </div>
                                <div class="text-slate-300 text-sm">
                                    Cotizaciones y respuesta rápida.
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- Relleno “importante”: mini métricas --}}
                    <div class="mt-10 pt-8 border-t border-white/10 relative">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                            <div class="glass p-6 rounded-2xl">
                                <div class="text-3xl font-bold text-white">+Semanal</div>
                                <div class="text-slate-400 text-sm mt-1">Contenido nuevo</div>
                            </div>
                            <div class="glass p-6 rounded-2xl">
                                <div class="text-3xl font-bold text-white">24–48h</div>
                                <div class="text-slate-400 text-sm mt-1">Tiempo de respuesta</div>
                            </div>
                            <div class="glass p-6 rounded-2xl">
                                <div class="text-3xl font-bold text-white">100%</div>
                                <div class="text-slate-400 text-sm mt-1">Enfoque en calidad</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{-- Process Section --}}
        <section id="process" class="py-24 px-6 relative">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Cómo trabajamos</h2>
                    <p class="text-slate-400 max-w-xl mx-auto">Un proceso claro para entregar resultados medibles.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="glass p-7">
                        <div class="text-cyan-400 text-xs font-semibold tracking-widest uppercase mb-3">Paso 01</div>
                        <h3 class="text-xl font-bold mb-2">Descubrimiento</h3>
                        <p class="text-slate-400">Entendemos objetivos, usuarios y alcance para definir el plan.</p>
                    </div>

                    <div class="glass p-7">
                        <div class="text-cyan-400 text-xs font-semibold tracking-widest uppercase mb-3">Paso 02</div>
                        <h3 class="text-xl font-bold mb-2">Diseño</h3>
                        <p class="text-slate-400">Prototipos y UI enfocada en experiencia, marca y conversión.</p>
                    </div>

                    <div class="glass p-7">
                        <div class="text-cyan-400 text-xs font-semibold tracking-widest uppercase mb-3">Paso 03</div>
                        <h3 class="text-xl font-bold mb-2">Desarrollo</h3>
                        <p class="text-slate-400">Construimos con buenas prácticas, pruebas y entregas iterativas.</p>
                    </div>

                    <div class="glass p-7">
                        <div class="text-cyan-400 text-xs font-semibold tracking-widest uppercase mb-3">Paso 04</div>
                        <h3 class="text-xl font-bold mb-2">Entrega y soporte</h3>
                        <p class="text-slate-400">Implementación, monitoreo y mantenimiento continuo.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section id="contact" class="py-24 px-6 relative">
            <div class="max-w-5xl mx-auto glass p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <svg class="w-32 h-32 text-cyan-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold mb-6 gradient-text">¿Listo para empezar?</h2>
                        <p class="text-slate-400 text-lg mb-8">
                            Llevemos su idea al siguiente nivel. Contáctenos hoy para una consulta gratuita.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center">
                                    <span class="text-cyan-400">✓</span>
                                </div>
                                <span class="text-slate-300">Consultoría Estratégica</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center">
                                    <span class="text-cyan-400">✓</span>
                                </div>
                                <span class="text-slate-300">Desarrollo Ágil</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-cyan-500/20 rounded-full flex items-center justify-center">
                                    <span class="text-cyan-400">✓</span>
                                </div>
                                <span class="text-slate-300">Soporte Continuo</span>
                            </div>
                        </div>
                    </div>

                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Nombre"
                                class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 focus:border-cyan-500 outline-none transition-colors text-white">
                        </div>
                        <div>
                            <input type="email" placeholder="Email"
                                class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 focus:border-cyan-500 outline-none transition-colors text-white">
                        </div>
                        <div>
                            <textarea rows="4" placeholder="Mensaje"
                                class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 focus:border-cyan-500 outline-none transition-colors text-white"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full py-4 uppercase tracking-widest text-sm">Enviar
                            Mensaje</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    {{-- Socials Section --}}
    <section id="socials" class="py-20 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="glass p-10 rounded-2xl relative overflow-hidden">
                <div class="absolute inset-0 opacity-20 pointer-events-none">
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-cyan-500/20 blur-[90px] rounded-full"></div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-500/20 blur-[90px] rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative">
                    <div>
                        <span
                            class="inline-block py-1 px-3 glass text-cyan-400 text-xs font-semibold tracking-wider uppercase mb-5">
                            Redes sociales
                        </span>

                        <h2 class="text-3xl md:text-4xl font-bold gradient-text mb-4">
                            Síguenos y conoce nuestro trabajo
                        </h2>

                        <p class="text-slate-400 leading-relaxed mb-6">
                            Compartimos avances de proyectos, tips de tecnología, lanzamientos y contenido útil para
                            negocios.
                            Si quieres ver nuestro estilo y resultados, aquí es el mejor lugar.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                <div class="text-white font-bold mb-1">Contenido</div>
                                <div class="text-slate-400 text-sm">Casos, demos, mejoras y UI.</div>
                            </div>
                            <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                <div class="text-white font-bold mb-1">Tips</div>
                                <div class="text-slate-400 text-sm">Seguridad, rendimiento, buenas prácticas.</div>
                            </div>
                            <div class="border border-white/10 rounded-xl p-4 bg-slate-950/40">
                                <div class="text-white font-bold mb-1">Soporte</div>
                                <div class="text-slate-400 text-sm">Actualizaciones y noticias del servicio.</div>
                            </div>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#contact" class="btn-primary px-7 py-3">Enviar mensaje</a>
                            <a href="#portfolio" class="text-white/90 hover:text-cyan-400 transition">Ver portafolio →</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                            <div class="flex items-center gap-4 mb-3">
                                <div class="w-12 h-12 rounded-xl bg-cyan-500/20 flex items-center justify-center">
                                    <span class="text-cyan-400 font-bold">f</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Facebook</div>
                                    <div class="text-slate-400 text-sm">Noticias y comunidad</div>
                                </div>
                            </div>
                            <div class="text-slate-300 text-sm">Publicaciones, contacto rápido y actualizaciones.</div>
                        </a>

                        <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                            <div class="flex items-center gap-4 mb-3">
                                <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center">
                                    <span class="text-purple-300 font-bold">ig</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Instagram</div>
                                    <div class="text-slate-400 text-sm">Diseño y contenido visual</div>
                                </div>
                            </div>
                            <div class="text-slate-300 text-sm">Historias, reels y avances de proyectos.</div>
                        </a>

                        <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                            <div class="flex items-center gap-4 mb-3">
                                <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center">
                                    <span class="text-emerald-300 font-bold">in</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">LinkedIn</div>
                                    <div class="text-slate-400 text-sm">Proyectos y alianzas</div>
                                </div>
                            </div>
                            <div class="text-slate-300 text-sm">Casos de éxito y perfil profesional.</div>
                        </a>

                        <a href="#" class="glass p-6 rounded-2xl hover:border-cyan-500/50 transition-all">
                            <div class="flex items-center gap-4 mb-3">
                                <div class="w-12 h-12 rounded-xl bg-slate-500/20 flex items-center justify-center">
                                    <span class="text-slate-200 font-bold">wa</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">WhatsApp</div>
                                    <div class="text-slate-400 text-sm">Atención directa</div>
                                </div>
                            </div>
                            <div class="text-slate-300 text-sm">Cotizaciones y respuesta rápida.</div>
                        </a>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t border-white/10 relative">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="glass p-6 rounded-2xl">
                            <div class="text-3xl font-bold text-white">+Semanal</div>
                            <div class="text-slate-400 text-sm mt-1">Contenido nuevo</div>
                        </div>
                        <div class="glass p-6 rounded-2xl">
                            <div class="text-3xl font-bold text-white">24–48h</div>
                            <div class="text-slate-400 text-sm mt-1">Tiempo de respuesta</div>
                        </div>
                        <div class="glass p-6 rounded-2xl">
                            <div class="text-3xl font-bold text-white">100%</div>
                            <div class="text-slate-400 text-sm mt-1">Enfoque en calidad</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
