<?php
/*
    Plugin Name: Follow Sport - widgets
    Plugin URI: 
    Description: add a new widgets for sidebar
    Version: 1.0.0
    Author: validol
    Author URI: 
    Text Domain: followsport
*/

if(!defined('ABSPATH')) die();

class SidebarPost extends WP_Widget {

	function __construct() {
		parent::__construct(
			'sidebarpost', // Base ID
			esc_html__( 'Posts widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Display posts in sidebar', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget']; 
	
		$count = $instance['count']; ?>
		<h3><?php echo esc_html($instance['title']); ?></h3>

		<?php
    $query = new WP_Query( array(
      'post_type' => 'post',
			'posts_per_page' => $count,
			'orderby' => 'rand'
		)); 

    if ($query->have_posts()) {
			while ($query->have_posts()): $query->the_post(); ?>
			<a class="widget-post" href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url('sidebar'); ?>" width="270px" height="180px" />
				<h4><?php the_title(); ?></h4>
			</a>
    
    <?php endwhile; }
    else {

    }
		wp_reset_postdata();

    echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );

		$count = ! empty( $instance['count'] ) ? $instance['count'] : esc_html__( '3', 'text_domain' );

		?>
		<p>
			<label 
				for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
				<?php esc_attr_e( 'Title:', 'text_domain' ); ?>
			</label> 
			<input 
				class="widefat" 
				id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
				name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
				type="text" 
				value="<?php echo esc_attr( $title ); ?>" />
			</p>

			<p>
			<label 
				for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>">
				<?php esc_attr_e( 'Amount of posts to Display:', 'text_domain' ); ?>
			</label> 
			<input 
				class="widefat" 
				id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" 
				name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" 
				type="number" 
				value="<?php echo esc_attr( $count ); ?>"
				min="1" />
			</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? sanitize_text_field( $new_instance['count'] ) : '';

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function followsport_post_widget() {
  register_widget( 'SidebarPost' );
}
add_action( 'widgets_init', 'followsport_post_widget' );