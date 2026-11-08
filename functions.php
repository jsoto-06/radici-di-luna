<?php
/**
 * Radici di Luna - Theme Functions & Definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

// Include Module Files
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function rdl_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 800, true);

    // Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // HTML5 markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Menu Principale (Header)', 'radici-di-luna'),
        'footer'  => __('Menu Footer', 'radici-di-luna'),
    ));
}
add_action('after_setup_theme', 'rdl_setup');

/**
 * Enqueue scripts and styles.
 */
function rdl_scripts() {
    // Google Fonts: Playfair Display + Manrope
    wp_enqueue_style(
        'rdl-google-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap',
        array(),
        null
    );

    // Material Symbols Outlined
    wp_enqueue_style(
        'rdl-material-icons',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
        array(),
        null
    );

    // Main style.css
    wp_enqueue_style('rdl-style', get_stylesheet_uri(), array(), '1.0.10');

    // Custom theme CSS
    wp_enqueue_style('rdl-custom-css', get_template_directory_uri() . '/assets/css/custom.css', array('rdl-style'), '1.0.10');

    // Tailwind CDN Script for rapid modern styling
    wp_enqueue_script('rdl-tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false);

    // Main Theme JavaScript (loaded in head so language switcher and event handlers are ready immediately)
    wp_enqueue_script('rdl-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.10', false);

    // Pass data to JS
    wp_localize_script('rdl-main-js', 'rdlThemeData', array(
        'ajaxurl'  => admin_url('admin-ajax.php'),
        'whatsapp' => rdl_get_option('rdl_whatsapp', '+39 333 491 8428'),
    ));
}
add_action('wp_enqueue_scripts', 'rdl_scripts');

/**
 * Add Tailwind Theme Config to Head
 */
function rdl_tailwind_head_config() {
    ?>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "gold-shimmer": "#DFC07E",
                        "gold-accent": "var(--rdl-gold-primary, #d4af37)",
                        "gold-light": "#f2ca50",
                        "primary-container": "var(--rdl-gold-primary, #d4af37)",
                        "surface-dark": "var(--rdl-surface-dark, #0f0e0c)",
                        "surface-dim": "#141311",
                        "surface-card": "#1a1916",
                        "surface-elevated": "#24221f",
                        "surface-bright": "#2e2b27",
                        "gold-border": "rgba(212, 175, 55, 0.22)",
                        "text-cream": "#f5efe6",
                        "text-muted": "#dcd5ca",
                        "text-subtle": "#a89f91",
                        "charcoal-luxe": "#0f0e0c"
                    },
                    fontFamily: {
                        "display-hero": ["Playfair Display", "serif"],
                        "headline-lg": ["Playfair Display", "serif"],
                        "headline-md": ["Playfair Display", "serif"],
                        "headline-sm": ["Playfair Display", "serif"],
                        "title-editorial": ["Playfair Display", "serif"],
                        "body-lg": ["Manrope", "sans-serif"],
                        "body-md": ["Manrope", "sans-serif"],
                        "body-sm": ["Manrope", "sans-serif"],
                        "label-caps": ["Manrope", "sans-serif"]
                    },
                    spacing: {
                        "space-2xs": "0.25rem",
                        "space-xs": "0.5rem",
                        "space-sm": "0.75rem",
                        "space-md": "1.25rem",
                        "space-lg": "2rem",
                        "space-xl": "3.5rem",
                        "space-2xl": "5.5rem",
                        "margin": "1.25rem",
                        "margin-tablet": "2.5rem",
                        "margin-desktop": "4rem",
                        "gutter": "1.5rem",
                        "gutter-desktop": "2.5rem"
                    },
                    letterSpacing: {
                        "suksai-title": "0.14em",
                        "suksai-nav": "0.12em",
                        "suksai-sub": "0.22em"
                    }
                }
            }
        };
    </script>
    <?php
}
add_action('wp_head', 'rdl_tailwind_head_config', 2);

/**
 * Fallback menu if no WordPress menu is assigned
 */
function rdl_default_menu() {
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
        <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#d4af37] font-semibold hover:text-[#f2ca50] transition-colors" href="<?php echo esc_url($home_url); ?>">
            Home
        </a>
        <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" href="<?php echo esc_url($trattamenti_url); ?>">
            Trattamenti
        </a>
        <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" href="<?php echo esc_url($chi_sono_url); ?>">
            Chi Sono (Elena)
        </a>
        <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" href="<?php echo esc_url($filosofia_url); ?>">
            Filosofia
        </a>
        <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" href="<?php echo esc_url($faq_url); ?>">
            FAQ
        </a>
        <a class="font-label-caps text-xs uppercase tracking-suksai-nav text-[#dcd5ca] hover:text-[#d4af37] transition-colors" href="<?php echo esc_url($prenota_url); ?>">
            Contatti
        </a>
    </nav>
    <?php
}

/**
 * Mobile Drawer Menu Fallback
 */
function rdl_default_mobile_menu() {
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
    <nav class="flex flex-col space-y-5 text-left py-6">
        <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($home_url); ?>">
            <span>Home</span>
            <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
        </a>
        <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($trattamenti_url); ?>">
            <span>Trattamenti & Massaggi</span>
            <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
        </a>
        <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($chi_sono_url); ?>">
            <span>Chi Sono (Elena)</span>
            <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
        </a>
        <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($filosofia_url); ?>">
            <span>Filosofia & Rituali</span>
            <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
        </a>
        <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($faq_url); ?>">
            <span>Domande Frequenti</span>
            <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
        </a>
        <a class="font-display-hero text-2xl text-[#f5efe6] hover:text-[#d4af37] border-b border-[#d4af37]/20 pb-3 transition-colors flex items-center justify-between" href="<?php echo esc_url($prenota_url); ?>">
            <span>Prenota / Contatti</span>
            <span class="material-symbols-outlined text-sm text-[#d4af37]">arrow_forward</span>
        </a>
    </nav>
    <?php
}
