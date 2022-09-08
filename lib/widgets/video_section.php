<?php
// Urgent Case widget here

namespace Elementor;

class VideoSection extends Widget_Base
{
    public function get_name()
    {
        return "video_section";
    }

    public function get_title()
    {
        return "Video Section Widget";
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
            'video_section_content',
            [
                'label' => __('Video Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'video_card_bg_img',
            [
                'label' => __('Video Card Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'video_card_title',
            [
                'label' => __('Video Card Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Charity Video Tour'
            ]
        );
        $repeater->add_control(
            'video_card_heading',
            [
                'label' => __('Video Card Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'What has Aid Ever Done For Anyone?',
            ]
        );
        $repeater->add_control(
            'video_card_description',
            [
                'label' => __('Video Card Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Find fault with a man who chooses to enjoy pleasure that has no annoying consequences.',
            ]
        );

        $repeater->add_control(
            'video_card_btn_text',
            [
                'label' => __('Video Link Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Play Video',
            ]
        );
        $repeater->add_control(
            'video_card_btn_url',
            [
                'label' => __('Video Link URL', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );

        $this->add_control(
            'video_card_list',
            [
                'label' => esc_html__('Videos', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'video_card_heading' => esc_html__('About Video', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ video_card_heading }}}',
            ]
        );




        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // $video_card_bg_img = $settings['video_card_bg_img']['url'];
        $video_card_list = $settings['video_card_list'];


?>
        <section class="video-section" style="background-image: url(assets/images/background/6.jpg)">
            <div class="auto-container">
                <div class="video-carousel owl-carousel owl-theme owl-dots-none">
                    <?php foreach ($video_card_list as $list) { ?>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box">
                                    <img src="<?php echo $list['video_card_bg_img']['url']; ?>" alt="" />
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <div class="sec-title light">
                                        <span class="top-text"><?php echo $list['video_card_title']; ?></span>
                                        <h2><?php echo $list['video_card_heading']; ?></h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <?php echo $list['video_card_description']; ?>
                                        </p>
                                    </div>
                                    <div class="video-btn">
                                        <div class="shape" style="
                        background-image: url(assets/images/shape/shape-16.png);
                      "></div>
                                        <a href="<?php echo $list['video_card_btn_url']['url']; ?>" class="lightbox-image" data-caption=""><i class="icon-play-arrow"></i><?php echo $list['video_card_btn_text']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new VideoSection);
