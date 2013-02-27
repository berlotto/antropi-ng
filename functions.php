<?php

/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
function antroping_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Third Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-4',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Frontal Esquerda', 'twentytwelve' ),
		'id' => 'sidebar-front-left',
		'description' => __( 'Aparece no template Front Page Magazine, a direita', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Frontal Superior', 'twentytwelve' ),
		'id' => 'sidebar-front-top',
		'description' => __( 'Aparece no template Front Page Magazine, no topo', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Frontal Meio', 'twentytwelve' ),
		'id' => 'sidebar-front-half',
		'description' => __( 'Aparece no template Front Page Magazine, no meio', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Frontal Direita', 'twentytwelve' ),
		'id' => 'sidebar-front-right',
		'description' => __( 'Aparece no template Front Page Magazine, a esquerda ', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'antroping_widgets_init' );

?>