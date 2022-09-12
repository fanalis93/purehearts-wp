<?php
// Urgent Case widget here

namespace Elementor;

class Contribution extends Widget_Base
{
    public function get_name()
    {
        return "contribution_section";
    }

    public function get_title()
    {
        return "Contribution Section Widget";
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
            'contribution_section_content',
            [
                'label' => __('Contribution Section Widget Contents', 'purehearts'),
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
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Heading',
            ]
        );
        $this->add_control(
            'section_bg_img',
            [
                'label' => __('Section Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );


        $repeater = new Repeater();
        $repeater->add_control(
            'country_name',
            [
                'label' => __('Country Name', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Heading',
            ]
        );
        $repeater->add_control(
            'country_icon',
            [
                'label' => __('Country Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'country_button_text',
            [
                'label' => __('Card Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Explore',
            ]
        );
        $repeater->add_control(
            'country_button_url',
            [
                'label' => __('Card Button Icon', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );
        $repeater->add_control(
            'contribution_amount',
            [
                'label' => __('Amount of contribution done to the country', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => '120K',
            ]
        );



        $this->add_control(
            'country_list',
            [
                'label' => esc_html__('Country List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $country_list = $settings['country_list'];
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_bg_img = $settings['section_bg_img']['url'];

?>
        <!-- contribution-section -->
        <section class="contribution-section centred">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer" style="background-image: url(<?php echo $section_bg_img; ?>);"></div>
                    <div class="sec-title light centred">
                        <span class="top-text"><?php echo $section_title; ?></span>
                        <h2><?php echo $section_heading; ?></h2>
                    </div>
                    <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                        <?php foreach ($country_list as $country) { ?>
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <h5><?php echo $country['contribution_amount']; ?></h5>
                                        <?php Icons_Manager::render_icon($country['country_icon'], ['aria-hidden' => 'true']); ?>
                                    </div>
                                    <h3><?php echo $country['country_name']; ?></h3>
                                    <a href="<?php echo $country['country_button_url']; ?>">
                                        <i class="fa fa-angle-right"></i><?php echo $country['country_button_text']; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- contribution-section end -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new Contribution);
