<?php

//*** Support Title Tag
add_theme_support('title-tag');

//*** Enqueue FRSkynet Style
function frskynet_enqueue_style()
{
    // Bootstrap Core CSS
    wp_enqueue_style('bootstrap_min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');

    // Customizable CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    wp_enqueue_style('blue', get_template_directory_uri() . '/assets/css/blue.css', array(), '1.0');
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.3.3');
    wp_enqueue_style('owl_transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.3.2');
    wp_enqueue_style('animate_min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0');
    wp_enqueue_style('rateit', get_template_directory_uri() . '/assets/css/rateit.css', array(), '1.0');
    wp_enqueue_style('bootstrap_select_min', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.6.2');

    // Icons/Glyphs
    wp_enqueue_style('font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0');

    // Theme stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'frskynet_enqueue_style');

//*** Enqueue FRSkynet Script
function frskynet_enqueue_script()
{
    // wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-hover-dropdown.min', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), 1, true);
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('echo.min', get_template_directory_uri() . '/assets/js/echo.min.js', array(), 1, true);
    wp_enqueue_script('jquery.easing-1.3.min', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-slider.min', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), 1, true);
    wp_enqueue_script('jquery.rateit.min', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), 1, true);
    wp_enqueue_script('lightbox.min', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), 1, true);
    wp_enqueue_script('wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), 1, true);
}
add_action('wp_enqueue_scripts', 'frskynet_enqueue_script');

/**
 * Woocommerce Theme Support
 */
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 3; // 3 products per row
    }
}

/**
 * Change product button text
 */
add_filter('woocommerce_product_add_to_cart_text', 'custom_woocommerce_product_add_to_cart_text');
function custom_woocommerce_product_add_to_cart_text()
{
    global $product;

    $product_type = $product->get_type();

    switch ($product_type) {
        case 'external':
            return __('Buy product', 'woocommerce');
            break;
        case 'grouped':
            return __('View product', 'woocommerce');
            break;
        case 'simple':
            return __('Add to cart', 'woocommerce');
            break;
        case 'variable':
            return __('Select option', 'woocommerce');
            break;
        default:
            return __('Read more', 'woocommerce');
    }
}

/**
 * Change several of the breadcrumb defaults
 */
add_filter('woocommerce_breadcrumb_defaults', 'frskynet_woocommerce_breadcrumbs');
function frskynet_woocommerce_breadcrumbs()
{
    return array(
        // 'delimiter' => ' &#47; ',
        'delimiter' => ' - ',
        'wrap_before' => '<div class="breadcrumb-inner">
                            <ul class="list-inline list-unstyled">',
        'wrap_after' => '</ul>
                        </div>',
        'before' => '',
        'after' => '',
        'home' => _x('Home', 'breadcrumb', 'woocommerce'),
    );
}

/**
 * Remove the breadcrumbs
 */
add_action('init', 'frskynet_remove_wc_breadcrumbs');
function frskynet_remove_wc_breadcrumbs()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
}

/**
 * Remove Showing result
 */
add_action('init', 'frskynet_remove_woocommerce_result_count');
function frskynet_remove_woocommerce_result_count()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
}

/**
 * Remove default catelog ordering
 */
add_action('init', 'frskynet_remove_woocommerce_catelog_ordering');
function frskynet_remove_woocommerce_catelog_ordering()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);
}

/**
 * Remove default bottom pagination
 */
add_action('init', 'frskynet_remove_woocommerce_bottom_pagination');
function frskynet_remove_woocommerce_bottom_pagination()
{
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10, 0);
}

function flipmart_pagination()
{
    global $wp_query;
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => __('<i class="fa fa-angle-left"></i>'),
        'next_text' => __('<i class="fa fa-angle-right"></i>'),
    ));
    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<div class="pagination-container"><ul class="list-inline list-unstyled">';
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul></div>';
    }
}
/*
// Woocommerce show product per page dropdown
function frskynet_woocommerce_catalog_page_ordering()
{
?><?php echo '<div class="lbl-cnt"><span class="itemsorder">Show</span>'?>
<form action="" method="POST" name="results" class="fdl inline">
<select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
<?php
if(isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] <> $_POST['woocommerce-sort-by-columns']))) {
$numberOfProductPerPage = $_POST['woocommerce-sort-by-columns'];
} else {
$numberOfProductPerPage = $_POST['shop_pageResults'];
}
$shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
'6' => __('6', 'flipmart'),
'9' => __('9', 'flipmart'),
'12' => __('12', 'flipmart'),
'15' => __('15', 'flipmart'),
'-1' => __('All', 'flipmart'),
));
foreach ($shopCatalog_orderby as $sort_id => $sort_name) {
echo '<option value="' . $sort_id . '" ' . selected($_SESSION['sortby'], $sort_id, false) . ' >' . $sort_name . '</option>';
}
?>
</select>
</form>
</div>
<?php
}

// now we set our cookie if we need to
function dl_sort_by_page($count)
{
if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
$count = $_COOKIE['shop_pageResults'];
}
if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time() + 1209600, '/', 'beadsnwire.lukeseall.co.uk/', false); //this will fail if any part of page has been output- hope this works!
$count = $_POST['woocommerce-sort-by-columns'];
}
// else normal page load and no cookie
return $count;
}
add_filter('loop_shop_per_page', 'dl_sort_by_page');*/

/**
 *Woocommerce show product per page dropdown
 */
function frskynet_woocommerce_catalog_page_ordering()
{
    ?>
    <div class="lbl-cnt">
    <?php echo '<span class="lbl">Shop:</span>' ?>
    <form action="" method="POST" name="results" class="fld inline">
        <select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
        <?php
// Get product on page reload
    if (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] != $_POST['woocommerce-sort-by-columns']))) {
        $numberOfProductPerPage = $_POST['woocommerce-sort-by-columns'];
    } else {
        $numberOfProductPerPage = $_POST['shop_pageResults'];
    }

    // This is where you can change the amount per page that the user will use feel free to change the number of products
    $shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
        // Add as many of these as you want to, -1 shows all products per page
        // '' => __('Result per page', 'woocommerce'),
        '3' => __('3', 'flipmart'),
        '6' => __('6', 'flipmart'),
        '9' => __('9', 'flipmart'),
        '12' => __('12', 'flipmart'),
        '15' => __('15', 'flipmart'),
        '-1' => __('All', 'flipmart'),
    ));
    foreach ($shopCatalog_orderby as $shop_id => $sort_name) {
        echo '<option value="' . $sort_id . '" ' . selected($numberOfProductsPerPage, $sort_id, true) . ' >' . $sort_name . '</option>';
    }

    ?>
        </select>
    </form>
    </div>
    <?php
}

// Now we set our cookie of we need to
function dl_sort_by_page($count)
{
    if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
        $count = $_COOKIE['shop_pageResults'];
    }
    if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
        setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time() + 1209600, '/', 'www.your-domain-goes-here.com', false);
        $count = $_POST['woocommerce-sort-by-columns'];
    }
    // else normal page load and no cookie
    return $count;
}
add_filter('loop_shop_per_page', 'dl_sort_by_page');

/**
 * Add custom sorting options (asc/desc)
 */
add_filter('woocommerce_catalog_orderby', 'frskynet_custom_woocommerce_catalog_orderby');
function frskynet_custom_woocommerce_catalog_orderby($sortby)
{
    $sortby['menu_order']  = 'Position';
    $sortby['price']       = 'Price:Lowest first';
    $sortby['price-desc'] = 'Price:Highest first';
    unset($sortby['popularity']);
    unset($sortby['date']);
    unset($sortby['rating']);
    return $sortby;
}