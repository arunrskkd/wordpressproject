<?php
/*
Template Name: Home
*/

get_header();

$contact        = get_option( 'contact_details' );
?>
<script type="application/ld+json">
{ "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Victoria Realtors",
 "alternateName":"Victoria Realtors",
 "legalName":"Victoria Realtors",
 "url" : "http://www.victoriarealtors.biz/",
 "logo" : "http://www.victoriarealtors.biz/wp-content/themes/victoria/images/logo.png",
 "sameAs" : [ "https://www.facebook.com/VictoriaDevelopers/",
 "http://www.victoriarealtors.biz/blog/"]
}
</script>
    <link href="<?php bloginfo('template_url'); ?>/css/homepop.css" rel="stylesheet">
    <section class="mainframe">
        <? if(count(get_field('sliders'))>0 ){?>
            <div class="mainframe_slider">

                <? foreach(get_field('sliders') as $slider){?>
                    <div class="main_slider_wrap">
                        <div class="main_slider_img">
                            <img alt="<?php echo $slider['image_alt'] ?>" src="<?php echo $slider['image'] ?>">
                        </div>
                        <div class="main_slider_text">
                            <div class="container">
                                <div class="builder_logo">
                                    <img src="<?php echo $slider['logo'] ?>">
                                </div>
                                <div class="builder_text">
                                    <h1>
                                        <?php echo $slider['title'] ?>
                                    </h1>
                                    <h3>
                                        <?php echo$slider['description'] ?>
                                    </h3>
                                </div>
                                <div class="builder_btns">
                                    <!--                        <a href="<?php //echo $slider['more_details_link'] ?>">More details</a>-->
                                    <a href="<?php echo $slider['view_all_projects_link'] ?>">View All Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? } ?>

            </div>
            <? } ?>
                <?=apply_filters( 'the_content', '[contact-form-7 id="4" title="Home Contact"]' );?>
    </section>

    <?
//$properties = get_field('properties');
    $properties = query_posts(array(
        'post_type' => 'page',
        'posts_per_page' => 99999,
        'meta_query' => array(
        'relation' => 'OR', /* <-- here */
		        array(
		            'key' => '_wp_page_template',
		            'value' => 'projects_template.php',
		            'compare' => '='
		        ),
		        array(
		            'key' => '_wp_page_template',
		            'value' => 'projects_multiple_plans_template.php',
		            'compare' => '='
		        )
    	)
    ));



    $locations = get_pages(array('parent' => 13,'post_type' => 'page','post_status' => 'publish','number' =>9999999));
?>


        <section class="project_gallery">
            <h3 class="slide-bottom">Our Projects</h3>
            <div class="project_gallery_tabs slide-bottom">
                <div class="container">
                    <a href="javascript:void(0)" class="all_projects_gallery active hide">All Projects</a>

                    <?php
            foreach($locations as $location){
                if(get_field('status',$location->ID)=='Active'){
            ?>
                        <a href="javascript:void(0)" class="<?=sanitize_title($location->post_title)?>_gallery active"><?php echo $location->post_title  ?></a>
                        <?  }
            }
            ?>


                </div>
            </div>
            <? if(count($properties)>0){?>
                <div class="project_gallery_info">
                    <div class="container">
                        <div class="row">
                            <div class="project_gallery_slider filtering">

                                <?
                foreach($properties as $property){

                    $parent =  get_page($property->post_parent);


                    $alt_text = get_post_meta(get_post_thumbnail_id( $property->ID ), '_wp_attachment_image_alt', true);
                    if($parent->post_status=='publish' && get_field('status',$property->ID) =='On Going'){
                ?>
                                    <div class="projects_wrap <?=sanitize_title($parent->post_title)?> all_projects animated">
                                        <div class="proj_img">
                                            <?  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $property->ID ), 'project_image'  );

                            ?>
                                                <img alt="<?=$alt_text?>" src="<?=$image[0]?>" alt="<?=$property->post_title?>">
                                                <?php $loc=get_field('location',$property->ID) ?>
                                                <?php $myArray = explode(',', $loc);?>
                                                <a href="javascript:void(0);" class="proj_cont1 open_pop" rel="<?=$property->post_title?>-<?php echo $myArray[0];?>">
                                                    <br /> Enquire Now
                                                </a>
                                        </div>
                                        <div class="proj_info">
                                            <div class="proj_name">
                                                <div class="builder_img">
                                                    <? if(get_field('logo',$property->ID)!=""){?>
                                                        <img style="width:50px;height:50px;" src="<?php echo get_field('logo',$property->ID) ?>">
                                                        <? } ?>
                                                </div>
                                                <div class="build_name">
                                                    <h4>
                                                        <?=$property->post_title?>
                                                    </h4>
                                                    <h5>
                                                        <?php echo get_field('area',$property->ID) ?>
                                                    </h5>
                                                    <span><img src="<?php bloginfo('template_url'); ?>/images/location.png"> <?php echo get_field('location',$property->ID) ?></span>
                                                </div>
                                            </div>
                                            <div class="proj_price">
                                                <h4>
                                                    <?php echo get_field('price',$property->ID) ?> <span>Onwards</span></h4>
                                                <a href="<?=get_permalink($property->ID)?>">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <? }  ?>
                                        <? }  ?>

                            </div>
                        </div>
                    </div>
                </div>
                <? } ?>
        </section>



        <section class="about_us">
            <div class="container">
                <div class="row">
                    <h3 class="slide-bottom">
                        <?=get_field('about_title')?>
                    </h3>
                    <p class="slide-bottom">
                        <?=get_field('about_content')?>
                    </p>
                </div>
            </div>
        </section>
        <section class="main_content">
            <div class="container">
                <div class="row">
                    <h3 class="slide-bottom">
                        <?=get_field('usp_title')?>
                    </h3>

                    <? if(count(get_field('usps'))>0){?>
                        <? foreach(get_field('usps') as $usp){?>
                            <div class="col-sm-4 first_main slide-right">
                                <div class="main_content_img">
                                    <img src="<?=$usp['image']?>">
                                </div>
                                <h4>
                                    <?=$usp['title']?>
                                </h4>
                                <p>
                                    <?=$usp['description']?>
                                </p>
                            </div>
                            <? } ?>
                                <? } ?>

                </div>
            </div>
        </section>
<!--
        <? if(count(get_field('testimonials'))>0){?>
            <section class="reviews">
                <div class="container">
                    <div class="row">
                        <h3 class="slide-bottom">Customer Reviews</h3>
                        <div class="review_slider slide-top">

                            <? foreach(get_field('testimonials') as $testimonial){?>
                                <div class="review_wrap">
                                    <p>
                                        <?=$testimonial['testimonial']?>
                                    </p>
                                    <? if($testimonial['client_image']!=""){?>
                                        <div class="review_img">
                                            <img src="<?=$testimonial['client_image']?>">
                                        </div>
                                        <? } ?>
                                            <div class="review_name">
                                                <h4>
                                                    <?=$testimonial['client_name']?>
                                                </h4>
                                                <h5>
                                                    <?=$testimonial['client_project']?>
                                                </h5>
                                            </div>
                                </div>
                                <? } ?>


                        </div>
                    </div>
                </div>
            </section>
            <? } ?>
-->


                <section class="home-testimonials testimonials">
                    <div class="container">
                        <div class="row">
                            <h3 class="slide-bottom">Testimonials</h3>
                            <div class="video-slider cf">
                            <?
                                $i = 1;
                                $videotestimonials= get_field('video_testimonials',2208); 
                                foreach($videotestimonials as $videotestimonial){
                           ?>
                                                    <div class="clients-slider col-md-4">
                                                        <div class="videos-block">
                                                            <video loop class="fillWidth" style="width:100%; height:235px;" id="testmonial<?=$i?>" preload="none">
                                            <source type="video/youtube" src="<?=$videotestimonial['video']?>">Your browser does not support the video tag. I suggest you upgrade your browser.
                                        </video>

                                                        </div>
                                                        <div class="client_slide_box videos_text">
                                                            <h4>
                                                                <?=$videotestimonial['client_name']?>
                                                            </h4>
                                                            <h5>
                                                                <?=$videotestimonial['project_name']?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <?
                               $i++;
                           }
                           ?>
                       </div>
                        </div>
                        <a href="http://www.victoriarealtors.biz/testimonials/" class="view-all">View All Testimonials<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                </section>



                <?
$blogs 		    = get_posts( array('posts_per_page'=> 3,'post_type' => 'blog','orderby'=> 'date','order'=> 'DESC'));

if(count($blogs)>0){
    // echo "<pre>";
    // print_r($blogs[0]);
    // echo "</pre>";
?>
                    <section class="tips_trends">
                        <div class="container">
                            <div class="row">
                                <h3 class="slide-bottom">Our Blogs</h3>
                                <? if($blogs[0]){?>
                                    <div class="tips_trends_left col-sm-7 slide-left">
                                        <div class="tips_trends_left_img">
                                            <?  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $blogs[0]->ID ), array(645,352) ); ?>
                                                <img src="<?=$image[0]?>" alt="<?=$blogs[0]->post_title?>">
                                                <a href="<?=get_permalink($blogs[0]->ID)?>">
                                                    <span>View Details <img src="<?php bloginfo('template_url'); ?>/images/location_arrow.png"></span>
                                                </a>
                                        </div>
                                        <div class="tips_trends_left_text">
                                            <h4>
                                                <a href="<?=get_permalink($blogs[0]->ID)?>"><?=$blogs[0]->post_title?></a>
                                            </h4>
                                            <p>
                                                <?=$post_date = get_the_date( 'd-M-Y',$blogs[0]->ID );?>
                                            </p>
                                        </div>
                                    </div>
                                    <? } ?>
                                        <div class="tips_trends_right col-sm-5 slide-right">
                                            <? if($blogs[1]){?>
                                                <div class="tips_trends_right_top">
                                                    <div class="tips_trends_right_img">
                                                        <img src="<?=the_post_thumbnail_url(array(466,214),$blogs[1]->ID)?>" alt="">
                                                        <?  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $blogs[1]->ID ), array(466,214) );

                        ?>
                                                            <img src="<?=$image[0]?>" alt="<?=$blogs[1]->post_title?>">
                                                            <?php // get_the_post_thumbnail($blogs[1]->ID,array(466,214),array('style'=>'min-width:466;min-height:214;')); ?>
                                                            <a href="<?=get_permalink($blogs[1]->ID)?>">
                                                                <span>View Details <img src="<?php bloginfo('template_url'); ?>/images/location_arrow.png"></span>
                                                            </a>
                                                    </div>
                                                    <div class="tips_trends_right_text">
                                                        <h4><a href="<?=get_permalink($blogs[1]->ID)?>"><?=$blogs[1]->post_title?></a></h4>
                                                        <p>
                                                            <?=$post_date = get_the_date( 'd-M-Y',$blogs[1]->ID );?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <? } ?>
                                                    <? if($blogs[2]){?>
                                                        <div class="tips_trends_right_bottom">
                                                            <div class="tips_trends_right_img">
                                                                <?  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $blogs[2]->ID ), array(466,214) );

                        ?>
                                                                    <img src="<?=$image[0]?>" alt="<?=$blogs[2]->post_title?>">
                                                                    <a href="<?=get_permalink($blogs[2]->ID)?>">
                                                                        <span>View Details <img src="<?php bloginfo('template_url'); ?>/images/location_arrow.png"></span>
                                                                    </a>
                                                            </div>
                                                            <div class="tips_trends_right_text">
                                                                <h4><a href="<?=get_permalink($blogs[2]->ID)?>"><?=$blogs[2]->post_title?></a></h4>
                                                                <p>
                                                                    <?=$post_date = get_the_date( 'd-M-Y',$blogs[2]->ID );?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <? } ?>
                                        </div>
                            </div>
                        </div>
                    </section>
                    <div class="popup_wrapper">
                        <div class="popup">
                            <div class="close_pop"><img src="<?php bloginfo('template_url'); ?>/palakkaddec/images/close_pop.png"></div>
                            <div class="pop_logo"><img src="<?php bloginfo('template_url'); ?>/palakkaddec/images/logo.png"></div>
                            <?php echo do_shortcode('[contact-form-7 id="1443" title="Enquire"]'); ?>
                        </div>
                    </div>

                    <? } ?>

                        <style media="screen">
                            .wpcf7-form-control-wrap {
                                position: relative;
                                width: 238px;
                                display: block;
                                /* min-height: 40px; */
                                float: left;
                                margin-right: 9px;
                            }
                            
                            .intl-tel-input .flag-container {
                                top: 18px !important;
                            }

                        </style>
                        <script type="text/javascript">
                            jQuery(document).ready(function() {
                                var filtered = false;
                                $('.all_projects_gallery').on('click', function() {
                                    if (filtered === true) {
                                        $('.filtering').slick('slickUnfilter');
                                        filtered = false;
                                    }
                                    if (filtered === false) {
                                        $('.filtering').slick('slickFilter', '.all_projects');
                                        filtered = true;
                                        $('.projects_wrap').addClass('flipInX');

                                        <?php
          foreach($locations as $location){
          ?>
                                        $('.<?=sanitize_title($location->post_title)?>_gallery').removeClass('active');
                                        <?php
          }
          ?>

                                        $('.all_projects_gallery').addClass('active');
                                    }
                                });


                                <?php
    foreach($locations as $location){
    ?>

                                $('.<?=sanitize_title($location->post_title)?>_gallery').on('click', function() {
                                    if (filtered === true) {
                                        $('.filtering').slick('slickUnfilter');
                                        filtered = false;
                                    }
                                    if (filtered === false) {
                                        $('.filtering').slick('slickFilter', '.<?=sanitize_title($location->post_title)?>');
                                        filtered = true;
                                        $('.projects_wrap').addClass('flipInX');
                                        $('.all_projects_gallery').removeClass('active');


                                        <?php
          foreach($locations as $location2){
            if($location2->ID!=$location->ID){
          ?>
                                        $('.<?=sanitize_title($location2->post_title)?>_gallery').removeClass('active');
                                        <?php
            }
          }
          ?>


                                        $('.<?=sanitize_title($location->post_title)?>_gallery').addClass('active');
                                    }
                                });

                                <?php
    }
    ?>


                            });

                        </script>


                        <?php
    get_footer();
?>
