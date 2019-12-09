<?php

/* Template Name: Home Page */

get_header(); ?>

    <div class="container">
        <?php if ( have_rows( 'block_one' ) ) : ?>
            <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
                <div class="container-fluid home-blockOne-container" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>')" align="center">
                    <h1 class="home-blockOne-header"><?php the_sub_field( 'header' ); ?></h1>
                    <?php $header_button = get_sub_field( 'header_button' ); ?>
                    <?php if ( $header_button ) { ?>
                        <a href="<?php echo $header_button['url']; ?>" class="btn home-blockOne-button" target="<?php echo $header_button['target']; ?>"><?php echo $header_button['title']; ?></a>
                    <?php } ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'block_two' ) ) : ?>
            <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
                <div class="container-fluid home-blockTwo-container">
                    <div class="row display-flex">
                        <?php if ( have_rows( 'container_left' ) ) : ?>
                            <?php while ( have_rows( 'container_left' ) ) : the_row(); ?>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="home-blockTwo-containerLeft featured-fix z-depth-1-half" align="left">
                                        <h3 class="home-blockTwo-headers"><?php the_sub_field( 'header' ); ?></h3>
                                        <hr class="home-blockTwo-hrlines" align="left"/>
                                        <div class="container">
                                            <div class="row display-flex">
                                                <div class="col-lg-5 col-md-6 col-sm-12">
                                                    <div class="featured-fix">
                                                        <?php $featured_property_image = get_sub_field( 'featured_property_image' ); ?>
                                                        <?php if ( $featured_property_image ) { ?>
                                                            <img src="<?php echo $featured_property_image['url']; ?>" class="home-blockTwo-image" alt="<?php echo $featured_property_image['alt']; ?>" />
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-6 col-sm-12">
                                                    <div class="featured-fix">
                                                        <h4 class="home-blockTwo-subheadingLeft"><?php the_sub_field( 'featured_property_header' ); ?></h4>
                                                        <p class="home-blockTwo-bodyTextLeft"><?php the_sub_field( 'featured_property_text' ); ?></p>
                                                        <?php $featured_property_link = get_sub_field( 'featured_property_link' ); ?>
                                                        <?php if ( $featured_property_link ) { ?>
                                                            <a href="<?php echo $featured_property_link['url']; ?>" class="btn home-blockTwo-buttonLeft" target="<?php echo $featured_property_link['target']; ?>"><?php echo $featured_property_link['title']; ?></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div align="center">
                                            <?php $button = get_sub_field( 'button' ); ?>
                                            <?php if ( $button ) { ?>
                                                <a href="<?php echo $button['url']; ?>" class="btn home-blockTwo-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'container_right' ) ) : ?>
                            <?php while ( have_rows( 'container_right' ) ) : the_row(); ?>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="home-blockTwo-containerRight featured-fix z-depth-1-half">
                                        <h3 class="home-blockTwo-headers"><?php the_sub_field( 'header' ); ?></h3>
                                        <hr class="home-blockTwo-hrlines" align="left"/>
                                        <p class="home-blockTwo-bodyTextRight"><?php the_sub_field( 'body_text' ); ?></p>
                                        <h4 class="home-blockTwo-subheadingRight"><?php the_sub_field( 'subheader' ); ?></h4>
                                        <ul class="fa-ul">
                                            <li class="home-blockTwo-contactInfo"><span class="fa-li"><i class="fas fa-chevron-circle-right home-blockTwo-icons"></i></span><?php the_sub_field( 'contact_info_one' ); ?></li>
                                            <li class="home-blockTwo-contactInfo"><span class="fa-li"><i class="fas fa-chevron-circle-right home-blockTwo-icons"></i></span><?php the_sub_field( 'contact_info_two' ); ?></li>
                                        </ul>
                                        <div align="center">
                                            <?php $button = get_sub_field( 'button' ); ?>
                                            <?php if ( $button ) { ?>
                                                <a href="<?php echo $button['url']; ?>" class="btn home-blockTwo-buttonRight" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

<?php if ( have_rows( 'block_three' ) ) : ?>
    <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
        <div class="container-fluid home-blockThree-container">
            <div class="row display-flex">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="home-blockThree-containerLeft featured-fix" align="left">
                        <h2 class="home-blockThree-heading"><?php the_sub_field( 'header' ); ?></h2>
                        <p class="home-blockThree-bodyText"><?php the_sub_field( 'body_text' ); ?></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="home-blockThree-containerRight featured-fix" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>')" align="center">
                        <div>
                            <?php $logo = get_sub_field( 'logo' ); ?>
                            <?php if ( $logo ) { ?>
                                <img src="<?php echo $logo['url']; ?>" class="home-blockThree-logo" alt="<?php echo $logo['alt']; ?>" />
                            <?php } ?>
                        </div>

                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php if ( $button ) { ?>
                            <a href="<?php echo $button['url']; ?>" class="btn home-blockThree-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
    </div>

<?php get_footer(); ?>