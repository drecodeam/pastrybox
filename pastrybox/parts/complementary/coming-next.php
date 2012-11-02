<div class="coming-next">
    <div class="container">
        <h2 class="h-beta">
            <span>What's coming next</span>
        </h2>	

        <ul class="row">			          
            <?php foreach( pastry_get_thoughts( 9, 'future', 'ASC' ) as $theThought ): ?>
        
            <?php 
            $category = get_the_category( $theThought->ID ); 
            $theBaker = $bakers->get_by_slug( $category[0]->slug );
            ?>                
        
            <li class="span4">
                <h3 class="coming-next-date">
                    <?php pastry_the_thought_title_to_date( $theThought->post_title ); ?>
                </h3> 
            
                <h4 class="baked-by a-area-b">
                    <a href="<?php echo $theBaker->profile_url;?>"><?php echo $theBaker->name; ?></a>
                </h4>
                <p>
                    <img src="<?php echo $theBaker->portrait_small_url; ?>" alt="<?php echo $theBaker->portrait_alt; ?>" class="portrait-small">
                </p>
            </li>
            <?php endforeach; ?>
        </ul>
    
        <p class="a-area-b">
            <a href="#top" class="jump pull-right">Back To Top</a>
        </p>
    </div>

</div>


		