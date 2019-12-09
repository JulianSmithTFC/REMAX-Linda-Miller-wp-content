<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>


<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_element_classes( 'footer' ); ?>>
    <?php
    /**
     * generate_before_footer_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_before_footer_content' );

    ?>

    <?php if ( have_rows( 'signup_block', 'option' ) ) : ?>
        <?php while ( have_rows( 'signup_block', 'option' ) ) : the_row(); ?>
            <div class="container-fluid footer-blockOne-container">
                <div class="container" align="center">
                    <h3 class="footer-blockOne-header"><?php the_sub_field( 'header' ); ?></h3>
                    <p class="footer-blockOne-subheader"><?php the_sub_field( 'subheader' ); ?></p>
                    <?php the_sub_field( 'contact_form' ); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php
    $display_areas_array = get_field( 'display_areas', 'option' ); ?>

    <div class="container-fluid footer-blockTwo-container">
        <div class="container">
            <div class="row justify-content-center">
                <?php if (in_array('fieldOne', $display_areas_array)){ ?>
                    <?php if ( have_rows( 'footer_area_one', 'option' ) ) : ?>
                        <?php while ( have_rows( 'footer_area_one', 'option' ) ) : the_row(); ?>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <h3 class="footer-headers"><?php the_sub_field( 'header' ); ?></h3>
                                <hr class="footer-hrlines" align="left"/>
                                <p class="footer-bodyTexts"><?php the_sub_field( 'body_text' ); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php }
                if (in_array('fieldTwo', $display_areas_array)){ ?>
                    <?php if ( have_rows( 'footer_area_two', 'option' ) ) : ?>
                        <?php while ( have_rows( 'footer_area_two', 'option' ) ) : the_row(); ?>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <h3 class="footer-headers"><?php the_sub_field( 'header' ); ?></h3>
                                <hr class="footer-hrlines" align="left"/>
                                <?php if( have_rows('contact_info') ):
                                    while ( have_rows('contact_info') ) : the_row();


                                        if (get_sub_field('contact_type') == 'phone'){
                                            $icon = '<i class="fas fa-phone footer-icons" ></i>';
                                        }
                                        if (get_sub_field('contact_type') == 'email'){
                                            $icon = '<i class="fas fa-envelope-open footer-icons" ></i>';
                                        }
                                        if (get_sub_field('contact_type') == 'address'){
                                            $icon = '<i class="fas fa-map-marker-alt footer-icons" ></i>';
                                        }
                                        ?>

                                        <h4 class="footer-contactInfo"><?php echo $icon ?> <?php the_sub_field('contact_info'); ?></h4>

                                    <?php endwhile;
                                endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php }
                if (in_array('fieldThree', $display_areas_array)){ ?>
                    <?php if ( have_rows( 'footer_area_three', 'option' ) ) : ?>
                        <?php while ( have_rows( 'footer_area_three', 'option' ) ) : the_row(); ?>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <h3 class="footer-headers"><?php the_sub_field( 'header' ); ?></h3>
                                <hr class="footer-hrlines" align="left"/>
                                <p class="footer-bodyTexts"><?php the_sub_field( 'body_text' ); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-blockThree-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div align="left">
                        <p class="footer-copyright">
                            <?php echo ('<i class="far fa-copyright footer-copyrightIcon"></i> ' . date("Y") . ' ' . get_bloginfo( 'name' ) . '<span> . All rights reserved</span>'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-none d-sm-block">
                    <div align="right">
                        <ul class="nav justify-content-end footer-menu">
                            <?php
                            $menuLocations = get_nav_menu_locations();
                            $menuID = $menuLocations['footer-menu'];
                            $primaryNav = wp_get_nav_menu_items($menuID);

                            foreach ( $primaryNav as $navItem ) {
                                echo '<li class="nav-item footer-menuItems"><a class="footer-menuItems" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-block d-sm-none" align="center">
                    <ul class="nav justify-content-center footer-menu">
                        <?php
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['footer-menu'];
                        $primaryNav = wp_get_nav_menu_items($menuID);

                        foreach ( $primaryNav as $navItem ) {
                            echo '<li class="nav-item footer-menuItems"><a class="footer-menuItems" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php

    /**
     * generate_after_footer_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_after_footer_content' );
    ?>
</div><!-- .site-footer -->

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer();
?>

</body>
</html>