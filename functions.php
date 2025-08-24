<?php
/**
 * Theme Functions
 * YourFaceCosmo Custom Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function yourface_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ) );

    add_image_size( 'service_thumb', 400, 300, true );
    add_image_size( 'team_member', 300, 300, true );
}
add_action( 'after_setup_theme', 'yourface_theme_setup' );


// <li>ga 'is-active-item' qo'shamiz (top-level indikator)
add_filter('nav_menu_css_class', function($classes, $item){
    if (in_array('current-menu-item', $classes, true) || in_array('current-menu-ancestor', $classes, true)) {
        $classes[] = 'is-active-item';
    }
    return $classes;
}, 10, 2);

// Services single/archive bo'lsa, umumiy 'Услуги' item'ini ham aktiv qilamiz
add_filter('nav_menu_css_class', function($classes, $item){
    $archive = get_post_type_archive_link('services');
    if ($archive && (is_singular('services') || is_post_type_archive('services'))) {
        if (isset($item->url) && trailingslashit($item->url) === trailingslashit($archive)) {
            $classes[] = 'current-menu-item';
            $classes[] = 'is-active-item';
        }
    }
    return $classes;
}, 11, 2);

// <a> attributlari:
// - default: 'link-item'
// - current/ancestor: 'is-active' (top-level ko'rinish uchun)
// - submenu (depth>0) da current bo'lsa: 'active' (sizning .about-menu a.active uchun)
add_filter('nav_menu_link_attributes', function($atts, $item){
    $classes = $item->classes ?? [];
    $atts['class'] = trim(($atts['class'] ?? '') . ' link-item');

    $is_current = in_array('current-menu-item', $classes, true) || in_array('current-menu-ancestor', $classes, true);

    // Top-level ko'rinish (sizning bor mavjud dizayn): <a class="link-item is-active">
    if ($is_current) {
        $atts['class'] .= ' is-active';
    }

    // Submenu linklariga (depth>0) '.active' berish:
    // WP core $item->menu_item_parent > 0 bo'lsa, bu item child hisoblanadi (depth>0).
    if ($is_current && !empty($item->menu_item_parent) && intval($item->menu_item_parent) > 0) {
        $atts['class'] .= ' active';
    }

    return $atts;
}, 10, 2);


// functions.php yoki /inc/MenuWalker.php
class Header_Walker extends Walker_Nav_Menu {

    // Submenu boshlanishi: <div class="sub-menu"><ul class="about-menu">
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        if ($depth === 0) {
            $output .= "\n$indent<div class=\"sub-menu\">\n$indent\t<ul class=\"about-menu\">\n";
        } else {
            $output .= "\n$indent<ul class=\"sub-menu__inner\">\n";
        }
    }

    // Submenu tugashi
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        if ($depth === 0) {
            $output .= "$indent\t</ul>\n$indent</div>\n";
        } else {
            $output .= "$indent</ul>\n";
        }
    }

    // Har bir <li>
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes          = empty($item->classes) ? [] : (array) $item->classes;
        $has_children     = in_array('menu-item-has-children', $classes, true);
        $is_services_mega = in_array('services-mega', $classes, true);
        $is_current       = in_array('current-menu-item', $classes, true) || in_array('current-menu-ancestor', $classes, true);

        // yuqori daraja <li> uchun klasslar
        $li_classes = ['link-item__parent'];
        // child BOR yoki services-mega bo'lsa, dropdown uchun 'has-menu' qo'yamiz
        if ($has_children || $is_services_mega) {
            $li_classes[] = 'has-menu';
        }
        if ($is_current) {
            $li_classes[] = 'is-active-item';
        }

        $output .= '<li class="' . esc_attr(implode(' ', $li_classes)) . '">';

        // Linkning o'zi
        $atts = [];
        $atts['href']  = !empty($item->url) ? $item->url : '#';
        // 'link-item' + current bo'lsa 'is-active' (top-level ko'rinish uchun)
        $atts['class'] = 'link-item' . ($is_current ? ' is-active active' : '');
        $title = apply_filters('the_title', $item->title, $item->ID);

        $output .= '<a ' . $this->attrs($atts) . '>' . esc_html($title) . '</a>';

        // O'qcha: child bor YOKI mega bo'lsa ko'rsatamiz
        if ($has_children || $is_services_mega) {
            $output .= '<span class="link-item__arr"><img src="' . esc_url(get_template_directory_uri() . '/assets/img/icons/arr-down.svg') . '" alt=""></span>';
        }

        // "Услуги" uchun mega-menyu (li ichida custom content)
        if ($is_services_mega) {
            $output .= $this->services_mega_html();
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

    // Xavfsiz attribute builder
    private function attrs($atts) {
        $str = '';
        foreach ($atts as $k => $v) {
            if ($v === '') continue;
            $str .= sprintf(' %s="%s"', esc_attr($k), esc_attr($v));
        }
        return trim($str);
    }

    // Siz bergan services mega-menyu (CPT: services) + active highlight
    private function services_mega_html() {
        ob_start(); ?>
        <div class="sub-menu">
            <div class="menu-service">
                <?php
                $q = new WP_Query([
                    'post_type'      => 'services',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                    'no_found_rows'  => true,
                    'update_post_meta_cache' => false,
                    'update_post_term_cache' => false,
                ]);
                if ($q->have_posts()):
                    while ($q->have_posts()): $q->the_post();
//                        $description = function_exists('get_field') ? get_field('description') : '';
                        $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'service_thumb') : '';

                        // Agar hozir shu service single'ida bo'lsak, highlight qilamiz
                        $is_active_service = (is_singular('services') && get_queried_object_id() === get_the_ID());

                        // 1) Avval offers repeater
                        $items = [];

                        if (function_exists('have_rows') && have_rows('offers')) {
                            while (have_rows('offers')) { the_row();
                                // "offer text" subfield nomi turlicha bo'lishi mumkin: offer_text | text
                                $txt = get_sub_field('offer');
                                if (empty($txt)) $txt = get_sub_field('text');
                                if (!empty($txt)) $items[] = $txt;
                            }
                        }
                        // 2) Agar offers bo'lmasa, procedure repeater
                        if (empty($items) && function_exists('have_rows') && have_rows('procedure')) {
                            while (have_rows('procedure')) { the_row();
                                // ACF name odatda latin bo'ladi, lekin label "текст" bo'lishi mumkin.
                                // Shu bois ehtimoliy nomlarning birini o'qiymiz:
                                $txt = get_sub_field('текст');
                                if (empty($txt)) $txt = get_sub_field('текст');
                                if (empty($txt)) $txt = get_sub_field('text');
                                if (!empty($txt)) $items[] = $txt;
                            }
                        }
                        ?>
                        <a style="text-decoration: none" href="<?php the_permalink(); ?>" class="service-wrap">
                            <div class="service-inner<?php echo $is_active_service ? ' active' : ''; ?>">
                                <div class="service-title">
                                    <?php if ($thumb): ?>
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                    <?php the_title(); ?>
                                </div>
<!--                                --><?php //if ($description): ?>
<!--                                    <p class="desc">--><?php //echo esc_html($description); ?><!--</p>-->
<!--                                --><?php //endif; ?>
                                <?php if (!empty($items)) : ?>
                                    <ul class="service-option">
                                        <?php foreach ($items as $txt): ?>
                                            <li><span><?php echo esc_html($txt); ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
            <div class="sale-banner">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/sale/sale2.jpg'); ?>" alt="" class="sale-banner__bg">
                <div class="banner-title">Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
                <p class="banner-desc">Разглаживает мелкие морщинки, выравнивает цвет лица, улучшает качество кожи</p>
                <p class="banner-sale__type">Лицо полностью</p>
                <div class="banner-bottom">
                    <div class="banner-price">Всего <span>4900</span> <p>3675 руб.</p></div>
                    <a href="#" class="banner-btn">Записаться</a>
                </div>
                <div class="banner-discount">-25%</div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}




/**
 * Skript va stillarni ulash
 */
//function yourface_enqueue_scripts() {
//    wp_enqueue_style( 'yourface-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
//    wp_enqueue_style( 'yourface-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
//    wp_enqueue_script( 'yourface-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
//}
//add_action( 'wp_enqueue_scripts', 'yourface_enqueue_scripts' );

/**
 * Site Settings
*/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title'  => 'Site Settings',
        'menu_title'  => 'Site Settings',
        'menu_slug'   => 'site-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ]);
}




/**
 * CPT faylini ulash
 */

require get_template_directory() . '/inc/custom-post-types.php';


/**
 * archive-discounts.php acf ishlatishi uchun
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Настройки архива скидок',
        'menu_title' => 'Настройки скидок',
        'menu_slug' => 'discounts-archive-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/**
 * ACF faylini ulash
 */
//require get_template_directory() . '/inc/acf-fields.php';

// Contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');