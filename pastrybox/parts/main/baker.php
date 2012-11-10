<?php 
$category = get_query_var( 'cat' );
$category = get_category( $category );
$theBaker = $bakers->get_by_slug( $category->slug ); 
?>

<div class="baker-profile wrapper">
    <div class="container">  
        <h2 class="h-alpha"><?php echo $theBaker->name; ?></h2>	
        <div class="row">
            <div class="span4">
                <p class="baker-portrait">
                    <img src="<?php echo $theBaker->portrait_url; ?>" alt="<?php echo $theBaker->portrait_alt; ?>" class="portrait">
                </p>
            </div><!-- /.span4 -->
            <div class="span8 link-area-a">		
                <?php include $theBaker->path_to_bio; ?>
            </div><!-- /.span8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.baker-profile -->

<?php 
$publishedThoughts = pastry_get_thoughts( -1, 'publish', 'ASC', get_category_id( $theBaker->name ) );		
$n = count( $publishedThoughts );
?>

<?php if($n >= 1): ?>	
<div class="baker-past-thoughts wrapper">
    <div class="container">
        <h3 class="h-beta"><span>More thoughts by <?php echo $theBaker->name; ?></span></h3>
        
        <?php foreach( $publishedThoughts as $theThought ) : ?>
        <div class="thought thought-format-a">
            <h4 class="thought-title">
                <a href="<?php pastry_the_baker_thought_permalink( $theBaker->slug, $theThought ); ?>"><?php pastry_the_thought_title_to_date( $theThought->post_title ); ?></a>
            </h4>
            <blockquote class="thought-content a-area-a">
                <?php echo pastry_clean_code( $theThought->post_content ); ?>
            </blockquote>
        </div>
        <?php endforeach; ?>

        <p class="a-area-b">
            <a class="jump pull-right" href="#top">Back To Top</a>
        </p>
    </div><!-- /.container -->
</div><!-- /.baker-past-thoughts -->
<?php endif; /* endif $n >= 1 */ ?>

<?php
$futureThoughts = pastry_get_thoughts( -1, 'future', 'ASC', get_category_id( $theBaker->name ) );
$n = count( $futureThoughts );
?>

<?php if($n >= 1): ?>
<div class="baker-future-thoughts container">
    <?php if ( $n == 1 ): ?>
    <h3 class="h-beta"><span>One more thought by <?php echo $theBaker->name; ?> will be published</span></h3>	
    <?php endif; ?>
		
    <?php if ( $n > 1 ): ?>
    <h3 class="h-beta"><span>Here are the dates of <?php echo $theBaker->name; ?>'s future thoughts</span></h3>
    <?php endif; ?>

    <ul>
        <?php foreach( $futureThoughts as $theThought ) : ?>
        <li><?php pastry_the_thought_title_to_date( $theThought->post_title ); ?></li>
        <?php endforeach; ?>
    </ul>
		
    <p class="a-area-b">
        <a class="jump pull-right" href="#top">Back To Top</a>
    </p>
</div><!-- /.baker-future-thoughts -->
<?php endif; /* endif $n >= 1 */ ?>
		
<?php rewind_posts(); ?>

