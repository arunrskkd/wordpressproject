<?php
?>


<div class="apartment-wraper popup_wrapper">
    <div class="popup">
        <div class="close_pop"><img src="<?php bloginfo('template_url'); ?>/images/close_pop.png"></div>
        <div class="pop_logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></div>
        <div class="book_visit clearfix">
            <h2>Enquire Now</h2>

            <?php
                            if(isset($_REQUEST['utm_content'])){
                                $val = strtolower($_REQUEST['utm_content']);

                                if($val=="kochi")
                                {
                                  echo do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]' );
                                }
//                                else if($val=="kottayam")
//                                {
//                                    echo do_shortcode( '[contact-form-7 id="1980" title="Apartment Offer All - Kottayam"]' );
//                                }
                                else if($val=="kozhikode")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1977" title="Apartment offer - calicut"]' );
                                }
                                else if($val=="thrissur")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1976" title="Apartment offer - Thrissur"]' );
                                }
                                else if($val=="trivandrum")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1981" title="Apartment Offer All - tvm"]' );
                                } else if($val=="brand"){
                                    echo '<div class="brand-contact" id="brand_kochi">'.do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]').'</div>';
//                                    echo '<div class="brand-contact" id="brand_kottayam">'.do_shortcode( '[contact-form-7 id="1980" title="Apartment Offer All - Kottayam"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_kozhikode">'.do_shortcode( '[contact-form-7 id="1977" title="Apartment offer - calicut"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_thrissur">'.do_shortcode( '[contact-form-7 id="1976" title="Apartment offer - Thrissur"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_trivandrum">'.do_shortcode( '[contact-form-7 id="1981" title="Apartment Offer All - tvm"]').'</div>';

                                }

                            } else {
                                echo do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]' );

                         }
                            ?>
        </div>
    </div>
</div>

<div class="villa-wraper popup_wrapper">
    <div class="popup">
        <div class="close_pop"><img src="<?php bloginfo('template_url'); ?>/images/close_pop.png"></div>
        <div class="pop_logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></div>
        <div class="book_visit clearfix">
            <h2>Enquire Now</h2>
            <?php
                            if(isset($_REQUEST['utm_content'])){
                                $val = strtolower($_REQUEST['utm_content']);

                                if($val=="kochi")
                                {
                                  echo do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]' );
                                }
//                                else if($val=="kottayam")
//                                {
//                                    echo do_shortcode( '[contact-form-7 id="1980" title="Apartment Offer All - Kottayam"]' );
//                                }
                                else if($val=="kozhikode")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1977" title="Apartment offer - calicut"]' );
                                }
                                else if($val=="thrissur")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1976" title="Apartment offer - Thrissur"]' );
                                }
                                else if($val=="trivandrum")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1981" title="Apartment Offer All - tvm"]' );
                                } else if($val=="brand"){
                                    echo '<div class="brand-contact" id="brand_kochi">'.do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]').'</div>';
//                                    echo '<div class="brand-contact" id="brand_kottayam">'.do_shortcode( '[contact-form-7 id="1980" title="Apartment Offer All - Kottayam"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_kozhikode">'.do_shortcode( '[contact-form-7 id="1977" title="Apartment offer - calicut"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_thrissur">'.do_shortcode( '[contact-form-7 id="1976" title="Apartment offer - Thrissur"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_trivandrum">'.do_shortcode( '[contact-form-7 id="1981" title="Apartment Offer All - tvm"]').'</div>';

                                }

                            } else {
                                echo do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]' );


                         }
                            ?>
        </div>
    </div>
</div>


<div class="plot-wraper popup_wrapper">
    <div class="popup">
        <div class="close_pop"><img src="<?php bloginfo('template_url'); ?>/images/close_pop.png"></div>
        <div class="pop_logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></div>
        <div class="book_visit clearfix">
            <h2>Enquire Now</h2>
            <?php
                            if(isset($_REQUEST['utm_content'])){
                                $val = strtolower($_REQUEST['utm_content']);

                                if($val=="kochi")
                                {
                                  echo do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]' );
                                }
//                                else if($val=="kottayam")
//                                {
//                                    echo do_shortcode( '[contact-form-7 id="1980" title="Apartment Offer All - Kottayam"]' );
//                                }
                                else if($val=="kozhikode")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1977" title="Apartment offer - calicut"]' );
                                }
                                else if($val=="thrissur")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1976" title="Apartment offer - Thrissur"]' );
                                }
                                else if($val=="trivandrum")
                                {
                                    echo do_shortcode( '[contact-form-7 id="1981" title="Apartment Offer All - tvm"]' );
                                } else if($val=="brand"){
                                    echo '<div class="brand-contact" id="brand_kochi">'.do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]').'</div>';
//                                    echo '<div class="brand-contact" id="brand_kottayam">'.do_shortcode( '[contact-form-7 id="1980" title="Apartment Offer All - Kottayam"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_kozhikode">'.do_shortcode( '[contact-form-7 id="1977" title="Apartment offer - calicut"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_thrissur">'.do_shortcode( '[contact-form-7 id="1976" title="Apartment offer - Thrissur"]').'</div>';
                                    echo '<div class="brand-contact" id="brand_trivandrum">'.do_shortcode( '[contact-form-7 id="1981" title="Apartment Offer All - tvm"]').'</div>';

                                }

                            } else {
                                echo do_shortcode( '[contact-form-7 id="1979" title="Appartment offer All - kochi"]' );


                         }
                            ?>
        </div>
    </div>
</div>
