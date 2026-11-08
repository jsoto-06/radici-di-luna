<?php
/**
 * Radici di Luna - WordPress Theme Customizer Integration
 * Consente di modificare tutto il tema da Aspetto > Personalizza
 */

if (!defined('ABSPATH')) {
    exit;
}

function rdl_customize_register($wp_customize) {

    // 1. Panel Principale
    $wp_customize->add_panel('rdl_theme_panel', array(
        'title'       => __('🌙 Radici di Luna - Opzioni del Tema', 'radici-di-luna'),
        'description' => __('Personalizza ogni elemento del sito: banner, immagini, testi, contatti e concierge WhatsApp.', 'radici-di-luna'),
        'priority'    => 25,
    ));

    /* ========================================================
     * SEZIONE: Colori del Tema
     * ======================================================== */
    $wp_customize->add_section('rdl_colors_section', array(
        'title'    => __('Colore Oro & Palette', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 10,
    ));

    $wp_customize->add_setting('rdl_color_gold', array(
        'default'           => '#d4af37',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rdl_color_gold', array(
        'label'    => __('Colore Oro Primario', 'radici-di-luna'),
        'section'  => 'rdl_colors_section',
        'settings' => 'rdl_color_gold',
    )));

    $wp_customize->add_setting('rdl_color_bg', array(
        'default'           => '#0f0e0c',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rdl_color_bg', array(
        'label'    => __('Colore Sfondo Ossidiana', 'radici-di-luna'),
        'section'  => 'rdl_colors_section',
        'settings' => 'rdl_color_bg',
    )));

    /* ========================================================
     * SEZIONE: Dati di Contatto & Concierge WhatsApp
     * ======================================================== */
    $wp_customize->add_section('rdl_contact_section', array(
        'title'    => __('Dati di Contatto & WhatsApp Concierge', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 20,
    ));

    $wp_customize->add_setting('rdl_whatsapp', array(
        'default'           => '+39 333 491 8428',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_whatsapp', array(
        'label'       => __('Numero WhatsApp Concierge (con prefisso internazionale)', 'radici-di-luna'),
        'description' => __('Usato per le prenotazioni rapide dirette via WhatsApp.', 'radici-di-luna'),
        'section'     => 'rdl_contact_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('rdl_phone', array(
        'default'           => '+39 333 491 8428',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_phone', array(
        'label'   => __('Numero Telefonico per Chiamate', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_email', array(
        'default'           => 'elena@radicidiluna.it',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('rdl_email', array(
        'label'   => __('Email Principale dello Studio', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'email',
    ));

    $wp_customize->add_setting('rdl_brand_subtitle', array(
        'default'           => 'Studio Olistico • San Giustino',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_brand_subtitle', array(
        'label'   => __('Sottotitolo del Marchio (Header / Footer)', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_address', array(
        'default'           => 'San Giustino (PG)',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_address', array(
        'label'   => __('Indirizzo dello Studio', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_directions', array(
        'default'           => 'Riceve solo su appuntamento',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_directions', array(
        'label'   => __('Indicazioni Studio / Parcheggio', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hours', array(
        'default'           => 'Lunedì - Venerdì: 09:00 - 20:00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hours', array(
        'label'   => __('Orari di Apertura Ordinari', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hours_secondary', array(
        'default'           => 'Sabato & Domenica: Chiuso',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hours_secondary', array(
        'label'   => __('Orari Secondari / Weekend', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_maps_url', array(
        'default'           => 'https://share.google/N0plZW2u67u1ON9xw',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_maps_url', array(
        'label'   => __('Link Google Maps', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('rdl_google_reviews_url', array(
        'default'           => 'https://share.google/N0plZW2u67u1ON9xw',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_google_reviews_url', array(
        'label'       => __('Link Recensioni Google (Google Business Profile)', 'radici-di-luna'),
        'description' => __('Enlace para ver y dejar reseñas de Google.', 'radici-di-luna'),
        'section'     => 'rdl_contact_section',
        'type'        => 'url',
    ));

    $wp_customize->add_setting('rdl_instagram', array(
        'default'           => 'https://www.instagram.com/studio_olistico_radici_di_luna',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_instagram', array(
        'label'   => __('Profilo Instagram', 'radici-di-luna'),
        'section' => 'rdl_contact_section',
        'type'    => 'url',
    ));

    /* ========================================================
     * SEZIONE: Banner Principale (Hero - Home Page)
     * ======================================================== */
    $wp_customize->add_section('rdl_hero_section', array(
        'title'    => __('Hero Banner (Home Page)', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 30,
    ));

    $wp_customize->add_setting('rdl_hero_bg', array(
        'default'           => rdl_get_default_image('hero'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_hero_bg', array(
        'label'       => __('Immagine di Sfondo del Banner', 'radici-di-luna'),
        'description' => __('Carica o seleziona l\'immagine grande per il banner hero.', 'radici-di-luna'),
        'section'     => 'rdl_hero_section',
    )));

    $wp_customize->add_setting('rdl_hero_badge', array(
        'default'           => 'SANTUARIO DI BENESSERE OLISTICO • SAN GIUSTINO',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hero_badge', array(
        'label'   => __('Badge Superiore', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hero_title_1', array(
        'default'           => 'STUDIO OLISTICO',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hero_title_1', array(
        'label'   => __('Titolo Riga 1', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hero_title_2', array(
        'default'           => 'RADICI DI LUNA',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hero_title_2', array(
        'label'   => __('Titolo Riga 2 (In Oro)', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hero_desc', array(
        'default'           => 'Massaggi sartoriali e rituali olistici per corpo e mente. Un\'esperienza di quiete profonda, cura autentica e rigenerazione a San Giustino.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_hero_desc', array(
        'label'   => __('Testo Descrittivo del Banner', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('rdl_hero_btn1_text', array(
        'default'           => 'Scopri i Rituali',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hero_btn1_text', array(
        'label'   => __('Testo Pulsante 1', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hero_btn1_url', array(
        'default'           => '#massaggi-overview',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_hero_btn1_url', array(
        'label'   => __('Link Pulsante 1', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hero_btn2_text', array(
        'default'           => 'Prenota Trattamento',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_hero_btn2_text', array(
        'label'   => __('Testo Pulsante 2', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('rdl_hero_btn2_url', array(
        'default'           => '#prenotazione',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_hero_btn2_url', array(
        'label'   => __('Link Pulsante 2', 'radici-di-luna'),
        'section' => 'rdl_hero_section',
        'type'    => 'text',
    ));

    /* ========================================================
     * SEZIONE: Esperienze in Evidenza (Home)
     * ======================================================== */
    $wp_customize->add_section('rdl_featured_cards_section', array(
        'title'    => __('Home: Esperienze in Evidenza (6 Card)', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 40,
    ));

    // Card 1: Massaggio Californiano
    $wp_customize->add_setting('rdl_feat1_img', array('default' => rdl_get_default_image('californiano'), 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_feat1_img', array(
        'label' => __('Card 1: Immagine', 'radici-di-luna'),
        'section' => 'rdl_featured_cards_section',
    )));
    $wp_customize->add_setting('rdl_feat1_badge', array('default' => 'MASSAGGIO RILASSANTE • 60 MIN', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat1_badge', array('label' => __('Card 1: Badge', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat1_title', array('default' => 'Massaggio Californiano', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat1_title', array('label' => __('Card 1: Titolo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat1_desc', array('default' => 'Movimenti lunghi, armonici e lenti per una profonda riconnessione corpo-mente e un totale abbandono dello stress.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('rdl_feat1_desc', array('label' => __('Card 1: Descrizione', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section', 'type' => 'textarea'));
    $wp_customize->add_setting('rdl_feat1_price', array('default' => '€ 60', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat1_price', array('label' => __('Card 1: Prezzo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));

    // Card 2: Lomi Lomi con pietre calde
    $wp_customize->add_setting('rdl_feat2_img', array('default' => rdl_get_default_image('pietre'), 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_feat2_img', array(
        'label' => __('Card 2: Immagine', 'radici-di-luna'),
        'section' => 'rdl_featured_cards_section',
    )));
    $wp_customize->add_setting('rdl_feat2_badge', array('default' => 'MASSAGGIO RILASSANTE • 60 MIN', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat2_badge', array('label' => __('Card 2: Badge', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat2_title', array('default' => 'Pietre Calde & Basalto (Lomi Lomi)', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat2_title', array('label' => __('Card 2: Titolo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat2_desc', array('default' => 'Calore vulcanico profondo che scioglie carichi fisici ed emotivi, riallineando e armonizzando le tue energie.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('rdl_feat2_desc', array('label' => __('Card 2: Descrizione', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section', 'type' => 'textarea'));
    $wp_customize->add_setting('rdl_feat2_price', array('default' => '€ 60', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat2_price', array('label' => __('Card 2: Prezzo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));

    // Card 3: Massaggio con cera calda
    $wp_customize->add_setting('rdl_feat3_img', array('default' => rdl_get_default_image('cera'), 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_feat3_img', array(
        'label' => __('Card 3: Immagine', 'radici-di-luna'),
        'section' => 'rdl_featured_cards_section',
    )));
    $wp_customize->add_setting('rdl_feat3_badge', array('default' => 'MASSAGGIO RILASSANTE • 60 MIN', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat3_badge', array('label' => __('Card 3: Badge', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat3_title', array('default' => 'Candela Botanica Tiepida (Cera Calda)', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat3_title', array('label' => __('Card 3: Titolo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat3_desc', array('default' => 'Gocce tiepide di puro burro vegetale aromatico e cera naturale per una pelle vellutata e una calma assoluta.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('rdl_feat3_desc', array('label' => __('Card 3: Descrizione', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section', 'type' => 'textarea'));
    $wp_customize->add_setting('rdl_feat3_price', array('default' => '€ 60', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat3_price', array('label' => __('Card 3: Prezzo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));

    // Card 4: Trattamento Cervicale
    $wp_customize->add_setting('rdl_feat4_img', array('default' => rdl_get_default_image('cervicale'), 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_feat4_img', array(
        'label' => __('Card 4: Immagine', 'radici-di-luna'),
        'section' => 'rdl_featured_cards_section',
    )));
    $wp_customize->add_setting('rdl_feat4_badge', array('default' => 'MASSAGGIO MIRATO • 60 MIN', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat4_badge', array('label' => __('Card 4: Badge', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat4_title', array('default' => 'Trattamento Cervicale & Miofasciale', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat4_title', array('label' => __('Card 4: Titolo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat4_desc', array('default' => 'Tecniche di sblocco e digitopressione profonda mirate a sciogliere contratture, liberare il collo e alleviare la schiena.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('rdl_feat4_desc', array('label' => __('Card 4: Descrizione', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section', 'type' => 'textarea'));
    $wp_customize->add_setting('rdl_feat4_price', array('default' => '€ 70', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat4_price', array('label' => __('Card 4: Prezzo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));

    // Card 5: Massaggio Miofasciale
    $wp_customize->add_setting('rdl_feat5_img', array('default' => rdl_get_default_image('kobido'), 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_feat5_img', array(
        'label' => __('Card 5: Immagine', 'radici-di-luna'),
        'section' => 'rdl_featured_cards_section',
    )));
    $wp_customize->add_setting('rdl_feat5_badge', array('default' => 'TRATTAMENTO SPECIALE • 30 MIN', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat5_badge', array('label' => __('Card 5: Badge', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat5_title', array('default' => 'Massaggio Kobido (Viso & Décolleté)', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat5_title', array('label' => __('Card 5: Titolo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat5_desc', array('default' => 'Antico rituale imperiale giapponese che ridefinisce i contorni del viso, stimola il microcircolo ed illumina lo sguardo.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('rdl_feat5_desc', array('label' => __('Card 5: Descrizione', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section', 'type' => 'textarea'));
    $wp_customize->add_setting('rdl_feat5_price', array('default' => '€ 40', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat5_price', array('label' => __('Card 5: Prezzo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));

    // Card 6: Massaggio Kobido (viso)
    $wp_customize->add_setting('rdl_feat6_img', array('default' => rdl_get_default_image('miofasciale'), 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_feat6_img', array(
        'label' => __('Card 6: Immagine', 'radici-di-luna'),
        'section' => 'rdl_featured_cards_section',
    )));
    $wp_customize->add_setting('rdl_feat6_badge', array('default' => 'MASSAGGIO MIRATO • 60 MIN', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat6_badge', array('label' => __('Card 6: Badge', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat6_title', array('default' => 'Massaggio Miofasciale', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat6_title', array('label' => __('Card 6: Titolo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));
    $wp_customize->add_setting('rdl_feat6_desc', array('default' => 'Lavoro profondo sulle fasce connettivali per eliminare aderenze, ossigenare i muscoli e ridare elasticità tissutale.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('rdl_feat6_desc', array('label' => __('Card 6: Descrizione', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section', 'type' => 'textarea'));
    $wp_customize->add_setting('rdl_feat6_price', array('default' => '€ 70', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('rdl_feat6_price', array('label' => __('Card 6: Prezzo', 'radici-di-luna'), 'section' => 'rdl_featured_cards_section'));

    /* ========================================================
     * SEZIONE: Elena / Chi Sono
     * ======================================================== */
    $wp_customize->add_section('rdl_elena_section', array(
        'title'    => __('Elena (Chi Sono & Manifiesto)', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 50,
    ));

    $wp_customize->add_setting('rdl_elena_photo', array(
        'default'           => rdl_get_default_image('elena'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_elena_photo', array(
        'label'       => __('Foto di Elena', 'radici-di-luna'),
        'description' => __('Carica il ritratto di Elena.', 'radici-di-luna'),
        'section'     => 'rdl_elena_section',
    )));

    $wp_customize->add_setting('rdl_elena_quote', array(
        'default'           => 'Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_elena_quote', array(
        'label'   => __('Citazione Breve di Elena', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('rdl_elena_title', array(
        'default'           => 'L\'Arte del Tocco:',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_elena_title', array(
        'label'   => __('Titolo Sezione Elena', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
    ));

    $wp_customize->add_setting('rdl_elena_subtitle', array(
        'default'           => 'Sono Elena.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_elena_subtitle', array(
        'label'   => __('Sottotitolo in Oro', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
    ));

    $wp_customize->add_setting('rdl_elena_bio_1', array(
        'default'           => 'Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza. Questo spazio nasce da un momento importante della mia vita, che mi ha insegnato quanto sia prezioso rallentare e ascoltare i messaggi sottili del corpo.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_elena_bio_1', array(
        'label'   => __('Bio Paragrafo 1', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('rdl_elena_bio_2', array(
        'default'           => 'Originaria della Repubblica Dominicana, sono cresciuta con il valore naturale della calda accoglienza e del prendersi cura delle persone. Da anni approfondisco con dedizione le discipline olistiche occidentali e orientali, conseguendo certificazioni in massaggio Californiano, Lomi Lomi, decontratturante miofasciale e digitopressione sui meridiani.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_elena_bio_2', array(
        'label'   => __('Bio Paragrafo 2', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('rdl_elena_bio_3', array(
        'default'           => 'Credo che ogni persona sia unica e che ogni corpo abbia bisogno di attenzioni diverse. Per questo, il mio approccio parte sempre dall\'ascolto: conoscere le esigenze, rispettare le sensazioni e scegliere con cura le tecniche più adatte a ogni trattamento.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_elena_bio_3', array(
        'label'   => __('Bio Paragrafo 3', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('rdl_elena_bio_4', array(
        'default'           => 'Attraverso le mie mani desidero creare un momento speciale, in cui potersi allontanare dal ritmo frenetico della quotidianità, lasciar andare le tensioni e ritrovare una sensazione di armonia tra corpo e mente.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_elena_bio_4', array(
        'label'   => __('Bio Paragrafo 4', 'radici-di-luna'),
        'section' => 'rdl_elena_section',
        'type'    => 'textarea',
    ));

    /* ========================================================
     * SEZIONE: Pagina Trattamenti (Banner & Metriche)
     * ======================================================== */
    $wp_customize->add_section('rdl_trat_section', array(
        'title'    => __('Pagina Trattamenti: Banner & Tariffe', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 60,
    ));

    $wp_customize->add_setting('rdl_trat_banner_img', array(
        'default'           => rdl_get_default_image('trat_banner'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_trat_banner_img', array(
        'label'   => __('Immagine Banner Trattamenti', 'radici-di-luna'),
        'section' => 'rdl_trat_section',
    )));

    $wp_customize->add_setting('rdl_trat_tagline', array(
        'default'           => 'Tariffario & Menu Rituali d\'Autore',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_trat_tagline', array(
        'label'   => __('Tagline Superiore', 'radici-di-luna'),
        'section' => 'rdl_trat_section',
    ));

    $wp_customize->add_setting('rdl_trat_title', array(
        'default'           => 'Listino Rituali & Massaggi di Benessere',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_trat_title', array(
        'label'   => __('Titolo Principale', 'radici-di-luna'),
        'section' => 'rdl_trat_section',
    ));

    $wp_customize->add_setting('rdl_trat_desc', array(
        'default'           => 'Un santuario sartoriale di quiete e riequilibrio psicofisico. Ogni trattamento fonde oli vegetali tiepidi, essenze biologiche, pietre laviche basaltiche e la sapienza delle antiche tradizioni orientali e occidentali.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_trat_desc', array(
        'label'   => __('Descrizione', 'radici-di-luna'),
        'section' => 'rdl_trat_section',
        'type'    => 'textarea',
    ));

    /* ========================================================
     * SEZIONE: Pagina Prenota / Contatti
     * ======================================================== */
    $wp_customize->add_section('rdl_prenota_section', array(
        'title'    => __('Pagina Prenota / Contatti', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 70,
    ));

    $wp_customize->add_setting('rdl_prenota_banner_img', array(
        'default'           => rdl_get_default_image('prenota_banner'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_prenota_banner_img', array(
        'label'   => __('Immagine Banner Prenotazioni', 'radici-di-luna'),
        'section' => 'rdl_prenota_section',
    )));

    $wp_customize->add_setting('rdl_prenota_map_img', array(
        'default'           => rdl_get_default_image('map'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rdl_prenota_map_img', array(
        'label'   => __('Immagine / Mappa dello Studio', 'radici-di-luna'),
        'section' => 'rdl_prenota_section',
    )));

    /* ========================================================
     * SEZIONE: Pie de Página (Footer)
     * ======================================================== */
    $wp_customize->add_section('rdl_footer_section', array(
        'title'    => __('Pie de Página (Footer)', 'radici-di-luna'),
        'panel'    => 'rdl_theme_panel',
        'priority' => 80,
    ));

    $wp_customize->add_setting('rdl_footer_desc', array(
        'default'           => 'Uno spazio esclusivo a San Giustino consacrato all\'ascolto, al riposo sensoriale e alla cura artigianale del corpo.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('rdl_footer_desc', array(
        'label'   => __('Descrizione Breve dello Studio nel Footer', 'radici-di-luna'),
        'section' => 'rdl_footer_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('rdl_footer_copy', array(
        'default'           => '© ' . date('Y') . ' Studio Olistico Radici di Luna di Elena. Tutti i diritti riservati.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('rdl_footer_copy', array(
        'label'   => __('Testo Copyright', 'radici-di-luna'),
        'section' => 'rdl_footer_section',
    ));

    /* Link Legali e Banner Cookie nel Footer */
    $wp_customize->add_setting('rdl_privacy_url', array(
        'default'           => '#modal-privacy',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_privacy_url', array(
        'label'       => __('Link Informativa Privacy (URL o #modal-privacy)', 'radici-di-luna'),
        'description' => __('Lasciare #modal-privacy per usare il pop-up integrato, oppure inserire il link a una pagina personalizzata.', 'radici-di-luna'),
        'section'     => 'rdl_footer_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('rdl_cookie_url', array(
        'default'           => '#modal-cookies',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_cookie_url', array(
        'label'       => __('Link Cookie Policy (URL o #modal-cookies)', 'radici-di-luna'),
        'description' => __('Lasciare #modal-cookies per usare il pop-up integrato, oppure inserire il link a una pagina personalizzata.', 'radici-di-luna'),
        'section'     => 'rdl_footer_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('rdl_terms_url', array(
        'default'           => '#modal-terms',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_terms_url', array(
        'label'       => __('Link Condizioni di Servizio (URL o #modal-terms)', 'radici-di-luna'),
        'description' => __('Lasciare #modal-terms per usare il pop-up integrato, oppure inserire il link a una pagina personalizzata.', 'radici-di-luna'),
        'section'     => 'rdl_footer_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('rdl_disclaimer_url', array(
        'default'           => '#modal-disclaimer',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('rdl_disclaimer_url', array(
        'label'       => __('Link Disclaimer Medico & Legale (URL o #modal-disclaimer)', 'radici-di-luna'),
        'description' => __('Lasciare #modal-disclaimer per usare il pop-up integrato (Legge 4/2013).', 'radici-di-luna'),
        'section'     => 'rdl_footer_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('rdl_enable_cookie_banner', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('rdl_enable_cookie_banner', array(
        'label'       => __('Abilita Banner Blocco Tecnico Cookie (GDPR)', 'radici-di-luna'),
        'description' => __('Mostra il banner di blocco preventivo dei cookie con opzione di accettazione, rifiuto e personalizzazione.', 'radici-di-luna'),
        'section'     => 'rdl_footer_section',
        'type'        => 'checkbox',
    ));
}
add_action('customize_register', 'rdl_customize_register');

/**
 * Output dynamic CSS from Customizer in the head
 */
function rdl_customizer_css() {
    $gold = rdl_get_option('rdl_color_gold', '#d4af37');
    $bg   = rdl_get_option('rdl_color_bg', '#0f0e0c');
    ?>
    <style id="rdl-customizer-dynamic-css">
        :root {
            --rdl-gold-primary: <?php echo esc_attr($gold); ?>;
            --rdl-surface-dark: <?php echo esc_attr($bg); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'rdl_customizer_css');
