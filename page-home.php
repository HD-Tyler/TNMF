<?php
/*
  Template Name: Home Page
*/

// Advanced Custom Fields
$hero_title             = get_field('hero_title');
$hero_subtitle          = get_field('hero_subtitle');
$hero_primary_button    = get_field('hero_primary_button');
$hero_secondary_button  = get_field('hero_secondary_button');

$why_title              = get_field('why_title');
$why_description        = get_field('why_description');

$product_title          = get_field('product_title');
$product_description    = get_field('product_description');

$about_title            = get_field('about_title');
$about_description      = get_field('about_description', false, false);
$features               = get_field('about_title');
// Featured UL list items
$featured_list_item_1   = get_field('featured_list_item_1');
$featured_list_item_2   = get_field('featured_list_item_2');
$featured_list_item_3   = get_field('featured_list_item_3');


get_header();
?>

<!-- HERO
    ======================================================-->

    <section id="hero">
    <div class="container-fluid clearfix">
        <div class="row">
            <div class="col">
                    <div id="hero-content">
                        <h1><?php echo $hero_title; ?></h1>
                        <h2><span><?php echo $hero_subtitle; ?></span></h2>
                        <div class=button-holder>
                            <a href="#" class="btn btn-outline-primary tnmf-btn" target="_blank"><?php echo $hero_secondary_button; ?></a>
                            <a href="#" class="btn btn-primary tnmf-btn" target="_blank"><?php echo $hero_primary_button; ?></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section> 
    

    <!-- WHY GO WITH
    ======================================================-->
    <section id="why-go">
        <div class="container-fluid clearfix">
            <div class="row no-gutters">
                <div class="col-sm-8 align-self-center">
                    <div class="this-content">
                        <h1><?php echo $why_title; ?></h1>
                        <p>TEST</p>
                        <p><?php echo $why_description; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 mudflap">
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT
    ======================================================-->
    <section id="product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                    <h1><?php echo $product_title; ?></h1>
                    <p><?php echo $product_description; ?></p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col d-flex product">
                    <div class="product-box">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/black-mf.png" alt="">
                        <h2>TN Mud Flaps <strong>BLACK</strong></h2>
                        <h2 class="prod-price">$65.00</h2>
                        <a href="#" class="btn prod-btn" role="button" aria-pressed="">Add to Cart</a>
                    </div>
                </div>
                <div class="col d-flex product">
                    <div class="product-box">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/red-mf.png" alt="">
                        <h2>TN Mud Flaps <strong>RED</strong></h2>
                        <h2 class="prod-price">$65.00</h2>
                        <a href="#" class="btn prod-btn" role="button" aria-pressed="">Add to Cart</a>
                    </div>
                </div>
                <div class="col d-flex product">
                    <div class="product-box">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blue-mf.png" alt="">
                        <h2>TN Mud Flaps <strong>BLUE</strong></h2>
                        <h2 class="prod-price">$65.00</h2>
                        <a href="#" class="btn prod-btn" role="button" aria-pressed="">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ABOUT
    ======================================================-->
    <div class="about-img">
    <section id="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-1">
                    <div id="about-content">
                        <h1><?php echo $about_title; ?></h1>
                        <p><?php echo $about_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-1">
                    <h1><?php echo $features_title; ?></h1>
                    <div id="features-list">
                        <ul class="features">
                            <li><?php echo $featured_list_item_1; ?></li>
                            <li><?php echo $featured_list_item_2; ?></li>
                            <li><?php echo $featured_list_item_3; ?></li>
                        </ul>
                        <ul class="features">
                            <li>Cost effective</li>
                            <li>Multiple color options<Test/li>
                            <li>Easy install</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- TESTIMONIALS
    ======================================================-->
    <section id="testimonials">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <h1>Customer Reviews</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 d-flex justify-content-around">
                    <blockquote class="customer-quotes">
                        test 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur orci nulla, vulputate at vestibulum vel, vulputate
                        sodales lectus. Nam sem purus, semper id egestas at, pharetra non nibh. Phasellus sagittis posuere nisl, vitae finibus
                        erat tincidunt at. Suspendisse at sodales sapien
                    </blockquote>
                </div>
                <div class="col-md-4 d-flex justify-content-around">
                    <blockquote class="customer-quotes">
                        test 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur orci nulla, vulputate at vestibulum vel, vulputate
                        sodales lectus. Nam sem purus, semper id egestas at, pharetra non nibh. Phasellus sagittis posuere nisl, vitae finibus
                        erat tincidunt at. Suspendisse at sodales sapien
                    </blockquote>
                </div>
                <div class="col-md-4 d-flex justify-content-around">
                    <blockquote class="customer-quotes">
                        test 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur orci nulla, vulputate at vestibulum vel, vulputate
                        sodales lectus. Nam sem purus, semper id egestas at, pharetra non nibh. Phasellus sagittis posuere nisl, vitae finibus
                        erat tincidunt at. Suspendisse at sodales sapien
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
