<?php

echo '<div class="card mb-3 bg-light border-0 py-2 px-3 shadow-sm color-theme fs-6 fw-bold text-center">';
    echo get_option('blogname') . ' - ' . get_option('blogdescription');
echo '</div>';

echo '<div class="bg-white p-3 shadow-sm mb-3">';
    // The Query.
    $args = array(
        'post_type' => 'product',
        'posts_per_page'=> 8
    );
    $the_query = new WP_Query( $args );

    // The Loop.
    if ( $the_query->have_posts() ) {
        echo '<div class="row g-2">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            
            do_action('velocitytoko_product_loop');
        }
        echo '</div>';

        echo '<div class="text-center mt-2">';
            echo '<a class="btn btn-dark btn-sm px-4 border-theme shadow-sm" style="--bs-btn-bg: var(--velocitytoko-color-main); --bs-btn-border-color: var(--velocitytoko-color-main);" href="'.get_site_url().'/products">Produk lainnya</a>';
        echo '</div>';

    } else {
        esc_html_e( 'Sorry, no products here.' );
    }


    // Restore original Post Data.
    wp_reset_postdata();

echo '</div>';
