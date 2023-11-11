<?php
    $list_image = get_field('list_image_top_footer','option');
    $logo_footer = get_field('logo_footer','option');
    $about = get_field('about','option');
    $faq = get_field('faq','option');
    $social_media = get_field('social_media','option');

?>

<section class="partner">
    <div class="container">
        <div class="partner-slider">
            <?php
                if($list_image){
                    foreach ($list_image as $image){
            ?>
                <div class="partner-child">
                    <picture>
                        <img src="<?php echo $image ?>" alt="">
                    </picture>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <footer class="row">
            <div class="footer-left col-lg-5">
                <div class="logo-footer">
                    <a href="http://localhost:8080/product_internship/">
                        <picture>
                            <img src="<?php echo $logo_footer?>" alt="">
                        </picture>
                    </a>
                    <p>We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                        <a href="#">Read More</a>
                    </p>
                </div>
                <div class="contact">
                    <div class="phone">
                        <div class="image">
                            <picture>
                                <img src="<?php echo get_field('image_bottom_phone','option')?>" alt="">
                            </picture>
                        </div>
                        <div class="number-phone">
                            <p>Tel</p>
                            <h6><?php echo get_field('content_bottom_phone','option')?></h6>
                        </div>
                    </div>
                    <div class="mail">
                        <div class="image">
                            <picture>
                                <img src="<?php echo get_field('image_bottom_email','option')?>" alt="">
                            </picture>
                        </div>
                        <div class="mail-text">
                            <p>Mail</p>
                            <h6><?php echo get_field('content_bottom_email','option')?></h6>
                        </div>
                    </div>
                    <div class="location">
                        <div class="image">
                            <picture>
                                <img src="<?php echo get_field('image_bottom_location','option')?>" alt="">
                            </picture>
                        </div>
                        <div class="location-text">
                            <p><?php echo get_field('content_bottom_location','option')?></p>
                            <h6></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-right col-lg-7">
                <div class="row ">
                    <div class="footer-item col-lg-3 col-md-3 col-xs-6">
                        <h6>FAQ</h6>
                        <ul>
                            <?php
                                if($faq){
                                    foreach ($faq as $item){
                            ?>
                                <li><a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a></li>
                            <?php
                                    }
                                }
                             ?>
                        </ul>
                    </div>
                    <div class="footer-item col-lg-3 col-md-3 col-xs-6">
                        <h6>About</h6>
                        <ul>
                            <?php
                            if($about){
                                foreach ($about as $item){
                                    ?>
                                    <li><a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="footer-item col-lg-6 col-md-6 col-xs-12">
                        <h6>Social Media</h6>
                        <p>Be the first one to know  about discounts, offers, news, giveaways and events</p>
                        <div class="social-media">
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
        </footer>
    </div>
</section>
</body>
</html>
<script>

</script>
