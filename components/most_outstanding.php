<?php
if(get_sub_field('list_post')) {
    $getListPost = get_sub_field('list_post');
}

$args = array(
    'post_type' => 'most-outstanding',
    'post_status' => 'publish',
    'posts_per_page' => $getListPost,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
);

$getPost = new WP_Query($args);

?>

<div class="container">
    <section class="video">
        <div class="video-text">
            <h3>Tác phẩm nổi bật</h3>
            <p>V-Top luôn mang đến sự hài lòng, là sự lựa chọn sáng giá được các đối tác ưu tiên tìm gặp hợp tác, đặt niềm tin vào sản phẩm dịch vụ của chúng tôi</p>
        </div>
        <div class="video-list">
            <?php
            if($getPost->have_posts()){
                while ($getPost->have_posts()){
                    $getPost->the_post();
                    ?>
                    <div class="video-child">
                        <picture>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </picture>
                        <?php if(get_field('link')){ ?>
                            <a href="<?php get_field('link') ?>" data-fancybox="video">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M47.675 49.5498C47.2 49.5498 46.725 49.3748 46.35 48.9998C45.625 48.2748 45.625 47.0748 46.35 46.3498C55.375 37.3248 55.375 22.6498 46.35 13.6498C45.625 12.9248 45.625 11.7248 46.35 10.9998C47.075 10.2748 48.275 10.2748 49 10.9998C59.475 21.4748 59.475 38.5248 49 48.9998C48.625 49.3748 48.15 49.5498 47.675 49.5498Z" fill="white"/>
                                    <path d="M12.325 49.5498C11.85 49.5498 11.375 49.3748 11 48.9998C0.524987 38.5248 0.524987 21.4748 11 10.9998C11.725 10.2748 12.925 10.2748 13.65 10.9998C14.375 11.7248 14.375 12.9248 13.65 13.6498C4.62499 22.6748 4.62499 37.3498 13.65 46.3498C14.375 47.0748 14.375 48.2748 13.65 48.9998C13.275 49.3748 12.8 49.5498 12.325 49.5498Z" fill="white"/>
                                    <path d="M30 56.7749C26.875 56.7499 23.9 56.2499 21.125 55.2749C20.15 54.9249 19.625 53.8499 19.975 52.8749C20.325 51.8999 21.375 51.3749 22.375 51.7249C24.775 52.5499 27.325 52.9999 30.025 52.9999C32.7 52.9999 35.275 52.5499 37.65 51.7249C38.625 51.3999 39.7 51.8999 40.05 52.8749C40.4 53.8499 39.875 54.9249 38.9 55.2749C36.1 56.2499 33.125 56.7749 30 56.7749Z" fill="white"/>
                                    <path d="M38.25 8.3501C38.05 8.3501 37.825 8.3251 37.625 8.2501C35.25 7.4001 32.675 6.9751 30 6.9751C27.325 6.9751 24.775 7.4251 22.375 8.2501C21.375 8.5751 20.325 8.0751 19.975 7.1001C19.625 6.1251 20.15 5.0501 21.125 4.7001C23.925 3.7251 26.9 3.2251 30 3.2251C33.1 3.2251 36.1 3.7251 38.875 4.7001C39.85 5.0501 40.375 6.1251 40.025 7.1001C39.75 7.8751 39.025 8.3501 38.25 8.3501Z" fill="white"/>
                                    <path d="M21.85 29.9999V25.8249C21.85 20.6249 25.525 18.4999 30.025 21.0999L33.65 23.1999L37.275 25.2999C41.775 27.8999 41.775 32.1499 37.275 34.7499L33.65 36.8499L30.025 38.9499C25.525 41.5499 21.85 39.4249 21.85 34.2249V29.9999Z" fill="white"/>
                                </svg>
                            </a>
                        <?php } ?>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="page-number">
            <ul>
                <?php
                $big = 999999999;
                $paginate_links = paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $getPost->max_num_pages,
                    'prev_text' => '<',
                    'next_text' => '>',
                    'type' => 'array'
                ));
                ?>
                <div class="page-number">
                    <ul>
                        <?php
                        foreach ($paginate_links as $link) {
                            echo "<li>$link</li>";
                        }
                        ?>
                    </ul>
                </div>
                <?php

                ?>
            </ul>
        </div>
    </section>
</div>