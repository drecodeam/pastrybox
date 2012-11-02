# Improving The Pastry Box


The Pastry Box Project runs on Wordpress and uses [CurtainsUp](http://alexduloz.github.com/CurtainsUp/) as a blueprint for its template.

You can pull requests for new features, design improvements, and whatever crosses your mind. 


# But before you go...

## Limitations

Have you read the [limitations](https://github.com/alexduloz/pastrybox/blob/gh-pages/LIMITATIONS.md) ?

Yes?


## Now you can go


It is quite easy to get ready to improve the Pastry Box Project, but it may take some patience to get started:


* Download and Install Wordpress. As usual.
* In your adminCP, go to "Permalinks". Check "Custom Structure": `/%category%/%postname%/`
* In your adminCP, go to "Permalinks". Rename Category base to "baker"
* In your adminCP, Add _7_ new pages. They must all be _empty_ (nothing to add, just publish them with empty content). Here are the titles those 7 pages: About, Archives, Bakers, Disclaimer, Privacy Policy, Stream, Terms Of Services. 
* In your adminCP, create as many categories as you wish. Categories are named after Bakers (e.g. "Andy Clarke", "Bruce Lawson", "Emily Lewis" etc.). A list of all the guests participating in The Pastry Box Project is available at the following url: [http://the-pastry-box-project.net/bakers](http://the-pastry-box-project.net/bakers).
* In your adminCP, start creating posts: select a category, use a title which adheres to the following format: "1 January 2012, baked by Lea Verou", add some content, publish.
* In your adminCP, repeat previous step, but schedule the post (future post) instead of publishing it.
* In your adminCP, install the Pastry Box Theme (all the files you need are located in the "pastrybox" folder downloaded from Github), and select it as your current theme.

That’s it. You're done.

## The _private Directory

You will see at times references to a "_private" folder (so far only in parts > head.php). This "_private" folder contains material that, for copyright reasons, cannot be shared. Therefore, it cannot be downloaded from Github. It is however very easy to recreate.

_If you don't want to recreate the "_private" directory, the Pastry Box template will still function properly (minus the fonts listed below)_

The "_private" folder contains two files.

* remote-fonts.php
* ss-social.php

### remote-fonts.php

This file contains the typical embed code from [Typekit](https://typekit.com/fonts):
	<script type="text/javascript" src="//use.typekit.net/YOURID.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

If you're using another service, change those lines to what suits your needs.

The Pastry Box project uses the following fonts: 

*  Adobe Garamond Pro by Adobe
*  Myriad Pro by Adobe 
*  Cooper Black Std by Adobe 

### ss-social.php

This file simply loads the SS Social set from [Symbolset](http://symbolset.com/)

	<link href="path/to/ss-social/ss-social.css" rel="stylesheet" />

Just set the path to your own SS Social set.

## Sending Pull Requests

There are two types of pull requests: 

1) Code refactoring, markup changes and any such other modifications which are not perceivable by users, or do not add new features (even “invisible” ones) to the Pastry Box Project.

2) Design alterations, UX improvements, new content architecture, new third-party connections and any other such modifications which either are perceivable by users or add new features (even “invisible” ones) to the Pastry Box Project.

_If your request falls in the first category_, just pull your request as usual. 

_If your request falls in the second category_, make sure you post a link to a *working page* which showcases your modifications. The best way to do this is to install Wordpress on a server and use the Pastry Box template with your modifications.

Please do not use texts published on the-pastry-box-project.net when showcasing your modifications (as it’s copyrighted material). Instead, use the dummy texts in pastrybox.sql.

Happy forking.