<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php the_field('script_head', 'option'); ?>
    <?php wp_head(); ?>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/scss/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/bootstrap5/css/bootstrap-grid5.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/js/animate/animate.css">
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/animate/wow.css"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/main.js"></script>
</head>
<?php
$transfer_header = get_field('transfer_header') ?: 'header-one';

?>
<body>
<?php //wp_body_open(); ?>
<section class="header-1">
    <?php if($transfer_header=='header-one'){ ?>
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="v-top-socials">
                        <?php if (have_rows('v-top-socials', 'option')) {
                            while (have_rows('v-top-socials', 'option')) :
                                the_row(); ?>
                                <div>
                                    <a href="<?php the_sub_field('link'); ?>">
                                        <picture>
                                            <img src="<?php the_sub_field('image'); ?>" alt="">
                                        </picture>
                                    </a>
                                </div>
                            <?php endwhile;
                        }
                        ?>
                    </div>
                    <div class="v-top-contact">
                        <div class="mail">
                            <picture>
                                <img src="<?php echo get_field('image-top-email','option')?>" alt="" >
                            </picture>
                            <p><?php echo get_field('title-top-email','option')?></p>
                        </div>
                        <div class="phone">
                            <picture>
                                <img src="<?php echo get_field('image-top-contact','option')?>" alt="" >
                            </picture>
                            <p><?php echo get_field('title-top-contact','option')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-menu-1">
            <div class="container">
                <div class="header-bot">
                    <div class="logo">
                        <div class=" module module-logo " data-mw-title="Logo" id="logo" data-type="logo" parent-module="logo" parent-module-id="logo">
                            <a href="http://localhost:8080/product_internship">
                                <span class="mw-ui-col-x" style="width: autopx">
                                    <img src="<?php echo get_field('logo_page_right','option')?>" alt="V-Top Media Group" style="max-width: 100%; width: autopx;" class="logo ">
                                </span>
                            </a>
                        </div>
                    </div>
<!--                    <div class="logo">-->
<!--                        <a href="#">-->
<!--                            <picture>-->
<!--                                <img src="--><?php //echo get_field('logo_page_right','option')?><!--" alt="">-->
<!--                            </picture>-->
<!--                        </a>-->
<!--                    </div>-->
                    <div class="menu">
                        <div class="logo-menu">
                            <a href="#">
                                <picture>
                                    <img src="<?php echo get_field('logo_page_right','option')?>" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="menu-list header__right-menu">
                            <ul>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'rode' => 'menu',
                                        'menu_class' => 'menu_1 first-child child-0 menu-item-id-84 menu-item-parent-1' ,
                                        'menu_id' => 'menu_1',
                                        'theme_location' => 'menu-1',
                                        'container' => '__return_false',
                                        'fallback_cb' => '__return_false',
//                                        'items_wrap' => '%3$s',
                                        'depth' => 4,
                                        'walker' => new WP_fis_nav_menu()
                                    )
                                );
                                ?>
                            </ul>
                        </div>
                        <div class="search">
                            <form action="http://localhost:8080/product_internship/" method="get">
                                <picture>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.66665 14.0002C11.1644 14.0002 14 11.1646 14 7.66683C14 4.16903 11.1644 1.3335 7.66665 1.3335C4.16884 1.3335 1.33331 4.16903 1.33331 7.66683C1.33331 11.1646 4.16884 14.0002 7.66665 14.0002Z" stroke="#9A9EA6" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.6666 14.6668L13.3333 13.3335" stroke="#9A9EA6" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </picture>
                                <input type="text" name="s" placeholder="Search...">
                            </form>
                        </div>
                        <div class="close"></div>
                        <div class="contact-mobie">
                            <div class="v-top-contact">
                                <div class="mail">
                                    <picture>
                                        <img src="<?php echo get_field('image-top-email','option')?>" alt="" >
                                    </picture>
                                    <p><?php echo get_field('title-top-email','option')?></p>
                                </div>
                                <div class="phone">
                                    <picture>
                                        <img src="<?php echo get_field('image-top-contact','option')?>" alt="" >
                                    </picture>
                                    <p><?php echo get_field('title-top-contact','option')?></p>
                                </div>
                            </div>
                            <div class="v-top-socials">
                                <?php if (have_rows('v-top-socials', 'option')) {
                                    while (have_rows('v-top-socials', 'option')) :
                                        the_row(); ?>
                                        <div>
                                            <a href="<?php the_sub_field('link'); ?>">
                                                <picture>
                                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    <?php endwhile;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="btn-menu"></div>
                </div>
                <div class="over-lay-mobie"></div>
            </div>
        </section>
    <?php }else{ ?>
        <section class="section-menu-2">
            <div class="container">
                <div class="header-bot-1">
                    <?php
                    if($transfer_header == 'header-three'){
                        ?>
                        <div class="logo">
                            <a href="#">
                                <picture>
                                    <img src="<?php echo get_field('logo_page_center', 'option')?>" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="menu">
                            <div class="header__right-menu">
                                <ul>
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'rode' => 'menu',
                                            'menu_class' => 'menu_1 first-child child-0 menu-item-id-84 menu-item-parent-1' ,
                                            'menu_id' => 'menu_1',
                                            'theme_location' => 'menu-1',
                                            'container' => '__return_false',
                                            'fallback_cb' => '__return_false',
//                                        'items_wrap' => '%3$s',
                                            'depth' => 4,
                                            'walker' => new WP_fis_nav_menu()
                                        )
                                    );
                                    ?>
                                </ul>
                            </div>
                        </div>
                    <?php }else{ ?>
                    <div class="header__right-menu">
                        <ul>
                            <?php
                            wp_nav_menu(
                                array(
                                    'rode' => 'menu',
                                    'menu_class' => 'menu_2_1 first-child child-0 menu-item-id-84 menu-item-parent-1' ,
                                    'menu_id' => 'menu_2_1',
                                    'theme_location' => 'menu-2-1',
                                    'container' => '__return_false',
                                    'fallback_cb' => '__return_false',
//                                        'items_wrap' => '%3$s',
                                    'depth' => 4,
                                    'walker' => new WP_fis_nav_menu()
                                )
                            );
                            ?></ul>
                    </div>
                    <div class="logo">
                        <a href="#">
                            <picture>
                                <img src="<?php echo get_field('logo_page_center', 'option')?>" alt="">
                            </picture>
                        </a>
                    </div>
                    <div class="header__right-menu">
                        <ul>
                            <?php
                            wp_nav_menu(
                                array(
                                    'rode' => 'menu',
                                    'menu_class' => 'menu_2_2 first-child child-0 menu-item-id-84 menu-item-parent-1' ,
                                    'menu_id' => 'menu_2_2',
                                    'theme_location' => 'menu-2-2',
                                    'container' => '__return_false',
                                    'fallback_cb' => '__return_false',
//                                        'items_wrap' => '%3$s',
                                    'depth' => 4,
                                    'walker' => new WP_fis_nav_menu()
                                )
                            );
                            ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <div class="header-bot-2">
                    <div class="logo">
                        <a href="#">
                            <picture>
                                <img src="<?php echo get_field('logo_page_center', 'option')?>" alt="">
                            </picture>
                        </a>
                    </div>
                    <div class="menu">
                        <div class="logo-menu">
                            <a href="#">
                                <picture>
                                    <img src="<?php echo get_field('logo_page_right', 'option')?>" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="menu-list">
                            <ul>
                                <li><a href="#">Về V-TOP MEDIA</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#">Về chúng tôi</a></li>
                                        <li><a href="#">Lịch sử hình thành</a></li>
                                        <li><a href="#">Sơ đồ tổ chức</a></li>
                                        <li><a href="#">Thành tích</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">IDOLs</a></li>
                                <li><a href="#">Trung tâm tin tức</a></li>
                                <li><a href="#">Tác phẩm nổi bật</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="search">
                            <form action="http://localhost:8080/product_internship/" method="get">
                                <picture>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.66665 14.0002C11.1644 14.0002 14 11.1646 14 7.66683C14 4.16903 11.1644 1.3335 7.66665 1.3335C4.16884 1.3335 1.33331 4.16903 1.33331 7.66683C1.33331 11.1646 4.16884 14.0002 7.66665 14.0002Z" stroke="#9A9EA6" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.6666 14.6668L13.3333 13.3335" stroke="#9A9EA6" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </picture>
                                <input type="text" name="s" placeholder="Search...">
                            </form>
                        </div>
                        <div class="close"></div>
                        <div class="contact-mobie">
                            <div class="v-top-contact">
                                <div class="mail">
                                    <picture>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.3333 2.3335H4.66665C2.66665 2.3335 1.33331 3.3335 1.33331 5.66683V10.3335C1.33331 12.6668 2.66665 13.6668 4.66665 13.6668H11.3333C13.3333 13.6668 14.6666 12.6668 14.6666 10.3335V5.66683C14.6666 3.3335 13.3333 2.3335 11.3333 2.3335ZM11.6466 6.3935L9.55998 8.06016C9.11998 8.4135 8.55998 8.58683 7.99998 8.58683C7.43998 8.58683 6.87331 8.4135 6.43998 8.06016L4.35331 6.3935C4.13998 6.22016 4.10665 5.90016 4.27331 5.68683C4.44665 5.4735 4.75998 5.4335 4.97331 5.60683L7.05998 7.2735C7.56665 7.68016 8.42665 7.68016 8.93331 7.2735L11.02 5.60683C11.2333 5.4335 11.5533 5.46683 11.72 5.68683C11.8933 5.90016 11.86 6.22016 11.6466 6.3935Z" fill="black"/>
                                        </svg>
                                    </picture>
                                    <p>unreal@outlook.com</p>
                                </div>
                                <div class="phone">
                                    <picture>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.6466 12.2202C14.6466 12.4602 14.5933 12.7068 14.48 12.9468C14.3666 13.1868 14.22 13.4135 14.0266 13.6268C13.7 13.9868 13.34 14.2468 12.9333 14.4135C12.5333 14.5802 12.1 14.6668 11.6333 14.6668C10.9533 14.6668 10.2266 14.5068 9.45998 14.1802C8.69331 13.8535 7.92665 13.4135 7.16665 12.8602C6.39998 12.3002 5.67331 11.6802 4.97998 10.9935C4.29331 10.3002 3.67331 9.5735 3.11998 8.8135C2.57331 8.0535 2.13331 7.2935 1.81331 6.54016C1.49331 5.78016 1.33331 5.0535 1.33331 4.36016C1.33331 3.90683 1.41331 3.4735 1.57331 3.0735C1.73331 2.66683 1.98665 2.2935 2.33998 1.96016C2.76665 1.54016 3.23331 1.3335 3.72665 1.3335C3.91331 1.3335 4.09998 1.3735 4.26665 1.4535C4.43998 1.5335 4.59331 1.6535 4.71331 1.82683L6.25998 4.00683C6.37998 4.1735 6.46665 4.32683 6.52665 4.4735C6.58665 4.6135 6.61998 4.7535 6.61998 4.88016C6.61998 5.04016 6.57331 5.20016 6.47998 5.3535C6.39331 5.50683 6.26665 5.66683 6.10665 5.82683L5.59998 6.3535C5.52665 6.42683 5.49331 6.5135 5.49331 6.62016C5.49331 6.6735 5.49998 6.72016 5.51331 6.7735C5.53331 6.82683 5.55331 6.86683 5.56665 6.90683C5.68665 7.12683 5.89331 7.4135 6.18665 7.76016C6.48665 8.10683 6.80665 8.46016 7.15331 8.8135C7.51331 9.16683 7.85998 9.4935 8.21331 9.7935C8.55998 10.0868 8.84665 10.2868 9.07331 10.4068C9.10665 10.4202 9.14665 10.4402 9.19331 10.4602C9.24665 10.4802 9.29998 10.4868 9.35998 10.4868C9.47331 10.4868 9.55998 10.4468 9.63331 10.3735L10.14 9.8735C10.3066 9.70683 10.4666 9.58016 10.62 9.50016C10.7733 9.40683 10.9266 9.36016 11.0933 9.36016C11.22 9.36016 11.3533 9.38683 11.5 9.44683C11.6466 9.50683 11.8 9.5935 11.9666 9.70683L14.1733 11.2735C14.3466 11.3935 14.4666 11.5335 14.54 11.7002C14.6066 11.8668 14.6466 12.0335 14.6466 12.2202Z" fill="black"/>
                                        </svg>
                                    </picture>
                                    <p>605-646-9241</p>
                                </div>
                            </div>
                            <div class="v-top-socials">
                                <div>
                                    <a href="#">
                                        <picture>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2333 17.4333C13.2583 17.5667 13.1833 17.7083 13.0583 17.7583C12.1166 18.1333 11.0833 18.3333 10.0166 18.3333C8.17497 18.3333 6.47495 17.7417 5.09995 16.725C4.98328 16.6417 4.94998 16.475 5.02498 16.35C5.48331 15.5333 7.27494 12.9083 11.2333 11.4417C11.3833 11.3833 11.5499 11.4583 11.5999 11.6083C12.5916 14.2667 13.0583 16.5167 13.2333 17.4333Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1833 11.5752C17.8 13.6252 16.65 15.4085 15.0417 16.6252C14.8667 16.7585 14.6167 16.6585 14.575 16.4502C14.4 15.5502 13.975 13.6085 13.1583 11.3002C13.1 11.1252 13.2167 10.9335 13.4 10.9085C15.475 10.6585 17.2917 11.0585 17.975 11.2418C18.1167 11.2918 18.2083 11.4335 18.1833 11.5752Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9917 9.85021C17.1417 9.70021 14.975 9.38352 12.7584 9.62519C12.625 9.64186 12.5084 9.56686 12.45 9.44186C12.4167 9.36686 12.3917 9.29187 12.3584 9.21687C12.225 8.90853 12.0834 8.59187 11.9417 8.28354C11.8667 8.13354 11.9417 7.95019 12.0917 7.88353C14.425 6.87519 15.725 5.57519 16.2334 4.99186C16.3584 4.85019 16.5751 4.85854 16.6917 5.00854C17.6501 6.28354 18.2417 7.84186 18.3334 9.52519C18.3417 9.73353 18.1751 9.88354 17.9917 9.85021Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3667 3.99147C14.9334 4.51647 13.7167 5.76645 11.4084 6.68312C11.275 6.74145 11.1167 6.68312 11.0417 6.54978C9.97502 4.61645 8.84167 2.99146 8.31668 2.25812C8.19168 2.08312 8.2917 1.83313 8.50003 1.7998C8.98337 1.71647 9.4917 1.6748 10.0084 1.6748C12.025 1.6748 13.8834 2.39146 15.325 3.59146C15.45 3.68313 15.4667 3.86647 15.3667 3.99147Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.18335 7.36651C6.02502 8.15818 3.23331 8.26652 2.21665 8.28318C2.02498 8.28318 1.88334 8.09985 1.93334 7.91651C2.53334 5.58318 4.13333 3.63319 6.24166 2.55819C6.36666 2.49152 6.525 2.53317 6.60833 2.64984C7.04166 3.24984 8.21666 4.94152 9.36666 6.93319C9.45833 7.09985 9.37502 7.31651 9.18335 7.36651Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7667 9.66635C10.8417 9.82469 10.75 10.0163 10.5834 10.0747C6.89172 11.2663 4.68338 14.2247 4.01671 15.2414C3.90838 15.408 3.67505 15.4164 3.55005 15.2664C2.38338 13.833 1.67505 12.1913 1.67505 10.1997V10.0497C1.67505 9.88301 1.80837 9.74968 1.97504 9.75801C3.02504 9.79968 6.45005 9.658 10.0084 8.633C10.1417 8.59134 10.2917 8.65802 10.35 8.78302C10.4917 9.07469 10.6334 9.36635 10.7667 9.66635Z" fill="black"/>
                                            </svg>
                                        </picture>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <picture>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.1667 3.33301H5.83335C3.33335 3.33301 1.66669 4.99967 1.66669 7.49967V12.4997C1.66669 14.9997 3.33335 16.6663 5.83335 16.6663H14.1667C16.6667 16.6663 18.3334 14.9997 18.3334 12.4997V7.49967C18.3334 4.99967 16.6667 3.33301 14.1667 3.33301ZM11.575 10.858L9.51667 12.0913C8.68334 12.5913 8 12.208 8 11.233V8.75802C8 7.78302 8.68334 7.39968 9.51667 7.89968L11.575 9.133C12.3667 9.61633 12.3667 10.383 11.575 10.858Z" fill="black"/>
                                            </svg>
                                        </picture>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <picture>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.3166 9.50854C18.0333 4.6752 13.6416 0.950212 8.58329 1.78355C5.09995 2.35855 2.30829 5.18353 1.76663 8.66686C1.44996 10.6835 1.86664 12.5919 2.77498 14.1669L2.0333 16.9252C1.86663 17.5502 2.44162 18.1169 3.05828 17.9419L5.77496 17.1919C7.00829 17.9169 8.44995 18.3335 9.99162 18.3335C14.6916 18.3335 18.5916 14.1919 18.3166 9.50854ZM14.0666 13.1002C13.9916 13.2502 13.8999 13.3919 13.7833 13.5252C13.5749 13.7502 13.3499 13.9169 13.0999 14.0169C12.8499 14.1252 12.575 14.1752 12.2833 14.1752C11.8583 14.1752 11.3999 14.0752 10.9249 13.8669C10.4416 13.6585 9.96664 13.3835 9.49164 13.0419C9.00831 12.6919 8.5583 12.3002 8.12496 11.8752C7.69163 11.4419 7.30828 10.9835 6.95828 10.5085C6.61661 10.0335 6.34162 9.55853 6.14162 9.08353C5.94163 8.60853 5.84164 8.15021 5.84164 7.71687C5.84164 7.43354 5.89163 7.15854 5.99163 6.90854C6.09163 6.65021 6.24998 6.41688 6.47498 6.20854C6.74165 5.94188 7.03329 5.81688 7.34163 5.81688C7.45829 5.81688 7.57494 5.84187 7.68327 5.89187C7.7916 5.94187 7.89163 6.01687 7.96663 6.12521L8.93327 7.49186C9.00827 7.60019 9.06661 7.69186 9.09995 7.78353C9.14161 7.8752 9.15829 7.95853 9.15829 8.04186C9.15829 8.14186 9.12497 8.24188 9.06663 8.34188C9.0083 8.44187 8.93327 8.54186 8.83327 8.64186L8.5166 8.97519C8.4666 9.02519 8.44997 9.0752 8.44997 9.14187C8.44997 9.1752 8.45827 9.20853 8.46661 9.24186C8.48327 9.2752 8.49164 9.3002 8.49997 9.3252C8.57497 9.46687 8.70828 9.64186 8.89161 9.85852C9.08328 10.0752 9.28332 10.3002 9.49998 10.5169C9.72498 10.7419 9.94164 10.9419 10.1666 11.1335C10.3833 11.3169 10.5666 11.4419 10.7083 11.5169C10.7333 11.5252 10.7583 11.5419 10.7833 11.5502C10.8166 11.5669 10.85 11.5669 10.8916 11.5669C10.9666 11.5669 11.0167 11.5419 11.0667 11.4919L11.3833 11.1752C11.4916 11.0669 11.5916 10.9919 11.6833 10.9419C11.7833 10.8835 11.875 10.8502 11.9833 10.8502C12.0666 10.8502 12.15 10.8669 12.2416 10.9085C12.3333 10.9502 12.4333 11.0002 12.5333 11.0752L13.9166 12.0585C14.025 12.1335 14.0999 12.2252 14.1499 12.3252C14.1916 12.4335 14.2166 12.5335 14.2166 12.6502C14.1666 12.7919 14.1333 12.9502 14.0666 13.1002Z" fill="black"/>
                                            </svg>
                                        </picture>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <picture>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.3333 13.4915C18.3333 16.5248 16.525 18.3332 13.4916 18.3332H12.5C12.0416 18.3332 11.6666 17.9582 11.6666 17.4998V12.6915C11.6666 12.4665 11.85 12.2748 12.075 12.2748L13.5416 12.2498C13.6583 12.2415 13.7583 12.1582 13.7833 12.0415L14.075 10.4498C14.1 10.2998 13.9833 10.1582 13.825 10.1582L12.05 10.1832C11.8166 10.1832 11.6333 9.99985 11.625 9.77485L11.5916 7.73317C11.5916 7.59984 11.7 7.48318 11.8416 7.48318L13.8416 7.44984C13.9833 7.44984 14.0916 7.34152 14.0916 7.19985L14.0583 5.19983C14.0583 5.05816 13.95 4.94984 13.8083 4.94984L11.5583 4.98318C10.175 5.00818 9.07497 6.1415 9.09997 7.52484L9.14163 9.8165C9.14996 10.0498 8.96664 10.2332 8.7333 10.2415L7.73329 10.2582C7.59163 10.2582 7.4833 10.3665 7.4833 10.5082L7.5083 12.0915C7.5083 12.2332 7.61662 12.3415 7.75829 12.3415L8.7583 12.3248C8.99163 12.3248 9.17495 12.5082 9.18328 12.7332L9.25828 17.4832C9.26661 17.9498 8.89161 18.3332 8.42495 18.3332H6.50829C3.47496 18.3332 1.66663 16.5248 1.66663 13.4832V6.50817C1.66663 3.47484 3.47496 1.6665 6.50829 1.6665H13.4916C16.525 1.6665 18.3333 3.47484 18.3333 6.50817V13.4915Z" fill="black"/>
                                            </svg>
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-menu"></div>
                </div>
            </div>
        </section>
    <?php } ?>
</section>

