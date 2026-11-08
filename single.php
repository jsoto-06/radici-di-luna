<?php
/**
 * Radici di Luna - Single Post / Treatment Template
 */

get_header();

$is_trattamento = ('trattamento' === get_post_type());
$price          = get_post_meta(get_the_ID(), '_rdl_price', true) ?: '60€';
$duration       = get_post_meta(get_the_ID(), '_rdl_duration', true) ?: '60 min';
$intensity      = get_post_meta(get_the_ID(), '_rdl_intensity', true) ?: 'Tocco Armonico';
$benefit        = get_post_meta(get_the_ID(), '_rdl_benefit', true) ?: 'Distensione profonda e riallineamento energetico';
?>

<main class="w-full pt-28 pb-20 bg-[#0f0e0c] min-h-[calc(100vh-80px)]">
    <div class="max-w-[1080px] mx-auto px-6 md:px-12">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('space-y-8'); ?>>
                <header class="space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]">
                            <?php echo $is_trattamento ? 'Rituale Olistico' : 'Articolo & Diario Olistico'; ?>
                        </span>
                    </div>
                    <h1 class="font-display-hero text-3xl sm:text-5xl text-[#f5efe6]"><?php the_title(); ?></h1>
                    
                    <?php if ($is_trattamento) : ?>
                        <div class="flex flex-wrap items-center gap-4 text-xs font-label-caps text-[#dcd5ca] pt-2">
                            <span class="px-3 py-1 rounded-full bg-[#1a1916] border border-[#d4af37]/30 text-[#d4af37] font-bold text-sm">
                                <?php echo esc_html($price); ?>
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm text-[#d4af37]">schedule</span> <?php echo esc_html($duration); ?>
                            </span>
                            <span class="text-[#d4af37]/40">•</span>
                            <span><?php echo esc_html($intensity); ?></span>
                        </div>
                    <?php endif; ?>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-2xl overflow-hidden border border-[#d4af37]/25 aspect-[16/9] shadow-xl">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>

                <?php if ($is_trattamento && !empty($benefit)) : ?>
                    <div class="p-4 rounded-xl bg-[#141311] border border-[#d4af37]/25 text-xs md:text-sm text-[#dcd5ca] flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#d4af37] text-xl">spa</span>
                        <span><strong>Beneficio:</strong> <?php echo esc_html($benefit); ?></span>
                    </div>
                <?php endif; ?>

                <div class="prose prose-invert max-w-none text-[#dcd5ca] font-body-lg text-base leading-relaxed space-y-6">
                    <?php the_content(); ?>
                </div>

                <?php if ($is_trattamento) : ?>
                    <div class="pt-8 border-t border-[#d4af37]/20 flex flex-col sm:flex-row items-center gap-4">
                        <a class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider hover:bg-[#f2ca50] transition-all text-center shadow-[0_0_20px_rgba(212,175,55,0.25)]" href="<?php echo esc_url(rdl_get_whatsapp_url('Buongiorno Elena, vorrei richiedere la prenotazione per il trattamento: ' . get_the_title())); ?>" target="_blank" rel="noopener">
                            Prenota questo Rituale su WhatsApp
                        </a>
                        <?php
                        $trattamenti_page = get_page_by_path('trattamenti');
                        $catalog_url = $trattamenti_page ? get_permalink($trattamenti_page) : home_url('/#massaggi-overview');
                        ?>
                        <a class="w-full sm:w-auto px-8 py-3.5 rounded-full border border-[#d4af37]/40 text-[#f5efe6] font-label-caps text-xs uppercase tracking-wider hover:bg-[#d4af37]/10 transition-all text-center" href="<?php echo esc_url($catalog_url); ?>">
                            Torna a Tutti i Trattamenti
                        </a>
                    </div>
                <?php endif; ?>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
