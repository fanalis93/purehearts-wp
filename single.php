<?php

/*************
template for displaying post
 */
get_header();
?>


<section id="body_area">
    <div class=" container">
        <!-- <h1 style="text-align: center; margin-bottom: 40px;font-family: 'Quicksand', sans-serif;">Blog Posts</h1> -->
        <div class=" row">
            <div class="col-md-9">
                <?php get_template_part('template_part/post_setup');  ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
