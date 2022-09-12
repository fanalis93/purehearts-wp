<?php
// Urgent Case widget here

namespace Elementor;

class FeatureSection extends Widget_Base
{
    public function get_name()
    {
        return "feature_section";
    }

    public function get_title()
    {
        return "Feature Section Widget";
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
            'feature_section_content',
            [
                'label' => __('Feature Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'feature_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Title',
            ]
        );
        $repeater->add_control(
            'feature_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Description',
            ]
        );
        $repeater->add_control(
            'feature_icon',
            [
                'label' => __('Section Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'feature_button_text',
            [
                'label' => __('Section Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Read MOre',

            ]
        );
        $repeater->add_control(
            'feature_button_url',
            [
                'label' => __('Section Button URL', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );


        $this->add_control(
            'feature_list',
            [
                'label' => esc_html__('Feature List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $feature_list = $settings['feature_list'];

?>
        <!-- feature-section -->
        <section class="feature-section centred">
            <div class="fluid-container">
                <div class="row clearfix">
                    <?php foreach ($feature_list as $feature_list) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <span>M</span>
                                    <div class="icon-box">
                                        <?php Icons_Manager::render_icon($feature_list['feature_icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                    <h3><?php echo $feature_list['feature_title']; ?></h3>
                                    <p><?php echo $feature_list['feature_description']; ?></p>
                                    <div class="btn-box"><a href="<?php echo $feature_list['feature_button_url']; ?>" class="theme-btn btn-one"><?php echo $feature_list['feature_button_text']; ?></a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new FeatureSection);
