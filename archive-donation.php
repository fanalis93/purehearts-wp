<?php
//  header
// include('header.php');
get_header();
?>

<section class="page-title" style="background-image: url(assets/images/background/12.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>Donations</h1>
            </div>
        </div>
    </div>
</section>
<section id="body_area">
    <div class=" container">

        <div class=" row">
            <div class="col-md-12">
                <!-- <h1 class="title">Blog Posts</h1> -->


                <?php get_template_part('template_part/blog_setup'); ?>
            </div>


        </div>
    </div>
</section>

<?php
get_footer();
