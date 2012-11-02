
<?php 
if ( have_posts() )
the_post();
$category = get_the_category( get_the_ID() );
$theBaker = $bakers->get_by_slug( $category[0]->slug );
?>
<div class="thought thought-format-a container" role="article">
    <h2 class="thought-title">
        <a href="<?php the_permalink(); ?>"><?php pastry_the_thought_title_to_date( get_the_title(), true ); ?></a>
    </h2>
    <h3 class="baked-by">
        <span>baked by</span>
        <span><a href="<?php echo $theBaker->profile_url; ?>"><?php echo $theBaker->name; ?></a></span>
    </h3>
    
    <p class="baker-portrait">
        <img src="<?php echo $theBaker->portrait_small_url; ?>" alt="<?php echo $theBaker->portrait_alt; ?>" title="<?php echo $theBaker->portrait_alt; ?>" class="portrait-small">	
    </p>

    <blockquote class="thought-content a-area-a">
        <?php echo pastry_clean_code( get_the_content() ); ?>
    </blockquote>
      
    <div class="thought-footer">
        <p>This thought was written by <a href="<?php echo $theBaker->profile_url; ?>" title="Profile"><?php echo $theBaker->name; ?></a> and first published on <?php pastry_the_thought_title_to_date( get_the_title(), true ); ?>.</p> 
         
        <ul class="tooltipify a-area-no-underline">
            <li>
                <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Sugar+For+The+Mind.+@<?php echo($theBaker->twitter); ?>+On+The+Pastry+Box&amp;via=thepastrybox" title="Share The Love" class="pastrybox"><span class="visuallyhidden">Share The Love</span></a>
            </li>
            <?php if ( $theBaker->twitter <> "" ):  ?>
            <li>
                <a href="https://twitter.com/<?php echo $theBaker->twitter; ?>" class="ss-twitter" title="Follow @<?php echo $theBaker->twitter; ?>"><span class="visuallyhidden">Follow @<?php echo $theBaker->twitter; ?></span></a>
            </li>
            <?php endif; ?>
            <li>
                <a href="<?php bloginfo('url'); ?>/baker/<?php echo $theBaker->slug; ?>/feed" class="ss-rss" title="<?php echo $theBaker->name; ?>'s Flux"><span class="visuallyhidden">Don't Miss Thoughts By <?php echo $theBaker->name; ?></span></a>
            </li>
        </ul>
    </div><!-- /.thought-footer -->

<?php include 'shared/content-nav.php'; ?>

</div><!-- /.thought -->



<?php rewind_posts(); ?>