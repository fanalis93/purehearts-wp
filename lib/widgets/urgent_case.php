<?php
// Urgent Case widget here

namespace Elementor;

class UrgentCaseWidget extends Widget_Base
{
    public function get_name()
    {
        return "urgent_widget";
    }

    public function get_title()
    {
        return "Urgent Case Widget";
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
            'urgent_left_content_section',
            [
                'label' => __('Urgent Section Content (Left)', 'purehearts'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image_top_bottom',
            [
                'label' => esc_html__('Do you want image top?', 'plugin-name'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('YES', 'purehearts'),
                'label_off' => esc_html__('NO', 'purehearts'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'urgent_left_bg_image',
            [
                'label' => __('Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'urgent_left_title_icon',
            [
                'label' => __('Title Icon', 'purehearts'),
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'urgent_left_title_text',
            [
                'label' => __('Title Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'urgent_left_title_description',
            [
                'label' => __('Title Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $repeater = new Repeater();

        // urgent left list repeater
        $repeater->add_control(
            'urgent_left_list_text',
            [
                'label' => __('List Text', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,

            ]
        );
        $this->add_control(
            'urgent_left_list_repeater',
            [
                'label' => esc_html__('Lists', 'purehearts'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'urgent_left_list_text' => esc_html__('List Details', 'purehearts'),

                    ]
                ],
                'title_field' => '{{{ urgent_left_list_text }}}',
            ]
        );

        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $urgent_bg_image = $settings['urgent_bg_image']['url'];
        $urgent_left_bg_image = $settings['urgent_left_bg_image']['url'];
        $urgent_left_title_icon = $settings['urgent_left_title_icon'];
        $urgent_left_title_text = $settings['urgent_left_title_text'];
        $urgent_left_title_description = $settings['urgent_left_title_description'];
        $lists = $settings['urgent_left_list_repeater'];
        $image_top_bottom = $settings['image_top_bottom'];

?>
        <!-- urgent-case-section -->
        <div class="inner-box clearfix">
            <div class="single-block" style="background-image: url(<?php echo $urgent_left_bg_image; ?>); 
                    
                    <?php if ($image_top_bottom == 'yes') {
                        echo ' padding: 356px 20px 51px 40px;';
                    } else {
                        echo ' padding: 51px 20px 356px 40px;';
                    } ?>
                    
                    
                    ">
                <div class="text">
                    <h3>
                        <?php Icons_Manager::render_icon($urgent_left_title_icon, ['aria-hidden' => 'true']); ?>
                        <?php echo $urgent_left_title_text ?>
                    </h3>
                    <p><?php echo $urgent_left_title_description ?></p>
                    <ul class="list-style-one clearfix">
                        <?php
                        foreach ($lists as $list) {
                        ?>
                            <li><?php echo $list['urgent_left_list_text'] ?></li>
                        <?php } ?>
                    </ul>
                    <a href="index.html">More Details</a>
                </div>
            </div>
        </div>
        </div>
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new UrgentCaseWidget);
