<?php
// Hero widget here

namespace Elementor;


class ContactQuickLinks extends Widget_Base
{


    public function get_name()
    {
        return "contact_quicklinks";
    }

    public function get_title()
    {
        return "Contact Quicklinks";
    }

    public function get_icon()
    {
        return "eicon-gallery-group";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'contact_quicklinks_content',
            [
                'label' => __('Contact QuickLinks Content', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => esc_html__('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => esc_html__('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'link_title',
            [
                'label' => esc_html__('Link Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'link_caption',
            [
                'label' => esc_html__('Link Caption', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'link_detail',
            [
                'label' => esc_html__('Link Detail', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'link_icon',
            [
                'label' => esc_html__('Link Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
                'label_block' => true,
            ]
        );



        $this->add_control(
            'link_list',
            [
                'label' => esc_html__('Links', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'link_title' => esc_html__('Link #1', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ link_title }}}',
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $link_list = $settings['link_list'];
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_description = $settings['section_description'];

?>
        <!-- contact-section -->
        <!-- <section class="contact-section sec-pad"> -->
        <!-- <div class="auto-container"> -->
        <!-- <div class="row clearfix"> -->
        <div class="col-lg-12 col-md-12 col-sm-12 inner-column">
            <div class="contact-info-inner">
                <div class="sec-title">
                    <span class="top-text"><?php echo $section_title; ?></span>
                    <h2><?php echo $section_heading; ?></h2>
                    <p><?php echo $section_description; ?></p>
                </div>
                <div class="info-box">
                    <?php foreach ($link_list as $link) { ?>
                        <div class="single-item">
                            <h4><?php echo $link['link_title']; ?></h4>
                            <div class="text">
                                <div class="icon-box">
                                    <?php Icons_Manager::render_icon($link['link_icon'], ['aria-hidden' => 'true']); ?>
                                </div>
                            </div>
                            <p><?php echo $link['link_caption']; ?><br /><a href="tel:23345678901"><?php echo $link['link_detail']; ?></a></p>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        <!-- </section> -->
        <!-- contact-section end -->
<?php

    }
}

plugin::instance()->widgets_manager->register_widget_type(new ContactQuickLinks);
