<div class="not-found container">
    <h2 class="h-alpha">Not Found</h2>								 		
    <?php if ( is_404() ) : ?>
    <p>Sorry, but nothing matched your search. Please try again with some different keywords.</p>								 			
    <?php else : /* category and search */ ?>
    <p>Sorry, but nothing matched your search. Please try again with some different keywords.</p>
    <?php endif; ?>
    
    <?php include 'search-form.php'; ?>
</div><!-- /.not-found -->