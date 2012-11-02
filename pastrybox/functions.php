<?php

function get_category_id( $cat_name )
{
    $term = get_term_by( 'name', $cat_name, 'category' );
    return $term->term_id;
}


function pastry_clean_code( $input )
{
    $encoded = preg_replace_callback( '/<code>(.*?)<\/code>/ims', create_function( '$matches', '$matches[1] = preg_replace(
	        array("/^[\r|\n]+/i", "/[\r|\n]+$/i"), "",
	        $matches[1]);
	      return "<code>" . htmlentities($matches[1], ENT_QUOTES, "UTF-8") . "</code>";' ), $input );
    
    if ( $encoded ) {
        return $encoded;
    } else {
        return $source;
    }
}

function frontin_get_archives( $type = false )
{
    $args = array(
        'type' => $type,
        'format' => 'html',
        'show_post_count' => true,
        'echo' => 0 
    );
    
    $archives = wp_get_archives( $args );
    $archives = explode( '</li>', $archives );
    $data     = array();
    
    foreach ( $archives as $currentData ) {
        $currentData = str_replace( array(
            '<li>',
            "\n",
            "\t",
            "\s" 
        ), '', $currentData );
        
        if ( $currentData === '' ) {
            continue;
        }
        
        $a      = explode( "'", $currentData );
        $data[] = (object) array(
             'href' => trim( $a[ 1 ] ),
            'title' => trim( $a[ 3 ] ) 
        );
    }
    
    return (object) $data;
}


function pastry_the_thought_title_to_date( $postTitle, $printYear = false )
{
    if ( strpos( strtolower( $postTitle ), ', baked by' ) ) {
        $a         = explode( ", baked by", $postTitle );
        $b         = explode( " ", $a[ 0 ] );
        $day       = trim( $b[ 0 ] );
        $month     = trim( ucfirst( $b[ 1 ] ) );
        $year      = trim( $b[ 2 ] );
        $strtotime = $day . ' ' . $month . ' ' . $year;
        $timestamp = strtotime( $strtotime );
        $dayName   = trim( date( 'l', $timestamp ) );
        $date      = $dayName . ', ' . $day . ' ' . $month;
        if ( $printYear === true ) {
            $date = $date . ' ' . $year;
        }
        echo $date;
        return;
    }
    
    // Alternative format (for unpublished thoughts)	
    if ( strpos( $postTitle, "-" ) ) {
        $a         = explode( "-", $postTitle );
        $day       = trim( $a[ 2 ] );
        $month     = trim( ucfirst( $a[ 1 ] ) );
        $year      = trim( $a[ 0 ] );
        $strtotime = $day . ' ' . $month . ' ' . $year;
        $timestamp = strtotime( $strtotime );
        $dayName   = trim( date( 'l', $timestamp ) );
        $date      = $dayName . ', ' . $day . ' ' . $month;
        if ( $printYear === true ) {
            $date = $date . ' ' . $year;
        }
        echo $date;
        return;
    }
    
    echo $postTitle;
    
}

function pastry_the_thought_permalink( $category, $theThought )
{
    echo get_bloginfo( 'url' ) . '/' . $category->category_nicename . '/' . $theThought->post_name . '/';
}

function pastry_the_baker_bio( $name )
{
    $title   = trim( $name . ' Bio' );
    $page    = get_page_by_title( $title );
    $content = apply_filters( 'the_content', $page->post_content );
    
    echo $content;
}

function pastry_get_thoughts( $number, $postStatus, $order, $category = false )
{
    $args = array(
         'numberposts' => $number,
        'orderby' => 'post_date',
        'order' => $order,
        'post_status' => $postStatus,
        'category' => $category 
    );
    
    return get_posts( $args );
}

function customfunc_get_related_posts_by_category( $category, $post_status )
{
    $args = array(
        
         'numberposts' => 100,
        /* high number to make sure we get all the posts */
        'orderby' => 'post_date',
        'order' => 'ASC',
        'category' => $category->cat_ID,
        'post_status' => $post_status 
        
    );
    
    $related_posts = get_posts( $args );
    
    return $related_posts;
}

/**
 * Inspired by Till Krüss
 * Credits where it's due:
 * http://tillkruess.com/projects/wordpress/wp-beautifier/
 * Check @tillkruess 
 */
function frontin_minify( $input )
{
    // Save indent of specific tags
    $keepIndent = 'pre, textarea';
    $ignored    = '~';
    $safeTags   = explode( ', ', $keepIndent );
    for ( $i = 0, $size = count( $safeTags ); $i < $size; ++$i ) {
        $ignored .= '<' . $safeTags[ $i ] . '[^>]*>.*?<\/' . $safeTags[ $i ] . '>' . ( $i < $size - 1 ? '|' : '' );
    }
    $ignored .= '~s';
    preg_match_all( $ignored, $input, $safeTagsContent );
    
    // Minify
    $input = preg_replace( '~</div>~ms', "\n</div>", $input );
    $input = preg_replace( '~<div~ms', "\n<div", $input );
    $input = preg_replace( '~\r\n~ms', "\n", $input );
    $input = preg_replace( '~\r~ms', "\n", $input );
    $input = preg_replace( '~^\s+~s', '', $input );
    $input = preg_replace( '~\s+$~s', '', $input );
    $input = preg_replace( '~^\s+~m', '', $input );
    $input = preg_replace( '~\s+$~m', '', $input );
    $input = preg_replace( '~\n\s*(?=\n)~ms', '', $input );
    $input = preg_replace( '~([^>\s])(\s+)([^<\s])~', '$1 $3', $input );
    $input = preg_replace( '~(?:(?<=\>)|(?<=\/\>))\t+(?=\<\/?)~', '', $input );
    $input = preg_replace( '~\n~ms', "", $input );
    
    // Restore indent for specific tags
    preg_match_all( $ignored, $input, $modifiedTags );
    foreach ( $modifiedTags[ 0 ] as $key => $match ) {
        $input = str_replace( $match, $safeTagsContent[ 0 ][ $key ], $input );
    }
    
    // Remove comments (but leaves conditional comments untouched)
    return preg_replace( '~<!--(?![\s]?\[if)(.|\s)*?-->~i', '', $input );
    
    // Done
    return $input;
}