<?php
/*
Template Name: Properties Listings Page
*/
get_header();

?>
<div class="container-fluid propertie-blockOne-container">
    <div class="container" align="center">
        <h2 class="propertie-blockOne-heading">What type of property are you looking for?</h2>
        <ul class="nav nav-pills nav-fill propertie-blockOne-menu-ul">
            <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['propertie-listing-menu'];
            $primaryNav = wp_get_nav_menu_items($menuID);

            global $wp;
            $currentURL =  home_url($wp->request);

            echo '<br/>';

            foreach ( $primaryNav as $navItem ) {
                if ($currentURL . '/' == $navItem->url){
                    echo '<li class="nav-item propertie-blockOne-menu-li"><a class="propertie-blockOne-buttonActive btn " href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                }
                if ($currentURL . '/' != $navItem->url){
                    echo '<li class="nav-item propertie-blockOne-menu-li"><a class="propertie-blockOne-buttons btn " href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>

<div class="propertie-blockTwo-container container-fluid">
    <div class="container">
        <?php // property_listing_types ( value )
        $property_listing_types_array = get_field( 'property_listing_types' ); ?>
        <div>
            <?php if ($property_listing_types_array != null){ ?>
                <ul class="nav nav-tabs justify-content-center">
                    <?php
                    //if both are in array
                    if (in_array("sale", $property_listing_types_array) && in_array("lease", $property_listing_types_array)) { ?>
                        <li class="nav-item waves-effect waves-light">
                            <a id="tab-one" class="nav-link active propertie-blockTwo-tab-active" data-toggle="collapse" href="#collapseTabOne" aria-expanded="true" aria-controls="collapseTabOne"><?php the_field( 'sale_tab_title' ); ?></a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a id="tab-two" class="nav-link propertie-blockTwo-tab-normal collapsed" data-toggle="collapse" href="#collapseTabTwo" aria-expanded="false" aria-controls="collapseTabTwo"><?php the_field( 'lease_tab_title' ); ?></a>
                        </li>
                    <?php }

                    //if only sale is in array
                    if (in_array("sale", $property_listing_types_array) && (! in_array("lease", $property_listing_types_array))) { ?>
                        <li class="nav-item waves-effect waves-light">
                            <a id="tab-one" class="nav-link active propertie-blockTwo-tab-active" data-toggle="collapse" href="#collapseTabOne" aria-expanded="true" aria-controls="collapseTabOne"><?php the_field( 'sale_tab_title' ); ?></a>
                        </li>
                    <?php }

                    //if only lease in array
                    if (in_array("lease", $property_listing_types_array) && (! in_array("sale", $property_listing_types_array))) { ?>
                        <li class="nav-item waves-effect waves-light">
                            <a id="tab-two" class="nav-link active propertie-blockTwo-tab-active" data-toggle="collapse" href="#collapseTabTwo" aria-expanded="false" aria-controls="collapseTabTwo"><?php the_field( 'lease_tab_title' ); ?></a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <div>
            <?php if (in_array("sale", $property_listing_types_array)) { ?>
                <div class="propertie-blockTwo-containers collapse show" id="collapseTabOne" style="">
                    <?php the_field( 'sale_embed_code' ); ?>
                </div>
            <?php } ?>
            <?php if (in_array("lease", $property_listing_types_array)) { ?>
                <div class="propertie-blockTwo-containers collapse" id="collapseTabTwo" style="">
                    <?php the_field( 'lease_embed_code' ); ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<?php
get_footer();
?>

<script>
    $('#collapseTabOne').on('show.bs.collapse', function() {
        $('#tab-one').removeClass('active propertie-blockTwo-tab-normal propertie-blockTwo-tab-active');
        $('#tab-two').removeClass('active propertie-blockTwo-tab-normal propertie-blockTwo-tab-active');
        $('#tab-three').removeClass('active propertie-blockTwo-tab-normal propertie-blockTwo-tab-active');

        $('#tab-one').addClass('active propertie-blockTwo-tab-active');
        $('#tab-two').addClass('propertie-blockTwo-tab-normal');
        $('#tab-three').addClass('propertie-blockTwo-tab-normal');

        $('#collapseTabTwo').collapse('hide');
        $('#collapseTabThree').collapse('hide');
    });

    $('#collapseTabTwo').on('show.bs.collapse', function() {
        $('#tab-one').removeClass('active propertie-blockTwo-tab-normal propertie-blockTwo-tab-active');
        $('#tab-two').removeClass('active propertie-blockTwo-tab-normal propertie-blockTwo-tab-active');
        $('#tab-three').removeClass('active propertie-blockTwo-tab-normal propertie-blockTwo-tab-active');

        $('#tab-two').addClass('active propertie-blockTwo-tab-active');
        $('#tab-one').addClass('propertie-blockTwo-tab-normal');
        $('#tab-three').addClass('propertie-blockTwo-tab-normal');

        $('#collapseTabOne').collapse('hide');
        $('#collapseTabThree').collapse('hide');
    });
</script>
