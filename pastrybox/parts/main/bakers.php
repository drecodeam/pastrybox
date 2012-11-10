<div class="bakers container">
    <h2 class="h-alpha"><?php the_title(); ?></h2>					
	
	<ul class="row">
	    <?php foreach ( $bakers->get_years() as $year ): ?>
        <li class="span12 no-margin">
            <h3 class="h-beta"><span><?php echo($year); ?></span></h3>
        </li>        
        <li class="bakers-<?php echo( $year ); ?>">
            
            <ul class="row">
                <?php foreach ( $bakers->get_by_year( $year ) as $theBaker ): ?>
                <li class="span4 the-baker">
                    <h4 class="baked-by a-area-b">
                        <a href="<?php echo $theBaker->profile_url; ?>" title="Thoughts - <?php echo $theBaker->name; ?>"><?php echo $theBaker->name; ?></a>
                    </h4> 
                    <p>
                        <img src="<?php echo $theBaker->portrait_small_url; ?>" alt="<?php echo $theBaker->portrait_alt; ?>" class="portrait-small">
                    </p>
                </li>
                <?php endforeach; ?>
            </ul>
	    
            <p class="a-area-b">
                <a class="jump pull-right" href="#top">Back To Top</a>
            </p>
		
        </li>
        <?php endforeach; ?>
    </ul>
    
</div><!-- /.bakers --> 
