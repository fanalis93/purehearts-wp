<?php
// Urgent Case widget here

namespace Elementor;

class RecentDonor extends Widget_Base
{
    public function get_name()
    {
        return "recent_donor";
    }

    public function get_title()
    {
        return "Recent Donor Details Widget";
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
            'recent_donor_content_section',
            [
                'label' => __('Recent Donor Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Recent Donors',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Thousands of Donors',
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'donor_image',
            [
                'label' => __('Donor Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'donor_name',
            [
                'label' => __('Donor Name', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'donor_location',
            [
                'label' => __('Donor Location', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'donation_amount',
            [
                'label' => __('Donation Amount', 'purehearts'),
                'type' => Controls_Manager::NUMBER,
                'default' => 200,
            ]
        );
        $this->add_control(
            'donor_list',
            [
                'label' => esc_html__('Donor List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'donor_name' => esc_html__('Donor Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ donor_name }}}',
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $donor_list = $settings['donor_list'];

?>
        <!-- recent-case-section -->
        <div class="auto-container">
            <div class="inner-box">
                <div class="inner">
                    <div class="sec-title centred light">
                        <span class="top-text"><?php echo $section_title; ?></span>
                        <h2>
                            <?php echo $section_heading; ?>
                        </h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                        <?php foreach ($donor_list as $donor) { ?>
                            <div class="single-item">
                                <figure class="image-box">
                                    <img src="<?php echo $donor['donor_image']['url']; ?>" alt="" />
                                </figure>
                                <div class="text">
                                    <h3><?php echo $donor['donor_name']; ?>, <span><?php echo $donor['donor_location']; ?></span></h3>
                                    <h6>Donated $<?php echo $donor['donation_amount']; ?></h6>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- recent-case-section end -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new RecentDonor);
