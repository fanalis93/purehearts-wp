<?php
// Urgent Case widget here

namespace Elementor;

class BenefitsDetails extends Widget_Base
{
    public function get_name()
    {
        return "benefits_details";
    }

    public function get_title()
    {
        return "Benefits Details Widget";
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
        // $repeater = new Repeater();

        // $this->add_control(
        //     'donor_list',
        //     [
        //         'label' => esc_html__('Donor List', 'purehearts'),
        //         'type' => Controls_Manager::REPEATER,
        //         'fields' => $repeater->get_controls(),
        //         'default' => [
        //             [
        //                 'donor_name' => esc_html__('Donor Details', 'purehearts'),

        //             ]
        //         ],
        //         'title_field' => '{{{ donor_name }}}',
        //     ]
        // );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_description = $settings['section_description'];
        $section_button_text = $settings['section_button_text'];
        $section_button_url = $settings['section_button_url']['url'];

?>
        <!-- benefits-section -->
        <div class=" col-md-12 col-sm-12 title-column">
            <div class="title-inner">
                <div class="sec-title">
                    <span class="top-text">Benefits of Giving</span>
                    <h2>Bring More Meaning to Your Life & Family</h2>
                </div>
                <div class="text">
                    <p>
                        The majority have suffered alteration all injected humours
                        randomises.
                    </p>
                    <a href="index.html" class="theme-btn btn-one">Read More</a>
                </div>
            </div>
        </div>

        <!-- benefits-section -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new BenefitsDetails);
