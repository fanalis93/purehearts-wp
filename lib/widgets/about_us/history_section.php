<?php
// Urgent Case widget here

namespace Elementor;

class HistorySection extends Widget_Base
{
    public function get_name()
    {
        return "history_section";
    }

    public function get_title()
    {
        return "History Section Widget";
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
            'history_section_content',
            [
                'label' => __('History Section Widget Contents', 'purehearts'),
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



        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>

       
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new HistorySection);
