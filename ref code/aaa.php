<!DOCTYPE html>
<html lang="en">
<head>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
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

    <!-- fonts -->
    <link href="<?php bloginfo('template_url'); ?>/fonts/fontawesome/font-awesome-css.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/fonts/dinpro/styles.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/fonts/proxima/stylesheet.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">


    <link href="<?php bloginfo('template_url'); ?>/css/victoria.css?v=2.1" rel="stylesheet">

    <link href="<?php bloginfo('template_url'); ?>/css/easy-responsive-tabs.css" rel="stylesheet">

    <?php if(basename(get_page_template())=='location_template.php'){ ?>
    <link href="<?php bloginfo('template_url'); ?>/css/slick_projects.css" rel="stylesheet">
    <?php } else { ?>
    <link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet">
    <?php } ?>

    <link href="<?php bloginfo('template_url'); ?>/css/style_responsive_projects.css" rel="stylesheet">

    <link href="<?php bloginfo('template_url'); ?>/css/projects.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mediaelementplayer.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/intlTelInput.css">

    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style_responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--
    [if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/js/html-shiv.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]
-->
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js" ></script>
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
    <div class="hide se-pre-con"></div>

    <header class="header">
        <div class="top_header">
            <div class="container">
                <div class="col-md-7 col-sm-12 col-xs-12 pull-left top_header_wrap">
                    <div class="row margntp_ten">
                        <div class="col-md-5 col-sm-12 col-xs-12 email_top">
                            <span class="text">Email Us :</span>
                            <span class="content" ><img src="<?php bloginfo('template_url'); ?>/images/email_top.png"> <a href="mailto:<?=$contact['email_address']?>"><?=$contact['email_address']?>
                            </a></span>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 call_top">
                            <span class="text">Call Us :</span>
                            <span class="content" ><img src="<?php bloginfo('template_url'); ?>/images/call_top.png"> <a href="tel:<?=$contact['phone_number']?>"><?=$contact['phone_number']?></a></span>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 social_top hidden-xs">
                            <a href="<?=$contact['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href="tel:<?=$contact['phone_number']?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
<!--
                       <a href="javascript:void(0)" target="_blank"><i class="fa  fa-telegram" aria-hidden="true"></i></a>
                       <a href="javascript:void(0)"><i class="fa fa-skype" aria-hidden="true"></i></a>
                       <a href="javascript:void(0)"><i class="fa fa-imo" aria-hidden="true"></i></a>
-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 pull-right top_header_wrap">
                <a target="_blank" href="https://www.payumoney.com/paybypayumoney/#/300717">
                <img src="<?php bloginfo('template_url'); ?>/images/paybtn.png" />
                </a>

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
