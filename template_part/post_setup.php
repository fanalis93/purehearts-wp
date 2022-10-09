<?php if (have_posts()) :
    while (have_posts()) : the_post();
        echo "<div class='spacer'></div>";
?>

        <div class="blog_area">
            <?php if (has_post_thumbnail($post->ID)) { ?>
                <div class="post_thumb">
                    <a href="<?php the_permalink(); ?>"><?php
                                                        global $post;
                                                        $author_id = $post->post_author;
                                                        echo the_post_thumbnail('post-thumbnails', 'thumbnail');

                                                        echo
                                                        get_the_author_meta('nicename', $author_id);
                                                        ?></a>
                </div>
            <?php
            } else {
            ?>
                <div class="post_thumb" style="display: none;"></div>
            <?php
            }
            ?>
            <div class="post_details">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_content(); ?>
            </div>
        </div>
        <!-- // comments -->

        <!-- <?php include('short-comments.php'); ?> -->
<?php endwhile;
else :
    _e('No post found');
endif; ?>