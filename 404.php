<?php
/**
 * Radici di Luna - 404 Error Page Template
 */

get_header();
?>

<main class="w-full pt-32 pb-24 bg-[#0f0e0c] min-h-[calc(100vh-80px)] flex items-center justify-center">
    <div class="max-w-xl mx-auto px-6 text-center space-y-6">
        <div class="w-20 h-20 mx-auto rounded-full bg-[#1a1916] border border-[#d4af37]/35 flex items-center justify-center text-[#d4af37]">
            <span class="material-symbols-outlined text-4xl">bedtime</span>
        </div>
        <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37] block">Pagina non trovata • Errore 404</span>
        <h1 class="font-display-hero text-4xl sm:text-5xl text-[#f5efe6]">Sentiero Inesplorato</h1>
        <p class="text-sm md:text-base text-[#a89f91] font-light leading-relaxed">
            La pagina che cerchi sembra essere svanita come fumo d'incenso o è stata spostata nel santuario.
        </p>
        <div class="pt-4 flex items-center justify-center gap-4">
            <a class="px-8 py-3.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider hover:bg-[#f2ca50] transition-all shadow-[0_0_20px_rgba(212,175,55,0.25)]" href="<?php echo esc_url(home_url('/')); ?>">
                Ritorna alla Home
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
