<?php
$social_media = get_field('social_media','option');
?>
<div class="container">
    <div class="contact">
        <span class="wow fadeInDown">Liên hệ với chúng tôi</span>
        <h3 class="wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">NẾU BẠN CÓ BẤT KỲ CÂU HỎI NÀO HÃY NÓI CHO CHÚNG TÔI BIẾT</h3>
        <div class="contact-wrapper row">
            <div class="contact-form col-lg-8 col-sm-12 wow fadeInLeft " data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">

                    <?php  echo do_shortcode('[contact-form-7 id="6f70525" title="Email liên hệ"]') ?>

            </div>
            <div class="contact-method col-lg-4 col-sm-12 wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                <h4>Liên hệ với chúng tôi</h4>
                <div class="location">
                    <picture>
                        <img src="<?php echo get_field('image_bottom_location','option')?>" alt="">
                    </picture>
                    <div class="location-text">
                        <p>Địa chỉ</p>
                        <h5><?php echo get_field('content_bottom_location','option')?></h5>
                    </div>
                </div>
                <div class="phone">
                    <picture>
                        <img src="<?php echo get_field('image_bottom_phone','option')?>" alt="">
                    </picture>
                    <div class="phone-text">
                        <p>Điện thoại</p>
                        <h5><?php echo get_field('content_bottom_phone','option')?></h5>
                    </div>
                </div>
                <div class="contact-network">
                    <?php
                    if($social_media){
                        foreach ($social_media as $item_social){
                            ?>
                            <picture>
                                <a href="<?php echo $item_social['link'] ?>">
                                    <img src="<?php echo $item_social['image'] ?>" alt="">
                                </a>
                            </picture>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map wow fadeInDown">
    <picture>
        <img src="../dist/img/img 71.png" alt="">
    </picture>
</div>
