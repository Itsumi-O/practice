<?php get_header(); ?>

<div class="link_list">
    <div class="container kumo_parent">
        <div class="kumo01">
            <a href="<?php echo home_url('/satozuka'); ?>">里塚園</a>
        </div>
        <div class="kumo02">
            <a href="<?php echo home_url('/sumikawa'); ?>">澄川園</a>
        </div>
        <div class="kumo03">
            <p class="news">新着情報</p>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page'=> '5'
            );
            $the_query = new WP_Query($args ); ?>
            <?php if ($the_query->have_posts()) : ?>
            <ul class="news_list">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li><p><?php the_time(get_option('date_format')); ?></p><?php the_title('<a href="'.esc_url(get_permalink()).'">','</a>'); ?></li>
                <?php endwhile; ?>
            </ul>
            <?php endif;
            wp_reset_postdata();
            ?>
            <div class="blog_list">
                <ul>
                    <li><a href="<?php echo home_url('/manmaru_blog') ?>">まんまるブログ一覧はこちら</a></li>
                    <li><a href="<?php echo home_url('/ine_blog') ?>">イネの栽培日記一覧はこちら</a></li>
                </ul>
            </div>
        </div>
        <div class="kumo04">
            <a href="#">園ができるまで</a>
        </div>
        <div class="kumo05">
            <a href="#">みんなの<br>子育て広場</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>