<?php
/**
 * Radici di Luna - Helper Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get Customizer option with fallback default
 */
function rdl_get_option($key, $default = '') {
    $value = get_theme_mod($key, $default);
    return ($value !== '' && $value !== null) ? $value : $default;
}

/**
 * Clean phone number for tel: or wa.me links
 */
function rdl_clean_phone($phone) {
    return preg_replace('/[^0-9]/', '', $phone);
}

/**
 * Generate WhatsApp URL with optional pre-filled message
 */
function rdl_get_whatsapp_url($message = '') {
    $raw_phone = rdl_get_option('rdl_whatsapp', '+39 333 491 8428');
    $clean = rdl_clean_phone($raw_phone);
    if (empty($clean)) {
        $clean = '393334918428';
    }

    $url = 'https://wa.me/' . $clean;
    if (!empty($message)) {
        $url .= '?text=' . rawurlencode($message);
    }
    return $url;
}

/**
 * Get default image by key
 */
function rdl_get_default_image($key) {
    $theme_uri = get_template_directory_uri();
    $services_path = $theme_uri . '/assets/images/services/';

    $defaults = array(
        'hero'           => $services_path . 'californiano.jpg',
        'elena'          => $services_path . 'californiano.jpg',
        'californiano'   => $services_path . 'californiano.jpg',
        'pietre'         => $services_path . 'pietre-calde.jpg',
        'cera'           => $services_path . 'cera-calda.jpg',
        'cervicale'      => $services_path . 'cervicale-miofasciale.jpg',
        'miofasciale'    => $services_path . 'cervicale-miofasciale.jpg',
        'kobido'         => $services_path . 'kobido-viso.jpg',
        'riflessologia'  => $services_path . 'cervicale-miofasciale.jpg',
        'oil_pour'       => $services_path . 'cera-calda.jpg',
        'studio_room'    => $services_path . 'pietre-calde.jpg',
        'trat_banner'    => $services_path . 'californiano.jpg',
        'prenota_banner' => $services_path . 'kobido-viso.jpg',
        'map'            => $services_path . 'californiano.jpg',
    );

    return isset($defaults[$key]) ? $defaults[$key] : ($services_path . 'californiano.jpg');
}

/**
 * Category SVG icon helper
 */
function rdl_render_category_icon($slug) {
    switch ($slug) {
        case 'rilassanti':
            return '<svg class="w-8 h-8 stroke-[#d4af37] group-hover:stroke-[#f2ca50] transition-colors stroke-[1.2] fill-none" viewBox="0 0 24 24"><path d="M12 4C12 4 8 8 8 13C8 16.5 10 18.5 12 19C14 18.5 16 16.5 16 13C16 8 12 4 12 4Z"></path><path d="M8 13C6 11 3.5 12 3 14C2.5 16.5 5 18 7.5 18C9 18 10 17 10 17"></path><path d="M16 13C18 11 20.5 12 21 14C21.5 16.5 19 18 16.5 18C15 18 14 17 14 17"></path></svg>';
        case 'mirati':
            return '<svg class="w-8 h-8 stroke-[#d4af37] group-hover:stroke-[#f2ca50] transition-colors stroke-[1.2] fill-none" viewBox="0 0 24 24"><path d="M7 11V6a2 2 0 0 1 4 0v5"></path><path d="M11 6a2 2 0 0 1 4 0v6"></path><path d="M15 8a2 2 0 0 1 4 0v5c0 4.5-3.5 8-8 8s-7-3.5-7-7v-3a2 2 0 0 1 4 0v2"></path></svg>';
        case 'pietre':
            return '<svg class="w-8 h-8 stroke-[#d4af37] group-hover:stroke-[#f2ca50] transition-colors stroke-[1.2] fill-none" viewBox="0 0 24 24"><ellipse cx="12" cy="7" rx="5" ry="3"></ellipse><ellipse cx="12" cy="12" rx="7" ry="3.5"></ellipse><ellipse cx="12" cy="17.5" rx="8.5" ry="4"></ellipse></svg>';
        case 'kobido':
            return '<svg class="w-8 h-8 stroke-[#d4af37] group-hover:stroke-[#f2ca50] transition-colors stroke-[1.2] fill-none" viewBox="0 0 24 24"><path d="M12 3c4.97 0 9 4.03 9 9 0 5.5-4 9-9 9s-9-3.5-9-9c0-4.97 4.03-9 9-9z"></path><path d="M8.5 10c0 .5-.5 1-1.5 1"></path><path d="M15.5 10c0 .5.5 1 1.5 1"></path><path d="M12 12v3"></path><path d="M10 17c1 .8 3 .8 4 0"></path></svg>';
        case 'riflessologia':
            return '<svg class="w-8 h-8 stroke-[#d4af37] group-hover:stroke-[#f2ca50] transition-colors stroke-[1.2] fill-none" viewBox="0 0 24 24"><path d="M12 3a4 4 0 0 1 4 4c0 2-1 3.5-2 5l1 5a3 3 0 0 1-6 0l1-5c-1-1.5-2-3-2-5a4 4 0 0 1 4-4z"></path><path d="M12 7v10"></path></svg>';
        case 'rituali':
        default:
            return '<svg class="w-8 h-8 stroke-[#d4af37] group-hover:stroke-[#f2ca50] transition-colors stroke-[1.2] fill-none" viewBox="0 0 24 24"><path d="M12 3C8 3 4 8 4 14C4 18 7.5 21 12 21C16.5 21 20 18 20 14C20 8 16 3 12 3Z"></path><path d="M12 3V21"></path><path d="M12 8L7 11"></path><path d="M12 13L17 16"></path></svg>';
    }
}

/**
 * Returns default list of treatments (11 treatments across 3 official categories)
 */
function rdl_get_default_treatments() {
    return array(
        // ==========================================
        // 1. MASSAGGI RILASSANTI (60 min • 60 €)
        // ==========================================
        array(
            'title'          => 'Massaggio Californiano',
            'category'       => 'relax',
            'category_label' => 'Rilassante Profondo',
            'price'          => '60€',
            'duration'       => '60 min',
            'intensity'      => 'Dolce & Fluida',
            'icon'           => 'psychology',
            'desc'           => 'Movimenti lunghi, armonici e lenti per una profonda riconnessione corpo-mente. Accarezza l\'intero sistema nervoso per sciogliere l\'ipercontrollo ed evocare sensazioni di pace autentica.',
            'benefit'        => 'Consigliato per: Riconnessione emotiva e distensione totale',
            'image'          => rdl_get_default_image('californiano')
        ),
        array(
            'title'          => 'Massaggio Hawaiano',
            'category'       => 'relax',
            'category_label' => 'Rilassante Tradizionale',
            'price'          => '60€',
            'duration'       => '60 min',
            'intensity'      => 'Tocco Ritmico Oceanico',
            'icon'           => 'waves',
            'desc'           => 'Tocco continuo ed avvolgente ispirato alle onde dell\'oceano. Rilascia le memorie di stress nei tessuti e riattiva l\'energia vitale attraverso movimenti fluidi e armonici.',
            'benefit'        => 'Consigliato per: Sensazione di respiro libero e leggerezza articolare',
            'image'          => rdl_get_default_image('cervicale')
        ),
        array(
            'title'          => 'Massaggio Antistress',
            'category'       => 'relax',
            'category_label' => 'Decongestionante Psico-Fisico',
            'price'          => '60€',
            'duration'       => '60 min',
            'intensity'      => 'Dolce & Delicata',
            'icon'           => 'spa',
            'desc'           => 'Trattamento distensivo con oli essenziali tiepidi formulato per calmare la mente sovraccarica, abbassare il cortisolo e regalare una tregua profonda dalla frenesia quotidiana.',
            'benefit'        => 'Consigliato per: Calma interiore, riduzione dell\'ansia e riposo profondo',
            'image'          => rdl_get_default_image('cervicale')
        ),
        array(
            'title'          => 'Massaggio Lomi Lomi con pietre calde',
            'category'       => 'relax',
            'category_label' => 'Termoterapico Avvolgente',
            'price'          => '60€',
            'duration'       => '60 min',
            'intensity'      => 'Calore Dolce & Profondo',
            'icon'           => 'local_fire_department',
            'desc'           => 'La fluidità ancestrale del tocco hawaiano unita alle pietre levigate di basalto vulcanico caldo. Il calore scioglie le tensioni muscolari riequilibrando i centri energetici interiori.',
            'benefit'        => 'Consigliato per: Contratture da freddo, stanchezza cronica e radicamento',
            'image'          => rdl_get_default_image('pietre')
        ),
        array(
            'title'          => 'Massaggio con cera calda',
            'category'       => 'relax',
            'category_label' => 'Nutriente Sensoriale',
            'price'          => '60€',
            'duration'       => '60 min',
            'intensity'      => 'Morbida & Avvolgente',
            'icon'           => 'water_drop',
            'desc'           => 'Gocce vellutate di candela da massaggio a base di cera di soia, burro di karité e oli essenziali biologici. Nutre la pelle in profondità donando una rilassatezza sublime.',
            'benefit'        => 'Consigliato per: Pelle secca, stress intenso e coccola aromaterapica',
            'image'          => rdl_get_default_image('cera')
        ),

        // ==========================================
        // 2. MASSAGGI MIRATI (60 min • 70 €)
        // ==========================================
        array(
            'title'          => 'Trattamento Cervicale',
            'category'       => 'therapeutic',
            'category_label' => 'Focus Posturale',
            'price'          => '70€',
            'duration'       => '60 min',
            'intensity'      => 'Media con Punti di Decontrazione',
            'icon'           => 'fitness_center',
            'desc'           => 'Focus analitico su collo, trapezio, scapole e base cranica. Alterna pompage cervicale, frizioni decontratturanti e mobilizzazioni dolci per liberare la postura dai carichi del lavoro d\'ufficio.',
            'benefit'        => 'Consigliato per: Cefalee tensive, torcicollo e postura da computer',
            'image'          => rdl_get_default_image('cervicale')
        ),
        array(
            'title'          => 'Tecniche di Sblocco',
            'category'       => 'therapeutic',
            'category_label' => 'Mobilizzazione Articolare',
            'price'          => '70€',
            'duration'       => '60 min',
            'intensity'      => 'Dinamica & Funzionale',
            'icon'           => 'self_improvement',
            'desc'           => 'Manovre delicate di mobilizzazione articolare, trazioni e release miofasciale studiate per liberare il movimento bloccato e restituire ampiezza e fluidità strutturale.',
            'benefit'        => 'Consigliato per: Rigidità articolare, blocchi posturali e mobilità ridotta',
            'image'          => rdl_get_default_image('cervicale')
        ),
        array(
            'title'          => 'Massaggio Miofasciale',
            'category'       => 'therapeutic',
            'category_label' => 'Strutturale Profondo',
            'price'          => '70€',
            'duration'       => '60 min',
            'intensity'      => 'Profonda & Lenta',
            'icon'           => 'accessibility_new',
            'desc'           => 'Lavoro sulle fasce connettivali per ripristinare l\'elasticità tissutale, migliorare l\'ossigenazione e liberare le aderenze muscolari causate da posture scorrette o sforzi fisici.',
            'benefit'        => 'Consigliato per: Sportivi, contratture croniche e rigidità articolare',
            'image'          => rdl_get_default_image('cervicale')
        ),
        array(
            'title'          => 'Medicina Tradizionale Cinese applicata ai Meridiani',
            'category'       => 'therapeutic',
            'category_label' => 'Energetico Tradizionale',
            'price'          => '70€',
            'duration'       => '60 min',
            'intensity'      => 'Pressioni Ritmiche Mirate',
            'icon'           => 'flare',
            'desc'           => 'Basato sulla Medicina Tradizionale Cinese: digitopressione lungo i meridiani di Vescica, Rene e Fegato per armonizzare il flusso del Qi e sciogliere i ristagni psicosomatici.',
            'benefit'        => 'Consigliato per: Stanchezza cronica, insonnia e pesantezza fisica',
            'image'          => rdl_get_default_image('cervicale')
        ),

        // ==========================================
        // 3. TRATTAMENTI SPECIALI (30 min • 40 €)
        // ==========================================
        array(
            'title'          => 'Riflessologia Plantare',
            'category'       => 'special',
            'category_label' => 'Riequilibrio Zonale',
            'price'          => '40€',
            'duration'       => '30 min',
            'intensity'      => 'Digitopressione Mirata',
            'icon'           => 'pan_tool',
            'desc'           => 'Stimolazione precisa delle terminazioni nervose e zone riflesse della pianta del piede collegate agli organi interni. Favorisce il drenaggio linfatico, la vitalità e una camminata leggera.',
            'benefit'        => 'Consigliato per: Gambe pesanti, ritenzione idrica e distensione generale',
            'image'          => rdl_get_default_image('cervicale')
        ),
        array(
            'title'          => 'Massaggio Kobido (viso)',
            'category'       => 'special',
            'category_label' => 'Lifting Viso Tradizionale',
            'price'          => '40€',
            'duration'       => '30 min',
            'intensity'      => 'Dinamica & Delicata',
            'icon'           => 'face',
            'desc'           => 'Antico rituale giapponese di giovinezza per il viso. Movimenti veloci e leggeri di sfioramento, digitopressione e percussione che stimolano collagene ed elastina, distendendo i tratti ed illuminando l\'incarnato.',
            'benefit'        => 'Consigliato per: Tono del viso, drenaggio occhi e luminosità istantanea',
            'image'          => rdl_get_default_image('kobido')
        )
    );
}
