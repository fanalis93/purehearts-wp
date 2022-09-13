<?php
// Urgent Case widget here

namespace Elementor;

class FAQ extends Widget_Base
{
    public function get_name()
    {
        return "faq_section";
    }

    public function get_title()
    {
        return "FAQ Section Widget";
    }

    public function get_icon()
    {
        return "eicon-instagram-video";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'faq_section_content',
            [
                'label' => __('FAQ Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_img',
            [
                'label' => __('Section Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'add_help_card',
            [
                'label' => esc_html__('Add Help Card?', 'plugin-name'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'your-plugin'),
                'label_off' => esc_html__('Hide', 'your-plugin'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'help_card_query',
            [
                'label' => __('Help Card Query', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'help_card_description',
            [
                'label' => __('Help Card Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'help_card_btn_text',
            [
                'label' => __('Help Card Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'help_card_btn_url',
            [
                'label' => __('Help Card Button URL', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'faq_question',
            [
                'label' => __('FAQ Question', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'faq_answer',
            [
                'label' => __('FAQ Answer', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'faq_list',
            [
                'label' => esc_html__('FAQ List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_question' => esc_html__('Question?', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ faq_question }}}',
            ]
        );




        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $faq_list = $settings['faq_list'];
        $section_img = $settings['section_img']['url'];
        $add_help_card = $settings['add_help_card'];
        $help_card_query = $settings['help_card_query'];
        $help_card_description = $settings['help_card_description'];
        $help_card_btn_text = $settings['help_card_btn_text'];
        $help_card_btn_url = $settings['help_card_btn_url']['url'];

?>
        <!-- faq-page-section -->
        <section class="faq-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_10">
                            <div class="content-box">
                                <figure class="image"><img src="<?php echo $section_img; ?>" alt=""></figure>

                                <div class="text wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="<?php if ($add_help_card == 'yes') {
                                                                                                                                                echo '';
                                                                                                                                            } else {
                                                                                                                                                echo 'display: none';
                                                                                                                                            } ?>">
                                    <div class="icon-box"><i class="icon-search-1"></i></div>
                                    <h3><?php echo $help_card_query; ?></h3>
                                    <p><?php echo $help_card_description; ?></p>
                                    <a href="<?php echo $help_card_btn_url; ?>"><?php echo $help_card_btn_text; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <ul class="accordion-box">
                            <?php foreach ($faq_list as $faq_list) { ?>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="icon-right-arrow"></i></div>
                                        <h5><i class="icon-question"></i><?php echo $faq_list['faq_question']; ?></h5>
                                    </div>
                                    <div class="acc-content current" style="display: none;">
                                        <div class="text">
                                            <p><?php echo $faq_list['faq_answer']; ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-page-section end -->
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new FAQ);
