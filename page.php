<?php

/*************
template for displaying pages
 */
get_header();
?>


<section id="body_area">
    <div class=" container">
        <div class=" row">
            <div class="col-md-9">
                <!-- <h1>this</h1> -->

                <?php get_template_part('template_part/blog_setup');
                ?>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
