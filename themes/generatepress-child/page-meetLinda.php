<?php

/* Template Name: Meet With Linda Page */

get_header(); ?>

    <div class="container-fluid header-container">
        <div class="container" align="center">
            <h1 class="header-header"><?php the_field( 'header' ); ?></h1>
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs" class="header-breadcrumbs">','</p>' );
            }
            ?>
        </div>
    </div>

    <div class="container meet-blockOne-container">
        <?php if ( have_rows( 'block_one' ) ) : ?>
            <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
                <div class="container-fluid ">
                    <h2 class="meet-blockOne-header"><?php the_sub_field( 'header' ); ?></h2>
                    <h3 class="meet-blockOne-subheader"><?php the_sub_field( 'subheader' ); ?></h3>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="meet-blockOne-containerLeft">
                                <?php if( have_rows('contact_us') ):
                                    while ( have_rows('contact_us') ) : the_row();

                                        $color = get_sub_field('font_color');

                                        if (get_sub_field('contact_type') == 'phone'){
                                            $icon = '<i class="fas fa-phone meet-blockOne-icons" style="color: '. $color .'"></i>';
                                        }
                                        if (get_sub_field('contact_type') == 'email'){
                                            $icon = '<i class="fas fa-envelope-open meet-blockOne-icons" style="color: '. $color .'"></i>';
                                        }
                                        if (get_sub_field('contact_type') == 'address'){
                                            $icon = '<i class="fas fa-map-marker-alt meet-blockOne-icons" style="color: '. $color .'"></i>';
                                        }
                                        ?>

                                        <h4 class="meet-blockOne-contactInfo" style="color: <?php echo $color ?>"><?php echo $icon ?> <?php the_sub_field('contact_info'); ?></h4>

                                    <?php endwhile;
                                endif; ?>

                                <hr class="meet-blockOne-hrline" align="left"/>
                                <?php the_sub_field( 'body_text' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="meet-blockOne-containerRight" align="center">
                                <?php $profile_picture = get_sub_field( 'profile_picture' ); ?>
                                <?php if ( $profile_picture ) { ?>
                                    <img src="<?php echo $profile_picture['url']; ?>" class="meet-blockOne-profileImage" alt="<?php echo $profile_picture['alt']; ?>" />
                                <?php } ?>
                                <h5 class="meet-blockOne-profileHeader"><?php the_sub_field( 'profile_subheading' ); ?></h5>
                                <?php $profile_button = get_sub_field( 'profile_button' ); ?>
                                <?php if ( $profile_button ) { ?>
                                    <a href="<?php echo $profile_button['url']; ?>" class="btn meet-blockOne-profileButton" target="<?php echo $profile_button['target']; ?>"><?php echo $profile_button['title']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>