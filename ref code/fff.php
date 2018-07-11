<?php
/*
Template Name: Projects
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="google-site-verification" content="zFfWBhaa-YOWizX8edzs-g-iE9NnDQH5HtKtMw_W6Ao" />
    <title><?php wp_title(''); ?></title>
 <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href="<?php bloginfo('template_url'); ?>/fonts/fontawesome/font-awesome-css.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,300italic,500,700' rel='stylesheet' type='text/css'>
<!--    <link href="<?php bloginfo('template_url'); ?>/fonts/fontawesome/font-awesome.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="<?php bloginfo('template_url'); ?>/fonts/dinpro/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
     <link href="<?php bloginfo('template_url'); ?>/css/victoria.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/css/projects.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css1/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css1/easy-responsive-tabs.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css1/jquery.sliderTabs.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css1/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css1/style_responsive.css">
    <link href="<?php bloginfo('template_url'); ?>/palakkaddec/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JS and jQuery -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/back-to-top.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/slick.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js1/jquery.sliderTabs.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/scripts.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js1/jquery.fancybox.js"></script>
	
    <script type="text/javascript">
        var templateUrl = '<?php bloginfo('template_url'); ?>';
        var siteUrl     = '<?php bloginfo('url'); ?>';
    </script>
   
<?php wp_head();?>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TK7VWP');</script>
<!-- End Google Tag Manager -->

</head>
<?

$contact        = get_option( 'contact_details' );
$locations = get_pages(array('parent' => 13,'post_type' => 'page','post_status' => 'publish,pending','number' =>9999999,'sort_column' => 'menu_order'));
//print_r($locations);
?>
<body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK7VWP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<span  >
    <meta content="Victoria Realtors">
<div class="page-container">
    <!--=== Header ===-->
    <div id="header">
        <header class="header">
            <div class="top_header">
            <div class="container">
                <div class="col-md-7 col-sm-12 col-xs-12 pull-right top_header_wrap">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 email_top">
                            <span class="text">Email Us :</span>
                            <span class="content"><img src="<?php bloginfo('template_url'); ?>/images/email_top.png"> <a href="mailto:<?=$contact['email_address']?>"><?=$contact['email_address']?></a></span>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 call_top">
                            <span class="text">Call Us :</span>
                            <span class="content"><img src="<?php bloginfo('template_url'); ?>/images/call_top.png"> <a href="tel:<?=$contact['phone_number']?>"><?=$contact['phone_number']?></a></span>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 social_top hidden-xs">
                            <a href="<?=$contact['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="tel:<?=$contact['phone_number']?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?
        $url_result = explode('/',(wp_parse_url( get_permalink())['path']));
        $current_menu = $url_result[1];


        ?>
            <div class="main_header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-xs-12 logo">
                        <h2><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-responsive"></a></h2>
                    </div>
                    <div class="col-sm-7 col-xs-12 resp_menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed nav-icon" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php bloginfo('url'); ?>/" class="<?=($current_menu=='' || $current_menu=='home')?'active':''?>">Home</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/about/" class="<?=($current_menu=='about')?'active':''?>">about</a></li>
                                <li><a href="#" class="<?=($current_menu=='projects')?'active':''?>">projects</a>
                                    <ul class="sub_menu">
                                        <?php
                                        foreach($locations as $location){
                                        ?>
                                            <li><a href="<?=get_permalink($location->ID)?>" ><?=$location->post_title?></a></li>
                                        <? } ?>
                                       </ul>
                                </li>
                                <li><a href="<?php bloginfo('url'); ?>/careers/" class="<?=($current_menu=='careers')?'active':''?>">careers</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/blog/" class="<?=($current_menu=='blog' )?'active':''?>">blog</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/contact/" class="<?=($current_menu=='contact')?'active':''?>">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
<div class="landing-banner">

    <? if(get_field('main_image')!=""){
    ?>
    <img class="banner-img" src="<?php echo get_field('main_image')['url']; ?>" alt="<?php echo get_field('main_image')['alt']; ?>">
    <? } ?>
    <div class="landing-details-banner">
        <div class="container">
            <div class="row">
            
                <div class="col-sm-6 left-side">
                    <? if(get_field('logo')){?>
                	<img src="<?php echo get_field('logo'); ?>" alt="<?=$post->post_title?>">
                    <? } ?>
                    <div class="left-side-text">
                        <h3><?=$post->post_title?> <?=get_field('status') !='On Going'?'<span style="color:#d52530">(Sold Out)</span>':'' ?></h3>
                        <p><?php echo get_field('location'); ?></p><br>
                         <section class="mainf1" >
      <a href="javascript:void(0);" class="open_pop" style="margin-left:22px !important">enquire NOW</a>
   </section>
                    </div><!-- /left-side-text -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6 right-side">
                    <h2>
                        <? if(get_field('status') =='On Going'){?>
                        <strong><?php echo get_field('price'); ?></strong> Onwards
                        <? } else {?>
                            <strike style="color:#d52530"><strong><?php echo get_field('price'); ?></strong> Onwards</strike>
                        <? } ?>
                    </h2>
                    <p><?php echo get_field('area'); ?></p>
                    
                </div><!-- /col-sm-6 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/banner-content -->
</div>
        <!--/landing-banner -->
    </div><!--/header -->
    
    <!--=== Content part ===-->
 <div id="content">
    <div class="call-back-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Get A call back</h2>
                    <?php global $post;
$parent_title = get_the_title( $post->post_parent );?>
    <?php   if($parent_title=="Palakkad")
	{?>             
                    <?=apply_filters( 'the_content', '[contact-form-7 id="150" title="get call back"]' );?>
                    <?php
	}?>
     <?php   if($parent_title=="Coimbatore")
	{?>             
                    <?=apply_filters( 'the_content', '[contact-form-7 id="1313" title="Coimbatore gall back"]' );?>
                    <?php
	}?>
     <?php   if($parent_title=="Tiruppur")
	{?>             
                    <?=apply_filters( 'the_content', '[contact-form-7 id="1314" title="Tiruppur call back"]' );?>
                    <?php
	}?>
     <?php   if($parent_title=="Thrissur")
	{?>             
                    <?php echo do_shortcode('[contact-form-7 id="6563" title="thrissur_callback"]'); ?>
                    <?php
	}?>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/call-back-area -->

    <div class="landing-details-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                	<ul>
                    	<li><a href="#overview-link">OVERVIEW</a></li>
                    	<li><a href="#configurations-link">CONFIGURATIONS &amp; AMENITIES</a></li>
                    	<li><a href="#gallery-link">GALLERY</a></li>
                    	<li><a href="#location-reviews-link">LOCATION &amp; REVIEWS</a></li>
                    	<li><a href="#bank-offers-link">BANK OFFERS</a></li>
                    	<li><a href="#similar-projects-link">SIMILAR PROJECTS</a></li>
                    </ul>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/landing-details-menu -->

    <? if( trim($post->post_content)!="" ){?>
    <div id="overview-link" class="landing-details-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1><?=$post->project_title?></h1>
                    <p><?=$post->post_content?></p>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/landing-top -->
    <? } ?>

        <div id="configurations-link" class="house-configurations">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Configurations &amp; Amenities</h2>
                        <div class="configurations-box tabs_configurations_box">
                            <div class="detail_tabs">
                                <div class="detailed_wrapper">
                                    <div class="row configurations-top">
                                        <div class="col-sm-6">
                                         <?php if(get_field('configuration_logo')){?>
                                           <img src="<?php echo get_field('configuration_logo');?>" alt="sarva-grande-logo" width="50px;" height="50px;">
                                           <?php
										 }?>
                                            <h3><?=$post->post_title?></h3>
                                        </div><!--/col-sm-6 -->
                                        <div class="col-sm-6 configurations-top-right">
                                           <p> <a href="javascript:void(0);" class="open_pop">Enquire NOW</a></p>
                                        </div><!--/col-sm-6 -->
                                    </div><!--/row -->
                                    <p><?php echo get_field('configurations_description'); ?></p>
                                    <div class="mySliderTabs">
                                    <!-- Unordered list representing the tabs -->
                                        <ul>
                                        <?php 
										$count=1; 
			if(get_field('confisqft')):

				 while(has_sub_field('confisqft')):?>
                                            <li><a href="#sqft<?php echo $count;?>"><?php the_sub_field('sqft');?> SQFT</a></li>
                                            
                                             <?php
$count++;
						endwhile; 

						endif;

						?>
                                        </ul>
                                         <?php 
										$count1=1; 
			if(get_field('confisqft')):

				 while(has_sub_field('confisqft')):?>
                                        <div id="sqft<?php echo $count1;?>">
                                            <div class="row configurations-details">
                                                <div class="col-sm-12">
                                                    <div class="sqft_details">
                                                        <span><?php the_sub_field('sqft');?> Sqft</span>
                                                        <span><?php the_sub_field('price');?></span>
                                                        <span><?php the_sub_field('bhk');?> BHK</span>
                                                         <span><?php the_sub_field('status');?></span>
                                                    </div>
                                                    <div class="enquire_pop">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#enq_pop" onClick="show1('<?php the_sub_field('sqft');?>','<?php the_sub_field('price');?>','<?php the_sub_field('bhk');?>','<?=$post->post_title?>')">Enquire Now</a>
                                                    </div>
                                                    <h4><?php the_sub_field('floor_title');?></h4>
                                                    <div class="floor-plan">
                                                        <div class="col-sm-4">
                                                            <h6>Ground Floor</h6>
                                                            <a class="fancybox" href="<?php the_sub_field('ground');?>" data-fancybox-group="gallery1">
                                                                <img src="<?php the_sub_field('ground');?>">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h6>First Floor</h6>
                                                            <a class="fancybox" href="<?php the_sub_field('first_floor');?>" data-fancybox-group="gallery1">
                                                                <img src="<?php the_sub_field('first_floor');?>">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h6>Elevation</h6>
                                                            <a class="fancybox" href="<?php the_sub_field('elevation');?>" data-fancybox-group="gallery1">
                                                                <img src="<?php the_sub_field('elevation');?>">
                                                            </a>
                                                        </div>
                                                    </div>
													<br><br>
													
													<!------------------Multiple Plans for a Project Loop Starts---------------->
													
													
													<?
													$i=2;
													foreach(get_field('title_and_images') as $resource){
														//print_r($resource);
													?>
													<h4><?php echo $resource['multi_title'];?></h4>
                                                    <div class="floor-plan">
                                                        <div class="col-sm-4">
                                                            <h6>Ground Floor</h6>
                                                            <a class="fancybox" href="<?php echo $resource['multi_ground_floor'];?>" data-fancybox-group="gallery<?=$i?>">
                                                                <img src="<?php echo $resource['multi_ground_floor'];?>">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h6>First Floor</h6>
                                                            <a class="fancybox" href="<?php echo $resource['multi_first_floor'];?>" data-fancybox-group="gallery<?=$i?>">
                                                                <img src="<?php echo $resource['multi_first_floor'];?>">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h6>Elevation</h6>
                                                            <a class="fancybox" href="<?php echo $resource['multi_elevation'];?>" data-fancybox-group="gallery<?=$i?>">
                                                                <img src="<?php echo $resource['multi_elevation'];?>">
                                                            </a>
                                                        </div>
                                                    </div>
													<?
														$i++;
														}
													?>
													<!------------------Multiple Plans for a Project Loop Ends---------------->
                                                </div><!--/col-sm-12 -->
                                            </div><!--/row -->
                                        </div>
                                        
                                        
                                     <?php
$count1++;
						endwhile; 

						endif;

						?>     
                                        
                                    </div>
                                     <? $list_amenities = get_field('list_amenities'); ?>
                            <? if( $list_amenities && isset($list_amenities) && count($list_amenities)>0 ){?>
                                    <div class="col-sm-12 configurations-details">
                                        <h4>Amenities</h4>
                                       
                                <ul>
                                    <? if(in_array('Wireless Intercom',$list_amenities)) { ?>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/mobile-icon.png" alt="mobile-icon"><span>Wireless Intercom</span></li>
                                    <? } ?>
                                    <? if(in_array('Smoke Free',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/smoke-icon.png" alt="smoke-icon"><span>Smoke Free</span></li>
                                    <? } ?>
                                    <? if(in_array('Fire Extinguisher',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/fire-extinguisher-icon.png" alt="fire-extinguisher-icon"><span>Fire Extinguisher</span></li>
                                    <? } ?>
                                    <? if(in_array('Pool',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/pool-icon.png" alt="pool-icon"><span>Pool</span></li>
                                    <? } ?>
                                    <? if(in_array('Pets House',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/pets-icon.png" alt="pets-icon"><span>Pets House</span></li>
                                    <? } ?>
                                    <? if(in_array('Washer',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/washer-icon.png" alt="washer-icon"><span>Washer</span></li>
                                    <? } ?>
                                    <? if(in_array('Air Conditioning',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/crystal-icon.png" alt="crystal-icon"><span>Air Conditioning</span></li>
                                    <? } ?>
                                    <? if(in_array('Heating',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/heating-icon.png" alt="heating-icon"><span>Heating</span></li>
                                    <? } ?>
                                    <? if(in_array('Vasthu Compliant',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Vasthu_Compliant.png" alt="vasthu-icon"><span>Vasthu Compliant</span></li>
                                    <? } ?>
                                    <? if(in_array('24 Hours Security',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/24_Hours_Security.png" alt="24HoursSecurity"><span>24 Hours Security</span></li>
                                    <? } ?>
                                    <? if(in_array('Gated Community',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Gated_Community.png" alt="gated-community"><span>Gated Community</span></li>
                                    <? } ?>
                                    <? if(in_array('Spacious Rooms',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Spacious_Rooms.png" alt="Spacious-Rooms"><span>Spacious Rooms</span></li>
                                    <? } ?>
                                    <? if(in_array('Electricity',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Electricity.png" alt="Electricity-icon"><span>Electricity</span></li>
                                    <? } ?>
                                    <? if(in_array('Fresh Water',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Fresh_Water.png" alt="Fresh-Water"><span>Fresh Water</span></li>
                                    <? } ?>
                                    <? if(in_array('Parking Area',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Parking_Area.png" alt="Parking-Area"><span>Parking Area</span></li>
                                    <? } ?>
                                    <? if(in_array('Compound Wall',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Compound_Wall.png" alt="Compound-Wall"><span>Compound Wall</span></li>
                                    <? } ?>
                                    <? if(in_array('Camera',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Camera.png" alt="Camera-icon"><span>Camera</span></li>
                                    <? } ?>
                                    <? if(in_array('Individual Compound wall with Gate',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Individual_Compound_wall_with_Gate.png" alt="Individual-Compound-wall-with-Gate"><span>Individual Compound wall with Gate</span></li>
                                    <? } ?>
                                    <? if(in_array('EB Connection',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/EB_Connection.png" alt="EB-Connection"><span>EB Connection</span></li>
                                    <? } ?>
                                    <? if(in_array('2 Car Parking',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/2_Car_Parking.png" alt="2-Car-Parking"><span>2 Car Parking</span></li>
                                    <? } ?>
                                    <? if(in_array('Fresh and Plenty Water',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/Fresh_and_Plenty_Water.png" alt="Fresh-and-Plenty-Water"><span>Fresh and Plenty Water</span></li>
                                    <? } ?>
                                     <? if(in_array('Common underground sump tank of 25000 Ltr capacity for  water storage',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/tank.png" alt="Common underground sump tank of 25000 Ltr capacity for  water storage"><span>Common underground sump tank of 25000 Ltr capacity for  water storage</span></li>
                                    <? } ?>

                                    <? if(in_array('Grand Entrance',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Grand_Entrance.png" alt="Grand Entrance"><span>Grand Entrance</span></li>
                                    <? } ?>

                                    <? if(in_array('Health Club',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Health_Club.png" alt="Health Club"><span>Health Club</span></li>
                                    <? } ?>

                                    <? if(in_array('2-S class Benz parking',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/2-S-class_Benz_parking.png" alt="2-S class Benz parking"><span>2-S class Benz parking</span></li>
                                    <? } ?>

                                    <? if(in_array('Road with paver Block',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Road_with_paver_Block.png" alt="Road with paver Block"><span>Road with paver Block</span></li>
                                    <? } ?>

                                    <? if(in_array('Street Lights',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Street_Lights.png" alt="Street Lights"><span>Street Lights</span></li>
                                    <? } ?>

                                    <? if(in_array('Landscaped Garden',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Landscaped_Garden.png" alt="Landscaped Garden"><span>Landscaped Garden</span></li>
                                    <? } ?>

                                    <? if(in_array('CCTV Surveillance Camera',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Surveillance_Cameras.png" alt="CCTV Surveillance Camera"><span>CCTV Surveillance Camera</span></li>
                                    <? } ?>


                                    <? if(in_array('Laundry',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Laundry.png" alt="CCTV Surveillance Camera"><span>Laundry</span></li>
                                    <? } ?>

                                    <? if(in_array('Convenience Store',$list_amenities)) { ?>
                                    <li><img src="<?php bloginfo('template_url'); ?>/images/aminities/Convenience_Store.png" alt="CCTV Surveillance Camera"><span>Convenience Store</span></li>
                                    <? } ?>


                                    

                                    

                                    


                                   
                                    </div><!--/col-sm-12 --> <? } ?>
                                </div>
                            </div>
                        </div><!--/configurations-box -->
                    </div><!--/col-sm-12 -->
                </div><!--/row -->
            </div><!--/container -->
        </div><!--/house-configurations -->

        <?
    if(count(get_field('photos'))>0 || get_field('video')!=""){
        $photos = get_field('photos');
        $video  = get_field('video');


    ?>
    <div id="gallery-link" class="project-gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Project Gallery</h2>
                    <div id="horizontalTab">
                        <div class="tab-nav">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="resp-tabs-list">
                                            <? if($photos && count($photos)>0) { ?>
                                            <li>Photos<span><?=count($photos)?></span></li>
                                            <? } ?>
                                            <? if($video!=""){?>
                                            <li>Videos<span>1</span></li>
                                            <? } ?>
                                        </ul>
                                    </div><!--/col-sm-12 -->
                                </div><!--/row -->
                            </div><!--/container -->
                        </div><!--/tab-nav -->
                        <div class="resp-tabs-container">
                            <div>


                                <?
                                $i = 0;
                                foreach($photos as $photo){
                                ?>
                                    <?=($i==0)?'<div class="row">':''?>
                                    <?=(($i%3)==0)?'</div><div class="row">':''?>
                                        <div class="col-sm-4">
                                            <p>

                                                <a class="fancybox" href="<?=$photo['main']['url']?>" data-fancybox-group="gallery" title="<?=$photo['main']['alt']?>">
                                                    <img src="<?=$photo['thumb']['url']?>" alt="<?=$photo['thumb']['alt']?>">
                                                </a>
                                            </p>
                                        </div><!--/col-sm-4 -->

                                <?
                                    $i++;
                                }
                                ?>
                                </div><!--/row -->

                            </div><!--/single-tab -->
                            <? if(get_field('video')!=""){ ?>
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <iframe src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allowfullscreen></iframe>
                                    </div><!--/col-sm-12 -->

                                </div><!--/row -->
                            </div><!--/single-tab -->
                            <? } ?>
                        </div><!--/resp-tabs-container -->
                    </div><!--/horizontalTab -->

                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/project-gallery -->
    <? } ?>

    
    <section class="faq about_us">
       <section class="faq_wrap project-gallery">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 configurations-details ">
                  <h2>Specifications</h2>
                <div class="panel-group" id="accordion">
                    <?  
                    $i=1;
                   
                 
                    foreach(get_field('specifications') as $specification){
                        
                        //
                        //print_r($specification);
                    ?>
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" aria-expanded="false" class="collapsed">
                                    <span class="specification-name"><?=$specification['name']?></span>
                                </a>
                            </h4>
                             
                        </div>
                        <div id="collapse<?=$i?>" class="panel-collapse collapse " aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                            <?  
                    $j=1;
                    foreach($specification['features'] as $feature){
                    ?>
                           <div>
                            <span class="subhead"><?= $feature['heading'] ?> :- </span> <?=$feature['description']?>
                           </div>
                            <?  $j++; } ?>
                            </div>
                        </div>
                        
                    </div>
                    <?  $i++; } ?>
                </div>
                </div>
            </div>
        </div>
        </section>
    </section>
    

    <? if(get_field('google_review')!="") {?>
    <div id="location-reviews-link" class="location-reviews">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Location &amp; Reviews</h2>
                    <div class="row">
                        <div class="col-sm-7 map-area">
	                        <?php echo get_field('map') ?>
                        </div><!--/col-sm-6 -->
                        <div class="col-sm-5 reviews-area">
                        	<h3>Google Reviews</h3>
                        	<img src="<?php echo get_field('google_review') ?>" alt="review-img">
                        </div><!--/col-sm-5 -->
                    </div><!--/row -->
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/bank-offers -->
    <? } ?>

    <div id="bank-offers-link" class="bank-offers">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
<!--
                    <h2>Bank Loan Assistance</h2>
                    <p><img src="<?php bloginfo('template_url'); ?>/images/bank-loan-icon.png" alt="bank-loan-icon"></p>
-->
                    <h3><strong>Project is approved</strong><br>
                    and supported by all major banks</h3>
					<div class="accreditations_wrap" style="padding:25px 0 0 0;">
					   <div class="col-md-12">
						   <h3></h3>
					   </div>
						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/01.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/02.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/03.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/04.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/05.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/06.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/07.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/08.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/09.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/10.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/11.jpg">
							</figure>
						</div>

						<div class="col-md-3">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/banklogo/12.jpg">
							</figure>
						</div>



					</div>
                </div><!--/col-sm-12 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/bank-offers -->
    <?
    $properties = get_children(array('post_parent' => $post->post_parent,'numberposts' => -1,'post_type'   => 'page','post_status' => 'published'  ));



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

    <? if(count($properties)>0 && $stat==1) {?>
    <div id="similar-projects-link" class="like-projects-area">
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

                            if($parent->post_status=='publish' && get_field('status',$property->ID) =='On Going' && $property->ID!=$post->ID){
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
<div class="popup_wrapper">
        <div class="popup">
            <div class="close_pop"><img src="<?php bloginfo('template_url'); ?>/palakkaddec/images/close_pop.png"></div>
            <div class="pop_logo"><img src="<?php bloginfo('template_url'); ?>/palakkaddec/images/logo.png"></div>
            <?php global $post;
$parent_title = get_the_title( $post->post_parent );
// echo $parent_title; 
?>
    <?php  if($parent_title=="Palakkad")
	{?>             
                       <?php echo do_shortcode('[contact-form-7 id="1443" title="Enquire"]'); ?>
                    <?php
	}?>
     <?php   if($parent_title=="Coimbatore")
	{?>             
                   <?php echo do_shortcode('[contact-form-7 id="6560" title="Enquire_coimbatore"]'); ?>
                    <?php
	}?>
     <?php   if($parent_title=="Tiruppur")
	{?>             
                  <?php echo do_shortcode('[contact-form-7 id="6561" title="Enquire_tiruppur"]'); ?>
                    <?php
	}?>
     <?php   if($parent_title=="Thrissur")
	{?>             
                    <?php echo do_shortcode('[contact-form-7 id="6562" title="Enquire_thrissur"]'); ?>
                    <?php
    }?>
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

</style>

    <!--=== Footer ===-->
    <?
$contact        = get_option( 'contact_details' );
?>
    <footer class="footer" >
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 logo_footer">
                        <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" class="img-responsive">
                    </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="<?php bloginfo('url'); ?>/about/">About Us</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/testimonials/">Testimonials</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <h3>Palakkad Projects</h3>
                                <ul>
                                    <li><a href="<?php bloginfo('url'); ?>/projects/villas-in-palakkad/villas-for-sale/">Pournami Villas</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/independent-villas-in-palakkad/">Chaithanya Villas</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/projects/villas-in-palakkad/gated-community-villas/">The Nellies Villas</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/projects/villas-in-palakkad/flats-in-palakkad/">Saidhaan Aristos</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/projects/villas-in-palakkad/house-for-sale/">Thrikkarthika Garden Villas</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/projects/villas-in-palakkad/house-for-sale-at-palakkad/">Sobhanam Villas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 hidden-xs">
                        <h3>Get in touch</h3>
                        <div class="email_foot">
                            <span class="foot_imgs"><img src="<?php bloginfo('template_url'); ?>/images/email_foot.png"></span>
                            <span class="foot_texts">
                            <a href="mailto:<?=$contact['email_address']?>"><?=$contact['email_address']?></a>
                        </span>
                        </div>
                        <div class="call_foot">
                            <span class="foot_imgs"><img src="<?php bloginfo('template_url'); ?>/images/call_foot.png"></span>
                            <span class="foot_texts">
                            <a href="tel:<?=$contact['phone_number']?>"><?=$contact['phone_number']?></a>
                        </span>
                        </div>
                        <div class="address_foot">
                            <span class="foot_imgs"><img src="<?php bloginfo('template_url'); ?>/images/address_foot.png"></span>
                            <span class="foot_texts">
                            <?=$contact['location_name']?>
                            <?=$contact['street_number_name']?>
                            <?=$contact['suburb']?> - <?=$contact['postcode']?>
                        </span>
                        </div>

                        <div class="address_foot">

                            <span class="foot_imgs"><img src="<?php bloginfo('template_url'); ?>/images/address_foot.png"></span>
                            <span class="foot_texts" >
                           <span > 101, 1st floor Deepakam Centre Behind B-Mart<br>
Near Stadium bypass road</span><br>
Palakkad - 678001
                        </span>

                        </div>

                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 social_foot_wrap">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="<?php bloginfo('url'); ?>/faq">NRI FAQ</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/emi-calculator/">EMI Calculator</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/unit-converter/">Unit Converter </a></li>
                            <li><a href="<?php bloginfo('url'); ?>/loan-eligibility/">Bank Loan Eligibility Checker</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/banking-partners/">Banking Partners</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="copyrights">
                        Copyright &copy; 2017 . <a href="#">Victoria Realtors</a>
                    </div>
                    <div class="developed_by">
                        Designed and Marketed by <a href="http://www.webduratech.com/" target="_blank">Webdura Technologies</a>
                    </div>
                </div>
            </div>
        </div>
        
        
 
        </footer> 
        
    



</div><!--/page-container -->
</div>
  
    
<!-- Bulk Order -->
<div id="enq_pop" class="modal fade" role="dialog">
    <div class="modal-dialog bulk_order_wrap">
        <button type="button" class="client_pop_close" data-dismiss="modal"><img src="<?php bloginfo('template_url'); ?>/images1/pop_close.png"></button>
        <!-- Bulk Order Content-->
        <div class="bulk_order_container">
        <form name="enquiry" id="enquiry" method="post" enctype="multipart/form-data" action="http://www.victoriarealtors.biz/enquire.php"/>
            <h2>Enquire Now</h2>
            <div class="container">
                <div class="bulk_order_form">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Name <sup>*</sup></label>
                            <input type="text" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Email ID <sup>*</sup></label>
                            <input type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Phone</label>
                            <input type="text" name="phone">
                           
                                
                     </div>
                    </div>
                      <div class="row">
                        <div class="col-sm-12">
                            <label>SQFT </label>
                           <input type="text" name="sqft" id="sqft" value="">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12">
                            <label>Price </label>
                           <input type="text" name="price" id="price" value="">
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-sm-12">
                            <label>BHK</label>
                            <input type="text" name="bhk" id="bhk" value="">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Project</label>
                            <input type="text" name="title" id="title" value="">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                          
                            <input type="submit" name="submit" value="Enquire Now" class="submit-btn career_submit">
                        </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
 </span>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/easyResponsiveTabs.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                closed: 'accordion',
                activate: function(event) {
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
    
                    $name.text($tab.text());
    
                    $info.show();
                }
            });
        });
    </script>
<script>
jQuery(document).on( 'popup-submit-done', function(event, popup, data){
	// Option A: Do not ever close Popup 18 automatically!
	if ( data.popup_id == 18 ) {
		data.close_popup = false;
	}

	// Option B: Do not close Popup if there is an Ajax JSON response that contains "mailSent: false"
	if ( undefined !== data.last_ajax.responseJSON ) {
		response = data.last_ajax.responseJSON;
		if ( false === response.mailSent ) {
			data.close_popup = false;
		}
	}
});
</script>
<script>
function show1(sqft,price,bhk,title)
{
	var sqft=sqft;
	//alert(sqft);
	var price=price;
	document.getElementById('sqft').value = sqft;
	document.getElementById('price').value = price;
	document.getElementById('bhk').value = bhk;
	document.getElementById('title').value = title;
	//alert(sqft);
    }</script>
<script type="text/javascript"  language="javascript"> 
$().ready(function() {
	// validate the comment form when it is submitted
	$("#enquiry").validate();
});
</script>
<?php wp_footer();?>         
</body>
</html>