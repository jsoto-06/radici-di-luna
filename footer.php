<?php
/**
 * Radici di Luna - Footer Template
 */

$whatsapp_num = rdl_get_option('rdl_whatsapp', '+39 333 491 8428');
$phone_num    = rdl_get_option('rdl_phone', '+39 333 491 8428');
$address      = rdl_get_option('rdl_address', 'San Giustino (PG)');
$directions   = rdl_get_option('rdl_directions', 'Riceve solo su appuntamento');
$hours        = rdl_get_option('rdl_hours', 'Lunedì - Venerdì: 09:00 - 20:00');
$hours_sec    = rdl_get_option('rdl_hours_secondary', 'Sabato & Domenica: Chiuso');
$footer_desc  = rdl_get_option('rdl_footer_desc', 'Uno spazio esclusivo a San Giustino consacrato all\'ascolto, al riposo sensoriale e alla cura artigianale del corpo.');
$footer_copy  = rdl_get_option('rdl_footer_copy', '© ' . date('Y') . ' Studio Olistico Radici di Luna di Elena. Tutti i diritti riservati.');
$maps_url     = rdl_get_option('rdl_maps_url', 'https://share.google/N0plZW2u67u1ON9xw');
$google_reviews_url = rdl_get_option('rdl_google_reviews_url', 'https://share.google/N0plZW2u67u1ON9xw');
$instagram_url      = rdl_get_option('rdl_instagram', 'https://www.instagram.com/studio_olistico_radici_di_luna');
$privacy_url        = rdl_get_option('rdl_privacy_url', '#modal-privacy');
$cookie_url         = rdl_get_option('rdl_cookie_url', '#modal-cookies');
$terms_url          = rdl_get_option('rdl_terms_url', '#modal-terms');
$disclaimer_url     = rdl_get_option('rdl_disclaimer_url', '#modal-disclaimer');
$cookie_banner_enabled = rdl_get_option('rdl_enable_cookie_banner', true);

$home_url = home_url('/');
$chi_sono_page = get_page_by_path('chi-sono');
$trattamenti_page = get_page_by_path('trattamenti');
$prenota_page = get_page_by_path('prenota');

$chi_sono_url = $chi_sono_page ? get_permalink($chi_sono_page) : (is_front_page() ? '#chi-sono' : $home_url . '#chi-sono');
$trattamenti_url = $trattamenti_page ? get_permalink($trattamenti_page) : (is_front_page() ? '#massaggi-overview' : $home_url . '#massaggi-overview');
$prenota_url = $prenota_page ? get_permalink($prenota_page) : (is_front_page() ? '#prenotazione' : $home_url . '#prenotazione');
?>

<!-- 8. FOOTER (Nocturne Aurum rich luxury footer) -->
<footer class="w-full bg-[#0a0908] text-[#f5efe6] pt-16 md:pt-20 pb-12 border-t border-[#d4af37]/20">
    <div class="max-w-[1360px] mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-14 border-b border-[#d4af37]/15">
            
            <!-- Col 1: Brand & Filosofia -->
            <div class="lg:col-span-4 space-y-4">
                <div class="flex flex-col">
                    <span class="font-display-hero text-2xl tracking-[0.14em] uppercase text-[#f5efe6]">
                        <?php echo esc_html(get_bloginfo('name', 'display') ? get_bloginfo('name', 'display') : 'RADICI DI LUNA'); ?>
                    </span>
                    <span class="font-label-caps text-[9px] uppercase tracking-[0.3em] text-[#d4af37]" data-i18n="brand-sub">
                        <?php echo esc_html(rdl_get_option('rdl_brand_subtitle', 'Studio Olistico • San Giustino')); ?>
                    </span>
                </div>
                <p class="text-sm text-[#a89f91] font-light leading-relaxed max-w-sm" data-i18n="footer-desc">
                    <?php echo esc_html($footer_desc); ?>
                </p>
                <div class="pt-2 flex items-center gap-3">
                    <a class="w-9 h-9 rounded-full bg-[#1a1916] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all" href="<?php echo esc_url(rdl_get_whatsapp_url()); ?>" target="_blank" rel="noopener" aria-label="WhatsApp" title="WhatsApp Concierge">
                        <span class="material-symbols-outlined text-sm">chat</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-[#1a1916] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all" href="tel:<?php echo esc_attr(rdl_clean_phone($phone_num)); ?>" aria-label="Telefono" title="Telefono">
                        <span class="material-symbols-outlined text-sm">call</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-[#1a1916] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all" href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram @studio_olistico_radici_di_luna">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-[#1a1916] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all" href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" aria-label="Google Maps" title="Dove Siamo (Google Maps)">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-[#1a1916] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all" href="<?php echo esc_url($google_reviews_url); ?>" target="_blank" rel="noopener" aria-label="Recensioni Google" title="Recensioni Google (5.0)">
                        <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                    </a>
                </div>
            </div>

            <!-- Col 2: Navigazione -->
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-caps text-xs uppercase tracking-[0.2em] text-[#d4af37]" data-i18n="footer-explore">Esplora</h4>
                <ul class="space-y-2.5 text-xs text-[#dcd5ca]">
                    <li><a class="hover:text-[#d4af37] transition-colors" data-i18n="nav-home" href="<?php echo esc_url($home_url); ?>">Home</a></li>
                    <li><a class="hover:text-[#d4af37] transition-colors" data-i18n="nav-treatments" href="<?php echo esc_url($trattamenti_url); ?>">Tutti i Massaggi</a></li>
                    <li><a class="hover:text-[#d4af37] transition-colors" data-i18n="nav-about" href="<?php echo esc_url($chi_sono_url); ?>">Chi Sono (Elena)</a></li>
                    <li><a class="hover:text-[#d4af37] transition-colors" data-i18n="nav-philosophy" href="<?php echo esc_url(is_front_page() ? '#filosofia' : $home_url . '#filosofia'); ?>">Filosofia del Tocco</a></li>
                    <li><a class="hover:text-[#d4af37] transition-colors" data-i18n="nav-faq" href="<?php echo esc_url(is_front_page() ? '#faq' : $home_url . '#faq'); ?>">Domande Frequenti</a></li>
                    <li><a class="hover:text-[#d4af37] transition-colors" data-i18n="nav-contact" href="<?php echo esc_url($prenota_url); ?>">Contatti & Dove Siamo</a></li>
                </ul>
            </div>

            <!-- Col 3: Indirizzo e Orari -->
            <div class="lg:col-span-3 space-y-4">
                <h4 class="font-label-caps text-xs uppercase tracking-[0.2em] text-[#d4af37]" data-i18n="footer-studio">Lo Studio Privato</h4>
                <div class="space-y-3 text-xs text-[#dcd5ca]">
                    <p class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-[#d4af37] text-base shrink-0 mt-0.5">pin_drop</span>
                        <span><?php echo esc_html($address); ?><br><span class="text-[#a89f91]"><?php echo esc_html($directions); ?></span></span>
                    </p>
                    <p class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-[#d4af37] text-base shrink-0 mt-0.5">schedule</span>
                        <span>
                            <strong class="text-[#f5efe6] font-normal block" data-i18n="footer-hours"><?php echo esc_html($hours); ?></strong>
                            <span class="text-[#a89f91] text-[11px]" data-i18n="footer-hours-sec"><?php echo esc_html($hours_sec); ?></span>
                        </span>
                    </p>
                    <p class="flex items-start gap-2">
                        <span class="material-symbols-outlined text-[#d4af37] text-base shrink-0 mt-0.5">call</span>
                        <a href="tel:<?php echo esc_attr(rdl_clean_phone($phone_num)); ?>" class="hover:text-[#d4af37] transition-colors"><?php echo esc_html($phone_num); ?></a>
                    </p>
                </div>
            </div>

            <!-- Col 4: Concierge WhatsApp -->
            <div class="lg:col-span-3 space-y-4 bg-[#141311] p-5 rounded-sm border border-[#d4af37]/25">
                <h4 class="font-label-caps text-xs uppercase tracking-[0.2em] text-[#f5efe6] flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#d4af37] text-sm">support_agent</span>
                    <span data-i18n="footer-concierge">Concierge Olistico</span>
                </h4>
                <p class="text-xs text-[#a89f91] leading-relaxed" data-i18n="footer-concierge-desc">
                    Per consigli personalizzati sul rituale ideale o voucher regalo esclusivi:
                </p>
                <a class="inline-flex items-center gap-2 px-4 py-2.5 w-full justify-center border border-[#d4af37] bg-[#d4af37]/10 rounded-full text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] text-[11px] uppercase tracking-wider font-semibold transition-all shadow-[0_0_12px_rgba(212,175,55,0.15)]" href="<?php echo esc_url(rdl_get_whatsapp_url('Buongiorno Elena, vorrei richiedere informazioni per una sessione.')); ?>" target="_blank" rel="noopener">
                    <span class="material-symbols-outlined text-sm">chat</span>
                    <span data-i18n="footer-wa">WhatsApp Diretto</span>
                </a>
            </div>
        </div>

        <!-- Google Reviews & Community Showcase ("Abajo del todo") -->
        <div class="pt-12 pb-4">
            <!-- Header with Google G, Rating, Title and Actions -->
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-6 mb-8">
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#1a1916] border border-[#d4af37]/40 text-[#d4af37] font-label-caps text-[11px] uppercase tracking-wider mb-3">
                        <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/>
                            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/>
                            <path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/>
                            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/>
                        </svg>
                        <span class="font-bold">5.0</span>
                        <div class="flex items-center text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <span class="text-[#a89f91]" data-i18n="reviews-google-badge">• Eccellenza su Google</span>
                    </div>
                    <h3 class="font-display-hero text-2xl md:text-3xl text-[#f5efe6] font-normal" data-i18n="reviews-headline">
                        Radici di Luna • Studio Olistico su Google
                    </h3>
                    <p class="text-xs md:text-sm text-[#a89f91] font-light max-w-xl mt-1.5" data-i18n="reviews-sub">
                        Scopri le recensioni autentiche e condividi la tua esperienza di benessere.
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a href="<?php echo esc_url($google_reviews_url); ?>" target="_blank" rel="noopener" class="px-5 py-2.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider hover:bg-[#f2ca50] transition-all shadow-[0_0_15px_rgba(212,175,55,0.25)] flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">rate_review</span>
                        <span data-i18n="reviews-btn-read">Leggi le Recensioni su Google</span>
                        <span class="material-symbols-outlined text-xs">open_in_new</span>
                    </a>
                </div>
            </div>

            <!-- 8 Real Reviews Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Review 1: Martina Odoardi -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    MO
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Martina Odoardi</h5>
                                    <span class="text-[10px] text-[#a89f91]">Local Guide • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Ho fatto un massaggio californiano presso questo studio e mi sono trovata veramente molto bene. È stata un’esperienza piacevole e rilassante, un momento tutto per me per staccare dalla routine quotidiana e ritrovare un po’ di serenità."
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Massaggio Californiano</span>
                        <span class="text-[#a89f91]">2 settimane fa</span>
                    </div>
                </div>

                <!-- Review 2: Jerome Branchetti -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    JB
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Jerome Branchetti</h5>
                                    <span class="text-[10px] text-[#a89f91]">Massaggiatore • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Essendo un massaggiatore sono molto esigente e con Elena ho trovato uno spazio per lasciarmi andare. Puntuale e Professionale, ma soprattutto con un grande cuore per saper ascoltare le nostre esigenze. Non vedo l'ora di tornare per una seduta decontratturante"
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Seduta Decontratturante</span>
                        <span class="text-[#a89f91]">4 mesi fa</span>
                    </div>
                </div>

                <!-- Review 3: Andrea Local Guide -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    AG
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Andrea</h5>
                                    <span class="text-[10px] text-[#a89f91]">Local Guide • 19 recensioni</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Elena ha un’elevata sensibilità e precisione nell’individuare tutti i punti 'problematici', già partendo dalla riflessologia plantare, ed è estremamente delicata e rispettosa dello stato dei singoli punti... un'esperienza su misura."
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Riflessologia Plantare</span>
                        <span class="text-[#a89f91]">3 settimane fa</span>
                    </div>
                </div>

                <!-- Review 4: Paola Scenna -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    PS
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Paola Scenna</h5>
                                    <span class="text-[10px] text-[#a89f91]">Recensione Verificata • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Consiglio vivamente il massaggio alle candele calde di Elena... la sua precisione e professionalità unita alla sua sensibilità ed empatia vi faranno vivere un'esperienza rilassante e magica... il calore della cera vi rigenererà corpo e mente!"
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Massaggio con Cera Calda</span>
                        <span class="text-[#a89f91]">Google Review</span>
                    </div>
                </div>

                <!-- Review 5: Valentina Dugo -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    VD
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Valentina Dugo</h5>
                                    <span class="text-[10px] text-[#a89f91]">Recensione Verificata • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Un’ esperienza da ripetere assolutamente, sei riuscita a regalarmi un’ora di relax alleviando la mia stanchezza e tutti i miei dolori muscolari. Avevo le gambe gonfie e pesanti ma grazie a questo massaggio mi sento veramente rigenerata!"
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Benessere Gambe & Muscoli</span>
                        <span class="text-[#a89f91]">4 mesi fa</span>
                    </div>
                </div>

                <!-- Review 6: Serenella Clusini -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    SC
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Serenella Clusini</h5>
                                    <span class="text-[10px] text-[#a89f91]">Recensione Verificata • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Elena è fantastica! Ha mani d'oro ed è riuscita a togliermi il dolore al collo già dopo il primo trattamento. Super consigliata!"
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Trattamento Cervicale</span>
                        <span class="text-[#a89f91]">Google Review</span>
                    </div>
                </div>

                <!-- Review 7: 84theoutsider -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    84
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">84theoutsider</h5>
                                    <span class="text-[10px] text-[#a89f91]">Recensione Verificata • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Ho frequentato lo studio per dei problemi alla schiena e non potrei essere più soddisfatto. Oltre a dimostrare una grande competenza tecnica nel trattamento del dolore, Elena ha un approccio olistico attento a 360 gradi alla persona."
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Trattamento Schiena & Dolore</span>
                        <span class="text-[#a89f91]">1 mese fa</span>
                    </div>
                </div>

                <!-- Review 8: Catia Pecorari -->
                <div class="p-5 rounded-2xl bg-[#141311] border border-[#d4af37]/25 hover:border-[#d4af37]/60 transition-all flex flex-col justify-between group shadow-sm">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] font-label-caps text-xs font-bold">
                                    CP
                                </div>
                                <div>
                                    <h5 class="text-xs font-semibold text-[#f5efe6] leading-tight">Catia Pecorari</h5>
                                    <span class="text-[10px] text-[#a89f91]">Recensione Verificata • Google</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 opacity-75" viewBox="0 0 24 24"><path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z"/><path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.27v3.13C3.25 21.3 7.31 24 12 24z"/><path fill="#FBBC05" d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.27C.46 8.2 0 10.04 0 12s.46 3.8 1.27 5.42l4.01-3.13z"/><path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.58l4.01 3.13c.95-2.83 3.6-4.96 6.72-4.96z"/></svg>
                        </div>
                        <div class="flex items-center gap-1 text-[#d4af37]">
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="text-xs text-[#dcd5ca] font-light leading-relaxed italic line-clamp-4">
                            "Un’esperienza che consiglio dal più profondo del cuore, crea benessere fisico ed interiore, Elena è una persona speciale che ti trasmette serenità e positività."
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-[#d4af37]/15 flex items-center justify-between text-[10px]">
                        <span class="text-[#d4af37] font-label-caps uppercase tracking-wider">Benessere Fisico & Interiore</span>
                        <span class="text-[#a89f91]">6 mesi fa</span>
                    </div>
                </div>

            </div>

            <!-- Instagram Connection Banner ("Santuario su Instagram") -->
            <div class="mt-8 p-6 rounded-2xl bg-gradient-to-r from-[#141311] via-[#1a1916] to-[#141311] border border-[#d4af37]/30 flex flex-col sm:flex-row items-center justify-between gap-5 shadow-[0_4px_25px_rgba(0,0,0,0.6)] hover:border-[#d4af37]/50 transition-all">
                <div class="flex items-center gap-4 text-center sm:text-left flex-col sm:flex-row">
                    <div class="w-12 h-12 rounded-full bg-[#1e1c18] border border-[#d4af37]/45 flex items-center justify-center text-[#d4af37] shrink-0 shadow-[0_0_15px_rgba(212,175,55,0.2)]">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-label-caps tracking-widest text-[#d4af37] block font-semibold">Community & Rituali Quotidiani</span>
                        <h4 class="font-headline-sm text-base md:text-lg text-[#f5efe6] font-normal">
                            Segui <span class="text-[#d4af37]">@studio_olistico_radici_di_luna</span> su Instagram
                        </h4>
                        <p class="text-xs text-[#a89f91] font-light">
                            Approfondimenti olistici, atmosfere dello studio di San Giustino e novità per il tuo benessere.
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener" class="px-5 py-2.5 rounded-full border border-[#d4af37] bg-[#d4af37]/10 text-[#d4af37] font-label-caps text-xs uppercase tracking-wider hover:bg-[#d4af37] hover:text-[#0f0e0c] transition-all flex items-center gap-2 font-bold shadow-[0_0_12px_rgba(212,175,55,0.15)]">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        <span>Visita il Profilo</span>
                        <span class="material-symbols-outlined text-xs">arrow_outward</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Credits & Legal Compliance Links -->
        <div class="pt-8 flex flex-col lg:flex-row items-center justify-between gap-4 text-[11px] text-[#a89f91]/80 font-light text-center lg:text-left">
            <p><?php echo esc_html($footer_copy); ?></p>
            <div class="flex flex-wrap items-center justify-center gap-x-4 gap-y-2">
                <a class="hover:text-[#d4af37] transition-colors cursor-pointer rdl-legal-trigger" data-tab="privacy" href="<?php echo esc_url($privacy_url); ?>" data-i18n="legal-privacy">Informativa sulla Privacy</a>
                <span class="text-[#d4af37]/30 hidden sm:inline">•</span>
                <a class="hover:text-[#d4af37] transition-colors cursor-pointer rdl-legal-trigger" data-tab="cookies" href="<?php echo esc_url($cookie_url); ?>" data-i18n="legal-cookies">Cookie Policy</a>
                <span class="text-[#d4af37]/30 hidden sm:inline">•</span>
                <a class="hover:text-[#d4af37] transition-colors cursor-pointer rdl-legal-trigger" data-tab="terms" href="<?php echo esc_url($terms_url); ?>" data-i18n="legal-terms">Condizioni Generali di Servizio</a>
                <span class="text-[#d4af37]/30 hidden sm:inline">•</span>
                <a class="hover:text-[#d4af37] transition-colors cursor-pointer rdl-legal-trigger" data-tab="disclaimer" href="<?php echo esc_url($disclaimer_url); ?>" data-i18n="legal-disclaimer">Disclaimer Medico (L. 4/2013)</a>
                <span class="text-[#d4af37]/30 hidden sm:inline">•</span>
                <button type="button" class="hover:text-[#d4af37] transition-colors cursor-pointer text-[#d4af37] flex items-center gap-1 font-semibold" onclick="window.rdlOpenCookiePreferences();" data-i18n="legal-cookie-pref" aria-label="Preferenze Cookie">
                    <span class="material-symbols-outlined text-[13px]">cookie</span>
                    <span>Preferenze Cookie</span>
                </button>
            </div>
        </div>
    </div>
</footer>

<!-- 9. LEGAL COMPLIANCE MODAL (Privacy, Cookies, Terms, Medical Disclaimer) -->
<div id="rdl-legal-modal" class="fixed inset-0 z-[75] modal-backdrop hidden items-center justify-center p-3 sm:p-5" role="dialog" aria-modal="true" aria-labelledby="legal-modal-title">
    <div class="max-w-3xl w-full max-h-[90vh] flex flex-col rounded-2xl bg-[#141311] border border-[#d4af37]/40 shadow-[0_25px_70px_rgba(0,0,0,0.95)] overflow-hidden">
        
        <!-- Modal Top Bar -->
        <div class="p-5 md:px-7 md:pt-6 md:pb-4 border-b border-[#d4af37]/20 flex items-center justify-between gap-4 bg-[#1a1916]/80 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-[#24221f] border border-[#d4af37]/35 flex items-center justify-center text-[#d4af37] shrink-0">
                    <span class="material-symbols-outlined text-base">gavel</span>
                </div>
                <div>
                    <h3 id="legal-modal-title" class="font-display-hero text-base md:text-lg text-[#f5efe6]" data-i18n="legal-modal-title">Documentazione Legale & Trasparenza</h3>
                    <p class="text-[11px] text-[#a89f91]">Studio Olistico Radici di Luna • San Giustino (PG)</p>
                </div>
            </div>
            <button type="button" onclick="window.rdlCloseLegalModal();" class="text-[#a89f91] hover:text-[#d4af37] transition-colors p-1.5 rounded-full hover:bg-[#24221f] cursor-pointer" aria-label="Chiudi finestra">
                <span class="material-symbols-outlined text-xl">close</span>
            </button>
        </div>

        <!-- Document Selector Tabs -->
        <div class="flex items-center gap-1.5 p-2 bg-[#0f0e0c] border-b border-[#d4af37]/15 overflow-x-auto shrink-0 scrollbar-none text-xs font-label-caps">
            <button type="button" id="rdl-legal-tab-btn-privacy" onclick="window.rdlSwitchLegalTab('privacy');" class="px-3.5 py-2 rounded-lg border border-[#d4af37] bg-[#1a1916] text-[#d4af37] transition-all whitespace-nowrap cursor-pointer" data-i18n="legal-tab-privacy">
                Privacy Policy
            </button>
            <button type="button" id="rdl-legal-tab-btn-cookies" onclick="window.rdlSwitchLegalTab('cookies');" class="px-3.5 py-2 rounded-lg border border-transparent text-[#a89f91] hover:text-[#f5efe6] transition-all whitespace-nowrap cursor-pointer" data-i18n="legal-tab-cookies">
                Cookie Policy
            </button>
            <button type="button" id="rdl-legal-tab-btn-terms" onclick="window.rdlSwitchLegalTab('terms');" class="px-3.5 py-2 rounded-lg border border-transparent text-[#a89f91] hover:text-[#f5efe6] transition-all whitespace-nowrap cursor-pointer" data-i18n="legal-tab-terms">
                Condizioni di Servizio
            </button>
            <button type="button" id="rdl-legal-tab-btn-disclaimer" onclick="window.rdlSwitchLegalTab('disclaimer');" class="px-3.5 py-2 rounded-lg border border-transparent text-[#a89f91] hover:text-[#f5efe6] transition-all whitespace-nowrap cursor-pointer" data-i18n="legal-tab-disclaimer">
                Disclaimer Medico (L. 4/2013)
            </button>
        </div>

        <!-- Scrollable Document Body -->
        <div id="rdl-legal-scroll-area" class="p-6 md:p-8 overflow-y-auto space-y-6 text-xs md:text-sm text-[#dcd5ca] font-light leading-relaxed">
            
            <!-- 1. TAB: Privacy Policy -->
            <div id="rdl-legal-content-privacy" class="space-y-5">
                <div class="border-b border-[#d4af37]/20 pb-3">
                    <span class="text-[10px] uppercase font-label-caps tracking-widest text-[#d4af37] block">Regolamento Generale sulla Protezione dei Dati (UE 2016/679 - GDPR)</span>
                    <h4 class="font-display-hero text-xl text-[#f5efe6] mt-1">Informativa sul Trattamento dei Dati Personali</h4>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">1. Titolare del Trattamento</h5>
                    <p>Il Titolare del trattamento è lo <strong>Studio Olistico Radici di Luna di Elena</strong>, con sede operativa a <strong>San Giustino (PG)</strong>. Per qualsiasi richiesta relativa all'esercizio dei diritti di protezione dei dati, è possibile rivolgersi al Titolare tramite messaggio WhatsApp al numero <strong>+39 333 491 8428</strong> o tramite i canali di contatto ufficiali dello studio.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">2. Dati Personali Oggetto di Trattamento</h5>
                    <p>I dati personali trattati includono dati comuni identificativi e di contatto (nome, cognome, numero di telefono cellulare, recapito WhatsApp, indirizzo email ed eventuali preferenze orarie o note fornite volontariamente dall'interessato) inoltrati spontaneamente in fase di richiesta appuntamento o richiesta informazioni per i rituali benessere.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">3. Finalità e Base Giuridica del Trattamento</h5>
                    <p>I dati sono trattati per le seguenti finalità legittime:</p>
                    <ul class="list-disc list-inside space-y-1 pl-2 text-[#a89f91]">
                        <li>Gestione delle richieste di prenotazione, conferma orari e promemoria delle sessioni (Base giuridica: esecuzione di misure precontrattuali o contrattuali, art. 6, par. 1, lett. b, GDPR);</li>
                        <li>Adempimento di obblighi legali, amministrativi e contabili previsti dalla legislazione fiscale italiana (art. 6, par. 1, lett. c, GDPR);</li>
                        <li>Tutela dei diritti del Titolare in sede stragiudiziale o giudiziaria (legittimo interesse, art. 6, par. 1, lett. f, GDPR).</li>
                    </ul>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">4. Modalità di Trattamento e Sicurezza</h5>
                    <p>Il trattamento viene svolto con strumenti elettronici e supporti cartacei nel pieno rispetto dei principi di correttezza, liceità, trasparenza e minimizzazione dei dati. Vengono adottate misure di sicurezza tecniche e organizzative adeguate per prevenire la perdita dei dati, usi illeciti o accessi non autorizzati. I dati non sono soggetti a profilazione commerciale automatizzata né ceduti a soggetti terzi per scopi promozionali.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">5. Conservazione dei Dati</h5>
                    <p>I dati raccolti per la gestione delle prenotazioni sono conservati per il periodo necessario all'esecuzione del servizio richiesto e, per i dati fiscalmente rilevanti, per la durata obbligatoria stabilita dalla normativa tributaria vigente (ordinariamente 10 anni).</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">6. Diritti dell'Interessato (Artt. 15-22 GDPR)</h5>
                    <p>In ogni momento l'ospite può esercitare i diritti previsti dal GDPR: diritto di accesso, rettifica, cancellazione (diritto all'oblio), limitazione del trattamento, opposizione e portabilità dei dati. Le richieste possono essere indirizzate direttamente allo studio o inoltrate all'Autorità Garante per la Protezione dei Dati Personali (www.garanteprivacy.it).</p>
                </div>
            </div>

            <!-- 2. TAB: Cookie Policy -->
            <div id="rdl-legal-content-cookies" class="space-y-5 hidden">
                <div class="border-b border-[#d4af37]/20 pb-3">
                    <span class="text-[10px] uppercase font-label-caps tracking-widest text-[#d4af37] block">Linee Guida Garante Privacy 10 giugno 2021 & Direttiva ePrivacy</span>
                    <h4 class="font-display-hero text-xl text-[#f5efe6] mt-1">Informativa Estesa sui Cookie & Blocco Preventivo</h4>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">1. Che cosa sono i Cookie</h5>
                    <p>I cookie sono stringhe di testo di piccole dimensioni che i siti visitati inviano al dispositivo dell'utente (computer, smartphone, tablet), dove vengono memorizzati per essere ritrasmessi agli stessi siti in occasione della visita successiva.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">2. Categorie di Cookie Utilizzati</h5>
                    <div class="space-y-3">
                        <div class="p-3.5 rounded-xl bg-[#1a1916] border border-[#d4af37]/20">
                            <strong class="text-[#f5efe6] block text-xs mb-1">A. Cookie Tecnici e di Navigazione (Strettamente Necessari)</strong>
                            <p class="text-xs text-[#a89f91]">Garantiscono la regolare navigazione e sicurezza del sito (es. gestione della sessione, salvataggio della lingua IT/EN/ES e registrazione del consenso cookie <code class="text-[#d4af37]">rdl_cookie_consent_v1</code>). Ai sensi dell'art. 122 del Codice Privacy, per questi cookie non è richiesto il consenso preventivo dell'utente.</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-[#1a1916] border border-[#d4af37]/20">
                            <strong class="text-[#f5efe6] block text-xs mb-1">B. Cookie Analitici e Prestazionali (Soggetti a Consenso)</strong>
                            <p class="text-xs text-[#a89f91]">Rilevano dati aggregati e anonimi sulle visualizzazioni delle pagine per comprendere l'interesse degli ospiti e migliorare la struttura del sito. Vengono bloccati preventivamente fino al rilascio del consenso da parte dell'utente.</p>
                        </div>
                        <div class="p-3.5 rounded-xl bg-[#1a1916] border border-[#d4af37]/20">
                            <strong class="text-[#f5efe6] block text-xs mb-1">C. Cookie di Terze Parti (Mappe e Contenuti Esterni)</strong>
                            <p class="text-xs text-[#a89f91]">Il sito può integrare mappe di Google Maps o collegamenti interattivi ai social network (Instagram). Questi componenti esterni possono installare cookie di terze parti e sono attivati unicamente qualora l'utente accetti espressamente la categoria corrispondente.</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">3. Blocco Tecnico Preventivo e Modifica Preferenze</h5>
                    <p>In conformità ai requisiti normativi europei, nessun cookie non essenziale viene memorizzato sul terminale dell'utente prima della scelta espressa sul banner. In qualsiasi momento è possibile modificare o revocare il proprio consenso cliccando sul pulsante <strong>"Preferenze Cookie"</strong> situato nel footer del sito.</p>
                </div>
            </div>

            <!-- 3. TAB: Condizioni di Servizio -->
            <div id="rdl-legal-content-terms" class="space-y-5 hidden">
                <div class="border-b border-[#d4af37]/20 pb-3">
                    <span class="text-[10px] uppercase font-label-caps tracking-widest text-[#d4af37] block">Studio Olistico Radici di Luna • Elena</span>
                    <h4 class="font-display-hero text-xl text-[#f5efe6] mt-1">Condizioni Generali di Servizio e Accoglienza</h4>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">1. Oggetto del Servizio</h5>
                    <p>Le presenti condizioni disciplinano la prenotazione e l'accesso ai rituali benessere e ai trattamenti olistici eseguiti presso lo Studio Olistico Radici di Luna a <strong>San Giustino (PG)</strong> dall'operatrice olistica Elena.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">2. Modalità di Ricevimento e Prenotazione</h5>
                    <p>Lo studio riceve <strong>esclusivamente su appuntamento</strong> dal lunedì al venerdì dalle 09:00 alle 20:00. Il sabato e la domenica lo studio è chiuso. L'invio di una richiesta dal sito web costituisce una richiesta di disponibilità ed è soggetta a conferma espressa da parte dell'operatrice tramite messaggio WhatsApp o contatto telefonico.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">3. Puntualità e Rituale di Benvenuto</h5>
                    <p>Si raccomanda agli ospiti di presentarsi 10 minuti prima dell'orario stabilito. Questo intervallo consente di degustare una tisana botanica biologica e svolgere un breve consulto iniziale per personalizzare la miscela degli oli essenziali. In caso di ritardo dell'ospite, la durata del massaggio potrà essere ridotta della frazione corrispondente per garantire il rispetto degli orari degli ospiti successivi, senza diritto a riduzioni della tariffa concordata.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">4. Politica di Cancellazione o Riprogrammazione</h5>
                    <p>Riconosciamo l'eventualità di imprevisti quotidiani. Chiediamo cortesemente di comunicare qualsiasi disdetta o richiesta di cambio data con un preavviso minimo di <strong>24 ore</strong> tramite WhatsApp (+39 333 491 8428). La cancellazione tempestiva permette di riassegnare l'orario a ospiti in lista di attesa.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">5. Tariffe e Modalità di Pagamento</h5>
                    <p>Le tariffe di ciascun rituale sono esposte con chiarezza sul sito web (Massaggi Relax e Mirati 60 min: 60€ / 70€; Rituali Viso e Riflessologia 30 min: 40€). Il corrispettivo della seduta viene saldato direttamente presso lo studio al termine della prestazione.</p>
                </div>
            </div>

            <!-- 4. TAB: Disclaimer Medico & Avvertenza Legale (Legge 4/2013) -->
            <div id="rdl-legal-content-disclaimer" class="space-y-5 hidden">
                <div class="border-b border-[#d4af37]/20 pb-3">
                    <span class="text-[10px] uppercase font-label-caps tracking-widest text-[#d4af37] block">Attività Disciplinata ai Sensi della Legge 14 Gennaio 2013, N. 4</span>
                    <h4 class="font-display-hero text-xl text-[#f5efe6] mt-1">Disclaimer Medico & Avvertenza Legale Sanitaria</h4>
                </div>

                <div class="p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/35 text-xs text-[#dcd5ca] space-y-2.5">
                    <p class="font-medium text-[#f5efe6]">
                        <strong class="text-[#d4af37]">AVVERTENZA IMPORTANTE:</strong> I trattamenti, rituali e massaggi offerti presso lo Studio Olistico Radici di Luna consistono in discipline bionaturali e pratiche olistiche orientate al rilassamento, al sollievo da tensioni psico-corporee e al riequilibrio energetico.
                    </p>
                    <p>
                        Tali attività <strong>NON SONO E NON INTENDONO IN ALCUN MODO ESSERE PRESTAZIONI DI NATURA MEDICA, TERAPEUTICA, FISIOTERAPICA O SANITARIA</strong>. Non prevedono la diagnosi, la prescrizione o la cura di alcuna patologia o disturbo clinico e non sostituiscono il parere, le visite o le terapie di medici, fisioterapisti o operatori sanitari abilitati.
                    </p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">Inquadramento Giuridico Professionale</h5>
                    <p>L'attività di operatore olistico è esercitata ai sensi della <strong>Legge 14 gennaio 2013, n. 4</strong> ("Disposizioni in materia di professioni non organizzate in ordini o collegi"), pubblicata nella Gazzetta Ufficiale n. 22 del 26 gennaio 2013.</p>
                </div>

                <div class="space-y-2">
                    <h5 class="text-xs md:text-sm font-semibold uppercase tracking-wider font-label-caps text-[#d4af37]">Obbligo di Informativa dello Stato Fisico da parte dell'Ospite</h5>
                    <p>L'ospite ha il dovere di informare l'operatrice prima dell'inizio del rituale in merito a condizioni fisiche o patologie pregresse o in corso, tra cui a titolo indicativo:</p>
                    <ul class="list-disc list-inside space-y-1 pl-2 text-[#a89f91]">
                        <li>Stato di gravidanza o allattamento;</li>
                        <li>Patologie cardiovascolari, ipertensione grave o problemi di coagulazione/flebiti;</li>
                        <li>Allergie note a oli vegetali (mandorle, sesamo, soia) o a specifici oli essenziali botanici;</li>
                        <li>Infiammazioni acute, lesioni muscolari recenti, fratture, ferite aperte o interventi chirurgici recenti;</li>
                        <li>Patologie cutanee contagiose o dermatiti in fase acuta.</li>
                    </ul>
                    <p class="text-[11px] text-[#a89f91] pt-1">L'operatrice si riserva la facoltà di sconsigliare o astenersi dall'eseguire il trattamento qualora riscontri controindicazioni evidenti per la tutela dell'integrità dell'ospite.</p>
                </div>
            </div>

        </div>

        <!-- Modal Bottom Actions -->
        <div class="p-4 md:px-7 border-t border-[#d4af37]/20 flex flex-col sm:flex-row items-center justify-between gap-3 bg-[#1a1916]/80 shrink-0">
            <span class="text-[11px] text-[#a89f91]">Studio Olistico Radici di Luna • San Giustino (PG)</span>
            <button type="button" onclick="window.rdlCloseLegalModal();" class="px-6 py-2 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold text-xs font-label-caps uppercase tracking-wider hover:bg-[#f2ca50] transition-all cursor-pointer" data-i18n="legal-modal-close">
                Chiudi Finestra
            </button>
        </div>

    </div>
</div>

<?php if ($cookie_banner_enabled) : ?>
<!-- 10. TECHNICAL COOKIE BLOCKING BANNER (GDPR Compliant Nocturne Aurum) -->
<div id="rdl-cookie-banner" class="fixed bottom-0 left-0 right-0 z-[60] p-4 md:p-6 transition-all duration-500 ease-out cb-hidden" role="dialog" aria-modal="true" aria-labelledby="cb-title">
    <div class="max-w-4xl mx-auto rounded-2xl bg-[#141311]/98 backdrop-blur-md border border-[#d4af37]/45 shadow-[0_15px_50px_rgba(0,0,0,0.95)] p-5 md:p-6 text-[#f5efe6]">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-5">
            <div class="space-y-2 flex-1">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37] shrink-0">
                        <span class="material-symbols-outlined text-base">cookie</span>
                    </div>
                    <h4 id="cb-title" class="font-display-hero text-base md:text-lg text-[#f5efe6]" data-i18n="cb-title">
                        Informativa sulla Privacy e Cookie
                    </h4>
                </div>
                <p class="text-xs text-[#a89f91] font-light leading-relaxed" data-i18n="cb-desc">
                    Questo sito utilizza cookie tecnici indispensabili per il corretto funzionamento e per la selezione della lingua. Con il tuo consenso preventivo possiamo attivare cookie analitici e di terze parti per migliorare l'esperienza di navigazione. Puoi accettare tutti i cookie, rifiutare quelli non necessari o personalizzare le tue preferenze.
                </p>
                <div class="pt-0.5">
                    <button type="button" class="text-[11px] text-[#d4af37] hover:underline underline-offset-4 cursor-pointer rdl-legal-trigger" data-tab="cookies" data-i18n="cb-policy-link">
                        Leggi la Cookie Policy completa →
                    </button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5 w-full md:w-auto shrink-0">
                <button type="button" onclick="window.rdlRejectCookies();" class="px-4 py-2.5 rounded-full border border-[#d4af37]/35 text-[#dcd5ca] hover:text-[#f5efe6] hover:border-[#d4af37] text-xs font-label-caps uppercase tracking-wider transition-all text-center cursor-pointer" data-i18n="cb-reject">
                    Rifiuta Non Necessari
                </button>
                <button type="button" onclick="window.rdlOpenCookiePreferences();" class="px-4 py-2.5 rounded-full bg-[#1a1916] border border-[#d4af37]/30 text-[#d4af37] hover:border-[#d4af37] text-xs font-label-caps uppercase tracking-wider transition-all text-center cursor-pointer" data-i18n="cb-customize">
                    Personalizza
                </button>
                <button type="button" onclick="window.rdlAcceptAllCookies();" class="px-5 py-2.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold text-xs font-label-caps uppercase tracking-wider hover:bg-[#f2ca50] transition-all shadow-[0_0_15px_rgba(212,175,55,0.25)] text-center cursor-pointer" data-i18n="cb-accept">
                    Accetta Tutti
                </button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- 11. COOKIE PREFERENCES MODAL -->
<div id="rdl-cookie-preferences-modal" class="fixed inset-0 z-[70] modal-backdrop hidden items-center justify-center p-4" role="dialog" aria-modal="true">
    <div class="max-w-xl w-full rounded-2xl bg-[#141311] border border-[#d4af37]/45 shadow-[0_20px_60px_rgba(0,0,0,0.95)] p-6 md:p-8 space-y-6 text-[#f5efe6]">
        <div class="flex items-center justify-between border-b border-[#d4af37]/20 pb-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#1a1916] border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37]">
                    <span class="material-symbols-outlined text-lg">tune</span>
                </div>
                <div>
                    <h3 class="font-display-hero text-lg md:text-xl text-[#f5efe6]" data-i18n="cp-title">Centro Preferenze Cookie</h3>
                    <p class="text-[11px] text-[#a89f91]" data-i18n="cp-desc">Gestisci le tue preferenze di consenso per i cookie utilizzati su questo sito.</p>
                </div>
            </div>
            <button type="button" onclick="window.rdlCloseCookiePreferences();" class="text-[#a89f91] hover:text-[#d4af37] transition-colors p-1 cursor-pointer" aria-label="Chiudi">
                <span class="material-symbols-outlined text-xl">close</span>
            </button>
        </div>

        <div class="space-y-4 max-h-[55vh] overflow-y-auto pr-1">
            <!-- Category 1: Technical (Necessary) -->
            <div class="p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-title-editorial text-sm text-[#f5efe6]" data-i18n="cp-cat-tech-title">Cookie Tecnici (Necessari)</span>
                    <span class="px-2.5 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase tracking-wider" data-i18n="cp-cat-tech-badge">Sempre Attivo</span>
                </div>
                <p class="text-xs text-[#a89f91] font-light leading-relaxed" data-i18n="cp-cat-tech-desc">
                    Indispensabili per la navigazione sicura, la memorizzazione della lingua e la gestione del consenso. Non richiedono consenso preventivo.
                </p>
            </div>

            <!-- Category 2: Analytics -->
            <div class="p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 space-y-2">
                <div class="flex items-center justify-between">
                    <label for="rdl-toggle-analytics" class="font-title-editorial text-sm text-[#f5efe6] cursor-pointer" data-i18n="cp-cat-analytics-title">Cookie Statistici & Analitici</label>
                    <label class="rdl-switch">
                        <input type="checkbox" id="rdl-toggle-analytics">
                        <span class="rdl-slider"></span>
                    </label>
                </div>
                <p class="text-xs text-[#a89f91] font-light leading-relaxed" data-i18n="cp-cat-analytics-desc">
                    Raccolgono dati in forma anonima e aggregata sull'utilizzo del sito per aiutarci a ottimizzare le prestazioni e i contenuti.
                </p>
            </div>

            <!-- Category 3: Third Party / Maps -->
            <div class="p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 space-y-2">
                <div class="flex items-center justify-between">
                    <label for="rdl-toggle-marketing" class="font-title-editorial text-sm text-[#f5efe6] cursor-pointer" data-i18n="cp-cat-marketing-title">Cookie di Terze Parti (Mappe & Media)</label>
                    <label class="rdl-switch">
                        <input type="checkbox" id="rdl-toggle-marketing">
                        <span class="rdl-slider"></span>
                    </label>
                </div>
                <p class="text-xs text-[#a89f91] font-light leading-relaxed" data-i18n="cp-cat-marketing-desc">
                    Consentono di visualizzare elementi esterni interattivi, come mappe di Google Maps integrate e widget multimediali.
                </p>
            </div>
        </div>

        <!-- Preferences Modal Footer -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-3 border-t border-[#d4af37]/20">
            <button type="button" onclick="window.rdlAcceptAllCookies();" class="w-full sm:w-auto px-5 py-2.5 rounded-full bg-[#1a1916] border border-[#d4af37]/40 text-[#d4af37] text-xs font-label-caps uppercase tracking-wider hover:border-[#d4af37] transition-all cursor-pointer" data-i18n="cp-accept-all">
                Accetta Tutti
            </button>
            <button type="button" onclick="window.rdlSaveCookiePreferences();" class="w-full sm:w-auto px-6 py-2.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold text-xs font-label-caps uppercase tracking-wider hover:bg-[#f2ca50] transition-all shadow-[0_0_15px_rgba(212,175,55,0.25)] cursor-pointer" data-i18n="cp-save">
                Salva Preferenze
            </button>
        </div>
    </div>
</div>

<!-- Responsive Mobile Bottom Action Bar (Sticky at Bottom on Screens < 768px) -->
<nav class="mobile-bottom-bar" aria-label="<?php esc_attr_e('Azioni rapide su cellulare', 'radici-di-luna'); ?>">
    <a class="flex-1 py-2.5 px-3 rounded-full bg-[#1a1916] text-[#d4af37] border border-[#d4af37]/35 text-center font-label-caps text-[10px] uppercase tracking-wider flex items-center justify-center gap-1.5 active:bg-[#24221f]" href="tel:<?php echo esc_attr(rdl_clean_phone($phone_num)); ?>">
        <span class="material-symbols-outlined text-sm">call</span>
        <span data-i18n="mobile-call">Chiama</span>
    </a>
    <a class="flex-1 py-2.5 px-3 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold text-center font-label-caps text-[10px] uppercase tracking-wider flex items-center justify-center gap-1.5 shadow-[0_0_15px_rgba(212,175,55,0.25)] active:bg-[#f2ca50]" href="<?php echo esc_url(rdl_get_whatsapp_url('Buongiorno Elena, vorrei richiedere un appuntamento presso Radici di Luna.')); ?>" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-sm">chat</span>
        <span data-i18n="mobile-wa">WhatsApp</span>
    </a>
</nav>

<?php wp_footer(); ?>
</body>
</html>
