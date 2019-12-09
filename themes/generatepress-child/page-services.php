<?php

/* Template Name: Services Page */

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

    <div class="container">

        <?php if ( have_rows( 'block_one' ) ) : ?>
            <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
                <div class="container-fluid services-blockOne-container" align="left">
                    <h2 class="services-blockOne-header"><?php the_sub_field( 'header' ); ?></h2>
                    <hr class="services-blockOne-hrLines" align="left"/>
                    <p class="services-blockOne-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'block_two' ) ) : ?>
            <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
                <div class="container-fluid services-blockTwo-container">
                    <h3 class="services-blockTwo-header"><?php the_sub_field( 'header' ); ?></h3>

                    <?php if( have_rows('blocks') ):
                        while ( have_rows('blocks') ) : the_row(); ?>
                            <div class="services-blockTwo-containers" align="left">
                                <h4 class="services-blockTwo-subheading"><?php the_sub_field('header'); ?></h4>
                                <hr class="services-blockTwo-hrLines" align="left"/>
                                <p class="services-blockTwo-bodyTexts"><?php the_sub_field('body_text'); ?></p>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'block_three' ) ) : ?>
            <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
                <div class="container-fluid services-blockThree-container">
                    <h3 class="services-blockThree-header"><?php the_sub_field( 'header' ); ?></h3>
                    <br/>
                    <div class="container-fluid">
                        <div class="row display-flex">
                            <?php if ( have_rows( 'left_block' ) ) : ?>
                                <?php while ( have_rows( 'left_block' ) ) : the_row(); ?>
                                    <div class="col-lg-4 col-md-12">
                                        <div id="services-blockThree-containerLeft" class="services-blockThree-containers z-depth-1-half featured-fix services-blockThree-containerLeft">
                                            <h4 class="services-blockThree-headings"><?php the_sub_field( 'header' ); ?></h4>
                                            <p class="services-blockThree-bodyText"><?php the_sub_field( 'body_text' ); ?></p>

                                            <div align="center">
                                                <?php $button = get_sub_field( 'button' ); ?>
                                                <?php if ( $button ) { ?>
                                                    <a href="<?php echo $button['url']; ?>" class="btn services-blockThree-buttons" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if ( have_rows( 'middle_block' ) ) : ?>
                                <?php while ( have_rows( 'middle_block' ) ) : the_row(); ?>
                                    <div class="col-lg-4 col-md-12">
                                        <div id="services-blockThree-containerMiddle" class="services-blockThree-containers z-depth-1-half featured-fix services-blockThree-containerMiddle">
                                            <h4 class="services-blockThree-headings"><?php the_sub_field( 'header' ); ?></h4>
                                            <p class="services-blockThree-bodyText"><?php the_sub_field( 'body_text' ); ?></p>

                                            <div align="center">
                                                <?php $button = get_sub_field( 'button' ); ?>
                                                <?php if ( $button ) { ?>
                                                    <a href="<?php echo $button['url']; ?>" class="btn services-blockThree-buttons" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if ( have_rows( 'right_block' ) ) : ?>
                                <?php while ( have_rows( 'right_block' ) ) : the_row(); ?>
                                    <div class="col-lg-4 col-md-12">
                                        <div id="services-blockThree-containerRight" class="services-blockThree-containers z-depth-1-half featured-fix services-blockThree-containerRight">
                                            <h4 class="services-blockThree-headings"><?php the_sub_field( 'header' ); ?></h4>
                                            <p class="services-blockThree-bodyText"><?php the_sub_field( 'body_text' ); ?></p>

                                            <div class="bottom" align="center">
                                                <?php $button = get_sub_field( 'button' ); ?>
                                                <?php if ( $button ) { ?>
                                                    <a href="<?php echo $button['url']; ?>" class="btn services-blockThree-buttons" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>