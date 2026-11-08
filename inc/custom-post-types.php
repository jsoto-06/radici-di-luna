<?php
/**
 * Radici di Luna - Custom Post Type: Trattamenti (Treatments)
 */

if (!defined('ABSPATH')) {
    exit;
}

function rdl_register_trattamenti_cpt() {
    $labels = array(
        'name'                  => _x('Trattamenti', 'Post type general name', 'radici-di-luna'),
        'singular_name'         => _x('Trattamento', 'Post type singular name', 'radici-di-luna'),
        'menu_name'             => _x('Trattamenti', 'Admin Menu text', 'radici-di-luna'),
        'name_admin_bar'        => _x('Trattamento', 'Add New on Toolbar', 'radici-di-luna'),
        'add_new'               => __('Aggiungi Nuovo', 'radici-di-luna'),
        'add_new_item'          => __('Aggiungi Nuovo Trattamento', 'radici-di-luna'),
        'new_item'              => __('Nuovo Trattamento', 'radici-di-luna'),
        'edit_item'             => __('Modifica Trattamento', 'radici-di-luna'),
        'view_item'             => __('Visualizza Trattamento', 'radici-di-luna'),
        'all_items'             => __('Tutti i Trattamenti', 'radici-di-luna'),
        'search_items'          => __('Cerca Trattamenti', 'radici-di-luna'),
        'not_found'             => __('Nessun trattamento trovato.', 'radici-di-luna'),
        'not_found_in_trash'    => __('Nessun trattamento nel cestino.', 'radici-di-luna'),
        'featured_image'        => __('Immagine Trattamento', 'radici-di-luna'),
        'set_featured_image'    => __('Imposta immagine', 'radici-di-luna'),
        'remove_featured_image' => __('Rimuovi immagine', 'radici-di-luna'),
        'use_featured_image'    => __('Usa come immagine del trattamento', 'radici-di-luna'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'trattamenti'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('trattamento', $args);
}
add_action('init', 'rdl_register_trattamenti_cpt');

/**
 * Add Meta Box for Treatment Details (Price, Duration, Intensity, Category)
 */
function rdl_add_trattamento_metaboxes() {
    add_meta_box(
        'rdl_trattamento_details',
        __('Dettagli del Trattamento (Prezzo, Durata, Categoria)', 'radici-di-luna'),
        'rdl_render_trattamento_metabox',
        'trattamento',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'rdl_add_trattamento_metaboxes');

function rdl_render_trattamento_metabox($post) {
    wp_nonce_field('rdl_save_trattamento_meta', 'rdl_trattamento_meta_nonce');

    $price = get_post_meta($post->ID, '_rdl_price', true);
    $duration = get_post_meta($post->ID, '_rdl_duration', true);
    $category = get_post_meta($post->ID, '_rdl_category', true);
    $category_label = get_post_meta($post->ID, '_rdl_category_label', true);
    $intensity = get_post_meta($post->ID, '_rdl_intensity', true);
    $benefit = get_post_meta($post->ID, '_rdl_benefit', true);
    $icon = get_post_meta($post->ID, '_rdl_icon', true);

    if (empty($price)) $price = '60€';
    if (empty($duration)) $duration = '60 min';
    if (empty($category)) $category = 'relax';
    ?>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; padding: 10px 0;">
        <div>
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Prezzo (es. 60€)', 'radici-di-luna'); ?></label>
            <input type="text" name="rdl_price" value="<?php echo esc_attr($price); ?>" style="width:100%;" />
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Durata (es. 60 min, 30 min)', 'radici-di-luna'); ?></label>
            <input type="text" name="rdl_duration" value="<?php echo esc_attr($duration); ?>" style="width:100%;" />
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Filtro Categoria', 'radici-di-luna'); ?></label>
            <select name="rdl_category" style="width:100%;">
                <option value="relax" <?php selected($category, 'relax'); ?>>Rilassanti (relax)</option>
                <option value="therapeutic" <?php selected($category, 'therapeutic'); ?>>Mirati & Terapeutici (therapeutic)</option>
                <option value="special" <?php selected($category, 'special'); ?>>Rituali Speciali & Viso (special)</option>
            </select>
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Etichetta Badge Categoria (es. Rilassante Profondo)', 'radici-di-luna'); ?></label>
            <input type="text" name="rdl_category_label" value="<?php echo esc_attr($category_label); ?>" style="width:100%;" />
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Intensità (es. Tocco Dolce & Fluido)', 'radici-di-luna'); ?></label>
            <input type="text" name="rdl_intensity" value="<?php echo esc_attr($intensity); ?>" style="width:100%;" />
        </div>
        <div>
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Icona Material Symbols (es. psychology, waves, spa)', 'radici-di-luna'); ?></label>
            <input type="text" name="rdl_icon" value="<?php echo esc_attr($icon ? $icon : 'spa'); ?>" style="width:100%;" />
        </div>
        <div style="grid-column: 1 / -1;">
            <label style="display:block; font-weight:600; margin-bottom:5px;"><?php _e('Consigliato per (Beneficio Principale)', 'radici-di-luna'); ?></label>
            <input type="text" name="rdl_benefit" value="<?php echo esc_attr($benefit); ?>" style="width:100%;" placeholder="Es. Consigliato per: Riconnessione emotiva e distensione totale" />
        </div>
    </div>
    <?php
}

function rdl_save_trattamento_meta($post_id) {
    if (!isset($_POST['rdl_trattamento_meta_nonce']) || !wp_verify_nonce($_POST['rdl_trattamento_meta_nonce'], 'rdl_save_trattamento_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array('rdl_price', 'rdl_duration', 'rdl_category', 'rdl_category_label', 'rdl_intensity', 'rdl_benefit', 'rdl_icon');
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_trattamento', 'rdl_save_trattamento_meta');
