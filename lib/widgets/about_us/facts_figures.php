<?php
// about widget here

namespace Elementor;


class FactsFigures extends Widget_Base
{


    public function get_name()
    {
        return "facts_figures";
    }

    public function get_title()
    {
        return "Facts & Figures Widget";
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
            'facts_figures_section',
            [
                'label' => __('Facts & Figures Widget Content', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_bg_image',
            [
                'label' => __('Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,

            ]
        );

        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,

            ]
        );

        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,

            ]
        );


        $repeater = new Repeater();
        $repeater->add_control(
            'figures_caption',
            [
                'label' => __('Figures Caption', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Volunteers',
            ]
        );
        $repeater->add_control(
            'figures_number',
            [
                'label' => __('Figures Number', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => '278',

            ]
        );
        $repeater->add_control(
            'figures_icon',
            [
                'label' => __('Figures Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,

            ]
        );
        $this->add_control(
            'figures_list',
            [
                'label' => esc_html__('Sponsors', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'figures_caption' => esc_html__('Figures Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ figures_caption }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_bg_image = $settings['section_bg_image']['url'];
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_description = $settings['section_description'];
        $figures_list = $settings['figures_list'];


?>
        <!-- funfact-section -->
        <section class="funfact-section alternat-2 centred" style="background-image: url(<?php echo $section_bg_image; ?>);">
            <div class="auto-container">
                <div class="sec-title light centred">
                    <span class="top-text"><?php echo $section_title; ?></span>
                    <h2><?php echo $section_heading; ?></h2>
                    <p><?php echo $section_description; ?></p>
                </div>
                <div class="row clearfix">
                    <?php foreach ($figures_list as $figure) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <?php Icons_Manager::render_icon($figure['figures_icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php echo $figure['figures_number']; ?>"><?php echo $figure['figures_number']; ?></span>
                                    </div>
                                    <h4><?php echo $figure['figures_caption']; ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->

<?php

    }
}

plugin::instance()->widgets_manager->register_widget_type(new FactsFigures);
