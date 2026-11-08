<?php
/**
 * Radici di Luna - Generic Page Template
 */

get_header();
?>

<main class="w-full pt-28 pb-20 bg-[#0f0e0c] min-h-[calc(100vh-80px)]">
    <div class="max-w-[1000px] mx-auto px-6 md:px-12">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('space-y-8'); ?>>
                <header class="border-b border-[#d4af37]/20 pb-6 text-center space-y-3">
                    <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]">Radici di Luna</span>
                    <h1 class="font-display-hero text-3xl sm:text-5xl text-[#f5efe6]"><?php the_title(); ?></h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-2xl overflow-hidden border border-[#d4af37]/25 max-h-[460px] aspect-[16/9]">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>

                <div class="prose prose-invert max-w-none text-[#dcd5ca] font-body-lg text-base leading-relaxed space-y-6">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
