
<?php

function registerMenus(){
	register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'registerMenus' );

register_sidebar(array(
	'name' => 'Footer Uno',
	'before_widget' => '<div class="col-md-3">',
	'after_widget'  => '</div>',
	'before_title' => '<h4 class="uppercase white">',
	'after_title' => '</h3>',
));


register_sidebar(array(
	'name' => 'Footer Tres',
	'before_widget' => '<div class="col-md-3">',
	'after_widget'  => '</div>',
	'before_title' => '<h4 class="uppercase white">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => 'Footer Cuatro',
	'before_widget' => '<div class="col-md-3">',
	'after_widget'  => '</div>',
	'before_title' => '<h4 class="uppercase white">',
	'after_title' => '</h3>',
));


?>