<?php
/*
  Template Name: Home Page
*/

// Advanced Custom Fields
$hero_title             = get_field('hero_title');
$hero_subtitle          = get_field('hero_subtitle');
$hero_primary_button    = get_field('hero_primary_button');
$hero_secondary_button  = get_field('hero_secondary_button');

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
                        <h1>WHY GO WITH TNMF?</h1>
                        <p>Aliquam iaculis vel lectus a eleifend. Etiam tristique nulla ac justo porta, a vestibulum neque sagittis. Curabitur
                        dignissim lectus nibh, ut ultricies diam aliquam eu. Proin venenatis tellus vitae efficitur dignissim. Maecenas mattis
                        augue elit, nec faucibus dui porta vel. Nullam lorem dolor, porta vitae mattis vehicula, eleifend sed leo. Nam fringilla
                        faucibus vestibulum.<br><br> posuere est blandit urna tincidunt, vitae tincidunt est sagittis. Vestibulum finibus ipsum
                        quis nunc rutrum, eu facilisis ligula placerat. Quisque sit amet dignissim leo. Integer suscipit massa at consectetur
                        sodales. Praesent vulputate nunc at justo ullamcorper luctus. Curabitur accumsan eros sit amet tincidunt auctor.
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
                    <h1>2015 + WRX AND STI Mud FlAPS</h1>
                    <p>Select your color below. Note that these will fit some 08-14 modles so long as you have pop clips on the front of your
                    car</p>
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
                        <h1>About TNMF</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada mauris ut ipsum scelerisque, a dictum velit
                        ornare. Nam semper dolor ullamcorper nunc efficitur rutrum. Phasellus eget laoreet neque, eu maximus eros.<br><br>
                        
                        Proin laoreet dictum risus, sed feugiat nisl feugiat non. Maecenas quam augue, finibus quis dictum vel, tempor in nisi.
                        Vivamus eget urna non velit volutpat pretium quis ac lorem. Nulla viverra sem ut diam ultricies pretium. Quisque tempus
                        a orci a ultricies. Nunc nec es</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-1">
                    <h1>Features</h1>
                    <div id="features-list">
                        <ul class="features">
                            <li>Anti-warp</li>
                            <li>Fade resistant<Test/li>
                            <li>Durable in hot and cold climates</li>
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
