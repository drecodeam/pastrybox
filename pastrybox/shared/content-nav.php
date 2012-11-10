<?php if ( is_front_page() || is_single() ): ?>
<div class="content-nav a-area-b clearfix">
    
    <?php $previousThought = get_previous_post();
    if ( ! empty( $previousThought ) ): ?>
    <span class="previous tooltipify baked-by-small"><a href="<?php echo get_permalink( $previousThought->ID ); ?>" title="<?php echo $previousThought->post_title; ?>">Previous Thought</a></span>
    <?php endif; ?>

    <?php $nextThought = get_next_post();
    if ( ! empty( $nextThought ) ): ?>
    <span class="next tooltipify baked-by-small"><a href="<?php echo get_permalink( $nextThought->ID ); ?>" title="<?php echo $nextThought->post_title; ?>">Next Thought</a></span>
    <?php endif; ?>
		
</div>														
<?php endif; ?>