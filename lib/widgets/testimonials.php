<?php
// Urgent Case widget here

namespace Elementor;

class Testimonials extends Widget_Base
{
    public function get_name()
    {
        return "testimonials_section";
    }

    public function get_title()
    {
        return "Testimonials Widget";
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
            'testimonials_section_content',
            [
                'label' => __('Testmonials Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Testimonials',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Success Stories, To Know About Our Charity',
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'The majority have suffered alteration all injected humours randomises.',
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => 'The majority have suffered alteration all injected humours randomises.',
            ]
        );
        $this->add_control(
            'all_reviews_text',
            [
                'label' => __('Review Page Link Text', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'All Reviews',
            ]
        );
        $this->add_control(
            'all_reviews_url',
            [
                'label' => __('Review Page Link URL', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'bg_image',
            [
                'label' => __('Section Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );


        $repeater = new Repeater();
        $repeater->add_control(
            'reviewer_name',
            [
                'label' => __('Reviewer Name', 'purehearts'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'reviewer_location',
            [
                'label' => __('Reviewer Location', 'purehearts'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'reviewer_image',
            [
                'label' => __('Reviewer Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'review_heading',
            [
                'label' => __('Review Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'review_description',
            [
                'label' => __('Review Description', 'purehearts'),
                'type' => Controls_Manager::WYSIWYG,
            ]
        );

        $this->add_control(
            'review_list',
            [
                'label' => esc_html__('Review List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'reviewer_name' => esc_html__('Review Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ reviewer_name }}}',
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $review_list = $settings['review_list'];
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_description = $settings['section_description'];
        $all_reviews_text = $settings['all_reviews_text'];
        $all_reviews_url = $settings['all_reviews_url']['url'];
        $bg_image = $settings['bg_image']['url'];

?>
        <!-- testimonial-section -->
        <!-- <section class="testimonial-section"> -->
        <!-- <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-24.png)"></div> -->
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                    <div class="content_block_3">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="top-text"><?php echo $section_title; ?></span>
                                <h2><?php echo $section_heading; ?></h2>
                            </div>
                            <div class="text">
                                <p>
                                    <?php echo $section_description; ?>
                                </p>
                                <a href="<?php echo $all_reviews_url; ?>" class="theme-btn btn-one"> <?php echo $all_reviews_text; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="<?php echo $bg_image; ?>" alt="" />
                        </figure>
                        <div class="testimonial-inner">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <?php foreach ($review_list as $review_list) { ?>
                                    <div class="testimonial-block-one">
                                        <div class="text">
                                            <div class="icon-box">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <h3><?php echo $review_list['review_heading']; ?></h3>
                                            <p>
                                                <?php echo $review_list['review_description']; ?>
                                            </p>
                                            <h4><?php echo $review_list['reviewer_name']; ?></h4>
                                            <span class="designation"><?php echo $review_list['reviewer_location']; ?></span>
                                        </div>
                                        <figure class="testimonial-thumb">
                                            <img src="<?php echo $review_list['reviewer_image']['url']; ?>" alt="" />
                                        </figure>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->
        <!-- testimonial-section -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new Testimonials);
