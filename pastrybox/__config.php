<?php

// Easy Include
define( 'PROJECT_PATH', realpath( dirname( __FILE__ ) ) );

set_include_path( implode( PATH_SEPARATOR, array(
    realpath( PROJECT_PATH ),
    realpath( PROJECT_PATH . '/parts' ),
    realpath( PROJECT_PATH . '/assets' ),
    realpath( PROJECT_PATH . '/shared' ),
    realpath( PROJECT_PATH . '/static' ),
    realpath( PROJECT_PATH . '/_private' ),
    realpath( PROJECT_PATH . '/bakers/data' ),
    realpath( PROJECT_PATH . '/phplib/lessphp' ),
    get_include_path() 
) ) );

// Minify (see functions.php)
// Comment out if you don't want 
// to minify your markup.
//ob_start('frontin_minify');



$config = (object) array(
	"years"        => array( '2012' ),
	"portrait_of"  => 'Portrait Of ',
	"url"     	   => get_bloginfo( 'url' ) . "/",
	"template_url" => get_bloginfo( 'template_url' ) . "/",	
	"data_url"     => get_bloginfo( 'template_url' ) . "/bakers/data/",
);


require_once 'bakers/Bakers.php';
$bakers = new Bakers( $config );
