<?php
// Urgent Case widget here

namespace Elementor;

class GalleryWidget extends Widget_Base
{
	public function get_name()
	{
		return "gallery_widget";
	}

	public function get_title()
	{
		return "Gallery Widget";
	}

	public function get_icon()
	{
		return "eicon-table-of-contents";
	}

	public function get_categories()
	{
		return ['purehearts-widgets'];
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'plugin-name'),
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





		$this->end_controls_section();
	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();
		foreach ($settings['gallery'] as $image) {
			echo '<img src="' . esc_attr($image['url']) . '">';
		}
	}

	protected function content_template()
	{
?>
		<# _.each( settings.gallery, function( image ) { #>
			<img src="{{ image.url }}">
			<# }); #>
		<?php

	}
}

plugin::instance()->widgets_manager->register_widget_type(new GalleryWidget);
