<?php
// Hero widget here

namespace Elementor;


class FirstWidget extends Widget_Base
{


    public function get_name()
    {
        return "first_widget";
    }

    public function get_title()
    {
        return "My FirstWidget";
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
            'first_content_section',
            [
                'label' => __(' Widget Content', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        // hero title

        $this->add_control(
            'purehearts_hero_section_title',
            [
                'label' => esc_html__('Hero Title', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Type Title here', 'purehearts'),
            ]
        );

        //about header content

        $this->add_control(
            'hero_section_content',
            [
                'label' => __('Content', 'purehearts'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p>' . esc_html__('There are unlimited career opportunities in real estate and an abundance of talent ready to pursue them. We’re the industry’s first real estate labor marketplace that brings the two together using AI.', 'purehearts') . '</p>',

            ]
        );


        $this->add_control(
            'hero_section_image',
            [
                'label' => __('Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,

            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        $title = $settings['purehearts_hero_section_title'];
        $content = $settings['hero_section_content'];
        $contentimage = $settings['hero_section_image']['url'];


?>
        <div class="hero-content">
            <h1 class="title"><?php echo $title; ?></h1>
            <p><?php echo $content; ?></p>
            <img src="<?php echo $contentimage; ?>" alt="">
        </div>

<?php

    }
}

plugin::instance()->widgets_manager->register_widget_type(new FirstWidget);
