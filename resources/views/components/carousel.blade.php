@props([
    'id' => 'carousel',
    'slides' => [],
    'title' => 'Portafolio',
    'subtitle' => 'Algunos proyectos y piezas visuales.'
])

<section id="portfolio" class="py-24 px-6 relative">
    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">{{ $title }}</h2>
            <p class="text-slate-400 max-w-xl mx-auto">{{ $subtitle }}</p>
        </div>

        <div class="glass p-5 md:p-8 relative overflow-hidden rounded-2xl">
            <div id="{{ $id }}" class="relative">

                <div class="relative overflow-hidden rounded-2xl border border-white/10">
                    <div class="relative h-[240px] sm:h-[360px] md:h-[420px]">
                        <div class="carousel-track absolute inset-0 flex h-full w-full transition-transform duration-500 ease-out will-change-transform">
                            @foreach ($slides as $s)
                                <div class="carousel-slide flex-none w-full h-full relative">
                                    <img src="{{ $s['src'] }}" alt="{{ $s['title'] ?? '' }}"
                                         class="w-full h-full object-cover" draggable="false">

                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/25 to-transparent"></div>

                                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                                        <h3 class="text-2xl md:text-3xl font-bold text-white">{{ $s['title'] ?? '' }}</h3>
                                        <p class="text-slate-300 mt-1">{{ $s['desc'] ?? '' }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <button type="button"
                    class="carousel-prev absolute left-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full border border-white/10 bg-slate-950/40 backdrop-blur flex items-center justify-center hover:border-cyan-500/50 hover:bg-slate-950/60 transition-all"
                    aria-label="Anterior">
                    <span class="text-white text-2xl leading-none select-none">‹</span>
                </button>

                <button type="button"
                    class="carousel-next absolute right-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full border border-white/10 bg-slate-950/40 backdrop-blur flex items-center justify-center hover:border-cyan-500/50 hover:bg-slate-950/60 transition-all"
                    aria-label="Siguiente">
                    <span class="text-white text-2xl leading-none select-none">›</span>
                </button>

                <div class="carousel-dots flex items-center justify-center gap-2 mt-6">
                    @foreach ($slides as $i => $s)
                        <button type="button"
                            class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/30 hover:bg-white/60 transition"
                            aria-label="Ir al slide {{ $i + 1 }}"
                            data-index="{{ $i }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Script ligado al ID para que puedas tener varios carruseles sin conflicto --}}
    <script>
        (function() {
            const root = document.getElementById(@json($id));
            if (!root) return;

            const track = root.querySelector('.carousel-track');
            const slides = Array.from(root.querySelectorAll('.carousel-slide'));
            const prevBtn = root.querySelector('.carousel-prev');
            const nextBtn = root.querySelector('.carousel-next');
            const dots = Array.from(root.querySelectorAll('.carousel-dot'));

            if (!track || slides.length === 0 || !prevBtn || !nextBtn) return;

            let index = 0;

            function update() {
                track.style.transform = `translateX(-${index * 100}%)`;
                dots.forEach((d, i) => {
                    d.classList.toggle('bg-white/90', i === index);
                    d.classList.toggle('bg-white/30', i !== index);
                });
            }

            function next() {
                index = (index + 1) % slides.length;
                update();
            }

            function prev() {
                index = (index - 1 + slides.length) % slides.length;
                update();
            }

            nextBtn.addEventListener('click', next);
            prevBtn.addEventListener('click', prev);

            dots.forEach((dot) => {
                dot.addEventListener('click', () => {
                    const i = Number(dot.dataset.index);
                    if (!Number.isNaN(i)) {
                        index = i;
                        update();
                    }
                });
            });

            update();
        })();
    </script>
</section>
