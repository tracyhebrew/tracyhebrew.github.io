<?php include('header.php'); ?>
<div id="main" class="default post single">
	
	<!-- ==================== -->
	<!--         HERO         -->
	<!-- ==================== -->
	<section id="hero" class="hero--blog single">
	  
	</section>
	
	<!-- ==================== -->
	<!--     POST CONTENT     -->
	<!-- ==================== -->
	<section id="content" class="section--medium content--post">
		<div class="container">
			
			<div class="sharing text-center">
				<div class="sharing__container">
					<a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;u=http%3A%2F%2Fwww.mfablog.org%2Fhens-help-the-elderly-battle-loneliness" target="_blank">
						<img class="sharing__btn" src="/assets/images/share_facebook.png" border="0">
						<div class="sharing__count" id="shareFacebookCount" style="display: block;">7241</div>
					</a>
				</div>
				<div class="sharing__container">
					<a href="https://twitter.com/intent/tweet?url=http://www.mfablog.org/hens-help-the-elderly-battle-loneliness&amp;text=Beautiful%21+Hens+help+elderly+battle+loneliness.&amp;original_referer=http://www.mfablog.org/hens-help-the-elderly-battle-loneliness" target="_blank">
						<img class="sharing__btn" src="/assets/images/share_twitter.png" border="0">
						<div class="sharing__count" id="shareTwitterCount" style="display: block;">127</div>
					</a>
				</div>
			</div>

			<script type="text/javascript">
				function updateShareNumber(result,id)
				{
					if (result)
					{
						var shares = 0;
						if (result.shares)
							shares = result.shares;
						else
						if (result.count)
							shares = result.count;

						if (shares)
						{
							var element             = document.getElementById(id);
							var value               = parseInt(element.innerHTML);
							if (isNaN(value)) value = 0;
							element.innerHTML       = parseInt(shares) + value;
							element.style.display   = 'block';
						}
					}
				}

				jsonp( "http://graph.facebook.com/?id=http%3A%2F%2Fwww.mfablog.org%2Fhens-help-the-elderly-battle-loneliness",
					function (result)
					{
						updateShareNumber(result,'shareFacebookCount');
					});
				jsonp( "http://urls.api.twitter.com/1/urls/count.json?url=http%3A%2F%2Fwww.mfablog.org%2Fhens-help-the-elderly-battle-loneliness",
					function (result)
					{
						updateShareNumber(result,'shareTwitterCount');
					});
			</script>

			<div class="clearfix"></div>
	
			<div class="post-header">
				<h1>Hens Help the Elderly Battle Loneliness</h1>
				<div class="post-meta">
				  <span class="meta"><i class="fa fa-calendar"></i>November 7, 2014</span>
				  <span class="meta"><i class="fa fa-user"></i>Sarah Von Alt</span>
				</div>
			</div>

			<div class="clearfix"></div>

			<h5>A recent article in <a href="">The Telegraph</a> tells the story of Wood Green, a community of seniors living in sheltered-accommodation bungalows. But the residents include more than just the elderly men and women: Wood Green is also home to 13 hens and 15 chicks, fed every morning by Owen Turnball.</h5>
			<p>Turnball is an 84-year-old resident who tends to the four chicken coops outside his bungalow. But these chickens are valued as companions, not commodities, and residents have shown reduced depression and loneliness since meeting their new feathered friends.</p>

		  <div class="photo-wrapper">
		  	<figure>
		  		<img src="/assets/images/blog-sample01.jpg" alt="" caption="Hello">
		  		<figcaption>Photos by Jane Hilton</figcaption>
		  	</figure>
		  </div>

			<p>Grim numbers released by the Swiss-based International Union for Conservation of Nature pointed to a 33 percent drop in population in just the last two decades. It’s theorized that this is due to an increasing number of fish caught as juveniles.</p>
			<p>Despite outcries from conservation groups, Pacific bluefin continues to be a prized menu item, especially in Japan where 80 percent of bluefin are sold for traditional dishes like sushi and sashimi.</p>
			<p>On the other side of the world, the dwindling Atlantic bluefin population is also troubling scientists. Fishing quotas put in place to revive the dramatically falling numbers have had modest success, but recent quota hikes have experts worried the Atlantic bluefin is also in grave danger.</p>

			<div class="panel--photo">
				<div class="photo span8 left" style="background-image:url(/assets/images/blog-sample02.jpg);"></div>
				<div class="photo span4 right" style="background-image:url(/assets/images/blog-sample03.jpg);"></div>
				<figcaption>Photos by Jane Hilton</figcaption>
			</div>

			<p>These hens bring much more than just good company. Resident Thomas Cresswell says,</p>

			<blockquote>“My life has been a lot fuller since we've had these hens. I think I'd be lost without them."</blockquote>
			
			<p>Unlike the chickens loved and cared for by these residents, chickens on factory farms are treated as mere egg- and meat-producing machines, and their short lives are filled with <a href="">despair</a>.</p>
			
			<div class="video-embed">
				<iframe width="560" height="315" src="//www.youtube.com/embed/VCRdfceqjYY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>


	<!-- ==================== -->
	<!--     SHARE ARTICLE    -->
	<!-- ==================== -->
	<section class="bg-gray section--small share-post">
		<div class="container text-center">
			<h6 class="mb0">Share this Article</h6>
			<ul class="menu--social align-center menu--blue">
				<li><a class="btn btn--blue btn--social" href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://www.mfablog.org/hens-help-the-elderly-battle-loneliness/&text=Hens Help the Elderly Battle Loneliness');"><i class="fa fa-facebook"></i></a></li>
				<li><a class="btn btn--social btn--blue" href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://www.mfablog.org/hens-help-the-elderly-battle-loneliness&text=Hens+Help+the+Elderly+Battle+Loneliness');"><i class="fa fa-twitter"></i></a></li>
				<li><a class="btn btn--social btn--blue" href="http://www.tumblr.com/share/link?url=http%3A%2F%2Fmercyforanimals.com&amp;name=Hens+Help+the+Elderly+Battle+Loneliness&amp;description=Mercy+For+Animals+Blog+reports+how+hens+living+in+a+senior+community+are+helping+the+elderly" target="_blank"><i class="fa fa-tumblr"></i></a></li>
				<li><a class="btn btn--social btn--blue" href="mailto:?subject=Hens Help the Elderly Battle Loneliness&body=Hens Help the Elderly Battle Loneliness. Read this post on Mercy For Animal's blog: http://www.mfablog.org/hens-help-the-elderly-battle-loneliness/blog"><i class="fa fa-envelope"></i></a></li>
			</ul>
		</div>
	</section>

	<!-- ==================== -->
	<!--    NEXT ARTICLE      -->
	<!-- ==================== -->
	<section class="posts next-post">
		<div class="container post">
		  <div class="span4">
		    <a class="circle circle--postimage" style="background-image:url(/assets/images/blog01.jpg);"></a>
		  </div>
		  <div class="span8 float-none cell text-left">
		  	<h3 class="mb0 weight-300 text-blue">Next Article:</h3>
		    <h3 class="mb30">Man Finds Pig's Tattooed ID Number On Food</h3>
		    <p>The <a href="">Daily Mail</a> is reporting what one man discovered while eating his pork scratchings (pork rinds): a tattooed ID number <a class="bold" href="">Read More...</a></p>
		  </div>
		</div>
	</section>

</div> <!-- #main -->

<?php include('footer.php'); ?>