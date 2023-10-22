<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage Surf.ru
 */
get_header(); // подключаем header.php ?>


<section class="one">
	<div class="container">
        <div class="gradient"></div>
        <h1 class="home-title">
            <?php the_field('toptitle') ?>
        </h1>
        <div class="clients">
            <div class="client">
                <img src="/wp-content/themes/surf/assets/img/clients/1.svg" alt="">
            </div>
            <div class="client">
                <img src="/wp-content/themes/surf/assets/img/clients/2.svg" alt="">
            </div>
            <div class="client">
                <img src="/wp-content/themes/surf/assets/img/clients/3.svg" alt="">
            </div>
            <div class="client">
                <img src="/wp-content/themes/surf/assets/img/clients/4.svg" alt="">
            </div>
            <div class="client">
                <img src="/wp-content/themes/surf/assets/img/clients/5.svg" alt="">
            </div>
            <div class="client">
                <img src="/wp-content/themes/surf/assets/img/clients/6.svg" alt="">
            </div>
        </div>

        <div class="create-title">
        <?php the_field('secondtitle') ?>
        </div>

        <!-- <div class="play-video">
            <div class="videos">
                <img src="/wp-content/themes/surf/assets/img/play.svg" alt="">
                <span>Смотреть видео</span> 
            </div>
        </div> -->


        <div class="since"><span>since 2011</span></div>


	</div>
</section>

<section class="two">
    <div class="container">
        <div class="two-title">
            Case Studeies
        </div>

        <div class="in-cases-home">
            <?php

            $banner = get_field('banner');
            $bannerlink = get_field('bannerlink');

            // Check rows exists.
            if( have_rows('cases') ):

                // Loop through rows.
                while( have_rows('cases') ) : the_row();
                $cc++;

                    // Load sub field value.
                    $img = get_sub_field('img');
                    $firstt = get_sub_field('firstt');
                    $secondt = get_sub_field('secondt');
                    $linkcase = get_sub_field('linkcase');
                    // Do something...

                    if($cc == 1 || $cc == 3 || $cc == 5) {

                        if($cc == 5 && $banner != '') {
                            echo ' <div class="cases-home">
                                        <div class="case">
                                            <a href="'.$bannerlink.'"><img src="'.$banner.'" alt=""></a>
                                        </div>
                                    </div>';
                        }

                        echo '<div class="cases-home">
                                <div class="case case-big">
                                    <a href="'.$linkcase.'"><img src="'.$img.'" alt=""></a>
                                    <a href="'.$linkcase.'" class="case-name">'.$firstt.'</a>
                                    <div class="case-desc">'.$secondt.'</div>
                                </div>';
                    } else if ($cc == 2 || $cc == 4 || $cc == 6) {

                        echo '<div class="case case-small">
                                    <a href="'.$linkcase.'"><img src="'.$img.'" alt=""></a>
                                    <a href="'.$linkcase.'" class="case-name">'.$firstt.'</a>
                                    <div class="case-desc">'.$secondt.'</div>
                                </div>
                            </div>';

                    }

                

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;

            ?>
        </div>


        <div class="get-more">
            <div class="more">
                <a href="/cases/">Show more <img src="/wp-content/themes/surf/assets/img/more.svg" alt=""></a> 
            </div>
        </div>


    </div>
</section>

<?php

// Check rows exists.
if( have_rows('testimonials') ): ?>

<section class="three">
    <div class="container">
        <div class="titled">Отзывы</div>

        <div class="testimonials">

          <?php

                    // Loop through rows.
                    while( have_rows('testimonials') ) : the_row();

                        // Load sub field value.
                        $name = get_sub_field('name');
                        $doljnost = get_sub_field('doljnost');
                        $img = get_sub_field('img');
                        $test = get_sub_field('test');

                        echo '<div class="testimonial">
                                <div class="testimonial-text">
                                '.$test.'
                                </div>
                                <div class="testimonial-photo">
                                    <img src="'.$img.'" alt="">
                                    <div class="testimonial-name">
                                        <span>'.$name.'</span>
                                        <p>'.$doljnost.'</p>
                                    </div>
                                </div>
                            </div>';
                        // Do something...

                    // End loop.
                    endwhile;

                // No value.
               

                ?>

        </div>

        <div class="get-more">
   
            <div class="more">
                <a>200+ реализованных проектов</a> 
            </div>
        </div>


    </div>
</section>

<?php 

endif; ?>

<section class="four">
    <div class="container">
        <div class="titled">Our Services</div>

        <div class="services">
            <div class="service">
                <img src="/wp-content/themes/surf/assets/img/services/2.svg" alt="">
                <div class="service-name">
                    <a>UI/UX design</a>
                    <span>Our industry expertise focuses on retail, healthcare, finance and customer service.</span>
                </div>
            </div>
            <div class="service">
                <img src="/wp-content/themes/surf/assets/img/services/3.svg" alt="">
                <div class="service-name">
                    <a>Mobile Applications Development</a>
                    <span>We develop native mobile applications on Swift and Kotlin and cross-platform applications on Flutter.</span>
                </div>
            </div>
            <div class="service">
                <img src="/wp-content/themes/surf/assets/img/services/4.svg" alt="">
                <div class="service-name">
                    <a>Migration & third-party service integration</a>
                    <span>We integrate many backend systems into a single API for web and mobile applications & automate the processes.</span>
                </div>
            </div>
            <div class="service">
                <img src="/wp-content/themes/surf/assets/img/services/5.svg" alt="">
                <div class="service-name">
                    <a>Quality Assurance</a>
                    <span>We create a technical infrastructure for conducting autotesting, marking events, and preparing test cases. Testing mobile apps and web services</span>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('call'); ?>

<?php get_footer(); // подключаем footer.php ?>