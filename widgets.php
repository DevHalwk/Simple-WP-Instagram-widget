<?php
/*
Please enqueue instagramlite.js and jquery as the dependency in your theme/plugin
Also Include CSS file or you can write your own css
*/
  //Example:
 //wp_enqueue_script( 'theascii-instalite', get_template_directory_uri() . '/js/instagramLite.js', array('jquery'), '1.0.0', true );

/*
========================
  Instagram Widget
========================
*/

class prisma_instagram_widget extends WP_Widget{

 public   function __construct(){

        $widget_opt =  array(
            esc_html('classname') =>  esc_html__('prisma-instagram-widget','prisma'),
            esc_html('description') => esc_html__('Custom Prisma instagram Widget','prisma')

        );

        parent::__construct('prisma_profile_instagram',esc_html__('Prisma instagram','prisma'), $widget_opt);
    }
    public function form($instance){
        $title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : esc_html__('instagram','prisma') );
        echo  esc_html__(' You can manage Options for this widget from the admin panel','prisma');
            $title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : esc_html__('instagram','prisma') );


		$output = '<p>';
		$output .= '<label for="' . esc_attr( $this->get_field_id( 'title' ) ) . '">' .esc_html__('Title:','prisma').'</label>';
		$output .= '<input type="text" class="widefat" id="' . esc_attr( $this->get_field_id( 'title' ) ) . '" name="' . esc_attr( $this->get_field_name( 'title' ) ) . '" value="' . esc_attr( $title ) . '"';
		$output .= '</p>';
                echo $output;

    }
    function update($new_instance, $old_instance){
        $instance = array();
        $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) :  esc_html__('instagram','prisma') );
        return $instance;

    }

    public function widget($args,$instance){
      echo $args[esc_html__('before_widget','prisma')];
           if( !empty( $instance[ 'title' ] ) ):

 echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];

endif;
      ?>

        <ul class="sidebar-instagram-pics"></ul>
         <div class="clearfix"></div>
            <div class="clearfix"></div>


    <?php     echo $args [ esc_html__('after_widget','prisma')];
    
     }
}

add_action('widgets_init',function(){
    register_widget('prisma_instagram_widget');
} );