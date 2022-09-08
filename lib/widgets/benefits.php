<?php
// Urgent Case widget here

namespace Elementor;

class Benefits extends Widget_Base
{
    public function get_name()
    {
        return "benefits";
    }

    public function get_title()
    {
        return "Benefits Widget";
    }

    public function get_icon()
    {
        return "eicon-help-o";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'benefits_details_content_section',
            [
                'label' => __('Benefits Details Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Benefits of Giving',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Bring More Meaning',
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'The majority have suffered alteration all injected humours randomises. ',
            ]
        );
        $this->add_control(
            'section_button_text',
            [
                'label' => __('Section Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Read More',
            ]
        );
        $this->add_control(
            'section_url',
            [
                'label' => __('Section Button URL', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'pointer_card_icon',
            [
                'label' => __('Card Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,

            ]
        );
        $repeater->add_control(
            'pointer_card_title',
            [
                'label' => __('Card Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Improve Self-Esteem',
            ]
        );
        $repeater->add_control(
            'pointer_card_description',
            [
                'label' => __('Card Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Righteous indignation and dislike mens who beguiled demoralized.',
            ]
        );

        $this->add_control(
            'pointer_card_list',
            [
                'label' => esc_html__('Pointer Card List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'pointer_card_title' => esc_html__('Card Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ pointer_card_title }}}',
            ]
        );



        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_description = $settings['section_description'];
        $section_button_text = $settings['section_button_text'];
        $section_button_url = $settings['section_button_url']['url'];
        $pointer_card_list = $settings['pointer_card_list'];
        $pointer_card_number = 1;

?>
        <!-- benefits-section -->
        <section class="benefits-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="title-inner">
                            <div class="sec-title">
                                <span class="top-text"><?php echo $section_title; ?></span>
                                <h2><?php echo $section_heading; ?></h2>
                            </div>
                            <div class="text">
                                <p>
                                    <?php echo $section_description; ?>
                                </p>
                                <a href="<?php echo $section_button_url; ?>" class="theme-btn btn-one"><?php echo $section_button_text; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="row clearfix">
                                <?php foreach ($pointer_card_list as $list) { ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <span><?php echo $pointer_card_number++; ?></span>
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <?php Icons_Manager::render_icon($list['pointer_card_icon'], ['aria-hidden' => 'true']); ?>
                                                </div>
                                            </div>
                                            <h3><?php echo $list['pointer_card_title']; ?></h3>
                                            <p><?php echo $list['pointer_card_description']; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- benefits-section -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new Benefits);
