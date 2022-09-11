<?php
// Urgent Case widget here

namespace Elementor;

class TeamSection extends Widget_Base
{
    public function get_name()
    {
        return "team_section";
    }

    public function get_title()
    {
        return "Team Members Details Widget";
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
            'team_section_content',
            [
                'label' => __('Team Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Meet Our Team',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __('Section Heading', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Most Passionate Team Members',
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => 'The master-builder of human happiness no one rejects, dislikes
                or avoids pleasure itself pleasure,',
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'member_img',
            [
                'label' => __('Member Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __('Member Designation', 'purehearts'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'member_name',
            [
                'label' => __('Member Name', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'member_info',
            [
                'label' => __('Member Info', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        // $repeater->add_control(
        //     'member_social'
        // );
        $this->add_control(
            'member_list',
            [
                'label' => esc_html__('Member List', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => esc_html__('Member Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $member_list = $settings['member_list'];
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_description = $settings['section_description'];

?>
        <!-- team-section -->
        <!-- <section class="team-section centred"> -->
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="sec-title centred">
                <span class="top-text"><?php echo $section_title; ?></span>
                <h2><?php echo $section_heading; ?></h2>
                <p>
                    <?php echo $section_description; ?>
                </p>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                <?php foreach ($member_list as $member_list) { ?>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo $member_list['member_img']['url']; ?>" alt="" />
                            </figure>
                            <div class="content-box">
                                <div class="info">
                                    <span class="designation"><?php echo $member_list['member_designation']; ?></span>
                                    <h3><?php echo $member_list['member_name']; ?></h3>
                                </div>

                                <div class="text">
                                    <p>
                                        <?php echo $member_list['member_info']; ?>
                                    </p>
                                </div>
                            </div>
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- </section> -->
        <!-- team-section end -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new TeamSection);
