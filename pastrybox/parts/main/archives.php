<div class="archives">

    <div class="container">
        <h2 class="h-alpha">Archived Thoughts</h2>	
    </div>

    <div class="by-years">
        <div class="container">
            <h3 class="h-beta"><span>By Years</span></h3>	
            
            <ul class="row">
                <?php foreach( frontin_get_archives( 'yearly' ) as $archive ): ?>
                <li class="span4">
                    <p class="a-area-b">
                        <a href="<?php echo $archive->href; ?>" title="Thoughts - <?php echo $archive->title; ?>"><?php echo $archive->title; ?></a>
                    </p>
                </li>			
                <?php endforeach; ?>
            </ul>
        </div><!-- /.container -->
    </div><!-- /.by-years -->
    
    <div class="by-months">
        <div class="container">
            <h3 class="h-beta"><span>By Months</span></h3>	

            <ul class="row">
                <?php foreach( frontin_get_archives( 'monthly' ) as $archive ): ?>
                <li class="span4">
                    <p class="a-area-b">
                        <a href="<?php echo $archive->href; ?>" title="Thoughts - <?php echo $archive->title; ?>"><?php echo $archive->title; ?></a>
                    </p>
                </li>			
                <?php endforeach; ?>
            </ul>	
        </div><!-- /.container -->	
    </div><!-- /.by-months -->

    <div class="by-bakers">
        <div class="container">
            <h3 class="h-beta"><span>By Bakers</span></h3>	

            <ul class="row">
                <?php foreach ( $bakers->get_all() as $theBaker ): ?>
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
        </div><!-- /.container -->
    </div><!-- /.by-bakers -->
    
</div><!-- /.archives -->


