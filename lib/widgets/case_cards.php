<?php
// Urgent Case widget here

namespace Elementor;

class CaseCardsWidget extends Widget_Base
{
    public function get_name()
    {
        return "case_cards";
    }

    public function get_title()
    {
        return "Case Card Widget";
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
            'case_content_section',
            [
                'label' => __('Case Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'card_bg_img',
            [
                'label' => __('Card Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'card_title',
            [
                'label' => __('Card Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'card_heading',
            [
                'label' => __('Card Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'card_description',
            [
                'label' => __('Card Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'card_raised_amount',
            [
                'label' => __('Raised Donation', 'purehearts'),
                'type' => Controls_Manager::NUMBER,
                'default' => 1000,
            ]
        );

        $this->add_control(
            'card_target_amount',
            [
                'label' => __('Target Donation Amount', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 4000,
            ]
        );

        $this->add_control(
            'remaining_days',
            [
                'label' => esc_html__('Remaining Day(s)', 'plugin-name'),
                'type' => Controls_Manager::NUMBER,
                'default' => 20,
            ]
        );

        $this->add_control(
            'supporter_count',
            [
                'label' => esc_html__('Supporter Counter', 'plugin-name'),
                'type' => Controls_Manager::NUMBER,
                'default' => 40,
            ]
        );



        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $card_bg_img = $settings['card_bg_img']['url'];
        $card_title = $settings['card_title'];
        $card_heading = $settings['card_heading'];
        $card_description = $settings['card_description'];
        $card_raised_amount = $settings['card_raised_amount'];
        $card_target_amount = $settings['card_target_amount'];
        $remaining_days = $settings['remaining_days'];
        $supporter_count = $settings['supporter_count'];

?>
        <div class="owl-carousel owl-theme owl-dots-none">
            <div class="case-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="<?php echo $card_bg_img; ?>" alt="" />
                    </figure>
                    <div class="lower-content">
                        <div class="shape" style="
                                background-image: url(assets/images/shape/shape-11.png);
                              "></div>
                        <div class="donate-amount clearfix">
                            <div class="amount-box">
                                <div class="icon-box">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <h5>Charity Raised</h5>
                                <div class="price">
                                    $<?php echo $card_raised_amount; ?> <span>/ $<?php echo $card_target_amount; ?></span>
                                </div>
                            </div>
                            <div class="percentage-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="53%"></div>
                                </div>
                                <div class="count-text">53%</div>
                            </div>
                        </div>
                        <div class="inner">
                            <div class="text">
                                <div class="category">
                                    <a href="donation-details.html"># <?php echo $card_title; ?></a>
                                </div>
                                <h3>
                                    <a href="donation-details.html"><?php echo $card_heading; ?></a>
                                </h3>
                                <p>
                                    <?php echo $card_description; ?>
                                </p>
                            </div>
                            <ul class="info-box clearfix">
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <h5>Days</h5>
                                    <p><?php echo $remaining_days; ?> Days</p>
                                </li>
                                <li>
                                    <i class="fas fa-users"></i>
                                    <h5><?php echo $supporter_count; ?>+</h5>
                                    <p>Suppoters</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new CaseCardsWidget);
