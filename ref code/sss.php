<?php
/*
Template Name: Location
*/

get_header();


$contact        = get_option( 'contact_details' );

?>

 <link href="<?php bloginfo('template_url'); ?>/palakkaddec/css/style.css?ver=2" rel="stylesheet">
<div class="landing-banner">
        <img class="banner-img" src="<?php echo get_field('head_image') ?>" alt="banner-img">
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-md-offset-2">
                        <h2><?php echo get_field('head_title') ?></h2>
                    </div><!-- /col-sm-8 -->
                    <section class="mainf">
      
            <!-- <h2>Make your choice, Select from</h2>
            <h1>four exotic locations for <br>your dream Home.</h1>
            <h3>3BHK Independent Villas from<span>Rs.14 Lakh to 45 Lakh in Palakkad</span></h3> -->
           
            <a href="javascript:void(0);" class="open_pop">enquire NOW</a>
      
    </section>
                </div><!--/row -->
            </div><!--/container -->
        </div><!--/banner-content -->
    </div><!--/landing-banner -->
</div><!--/header -->

<!--=== Content part ===-->
<div id="content">
    <div class="landing-top">
        <div class="container">

            <?php if(count(get_field('features'))>0){ ?>
            <div class="row">
                <?php foreach(get_field('features') as $feature){  ?>
                <div class="col-sm-6">
                    <div class="landing-top-box">
                        <div class="landing-top-img">
                            <img src="<?php echo  $feature['logo']?>" alt="wallet-icon">
                        </div><!--/landing-top-img -->
                        <div class="landing-top-text">
                            <h3><?php echo  $feature['title']?></h3>
                            <p><?php echo  $feature['description']?></p>
                        </div><!--/landing-top-text -->
                    </div><!--/landing-top-box -->
                </div><!--/col-sm-6 -->
                <?php }  ?>
            </div><!--/row -->
            <?php } ?>

            <div class="row">
                <div class="col-sm-12 landing-welcome">
                    <h1><?php echo get_field('welcome_title')?></h1>
                    <p><?php echo  get_field('welcome_description')?></p>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/landing-top -->

    <?
    $properties = get_children(array('post_parent' => $post->ID,'numberposts' => -1,'post_type'   => 'page','post_status' => 'publish'  ));
    

    $ongoing_properties = array();
    $soldout_properties = array();
    foreach($properties as $property){
        if(get_field('status',$property->ID) =='On Going'){
            $ongoing_properties[]=$property;
        } else {
            $soldout_properties[]=$property;
        }
    }


    if(count($ongoing_properties)>0){
    ?>
    <div class="landing-our-projects">
        <div class="display-mode">
			<a class="active" href="#" id="grid"><span class="column-icon"></span></a>
            <a href="#" id="list"><span class="list-icon"></span></a>
        </div><!--/display-mode -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Our Projects In <?=$post->post_title?></h2>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
            <div class="row">
                <div class="col-sm-12" id="projects">


                    <?
                    foreach($ongoing_properties as $property){

                    ?>
                    <div class="grid_item item col-sm-6">
                        <div class="projects_box_wrap">
                            <div class="col-md-5 landing-projects-img">
                                <p><a href="<?=get_permalink($property->ID)?>">
                                    <?  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $property->ID ), 'project_image'  );
                                        $alt_text = get_post_meta(get_post_thumbnail_id( $property->ID ), '_wp_attachment_image_alt', true);
                                    ?>

                                    <img src="<?=$image[0]?>" alt="<?=$alt_text?>">
                                </a></p>
                               <?php $loc=get_field('location',$property->ID) ?>
                                   <?php $myArray = explode(',', $loc);?>
                                   <a class="view-detals-link proj_cont1" href="<?=get_permalink($property->ID)?>">View Details</a>
                                
                            </div><!--/col-md-5 -->
                            <div class="col-md-7 landing-projects-text">
                                <div class="col-sm-6 landing-projects-left-text">
                                    <div class="projects-left-top">
                                        <? if(get_field('logo',$property->ID)!=""){?>
                                        <img class="proj_left_small_img" src="<?php echo get_field('logo',$property->ID) ?>" alt="<?=$property->post_title?>">
                                        <? } ?>
                                        <div class="projects-left-sm-text">
                                            <h3><a href="<?=get_permalink($property->ID)?>"><?=$property->post_title?></a></h3>
                                            <h4><?php echo get_field('location',$property->ID) ?></h4>
                                        </div><!--/projects-left-sm-text -->
                                    </div><!--/projects-left-top -->
                                    <p><?=get_field('model_available')?></p>
                                    <p><?=get_field('construction_date',$property->ID)?></p>
                                    <p><span class="list_points"><?=get_field('amenities',$property->ID)?></span></p>
                                </div><!--/col-sm-6 -->
                                <div class="col-sm-6 landing-projects-right-text">
                                    <h3><a href="#"><strong><?php echo get_field('price',$property->ID) ?></strong> Onwards</a></h3>
                                    <h4><?php echo get_field('area',$property->ID) ?></h4>
                                      <?php $loc=get_field('location',$property->ID) ?>
                                   <?php $myArray = explode(',', $loc);?>
                                   <p><a href="javascript:void(0);" class="view-detals-link open_pop" rel="<?=$property->post_title?>-<?php echo $myArray[0];?>">
                            Enquire Now
                                </a></p>
                                   
<!--                                    <p><a class="" href="<?=get_permalink($property->ID)?>">View Details</a></p>-->
                                </div><!--/col-sm-6 -->
                            </div><!--/col-md-7 -->
                        </div>
                    </div><!--/landing-projects-box -->

                        <? } ?>
                    </div><!--/col-sm-12 -->
                </div><!--/row -->
            </div><!--/container -->
        </div><!--/landing-our-projects -->
    <? } ?>


    <?
    if(count($soldout_properties)>0){
    ?>
    <div class="landing-our-projects">
        <div class="display-mode">
            <a class="active" href="#" id="list_soldout"><span class="list-icon"></span></a>
            <a href="#" id="grid_soldout"><span class="column-icon"></span></a>
        </div><!--/display-mode -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Sold Out Projects <?=$post->post_title?></h2>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
            <div class="row">
                <div class="col-sm-12" id="projects_soldout">


                    <?
                    foreach($soldout_properties as $property){

                    ?>
                    <div class="grid_item item col-sm-6">
                        <div class="projects_box_wrap">
                            <div class="col-md-5 landing-projects-img">
                                <p><a href="<?=get_permalink($property->ID)?>">
                                    <?  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $property->ID ), array(486,347),false );
                                        $alt_text = get_post_meta(get_post_thumbnail_id( $property->ID ), '_wp_attachment_image_alt', true);
                                    ?>

                                    <img src="<?=$image[0]?>" alt="<?=$alt_text?>">
                                </a></p>
                                <span class="sold_out"><img src="<?php bloginfo('template_url'); ?>/images/sold_out.png"></span>
                                <a href="tel:<?=$contact['phone_number']?>" class="proj_cont" tabindex="0">
                                    <div class="proj_cont_img"></div>
                                    <span>Contact Now</span>
                                </a>
                            </div><!--/col-md-5 -->
                            <div class="col-md-7 landing-projects-text">
                                <div class="col-sm-6 landing-projects-left-text">
                                    <div class="projects-left-top">
                                        <? if(get_field('logo',$property->ID)!=""){?>
                                        <img class="proj_left_small_img" src="<?php echo get_field('logo',$property->ID) ?>" alt="<?=$property->post_title?>">
                                        <? } ?>
                                        <div class="projects-left-sm-text">
                                            <h3><a href="<?=get_permalink($property->ID)?>"><?=$property->post_title?></a></h3>
                                            <h4><?php echo get_field('location',$property->ID) ?></h4>
                                        </div><!--/projects-left-sm-text -->
                                    </div><!--/projects-left-top -->
                                    <p><?=get_field('model_available',$property->ID)?></p>
                                    <p><?=get_field('construction_date',$property->ID)?></p>
                                    <p><span class="list_points"><?=get_field('amenities',$property->ID)?></span></p>
                                </div><!--/col-sm-6 -->
                                <div class="col-sm-6 landing-projects-right-text">
                                    <h3><a href="#"><strike><strong><?php echo get_field('price',$property->ID) ?></strong> Onwards</strike></a></h3>
                                    <h4><?php echo get_field('area',$property->ID) ?></h4>
                                    <p><a class="view-detals-link" href="<?=get_permalink($property->ID)?>">View Details</a> <a class="contact-link" href="tel:<?=$contact['phone_number']?>"><span class="phone-icon"></span>CONTACT NOW</a></p>
                                </div><!--/col-sm-6 -->
                            </div><!--/col-md-7 -->
                        </div>
                    </div><!--/landing-projects-box -->

                    <? } ?>





                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/landing-our-projects -->
    <? } ?>


    <div class="call-back-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Get A call back</h2>
                    <?php
                    global $post;
   $post_slug=$post->post_name;
//    echo $post_slug;
      
    ?>
                    
                    <?php   if($post_slug=="projectsvillas-in-palakkad")
	{?>             
                   <?=apply_filters( 'the_content', '[contact-form-7 id="150" title="get call back"]' );?>
                    <?php
	}?>
                     <?php   if($post_slug=="projects-coimbatore")
	{?>             
                    <?=apply_filters( 'the_content', '[contact-form-7 id="1313" title="Coimbatore gall back"]' );?>
                    <?php
	}?>
     <?php   if($post_slug=="projectstiruppur")
	{?>             
                    <?=apply_filters( 'the_content', '[contact-form-7 id="1314" title="Tiruppur call back"]' );?>
                    <?php
	}?>
     <?php   if($post_slug=="projects-villas-in-thrissur")
     {?>             
        <?=apply_filters( 'the_content', '[contact-form-7 id="6563" title="thrissur_callback"]' );?>
        <?php
    }?>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/call-back-area -->

    <?
    // $properties = query_posts(array(
    //     'post_type' => 'page',
    //     'meta_key' => '_wp_page_template',
    //     'meta_value' => 'projects_template.php',
    //     'meta_compare' => '=',
    //     'posts_per_page' => 99999,
    // ));

    $properties = get_children(array('post_parent' => $post->ID,'numberposts' => -1,'post_type'   => 'page','post_status' => 'publish'  ));

    ?>



    <?
    $stat=0;
    foreach($properties as $property){

        $parent =  get_page($property->post_parent);

        //echo $property->post_status."---".get_field('status',$property->ID).">>>";
        if($property->post_status=='publish' && get_field('status',$property->ID) =='On Going'){
            $stat=1;
            break;
        }
    }
    ?>

    <? if($stat==1){ ?>
    <div class="like-projects-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Projects You May Also Like</h2>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
            <div class="row">
                <div class="col-sm-12 like-projects-box-area">
                    <div class="slider slider-one">

                        <?
                        foreach($properties as $property){

                            $parent =  get_page($property->post_parent);

                            if($parent->post_status=='publish' && get_field('status',$property->ID) =='On Going'){
                                
                        ?>
                        <div>
                            <div class="like-projects-box">
                                <p><a href="<?=get_permalink($property->ID)?>"><?php echo get_the_post_thumbnail($property->ID,array(220,149)); ?></a></p>
                                <div class="like-projects-text">
                                    <h3><?=$property->post_title?></h3>
                                    <h4><strong><?php echo get_field('price',$property->ID) ?></strong> Onwards</h4>
                                    <p><?php echo get_field('area',$property->ID) ?></p>
                                     <?php $loc=get_field('location',$property->ID) ?>
                                   <?php $myArray = explode(',', $loc);?>
                                    <p><a href="javascript:void(0);" class="contact-link open_pop" rel="<?=$property->post_title?>-<?php echo $myArray[0];?>" >Enquire Now </a><a class="view-detals-link" href="<?=get_permalink($property->ID)?>">View Details</a></p>
                                </div><!--/like-projects-text -->
                            </div><!--/like-projects-box -->
                        </div>
                        <?
                            }
                        }
                        ?>

                    </div><!-- /slider -->
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/like-projects-area -->
    
    
    <? } ?>
</div><!--/content -->

<div class="clearfix"></div>
    <div class="map_locations">
        <div id="map" class="map_locations_load">
            
        </div>
    </div>

<style media="screen">
    .wpcf7-form-control-wrap {
        position: relative;
        width: 284px;
        display: block;
        /* min-height: 40px; */
        float: left;
        margin-right: 9px;
    }

    .wpcf7-form-control-wrap span.wpcf7-not-valid-tip {
        color:#ffffff;
    }

    div.wpcf7-validation-errors {
        border: 2px solid #f7e700;
       
        width: 93%;
    }

    div.wpcf7-mail-sent-ng {
        border: 2px solid #f00;
       
        width: 93%;
    }

    div.wpcf7-mail-sent-ok {
        border: 2px solid #398f14;
       
        width: 93%;
    }
    .projects_box_wrap a.view-detals-link.proj_cont1 {
    position: absolute;
    top: 15px;
    right: 26px;
    width: 80px;
    height: 25px;
    background: #d52530;
    border-radius: 3px;
    text-align: center;
    font-family: 'DINPro-Regular';
    font-size: 12px;
    color: #FFF;
    display: block;
}
</style>
<div class="popup_wrapper">
        <div class="popup">
            <div class="close_pop"><img src="<?php bloginfo('template_url'); ?>/palakkaddec/images/close_pop.png"></div>
            <div class="pop_logo"><img src="<?php bloginfo('template_url'); ?>/palakkaddec/images/logo.png"></div>
           
             <?php   if($post_slug=="projectsvillas-in-palakkad")
	{?>             
                   <?php echo do_shortcode('[contact-form-7 id="1443" title="Enquire"]'); ?>
                    <?php
	}?>
                     <?php   if($post_slug=="projects-coimbatore")
	{?>             
                  <?php echo do_shortcode('[contact-form-7 id="6560" title="Enquire_coimbatore"]'); ?>
                    <?php
	}?>
     <?php   if($post_slug=="projectstiruppur")
	{?>             
                    <?php echo do_shortcode('[contact-form-7 id="6561" title="Enquire_tiruppur"]'); ?>
                    <?php
	}?>
     <?php   if($post_slug=="projects-villas-in-thrissur")
	{?>             
                    <?php echo do_shortcode('[contact-form-7 id="6562" title="Enquire_thrissur"]'); ?>
                    <?php
	}?>
        </div>
    </div>
<?php
    get_footer();
?>
