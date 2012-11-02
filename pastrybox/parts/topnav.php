<div class="navbar navbar-inverse navbar-fixed-top">
    <h1 class="visuallyhidden">Top Navigation</h1>
    <h2 class="visuallyhidden">Shortcuts</h2>
    <ul class="visuallyhidden" role="navigation">
        <li><a href="#h-main" title="Jump to main content">Jump to main content</a></li>
        <?php if ( is_front_page() ): ?>
        <li><a href="#h-complementary" title="Jump to complementary content">Jump to complementary content</a></li>
        <?php endif; ?>
        <li><a href="#h-contentinfo" title="Jump to additional information">Jump to additional information</a></li>
    </ul>
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                Toggle Menu
            </a>
            <div class="nav-collapse collapse">
                <div class="search-container">
                    <h2 class="visuallyhidden">Search</h2>
                    <?php include 'search-form.php'; ?>
                </div><!-- /.pull-right -->
                <h2 class="visuallyhidden">Links</h2>
                <ul class="nav mainnav a-area-no-underline">
                    <li>
                        <a href="<?php bloginfo( 'url' ); ?>/about">About</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo( 'url' ); ?>/bakers">Bakers</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo( 'url' ); ?>/stream">Stream</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo( 'url' ); ?>/archives">Archives</a>
                    </li>
                    <li class="tooltipify">
                        <a href="<?php bloginfo( 'url' ); ?>" class="pastrybox" title="Home"><span class="visuallyhidden">Home</span></a>
                    </li>
                    <li class="tooltipify">
                        <a href="https://twitter.com/thepastrybox" class="ss-twitter" title="Follow @thepastrybox"><span class="visuallyhidden">Follow @thepastrybox</span></a>
                    </li>
                    <li class="tooltipify">
                        <a href="https://github.com/alexduloz/pastrybox" class="ss-octocat" title="Fork The Pastry Box"><span class="visuallyhidden">Fork The Pastry Box</span></a>
                    </li>
                    <li class="tooltipify">
                        <a href="<?php bloginfo('rss2_url'); ?>" class="ss-rss" title="The Flux"><span class="visuallyhidden">The Flux</span></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--/.navbar-inner -->
</div><!--/.navbar -->
