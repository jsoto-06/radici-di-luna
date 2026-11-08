<?php
/**
 * Radici di Luna - Header Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth dark">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0f0e0c" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#0f0e0c] font-body-md text-[#f5efe6] antialiased selection:bg-[#d4af37]/30 selection:text-[#f5efe6]'); ?>>
<?php wp_body_open(); ?>

<!-- 1. FIXED HEADER / NAVIGATION (Nocturne Aurum luxury aesthetic) -->
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#141311]/92 backdrop-blur-md border-b border-[#d4af37]/20 shadow-[0_4px_20px_rgba(0,0,0,0.6)]">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12 h-20 md:h-24 flex items-center justify-between">
        
        <!-- Brand Logo / Editorial Wordmark -->
        <a class="flex items-center gap-3 group" href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <div class="flex flex-col">
                    <span class="font-display-hero text-xl md:text-2xl tracking-[0.16em] uppercase text-[#f5efe6] font-normal group-hover:text-[#d4af37] transition-colors">
                        <?php echo esc_html(get_bloginfo('name', 'display') ? get_bloginfo('name', 'display') : 'RADICI DI LUNA'); ?>
                    </span>
                    <span class="font-label-caps text-[9px] uppercase tracking-[0.32em] text-[#d4af37] pl-0.5" data-i18n="brand-sub">
                        <?php echo esc_html(rdl_get_option('rdl_brand_subtitle', 'Studio Olistico • San Giustino')); ?>
                    </span>
                </div>
                <?php
            }
            ?>
        </a>

        <!-- Desktop Nav Centered -->
        <?php
        $home_url = home_url('/');
        $is_home = is_front_page();

        $chi_sono_page = get_page_by_path('chi-sono');
        $trattamenti_page = get_page_by_path('trattamenti');
        $prenota_page = get_page_by_path('prenota');

        $chi_sono_url = $chi_sono_page ? get_permalink($chi_sono_page) : ($is_home ? '#chi-sono' : $home_url . '#chi-sono');
        $trattamenti_url = $trattamenti_page ? get_permalink($trattamenti_page) : ($is_home ? '#massaggi-overview' : $home_url . '#massaggi-overview');
        $prenota_url = $prenota_page ? get_permalink($prenota_page) : ($is_home ? '#prenotazione' : $home_url . '#prenotazione');
        $filosofia_url = $is_home ? '#filosofia' : $home_url . '#filosofia';
        $faq_url = $is_home ? '#faq' : $home_url . '#faq';
        ?>
        <nav class="hidden lg:flex items-center gap-7 xl:gap-9">
            <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#d4af37] font-semibold hover:text-[#f2ca50] transition-colors" data-i18n="nav-home" href="<?php echo esc_url($home_url); ?>">
                Home
            </a>
            <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" data-i18n="nav-treatments" href="<?php echo esc_url($trattamenti_url); ?>">
                Trattamenti
            </a>
            <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" data-i18n="nav-about" href="<?php echo esc_url($chi_sono_url); ?>">
                Chi Sono (Elena)
            </a>
            <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" data-i18n="nav-philosophy" href="<?php echo esc_url($filosofia_url); ?>">
                Filosofia
            </a>
            <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" data-i18n="nav-faq" href="<?php echo esc_url($faq_url); ?>">
                FAQ
            </a>
            <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" data-i18n="nav-contact" href="<?php echo esc_url($prenota_url); ?>">
                Contatti
            </a>
        </nav>

        <!-- Right Utility Actions -->
        <div class="flex items-center gap-3 md:gap-5">
            <!-- Language Switcher Pill -->
            <div class="hidden sm:flex items-center text-[10px] font-label-caps tracking-widest text-[#a89f91] divide-x divide-[#d4af37]/30 bg-[#1a1916] px-2.5 py-1.5 rounded-full border border-[#d4af37]/25" id="header-lang-picker">
                <button type="button" class="lang-switch-btn pr-2 font-bold text-[#d4af37] cursor-pointer hover:text-[#f5efe6] transition-colors" data-lang="it" onclick="setLanguage('it');">IT</button>
                <button type="button" class="lang-switch-btn px-2 text-[#a89f91] hover:text-[#f5efe6] cursor-pointer transition-colors" data-lang="en" onclick="setLanguage('en');">EN</button>
                <button type="button" class="lang-switch-btn pl-2 text-[#a89f91] hover:text-[#f5efe6] cursor-pointer transition-colors" data-lang="es" onclick="setLanguage('es');">ES</button>
            </div>

            <!-- Instagram Icon Link (Desktop) -->
            <?php $header_instagram = rdl_get_option('rdl_instagram', 'https://www.instagram.com/studio_olistico_radici_di_luna'); ?>
            <a class="hidden sm:inline-flex w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/30 items-center justify-center text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all" href="<?php echo esc_url($header_instagram); ?>" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram @studio_olistico_radici_di_luna">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>

            <!-- Direct Prenota CTA (Desktop) -->
            <a class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#d4af37] text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] font-label-caps text-[11px] uppercase tracking-suksai-nav transition-all duration-300 shadow-[0_0_15px_rgba(212,175,55,0.15)] hover:shadow-[0_0_25px_rgba(212,175,55,0.4)]" href="<?php echo esc_url($prenota_url); ?>">
                <span data-i18n="nav-book">Prenota</span>
                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </a>

            <!-- Mobile Hamburger Toggle Button (High-Finish Gold) -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg bg-[#1a1916] text-[#d4af37] hover:text-[#f2ca50] border border-[#d4af37]/30 focus:outline-none focus:border-[#d4af37] transition-all" aria-label="<?php esc_attr_e('Apri menu di navigazione', 'radici-di-luna'); ?>">
                <span class="material-symbols-outlined text-2xl block">menu</span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Slide-Out Drawer Navigation Backdrop -->
<div id="mobile-backdrop" class="fixed inset-0 z-50 modal-backdrop backdrop-hidden" aria-hidden="true"></div>

<!-- Mobile Slide-Out Drawer Navigation Panel -->
<aside id="mobile-drawer" class="fixed top-0 right-0 bottom-0 w-[85%] max-w-[380px] z-50 bg-[#141311] border-l border-[#d4af37]/30 p-6 flex flex-col justify-between overflow-y-auto drawer-closed shadow-2xl">
    <div>
        <!-- Drawer Header with Logo & Close Button -->
        <div class="flex items-center justify-between pb-6 border-b border-[#d4af37]/20">
            <div class="flex flex-col">
                <span class="font-display-hero text-lg tracking-[0.16em] uppercase text-[#f5efe6]">RADICI DI LUNA</span>
                <span class="font-label-caps text-[8px] uppercase tracking-[0.3em] text-[#d4af37]" data-i18n="brand-sub">Studio Olistico • San Giustino</span>
            </div>
            <button id="mobile-drawer-close" class="p-2 text-[#a89f91] hover:text-[#d4af37] transition-colors" aria-label="<?php esc_attr_e('Chiudi menu', 'radici-di-luna'); ?>">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <!-- Language Pill Switcher in Mobile Drawer -->
        <div class="flex items-center justify-center gap-4 text-xs font-label-caps tracking-widest text-[#a89f91] mt-6 p-2 rounded-full bg-[#1a1916] border border-[#d4af37]/20" id="drawer-lang-picker">
            <button type="button" class="mobile-lang-btn font-bold text-[#d4af37] cursor-pointer hover:text-[#f5efe6] transition-colors" data-lang="it" onclick="setLanguage('it');">Italiano</button>
            <span class="text-[#d4af37]/30">•</span>
            <button type="button" class="mobile-lang-btn text-[#a89f91] hover:text-[#f5efe6] cursor-pointer transition-colors" data-lang="en" onclick="setLanguage('en');">English</button>
            <span class="text-[#d4af37]/30">•</span>
            <button type="button" class="mobile-lang-btn text-[#a89f91] hover:text-[#f5efe6] cursor-pointer transition-colors" data-lang="es" onclick="setLanguage('es');">Español</button>
        </div>

        <!-- Mobile Navigation Links -->
        <nav class="flex flex-col space-y-5 text-left py-6">
            <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($home_url); ?>">
                <span data-i18n="nav-home">Home</span>
                <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
            </a>
            <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($trattamenti_url); ?>">
                <span data-i18n="nav-treatments">Trattamenti & Massaggi</span>
                <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
            </a>
            <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($chi_sono_url); ?>">
                <span data-i18n="nav-about">Chi Sono (Elena)</span>
                <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
            </a>
            <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($filosofia_url); ?>">
                <span data-i18n="nav-philosophy">Filosofia & Rituali</span>
                <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
            </a>
            <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($faq_url); ?>">
                <span data-i18n="nav-faq">Domande Frequenti</span>
                <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
            </a>
            <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($prenota_url); ?>">
                <span data-i18n="nav-contact">Prenota / Contatti</span>
                <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
            </a>
        </nav>
    </div>

    <!-- Drawer Footer Actions: WhatsApp & Phone -->
    <div class="pt-6 border-t border-[#d4af37]/20 space-y-3">
        <a class="w-full py-3 px-4 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider flex items-center justify-center gap-2 shadow-[0_0_15px_rgba(212,175,55,0.25)] hover:bg-[#f2ca50] transition-colors" href="<?php echo esc_url($prenota_url); ?>">
            <span class="material-symbols-outlined text-sm">calendar_month</span>
            <span data-i18n="nav-book-action">Prenota Trattamento</span>
        </a>

        <?php
        $whatsapp_num = rdl_get_option('rdl_whatsapp', '+39 333 491 8428');
        $phone_num    = rdl_get_option('rdl_phone', '+39 333 491 8428');
        $instagram_url = rdl_get_option('rdl_instagram', 'https://www.instagram.com/studio_olistico_radici_di_luna');
        ?>
        <a class="w-full py-2.5 px-4 rounded-full border border-[#d4af37]/40 text-[#d4af37] font-label-caps text-xs uppercase tracking-wider flex items-center justify-center gap-2 hover:bg-[#d4af37]/10 transition-colors" href="<?php echo esc_url(rdl_get_whatsapp_url('Buongiorno Elena, vorrei richiedere informazioni per un trattamento.')); ?>" target="_blank" rel="noopener">
            <span class="material-symbols-outlined text-sm">chat</span>
            <span>WhatsApp Concierge</span>
        </a>

        <a class="w-full py-2 px-4 rounded-full bg-[#1a1916] border border-[#d4af37]/25 text-[#f5efe6] font-label-caps text-[11px] uppercase tracking-wider flex items-center justify-center gap-2 hover:border-[#d4af37] transition-colors mt-2" href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener">
            <svg class="w-3.5 h-3.5 fill-[#d4af37]" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            <span>Instagram</span>
        </a>

        <div class="text-center pt-2">
            <a class="text-xs text-[#a89f91] hover:text-[#d4af37] transition-colors flex items-center justify-center gap-1" href="tel:<?php echo esc_attr(rdl_clean_phone($phone_num)); ?>">
                <span class="material-symbols-outlined text-sm">call</span>
                <span><?php echo esc_html($phone_num); ?></span>
            </a>
        </div>
    </div>
</aside>
