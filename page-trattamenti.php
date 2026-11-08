<?php
/**
 * Template Name: Trattamenti e Massaggi
 * Radici di Luna - Treatment Catalog & Price List Template
 */

get_header();

$banner_img = rdl_get_option('rdl_trat_banner_img', rdl_get_default_image('trat_banner'));
$tagline    = rdl_get_option('rdl_trat_tagline', 'Tariffario & Menu Rituali d\'Autore');
$title      = rdl_get_option('rdl_trat_title', 'Listino Rituali & Massaggi di Benessere');
$desc       = rdl_get_option('rdl_trat_desc', 'Un santuario sartoriale di quiete e riequilibrio psicofisico. Ogni trattamento fonde oli vegetali tiepidi, essenze biologiche, pietre laviche basaltiche e la sapienza delle antiche tradizioni orientali e occidentali.');

// Query CPT trattamenti or use defaults
$custom_query = new WP_Query(array(
    'post_type'      => 'trattamento',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
));

$treatments = array();

if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        $id = get_the_ID();
        $thumb = get_the_post_thumbnail_url($id, 'large');
        $treatments[] = array(
            'id'             => 't_custom_' . $id,
            'title'          => get_the_title(),
            'category'       => get_post_meta($id, '_rdl_category', true) ?: 'relax',
            'category_label' => get_post_meta($id, '_rdl_category_label', true) ?: 'Trattamento',
            'price'          => get_post_meta($id, '_rdl_price', true) ?: '60€',
            'duration'       => get_post_meta($id, '_rdl_duration', true) ?: '60 min',
            'intensity'      => get_post_meta($id, '_rdl_intensity', true) ?: 'Tocco Armonico',
            'icon'           => get_post_meta($id, '_rdl_icon', true) ?: 'spa',
            'desc'           => get_the_excerpt() ?: wp_trim_words(get_the_content(), 25),
            'benefit'        => get_post_meta($id, '_rdl_benefit', true) ?: 'Riequilibrio psicofisico e distensione profonda',
            'image'          => $thumb ?: rdl_get_default_image('californiano'),
        );
    }
    wp_reset_postdata();
} else {
    $treatments = rdl_get_default_treatments();
}
?>

<main class="w-full pt-20 bg-[#0f0e0c] min-h-[calc(100vh-80px)]">

    <!-- Editorial Sub-Hero Banner -->
    <section class="relative w-full overflow-hidden bg-[#141311] py-16 md:py-20 px-6 md:px-12 border-b border-[#d4af37]/20">
        <div class="max-w-[1360px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <div class="lg:col-span-7 space-y-5">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#1a1916] border border-[#d4af37]/30 shadow-sm">
                    <span class="material-symbols-outlined text-[#d4af37] text-sm">spa</span>
                    <span class="font-label-caps text-xs uppercase text-[#d4af37] tracking-widest" data-i18n="tagline"><?php echo esc_html($tagline); ?></span>
                </div>
                <h1 class="font-display-hero text-3xl sm:text-4xl md:text-5xl text-[#f5efe6] uppercase leading-tight" data-i18n="hero-title">
                    <?php echo esc_html($title); ?>
                </h1>
                <p class="font-body-lg text-sm sm:text-base md:text-lg text-[#dcd5ca] max-w-2xl font-light leading-relaxed" data-i18n="hero-desc">
                    <?php echo esc_html($desc); ?>
                </p>

                <!-- Quick Summary Metrics Ribbon -->
                <div class="grid grid-cols-3 gap-3 pt-2 max-w-lg">
                    <div class="p-3.5 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 shadow-sm text-center">
                        <span class="font-label-caps text-[10px] uppercase text-[#a89f91] block" data-i18n="metric-relax">Rilassanti</span>
                        <span class="font-headline-sm text-xl text-[#d4af37] font-semibold">60€</span>
                        <span class="text-[11px] text-[#dcd5ca] block">60 min</span>
                    </div>
                    <div class="p-3.5 rounded-xl bg-[#1a1916] border border-[#d4af37]/40 shadow-sm text-center">
                        <span class="font-label-caps text-[10px] uppercase text-[#a89f91] block" data-i18n="metric-therap">Mirati & MTC</span>
                        <span class="font-headline-sm text-xl text-[#d4af37] font-semibold">70€</span>
                        <span class="text-[11px] text-[#dcd5ca] block">60 min</span>
                    </div>
                    <div class="p-3.5 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 shadow-sm text-center">
                        <span class="font-label-caps text-[10px] uppercase text-[#a89f91] block" data-i18n="metric-special">Viso & Piedi</span>
                        <span class="font-headline-sm text-xl text-[#d4af37] font-semibold">40€</span>
                        <span class="text-[11px] text-[#dcd5ca] block">30 min</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-[0_10px_35px_rgba(0,0,0,0.8)] border border-[#d4af37]/35 bg-[#1a1916]">
                    <img alt="<?php echo esc_attr($title); ?>" class="w-full h-full object-cover" src="<?php echo esc_url($banner_img); ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0f0e0c]/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 left-5 right-5 p-3 rounded-xl bg-[#141311]/90 backdrop-blur-md border border-[#d4af37]/30 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2 text-[#d4af37]">
                            <span class="material-symbols-outlined text-base">water_drop</span>
                            <span class="font-label-caps uppercase tracking-wider text-[#f5efe6]" data-i18n="oil-badge">Oli Caldi & Pietre Vulcaniche</span>
                        </div>
                        <span class="text-[#a89f91]" data-i18n="footer-studio">Studio Privato</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Filter & Category Navigation (Sticky) -->
    <section class="w-full bg-[#141311]/95 py-4 sticky top-20 z-30 shadow-md backdrop-blur-md border-b border-[#d4af37]/25">
        <div class="max-w-[1360px] mx-auto px-6 md:px-12 flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center flex-wrap gap-2 sm:gap-3" id="categoryFilters">
                <button class="cat-filter-btn px-4 py-2 rounded-full font-label-caps text-xs uppercase tracking-wider transition-all duration-200 bg-[#d4af37] text-[#0f0e0c] font-semibold shadow-sm" data-filter="all" data-i18n="filter-all">
                    Tutti i Trattamenti
                </button>
                <button class="cat-filter-btn px-4 py-2 rounded-full font-label-caps text-xs uppercase tracking-wider transition-all duration-200 bg-[#1d1b19] text-[#d0c5af] hover:text-[#f5efe6] shadow-sm border border-[#d4af37]/20" data-filter="relax" data-i18n="filter-relax">
                    Massaggi Rilassanti (60 min • 60€)
                </button>
                <button class="cat-filter-btn px-4 py-2 rounded-full font-label-caps text-xs uppercase tracking-wider transition-all duration-200 bg-[#1d1b19] text-[#d0c5af] hover:text-[#f5efe6] shadow-sm border border-[#d4af37]/20" data-filter="therapeutic" data-i18n="filter-therap">
                    Massaggi Mirati & Terapeutici (60 min • 70€)
                </button>
                <button class="cat-filter-btn px-4 py-2 rounded-full font-label-caps text-xs uppercase tracking-wider transition-all duration-200 bg-[#1d1b19] text-[#d0c5af] hover:text-[#f5efe6] shadow-sm border border-[#d4af37]/20" data-filter="special" data-i18n="filter-special">
                    Rituali Speciali & Viso (30 min • 40€)
                </button>
            </div>
            <div class="hidden sm:flex items-center gap-1.5 text-xs text-[#a89f91]">
                <span class="material-symbols-outlined text-[#d4af37] text-base">verified</span>
                <span class="font-label-caps uppercase tracking-wider text-[#f5efe6]" data-i18n="custom-notice">Sedute Sartoriali</span>
            </div>
        </div>
    </section>

    <!-- Treatment Catalog Grid -->
    <section class="w-full py-16 md:py-24 px-6 md:px-12 bg-[#0f0e0c]">
        <div class="max-w-[1360px] mx-auto">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37] block" data-i18n="menu-subtitle">Esperienze Olistiche Rigeneranti</span>
                    <h2 class="font-display-hero text-2xl sm:text-3xl md:text-4xl text-[#f5efe6]" data-i18n="menu-h2">Menu Completo dei Trattamenti</h2>
                </div>
                <p class="text-xs md:text-sm text-[#a89f91] max-w-md" data-i18n="menu-note">
                    Ogni rituale comprende un'accoglienza con tisana botanica biologica, consulenza aromaterapica personalizzata e rispetto totale dei tuoi tempi.
                </p>
            </div>

            <!-- Treatment Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="treatmentGrid">
                <?php
                $t_index = 1;
                foreach ($treatments as $item) : 
                    $t_key = 't' . $t_index;
                    $t_index++;
                ?>
                    <article class="treatment-card group flex flex-col justify-between rounded-2xl bg-[#1a1916] p-6 border border-[#d4af37]/25 shadow-[0_4px_25px_rgba(0,0,0,0.6)] hover:border-[#d4af37]/60 hover:shadow-[0_0_25px_rgba(212,175,55,0.2)] transition-all duration-300" data-category="<?php echo esc_attr($item['category']); ?>">
                        <div class="space-y-4">
                            <!-- Image -->
                            <div class="relative w-full aspect-[16/10] rounded-xl overflow-hidden bg-[#24221f]">
                                <img alt="<?php echo esc_attr($item['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo esc_url($item['image']); ?>" />
                                <span class="absolute top-3 left-3 font-label-caps text-[10px] uppercase px-3 py-1 rounded-full bg-[#141311]/90 backdrop-blur-md text-[#d4af37] border border-[#d4af37]/35 shadow-sm" data-i18n="<?php echo esc_attr($t_key . '-tag'); ?>">
                                    <?php echo esc_html($item['category_label']); ?>
                                </span>
                            </div>

                            <!-- Header: Title & Price -->
                            <div class="flex items-baseline justify-between pt-1">
                                <h3 class="font-headline-sm text-xl text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="<?php echo esc_attr($t_key . '-title'); ?>">
                                    <?php echo esc_html($item['title']); ?>
                                </h3>
                                <div class="text-right">
                                    <span class="font-headline-sm text-xl text-[#d4af37] font-semibold"><?php echo esc_html($item['price']); ?></span>
                                </div>
                            </div>

                            <!-- Duration & Intensity -->
                            <div class="flex items-center gap-2 text-xs text-[#a89f91] font-label-caps">
                                <span class="material-symbols-outlined text-[#d4af37] text-sm">schedule</span>
                                <span class="text-[#f5efe6]"><?php echo esc_html($item['duration']); ?></span>
                                <span class="text-[#d4af37]/40">•</span>
                                <span class="text-[#dcd5ca]" data-i18n="<?php echo esc_attr($t_key . '-intensity'); ?>"><?php echo esc_html($item['intensity']); ?></span>
                            </div>

                            <!-- Description -->
                            <p class="text-xs md:text-sm text-[#dcd5ca] font-light leading-relaxed" data-i18n="<?php echo esc_attr($t_key . '-desc'); ?>">
                                <?php echo esc_html($item['desc']); ?>
                            </p>

                            <!-- Benefit Box -->
                            <div class="p-3 rounded-lg bg-[#141311] border border-[#d4af37]/15 text-xs text-[#a89f91] flex items-center gap-2">
                                <span class="material-symbols-outlined text-[#d4af37] text-base shrink-0"><?php echo esc_html($item['icon']); ?></span>
                                <span data-i18n="<?php echo esc_attr($t_key . '-benefit'); ?>"><?php echo esc_html($item['benefit']); ?></span>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pt-6 mt-4 border-t border-[#d4af37]/15">
                            <button class="book-card-btn w-full py-3 px-5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider hover:bg-[#f2ca50] transition-all flex items-center justify-center gap-2 shadow-[0_0_15px_rgba(212,175,55,0.2)]" data-item="<?php echo esc_attr($item['title'] . ' (' . $item['duration'] . ' • ' . $item['price'] . ')'); ?>">
                                <span data-i18n="btn-book-card">Prenota questo rituale</span>
                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Interactive Booking Modal for Treatments -->
    <div id="bookingModal" class="fixed inset-0 z-50 modal-backdrop hidden items-center justify-center p-4">
        <div class="max-w-lg w-full p-8 rounded-2xl bg-[#141311] border border-[#d4af37]/40 shadow-[0_15px_50px_rgba(0,0,0,0.95)] text-left space-y-6 relative">
            <button id="bookingModalClose" class="absolute top-5 right-5 text-[#a89f91] hover:text-[#d4af37] transition-colors" aria-label="Chiudi finestra">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>

            <div class="space-y-1">
                <span class="font-label-caps text-[10px] uppercase tracking-widest text-[#d4af37]" data-i18n="modal-badge">Prenotazione Concierge</span>
                <h3 class="font-display-hero text-2xl text-[#f5efe6]" id="modalTreatmentTitle">Trattamento Olistico</h3>
                <p class="text-xs text-[#a89f91]" data-i18n="modal-sub">Invia una richiesta direttamente a Elena per concordare data e orario.</p>
            </div>

            <form class="space-y-4" onsubmit="event.preventDefault(); window.inviaWhatsApp();">
                <input type="hidden" id="modalSelectedTreatment" value="Trattamento" />
                
                <div>
                    <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-name">Il tuo Nome</label>
                    <input class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-xl focus:border-[#d4af37] focus:ring-0" id="input-nome" placeholder="Es. Francesca Bellini" required="" type="text" />
                </div>

                <div>
                    <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-phone">Telefono / WhatsApp</label>
                    <input class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-xl focus:border-[#d4af37] focus:ring-0" id="input-tel" placeholder="+39 333 491 8428" required="" type="tel" />
                </div>

                <div>
                    <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-datetime">Preferenza Data / Orario</label>
                    <input class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-xl focus:border-[#d4af37] focus:ring-0" id="input-data" placeholder="Es. Lunedì pomeriggio o giovedì ore 18:00" type="text" />
                </div>

                <button class="w-full py-3.5 bg-[#d4af37] hover:bg-[#f2ca50] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-widest transition-colors flex items-center justify-center gap-2 rounded-full shadow-[0_0_20px_rgba(212,175,55,0.3)]" type="submit">
                    <span class="material-symbols-outlined text-sm">chat</span>
                    <span data-i18n="btn-submit-wa">Conferma su WhatsApp Diretto</span>
                </button>
            </form>
        </div>
    </div>

</main>

<?php get_footer(); ?>
