<div class="main" role="main">
    <h1 id="h-main" class="visuallyhidden">Main Content</h1>
    <?php
    if( is_page('stream') ) {
        require_once('parts/main/stream.php');
    }

    if( is_page('archives') ) {
        require_once('parts/main/archives.php');
    }

    if( ( ( is_search() and have_posts() ) or is_archive() ) and !is_category() ) {
        require_once('parts/main/search-results.php');
    }
    
    if( is_category() ) {
        require_once('parts/main/baker.php');
    }

    if( is_front_page() or is_single()  ) {
        require_once('parts/main/single-thought.php');
    }

    if( is_page( 'bakers' ) ) {
        require_once('parts/main/bakers.php');
    }
                  
    if( is_page( 'about' ) ) {
        require_once('static/about.php');
    }
                  
    if( is_page( 'disclaimer' ) ) {
        require_once('static/disclaimer.php');
    }
                  
    if( is_page( 'privacy-policy' ) ) {
        require_once('static/privacy-policy.php');
    }
                  
    if( is_page( 'terms-of-services' ) ) {
        require_once('static/terms-of-services.php');
    }

    if( is_404() || ( is_search() && !have_posts() ) ) {
        require_once('parts/main/not-found.php');
    }
    ?>
</div><!-- /.main -->