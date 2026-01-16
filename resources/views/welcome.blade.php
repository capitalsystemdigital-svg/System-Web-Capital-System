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
            <span class="inline-block py-1 px-3 glass text-cyan-400 text-xs font-semibold tracking-wider uppercase mb-6 animate-pulse">
                Innovative Software Engineering
            </span>
            <h1 class="text-6xl md:text-8xl font-bold mb-8 leading-tight tracking-tighter">
                <span class="gradient-text">Bespoke Software,</span><br>
                <span class="text-white/90">Mastered.</span>
            </h1>
            <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                Transformamos sus ideas en soluciones digitales de alto impacto. Desarrollamos software a la medida con las últimas tecnologías del mercado.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#services" class="btn-primary px-10 py-4 text-lg">Explorar Servicios</a>
                <a href="#portfolio" class="text-white font-medium hover:text-cyan-400 transition-colors">Ver Nuestros Proyectos &rarr;</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Nuestros Servicios</h2>
                <p class="text-slate-400 max-w-xl mx-auto">Ofrecemos un espectro completo de servicios de desarrollo para impulsar su negocio.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="glass p-8 hover:border-cyan-500/50 transition-all group">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-cyan-500/40 transition-colors">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Desarrollo Web</h3>
                    <p class="text-slate-400">Aplicaciones web escalables y robustas utilizando tecnologias modernas como Laravel, Vue y React.</p>
                </div>

                <!-- Service 2 -->
                <div class="glass p-8 hover:border-cyan-500/50 transition-all group">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500/40 transition-colors">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Apps Móviles</h3>
                    <p class="text-slate-400">Experiencias nativas y multiplataforma que conectan con sus usuarios en cualquier lugar.</p>
                </div>

                <!-- Service 3 -->
                <div class="glass p-8 hover:border-cyan-500/50 transition-all group">
                    <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-500/40 transition-colors">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Arquitectura Cloud</h3>
                    <p class="text-slate-400">Diseño e implementación de infraestructura en la nube optimizada para el rendimiento y costo.</p>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Contact Section -->
    <section id="contact" class="py-24 px-6 relative">
        <div class="max-w-5xl mx-auto glass p-12 relative overflow-hidden">
             <div class="absolute top-0 right-0 p-8 opacity-10">
                <svg class="w-32 h-32 text-cyan-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
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
                        <input type="text" placeholder="Nombre" class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 focus:border-cyan-500 outline-none transition-colors text-white">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 focus:border-cyan-500 outline-none transition-colors text-white">
                    </div>
                    <div>
                        <textarea rows="4" placeholder="Mensaje" class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 focus:border-cyan-500 outline-none transition-colors text-white"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full py-4 uppercase tracking-widest text-sm">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
