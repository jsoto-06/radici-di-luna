<?php
/**
 * Radici di Luna - Index / Archive Fallback Template
 */

get_header();
?>

<main class="w-full pt-28 pb-20 bg-[#0f0e0c] min-h-[calc(100vh-80px)]">
    <div class="max-w-[1240px] mx-auto px-6 md:px-12 space-y-12">
        <header class="text-center space-y-3">
            <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]">Diario Olistico</span>
            <h1 class="font-display-hero text-3xl sm:text-5xl text-[#f5efe6]">
                <?php
                if (is_archive()) {
                    the_archive_title();
                } else {
                    echo esc_html(get_bloginfo('name'));
                }
                ?>
            </h1>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <article class="p-6 rounded-2xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37] transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="rounded-xl overflow-hidden aspect-[16/10] bg-[#24221f]">
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                                </div>
                            <?php endif; ?>
                            <span class="font-label-caps text-[10px] uppercase text-[#a89f91]"><?php echo get_the_date(); ?></span>
                            <h2 class="font-headline-sm text-xl text-[#f5efe6] hover:text-[#d4af37] transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="text-xs text-[#dcd5ca] font-light leading-relaxed">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>
                        </div>
                        <div class="pt-2">
                            <a class="inline-flex items-center gap-1.5 font-label-caps text-xs uppercase text-[#d4af37] hover:text-[#f2ca50] transition-colors" href="<?php the_permalink(); ?>">
                                <span>Leggi di più</span>
                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p class="text-center text-[#a89f91] col-span-full">Nessun articolo trovato.</p>
                <?php
            endif;
            ?>
        </div>

        <div class="pt-6 text-center text-[#d4af37]">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
