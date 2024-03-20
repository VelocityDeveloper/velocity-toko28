<div class="header-top bg-theme">
    <div class="container text-center text-md-start d-md-flex align-items-center justify-content-end">
        <div class="kontak-seller p-0"><?php echo do_shortcode('[kontak style="false"]'); ?></div>
        <div class="profile-icons p-0">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
                <div class="p-2"><?php echo do_shortcode('[cart]'); ?></div>
                <div class="p-2">
                    <form action="<?php echo get_site_url(); ?>/products" class="d-flex" method="get">
                        <input style="font-size: 12px;" type="text" name="s" placeholder="Cari.." class="form-control form-control-sm px-2 py-1 h-auto rounded-0 border-0">
                        <button type="submit" class="border-0 btn btn-dark btn-sm py-1 h-auto rounded-0 border-0">
                            <svg class="bi" fill="currentColor" width="10" height="10"><use href="#search"></use></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>

<div class="container">

    <?php if (has_custom_logo()) {
        echo '<div class="my-3">';
        the_custom_logo();
        echo '</div>';
    } ?>

    <div>

        <nav id="main-nav" class="navbar navbar-expand-md d-block navbar-light p-0" aria-labelledby="main-nav-label">
                
            <h2 id="main-nav-label" class="screen-reader-text">
                <?php esc_html_e('Main Navigation', 'justg'); ?>
            </h2>

            <button class="navbar-toggler text-start w-100 bg-light rounded-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
                <span class="navbar-toggler-icon"></span>
                <small>Menu</small>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- The WordPress Menu goes here -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'offcanvas-body primarymenu-body',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 4,
                        'walker'          => new justg_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'secondary',
                        'container_class' => 'offcanvas-body secondarymenu-body',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                        'fallback_cb'     => '',
                        'menu_id'         => 'secondary-menu',
                        'depth'           => 4,
                        'walker'          => new justg_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>

            </div><!-- .offcanvas -->
        </nav>

    </div>

</div>