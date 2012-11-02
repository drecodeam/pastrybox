<div class="search-results container">
    <?php if( is_archive() && !is_category() ): ?>
    <?php 
    if ( have_posts() )
    the_post();
    ?>
    <h2 class="h-alpha">
        <?php if ( is_day() ) : ?>
        Past Thoughts: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
        Past Thoughts: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
        Past Thoughts: <?php the_date('Y'); ?>
        <?php else : ?>
        Past Thoughts
        <?php endif; ?>
    </h2>

    <?php rewind_posts(); ?>

    <?php endif; /* end if have_posts() */ ?>

    <?php if( is_search() ): ?>
    <h2 class="h-alpha">Search Results For "<?php the_search_query(); ?>"</h2>	
    <?php endif; ?>

    <?php 
    $i = 1;
    while ( have_posts() ) : the_post(); 
    $category = get_the_category( get_the_ID() );
    $theBaker = $bakers->get_by_slug( $category[0]->slug );
    ?>	
    <div class="thought thought-format-b" role="article">
        <h3 class="thought-title">
            <a href="<?php pastry_the_thought_permalink( $category[0], get_post( get_the_ID() ) ); ?>"><?php pastry_the_thought_title_to_date( get_the_title( get_the_ID() ) ); ?></a>
        </h3>
        
        <div class="row">
            <div class="baker-info span3 pull-left">	
                <h4 class="baked-by a-area-b">
                    <a href="<?php echo $theBaker->profile_url; ?>"><?php echo $theBaker->name; ?></a>
                </h4>
            
                <p class="baker-portrait">
                    <img src="<?php echo $theBaker->portrait_small_url; ?>" alt="<?php echo $theBaker->portrait_alt; ?>" class="portrait-small">
                </p>
            </div><!-- /.baker-info -->
            
            <div class="span9 pull-right">
                <blockquote class="thought-content a-area-a">  
                    <?php echo pastry_clean_code( get_the_content() ); ?>
                </blockquote>  
            </div><!-- /.span9 -->
        </div><!-- /.row -->
    </div><!-- /.thought -->

    <?php if ( ( $i % 5 ) === 0 ): ?>
    <p class="clearfix a-area-b">
        <a href="#top" class="jump pull-right">Back To Top</a>
    </p>
    <?php endif; ?>

    <?php $i++; ?>
    
    <?php endwhile; ?>
    
    <?php if ( ( ($i - 1) % 5 ) !== 0 ): ?>
    <p class="a-area-b">
        <a href="#top" class="jump pull-right">Back To Top</a>
    </p>
    <?php endif; ?>
</div><!-- /.search-results -->
