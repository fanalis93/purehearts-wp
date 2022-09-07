<?php
// Hero widget here

namespace Elementor;


class HeroSliderWidget extends Widget_Base
{


    public function get_name()
    {
        return "hero_slider_widget";
    }

    public function get_title()
    {
        return "Hero Slider";
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
            'heroslider_content_section',
            [
                'label' => __('Content', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new Repeater();


        $repeater->add_control(
            'slider_short_title',
            [
                'label' => esc_html__('Short Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Title', 'purehearts'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'slider_sub_title',
            [
                'label' => esc_html__('Sub Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sub Title', 'purehearts'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_title',
            [
                'label' => esc_html__('Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Title', 'purehearts'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_description',
            [
                'label' => esc_html__('Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,

                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_button_text',
            [
                'label' => esc_html__('Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_button_url',
            [
                'label' => esc_html__('Button URL', 'purehearts'),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_bg_image',
            [
                'label' => esc_html__('Sldier Background', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );


        $this->add_control(
            'hero_section_sliders',
            [
                'label' => esc_html__('Slider', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_short_title' => esc_html__('Title #1', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ slider_short_title }}}',
            ]
        );









        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        $hero_section_sliders = $settings['hero_section_sliders'];


?>



        <!-- banner-section -->
        <section class="banner-section">
            <div class="banner-carousel">
                <div class="swiper-container banner-content">
                    <div class="swiper-wrapper">
                        <?php

                        foreach ($hero_section_sliders as $slider) {




                        ?>
                            <div class="swiper-slide">



                                <div class="image-layer" style="background-image: url(<?php echo $slider['slider_bg_image']['url']; ?>);">

                                </div>
                                <div class="auto-container">
                                    <div class="content-box">
                                        <h2><?php echo $slider['slider_short_title']; ?></h2>
                                        <span><?php echo $slider['slider_sub_title']; ?></span>
                                        <h2><?php echo $slider['slider_title']; ?></h2>
                                        <p><?php echo $slider['slider_description']; ?></p>
                                        <div class="btn-box">
                                            <a href="<?php echo $slider['slider_button_url']['url']; ?>" class="banner-btn"><?php echo $slider['slider_button_text']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="othre-text centred">
                                    <span class="animation_text_word"></span>
                                </div>
                            </div>


                        <?php } ?>
                    </div>
                    <div class="swiper-nav-button">
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


<?php

    }
}

plugin::instance()->widgets_manager->register_widget_type(new HeroSliderWidget);
