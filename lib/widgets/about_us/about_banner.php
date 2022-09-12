<?php
// Urgent Case widget here

namespace Elementor;

class AboutBanner extends Widget_Base
{
    public function get_name()
    {
        return "about_banner";
    }

    public function get_title()
    {
        return "About Banner Widget";
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
            'about_banner_content',
            [
                'label' => __('About Banner Widget Contents', 'purehearts'),
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
            'section_bg_img',
            [
                'label' => __('Section Background Image', 'purehearts'),
                'type' => Controls_Manager::MEDIA,
            ]
        );


        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_bg_img = $settings['section_bg_img']['url'];

?>

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(<?php echo $section_bg_img; ?>);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1><?php echo $section_title; ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new AboutBanner);
