<!-- Common Head Created By Martin -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title(''); ?>
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mediaelementplayer.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css?v=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/intlTelInput.css">

    <style>
        .slick-slider * {
            min-height: 0;
            min-width: 0;
        }

    </style>

    <?php
	wp_head();?>
    <!-- Google Tag Manager -->
    <script data-cfasync="false">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M34HG7');

    </script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M34HG7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <a class="logo" class="pull-left">
        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="confident group" />
        </a>
    </header>
