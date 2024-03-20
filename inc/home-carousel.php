<div class="bg-white p-3 shadow-sm mb-3">

    <?php
    // The Query.
    $args = array(
        'post_type' => 'product',
        'posts_per_page'=> 8
    );
    $the_query = new WP_Query( $args );

    // The Loop.
    if ( $the_query->have_posts() ) {

        echo '<div class="home-products-carousel">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            
            echo '<div class="px-1 px-md-2">';
            do_action('velocitytoko_product_loop');
            echo '</div>';

        }
        echo '</div>';

    } else {
        esc_html_e( 'Sorry, no products here.' );
    }


    // Restore original Post Data.
    wp_reset_postdata();

    ?>

    <script>
        jQuery(function($){
            $('.home-products-carousel').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                prevArrow:'<div class="position-absolute z-1 start-0 top-50"><span class="btn btn-dark bg-theme border-0 btn-sm opacity-50"><i class="fa fa-chevron-left"></i></span></div>',
                nextArrow:'<div class="position-absolute z-1 end-0 top-50"><span class="btn btn-dark bg-theme border-0 btn-sm opacity-50"><i class="fa fa-chevron-right"></i></span></div>',
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
                });
        });
    </script>

</div>'