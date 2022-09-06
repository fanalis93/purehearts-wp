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
            ]
        );
        $this->add_control(
            'donate_title',
            [
                'label' => esc_html__('Title', 'plugin-name'),
                'type' => Controls_Manager::WYSIWYG,
            ]
        );
        $this->add_control(
            'donate_description',
            [
                'label' => esc_html__('Description', 'plugin-name'),
                'type' => Controls_Manager::WYSIWYG,
            ]
        );




        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>
        <!-- donate-section -->

        <div class="right-column">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6">
                        <div class="urgent-case-block">
                            <div class="upper-box" style="
                      background-image: url(assets/images/background/4.jpg);
                    ">
                                <div class="sec-title light">
                                    <span class="top-text">Urgent Cause</span>
                                    <h2>Syria: Millions of People doesn’t Eat All Day</h2>
                                </div>
                                <div class="text">
                                    <p>
                                        Passages of lorem ipsum available the majority have
                                        suffered alteration all form injected humours.
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
                                        <div class="price">$42,000 <span>/ $80,000</span></div>
                                    </div>
                                    <div class="percentage-box">
                                        <div class="bar"></div>
                                        <h5>53%</h5>
                                    </div>
                                    <div class="btn-box">
                                        <button class="donate-box-btn">Donate Now</button>
                                    </div>
                                </div>
                                <ul class="info-box clearfix">
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <h5>Days</h5>
                                        <p>28 Days Left</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-users"></i>
                                        <h5>40+</h5>
                                        <p>Suppoters</p>
                                    </li>
                                    <li class="share">
                                        <i class="fas fa-share-alt"></i>
                                        <h5><a href="index.html">Share</a></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new DonateWidget);
