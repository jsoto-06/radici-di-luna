<?php
/**
 * Template Name: Prenota e Contatti
 * Radici di Luna - Booking Suite & Sanctuary Contact Template
 */

get_header();

$banner_img = rdl_get_option('rdl_prenota_banner_img', rdl_get_default_image('prenota_banner'));
$map_img    = rdl_get_option('rdl_prenota_map_img', rdl_get_default_image('map'));
$address    = rdl_get_option('rdl_address', 'San Giustino (PG)');
$directions = rdl_get_option('rdl_directions', 'Riceve solo su appuntamento');
$hours      = rdl_get_option('rdl_hours', 'Lunedì - Venerdì: 09:00 - 20:00');
$hours_sec  = rdl_get_option('rdl_hours_secondary', 'Sabato & Domenica: Chiuso');
$phone      = rdl_get_option('rdl_phone', '+39 333 491 8428');
$whatsapp   = rdl_get_option('rdl_whatsapp', '+39 333 491 8428');
$maps_url   = rdl_get_option('rdl_maps_url', 'https://share.google/N0plZW2u67u1ON9xw');
?>

<main class="w-full pt-20 bg-[#0f0e0c] min-h-[calc(100vh-80px)]">

    <!-- Top Ambient Banner -->
    <section class="relative w-full overflow-hidden bg-[#141311] py-16 md:py-20 px-6 md:px-12 border-b border-[#d4af37]/20">
        <div class="max-w-[1360px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <div class="lg:col-span-7 space-y-4">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#1a1916] border border-[#d4af37]/30 text-[#d4af37]">
                    <span class="material-symbols-outlined text-sm">bedtime</span>
                    <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]" data-i18n="book-top-badge">Santuario di Quiete • Concierge Sartoriale</span>
                </div>
                <h1 class="font-display-hero text-3xl sm:text-4xl md:text-5xl uppercase tracking-[0.12em] text-[#f5efe6] font-normal leading-tight" data-i18n="book-top-title">
                    Prenota il tuo Rituale di Rigenerazione
                </h1>
                <p class="font-body-lg text-sm sm:text-base md:text-lg text-[#dcd5ca] max-w-2xl font-light leading-relaxed" data-i18n="book-top-desc">
                    Ogni seduta presso Radici di Luna è un viaggio personalizzato. Seleziona il tuo trattamento, la frangia oraria ideale e lasciati guidare dalla cura di Elena.
                </p>
                <div class="flex flex-wrap items-center gap-6 pt-2 text-[#a89f91] text-xs">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[#d4af37] text-base">spa</span>
                        <span class="text-[#dcd5ca]" data-i18n="book-benefit-1">Oli caldi biologici ed essenze botaniche</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[#d4af37] text-base">schedule</span>
                        <span class="text-[#dcd5ca]" data-i18n="book-benefit-2">Consulto preliminare dedicato (15 min omaggio)</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.8)] border border-[#d4af37]/30 bg-[#1a1916]">
                    <img alt="Atmosfera Rituale Radici di Luna" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" src="<?php echo esc_url($banner_img); ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0f0e0c]/90 via-[#0f0e0c]/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-3.5 rounded-xl bg-[#141311]/90 backdrop-blur-md border border-[#d4af37]/35 shadow-md">
                        <p class="font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37]" data-i18n="book-overlay-tag">Atmosfera Protetta</p>
                        <p class="font-title-editorial text-sm text-[#f5efe6]" data-i18n="book-overlay-title">Silenzio, calore salino & oli artigianali</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Interactive Concierge Form & Booking Suite -->
    <section class="w-full py-16 md:py-24 px-6 md:px-12 bg-[#0f0e0c]">
        <div class="max-w-[1360px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left Column: Form Wizard Flow -->
            <form class="lg:col-span-8 space-y-8" id="booking-flow" onsubmit="event.preventDefault(); window.submitBooking();">
                
                <!-- Step 1: Select Ritual (11 treatments grouped under 3 categories) -->
                <div class="space-y-6 p-6 md:p-8 rounded-2xl bg-[#141311] border border-[#d4af37]/25 shadow-[0_4px_25px_rgba(0,0,0,0.5)]">
                    <div class="flex items-center justify-between border-b border-[#d4af37]/20 pb-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#d4af37] text-[#0f0e0c] font-label-caps text-xs flex items-center justify-center font-bold">01</span>
                            <h2 class="font-headline-sm text-lg md:text-xl text-[#f5efe6]" data-i18n="step1-title">Scegli il tuo Trattamento</h2>
                        </div>
                        <span class="font-label-caps text-xs text-[#d4af37] uppercase tracking-wider" data-i18n="step1-badge">Fase 1 di 3</span>
                    </div>

                    <!-- 1. MASSAGGI RILASSANTI (60 min • 60 €) -->
                    <div class="space-y-3">
                        <div class="flex items-baseline justify-between">
                            <div>
                                <h3 class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37] font-semibold" data-i18n="cat1-header">1. Massaggi Rilassanti</h3>
                                <p class="text-xs text-[#a89f91] font-light" data-i18n="cat1-sub">Un viaggio di relax, armonia e benessere • 60 minuti • 60 €</p>
                            </div>
                            <span class="font-headline-sm text-base text-[#d4af37] font-bold">60 €</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                            <!-- 1.1 Californiano -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37] shadow-[0_0_15px_rgba(212,175,55,0.15)] transition-all flex flex-col justify-between">
                                <input checked="" class="sr-only" data-duration="60 min" data-price="60" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio Californiano (60 min • 60€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t1-tag">Rilassante Profondo</span>
                                        <span class="text-xs text-[#d4af37] font-bold">60€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t1-title">Massaggio Californiano</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t1-desc">Movimenti lunghi, armonici e lenti per una profonda riconnessione corpo-mente.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#d4af37] font-bold text-base material-symbols-outlined">radio_button_checked</span>
                                </div>
                            </label>

                            <!-- 1.2 Hawaiano -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="60" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio Hawaiano (60 min • 60€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t2-tag">Rilassante Tradizionale</span>
                                        <span class="text-xs text-[#d4af37] font-bold">60€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t2-title">Massaggio Hawaiano</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t2-desc">Tocco continuo ed avvolgente ispirato alle onde dell'oceano per liberare le tensioni.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 1.3 Antistress -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="60" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio Antistress (60 min • 60€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t3-tag">Decongestionante</span>
                                        <span class="text-xs text-[#d4af37] font-bold">60€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t3-title">Massaggio Antistress</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t3-desc">Sessione distensiva con oli tiepidi formulata per calmare la mente sovraccarica.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 1.4 Lomi Lomi con pietre calde -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="60" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio Lomi Lomi con pietre calde (60 min • 60€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t4-tag">Termoterapico</span>
                                        <span class="text-xs text-[#d4af37] font-bold">60€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t4-title">Lomi Lomi pietre calde</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t4-desc">Fluidità hawaiana unita a pietre levigate di basalto vulcanico caldo.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 1.5 Cera calda -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="60" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio con cera calda (60 min • 60€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t5-tag">Nutriente Sensoriale</span>
                                        <span class="text-xs text-[#d4af37] font-bold">60€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t5-title">Massaggio con cera calda</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t5-desc">Gocce calde di candela da massaggio a base di burri vegetali e cera bio.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- 2. MASSAGGI MIRATI (60 min • 70 €) -->
                    <div class="space-y-3 pt-4 border-t border-[#d4af37]/20">
                        <div class="flex items-baseline justify-between">
                            <div>
                                <h3 class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37] font-semibold" data-i18n="cat2-header">2. Massaggi Mirati</h3>
                                <p class="text-xs text-[#a89f91] font-light" data-i18n="cat2-sub">Trattamenti specifici per sciogliere le tensioni • 60 minuti • 70 €</p>
                            </div>
                            <span class="font-headline-sm text-base text-[#d4af37] font-bold">70 €</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                            <!-- 2.1 Cervicale -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="70" name="treatment" onchange="window.updateSummary()" type="radio" value="Trattamento Cervicale (60 min • 70€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t6-tag">Focus Posturale</span>
                                        <span class="text-xs text-[#d4af37] font-bold">70€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t6-title">Trattamento Cervicale</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t6-desc">Focus analitico su collo, trapezio e scapole per liberare la postura.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 2.2 Tecniche di Sblocco -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="70" name="treatment" onchange="window.updateSummary()" type="radio" value="Tecniche di Sblocco (60 min • 70€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t7-tag">Mobilizzazione</span>
                                        <span class="text-xs text-[#d4af37] font-bold">70€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t7-title">Tecniche di Sblocco</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t7-desc">Manovre delicate di mobilizzazione e release per sbloccare il movimento.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 2.3 Miofasciale -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="70" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio Miofasciale (60 min • 70€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t8-tag">Strutturale Profondo</span>
                                        <span class="text-xs text-[#d4af37] font-bold">70€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t8-title">Massaggio Miofasciale</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t8-desc">Lavoro profondo sulle fasce connettivali per eliminare aderenze e rigidità.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 2.4 MTC Meridiani -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="60 min" data-price="70" name="treatment" onchange="window.updateSummary()" type="radio" value="Medicina Tradizionale Cinese applicata ai Meridiani (60 min • 70€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t9-tag">Energetico Tradizionale</span>
                                        <span class="text-xs text-[#d4af37] font-bold">70€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t9-title">MTC Meridiani</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t9-desc">Digitopressione lungo i canali energetici per armonizzare il flusso del Qi.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-60">60 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- 3. TRATTAMENTI SPECIALI (30 min • 40 €) -->
                    <div class="space-y-3 pt-4 border-t border-[#d4af37]/20">
                        <div class="flex items-baseline justify-between">
                            <div>
                                <h3 class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37] font-semibold" data-i18n="cat3-header">3. Trattamenti Speciali</h3>
                                <p class="text-xs text-[#a89f91] font-light" data-i18n="cat3-sub">Piccoli rituali dedicati alla cura di corpo e viso • 30 minuti • 40 €</p>
                            </div>
                            <span class="font-headline-sm text-base text-[#d4af37] font-bold">40 €</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <!-- 3.1 Riflessologia Plantare -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="30 min" data-price="40" name="treatment" onchange="window.updateSummary()" type="radio" value="Riflessologia Plantare (30 min • 40€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t10-tag">Riequilibrio Zonale</span>
                                        <span class="text-xs text-[#d4af37] font-bold">40€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t10-title">Riflessologia Plantare</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t10-desc">Stimolazione precisa dei punti riflessi del piede per drenaggio e vitalità.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-30">30 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>

                            <!-- 3.2 Kobido Viso -->
                            <label class="ritual-card cursor-pointer group relative p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 hover:border-[#d4af37]/60 shadow-sm transition-all flex flex-col justify-between">
                                <input class="sr-only" data-duration="30 min" data-price="40" name="treatment" onchange="window.updateSummary()" type="radio" value="Massaggio Kobido viso (30 min • 40€)" />
                                <div class="space-y-1.5">
                                    <div class="flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded-full bg-[#24221f] text-[#d4af37] font-label-caps text-[9px] uppercase" data-i18n="t11-tag">Lifting Tradizionale</span>
                                        <span class="text-xs text-[#d4af37] font-bold">40€</span>
                                    </div>
                                    <h4 class="font-title-editorial text-sm text-[#f5efe6] group-hover:text-[#d4af37] transition-colors" data-i18n="t11-title">Massaggio Kobido (viso)</h4>
                                    <p class="text-[11px] text-[#a89f91] font-light leading-relaxed line-clamp-2" data-i18n="t11-desc">Antico rituale giapponese di giovinezza per distendere i tratti ed illuminare la pelle.</p>
                                </div>
                                <div class="mt-3 pt-2 flex items-center justify-between text-[#a89f91] text-[11px] border-t border-[#d4af37]/15">
                                    <span class="flex items-center gap-1 text-[#dcd5ca]"><span class="material-symbols-outlined text-xs text-[#d4af37]">hourglass_top</span> <span data-i18n="dur-30">30 min</span></span>
                                    <span class="check-indicator text-[#a89f91] text-base material-symbols-outlined">radio_button_unchecked</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Date & Slot Selection -->
                <div class="space-y-5 p-6 md:p-8 rounded-2xl bg-[#141311] border border-[#d4af37]/25 shadow-[0_4px_25px_rgba(0,0,0,0.5)]">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#d4af37] text-[#0f0e0c] font-label-caps text-xs flex items-center justify-center font-bold">02</span>
                            <h2 class="font-headline-sm text-lg md:text-xl text-[#f5efe6]" data-i18n="step2-title">Calendario & Fascia Oraria</h2>
                        </div>
                        <span class="font-label-caps text-xs text-[#d4af37] uppercase tracking-wider" data-i18n="step2-badge">Fase 2 di 3</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                        <!-- Day Picker Carousel -->
                        <div class="md:col-span-7 space-y-2">
                            <label class="block font-label-caps text-xs uppercase text-[#d4af37] tracking-wider" data-i18n="lbl-select-day">Seleziona Giorno Preferito</label>
                            <div class="grid grid-cols-5 gap-2" id="days-container">
                                <button class="day-slot p-2.5 rounded-xl bg-[#d4af37] text-[#0f0e0c] text-center shadow-[0_0_15px_rgba(212,175,55,0.25)] flex flex-col items-center justify-center transition-all border border-[#d4af37]" data-date="Lun 12 Mag" onclick="window.selectDate(this)" type="button">
                                    <span class="font-label-caps text-[10px] uppercase font-bold text-[#0f0e0c]">Lun</span>
                                    <span class="font-title-editorial text-lg font-semibold text-[#0f0e0c]">12</span>
                                    <span class="font-label-caps text-[9px] text-[#0f0e0c] font-bold">Mag</span>
                                </button>
                                <button class="day-slot p-2.5 rounded-xl bg-[#1a1916] text-[#f5efe6] text-center shadow-sm flex flex-col items-center justify-center hover:border-[#d4af37] border border-[#d4af37]/25 transition-all" data-date="Mar 13 Mag" onclick="window.selectDate(this)" type="button">
                                    <span class="font-label-caps text-[10px] uppercase text-[#a89f91]">Mar</span>
                                    <span class="font-title-editorial text-lg text-[#f5efe6]">13</span>
                                    <span class="font-label-caps text-[9px] text-[#d4af37]">Mag</span>
                                </button>
                                <button class="day-slot p-2.5 rounded-xl bg-[#1a1916] text-[#f5efe6] text-center shadow-sm flex flex-col items-center justify-center hover:border-[#d4af37] border border-[#d4af37]/25 transition-all" data-date="Mer 14 Mag" onclick="window.selectDate(this)" type="button">
                                    <span class="font-label-caps text-[10px] uppercase text-[#a89f91]">Mer</span>
                                    <span class="font-title-editorial text-lg text-[#f5efe6]">14</span>
                                    <span class="font-label-caps text-[9px] text-[#d4af37]">Mag</span>
                                </button>
                                <button class="day-slot p-2.5 rounded-xl bg-[#1a1916] text-[#f5efe6] text-center shadow-sm flex flex-col items-center justify-center hover:border-[#d4af37] border border-[#d4af37]/25 transition-all" data-date="Gio 15 Mag" onclick="window.selectDate(this)" type="button">
                                    <span class="font-label-caps text-[10px] uppercase text-[#a89f91]">Gio</span>
                                    <span class="font-title-editorial text-lg text-[#f5efe6]">15</span>
                                    <span class="font-label-caps text-[9px] text-[#d4af37]">Mag</span>
                                </button>
                                <button class="day-slot p-2.5 rounded-xl bg-[#1a1916] text-[#f5efe6] text-center shadow-sm flex flex-col items-center justify-center hover:border-[#d4af37] border border-[#d4af37]/25 transition-all" data-date="Ven 16 Mag" onclick="window.selectDate(this)" type="button">
                                    <span class="font-label-caps text-[10px] uppercase text-[#a89f91]">Ven</span>
                                    <span class="font-title-editorial text-lg text-[#f5efe6]">16</span>
                                    <span class="font-label-caps text-[9px] text-[#d4af37]">Mag</span>
                                </button>
                            </div>
                            <p class="text-[11px] text-[#a89f91] flex items-center gap-1 pt-1">
                                <span class="material-symbols-outlined text-xs text-[#d4af37]">info</span>
                                <span data-i18n="day-note">Sessioni serali o weekend disponibili su richiesta personalizzata.</span>
                            </p>
                        </div>

                        <!-- Time Preference -->
                        <div class="md:col-span-5 space-y-2">
                            <label class="block font-label-caps text-xs uppercase text-[#d4af37] tracking-wider" data-i18n="lbl-select-slot">Fascia Oraria Desiderata</label>
                            <div class="grid grid-cols-2 gap-2" id="slot-time-container">
                                <button class="time-slot p-3 rounded-xl bg-[#1a1916] border border-[#d4af37] text-[#f5efe6] text-left shadow-[0_0_15px_rgba(212,175,55,0.15)] flex flex-col justify-between transition-all" data-slot="Mattina (09:00 - 13:30)" onclick="window.selectSlot(this)" type="button">
                                    <div class="flex items-center justify-between w-full">
                                        <span class="material-symbols-outlined text-[#d4af37] text-base">wb_sunny</span>
                                        <span class="time-radio material-symbols-outlined text-sm text-[#d4af37]">check_circle</span>
                                    </div>
                                    <div class="mt-2">
                                        <span class="font-label-caps text-[11px] uppercase block font-semibold" data-i18n="slot-morning">Mattina</span>
                                        <span class="text-[10px] text-[#a89f91]">09:00 - 13:30</span>
                                    </div>
                                </button>
                                <button class="time-slot p-3 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 text-[#f5efe6] text-left shadow-sm flex flex-col justify-between hover:border-[#d4af37]/60 transition-all" data-slot="Pomeriggio (14:30 - 20:00)" onclick="window.selectSlot(this)" type="button">
                                    <div class="flex items-center justify-between w-full">
                                        <span class="material-symbols-outlined text-[#a89f91] text-base">dark_mode</span>
                                        <span class="time-radio material-symbols-outlined text-sm text-[#a89f91]">radio_button_unchecked</span>
                                    </div>
                                    <div class="mt-2">
                                        <span class="font-label-caps text-[11px] uppercase block font-semibold" data-i18n="slot-afternoon">Pomeriggio</span>
                                        <span class="text-[10px] text-[#a89f91]">14:30 - 20:00</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Client Details -->
                <div class="space-y-5 p-6 md:p-8 rounded-2xl bg-[#141311] border border-[#d4af37]/25 shadow-[0_4px_25px_rgba(0,0,0,0.5)]">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#d4af37] text-[#0f0e0c] font-label-caps text-xs flex items-center justify-center font-bold">03</span>
                            <h2 class="font-headline-sm text-lg md:text-xl text-[#f5efe6]" data-i18n="step3-title">I Tuoi Recapiti</h2>
                        </div>
                        <span class="font-label-caps text-xs text-[#d4af37] uppercase tracking-wider" data-i18n="step3-badge">Fase 3 di 3</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-name">Nome e Cognome *</label>
                            <input class="w-full text-xs p-3.5 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-xl focus:border-[#d4af37] focus:ring-0" id="client-name" placeholder="Es. Laura Rossi" required="" type="text" />
                        </div>
                        <div>
                            <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-phone">Cellulare / WhatsApp *</label>
                            <input class="w-full text-xs p-3.5 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-xl focus:border-[#d4af37] focus:ring-0" id="client-phone" placeholder="+39 333 491 8428" required="" type="tel" />
                        </div>
                    </div>

                    <div>
                        <label class="block font-label-caps text-[10px] uppercase tracking-wider text-[#d4af37] mb-1" data-i18n="lbl-notes">Note Speciali o Richieste di Benessere (Opzionale)</label>
                        <textarea class="w-full text-xs p-3.5 bg-[#1a1916] text-[#f5efe6] placeholder-[#6e685e] border border-[#d4af37]/30 rounded-xl focus:border-[#d4af37] focus:ring-0" id="client-notes" placeholder="Segnala eventuali tensioni specifiche, allergie cutanee o preferenze di profumazione..." rows="3"></textarea>
                    </div>

                    <button class="w-full py-4 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-widest hover:bg-[#f2ca50] transition-all shadow-[0_0_25px_rgba(212,175,55,0.3)] flex items-center justify-center gap-2" type="submit">
                        <span class="material-symbols-outlined text-base">send</span>
                        <span data-i18n="btn-submit-booking">Invia Richiesta di Prenotazione</span>
                    </button>
                </div>

            </form>

            <!-- Right Column: Sticky Summary & Direct Concierge Card -->
            <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
                
                <!-- Live Summary Box -->
                <div class="p-6 md:p-8 rounded-2xl bg-[#141311] border border-[#d4af37]/35 shadow-xl space-y-5">
                    <span class="font-label-caps text-[10px] uppercase tracking-widest text-[#d4af37] block" data-i18n="summary-badge">Riepilogo Sessione</span>
                    <h3 class="font-display-hero text-xl text-[#f5efe6]" id="summary-treatment">Massaggi Rilassanti</h3>
                    
                    <div class="space-y-3 border-y border-[#d4af37]/15 py-4 text-xs text-[#dcd5ca]">
                        <div class="flex items-center justify-between">
                            <span class="text-[#a89f91]" data-i18n="summary-lbl-dur">Durata Seduta:</span>
                            <span class="font-semibold text-[#f5efe6]" id="summary-duration">60 minuti</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-[#a89f91]" data-i18n="summary-lbl-date">Giorno Preferito:</span>
                            <span class="font-semibold text-[#d4af37]" id="summary-date">Lun 12 Mag</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-[#a89f91]" data-i18n="summary-lbl-time">Fascia Oraria:</span>
                            <span class="font-semibold text-[#f5efe6]" id="summary-time">Mattina (09:00 - 13:30)</span>
                        </div>
                        <div class="flex items-center justify-between pt-2 border-t border-[#d4af37]/10">
                            <span class="text-[#f5efe6] font-semibold text-sm" data-i18n="summary-lbl-price">Quota Trattamento:</span>
                            <span class="font-display-hero text-xl text-[#d4af37] font-bold" id="summary-total">60€</span>
                        </div>
                    </div>

                    <a class="w-full py-3 px-4 rounded-full border border-[#d4af37] bg-[#d4af37]/10 text-[#d4af37] hover:bg-[#d4af37] hover:text-[#0f0e0c] font-label-caps text-xs uppercase tracking-wider flex items-center justify-center gap-2 transition-all font-semibold" href="<?php echo esc_url(rdl_get_whatsapp_url('Gentile Elena, vorrei richiedere la disponibilità per una sessione rilassante.')); ?>" target="_blank" rel="noopener">
                        <span class="material-symbols-outlined text-base">chat</span>
                        <span data-i18n="btn-wa-instant">Scrivi Subito su WhatsApp</span>
                    </a>
                </div>

                <!-- Direct Phone Quick Contact Card -->
                <div class="p-6 rounded-2xl bg-[#141311] border border-[#d4af37]/25 shadow-sm space-y-3">
                    <h4 class="font-title-editorial text-base text-[#f5efe6] flex items-center gap-2">
                        <span class="material-symbols-outlined text-[#d4af37]">contact_phone</span>
                        <span data-i18n="phone-card-title">Consulenza Telefonica Diretta</span>
                    </h4>
                    <p class="text-xs text-[#a89f91] leading-relaxed" data-i18n="phone-card-desc">
                        Elena è a disposizione per consigliarti il trattamento più adatto alle tue esigenze corporee ed emotive.
                    </p>
                    <div class="pt-2 flex items-center justify-between text-xs">
                        <a class="font-label-caps text-xs text-[#d4af37] font-semibold hover:text-[#f2ca50] flex items-center gap-1 transition-colors" href="tel:<?php echo esc_attr(rdl_clean_phone($phone)); ?>">
                            <span class="material-symbols-outlined text-sm">call</span> <?php echo esc_html($phone); ?>
                        </a>
                        <span class="text-[#a89f91]" data-i18n="phone-card-time">Risposta entro 1 ora</span>
                    </div>
                </div>

            </aside>

        </div>
    </section>

    <!-- Studio Sanctuary Location & Map Section -->
    <section class="w-full py-16 md:py-24 px-6 md:px-12 bg-[#141311] border-y border-[#d4af37]/20">
        <div class="max-w-[1360px] mx-auto space-y-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <div class="lg:col-span-5 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#1a1916] border border-[#d4af37]/30 text-[#d4af37]">
                        <span class="material-symbols-outlined text-sm">pin_drop</span>
                        <span class="font-label-caps text-xs uppercase tracking-wider" data-i18n="loc-badge">Dove Trovarci</span>
                    </div>
                    <h2 class="font-display-hero text-3xl sm:text-4xl text-[#f5efe6] uppercase tracking-[0.1em]" data-i18n="loc-title">
                        Il Santuario Radici di Luna
                    </h2>
                    <p class="text-sm md:text-base text-[#dcd5ca] font-light leading-relaxed" data-i18n="loc-desc">
                        Un'oasi protetta a San Giustino, concepita per isolare i rumori e avvolgere i sensi in un microclima di essenze naturali, aromaterapia calda e tisane rigeneranti.
                    </p>
                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 shadow-sm">
                            <span class="material-symbols-outlined text-[#d4af37] text-xl mt-1">location_on</span>
                            <div class="text-xs space-y-1">
                                <h4 class="font-title-editorial text-sm text-[#f5efe6]" data-i18n="loc-addr-title">Indirizzo dello Studio</h4>
                                <p class="text-[#dcd5ca]"><?php echo esc_html($address); ?></p>
                                <p class="text-[#a89f91]"><?php echo esc_html($directions); ?></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/25 shadow-sm">
                            <span class="material-symbols-outlined text-[#d4af37] text-xl mt-1">schedule</span>
                            <div class="text-xs space-y-1">
                                <h4 class="font-title-editorial text-sm text-[#f5efe6]" data-i18n="loc-hours-title">Orari di Ricevimento</h4>
                                <p class="text-[#dcd5ca]" data-i18n="loc-hours-val"><?php echo esc_html($hours); ?></p>
                                <p class="text-[#a89f91]" data-i18n="loc-hours-sec-val"><?php echo esc_html($hours_sec); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Module -->
                <div class="lg:col-span-7">
                    <div class="relative w-full h-[420px] rounded-2xl overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.8)] border border-[#d4af37]/35 bg-[#1a1916]">
                        <img alt="Mappa Studio Radici di Luna" class="w-full h-full object-cover brightness-90 contrast-105" src="<?php echo esc_url($map_img); ?>" />
                        
                        <!-- Map Overlay Card -->
                        <div class="absolute bottom-5 left-5 max-w-sm p-5 rounded-xl bg-[#0f0e0c]/90 backdrop-blur-md text-[#f5efe6] border border-[#d4af37]/30 shadow-2xl space-y-2">
                            <div class="flex items-center gap-2 text-[#d4af37]">
                                <span class="material-symbols-outlined text-sm">spa</span>
                                <span class="font-label-caps text-[10px] uppercase tracking-wider" data-i18n="footer-studio">Studio Privato</span>
                            </div>
                            <h4 class="font-title-editorial text-base text-[#f5efe6]" data-i18n="loc-overlay-title">Ingresso Riservato</h4>
                            <p class="text-xs text-[#a89f91]" data-i18n="loc-overlay-desc">
                                Per preservare il silenzio e la privacy totale degli ospiti, si riceve esclusivamente su appuntamento confermato.
                            </p>
                            <div class="pt-2 border-t border-[#d4af37]/20">
                                <a class="inline-flex items-center gap-1 font-label-caps text-[10px] uppercase text-[#d4af37] hover:underline" href="<?php echo esc_url($maps_url); ?>" rel="noopener noreferrer" target="_blank">
                                    <span data-i18n="loc-maps-link">Apri in Google Maps</span>
                                    <span class="material-symbols-outlined text-xs">open_in_new</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ritual Protocol FAQ Section -->
    <section class="w-full py-16 md:py-24 px-6 md:px-12 bg-[#0f0e0c]">
        <div class="max-w-[1000px] mx-auto space-y-12">
            <div class="text-center space-y-2 max-w-xl mx-auto">
                <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]" data-i18n="proto-badge">Come Accogliamo i Nostri Ospiti</span>
                <h2 class="font-display-hero text-2xl sm:text-3xl md:text-4xl text-[#f5efe6]" data-i18n="proto-title">Domande Frequenti sul Rituale di Benvenuto</h2>
                <p class="text-xs md:text-sm text-[#a89f91]" data-i18n="proto-desc">Tutto ciò che occorre sapere per prepararsi al meglio alla propria esperienza.</p>
            </div>

            <div class="space-y-4">
                <details class="group p-5 rounded-xl bg-[#141311] border border-[#d4af37]/25 transition-all duration-300 open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.1)] cursor-pointer">
                    <summary class="flex items-center justify-between font-title-editorial text-base md:text-lg text-[#f5efe6]">
                        <span class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#d4af37] text-lg">local_cafe</span>
                            <span data-i18n="proto-q1">Cosa prevede il rituale di accoglienza prima del massaggio?</span>
                        </span>
                        <span class="material-symbols-outlined text-[#d4af37] transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/20 pt-3">
                        <p data-i18n="proto-a1">Consigliamo di arrivare 10 minuti prima dell'orario prenotato. Ti accoglieremo con una tisana botanica biologica stagionale e un breve consulto informale per comprendere lo stato energetico del giorno, individuare tensioni muscolari e personalizzare la miscela degli oli essenziali.</p>
                    </div>
                </details>

                <details class="group p-5 rounded-xl bg-[#141311] border border-[#d4af37]/25 transition-all duration-300 open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.1)] cursor-pointer">
                    <summary class="flex items-center justify-between font-title-editorial text-base md:text-lg text-[#f5efe6]">
                        <span class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#d4af37] text-lg">water_drop</span>
                            <span data-i18n="proto-q2">Quali oli e prodotti vengono utilizzati sulla pelle?</span>
                        </span>
                        <span class="material-symbols-outlined text-[#d4af37] transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/20 pt-3">
                        <p data-i18n="proto-a2">Utilizziamo esclusivamente oli vegetali purissimi di prima spremitura a freddo (mandorle dolci, jojoba e sesamo) infusi con oli essenziali biologici terapeutici distillati a vapore. Tutti i nostri preparati sono 100% vegetali, anallergici e privi di fragranze sintetiche.</p>
                    </div>
                </details>

                <details class="group p-5 rounded-xl bg-[#141311] border border-[#d4af37]/25 transition-all duration-300 open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.1)] cursor-pointer">
                    <summary class="flex items-center justify-between font-title-editorial text-base md:text-lg text-[#f5efe6]">
                        <span class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#d4af37] text-lg">event_repeat</span>
                            <span data-i18n="proto-q3">Come funziona la politica di disdetta o cambio data?</span>
                        </span>
                        <span class="material-symbols-outlined text-[#d4af37] transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/20 pt-3">
                        <p data-i18n="proto-a3">Comprendiamo gli imprevisti della vita quotidiana. È possibile riprogrammare o cancellare la sessione senza alcun costo fino a 24 ore prima dell'appuntamento direttamente tramite messaggio WhatsApp o email.</p>
                    </div>
                </details>

                <details class="group p-5 rounded-xl bg-[#141311] border border-[#d4af37]/25 transition-all duration-300 open:border-[#d4af37] open:shadow-[0_0_20px_rgba(212,175,55,0.1)] cursor-pointer">
                    <summary class="flex items-center justify-between font-title-editorial text-base md:text-lg text-[#f5efe6]">
                        <span class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#d4af37] text-lg">checkroom</span>
                            <span data-i18n="proto-q4">Cosa devo portare con me?</span>
                        </span>
                        <span class="material-symbols-outlined text-[#d4af37] transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="mt-4 text-xs md:text-sm text-[#dcd5ca] leading-relaxed border-t border-[#d4af37]/20 pt-3">
                        <p data-i18n="proto-a4">Tutto il necessario è a tua completa disposizione: teli in puro lino caldo, slip monouso traspiranti e doccia olistica con detergenti botanici naturali nel caso desiderassi rinfrescarti prima o dopo il trattamento.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Interactive Feedback Modal -->
    <div id="confirmation-modal" class="fixed inset-0 z-50 modal-backdrop hidden items-center justify-center p-4">
        <div class="max-w-md w-full p-8 rounded-2xl bg-[#141311] border border-[#d4af37]/40 shadow-[0_15px_50px_rgba(0,0,0,0.95)] text-center space-y-5">
            <div class="w-16 h-16 mx-auto rounded-full bg-[#d4af37]/20 border border-[#d4af37]/40 flex items-center justify-center text-[#d4af37]">
                <span class="material-symbols-outlined text-3xl">mark_email_read</span>
            </div>
            <div class="space-y-1">
                <h3 class="font-display-hero text-2xl text-[#f5efe6]" data-i18n="conf-title">Richiesta Inviata</h3>
                <p class="text-xs text-[#a89f91]">
                    Grazie, <span class="font-semibold text-[#f5efe6]" id="modal-client-name">Ospite</span>. <span data-i18n="conf-sub">Elena ha ricevuto i dettagli della tua richiesta di prenotazione.</span>
                </p>
            </div>
            <div class="p-4 rounded-xl bg-[#1a1916] border border-[#d4af37]/20 text-left text-xs space-y-1 text-[#dcd5ca]">
                <p><strong class="text-[#f5efe6]" data-i18n="conf-lbl-trat">Trattamento:</strong> <span class="text-[#d4af37]" id="modal-treatment">Massaggio</span></p>
                <p><strong class="text-[#f5efe6]" data-i18n="conf-lbl-datetime">Giorno & Fascia:</strong> <span class="text-[#d4af37]" id="modal-datetime">Data</span></p>
            </div>
            <p class="text-[11px] text-[#a89f91]" data-i18n="conf-note">
                Ti ricontatteremo entro brevissimo su WhatsApp o via telefono per confermare l'orario definitivo.
            </p>
            <button class="w-full py-3.5 px-6 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider hover:bg-[#f2ca50] transition-all" onclick="window.closeConfirmationModal()" type="button" data-i18n="conf-close">
                Chiudi Finestra
            </button>
        </div>
    </div>

</main>

<?php get_footer(); ?>
