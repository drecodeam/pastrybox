<div class="stream container">
    <h2 class="h-alpha">Stream</h2>

    <?php $i = 1; ?>

    <?php foreach ( pastry_get_thoughts(-1, 'publish', 'ASC') as $theThought ): ?>

    <?php 
    $category = get_the_category( $theThought->ID ); 
    $theBaker = $bakers->get_by_slug( $category[0]->slug );
    ?>
		        
    <div class="thought thought-format-b" role="article">
        <h3 class="thought-title">
            <a href="<?php pastry_the_thought_permalink( $category[0], $theThought ); ?>"><?php pastry_the_thought_title_to_date( $theThought->post_title ); ?></a>
        </h3>
		      
        <div class="row">
            <div class="baker-info span3 pull-left">		                      
                <h4 class="baked-by a-area-b">
                    <span><a href="<?php echo $theBaker->profile_url; ?>"><?php echo $theBaker->name; ?></a></span>
                </h4>					
                <p class="baker-portrait">
                    <img src="<?php echo $theBaker->portrait_small_url; ?>" alt="<?php echo $theBaker->portrait_alt; ?>" class="portrait-small">
                </p>
            </div><!-- /.baker-info -->
            
            <div class="span9 pull-right">
                <blockquote class="thought-content a-area-a">  
                    <?php echo pastry_clean_code( $theThought->post_content ); ?>                   
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

    <?php endforeach; ?>
    
    <?php if ( ( ($i - 1) % 5 ) !== 0 ): ?>
    <p class="a-area-b">
        <a href="#top" class="jump pull-right">Back To Top</a>
    </p>
    <?php endif; ?>
</div><!-- /.stream -->



