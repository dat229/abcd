<?php get_header();

    $args = array(
        'post_type' => 'v-top-media',
        'post_status' => 'publish',
        'posts_per_page' => 3
    );

    $getPost = new WP_Query($args);

    $args2 = array(
        'post_type' => array('du_an_v_top','v-top-media'),
        'post_status' => 'publish',
        'posts_per_page' => 3
    );

    $getPostMost = new WP_Query($args2);

?>

<div class="container">
    <section class="news ">
        <div class="news-wrapper">
            <div class="news-left">
                <div class="news-main news-main-detail">
                    <div class="news-main-text news-main-text-detail">
                        <h5><?php the_title(); ?></h5>
                        <div class="orther">
                            <p class="date"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.25 3H12.75V2.25C12.75 2.05109 12.671 1.86032 12.5303 1.71967C12.3897 1.57902 12.1989 1.5 12 1.5C11.8011 1.5 11.6103 1.57902 11.4697 1.71967C11.329 1.86032 11.25 2.05109 11.25 2.25V3H6.75V2.25C6.75 2.05109 6.67098 1.86032 6.53033 1.71967C6.38968 1.57902 6.19891 1.5 6 1.5C5.80109 1.5 5.61032 1.57902 5.46967 1.71967C5.32902 1.86032 5.25 2.05109 5.25 2.25V3H3.75C3.15326 3 2.58097 3.23705 2.15901 3.65901C1.73705 4.08097 1.5 4.65326 1.5 5.25V14.25C1.5 14.8467 1.73705 15.419 2.15901 15.841C2.58097 16.2629 3.15326 16.5 3.75 16.5H14.25C14.8467 16.5 15.419 16.2629 15.841 15.841C16.2629 15.419 16.5 14.8467 16.5 14.25V5.25C16.5 4.65326 16.2629 4.08097 15.841 3.65901C15.419 3.23705 14.8467 3 14.25 3ZM15 14.25C15 14.4489 14.921 14.6397 14.7803 14.7803C14.6397 14.921 14.4489 15 14.25 15H3.75C3.55109 15 3.36032 14.921 3.21967 14.7803C3.07902 14.6397 3 14.4489 3 14.25V9H15V14.25ZM15 7.5H3V5.25C3 5.05109 3.07902 4.86032 3.21967 4.71967C3.36032 4.57902 3.55109 4.5 3.75 4.5H5.25V5.25C5.25 5.44891 5.32902 5.63968 5.46967 5.78033C5.61032 5.92098 5.80109 6 6 6C6.19891 6 6.38968 5.92098 6.53033 5.78033C6.67098 5.63968 6.75 5.44891 6.75 5.25V4.5H11.25V5.25C11.25 5.44891 11.329 5.63968 11.4697 5.78033C11.6103 5.92098 11.8011 6 12 6C12.1989 6 12.3897 5.92098 12.5303 5.78033C12.671 5.63968 12.75 5.44891 12.75 5.25V4.5H14.25C14.4489 4.5 14.6397 4.57902 14.7803 4.71967C14.921 4.86032 15 5.05109 15 5.25V7.5Z" fill="#E95A13"/>
                                </svg>
                                <?php
                                echo get_the_date('j \t\h\á\n\g n, Y');
                                ?></p>
                            <a href="#" class="share">Chia sẻ: <svg width="32" height="32" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17" cy="17.0002" r="14.1667" fill="#3B5998"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7648 12.0119C20.3233 11.9236 19.7269 11.8577 19.3519 11.8577C18.3364 11.8577 18.2704 12.2992 18.2704 13.0056V14.2632H20.8089L20.5877 16.8682H18.2704V24.7918H15.092V16.8682H13.4583V14.2632H15.092V12.6519C15.092 10.4448 16.1293 9.2085 18.7338 9.2085C19.6386 9.2085 20.3009 9.34096 21.1616 9.51757L20.7648 12.0119Z" fill="white"/>
                                </svg></a>
                        </div>

                        <p><?php the_content(); ?></p>
                    </div>
                    <?php
                        if(get_field('list_image')){
                            foreach (get_field('list_image') as $itemImage){
                    ?>
                        <picture class="mt-4">
                            <img src="<?php echo $itemImage?>" alt="">
                        </picture>
                    <?php
                            }
                        }
                    ?>

                    <div class="text-decsription">
                        <?php
                        if(get_field('list_description')){
                            foreach (get_field('list_description') as $itemDescription){
                                ?>
                                    <p> <?php echo $itemDescription['description'] ?> </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <?php if(get_field('link_resources')){ ?>
                        <p><?php echo the_field('link_resources') ?></p>
                    <?php } ?>
                </div>
                <div class="news-related">
                    <div class="news-related-title">
                        <h4>Bài viết liên quan</h4>
                    </div>
                    <?php
                        if($getPost->have_posts()){
                            while ($getPost->have_posts()){
                                $getPost->the_post();
                    ?>
                        <div class="news-related-wrapper">
                            <div class="news-related">
                                <picture>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </picture>
                            </div>
                            <div class="news-related-text">
                                <h5><?php the_title() ?></h5>
                                <p class="date"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.25 3H12.75V2.25C12.75 2.05109 12.671 1.86032 12.5303 1.71967C12.3897 1.57902 12.1989 1.5 12 1.5C11.8011 1.5 11.6103 1.57902 11.4697 1.71967C11.329 1.86032 11.25 2.05109 11.25 2.25V3H6.75V2.25C6.75 2.05109 6.67098 1.86032 6.53033 1.71967C6.38968 1.57902 6.19891 1.5 6 1.5C5.80109 1.5 5.61032 1.57902 5.46967 1.71967C5.32902 1.86032 5.25 2.05109 5.25 2.25V3H3.75C3.15326 3 2.58097 3.23705 2.15901 3.65901C1.73705 4.08097 1.5 4.65326 1.5 5.25V14.25C1.5 14.8467 1.73705 15.419 2.15901 15.841C2.58097 16.2629 3.15326 16.5 3.75 16.5H14.25C14.8467 16.5 15.419 16.2629 15.841 15.841C16.2629 15.419 16.5 14.8467 16.5 14.25V5.25C16.5 4.65326 16.2629 4.08097 15.841 3.65901C15.419 3.23705 14.8467 3 14.25 3ZM15 14.25C15 14.4489 14.921 14.6397 14.7803 14.7803C14.6397 14.921 14.4489 15 14.25 15H3.75C3.55109 15 3.36032 14.921 3.21967 14.7803C3.07902 14.6397 3 14.4489 3 14.25V9H15V14.25ZM15 7.5H3V5.25C3 5.05109 3.07902 4.86032 3.21967 4.71967C3.36032 4.57902 3.55109 4.5 3.75 4.5H5.25V5.25C5.25 5.44891 5.32902 5.63968 5.46967 5.78033C5.61032 5.92098 5.80109 6 6 6C6.19891 6 6.38968 5.92098 6.53033 5.78033C6.67098 5.63968 6.75 5.44891 6.75 5.25V4.5H11.25V5.25C11.25 5.44891 11.329 5.63968 11.4697 5.78033C11.6103 5.92098 11.8011 6 12 6C12.1989 6 12.3897 5.92098 12.5303 5.78033C12.671 5.63968 12.75 5.44891 12.75 5.25V4.5H14.25C14.4489 4.5 14.6397 4.57902 14.7803 4.71967C14.921 4.86032 15 5.05109 15 5.25V7.5Z" fill="#E95A13"/>
                                    </svg>
                                    <?php
                                    echo get_the_date('j \t\h\á\n\g n, Y');
                                    ?></p>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="news-right">
                <div class="news-category">
                    <h4>Danh mục</h4>
                    <ul>
                        <li><a href="http://localhost:8080/product_internship/idols/">IDol</a></li>
                        <li><a href="http://localhost:8080/product_internship/tac-pham-noi-bat/">Tác phẩm nổi bật</a></li>
                        <li><a href="http://localhost:8080/product_internship/lien-he/"> Liên hệ </a></li>
                    </ul>
                </div>
                <div class="hot-news">
                    <h4>Nổi bật nhất</h4>
                    <?php
                    get_template_part(
                        'components/section/hot_news_wrapper',
                        null,
                        array(
                            'array_post' => array('du_an_v_top','v-top-media')
                        )
                    );
                    ?>
                </div>
                <div class="hot-search">
                    <h4>Nổi bật nhất</h4>
                    <ul>
                        <?php
                            if(get_post_taxonomies()){
                                foreach (get_post_taxonomies() as $item){
                        ?>
                            <li><a href="#"><?php echo $item ?></a></li>
                        <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer() ?>
