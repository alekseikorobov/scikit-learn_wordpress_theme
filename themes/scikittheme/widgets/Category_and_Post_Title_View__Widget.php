<?php

/*
Plugin Name: Category_and_Post_Title_View__Widget
*/

class Category_and_Post_Title_View__Widget extends WP_Widget {
    /**
         * Sets up a new Categories widget instance.
         *
         * @since 2.8.0
         */
        public function __construct() {
			$widget_ops = array(
					'classname'                   => 'Category_and_Post_Title_View__Widget',
					'description'                 => __( 'A list or dropdown of categories.' ),
					'customize_selective_refresh' => true,
			);
			parent::__construct( 'Category_and_Post_Title_View__Widget', __( 'Category_and_Post_Title_View__Widget' ), $widget_ops );
	}

	

	/**
	 * Outputs the content for the current Categories widget instance.
	 *
	 * @since 2.8.0
	 * @since 4.2.0 Creates a unique HTML ID for the `<select>` element
	 *              if more than one instance is displayed on the page.
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Categories widget instance.
	 */
	public function widget( $args, $instance ) {
			static $first_dropdown = true;

			$default_title = __( 'Categories' );
			$default_taxanomy_name = __( 'Category' );
			
			$title         = ! empty( $instance['title'] ) ? $instance['title'] : $default_title;
			$taxanomy_name = ! empty( $instance['taxanomy_name'] ) ? $instance['taxanomy_name'] : $default_taxanomy_name;
			/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
			$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

			$count        = ! empty( $instance['count'] ) ? '1' : '0';
			$hierarchical = ! empty( $instance['hierarchical'] ) ? '1' : '0';
			$dropdown     = ! empty( $instance['dropdown'] ) ? '1' : '0';

			echo $args['before_widget'];

			if ( $title ) {
					echo $args['before_title'] . $title . $args['after_title'];
			}

			$cat_args = array(
					'orderby'      => 'name',
					'show_count'   => $count,
					'hierarchical' => $hierarchical,
			);

			{
					$format = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml';

					/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */
					$format = apply_filters( 'navigation_widgets_format', $format );

					if ( 'html5' === $format ) {
							// The title may be filtered: Strip out HTML and make sure the aria-label is never empty.
							$title      = trim( strip_tags( $title ) );
							$aria_label = $title ? $title : $default_title;
							echo '<nav role="navigation" aria-label="' . esc_attr( $aria_label ) . '">';
					}
					?>

					<ul>
							<?php
							$cat_args['title_li'] = '';

							/**
							 * Filters the arguments for the Categories widget.
							 *
							 * @since 2.8.0
							 * @since 4.9.0 Added the `$instance` parameter.
							 *
							 * @param array $cat_args An array of Categories widget options.
							 * @param array $instance Array of settings for the current widget.
							 */
								//wp_list_categories( apply_filters( 'widget_categories_args', $cat_args, $instance ) );
								
								//$categories = get_terms('category_example');
								$terms = get_terms($taxanomy_name);

								//$curent_cats = get_the_category();
								//$current_category_id = $curent_cats[0]->cat_ID;
								
								$post_id = get_the_ID();								
								$current_category_id = get_the_terms( $post_id, $taxanomy_name )[0]->term_id;


								echo '<ul>';
								foreach ($terms as $term) {
?>
<li class="cat-item cat-item-3 <?php if($term->term_id == $current_category_id) echo 'current-cat' ?>">
	<a class="<?php if($term->term_id == $current_category_id) echo 'sk-toc-active' ?>" href="<?php 
	//if($taxanomy_name == 'category'){
		echo get_term_link($term->term_id);
	//}
	//else {
		//echo '/example';
	//}

	
	?>"><?php echo $term->name; ?></a>
	<ul>
		<?php 
			if($taxanomy_name == 'category' && $term->term_id == $current_category_id)
				$this->get_html_posts_by_category_id($term->term_id);
		?>
	</ul>

</li>
<?php											
								}
								echo '</ul>';
								
							?>
					</ul>

					<?php
					if ( 'html5' === $format ) {
							echo '</nav>';
					}
			}

			echo $args['after_widget'];
	}
	function get_html_posts_by_category_id($category_id){
		global $post;
		
		$args = array('category' => $category_id);
		$posts = get_posts($args);

		foreach( $posts as $post ){ 
			setup_postdata($post);
			?>
<li class='sk-toctree-l3'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php
		}
		wp_reset_postdata();
		

	}

	function local_get_categories(){
		$defaults = array(
			'child_of'            => 0,
			'current_category'    => 0,
			'depth'               => 0,
			'echo'                => 1,
			'exclude'             => '',
			'exclude_tree'        => '',
			'feed'                => '',
			'feed_image'          => '',
			'feed_type'           => '',
			'hide_empty'          => 1,
			'hide_title_if_empty' => false,
			'hierarchical'        => true,
			'order'               => 'ASC',
			'orderby'             => 'name',
			'separator'           => '<br />',
			'show_count'          => 0,
			'show_option_all'     => '',
			'show_option_none'    => __( 'No categories' ),
			'style'               => 'list',
			'taxonomy'            => ['example'],
			'title_li'            => __( 'Categories' ),
			'use_desc_for_title'  => 1,
		);

		//$parsed_args = wp_parse_args( $cat_args, $defaults );

		// if ( ! isset( $parsed_args['pad_counts'] ) && $parsed_args['show_count'] && $parsed_args['hierarchical'] ) {
		// 		$parsed_args['pad_counts'] = true;
		// }

		// // Descendants of exclusions should be excluded too.
		// if ( true == $parsed_args['hierarchical'] ) {
		// 		$exclude_tree = array();

		// 		if ( $parsed_args['exclude_tree'] ) {
		// 				$exclude_tree = array_merge( $exclude_tree, wp_parse_id_list( $parsed_args['exclude_tree'] ) );
		// 		}

		// 		if ( $parsed_args['exclude'] ) {
		// 				$exclude_tree = array_merge( $exclude_tree, wp_parse_id_list( $parsed_args['exclude'] ) );
		// 		}

		// 		$parsed_args['exclude_tree'] = $exclude_tree;
		// 		$parsed_args['exclude']      = '';
		// }

		// if ( ! isset( $parsed_args['class'] ) ) {
		// 		$parsed_args['class'] = ( 'category' === $parsed_args['taxonomy'] ) ? 'categories' : $parsed_args['taxonomy'];
		// }

		// if ( ! taxonomy_exists( $parsed_args['taxonomy'] ) ) {
		// 		return false;
		// }

		// $show_option_all  = $parsed_args['show_option_all'];
		// $show_option_none = $parsed_args['show_option_none'];

		$categories = get_terms( $defaults );

		return $categories;
	}
	

	/**
	 * Handles updating settings for the current Categories widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
			$instance                 = $old_instance;
			$instance['title']        = sanitize_text_field( $new_instance['title'] );
			$instance['taxanomy_name']        = sanitize_text_field( $new_instance['taxanomy_name'] );			
			$instance['count']        = ! empty( $new_instance['count'] ) ? 1 : 0;
			$instance['hierarchical'] = ! empty( $new_instance['hierarchical'] ) ? 1 : 0;
			$instance['dropdown']     = ! empty( $new_instance['dropdown'] ) ? 1 : 0;

			return $instance;
	}

	/**
	 * Outputs the settings form for the Categories widget.
	 *
	 * @since 2.8.0
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
			// Defaults.
			$instance     = wp_parse_args( (array) $instance, array( 
				'title' => '' 
				,'taxanomy_name'=>''
				) );
			$count        = isset( $instance['count'] ) ? (bool) $instance['count'] : false;
			$hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
			$dropdown     = isset( $instance['dropdown'] ) ? (bool) $instance['dropdown'] : false;
			?>
			<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			</p>

			<p>
					<label for="<?php echo $this->get_field_id( 'taxanomy_name' ); ?>"><?php _e( 'taxanomy_name:' ); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id( 'taxanomy_name' ); ?>" name="<?php echo $this->get_field_name( 'taxanomy_name' ); ?>" type="text" value="<?php echo esc_attr( $instance['taxanomy_name'] ); ?>" />
			</p>

			<p>
					<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'dropdown' ); ?>" name="<?php echo $this->get_field_name( 'dropdown' ); ?>"<?php checked( $dropdown ); ?> />
					<label for="<?php echo $this->get_field_id( 'dropdown' ); ?>"><?php _e( 'Display as dropdown' ); ?></label>
					<br />

					<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>"<?php checked( $count ); ?> />
					<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Show post counts' ); ?></label>
					<br />

					<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'hierarchical' ); ?>" name="<?php echo $this->get_field_name( 'hierarchical' ); ?>"<?php checked( $hierarchical ); ?> />
					<label for="<?php echo $this->get_field_id( 'hierarchical' ); ?>"><?php _e( 'Show hierarchy' ); ?></label>
			</p>
			<?php
	}

}

?>