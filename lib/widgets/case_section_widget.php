<?php
// Urgent Case widget here

namespace Elementor;

class CaseSectionWidget extends Widget_Base
{
    public function get_name()
    {
        return "case_widget";
    }

    public function get_title()
    {
        return "Case Section Widget";
    }

    public function get_icon()
    {
        return "eicon-table-of-contents";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'case_content_section',
            [
                'label' => __('Case Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'left_top_text',
            [
                'label' => __('Left Top Text', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'left_top_title',
            [
                'label' => __('Left Top Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );




        $repeater = new Repeater();
        $repeater->add_control(
            'left_bottom_list_text',
            [
                'label' => __('Left Bottom List Text', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'case_list',
            [
                'label' => esc_html__('Lists', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'left_bottom_list_text' => esc_html__('List Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ left_bottom_list_text }}}',
            ]
        );



        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $left_top_text = $settings['left_top_text'];
        $left_top_title = $settings['left_top_title'];
        $case_list = $settings['case_list'];

?>
        <!-- <div class="auto-container">
            <div class="tabs-box"> -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                <div class="title-inner text-right">
                    <div class="sec-title">
                        <span class="top-text"><?php echo $left_top_text; ?></span>
                        <h2><?php echo $left_top_title; ?></h2>
                    </div>
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <?php
                            foreach ($case_list as $list) {
                            ?>
                                <li class="tab-btn" data-tab="#tab-1">
                                    <h5><?php echo $list['left_bottom_list_text']; ?></h5>
                                    <div class="icon">
                                        <i class="fal fa-angle-left"></i>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div>
        </div> -->



<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new CaseSectionWidget);
