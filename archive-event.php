<?php
//  header
// include('header.php');
get_header();
?>


<section id="body_area">
    <div class=" container">

        <div class=" row">
            <div class="col-md-12">
                <!-- <h1 class="title">Blog Posts</h1> -->
                <div id="archive_title">
                    <?php
                    the_archive_title('<h1 class="title">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>');
                    the_author_meta('<p class="author_details">', '</p>');

                    ?>
                </div>

                <?php get_template_part('template_part/blog_setup'); ?>
            </div>


        </div>
    </div>
</section>

<?php
get_footer();
