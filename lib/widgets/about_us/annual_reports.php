<?php
// Urgent Case widget here

namespace Elementor;

class AnnualReports extends Widget_Base
{
    public function get_name()
    {
        return "annual_reports_section";
    }

    public function get_title()
    {
        return "Annual Reports Section Widget";
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
            'annual_reports_section_content',
            [
                'label' => __('Annual Reports Section Widget Contents', 'purehearts'),
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
                'default' => 'Sample Heading',
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => __('Section Description', 'purehearts'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Sample Heading',
            ]
        );
        $this->add_control(
            'download_btn_text',
            [
                'label' => __('Download Button Text', 'purehearts'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Download',
            ]
        );
        $this->add_control(
            'download_btn_url',
            [
                'label' => __('Download Button Icon', 'purehearts'),
                'type' => Controls_Manager::URL,
            ]
        );



        // condition: if user selects 2022, show income and expense reports of 2022





        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_title = $settings['section_title'];
        $section_heading = $settings['section_heading'];
        $section_description = $settings['section_description'];
        $download_btn_text = $settings['download_btn_text'];
        $download_btn_url  = $settings['download_btn_url'];

?>
        <!-- reports-section -->
        <section class="reports-section sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-39.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content_block_7">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-text"><?php echo $section_title; ?></span>
                                    <h2><?php echo $section_heading; ?></h2>
                                </div>
                                <div class="text">
                                    <p><?php echo $section_description; ?></p>
                                    <a href="<?php echo $download_btn_url; ?>" class="theme-btn btn-one"><?php echo $download_btn_text; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content_block_8">
                            <div class="content-box">
                                <div class="progress-inner">
                                    <div class="single-progress-box">
                                        <div class="box">
                                            <div class="piechart" data-fg-color="#f65024" data-value=".84">
                                            </div>
                                            <span>Year of <br />2020</span>
                                        </div>
                                        <div class="text">
                                            <h2>84%</h2>
                                            <h3>Income Statement</h3>
                                            <p>It is a long established fact that a reader will be distracted</p>
                                            <a href="about.html"><i class="fa fa-angle-right"></i>View Details</a>
                                        </div>
                                    </div>
                                    <div class="single-progress-box">
                                        <div class="box">
                                            <div class="piechart" data-fg-color="#03c0a8" data-value=".55">
                                            </div>
                                            <span>Year of <br />2020</span>
                                        </div>
                                        <div class="text">
                                            <h2>55%</h2>
                                            <h3>Expense Statement</h3>
                                            <p>Equal blame belongs to those who fail their duty hrough weakness</p>
                                            <a href="about.html"><i class="fa fa-angle-right"></i>View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- reports-section end -->

<?php
    }
}



plugin::instance()->widgets_manager->register_widget_type(new AnnualReports);
