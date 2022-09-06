<?php
// about widget here

namespace Elementor;


class AboutSectionWidget extends Widget_Base
{


    public function get_name()
    {
        return "about_widget";
    }

    public function get_title()
    {
        return "About Section Widget";
    }

    public function get_icon()
    {
        return "eicon-favorite";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }


    //public function get_script_depends() {}

    //public function get_style_depends() {}

    protected function _register_controls()
    {

        $this->start_controls_section(
            'about_content_section',
            [
                'label' => __('About Widget Content', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        // about section background image
        $this->add_control(
            'about_section_bg_image',
            [
                'label' => __('Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,

            ]
        );

        // about main image
        $this->add_control(
            'about_main_image',
            [
                'label' => esc_html__('Main Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,

            ]
        );

        // about top left 
        $this->add_control(
            'about_top_left_image',
            [
                'label' => __('About Top Left Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,


            ]
        );

        // about bottom text
        $this->add_control(
            'about_bottom_text',
            [
                'label' => __('About Bottom Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,

            ]
        );
        // about bottom icon
        $this->add_control(
            'about_bottom_icon',
            [
                'label' => esc_html__('Bottom Text Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
            ]
        );
        /*----------------------------------------------------------------
        RIGHT SIDE WIDGETS
        *---------------------------------------------------------------*/
        // right top titlte
        $this->add_control(
            'right_top_title',
            [
                'label' => __('Right Description Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => 'About PureHearts',

            ]
        );

        // right heading
        $this->add_control(
            'right_heading',
            [
                'label' => __('Heading', 'purehearts'),
                'type' => Controls_Manager::TEXT,

            ]
        );

        // right description
        $this->add_control(
            'right_description',
            [
                'label' => __('Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,

            ]
        );
        // right bottom button text
        $this->add_control(
            'right_button_text',
            [
                'label' => __('Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,

            ]
        );
        // right bottom button url
        $this->add_control(
            'right_button_url',
            [
                'label' => __('Button URL', 'purehearts'),
                'type' => Controls_Manager::URL,

            ]
        );

        $repeater = new Repeater();

        // right repeater card icon
        $repeater->add_control(
            'right_card_icon',
            [
                'label' => __('Button URL', 'purehearts'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
                'label_block' => true,

            ]
        );
        // right repeater card counter
        $repeater->add_control(
            'right_card_counter',
            [
                'label' => __('Button Counter', 'purehearts'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6000,

            ]
        );
        // right repeater card title
        $repeater->add_control(
            'right_card_title',
            [
                'label' => __('Button Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Title',

            ]
        );
        $this->add_control(
            'about_right_card',
            [
                'label' => esc_html__('About Right Card', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'right_card_title' => esc_html__('Title #1', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ right_card_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        $about_right_card = $settings['about_right_card'];
        $about_section_bg_image = $settings['about_section_bg_image']['url'];
        $about_main_image = $settings['about_main_image']['url'];
        $about_top_left_image = $settings['about_top_left_image']['url'];
        $about_bottom_icon = $settings['about_bottom_icon'];
        $about_bottom_text = $settings['about_bottom_text'];
        $right_top_title = $settings['right_top_title'];
        $right_heading = $settings['right_heading'];
        $right_description = $settings['right_description'];
        $right_button_text = $settings['right_button_text'];
        $right_button_url = $settings['right_button_url']['url'];

?>
        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="pattern-layer" style="background-image: url(<?php echo $about_section_bg_image; ?>)"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1">
                                    <img src="<?php echo $about_main_image; ?>" alt="" />
                                </figure>
                                <figure class="image image-2">
                                    <img src="<?php echo $about_top_left_image; ?>" alt="" />
                                </figure>
                                <figure class="image image-3">
                                    <img src="/assets/images/icons/heart-2.png" alt="" />
                                </figure>
                                <figure class="image image-4">
                                    <img src="/assets/images/icons/heart-3.png" alt="" />
                                </figure>
                                <figure class="image image-5">
                                    <img src="/assets/images/icons/imoji-1.png" alt="" />
                                </figure>
                                <div class="text">
                                    <h4>
                                        <?php Icons_Manager::render_icon($about_bottom_icon, ['aria-hidden' => 'true']); ?>
                                        <?php echo $about_bottom_text; ?>

                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="sec-title">
                                        <span class="top-text"><?php echo $right_top_title ?></span>
                                        <h2><?php echo $right_heading ?></h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <?php echo $right_description ?>
                                        </p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="<?php echo $right_button_url ?>" class="theme-btn btn-one"><?php echo $right_button_text ?></a>
                                    </div>
                                </div>
                                <div class="funfact-inner">
                                    <?php
                                    foreach ($about_right_card as $cards) {
                                    ?>
                                        <div class="counter-block-one wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <?php Icons_Manager::render_icon($cards['right_card_icon'], ['aria-hidden' => 'true']); ?>
                                                </div>
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="1500" data-stop="<?php echo $cards['right_card_counter'] ?>">0</span>
                                                </div>
                                                <h4><?php echo $cards['right_card_title'] ?></h4>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

<?php

    }
}

plugin::instance()->widgets_manager->register_widget_type(new AboutSectionWidget);
