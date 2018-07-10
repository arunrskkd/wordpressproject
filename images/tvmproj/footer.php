<script data-cfasync="false" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.min.js"></script>
<script data-cfasync="false" src="<?php bloginfo('template_url'); ?>/js/mediaelement-and-player.min.js"></script>
<!--<script data-cfasync="false" src="<?php bloginfo('template_url'); ?>/smilehomes/js/app.js?v=1.3"></script>-->
<script data-cfasync="false" src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
<script data-cfasync="false" src="<?php bloginfo('template_url'); ?>/js/intlTelInput.js"></script>
<script data-cfasync="false">
    $(document).ready(function() {

        function bannerSlick() {
            $('.banner-image-slider').not('.slick-initialized').slick({
                dots: false,
                arrows: false,
                infinite: true,
                autoplay: true,
                pauseOnHover: false,
                speed: 2000,
                fade: true,
                cssEase: 'linear'
            });
        }
        bannerSlick();

//        $('.thrissur_plots').click(function() {
//            $('.thrissurplot-contact').addClass('open_popup');
//            $('body').addClass('pop_opened');
//        });

        $('.clients-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 5000,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                    }
                }
            ]
        });


        var player = new MediaElementPlayer('#testmonial1');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial1');
        });
        var player = new MediaElementPlayer('#testmonial2');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial2');
        });
        var player = new MediaElementPlayer('#testmonial3');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial3');
        });
        var player = new MediaElementPlayer('#testmonial4');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial4');
        });
        var player = new MediaElementPlayer('#testmonial5');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial5');
        });
        var player = new MediaElementPlayer('#testmonial6');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial6');
        });
        var player = new MediaElementPlayer('#testmonial7');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial7');
        });
        var player = new MediaElementPlayer('#testmonial8');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial8');
        });
        var player = new MediaElementPlayer('#testmonial9');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial9');
        });
        var player = new MediaElementPlayer('#testmonial10');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial10');
        });
        var player = new MediaElementPlayer('#testmonial11');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial11');
        });
        var player = new MediaElementPlayer('#testmonial12');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial12');
        });
        var player = new MediaElementPlayer('#testmonial13');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial13');
        });
        var player = new MediaElementPlayer('#testmonial14');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial14');
        });
        var player = new MediaElementPlayer('#testmonial15');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial15');
        });
        var player = new MediaElementPlayer('#testmonial6');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial16');
        });
        var player = new MediaElementPlayer('#testmonial17');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial17');
        });
        var player = new MediaElementPlayer('#testmonial18');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial18');
        });
        var player = new MediaElementPlayer('#testmonial19');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial19');
        });
        var player = new MediaElementPlayer('#testmonial20');
        $('.clients-slider').on('afterChange', function(event, slick) {
            var player = new MediaElementPlayer('#testmonial20');
        });



    });



    function kochivillaSlick() {
        $('.kochi-villa-slider').not('.slick-initialized').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1
        });
    }
    kochivillaSlick();

    function thrissurvillaSlick() {
        $('.thrissur-villa-slider').not('.slick-initialized').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1
        });
    }
    thrissurvillaSlick();

    function tvmvillaSlick() {
        $('.tvm-villa-slider').not('.slick-initialized').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1
        });
    }
    tvmvillaSlick();
    
    $('.close_pop').click(function () {
        $('.popup_wrapper').removeClass('open_popup');
        $('body').removeClass('pop_opened');
    });
    $('.open_plots').click(function(){
        $('.plot-wraper').addClass('open_popup');
        $('body').addClass('pop_opened');
    });
    $('.open_villa').click(function(){
        $('.villa-wraper').addClass('open_popup');
        $('body').addClass('pop_opened');
    });
    $('.open_apartment').click(function(){
        $('.apartment-wraper').addClass('open_popup');
        $('body').addClass('pop_opened');
    });
    
    $('.open_apartment.kochi').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#apartmentkochi').val($(this).attr('rel'));
    } 
    });
    $('.open_apartment.thrissur').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#apartmentthrissur').val($(this).attr('rel'));
    } 
    });
    $('.open_apartment.kozhikode').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#apartmentkozhikode').val($(this).attr('rel'));
    } 
    });
    $('.open_apartment.tvm').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#apartmenttvm').val($(this).attr('rel'));
    } 
    });
    
    $('.open_villa.kochi').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#villakochi').val($(this).attr('rel'));
    } 
    });
    $('.open_villa.thrissur').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#villathrissur').val($(this).attr('rel'));
    } 
    });
    $('.open_villa.tvm').click(function() {
        if ($(this).attr('rel') != undefined) {
            $('#villatvm').val($(this).attr('rel'));
    } 
    });
    
    
    $(".cphone").intlTelInput({

        nationalMode: false,
        preferredCountries: ['in', 'ae', 'us', 'gb', 'kw', 'om', 'sa', 'qa'],
        utilsScript: "<?php bloginfo('template_url'); ?>/js/utils.js"
    });

</script>
