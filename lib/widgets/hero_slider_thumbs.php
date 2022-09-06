<?php
// Hero widget here

namespace Elementor;


class HeroSliderThumbsWidget extends Widget_Base
{


    public function get_name()
    {
        return "hero_slider_thumbs_widget";
    }

    public function get_title()
    {
        return "Hero Slider Thumbs";
    }

    public function get_icon()
    {
        return "eicon-gallery-group";
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
            'slider_thumb_icon',
            [
                'label' => esc_html__('Thumb Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
                'label_block' => true,
            ]
        );

        // $repeater->add_control(
        //     'slider_thumb_number',
        //     [
        //         'label' => esc_html__('Thumb Number', 'purehearts'),
        //         'type' => Controls_Manager::NUMBER,
        //         'default' => esc_html__(1, 'purehearts'),
        //         'label_block' => true,
        //     ]
        // );


        $repeater->add_control(
            'slider_thumb_top_text',
            [
                'label' => esc_html__('Top Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Donate To', 'purehearts'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_thumb_title',
            [
                'label' => esc_html__('Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,

                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_thumb_button_text',
            [
                'label' => esc_html__('Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sample Text', 'purehearts'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'slider_thumb_button_url',
            [
                'label' => esc_html__('Button URL', 'purehearts'),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );


        // $repeater->add_control(
        //     'slider_thumb_bg_image',
        //     [
        //         'label' => esc_html__('Sldier Thumb Background', 'purehearts'),
        //         'type' => Controls_Manager::MEDIA,
        //         'label_block' => true,
        //     ]
        // );

        $repeater->add_control(
            'slider_thumb_side_image',
            [
                'label' => esc_html__('Sldier Side Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );


        $this->add_control(
            'hero_section_sliders_thumbs',
            [
                'label' => esc_html__('Slider Thumbs', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slider_thumb_title' => esc_html__('Title #1', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ slider_thumb_title }}}',
            ]
        );


        $this->add_control(
            'slider_thumb_bg_image',
            [
                'label' => __('Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,

            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $thumb_number = 1;
        $settings = $this->get_settings_for_display();

        $hero_section_sliders_thumbs = $settings['hero_section_sliders_thumbs'];
        $contentimage = $settings['slider_thumb_bg_image']['url'];


?>
        <section class="banner-section">
            <div class="banner-thumbs-carousel">
                <div class="pattern-layer" style="background-image: url(<?php echo $contentimage; ?>)"></div>
                <div class="swiper-container banner-thumbs">
                    <div class="swiper-wrapper">

                        <?php
                        foreach ($hero_section_sliders_thumbs as $slider) {
                        ?>
                            <div class="swiper-slide">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <?php Icons_Manager::render_icon($slider['slider_thumb_icon'], ['aria-hidden' => 'true']); ?>



                                        </div>
                                        <!-- <span></span> -->
                                        <span><?php echo $thumb_number++; ?></span>
                                    </div>
                                    <div class="text">
                                        <span class="top-text"><?php echo $slider['slider_thumb_top_text']; ?></span>
                                        <h3><?php echo $slider['slider_thumb_title']; ?></h3>
                                        <a href="<?php echo $slider['slider_thumb_button_url']['url']; ?>"><?php echo $slider['slider_thumb_button_text']; ?></a>
                                    </div>
                                    <figure class="image-box">
                                        <img src="<?php echo $slider['slider_thumb_side_image']['url']; ?>" alt="" />
                                    </figure>
                                </div>
                            </div>

                        <?php } ?>


                    </div>
                    <div class="swiper-nav-button">
                        <!-- Add Arrows -->
                        <div class="swiper-button-next">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php

    }
}

plugin::instance()->widgets_manager->register_widget_type(new HeroSliderThumbsWidget);
