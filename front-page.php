<?php
/**
 * Template Name: Home Page
 * Radici di Luna - Front Page Template
 */

get_header();

// Retrieve Customizer options with defaults
$hero_bg    = rdl_get_option('rdl_hero_bg', rdl_get_default_image('hero'));
$hero_badge = rdl_get_option('rdl_hero_badge', 'SANTUARIO DI BENESSERE OLISTICO • SAN GIUSTINO');
$hero_t1    = rdl_get_option('rdl_hero_title_1', 'STUDIO OLISTICO');
$hero_t2    = rdl_get_option('rdl_hero_title_2', 'RADICI DI LUNA');
$hero_desc  = rdl_get_option('rdl_hero_desc', 'Massaggi sartoriali e rituali olistici per corpo e mente. Un\'esperienza di quiete profonda, cura autentica e rigenerazione a San Giustino.');
$btn1_text  = rdl_get_option('rdl_hero_btn1_text', 'Scopri i Rituali');
$btn1_url   = rdl_get_option('rdl_hero_btn1_url', '#massaggi-overview');
$btn2_text  = rdl_get_option('rdl_hero_btn2_text', 'Prenota Trattamento');
$btn2_url   = rdl_get_option('rdl_hero_btn2_url', '#prenotazione');

// Elena Section
$elena_photo = rdl_get_option('rdl_elena_photo', rdl_get_default_image('elena'));
$elena_quote = rdl_get_option('rdl_elena_quote', 'Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza.');
$elena_t1    = rdl_get_option('rdl_elena_title', 'L\'Arte del Tocco:');
$elena_t2    = rdl_get_option('rdl_elena_subtitle', 'Sono Elena.');
$elena_bio1  = rdl_get_option('rdl_elena_bio_1', 'Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza. Questo spazio nasce da un momento importante della mia vita, che mi ha insegnato quanto sia prezioso rallentare e ascoltare i messaggi sottili del corpo.');
$elena_bio2  = rdl_get_option('rdl_elena_bio_2', 'Originaria della Repubblica Dominicana, sono cresciuta con il valore naturale della calda accoglienza e del prendersi cura delle persone. Da anni approfondisco con dedizione le discipline olistiche occidentali e orientali, conseguendo certificazioni in massaggio Californiano, Lomi Lomi, decontratturante miofasciale e digitopressione sui meridiani.');
$elena_bio3  = rdl_get_option('rdl_elena_bio_3', 'Credo che ogni persona sia unica e che ogni corpo abbia bisogno di attenzioni diverse. Per questo, il mio approccio parte sempre dall\'ascolto: conoscere le esigenze, rispettare le sensazioni e scegliere con cura le tecniche più adatte a ogni trattamento.');
$elena_bio4  = rdl_get_option('rdl_elena_bio_4', 'Attraverso le mie mani desidero creare un momento speciale, in cui potersi allontanare dal ritmo frenetico della quotidianità, lasciar andare le tensioni e ritrovare una sensazione di armonia tra corpo e mente.');

// 5 Featured Cards (Matching Elena's authentic studio ritual photos)
$feat_cards = array(
    array(
        'key'   => 'feat1',
        'img'   => rdl_get_option('rdl_feat1_img', rdl_get_default_image('californiano')),
        'badge' => rdl_get_option('rdl_feat1_badge', 'MASSAGGIO RILASSANTE • 60 MIN'),
        'title' => rdl_get_option('rdl_feat1_title', 'Massaggio Californiano'),
        'desc'  => rdl_get_option('rdl_feat1_desc', 'Manovre ampie, continue e ritmiche come onde del mare per una profonda riconnessione corpo-mente e un totale rilassamento.'),
        'price' => rdl_get_option('rdl_feat1_price', '€ 60'),
    ),
    array(
        'key'   => 'feat2',
        'img'   => rdl_get_option('rdl_feat2_img', rdl_get_default_image('pietre')),
        'badge' => rdl_get_option('rdl_feat2_badge', 'MASSAGGIO RILASSANTE • 60 MIN'),
        'title' => rdl_get_option('rdl_feat2_title', 'Pietre Calde & Basalto (Lomi Lomi)'),
        'desc'  => rdl_get_option('rdl_feat2_desc', 'Calore vulcanico profondo che scioglie carichi fisici ed emotivi, riallineando e armonizzando le tue energie.'),
        'price' => rdl_get_option('rdl_feat2_price', '€ 60'),
    ),
    array(
        'key'   => 'feat3',
        'img'   => rdl_get_option('rdl_feat3_img', rdl_get_default_image('cera')),
        'badge' => rdl_get_option('rdl_feat3_badge', 'MASSAGGIO RILASSANTE • 60 MIN'),
        'title' => rdl_get_option('rdl_feat3_title', 'Candela Botanica Tiepida (Cera Calda)'),
        'desc'  => rdl_get_option('rdl_feat3_desc', 'Gocce tiepide di puro burro vegetale aromatico e cera naturale per una pelle vellutata e una calma assoluta.'),
        'price' => rdl_get_option('rdl_feat3_price', '€ 60'),
    ),
    array(
        'key'   => 'feat4',
        'img'   => rdl_get_option('rdl_feat4_img', rdl_get_default_image('cervicale')),
        'badge' => rdl_get_option('rdl_feat4_badge', 'MASSAGGIO MIRATO • 60 MIN'),
        'title' => rdl_get_option('rdl_feat4_title', 'Trattamento Cervicale & Miofasciale'),
        'desc'  => rdl_get_option('rdl_feat4_desc', 'Tecniche di sblocco e digitopressione profonda mirate a sciogliere contratture, liberare il collo e alleviare la schiena.'),
        'price' => rdl_get_option('rdl_feat4_price', '€ 70'),
    ),
    array(
        'key'   => 'feat5',
        'img'   => rdl_get_option('rdl_feat5_img', rdl_get_default_image('kobido')),
        'badge' => rdl_get_option('rdl_feat5_badge', 'TRATTAMENTO SPECIALE • 30 MIN'),
        'title' => rdl_get_option('rdl_feat5_title', 'Massaggio Kobido (Viso & Décolleté)'),
        'desc'  => rdl_get_option('rdl_feat5_desc', 'Antico rituale imperiale giapponese che ridefinisce i contorni del viso, stimola il microcircolo ed illumina lo sguardo.'),
        'price' => rdl_get_option('rdl_feat5_price', '€ 40'),
    ),
);
?>

<main class="w-full pt-20 md:pt-24 bg-[#0f0e0c]">

    <!-- 2. HERO SECTION -->
    <section class="relative w-full h-[88vh] min-h-[620px] max-h-[920px] flex items-center justify-center overflow-hidden bg-[#0f0e0c]" id="hero">
        <div class="absolute inset-0 z-0">
            <img alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="w-full h-full object-cover object-center scale-105" src="<?php echo esc_url($hero_bg); ?>" />
            <div class="absolute inset-0 bg-gradient-to-t from-[#0f0e0c] via-[#141311]/80 to-[#0f0e0c]/90 backdrop-brightness-75"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center text-white space-y-6 md:space-y-8">
            <p class="font-label-caps text-[11px] md:text-xs uppercase tracking-[0.35em] text-[#d4af37]" data-i18n="hero-badge">
                <?php echo esc_html($hero_badge); ?>
            </p>
            <h1 class="font-display-hero text-3xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-[0.14em] text-[#f5efe6] font-normal leading-[1.15] drop-shadow-[0_2px_10px_rgba(0,0,0,0.8)]">
                <span data-i18n="hero-t1"><?php echo esc_html($hero_t1); ?></span><br />
                <span class="tracking-[0.18em] text-[#d4af37]" data-i18n="hero-t2"><?php echo esc_html($hero_t2); ?></span>
            </h1>
            <p class="font-body-lg text-sm sm:text-base md:text-lg text-[#dcd5ca] max-w-2xl mx-auto font-light leading-relaxed" data-i18n="hero-desc">
                <?php echo esc_html($hero_desc); ?>
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-suksai-nav hover:bg-[#f2ca50] transition-all shadow-[0_0_20px_rgba(212,175,55,0.3)]" href="<?php echo esc_url($btn1_url); ?>">
                    <span data-i18n="hero-btn1"><?php echo esc_html($btn1_text); ?></span>
                </a>
                <a class="w-full sm:w-auto px-8 py-3.5 rounded-full border border-[#d4af37]/60 text-[#f5efe6] font-label-caps text-xs uppercase tracking-suksai-nav hover:bg-[#d4af37]/15 hover:border-[#d4af37] transition-all" href="<?php echo esc_url($btn2_url); ?>">
                    <span data-i18n="hero-btn2"><?php echo esc_html($btn2_text); ?></span>
                </a>
            </div>
        </div>

        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-1 opacity-75">
            <span class="font-label-caps text-[9px] uppercase tracking-widest text-[#a89f91]" data-i18n="scroll-down">Scorri</span>
            <span class="material-symbols-outlined text-sm animate-bounce text-[#d4af37]">expand_more</span>
        </div>
    </section>

    <!-- 3. CIRCULAR CATEGORY QUICK-NAVIGATION -->
    <section class="w-full bg-[#141311] py-14 md:py-18 border-b border-[#d4af37]/20">
        <div class="max-w-[1360px] mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row items-center lg:items-center justify-between gap-8">
                <div class="shrink-0 text-center lg:text-left">
                    <?php
                    $trattamenti_page = get_page_by_path('trattamenti');
                    $menu_link = $trattamenti_page ? get_permalink($trattamenti_page) : '#massaggi-overview';
                    ?>
                    <a class="font-label-caps text-xs uppercase tracking-[0.18em] text-[#d4af37] hover:text-[#f2ca50] border-b border-[#d4af37]/40 pb-0.5 transition-colors" data-i18n="cat-all" href="<?php echo esc_url($menu_link); ?>">
                        VEDI TUTTI I MASSAGGI
                    </a>
                </div>

                <!-- 6 Quick circular badges -->
                <div class="grid grid-cols-3 sm:grid-cols-6 gap-6 md:gap-10 w-full lg:w-auto justify-items-center">
                    <a class="group flex flex-col items-center gap-3 text-center" href="<?php echo esc_url($menu_link); ?>">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-[#d4af37]/30 flex items-center justify-center bg-[#1a1916] group-hover:border-[#d4af37] group-hover:bg-[#24221f] group-hover:scale-105 transition-all shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                            <?php echo rdl_render_category_icon('rilassanti'); ?>
                        </div>
                        <span class="font-body-md text-xs md:text-sm text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors" data-i18n="cat-relax">Rilassanti</span>
                    </a>

                    <a class="group flex flex-col items-center gap-3 text-center" href="<?php echo esc_url($menu_link); ?>">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-[#d4af37]/30 flex items-center justify-center bg-[#1a1916] group-hover:border-[#d4af37] group-hover:bg-[#24221f] group-hover:scale-105 transition-all shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                            <?php echo rdl_render_category_icon('mirati'); ?>
                        </div>
                        <span class="font-body-md text-xs md:text-sm text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors" data-i18n="cat-back">Mirati & Schiena</span>
                    </a>

                    <a class="group flex flex-col items-center gap-3 text-center" href="<?php echo esc_url($menu_link); ?>">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-[#d4af37]/30 flex items-center justify-center bg-[#1a1916] group-hover:border-[#d4af37] group-hover:bg-[#24221f] group-hover:scale-105 transition-all shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                            <?php echo rdl_render_category_icon('pietre'); ?>
                        </div>
                        <span class="font-body-md text-xs md:text-sm text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors" data-i18n="cat-stones">Pietre Calde</span>
                    </a>

                    <a class="group flex flex-col items-center gap-3 text-center" href="<?php echo esc_url($menu_link); ?>">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-[#d4af37]/30 flex items-center justify-center bg-[#1a1916] group-hover:border-[#d4af37] group-hover:bg-[#24221f] group-hover:scale-105 transition-all shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                            <?php echo rdl_render_category_icon('kobido'); ?>
                        </div>
                        <span class="font-body-md text-xs md:text-sm text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors" data-i18n="cat-kobido">Viso Kobido</span>
                    </a>

                    <a class="group flex flex-col items-center gap-3 text-center" href="<?php echo esc_url($menu_link); ?>">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-[#d4af37]/30 flex items-center justify-center bg-[#1a1916] group-hover:border-[#d4af37] group-hover:bg-[#24221f] group-hover:scale-105 transition-all shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                            <?php echo rdl_render_category_icon('riflessologia'); ?>
                        </div>
                        <span class="font-body-md text-xs md:text-sm text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors" data-i18n="cat-refl">Riflessologia</span>
                    </a>

                    <a class="group flex flex-col items-center gap-3 text-center" href="<?php echo esc_url($menu_link); ?>">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-[#d4af37]/30 flex items-center justify-center bg-[#1a1916] group-hover:border-[#d4af37] group-hover:bg-[#24221f] group-hover:scale-105 transition-all shadow-[0_4px_12px_rgba(0,0,0,0.5)]">
                            <?php echo rdl_render_category_icon('rituali'); ?>
                        </div>
                        <span class="font-body-md text-xs md:text-sm text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors" data-i18n="cat-rituals">Rituali Olistici</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. VISUAL GALLERY / FEATURED TREATMENT CARDS -->
    <section class="w-full py-16 md:py-24 bg-[#0f0e0c] overflow-hidden" id="massaggi-overview">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex items-center justify-between mb-8">
                <span class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37]" data-i18n="feat-badge">
                    ESPERIENZE IN EVIDENZA
                </span>
                <a class="text-xs font-label-caps uppercase tracking-widest text-[#a89f91] hover:text-[#d4af37] flex items-center gap-1.5 transition-colors" href="<?php echo esc_url($menu_link); ?>">
                    <span data-i18n="feat-all">TUTTI I RITUALI</span>
                    <span class="material-symbols-outlined text-sm">east</span>
                </a>
            </div>

            <!-- 5 Refined Cards matching Elena's authentic treatments with Aurum frames -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 xl:grid-cols-5 gap-6">
                <?php
                $card_col_classes = array(
                    0 => 'lg:col-span-2 xl:col-span-1',
                    1 => 'lg:col-span-2 xl:col-span-1',
                    2 => 'lg:col-span-2 xl:col-span-1',
                    3 => 'lg:col-span-3 xl:col-span-1',
                    4 => 'md:col-span-2 lg:col-span-3 xl:col-span-1',
                );
                foreach ($feat_cards as $idx => $card) :
                    $col_cls = isset($card_col_classes[$idx]) ? $card_col_classes[$idx] : 'col-span-1';
                ?>
                    <div class="group relative rounded-sm overflow-hidden bg-[#1a1916] border border-[#d4af37]/25 shadow-[0_4px_20px_rgba(0,0,0,0.6)] hover:border-[#d4af37]/60 hover:shadow-[0_0_25px_rgba(212,175,55,0.25)] transition-all duration-500 flex flex-col justify-end aspect-[4/5] <?php echo esc_attr($col_cls); ?>">
                        <img alt="<?php echo esc_attr($card['title']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="<?php echo esc_url($card['img']); ?>" />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0f0e0c]/95 via-[#0f0e0c]/40 to-transparent"></div>
                        <div class="relative z-10 p-6 text-white space-y-1.5">
                            <p class="font-label-caps text-[10px] uppercase tracking-[0.2em] text-[#d4af37]" data-i18n="<?php echo esc_attr($card['key'] . '-badge'); ?>">
                                <?php echo esc_html($card['badge']); ?>
                            </p>
                            <h3 class="font-headline-sm text-2xl uppercase tracking-wide font-normal text-[#f5efe6]" data-i18n="<?php echo esc_attr($card['key'] . '-title'); ?>">
                                <?php echo esc_html($card['title']); ?>
                            </h3>
                            <p class="text-xs text-[#dcd5ca] font-light leading-relaxed line-clamp-2" data-i18n="<?php echo esc_attr($card['key'] . '-desc'); ?>">
                                <?php echo esc_html($card['desc']); ?>
                            </p>
                            <div class="pt-2 flex items-center justify-between text-xs">
                                <span class="text-[#d4af37] font-semibold text-sm"><?php echo esc_html($card['price']); ?></span>
                                <a class="text-[#f5efe6] group-hover:text-[#d4af37] uppercase text-[10px] tracking-widest flex items-center gap-1 transition-colors" href="#prenotazione">
                                    <span data-i18n="book-btn">Prenota</span> <span class="material-symbols-outlined text-[12px]">east</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. EDITORIAL INTRO SECTION: "Massaggi per corpo, mente e spirito" -->
    <section class="w-full py-20 md:py-28 bg-[#141311] border-y border-[#d4af37]/20" id="filosofia">
        <div class="max-w-[1240px] mx-auto px-6 md:px-12">
            <div class="text-center space-y-4 mb-16">
                <h2 class="font-display-hero text-2xl sm:text-4xl md:text-5xl text-[#f5efe6] font-normal tracking-wide" data-i18n="filo-title">
                    <?php echo esc_html(rdl_get_option('rdl_filo_title', 'Massaggi per corpo, mente e spirito')); ?>
                </h2>
                <!-- Fine decorative sunburst in gold -->
                <div class="flex items-center justify-center">
                    <svg class="w-10 h-6 stroke-[#d4af37] fill-none stroke-1" viewBox="0 0 40 24">
                        <circle cx="20" cy="18" r="6"></circle>
                        <line x1="20" x2="20" y1="4" y2="8"></line>
                        <line x1="8" x2="12" y1="18" y2="18"></line>
                        <line x1="28" x2="32" y1="18" y2="18"></line>
                        <line x1="10" x2="13" y1="9" y2="12"></line>
                        <line x1="30" x2="27" y1="9" y2="12"></line>
                    </svg>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <!-- Left Column: Storytelling narrative -->
                <div class="lg:col-span-5 space-y-6 text-[#dcd5ca] text-sm md:text-base leading-relaxed">
                    <p data-i18n="filo-p1">
                        <strong class="text-[#f5efe6]">Radici di Luna</strong> nasce dal desiderio di offrire a <strong class="text-[#d4af37]">San Giustino</strong> un rifugio intimo dove ritrovare calma e ascolto profondo, lontano dalla frenesia quotidiana.
                    </p>
                    <p data-i18n="filo-p2">
                        Ispirati dai <strong class="text-[#d4af37]">cicli della luna</strong> e dalla saggezza botanica, ogni sessione rispetta il tuo tempo naturale attraverso tocchi consapevoli, distensivi e decontratturanti.
                    </p>
                    <p class="text-[#a89f91]" data-i18n="filo-p3">
                        <strong class="text-[#dcd5ca]">Gli oli biologici spremuti a freddo, i burri puri e gli estratti essenziali</strong> utilizzati durante i trattamenti sono selezionati per nutrire la pelle e accordarsi armonicamente allo stato d'animo di ogni persona.
                    </p>
                    <div class="pt-4">
                        <?php
                        $chi_sono_page = get_page_by_path('chi-sono');
                        $chi_sono_link = $chi_sono_page ? get_permalink($chi_sono_page) : '#chi-sono';
                        ?>
                        <a class="inline-flex items-center gap-2 font-label-caps text-xs uppercase tracking-widest text-[#d4af37] hover:text-[#f2ca50] border-b border-[#d4af37]/40 pb-1 transition-colors" href="<?php echo esc_url($chi_sono_link); ?>">
                            <span data-i18n="filo-btn">Incontra Elena • La Terapeuta</span> <span class="material-symbols-outlined text-sm">east</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Dual bulleted list of all treatments -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 pt-2">
                    <div class="space-y-3.5">
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">MASSAGGIO CALIFORNIANO EMOZIONALE</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">MASSAGGIO HAWAIANO LOMI LOMI</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">MASSAGGIO ANTISTRESS ARMONICO</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">MASSAGGIO CON PIETRE CALDE</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">MASSAGGIO CON CANDELA BIO</span>
                        </div>
                    </div>
                    <div class="space-y-3.5">
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">CERVICALE & SPALLE CON TRAZIONI</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">DECONTRATTURANTE MIOFASCIALE</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">MTC & DIGITOPRESSIONE MERIDIANI</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">LIFTING NATURALE VISO KOBIDO</span>
                        </div>
                        <div class="flex items-center gap-2 group cursor-pointer">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#d4af37]"></span>
                            <span class="font-label-caps text-xs uppercase tracking-wider text-[#dcd5ca] group-hover:text-[#d4af37] transition-colors">RIFLESSOLOGIA PLANTARE OLISTICA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CHI SONO - INCONTRO CON ELENA -->
    <section class="w-full py-20 md:py-28 bg-[#0f0e0c]" id="chi-sono">
        <div class="max-w-[1360px] mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left: Portrait Photo of Elena -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-sm overflow-hidden shadow-[0_10px_35px_rgba(0,0,0,0.8)] border border-[#d4af37]/35 bg-[#1a1916] aspect-[3/4] max-w-md mx-auto">
                        <img alt="<?php echo esc_attr($elena_t2); ?>" class="w-full h-full object-cover object-center" src="<?php echo esc_url($elena_photo); ?>" />
                    </div>
                    <!-- Floating badge quote in dark luxury style -->
                    <div class="hidden sm:block absolute -bottom-6 -right-4 bg-[#1a1916] p-5 rounded-sm shadow-[0_8px_25px_rgba(0,0,0,0.7)] max-w-xs border border-[#d4af37]/30">
                        <p class="font-headline-sm text-sm italic text-[#f5efe6]" data-i18n="elena-quote">
                            "<?php echo esc_html($elena_quote); ?>"
                        </p>
                        <span class="block mt-2 font-label-caps text-[10px] uppercase tracking-widest text-[#d4af37]" data-i18n="elena-author">
                            Con amore e dedizione, Elena.
                        </span>
                    </div>
                </div>

                <!-- Right: Editorial Voice and Storytelling -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="space-y-2">
                        <p class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37]" data-i18n="elena-badge">
                            L'ARTE DEL TOCCO • SAN GIUSTINO
                        </p>
                        <h2 class="font-display-hero text-3xl sm:text-4xl md:text-5xl text-[#f5efe6] font-normal leading-tight">
                            <span data-i18n="elena-title"><?php echo esc_html($elena_t1); ?></span><br />
                            <span class="italic text-[#d4af37]" data-i18n="elena-sub"><?php echo esc_html($elena_t2); ?></span>
                        </h2>
                    </div>
                    <p class="text-base text-[#dcd5ca] leading-relaxed" data-i18n="elena-bio1">
                        <?php echo esc_html($elena_bio1); ?>
                    </p>
                    <p class="text-sm md:text-base text-[#a89f91] leading-relaxed" data-i18n="elena-bio2">
                        <?php echo esc_html($elena_bio2); ?>
                    </p>
                    <p class="text-sm md:text-base text-[#dcd5ca] leading-relaxed" data-i18n="elena-bio3">
                        <?php echo esc_html($elena_bio3); ?>
                    </p>
                    <p class="text-sm md:text-base text-[#a89f91] leading-relaxed" data-i18n="elena-bio4">
                        <?php echo esc_html($elena_bio4); ?>
                    </p>

                    <!-- Radici di Luna Dedication Callout -->
                    <div class="p-4 rounded-xl bg-[#141311] border border-[#d4af37]/25 space-y-2">
                        <h4 class="font-display-hero text-base text-[#d4af37]" data-i18n="elena-rdl-title">Radici di Luna</h4>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed" data-i18n="elena-rdl-desc">
                            Il mio desiderio è offrire molto più di un semplice massaggio: un'esperienza di benessere, accoglienza e riconnessione con sé stessi. Ogni trattamento è un piccolo invito a fermarsi, respirare e ricordarsi che prendersi cura di sé è un gesto prezioso.
                        </p>
                        <p class="font-headline-sm text-xs italic text-[#f5efe6] pt-1" data-i18n="elena-signoff">
                            Con amore e dedizione, <span class="text-[#d4af37] font-semibold">Elena.</span>
                        </p>
                    </div>

                    <!-- 3 Pillars of Elena's practice -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 border-t border-[#d4af37]/20">
                        <div>
                            <span class="font-display-hero text-xl text-[#d4af37]" data-i18n="elena-stat1-num">100%</span>
                            <p class="font-label-caps text-[11px] uppercase tracking-wider text-[#a89f91] mt-1" data-i18n="elena-stat1-lbl">Presenza & Ascolto</p>
                        </div>
                        <div>
                            <span class="font-display-hero text-xl text-[#d4af37]" data-i18n="elena-stat2-num">BIO</span>
                            <p class="font-label-caps text-[11px] uppercase tracking-wider text-[#a89f91] mt-1" data-i18n="elena-stat2-lbl">Oli Puri Spremuti a Freddo</p>
                        </div>
                        <div>
                            <span class="font-display-hero text-xl text-[#d4af37]" data-i18n="elena-stat3-num">MTC</span>
                            <p class="font-label-caps text-[11px] uppercase tracking-wider text-[#a89f91] mt-1" data-i18n="elena-stat3-lbl">Saggezza dei Meridiani</p>
                        </div>
                    </div>

                    <div class="pt-2">
                        <?php $chi_sono_link = $chi_sono_page ? get_permalink($chi_sono_page) : '#chi-sono'; ?>
                        <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#1a1916] border border-[#d4af37]/40 text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] font-label-caps text-xs uppercase tracking-wider transition-all" href="<?php echo esc_url($chi_sono_link); ?>">
                            <span data-i18n="elena-btn">Scopri di Più su Elena</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TARIFFARIO SUMMARY & PREGUNTAS FRECUENTES -->
    <section class="w-full py-20 bg-[#141311] border-t border-[#d4af37]/20" id="faq">
        <div class="max-w-[1240px] mx-auto px-6 md:px-12 space-y-16">
            
            <!-- Price Summary Boxes -->
            <div>
                <div class="text-center space-y-2 mb-10">
                    <span class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37]" data-i18n="rates-badge">TRANSPARENZA & SARTORIALITÀ</span>
                    <h3 class="font-display-hero text-3xl sm:text-4xl text-[#f5efe6]" data-i18n="rates-title">Le Nostre Tariffe di Benessere</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- 1. MASSAGGI RILASSANTI -->
                    <div class="p-8 rounded-sm bg-[#1a1916] border border-[#d4af37]/35 space-y-4 hover:border-[#d4af37] hover:shadow-[0_0_20px_rgba(212,175,55,0.15)] transition-all flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="font-label-caps text-[11px] uppercase tracking-widest text-[#d4af37]" data-i18n="rate1-tag">1. MASSAGGI RILASSANTI</span>
                                <span class="font-headline-sm text-2xl text-[#d4af37] font-semibold">60 €</span>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-display-hero text-xl text-[#f5efe6]" data-i18n="rate1-title">Massaggi Rilassanti</h4>
                                <span class="font-label-caps text-xs text-[#a89f91] block" data-i18n="rate1-duration">Durata: 60 minuti</span>
                            </div>
                            <p class="text-xs text-[#dcd5ca] leading-relaxed font-light" data-i18n="rate1-desc">
                                Un viaggio di relax, armonia e benessere per ritrovare l'equilibrio tra corpo e mente.
                            </p>
                            <ul class="text-xs text-[#a89f91] space-y-1.5 pt-2 border-t border-[#d4af37]/15">
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate1-item1">Massaggio Californiano</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate1-item2">Massaggio Hawaiano</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate1-item3">Massaggio Antistress</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate1-item4">Massaggio Lomi Lomi con pietre calde</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate1-item5">Massaggio con cera calda</span></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-t border-[#d4af37]/15">
                            <a class="font-label-caps text-xs uppercase tracking-wider text-[#d4af37] hover:text-[#f2ca50] flex items-center justify-between transition-colors" href="#prenotazione">
                                <span data-i18n="req-appt">Richiedi appuntamento</span> <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                        </div>
                    </div>

                    <!-- 2. MASSAGGI MIRATI -->
                    <div class="p-8 rounded-sm bg-[#1a1916] border border-[#d4af37]/50 space-y-4 shadow-[0_4px_25px_rgba(0,0,0,0.5)] hover:border-[#d4af37] hover:shadow-[0_0_25px_rgba(212,175,55,0.2)] transition-all flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="font-label-caps text-[11px] uppercase tracking-widest text-[#d4af37]" data-i18n="rate2-tag">2. MASSAGGI MIRATI</span>
                                <span class="font-headline-sm text-2xl text-[#d4af37] font-semibold">70 €</span>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-display-hero text-xl text-[#f5efe6]" data-i18n="rate2-title">Massaggi Mirati</h4>
                                <span class="font-label-caps text-xs text-[#a89f91] block" data-i18n="rate2-duration">Durata: 60 minuti</span>
                            </div>
                            <p class="text-xs text-[#dcd5ca] leading-relaxed font-light" data-i18n="rate2-desc">
                                Trattamenti specifici per sciogliere le tensioni e favorire il benessere muscolare e corporeo.
                            </p>
                            <ul class="text-xs text-[#a89f91] space-y-1.5 pt-2 border-t border-[#d4af37]/15">
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate2-item1">Trattamento Cervicale</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate2-item2">Tecniche di Sblocco</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate2-item3">Massaggio Miofasciale</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate2-item4">Medicina Tradizionale Cinese applicata ai Meridiani</span></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-t border-[#d4af37]/15">
                            <a class="font-label-caps text-xs uppercase tracking-wider text-[#d4af37] hover:text-[#f2ca50] flex items-center justify-between transition-colors" href="#prenotazione">
                                <span data-i18n="req-appt">Richiedi appuntamento</span> <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                        </div>
                    </div>

                    <!-- 3. TRATTAMENTI SPECIALI -->
                    <div class="p-8 rounded-sm bg-[#141311] border border-[#d4af37]/35 space-y-4 hover:border-[#d4af37] hover:shadow-[0_0_20px_rgba(212,175,55,0.15)] transition-all flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="font-label-caps text-[11px] uppercase tracking-widest text-[#d4af37]" data-i18n="rate3-tag">3. TRATTAMENTI SPECIALI</span>
                                <span class="font-headline-sm text-2xl text-[#d4af37] font-semibold">40 €</span>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-display-hero text-xl text-[#f5efe6]" data-i18n="rate3-title">Trattamenti Speciali</h4>
                                <span class="font-label-caps text-xs text-[#a89f91] block" data-i18n="rate3-duration">Durata: 30 minuti</span>
                            </div>
                            <p class="text-xs text-[#dcd5ca] leading-relaxed font-light" data-i18n="rate3-desc">
                                Piccoli rituali dedicati alla cura e all'armonia del corpo e del viso.
                            </p>
                            <ul class="text-xs text-[#a89f91] space-y-1.5 pt-2 border-t border-[#d4af37]/15">
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate3-item1">Riflessologia Plantare</span></li>
                                <li class="flex items-center gap-1.5"><span class="text-[#d4af37]">•</span> <span data-i18n="rate3-item2">Massaggio Kobido (viso)</span></li>
                            </ul>
                        </div>
                        <div class="pt-4 border-t border-[#d4af37]/15">
                            <a class="font-label-caps text-xs uppercase tracking-wider text-[#d4af37] hover:text-[#f2ca50] flex items-center justify-between transition-colors" href="#prenotazione">
                                <span data-i18n="req-appt">Richiedi appuntamento</span> <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4 max-w-3xl mx-auto pt-8">
                <div class="text-center space-y-2 mb-8">
                    <span class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37]" data-i18n="faq-badge">DOMANDE FREQUENTI</span>
                    <h3 class="font-display-hero text-2xl sm:text-3xl text-[#f5efe6]" data-i18n="faq-title">Tutto Ciò che Desideri Sapere</h3>
                </div>

                <details class="group p-5 rounded-sm bg-[#1a1916] border border-[#d4af37]/25 transition-all cursor-pointer open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.15)]">
                    <summary class="flex items-center justify-between font-headline-sm text-base md:text-lg text-[#f5efe6]">
                        <span data-i18n="faq1-q">Cosa comprende ogni sessione di massaggio?</span>
                        <span class="faq-icon material-symbols-outlined text-[#d4af37] transition-transform duration-300">add</span>
                    </summary>
                    <p class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/15 pt-3" data-i18n="faq1-a">
                        Ogni trattamento comprende un'accoglienza calorosa con tisana botanica biologica, una breve consulenza iniziale per ascoltare le tue necessità e la personalizzazione degli oli essenziali riscaldati. Al termine, avrai tutto il tempo per riprendere contatto con te stesso in totale tranquillità.
                    </p>
                </details>

                <details class="group p-5 rounded-sm bg-[#1a1916] border border-[#d4af37]/25 transition-all cursor-pointer open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.15)]">
                    <summary class="flex items-center justify-between font-headline-sm text-base md:text-lg text-[#f5efe6]">
                        <span data-i18n="faq2-q">Come posso prenotare un appuntamento?</span>
                        <span class="faq-icon material-symbols-outlined text-[#d4af37] transition-transform duration-300">add</span>
                    </summary>
                    <p class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/15 pt-3" data-i18n="faq2-a">
                        Puoi prenotare direttamente via messaggio WhatsApp oppure compilando il modulo rapido sottostante. Elena ti risponderà nel più breve tempo possibile per confermare la data e l'orario perfetti per il tuo momento di quiete.
                    </p>
                </details>

                <details class="group p-5 rounded-sm bg-[#1a1916] border border-[#d4af37]/25 transition-all cursor-pointer open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.15)]">
                    <summary class="flex items-center justify-between font-headline-sm text-base md:text-lg text-[#f5efe6]">
                        <span data-i18n="faq3-q">Quali prodotti e oli vengono utilizzati sulla pelle?</span>
                        <span class="faq-icon material-symbols-outlined text-[#d4af37] transition-transform duration-300">add</span>
                    </summary>
                    <p class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/15 pt-3" data-i18n="faq3-a">
                        Utilizziamo unicamente oli vegetali biologici spremuti a freddo (mandorle dolci, jojoba, sesamo) privi di profumi sintetici, uniti a oli essenziali purissimi distillati a vapore, scelti in base alle tue esigenze fisiche ed energetiche.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- 8. PRENOTAZIONE RAPIDA & CONCIERGE -->
    <section class="w-full py-20 bg-[#0f0e0c] border-t border-[#d4af37]/20" id="prenotazione">
        <div class="max-w-[1100px] mx-auto px-6 md:px-12">
            <div class="bg-[#1a1916] p-8 md:p-14 rounded-sm shadow-[0_8px_30px_rgba(0,0,0,0.8)] border border-[#d4af37]/30">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
                    
                    <div class="md:col-span-5 space-y-4">
                        <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]" data-i18n="book-box-badge">PRENOTAZIONI & CONTATTO</span>
                        <h3 class="font-display-hero text-3xl text-[#f5efe6]" data-i18n="book-box-title">Riserva il Tuo Momento di Quiete</h3>
                        <p class="text-sm text-[#a89f91] leading-relaxed" data-i18n="book-box-desc">
                            Invia una richiesta direttamente via WhatsApp o compila i dettagli: Elena risponderà personalmente per confermare l'orario ideale.
                        </p>
                        <div class="pt-4 space-y-2 text-xs text-[#dcd5ca]">
                            <p class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-[#d4af37] text-base">location_on</span>
                                <span><?php echo esc_html(rdl_get_option('rdl_address', 'San Giustino (PG)')); ?></span>
                            </p>
                            <p class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-[#d4af37] text-base shrink-0 mt-0.5">schedule</span>
                                <span>
                                    <strong class="text-[#f5efe6] font-normal block" data-i18n="home-hours"><?php echo esc_html(rdl_get_option('rdl_hours', 'Lunedì - Venerdì: 09:00 - 20:00')); ?></strong>
                                    <span class="text-[#a89f91] text-[11px]" data-i18n="home-hours-sec"><?php echo esc_html(rdl_get_option('rdl_hours_secondary', 'Sabato & Domenica: Chiuso')); ?></span>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="md:col-span-7 bg-[#0f0e0c] p-6 rounded-sm space-y-4 border border-[#d4af37]/20">
                        <form class="space-y-4" onsubmit="event.preventDefault(); window.inviaWhatsApp('<?php echo esc_js(rdl_get_option('rdl_whatsapp', '+39 333 491 8428')); ?>');">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-name">Il tuo Nome</label>
                                    <input class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-sm focus:border-[#d4af37] focus:ring-0" id="input-nome" placeholder="Es. Laura Martini" required="" type="text" />
                                </div>
                                <div>
                                    <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-phone">Telefono / WhatsApp</label>
                                    <input class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-sm focus:border-[#d4af37] focus:ring-0" id="input-tel" placeholder="+39 333 491 8428" required="" type="tel" />
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-treatment">Trattamento Desiderato</label>
                                <select class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] border border-[#d4af37]/30 rounded-sm focus:border-[#d4af37] focus:ring-0" id="input-trattamento">
                                    <optgroup label="1. MASSAGGI RILASSANTI (60 min • 60€)" class="bg-[#141311] text-[#d4af37] font-semibold">
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio Californiano (60 min • 60€)">Massaggio Californiano (60 min • 60€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio Hawaiano (60 min • 60€)">Massaggio Hawaiano (60 min • 60€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio Antistress (60 min • 60€)">Massaggio Antistress (60 min • 60€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio Lomi Lomi con pietre calde (60 min • 60€)">Massaggio Lomi Lomi con pietre calde (60 min • 60€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio con cera calda (60 min • 60€)">Massaggio con cera calda (60 min • 60€)</option>
                                    </optgroup>
                                    <optgroup label="2. MASSAGGI MIRATI (60 min • 70€)" class="bg-[#141311] text-[#d4af37] font-semibold">
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Trattamento Cervicale (60 min • 70€)">Trattamento Cervicale (60 min • 70€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Tecniche di Sblocco (60 min • 70€)">Tecniche di Sblocco (60 min • 70€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio Miofasciale (60 min • 70€)">Massaggio Miofasciale (60 min • 70€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Medicina Tradizionale Cinese applicata ai Meridiani (60 min • 70€)">Medicina Tradizionale Cinese applicata ai Meridiani (60 min • 70€)</option>
                                    </optgroup>
                                    <optgroup label="3. TRATTAMENTI SPECIALI (30 min • 40€)" class="bg-[#141311] text-[#d4af37] font-semibold">
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Riflessologia Plantare (30 min • 40€)">Riflessologia Plantare (30 min • 40€)</option>
                                        <option class="bg-[#1a1916] text-[#f5efe6]" value="Massaggio Kobido viso (30 min • 40€)">Massaggio Kobido (viso) (30 min • 40€)</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div>
                                <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-datetime">Giorno o Orario Preferito</label>
                                <input class="w-full text-xs p-3 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-sm focus:border-[#d4af37] focus:ring-0" id="input-data" placeholder="Es. Giovedì pomeriggio ore 16:30" type="text" />
                            </div>
                            <button class="w-full py-3.5 bg-[#d4af37] hover:bg-[#f2ca50] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-widest transition-colors flex items-center justify-center gap-2 rounded-sm shadow-[0_0_20px_rgba(212,175,55,0.25)]" type="submit">
                                <span class="material-symbols-outlined text-sm">send</span>
                                <span data-i18n="btn-submit-wa">Invia Richiesta via WhatsApp</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
