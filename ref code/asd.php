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
                            <span class="foot_texts">
                           <span> 101, 1st floor Deepakam Centre Behind B-Mart<br>
Near Stadium bypass road</span><br> Palakkad - 678001
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


    <div id="disclaimer_popup">
        <div class="pop_disclaimer">
            <div class="pop_disclaimer_desc">
                <h2>Disclaimer</h2>
                <p>While enough care is taken by the firm to ensure that information on the website is up to date, accurate and correct, viewers of this website confirms that the information including brochures and marketing materials are solely for informational purposes and the viewer should not rely on this information for making any booking/purchase in any of the projects of the firm. Nothing on this website constitutes advertising, marketing, selling or an offer for sale or invitation to purchase a unit in any projects by the firm. Viewers are requested to make their independent enquiry before relying upon the same. Any action you take upon the information on the website is strictly at your own risk, and the firm or its associated entities/companies will not be liable for any consequences of any action taken by the viewers relying on such material/information by viewing the website or its content. </p>
                <p>The firm reserves the right to add, alter or delete any material from the website at any time and may, at any time, revise these terms, change design & specifications, without prior notice or as may be required under applicable laws including RERA, and all other approvals & permissions. Computer generated images, rendered images, floor plans, etc. represent artistic impressions only. Plans, specifications mentioned in the buyer-seller agreements are final and supersede the contents/information herein. Any viewer of any information or material from this website may avail the same entirely at their own risk as to costs and consequences thereof.</p>

            </div>
            <div class="clearfix"></div>
            <div class="i_agree">
                <div id="fvpp-close">Agree</div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.firstVisitPopup.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fadethis.js" async></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js" async></script>
    <script src="<?php bloginfo('template_url'); ?>/js/mediaelement-and-player.min.js" ></script>
<!--    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>-->
    <!--    <script src="<?php bloginfo('template_url'); ?>/js/unit-convertor.js"></script>-->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/back-to-top.js"></script>


    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>

    <?php if(basename(get_page_template())=='location_template.php'){ ?>
    <script src="<?php bloginfo('template_url'); ?>/js/slick_projects.js"></script>
    <?php } else { ?>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
    <?php } ?>


    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/easyResponsiveTabs.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {

                function clientsSlick(){
    $('.video-slider').not('.slick-initialized').slick({
		dots: false,
		arrows: true,
		infinite: true,
		autoplay: false,
		slidesToShow: 3,
  		slidesToScroll: 1,
  		autoplaySpeed: 5000,
		responsive: [
			{
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

     $('.whatsapp_message').click(function(){
            var whatsapp_name = $('#whatsapp_name').val();
            $('#whatsapp_error').addClass('hide')
            if(whatsapp_name!=""){
                $("#exitpopup-modal").hide();
                window.open('https://api.whatsapp.com/send?phone=919514778788&text=Hi%0AI%27m%20'+whatsapp_name+'%2C%20I%20would%20like%20to%20know%20more%20about%20your%20projects%0D%0A', '_blank');
            //   window.location ='https://api.whatsapp.com/send?phone=919514778788&text=Hi%0AI%27m%20'+whatsapp_name+'%2C%20I%20would%20like%20to%20know%20more%20about%20your%20projects%0D%0A';
            } else {
              $('#whatsapp_error').removeClass('hide')
            }

        });



    }

    clientsSlick();

            <?
      $videotestimonials = get_field('video_testimonials',2208);
      $i = 1;
      foreach($videotestimonials as $videotestimonial){
   ?>
        var player = new MediaElementPlayer('#testmonial<?=$i?>');
   <?
    $i++;
    }

  ?>


            $('#disclaimer_popup').firstVisitPopup({
                cookieName: 'homepage',
//                showAgainSelector: '#show-message'
            });

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


        $(document).ready(function() {
            //$( "label.your_name" ).
            $("label.your_name").clone().insertAfter("#your_name");
            $("span.your_name").next("label.your_name").remove();


            $("label.your_email").clone().insertAfter("#your_email");
            $("span.your_email").next("label.your_email").remove();


            $("label.your_phone").clone().insertAfter("#your_phone");
            $("span.your_phone").next("label.your_phone").remove();


            $("label.your_location").clone().insertAfter("#your_location");
            $("span.your_location").next("label.your_location").remove();

            $("label.your_message").clone().insertAfter("#your_message");
            $("span.your_message").next("label.your_message").remove();

        });

    </script>


    <script src="<?php bloginfo('template_url'); ?>/js/intlTelInput.min.js"></script>
    <script>
        $(".cphone").intlTelInput({
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "on",
            // dropdownContainer: "body",
            // excludeCountries: ["us"],
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // initialCountry: "auto",
            nationalMode: false,
            // numberType: "MOBILE",
            //onlyCountries: ['in', 'uae', 'ch', 'ca', 'do'],
            preferredCountries: ['in', 'ae', 'us', 'gb', 'kw', 'om', 'sa', 'qa'],
            // separateDialCode: true,
            utilsScript: "<?php bloginfo('template_url'); ?>/palakkaddec/js/utils.js"
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });

    </script>

    <script src="<?php bloginfo('template_url'); ?>/js/custom.min.js" async></script>



    <?php wp_footer();?>


<?
if(basename(get_page_template())=='online_booking_template.php'){

    $projects        = get_field( 'projects' );

?>
<script type="text/javascript">

    var projects = {};
    <?
    $i =1;
    foreach($projects as $project) {
    ?>
        projects[<?=$project['project']->ID?>]={"id":<?=$project['project']->ID?>,"name":"<?=$project['project']->post_title?>","image":"<?=$project['image']?>","logo":"<?=get_field('logo',$project['project']->ID)?>","location":"<?=get_field('location',$project['project']->ID)?>"};
    <?
            $j = 1;
            ?>
            var area = {};
            <?
            foreach($project['area'] as $area){
                ?>
                area[<?=$j?>]={"area":<?=$area['area']?>,"booking_amount":<?=$area['booking_amount']?>};
                //projects.push(area);
                <?
                $j++;
            }
            ?>
            projects[<?=$project['project']->ID?>]['area'] = area;
            <?

    $i++;
    }
    ?>




    $( document ).ready(function() {
        $('#project').trigger('change');
    });

    $('#project').on('change', function() {
        var project_id = this.value;

        var project = projects[project_id];

        $('#project_logo').html('<img width="100%" height="100%" src="' + project.logo +'">');
        $('#project_image').html('<img width="100%" height="100%" src="' + project.image +'">');
        $('#project_location').html(project.location);
        $('#project_name').html(project.name);

        $('#area').empty();


        $.each(projects[project_id]['area'], function(key,area) {
            $('#area')
                 .append($("<option></option>")
                            .attr("value",area.booking_amount)
                            .text(area.area));
        });


        $('#area').trigger('change');
    });


    $('#area').on('change', function() {
        $('#project_booking_amount').html(this.value);
    });

</script>
<?
}
?>

     <?
if(basename(get_page_template())=='location_template.php'){
?>
<script type="text/javascript">

  var latitude = <? echo (get_field('latitude'))?get_field('latitude').';':'"";' ; ?>
  var longitude = <? echo (get_field('latitude'))?get_field('longitude').';':'"";'  ; ?>
  var map;
  var infowindow;

  var pyrmont = {lat: latitude, lng: longitude};
  map = new google.maps.Map(document.getElementById('map'), {
              center: pyrmont,
              zoom: 12,
              zoomControl: true,
              scaleControl: true,
              scrollwheel: false,
              disableDoubleClickZoom: false
            });

<?
      $properties = get_children(array('post_parent' => $post->ID,'numberposts' => -1,'post_type'   => 'page','post_status' => 'publish'  ));

       foreach($properties as $property){
           if(get_field('latitude',$property->ID)!="" && get_field('longitude',$property->ID)!="" ){
            ?>
              var marker = new google.maps.Marker({
                      map: map,
                      position: new google.maps.LatLng(<?=get_field('latitude',$property->ID)?>, <?=get_field('longitude',$property->ID)?>),
                      title: '<?=$property->post_title?>',
                      icon: templateUrl+'/images/marker/victoria.png'
                    });

                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.setContent('<b><?=$property->post_title?></b><br /><?=get_field('location',$property->ID)?><br /><br /> <a class="btn btn-default" target="_blank" href="<?=get_permalink($property->ID);?>">View Details</a>');
                        infowindow.open(map, this);
                    });

               infowindow = new google.maps.InfoWindow();
            <?
    }//if

       }
}
?>
</script>


    </body>

    </html>
