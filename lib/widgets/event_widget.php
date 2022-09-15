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

        
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new BlogWidget);
