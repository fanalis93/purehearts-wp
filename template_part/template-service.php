<?php
/*Template Name: Service */
get_header();
query_posts(array(
    'post_type' => 'service'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
    <div class='spacer'></div>

    <div class="blog_area">
        <div class="post_thumb">
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
        </div>
        <div class="post_details">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
    </div>
<?php endwhile;
get_footer();
?>