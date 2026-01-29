@extends('layouts.app')

@section('content')
    <div class="relative overflow-x-hidden bg-slate-50">
        
        <!-- FLOATING ACTION BUTTONS (Interactive) -->
        <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-4">
            <!-- WhatsApp -->
            <a href="https://wa.me/5215661885745?text=Hola%2C%20necesito%20asesoria%20sobre%20un%20sistema." target="_blank" 
               class="group relative flex items-center justify-center w-14 h-14 bg-[#25D366] rounded-full shadow-lg hover:shadow-green-500/30 hover:scale-110 transition-all duration-300">
                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.466c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <!-- Tooltip -->
                <span class="absolute right-full mr-4 bg-slate-900 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                    Chat directo
                </span>
            </a>
            
            <!-- Phone -->
            <a href="tel:+5215661885745" 
               class="group relative flex items-center justify-center w-14 h-14 bg-blue-600 rounded-full shadow-lg hover:shadow-blue-500/30 hover:scale-110 transition-all duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                 <span class="absolute right-full mr-4 bg-slate-900 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                    Llamar ahora
                </span>
            </a>
        </div>

        <!-- SECTION 1: HERO (Modern Corporate) -->
        <section id="home" class="min-h-screen flex items-center pt-32 pb-20 px-6 relative overflow-hidden bg-white">
            <!-- Background Gradients -->
            <!-- Background Gradients -->
            <div class="absolute top-0 right-0 w-[50%] h-[70%] bg-gradient-to-bl from-blue-50 to-transparent -z-10 rounded-bl-full opacity-60"></div>
            <div class="absolute bottom-0 left-0 w-[40%] h-[50%] bg-gradient-to-tr from-slate-100 to-transparent -z-10 rounded-tr-full opacity-60"></div>
            
            <!-- Animated Blobs (Pro Aesthetics) -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute top-20 right-10 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-40 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>


            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10 text-center lg:text-left">
                <!-- Left: Content -->
                <div class="order-2 lg:order-1 animate-on-scroll">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-100 border border-slate-200 mb-8">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                        <span class="text-slate-600 text-xs font-bold tracking-wide uppercase">Ingeniería & Consultoría Digital</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-slate-900 leading-[1.1] tracking-tight">
                        🚀 Transformamos tu negocio con <br class="hidden lg:block">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">software a medida.</span>
                    </h1>
                    
                    <p class="text-lg text-slate-600 mb-10 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                        Especialistas en sistemas de gestión y soluciones digitales escalables.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="#contact" class="btn-primary w-full sm:w-auto px-8 py-4 text-base shadow-xl shadow-blue-900/10 hover:shadow-blue-900/20">
                            Iniciar Proyecto
                        </a>
                        <a href="#services" class="w-full sm:w-auto px-8 py-4 rounded-full border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-all font-semibold flex items-center justify-center gap-2">
                           <span>Ver Servicios</span>
                           <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual (Modern Glass cards stack) -->
                <div class="order-1 lg:order-2 relative perspective-1000 animate-on-scroll delay-200">
                    <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl shadow-slate-200 border border-slate-100 bg-white transform rotate-y-[-5deg] hover:rotate-y-0 transition-transform duration-700 ease-out">
                         <img src="{{ asset('images/portada_cs.png') }}" alt="Dashboard Moderno" class="w-full h-auto object-cover">
                         <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    
                    <!-- Decorative back card -->
                    <div class="absolute top-10 -right-10 w-full h-full bg-blue-600 rounded-3xl -z-10 shadow-xl opacity-20 transform translate-x-4 translate-y-4"></div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: TECH STACK (Autoridad Técnica) -->
        <section class="border-y border-slate-200 bg-white py-12">
            <div class="max-w-7xl mx-auto px-6">
                <!-- Service Categories (Visual "What we do") -->
                <div class="text-center mb-12">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-xs mb-2 block">Nuestras Capacidades</span>
                    <h3 class="text-2xl md:text-3xl font-bold text-slate-900">Dominio Tecnológico & Creativo</h3>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 mb-16">
                    <!-- 1. Web Design -->
                    <div class="flex flex-col items-center text-center group animate-on-scroll delay-100">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 mb-4 group-hover:scale-110 transition-transform duration-300 shadow-sm border border-blue-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Diseño Web & UI/UX</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Sitios corporativos y landing pages de alto impacto visual.</p>
                    </div>

                    <!-- 2. Mobile Apps -->
                    <div class="flex flex-col items-center text-center group animate-on-scroll delay-200">
                        <div class="w-16 h-16 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600 mb-4 group-hover:scale-110 transition-transform duration-300 shadow-sm border border-purple-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Apps Móviles</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Aplicaciones nativas para iOS y Android fluidas.</p>
                    </div>

                    <!-- 3. Custom Software -->
                    <div class="flex flex-col items-center text-center group animate-on-scroll delay-300">
                        <div class="w-16 h-16 rounded-2xl bg-teal-50 flex items-center justify-center text-teal-600 mb-4 group-hover:scale-110 transition-transform duration-300 shadow-sm border border-teal-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Software a Medida</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Sistemas complejos desarrollados desde cero.</p>
                    </div>

                    <!-- 4. Integral Systems -->
                    <div class="flex flex-col items-center text-center group animate-on-scroll delay-400">
                        <div class="w-16 h-16 rounded-2xl bg-slate-50 flex items-center justify-center text-slate-600 mb-4 group-hover:scale-110 transition-transform duration-300 shadow-sm border border-slate-200">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1">Sistemas Integrales</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Conexión de hardware, puntos de venta y nube.</p>
                    </div>
                </div>

                <!-- Tech Divider -->
                <div class="flex items-center gap-4 mb-10 opacity-60">
                    <div class="h-px bg-slate-200 flex-1"></div>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400">Motorizado por Tecnologías Líderes</span>
                    <div class="h-px bg-slate-200 flex-1"></div>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-12 sm:gap-16 grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                    <!-- LARAVEL -->
                    <div class="group flex flex-col items-center gap-2 hover:-translate-y-1 transition-transform duration-300">
                        <svg class="h-12 w-auto" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5002 8.41165L6.44497 8.35626L23.4144 5.37891L23.864 7.94098L10.3755 10.3075L21.3508 48.0163L47.7667 48.0163L49.3784 57.0706L23.8427 57.0706L23.7788 57.0818L18.4967 58.0084L17.5519 58.0638L5.5002 8.41165Z" fill="#F05340"/>
                            <path d="M47.7667 48.0163L51.9167 47.9366L53.9234 32.5482L51.8491 32.5482L23.8341 57.0707L23.8427 57.0706L49.3784 57.0706L52.8427 57.004L60.0381 55.7416L58.269 45.7497L46.2238 47.7289L47.7667 48.0163Z" fill="#F05340"/>
                        </svg>
                        <span class="text-xs font-bold text-slate-400 group-hover:text-[#F05340] transition-colors">LARAVEL</span>
                    </div>

                    <!-- DJANGO -->
                    <div class="group flex flex-col items-center gap-2 hover:-translate-y-1 transition-transform duration-300">
                        <div class="h-12 flex items-center">
                            <svg class="h-10 w-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3h18v18H3z" stroke="none" />
                                <path d="M6 6h2.5v9a2.5 2.5 0 0 1 -2.5 2.5a2.5 2.5 0 0 1 -2.5 -2.5" stroke="#092E20" fill="#092E20" stroke-width="0" />
                                <rect x="12" y="6" width="3" height="12" rx="1" fill="#092E20" stroke="#092E20" stroke-width="0" />
                                <path d="M15 9h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2" stroke="#092E20" fill="none" />
                            </svg>
                            <!-- Simplified Django Text Rep for SVG -->
                            <span class="text-xl font-bold text-[#092E20] ml-1">django</span>
                        </div>
                        <span class="text-xs font-bold text-slate-400 group-hover:text-[#092E20] transition-colors">DJANGO</span>
                    </div>
                    
                    <!-- REACT -->
                    <div class="group flex flex-col items-center gap-2 hover:-translate-y-1 transition-transform duration-300">
                         <svg class="h-12 w-auto" viewBox="-11.5 -10.23174 23 20.46348">
                            <circle cx="0" cy="0" r="2.05" fill="#61DAFB"/>
                            <g stroke="#61DAFB" stroke-width="1" fill="none">
                            <ellipse rx="11" ry="4.2"/>
                            <ellipse rx="11" ry="4.2" transform="rotate(60)"/>
                            <ellipse rx="11" ry="4.2" transform="rotate(120)"/>
                            </g>
                        </svg>
                        <span class="text-xs font-bold text-slate-400 group-hover:text-[#61DAFB] transition-colors">REACT</span>
                    </div>

                    <!-- VUE.JS -->
                    <div class="group flex flex-col items-center gap-2 hover:-translate-y-1 transition-transform duration-300">
                        <svg class="h-12 w-auto" viewBox="0 0 261.76 226.69" fill="none">
                            <path d="M161.096 0.00100708L261.76 0.00100708L130.88 226.691L0 0.00100708L100.664 0.00100708L130.88 52.341L161.096 0.00100708Z" fill="#42B883"/>
                            <path d="M52.346 0.00100708L130.88 136.031L209.414 0.00100708L161.096 0.00100708L130.88 52.341L100.664 0.00100708L52.346 0.00100708Z" fill="#35495E"/>
                        </svg>
                        <span class="text-xs font-bold text-slate-400 group-hover:text-[#42B883] transition-colors">VUE.JS</span>
                    </div>

                    <!-- FLUTTER -->
                    <div class="group flex flex-col items-center gap-2 hover:-translate-y-1 transition-transform duration-300">
                         <svg class="h-12 w-auto" viewBox="0 0 166 202" fill="none">
                            <path d="M100 0L166 0L86 80L20 80L100 0Z" fill="#42A5F5"/>
                            <path d="M86 80L166 0L166 160L21 202L76 202L131 202L86 80Z" fill="#0D47A1"/>
                            <path d="M86 80L166 160L166 80L100 80L86 80Z" fill="#42A5F5"/>
                            <!-- Simplified Flutter shape -->
                            <path d="M37 114L86 162L135 114L86 65L37 114Z" fill="#42A5F5"/>
                        </svg>
                        <span class="text-xs font-bold text-slate-400 group-hover:text-[#42A5F5] transition-colors">FLUTTER</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: SERVICES (Futuristic Cards) -->
        <section id="services" class="py-24 px-6 relative bg-slate-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-20">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Nuestro Ecosistema</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mt-2 mb-6">Soluciones de Clase Empresarial</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto text-lg leading-relaxed">
                        Arquitectura de software diseñada para la estabilidad operativa.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Negocios y Servicios -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-slate-200 border border-slate-100 hover:shadow-2xl hover:translate-y-[-5px] transition-all duration-300 group overflow-hidden animate-on-scroll delay-100">
                        <div class="h-48 overflow-hidden relative bg-blue-50">
                            <img src="{{ asset('images/service-business.png') }}" alt="Gestión de Negocios" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-white/90 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-8 pt-2 relative">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-4 text-blue-600 shadow-lg relative -top-7 border border-slate-100 group-hover:bg-blue-600 group-hover:text-white transition-all">
                                 <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Negocios, Gyms & Restaurantes</h3>
                            <p class="text-slate-600 leading-relaxed text-sm">
                                Software de gestión para <strong>pequeñas, medianas y grandes empresas</strong>. Puntos de venta, control de inventarios y reservas para el sector servicios.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Instituciones y Salud -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-slate-200 border border-slate-100 hover:shadow-2xl hover:translate-y-[-5px] transition-all duration-300 group overflow-hidden animate-on-scroll delay-200">
                        <div class="h-48 overflow-hidden relative bg-indigo-50">
                             <img src="{{ asset('images/service-school.png') }}" alt="Instituciones Educativas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                             <div class="absolute inset-0 bg-gradient-to-t from-white/90 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-8 pt-2 relative">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-4 text-indigo-600 shadow-lg relative -top-7 border border-slate-100 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                                 <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Escuelas & Instituciones</h3>
                            <p class="text-slate-600 leading-relaxed text-sm">
                                Sistemas para educación y salud. <strong>Control de accesos</strong>, expedientes médicos, plataformas escolares y registros de personal (Maestros/Doctores).
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Software a la Medida -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-slate-200 border border-slate-100 hover:shadow-2xl hover:translate-y-[-5px] transition-all duration-300 group overflow-hidden animate-on-scroll delay-300">
                        <div class="h-48 overflow-hidden relative bg-teal-50">
                            <img src="{{ asset('images/service-custom.png') }}" alt="Desarrollo a Medida" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-white/90 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-8 pt-2 relative">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-4 text-teal-600 shadow-lg relative -top-7 border border-slate-100 group-hover:bg-teal-600 group-hover:text-white transition-all">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Desarrollo 100% a la Medida</h3>
                            <p class="text-slate-600 leading-relaxed text-sm">
                                ¿Tienes una idea única? Desarrollamos soluciones personalizadas para <strong>cualquier necesidad operativa</strong>. Automatizamos lo que otros no pueden.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: NOSOTROS (El Núcleo Técnico) -->
        <section id="about" class="py-24 px-6 relative bg-white border-t border-slate-100">
            <div class="max-w-7xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-2 block">El Equipo</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6">Ingeniería de Respaldo</h2>
                </div>

                <!-- Team Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20 max-w-5xl mx-auto">
                    <!-- Profile 1: Rodolfo -->
                    <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group animate-on-scroll delay-100">
                        <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity">
                             <!-- TecNM Logo Placeholder Style -->
                             <svg class="w-16 h-16 text-slate-900" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3L1 9l11 6 9-4.91V17h2V9M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82Z"/></svg>
                        </div>
                        
                        <div class="flex items-center gap-5 mb-6">
                            <div class="w-20 h-20 rounded-full bg-slate-200 border-4 border-white shadow-sm overflow-hidden shrink-0 relative">
                                <!-- Placeholder Image - Replace src with actual image path -->
                                <img src="{{ asset('images/rodo.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Rodolfo+Roman&background=0F172A&color=fff'" alt="Ing. Rodolfo Román" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-1 leading-tight">Ing. Rodolfo Román Cruz</h3>
                                <p class="text-blue-600 font-medium text-xs md:text-sm uppercase tracking-wider">CTO & Arquitecto de Software</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3 text-slate-600 text-sm border-t border-slate-200 pt-6">
                            <div class="bg-blue-50 p-3 rounded-xl border border-blue-100 mb-3">
                                <span class="text-blue-700 font-bold block text-xs uppercase tracking-wide mb-1">Posgrado</span>
                                <p class="font-bold text-slate-900">Maestría en Sistemas Computacionales</p>
                            </div>
                            <p><strong class="text-slate-900">Formación:</strong> Ingeniero en Informática.</p>
                            <p><strong class="text-slate-900">Experiencia:</strong> Amplia trayectoria en Desarrollo de Software Fullstack y <strong class="text-blue-600">Diseño Gráfico Corporativo</strong>.</p>
                        </div>
                    </div>

                    <!-- Profile 2: Diego -->
                    <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group animate-on-scroll delay-200">
                        <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity">
                             <svg class="w-16 h-16 text-slate-900" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3L1 9l11 6 9-4.91V17h2V9M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82Z"/></svg>
                        </div>
                        
                        <div class="flex items-center gap-5 mb-6">
                            <div class="w-20 h-20 rounded-full bg-slate-200 border-4 border-white shadow-sm overflow-hidden shrink-0 relative">
                                <!-- Placeholder Image - Replace src with actual image path -->
                                <img src="{{ asset('images/marti.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Diego+Martinez&background=0F766E&color=fff'" alt="Ing. Diego Martínez" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-1 leading-tight">Ing. Diego Martínez López</h3>
                                <p class="text-teal-600 font-medium text-sm uppercase tracking-wider">Lead Developer & Partner</p>
                            </div>
                        </div>

                        <div class="space-y-3 text-slate-600 text-sm border-t border-slate-200 pt-6">
                            <p><strong class="text-slate-900">Formación:</strong> Ingeniero en Informática (Especialista en Software).</p>
                            <p><strong class="text-slate-900">Institución:</strong> Tecnológico Nacional de México (TecNM) - Campus Zac ITZ.</p>
                             <p class="mt-2 text-xs text-slate-500 italic bg-teal-50 p-2 rounded-lg border border-teal-100">Ingeniero Certificado en Tecnologías Web & Móviles.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Trust Badge Box -->
                 <div class="bg-slate-900 rounded-3xl p-10 md:p-14 text-center md:text-left relative overflow-hidden animate-on-scroll">
                     <div class="relative z-10 flex flex-col md:flex-row items-center gap-10">
                         <div class="flex-1">
                             <h3 class="text-3xl font-bold text-white mb-4">Experiencia Comprobada</h3>
                             <p class="text-slate-300 leading-relaxed">
                                 Respaldados por implementaciones exitosas como los sistemas ERP para <strong class="text-blue-400">CORTIZAC</strong> y soluciones en Zacatecas para Puntos de Venta, Sector Médico y Páginas Informativas para medianas y grandes empresas. No somos aprendices; somos ingenieros resolviendo problemas reales.
                             </p>
                         </div>
                         <div class="flex-none">
                             <div class="flex flex-col items-center md:items-end">
                                 <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-white text-slate-900 font-bold rounded-full hover:bg-blue-50 transition-colors shadow-lg hover:scale-105">
                                     Visita nuestras Redes Sociales
                                 </a>
                                 <p class="text-blue-200 text-xs mt-2 font-medium">Conoce más de nosotros y nuestros trabajos</p>
                             </div>
                         </div>
                     </div>
                     
                     <!-- Decoration -->
                     <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600 rounded-full blur-[100px] opacity-20 pointer-events-none"></div>
                 </div>

            </div>
        </section>

        <!-- SECTION 4: CTA / SECURITY (Confianza) -->
        <section class="py-24 relative overflow-hidden bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 relative z-10 text-center animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-8">¿Listo para modernizar su infraestructura?</h2>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="https://wa.me/5215661885745?text=Hola%2C%20necesito%20asesoria%20sobre%20un%20sistema." target="_blank" class="btn-primary px-8 py-4 text-lg inline-flex items-center gap-3 bg-[#25D366] hover:bg-[#128C7E] border-none text-white shadow-xl shadow-green-500/20">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.466c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Hablar con un Asesor
                    </a>
                </div>
            </div>
        </section>

        <!-- SECTION 5: FOOTER (Minimal Modern) -->
        <footer id="contact" class="bg-white pt-20 pb-10 border-t border-slate-200">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                    <div class="col-span-1 md:col-span-2">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="{{ asset('images/logo_cs.png') }}" alt="Logo" class="h-8 w-auto">
                            <span class="text-2xl font-bold text-slate-900 tracking-tight">CAPITAL SYSTEM DIGITAL</span>
                        </div>
                        <p class="text-slate-500 mb-8 max-w-md text-sm leading-relaxed">
                            <strong class="text-slate-700">Capital System Digital</strong> es una firma digital orgullosamente de <strong>Zacatecas</strong>. Estamos comprometidos con tu crecimiento, ofreciendo software de calidad y un trato honesto. Tu satisfacción es el motor que nos impulsa a innovar cada día.
                        </p>
                        <div class="flex gap-4">
                            <!-- Socials Interactivos (Dark on White) -->
                            <a href="https://www.facebook.com/profile.php?id=61586483584994" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-blue-600 hover:text-white flex items-center justify-center text-slate-400 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/capital_system_digital/" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-pink-600 hover:text-white flex items-center justify-center text-slate-400 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.069-4.85.069-3.204 0-3.584-.012-4.849-.069-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="https://wa.me/5215661885745" target="_blank" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-green-500 hover:text-white flex items-center justify-center text-slate-400 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.466c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-slate-900 font-bold mb-6 text-sm uppercase tracking-wider">Servicios</h4>
                        <ul class="space-y-4 text-slate-500 text-sm font-medium">
                            <li><a href="#" class="hover:text-blue-600 transition-colors">Desarrollo Web</a></li>
                            <li><a href="#" class="hover:text-blue-600 transition-colors">Apps Móviles</a></li>
                            <li><a href="#" class="hover:text-blue-600 transition-colors">Consultoría IT</a></li>
                            <li><a href="#" class="hover:text-blue-600 transition-colors">Marketing Digital</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-slate-900 font-bold mb-6 text-sm uppercase tracking-wider">Contacto</h4>
                        <ul class="space-y-4 text-slate-500 text-sm font-medium">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Zacatecas, México</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <span>+52 1 56 6188 5745</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-slate-100 pt-8 text-center text-slate-400 text-xs font-medium">
                    &copy; {{ date('Y') }} Capital System Digital. Todos los derechos reservados.
                </div>
            </div>
        </footer>
    </div>
@endsection
