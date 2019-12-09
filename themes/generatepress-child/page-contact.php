<?php

/* Template Name: Contact Page */

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
                <div class="container-fluid contact-blockOne-container">
                    <div class="row display-flex">
                        <?php if ( have_rows( 'container_left' ) ) : ?>
                            <?php while ( have_rows( 'container_left' ) ) : the_row(); ?>
                                <div class="col-lg-6 col-md-12 col-sm-12 about-blockFour-containerLeft">
                                    <div class="featured-fix">
                                        <h3 class="about-blockFour-headers"><?php the_sub_field( 'header' ); ?></h3>
                                        <p class="about-blockFour-subheaders"><?php the_sub_field( 'subheader' ); ?></p>
                                        <div class="container-fluid">

                                            <?php if ( have_rows( 'contact_info' ) ) : ?>
                                                <?php while ( have_rows( 'contact_info' ) ) : the_row(); ?>

                                                    <?php
                                                    if (get_sub_field('contact_type') == 'phone'){
                                                        $icon = '<i class="fas fa-phone fa-2x about-blockFour-contactIcons"></i>';
                                                    }
                                                    if (get_sub_field('contact_type') == 'email'){
                                                        $icon = '<i class="fas fa-paper-plane fa-2x about-blockFour-contactIcons"></i>';
                                                    }
                                                    if (get_sub_field('contact_type') == 'address'){
                                                        $icon = '<i class="fas fa-building fa-2x about-blockFour-contactIcons"></i>';
                                                    }
                                                    ?>

                                                    <div class="row display-flex about-blockFour-contactContainers">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 about-blockFour-contactContainerLeft">
                                                            <div class="featured-fix" align="center">
                                                                <?php echo $icon ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 about-blockFour-contactContainerRight">
                                                            <div class="featured-fix z-depth-1 about-blockFour-contactInnerContainerRight">
                                                                <p class="about-blockFour-contactLables"><?php the_sub_field( 'contact_label' ); ?></p>
                                                                <h4 class="about-blockFour-contactText"><?php the_sub_field( 'contact_info' ); ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>

                                        </div>

                                        <div align="center">
                                            <?php $button = get_sub_field( 'button' ); ?>
                                            <?php if ( $button ) { ?>
                                                <a href="<?php echo $button['url']; ?>" class="btn contact-blockOne-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'container_right' ) ) : ?>
                            <?php while ( have_rows( 'container_right' ) ) : the_row(); ?>
                                <div class="col-lg-6 col-md-12 col-sm-12 about-blockFour-containerRight">
                                    <div class="featured-fix z-depth-1 about-blockFour-formContainer">
                                        <h3 class="about-blockFour-headers"><?php the_sub_field( 'header' ); ?></h3>
                                        <p class="about-blockFour-subheaders"><?php the_sub_field( 'subheader' ); ?></p>
                                        <?php
                                        $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                        ?>
                                        <form id="contact-form" action="<?php echo get_stylesheet_directory_uri() ?>/etc/contact-mail.php?url=<?php echo $current_url ?>" method="POST">

                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" id="fname" name="fname" class="form-control about-blockFour-formInputs" placeholder="First Name" required="">
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="lname" name="lname" class="form-control about-blockFour-formInputs" placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                            <br>
                                            <input type="tel" id="phone" name="phone" class="form-control mb-4 about-blockFour-formInputs" placeholder="Phone Number" required="">

                                            <input type="email" id="email" name="email" class="form-control mb-4 about-blockFour-formInputs" placeholder="E-mail Address" required="">

                                            <textarea class="form-control about-blockFour-formInputs" id="message" rows="11" placeholder="Please send me more info..." name="message" required="true" spellcheck="false"></textarea>

                                            <?php
                                            $id = 0;
                                            $formEmailRecipients = array();
                                            if( have_rows('email_recipient') ): ?>
                                                <?php while( have_rows('email_recipient') ): the_row();
                                                    $email = get_sub_field('email');
                                                    $formEmailRecipients[$id] = $email;
                                                    $id++;
                                                endwhile; ?>
                                            <?php endif; ?>

                                            <?php
                                            $strFormEmailRecipients = implode(' ', $formEmailRecipients);
                                            ?>

                                            <input name="strFormEmailRecipients" type="hidden" value="<?php echo htmlspecialchars($strFormEmailRecipients) ?>"/>

                                        </form>

                                        <button class="btn btn-block about-blockFour-formButton" onclick="document.getElementById('contact-form').submit();"><?php the_sub_field( 'submit_button_text' ); ?></button>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>