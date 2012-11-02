<form action="<?php bloginfo('url'); ?>/" method="get" role="search" class="form-search">
    <fieldset>
        <label>
            <span class="visuallyhidden">Search for</span>
            <input type="text" name="s" class="search-query" value="<?php the_search_query(); ?>" />
        </label>
			        
        <button type="submit" class="search-btn pastrysearch"><span class="visuallyhidden">Go</span></button>
			    
    </fieldset>
</form>