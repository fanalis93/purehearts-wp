<?php
// Urgent Case widget here

namespace Elementor;

class ListElements extends Widget_Base
{
    public function get_name()
    {
        return "list_elements";
    }

    public function get_title()
    {
        return "List Elements";
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
            'list_elements_section',
            [
                'label' => __('List Elements Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_description',
            [
                'label' => esc_html__('List Description (Optional)', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );


        $repeater = new Repeater();
        $repeater->add_control(
            'list_details',
            [
                'label' => esc_html__('List Details', 'plugin-name'),
                'type' => Controls_Manager::WYSIWYG,
            ]
        );

        $this->add_control(
            'list_list',
            [
                'label' => esc_html__('List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

            ]
        );








        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_description = $settings['section_description'];
        $list_list = $settings['list_list']

?>

        <!-- <div class="content-two">
            <div class="row clearfix"> -->
        <div class="col-lg-12 col-md-6 col-sm-12 text-column">
            <div class="text">
                <p><?php echo $section_description; ?></p>
                <ul class="list clearfix">
                    <?php foreach ($list_list as $list) { ?>
                        <li>
                            <?php echo $list['list_details']; ?>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <!-- </div>
        </div> -->




<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new ListElements);
