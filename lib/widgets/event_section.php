<?php
// Urgent Case widget here

namespace Elementor;

class Events extends Widget_Base
{
    public function get_name()
    {
        return "events_section";
    }

    public function get_title()
    {
        return "Events Section Widget";
    }

    public function get_icon()
    {
        return "eicon-meetup";
    }

    public function get_categories()
    {
        return ['purehearts-widgets'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'event_section_content',
            [
                'label' => __('Event Section Widget Contents', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'event_section_bg_img',
            [
                'label' => __('Section Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'add_event',
            [
                'label' => esc_html__('Add an Event?', 'plugin-name'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('YES', 'purehearts'),
                'label_off' => esc_html__('NO', 'purehearts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'event_left_title',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Here to Bring People Together',
            ]
        );
        $this->add_control(
            'event_left_heading',
            [
                'label' => __('Section Title', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
            ]
        );
        $this->add_control(
            'all_events_link_url',
            [
                'label' => esc_html__('All Event Page Link', 'plugin-name'),
                'type' => Controls_Manager::URL,

            ]
        );
        $sponsor_repeater = new Repeater();
        $sponsor_repeater->add_control(
            'sponsor_name',
            [
                'label' => esc_html__('Sponsor Name', 'plugin-name'),
                'type' => Controls_Manager::TEXT,
                'default' => 'OLT',
            ]
        );
        $sponsor_repeater->add_control(
            'sponsor_logo',
            [
                'label' => esc_html__('Insert Sponsor Logo', 'plugin-name'),
                'type' => Controls_Manager::MEDIA,

            ]
        );

        $this->add_control(
            'sponsor_list',
            [
                'label' => esc_html__('Sponsors', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $sponsor_repeater->get_controls(),
                'default' => [
                    [
                        'sponsor_name' => esc_html__('Sponsor Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ sponsor_name }}}',
            ]
        );





        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $event_section_bg_img = $settings['event_section_bg_img']['url'];
        $event_left_title = $settings['event_left_title'];
        $add_event = $settings['add_event'];
        $sponsor_list = $settings['sponsor_list'];
        $event_left_heading = $settings['event_left_heading'];
        $event_list = $settings['event_list'];

?>

        <!-- events-section -->
        <section class="events-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-17.png)"></div>
            <div class="bg-layer" style="background-image: url(<?php echo $event_section_bg_img; ?>)"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-18.png)"></div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_2">
                                <div class="content-box">
                                    <div class="sec-title light">
                                        <span class="top-text">Our Recent Events</span>
                                        <h2><?php echo $event_left_title; ?></h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <?php echo $event_left_heading; ?>
                                        </p>
                                        <a href="events.html" class="theme-btn btn-one">All events</a>
                                    </div>
                                    <div class="sponsors-inner">
                                        <h3>Event Sponsors:</h3>
                                        <div class="sponsors-carousel owl-carousel owl-theme owl-dots-none">
                                            <?php foreach ($sponsor_list as $sponsor_list) { ?>
                                                <figure class="sponsors-logo">
                                                    <a href="index.html"><img src="<?php echo $sponsor_list['sponsor_logo']['url']; ?>" alt="" /></a>
                                                </figure>
                                            <?php } ?>
                                        </div>
                                        <h6><a href="index.html">Become a Sponsor</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 inner-column" style="<?php if ($add_event == 'yes') {
                                                                                            echo '';
                                                                                        } else {
                                                                                            echo 'display: none';
                                                                                        } ?>">
                            <div class="right-column">

                                <?php
                                $args = (array(
                                    'post_type' => 'event',
                                    'showposts' => 3
                                ));
                                $the_query = new \WP_Query($args);
                                ?>
                                <?php while ($the_query->have_posts()) :
                                    $the_query->the_post(); ?>

                                    <div class="events-block-one wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="shape" style="
                                        background-image: url(assets/images/shape/shape-20.png);
                                        "></div>
                                            <figure class="image-box">
                                                <?php echo get_the_post_thumbnail(); ?>
                                                <h3>31<span>Feb</span></h3>
                                            </figure>
                                            <div class="inner">
                                                <ul class="info clearfix">
                                                    <li><i class="far fa-clock"></i>11.30 am</li>
                                                    <li><i class="far fa-map"></i>Newyork</li>
                                                </ul>
                                                <h3>
                                                    <a href="event-details.html"><?php echo the_title(); ?></a>
                                                </h3>
                                                <div class="links">
                                                    <a href="event-details.html">More Details</a>
                                                </div>
                                                <div class="price">
                                                    <h6>$180.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                <?php
                                endwhile; ?>









                                <!-- <div class="events-block-one wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="shape" style="
                                        background-image: url(assets/images/shape/shape-20.png);
                                        "></div>
                                        <figure class="image-box">
                                            <img src="assets/images/events/events-1.jpg" alt="" />
                                            <h3>31<span>Feb</span></h3>
                                        </figure>
                                        <div class="inner">
                                            <ul class="info clearfix">
                                                <li><i class="far fa-clock"></i>11.30 am</li>
                                                <li><i class="far fa-map"></i>Newyork</li>
                                            </ul>
                                            <h3>
                                                <a href="event-details.html">Royal Parks Half Marathon</a>
                                            </h3>
                                            <div class="links">
                                                <a href="event-details.html">More Details</a>
                                            </div>
                                            <div class="price">
                                                <h6>$180.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events-section end -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new Events);
