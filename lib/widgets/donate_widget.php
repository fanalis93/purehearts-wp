<?php
// Urgent Case widget here

namespace Elementor;

class DonateWidget extends Widget_Base
{
    public function get_name()
    {
        return "donate_widget";
    }

    public function get_title()
    {
        return "Donate Widget";
    }

    public function get_icon()
    {
        return "eicon-favorite";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'donate_content_section',
            [
                'label' => __('Donate Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'donate_bg_image',
            [
                'label' => esc_html__('Background Image', 'plugin-name'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'donate_top_text',
            [
                'label' => esc_html__('Top Text', 'plugin-name'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Sample Top Text',
            ]
        );
        $this->add_control(
            'donate_title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Title',

            ]
        );






        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $donate_bg_image = $settings['donate_bg_image']['url'];
        $donate_top_text = $settings['donate_top_text'];
        $donate_title = $settings['donate_title'];

?>

        <!-- donate-case-section -->
        <section class="case-section">
            <div class="auto-container">
                <div class="tabs-box">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                            <div class="title-inner text-right">
                                <div class="sec-title">
                                    <span class="top-text"><?php echo $donate_top_text; ?></span>
                                    <h2><?php echo $donate_title; ?></h2>
                                </div>
                                <div class="tab-btn-box">
                                    <ul class="tab-btns tab-buttons clearfix">




                                        <?php



                                        // Get the taxonomy's terms
                                        $terms = get_terms(
                                            array(
                                                'taxonomy'   => 'donation-category',
                                                'hide_empty' => true,
                                            )
                                        );

                                        // Check if any term exists
                                        if (!empty($terms) && is_array($terms)) {
                                            // add links for each category
                                            $y = 1;
                                            foreach ($terms as $term) { ?>

                                                <li class="tab-btn <?php if ($y == 1) {
                                                                        echo "active-btn";
                                                                    } ?>" data-tab="#<?php echo $term->name; ?>">
                                                    <h5> <?php echo $term->name; ?></h5>
                                                    <div class="icon">
                                                        <i class="fal fa-angle-left"></i>
                                                    </div>
                                                </li>


                                        <?php
                                                $y++;
                                            }
                                        }
                                        ?>




                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                            <div class="tabs-content">

                                <?php
                                if (!empty($terms) && is_array($terms)) {

                                    $i = 1;

                                    foreach ($terms as $term) { ?>


                                        <div class="tab <?php if ($i == 1) {
                                                            echo "active-tab";
                                                        } ?>" id="<?php echo $term->name; ?>">
                                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">


                                                <?php
                                                $args = array(
                                                    'post_type' => 'donation',
                                                    'cat' => $term->id,
                                                    'posts_per_page' => 5,
                                                    'order' => 'ASC',
                                                );

                                                // The Query
                                                $the_query = new \WP_Query($args);

                                                // The Loop
                                                if ($the_query->have_posts()) {



                                                    while ($the_query->have_posts()) {
                                                        $the_query->the_post();

                                                ?>


                                                        <div class="case-block-one ">
                                                            <div class=" inner-box">
                                                                <figure class="image-box">
                                                                    <?php echo get_the_post_thumbnail(); ?>
                                                                </figure>
                                                                <div class="lower-content">
                                                                    <div class="shape" style="
                                                            background-image: url(assets/images/shape/shape-11.png);
                                                        "></div>
                                                                    <div class="donate-amount clearfix">
                                                                        <div class="amount-box">
                                                                            <div class="icon-box">
                                                                                <i class="fas fa-dollar-sign"></i>
                                                                            </div>
                                                                            <h5>chirity rised</h5>
                                                                            <div class="price">
                                                                                $<?php the_field('raised_amount'); ?> <span>/ $<?php the_field('charity_target_amount'); ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="percentage-box">
                                                                            <div class="bar">
                                                                                <div class="bar-inner count-bar" data-percent="53%"></div>
                                                                            </div>
                                                                            <div class="count-text">53%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inner">
                                                                        <div class="text">
                                                                            <div class="category">
                                                                                <a href="donation-details.html"># <?php echo $term->name; ?></a>
                                                                            </div>
                                                                            <h3>
                                                                                <a href="donation-details.html"><?php echo get_the_title(); ?></a>
                                                                            </h3>
                                                                            <p>
                                                                                <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                                                                            </p>
                                                                        </div>
                                                                        <ul class="info-box clearfix">
                                                                            <li>
                                                                                <i class="far fa-calendar-alt"></i>
                                                                                <h5>Days</h5>
                                                                                <p><?php the_field('days'); ?> Days Left</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fas fa-users"></i>
                                                                                <h5><?php the_field('suppoters'); ?>+</h5>
                                                                                <p>Suppoters</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>






                                                <?php



                                                    }
                                                } else {
                                                    // no posts found
                                                }
                                                /* Restore original Post Data */
                                                wp_reset_postdata();







                                                ?>



                                            </div>
                                        </div>


                                <?php

                                        $i++;
                                    }
                                }


                                ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- case-section end -->





<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new DonateWidget);
