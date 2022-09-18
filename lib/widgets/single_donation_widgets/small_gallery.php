<?php
// Urgent Case widget here

namespace Elementor;

class SmallGallery extends Widget_Base
{
    public function get_name()
    {
        return "small_gallery";
    }

    public function get_title()
    {
        return "Small Gallery";
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
            'small_gallery_section',
            [
                'label' => __('Small Gallery Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'gallery',
            [
                'label' => esc_html__('Add Images', 'plugin-name'),
                'type' => Controls_Manager::GALLERY,
                'default' => [],
            ]
        );


        // $this->add_control(
        //     'card_list',
        //     [
        //         'label' => esc_html__('Card List', 'purehearts'),
        //         'type' => Controls_Manager::REPEATER,
        //         'fields' => $repeater->get_controls(),

        //     ]
        // );








        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $gallery = $settings['gallery'];
        // foreach ($gallery as $image) {
        //     echo '<img src="' . esc_attr($image['url']) . '">';
        // }

?>
        <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side">
            <div class="case-sidebar default-sidebar">
                <div class="sidebar-widget gallery-widget">
                    <div class="widget-title">
                        <h3>Gallery</h3>
                    </div>
                    <div class="widget-content">
                        <ul class="image-list clearfix">
                            <?php foreach ($gallery as $image) { ?>
                                <li>
                                    <figure class="image">
                                        <img src="<?php echo $image['url']; ?>" alt="">
                                        <a href="donation-details.html"><i class="fas fa-expand-alt"></i></a>
                                    </figure>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>







<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new SmallGallery);
