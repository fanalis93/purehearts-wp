<?php
// Urgent Case widget here

namespace Elementor;

class DonateWidget extends Widget_Base
{
    public function get_name()
    {
        return "donate_widget";
    }

    public function get_title()
    {
        return "Donate Widget";
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
            'donate_content_section',
            [
                'label' => __('Donate Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'donate_bg_image',
            [
                'label' => esc_html__('Background Image', 'plugin-name'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'donate_top_text',
            [
                'label' => esc_html__('Top Text', 'plugin-name'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Sample Top Text',
            ]
        );
        $this->add_control(
            'donate_title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Title',

            ]
        );
        $this->add_control(
            'donate_description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => 'Sample Desctiption',

            ]
        );
        $this->add_control(
            'donate_target_amount',
            [
                'label' => esc_html__('Target Amount', 'plugin-name'),
                'type' => Controls_Manager::NUMBER,
                'default' => 5000,

            ]
        );
        $this->add_control(
            'donate_raised_amount',
            [
                'label' => esc_html__('Raised Amount', 'plugin-name'),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,

            ]
        );
        $this->add_control(
            'donate_button_url',
            [
                'label' => esc_html__('Donate Button URL', 'plugin-name'),
                'type' => Controls_Manager::URL,

            ]
        );

        $this->add_control(
            'insert_remaining_day',
            [
                'label' => esc_html__('Insert Remaining Day?', 'plugin-name'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('YES', 'purehearts'),
                'label_off' => esc_html__('NO', 'purehearts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'remaining_days',
            [
                'label' => esc_html__('Remaining Day(s)', 'plugin-name'),
                'type' => Controls_Manager::NUMBER,
                'default' => 20,
                'condition' => [
                    'insert_remaining_day' => 'yes',
                ],
            ]
        );


        $this->add_control(
            'supporter_count',
            [
                'label' => esc_html__('Supporter Counter', 'plugin-name'),
                'type' => Controls_Manager::NUMBER,
                'default' => 11,

            ]
        );
        $this->add_control(
            'share_url',
            [
                'label' => esc_html__('Share URL', 'plugin-name'),
                'type' => Controls_Manager::URL,

            ]
        );



        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $donate_bg_image = $settings['donate_bg_image']['url'];
        $donate_top_text = $settings['donate_top_text'];
        $donate_title = $settings['donate_title'];
        $donate_description = $settings['donate_description'];
        $donate_target_amount = $settings['donate_target_amount'];
        $donate_raised_amount = $settings['donate_raised_amount'];
        $insert_remaining_day = $settings['insert_remaining_day'];
        $remaining_days = $settings['remaining_days'];
        $supporter_count = $settings['supporter_count'];
        $share_url = $settings['share_url']['url'];
        $donate_button_url = $settings['donate_button_url']['url'];
?>
        <!-- donate-section -->

        <div class="urgent-case-block">
            <div class="upper-box" style="
                                background-image: url(<?php echo $donate_bg_image; ?>);
                                ">
                <div class="sec-title light">
                    <span class="top-text"><?php echo $donate_top_text; ?></span>
                    <h2><?php echo $donate_title; ?></h2>
                </div>
                <div class="text">
                    <p>
                        <?php echo $donate_description; ?>
                    </p>
                </div>
                <div class="timer">
                    <div class="cs-countdown" data-countdown="06/24/2021 05:06:59"></div>
                </div>
            </div>
            <div class="lower-box">
                <div class="pattern-layer" style="
                        background-image: url(assets/images/shape/shape-7.png);
                      "></div>
                <div class="donate-inner clearfix">
                    <div class="pattern-layer-2" style="
                          background-image: url(assets/images/shape/shape-8.png);
                        "></div>
                    <div class="amount-box">
                        <div class="icon-box">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h5>Charity Raised</h5>
                        <div class="price"> $<?php echo $donate_raised_amount; ?> <span>/ $<?php echo $donate_target_amount; ?></span>
                        </div>
                    </div>
                    <div class="percentage-box">
                        <div class="bar"></div>
                        <h5>53%</h5>
                    </div>
                    <div class="btn-box">
                        <button onclick="location.href='<?php echo $donate_button_url; ?>'" type="button">
                            Donate Now</button>
                    </div>
                </div>
                <ul class="info-box clearfix">
                    <li style="<?php if ($insert_remaining_day == 'yes') {
                                    echo '';
                                } else {
                                    echo 'display: none';
                                } ?>
                    ">
                        <i class="far fa-calendar-alt"></i>
                        <h5>Days</h5>
                        <p><?php echo $remaining_days; ?> Days</p>
                    </li>
                    <li>
                        <i class="fas fa-users"></i>
                        <h5><?php echo $supporter_count; ?>+</h5>
                        <p>Suppoters</p>
                    </li>
                    <li class="share">
                        <i class="fas fa-share-alt"></i>
                        <h5><a href="<?php echo $share_url; ?>">Share</a></h5>
                    </li>
                </ul>
            </div>
        </div>


<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new DonateWidget);
