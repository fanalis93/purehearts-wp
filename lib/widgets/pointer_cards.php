<?php
// Urgent Case widget here

namespace Elementor;

class PointerCards extends Widget_Base
{
    public function get_name()
    {
        return "pointer_cards";
    }

    public function get_title()
    {
        return "Pointer Cards Widget";
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
            'pointer_cards_content_section',
            [
                'label' => __('Pointer Cards Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
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
        $pointer_card_list = $settings['pointer_card_list'];
        // $pointer_card_icon = $settings['pointer_card_icon'];
        // $pointer_card_title = $settings['pointer_card_title'];
        // $pointer_card_description = $settings['pointer_card_description'];
        $pointer_card_number = 1;


?>

        <div class="col-lg-12 col-md-12 col-sm-12 inner-column">
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


<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new PointerCards);
