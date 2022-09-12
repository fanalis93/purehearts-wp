<?php
// Urgent Case widget here

namespace Elementor;

class AboutCharity extends Widget_Base
{
    public function get_name()
    {
        return "about_charity";
    }

    public function get_title()
    {
        return "About Charity Widget";
    }

    public function get_icon()
    {
        return "eicon-kit-details";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'about_charity_section_content',
            [
                'label' => __('About Charity Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Title',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'add_awards_query',
            [
                'label' => esc_html__('Add Awards?', 'plugin-name'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('YES', 'purehearts'),
                'label_off' => esc_html__('NO', 'purehearts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $repeater = new Repeater();
        $repeater->add_control(
            'add_award_image',
            [
                'label' => __('Add Award Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'awards_list',
            [
                'label' => esc_html__('Awards List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'section_founder_name',
            [
                'label' => __('Charity Founder Name', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Founder Name',
            ]
        );
        $this->add_control(
            'add_socials',
            [
                'label' => esc_html__('Add Social Links?', 'plugin-name'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('YES', 'purehearts'),
                'label_off' => esc_html__('NO', 'purehearts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $social_rp = new Repeater();
        $social_rp->add_control(
            'social_icon',
            [
                'label' => __('Social Link Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $social_rp->add_control(
            'social_link',
            [
                'label' => __('Social Link URL', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'social_list',
            [
                'label' => esc_html__('Social List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $social_rp->get_controls(),
            ]
        );
        $this->add_control(
            'experience',
            [
                'label' => esc_html__('Add Experience', 'purehearts'),
                'type' => Controls_Manager::NUMBER,
                'default' => 0,
            ]
        );
        $this->add_control(
            'add_img1',
            [
                'label' => esc_html__('Add Image 1', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'add_img2',
            [
                'label' => esc_html__('Add Image 2', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );




        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $add_awards_query = $settings['add_awards_query'];
        $section_heading = $settings['section_heading'];
        $awards_list = $settings['awards_list'];
        $section_description = $settings['section_description'];
        $section_founder_name = $settings['section_founder_name'];
        $add_socials = $settings['add_socials'];
        $social_list = $settings['social_list'];
        $experience = $settings['experience'];
        $add_img1 = $settings['add_img1']['url'];
        $add_img2 = $settings['add_img2']['url'];

?>

        <!-- about-style-three -->
        <section class="about-style-three">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-text"><?php echo $section_title; ?></span>
                                    <h2><?php echo $section_heading; ?></h2>
                                </div>
                                <ul class="award-list clearfix">
                                    <?php foreach ($awards_list as $award) { ?>
                                        <li><img src="
                                        <?php if ('yes' === $add_awards_query) {
                                            echo $award['add_award_image']['url'];
                                        }
                                        ?>
                                        
                                        " alt=""></li>
                                    <?php } ?>
                                </ul>
                                <div class="text">
                                    <p><?php echo $section_description; ?></p>
                                </div>
                                <div class="inner-box clearfix">
                                    <div class="author-box">
                                        <div class="icon-box"><i class="icon-hand"></i></div>
                                        <span>Founder</span>
                                        <h3><?php echo $section_founder_name; ?></h3>
                                    </div>
                                    <ul class="social-links clearfix">
                                        <?php foreach ($social_list as $social) {
                                            if ('yes' === $add_socials) {
                                        ?>
                                                <li><a href="<?php echo $social['social_link']['url']; ?>"><?php Icons_Manager::render_icon($social['social_icon'], ['aria-hidden' => 'true']); ?></a></li>
                                        <?php
                                            }
                                        } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                                <figure class="image image-1"><img src="<?php echo $add_img1; ?>" alt=""></figure>
                                <figure class="image image-2"><img src="<?php echo $add_img2; ?>" alt=""></figure>
                                <div class="rotate-text">
                                    <figure class="text-box rotate-me"><img src="assets/images/icons/rotate-text-2.png" alt=""></figure>
                                    <figure class="icon-box"><img src="assets/images/icons/bird-1.png" alt=""></figure>
                                </div>
                                <figure class="icon-box"><img src="assets/images/icons/heart-7.png" alt=""></figure>
                                <div class="text">
                                    <h4><i class="icon-donation-1"></i><?php echo $experience; ?>+ Years of Experience</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new AboutCharity);
