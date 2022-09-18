<?php
// Urgent Case widget here

namespace Elementor;

class ContirbuteCard extends Widget_Base
{
    public function get_name()
    {
        return "contribute_card";
    }

    public function get_title()
    {
        return "Contribute Card";
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
            'contribute_card_section',
            [
                'label' => __('Contirbute Cards Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_heading',
            [
                'label' => esc_html__('Section Heading', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => esc_html__('Section Description', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'card_img',
            [
                'label' => esc_html__('Card Image', 'plugin-name'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'card_icon',
            [
                'label' => esc_html__('Card ICON', 'plugin-name'),
                'type' => Controls_Manager::ICONS,
            ]
        );

        $repeater->add_control(
            'card_title',
            [
                'label' => esc_html__('Card Title', 'plugin-name'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'card_link_text',
            [
                'label' => esc_html__('Card Link Text', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'card_link_url',
            [
                'label' => esc_html__('Card Link URL', 'plugin-name'),
                'type' => Controls_Manager::URL,
            ]
        );

        $repeater->add_control(
            'card_description',
            [
                'label' => esc_html__('Card Descripion (on-hover)', 'plugin-name'),
                'type' => Controls_Manager::WYSIWYG,
            ]
        );


        $this->add_control(
            'card_list',
            [
                'label' => esc_html__('Card List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),

            ]
        );








        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_description = $settings['section_description'];
        $section_heading = $settings['section_heading'];
        $card_list = $settings['card_list'];

?>

        <div class="content-three">
            <div class="text">
                <h3><?php echo $section_heading; ?></h3>
                <p><?php echo $section_description; ?></p>
            </div>
            <div class="inner-box">
                <div class="row clearfix">
                    <?php foreach ($card_list as $card) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <figure class="image-box"><img src="<?php echo $card['card_img']['url']; ?>" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box"><?php Icons_Manager::render_icon($card['card_icon'], ['aria-hidden' => 'true']); ?></div>
                                    <h3><?php echo $card['card_title']; ?></h3>
                                    <h6><a href="<?php echo $card['card_link_url']['url']; ?>"><?php echo $card['card_link_text']; ?></a></h6>
                                </div>
                                <div class="overlay-content">
                                    <p><?php echo $card['card_description']; ?></p>
                                    <h6><a href="<?php echo $card['card_link_url']['url']; ?>"><?php echo $card['card_link_text']; ?></a></h6>
                                    <div class="icon-box"><?php Icons_Manager::render_icon($card['card_icon'], ['aria-hidden' => 'true']); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>





<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new ContirbuteCard);
