<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- stylesheets: uncomment to enable a specific tool -->
        <link href="<?php bloginfo( 'template_url' ); ?>/backstage/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo( 'template_url' ); ?>/backstage/css/html5bp.min.css" rel="stylesheet">
        <link href="<?php bloginfo( 'template_url' ); ?>/css/fonts.css" rel="stylesheet">
        <!--<link href="<?php bloginfo( 'template_url' ); ?>/backstage/css/normalize.min.css" rel="stylesheet">-->
        <!--<link href="<?php bloginfo( 'template_url' ); ?>/backstage/js/google-code-prettify/prettify.css" rel="stylesheet">-->
        
        <?php
        include '_private/remote-fonts.php';
        include '_private/ss-social.php';
        ?>

        <!-- your stylesheets: uncomment to enable personal stylesheets -->
        <!--<link href="<?php bloginfo( 'template_url' ); ?>/less/main.less" rel="stylesheet/less">-->
        <!--<link href="<?php bloginfo( 'template_url' ); ?>/css/main.css" rel="stylesheet">-->
    
        <!-- js: uncomment to enable a specific tool -->    
        <!--<script>var less = {env: "development"};</script>-->
        <!--<script src="<?php bloginfo( 'template_url' ); ?>/backstage/js/less.min.js"></script>-->
        <style>
        <?php
        require "lessc.inc.php";
        $less = new lessc; 
        echo $less->compileFile( dirname(__FILE__) . "/../less/main.less");
        ?>
        </style>
        <!--<script src="<?php bloginfo( 'template_url' ); ?>/backstage/js/modernizr.min.js"></script>-->
        <!--<script src="<?php bloginfo( 'template_url' ); ?>/backstage/js/prefixfree.min.js"></script>-->
		
       
        <!-- HTML5 Shim (enabled by default) -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- icons (if not in root) -->    
        <link rel="shortcut icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/img/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/img/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/img/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/img/icons/apple-touch-icon-72-precomposed.png">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>">
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?> Atom Feed" href="<?php bloginfo( 'atom_url' ); ?>"> 
        <?php wp_head(); ?>
    </head>