<?php
// Urgent Case widget here

namespace Elementor;

class CircularVideo extends Widget_Base
{
    public function get_name()
    {
        return "circular_video";
    }

    public function get_title()
    {
        return "Circular Video";
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
            'circular_video_section',
            [
                'label' => __('Circular Video Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_bg_image',
            [
                'label' => esc_html__('Background Image', 'plugin-name'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'section_video_link',
            [
                'label' => esc_html__('Video URL', 'plugin-name'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Video Title', 'plugin-name'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );







        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_video_link = $settings['section_video_link']['url'];
        $section_bg_image = $settings['section_bg_image']['url'];

?>

        <!-- <div class="content-two">
            <div class="row clearfix"> -->
        <div class="col-lg-12 col-md-6 col-sm-12 video-column">
            <div class="video-inner">
                <figure class="image-box"><img src="<?php echo $section_bg_image; ?>" alt=""></figure>
                <div class="video-box">
                    <div class="video-btn">
                        <a href="<?php echo $section_video_link; ?>" class="lightbox-image" data-caption=""><i class="icon-play-arrow"></i></a>
                        <span><?php echo $section_title; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div>
        </div> -->




<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new CircularVideo);
