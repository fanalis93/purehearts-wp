<?php
// Urgent Case widget here

namespace Elementor;

class BlogWidget extends Widget_Base
{
    public function get_name()
    {
        return "blog_widget";
    }

    public function get_title()
    {
        return "Blog Widget";
    }

    public function get_icon()
    {
        return "eicon-kit-details";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'blog_widget_content',
            [
                'label' => __('Blog Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Title',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Background Image', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];

?>

        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-text"><?php echo $section_title; ?></span>
                    <h2><?php echo $section_heading; ?></h2>
                </div>
                <?php
                $terms = get_terms(
                    array(
                        'taxonomy'   => 'blog-category',
                        'hide_empty' => true,
                    )
                );
                if (!empty($terms) && is_array($terms)) {

                    $i = 1;

                    foreach ($terms as $term) {
                ?>
                        <div class="row clearfix">

                            <?php
                            $args = (array(
                                'post_type' => 'blog',
                                'cat' => $term->id,
                                'showposts' => 3
                            ));
                            $the_query = new \WP_Query($args);
                            ?>
                            <?php while ($the_query->have_posts()) :
                                $the_query->the_post(); ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <a href="blog-details.html"><?php echo get_the_post_thumbnail(); ?></a>
                                            </figure>
                                            <div class="content-box">
                                                <div class="text">
                                                    <span class="post-date"><?php the_field('date'); ?></span>
                                                    <div class="category">
                                                        <a href="blog-details.html"># <?php echo $term->name; ?></a>
                                                    </div>
                                                    <h3>
                                                        <a href="blog-details.html"><?php the_title(); ?></a>
                                                    </h3>
                                                    <p>
                                                        <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                                                    </p>
                                                </div>
                                                <div class="info clearfix">
                                                    <div class="link-box pull-left">
                                                        <a href="blog-details.html">More Details</a>
                                                    </div>
                                                    <div class="comment-box pull-right">
                                                        <a href="blog-details.html"><i class="far fa-comment"></i>08 Cmts</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            endwhile; ?>
                        </div>
                <?php
                    }
                }
                ?>


            </div>
        </section>
        <!-- news-section end -->
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new BlogWidget);
