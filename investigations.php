<?php include('header.php'); ?>

<div id="main" class="default">
	
	<!-- ==================== -->
	<!--         HERO         -->
	<!-- ==================== -->
	<section id="hero" class="hero--parallax hero--investigations hero--video" data-video-service="youtube" data-video-id="XDdW3NGb7Nc">
	 <div class="parallax__bg hero__inner"
	   data-center="background-position: 50% 0px;"
	   data-top-bottom="background-position: 50% -100px;"
	   data-anchor-target="#hero"
	 >
	   <div class="parallax__container">
	     	<div class="parallax__content"
	       data-top="opacity: 0.5"
	       data-100-top="opacity: 1"
	       data-anchor-target="h1"
	     	>
	      <a href="" class="hero--video__play white"><i class="fa fa-play"></i></a>
	      <h1>Undercover Investigations</h1>
	      <h5>Behind closed doors, animals are suffering on factory farms. Mercy for Animals<br> brave undercover investigators risk eveyrthing to expose and end it.</h5>
	     </div>
	   </div>
	 </div>
	 <a href="" id="hero--video__close"><i class="fa fa-times"></i> close</a>
	</section>

	<!-- ==================== -->
	<!--     INTERSTITIAL     -->
	<!-- ==================== -->
	<section class="interstitial section--large interstitial--circle ">
		<div class="container">
			<div class="circle-descrip left">
				<div class="inner">
					<h3 class="mb30">Exposing the Truth</h3>
					<p>On industrial farms and slaughterhouses, farmed animals endure shocking abuse, out of sight and out of mind. But a team of undercover investigators with Mercy For Animals, wired with hidden cameras, are risking it all to pull back the curtains of these cruel and secretive industries, leading to landmark changes along the way.</p>
				</div>
			</div>
			<div class="circle circle--xlrg" style="background-image:url(/assets/images/circlelrg-expose02.jpg);"></div>

		</div>
	</section>
<!-- 	<section class="interstitial section--large interstitial--investigations">
		<div class="container table">
			<div class="span7 offset1 float-none cell text-left pr40 pr--mobilenone">
				<h3 class="mb30">Exposing the Truth</h3>
				<p>On industrial farms and slaughterhouses, farmed animals endure shocking abuse, out of sight and out of mind. But a team of undercover investigators with Mercy For Animals, wired with hidden cameras, are risking it all to pull back the curtains of these cruel and secretive industries, leading to landmark changes along the way.</p>
			</div>
			<div class="span5">
			  <div class="circle circle--xlrg" style="background-image:url(/assets/images/circlelrg-expose02.jpg);"></div>
			</div>
		</div>
	</section>
 -->
	<!-- ==================== -->
	<!--     LATEST CASE      -->
	<!-- ==================== -->
	<section class="video lazyload show latest-investigation" data-video-id="OGc3samj8N8" data-video-service="youtube">
		<div class="container text-center">
			<div class="lazyload__content">
				<h3 class="text-white mb30">Is your pizza topped with horrific animal cruelty?</h3>
				<p class="text-white mb30">A new Mercy For Animals undercover investigation reveals shocking animal abuse at a milk producer for Leprino Foods – the world’s largest mozzarella cheese maker and major cheese supplier to Pizza Hut, Domino's and Papa John’s.</p>
			</div>
			<a class="btn--lazyload"><i class="fa fa-play"></i></a>
			<p class="serif text-yellow larger">Watch the Latest Investigation</p>
		</div>

	</section>

	<!-- ==================== -->
	<!--  SIGN THE PETITION   -->
	<!-- ==================== -->
	<section class="section--large form--signup inverted-triangle bg-gray">
		<div class="container text-center">
			<h4 class="mb20"><span class="icon-check inline baseline mr10"></span>Sign the Petition</h4>
			<h6 class="mb20 text-gray">Tell the world's largest pizza cheese supplier to stop abusing cows</h6>
			
			<form method="" id="" action="" class="form--signup">
			  <div class="fieldset name fieldset--withicon">
			  	<input name="user_name" id="" type="text" class="ginput_amount" tabindex="1" placeholder="Name" onchange="this.className=(this.value=='')?'':'visited';">
			  	<label class="gfield_label" for="input_1_1"><i class="fa fa-user"></i></label>
			  </div>

				<div class="fieldset email fieldset--withicon">
					<input name="user_email" id="" type="text" class="" tabindex="2" placeholder="Email Address" onchange="this.className=(this.value=='')?'':'visited';">
					<label class="gfield_label" for="input_1_2"><i class="fa fa-envelope-o"></i></label>
				</div>

				<div class="fieldset zipcode fieldset--withicon">
					<input name="user_zipcode" id="" type="text" class="" tabindex="3" placeholder="Zip Code" onchange="this.className=(this.value=='')?'':'visited';">
					<label class="gfield_label" for="input_1_3"><i class="fa fa-home"></i></label>
				</div>

				<div class="span12 mt10">
				  <input class="btn btn--primary" type="submit" tabindex="4" value="Submit">
				</div>
      </form>
		</div>
	</section>

	<!-- ==================== -->
	<!--    INVESTIGATIONS    -->
	<!-- ==================== -->
	
	<?php // GET VIDEO THUMBNAIL

  	function get_video_thumb($url) {
	    $image_url = parse_url($url);

	    if( $image_url['host'] == 'www.youtube.com' || $image_url['host'] == 'youtube.com' ) {
        $array = explode("&", $image_url['query']);
        return "http://img.youtube.com/vi/".substr($array[0], 2)."/0.jpg";
	    } else if( $image_url['host'] == 'www.vimeo.com' || $image_url['host'] == 'vimeo.com' ) {
        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".substr($image_url['path'], 1).".php"));
        return $hash[0]["thumbnail_large"];
	    }
  	}
	?>

	<section class="section--large section--videoPlaylist">
		<div class="container">
			<div class="section__intro text-center">
				<h4 class="mt0">Past Investigations</h4>
				<h6 class="text-gray">Animal abuse runs rampant within the meat, dairy, and egg industries. With no federal <br>laws regulating the treatment of animals on factory farms, cruelty has become the norm.</h6>
			</div>
			<hr class="divide--small divide--light mt50 mb50">
			
			<!--
			   - PORK
			~-->
			<div class="investigation">
				<h4 class="mt0">Pork</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="pork" class="vid_frame ytplayer" src="http://www.youtube.com/embed/-KoVAkgPexU?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>Western Hog Exchange</h5>
			  		<h6>Alberta, 2014</h6>
						<p>The investigation generated extensive media coverage, starting with a feature on W5, the longest- running and most-watched documentary program in Canada. It later landed a feature on CBC News as well as front-page headlines in the Toronto Star.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>
				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	  		    <!-- VIDEO 2 -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="T48yOYjz5sk">
    		      <span class="playlist__thumb" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=T48yOYjz5sk'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Tyson Pork Group</p>
    		      	<p class="small">Oklahoma, 2013</p>
    		      </span>
      		  	<div class="video__desc">
      		  		<h5>Tyson Pork Group</h5>
      		  		<h6>Oklahoma, 2013</h6>
      		  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
      		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
	        
	        	<!-- VIDEO 3 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="-KoVAkgPexU">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=-KoVAkgPexU'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Pipestone System</p>
	            	<p class="small">Minnesota, 2013</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Pipestone System</h5>
	          		<h6>Minnesota, 2013</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>
	  				
	  				<!-- VIDEO 4 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="A9BhRZ4xkME">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=A9BhRZ4xkME'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Puratone</p>
	            	<p class="small">Manitoba, 2012</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Puratone</h5>
	          		<h6>Manitoba, 2012</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 5 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="T83ewTeF5wY">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=T83ewTeF5wY'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Christensen Farms</p>
	            	<p class="small">Minnesota, 2012</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Christensen Farms</h5>
	          		<h6>Minnesota, 2012</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 6 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="jBR4FlrWVk4">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=jBR4FlrWVk4'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Iowa Street</p>
	            	<p class="small">Minnesota, 2013</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Iowa Street</h5>
	          		<h6>Minnesota, 2013</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 7 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="fDiSR0LGry8">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=fDiSR0LGry8'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Country View Family Farms</p>
	            	<p class="small">Pennsylvania, 2009</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Country View Family Farms</h5>
	          		<h6>Pennsylvania, 2009</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>
						
						<!-- VIDEO 1 (current) -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="-KoVAkgPexU">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=-KoVAkgPexU'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Western Hog Exchange</p>
    		      	<p class="small">Alberta, 2014</p>
    		      </span>
      		  	<div class="video__desc">
      		  		<h5>Western Hog Exchange</h5>
      		  		<h6>Alberta, 2014</h6>
      					<p>The investigation generated extensive media coverage, starting with a feature on W5, the longest- running and most-watched documentary program in Canada. It later landed a feature on CBC News as well as front-page headlines in the Toronto Star.</p>
      		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
				  </ul>  
				</div>
			</div>

			<!--
			   - CHICKEN
			~-->
			<div class="investigation">
				<h4>Chicken</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="chicken" class="vid_frame ytplayer" src="http://www.youtube.com/embed/HN0g13kMk6s?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>Horizon Hatchery</h5>
			  		<h6>Ontario, 2014</h6>
						<p>Hidden-camera video exposed extreme cruelty to animals at a chicken hatchery owned by Maple Leaf Foods, one of Canada's largest meat producers. The shocking video footage shows baby chicks flung by their fragile wings and slammed into metal dividers.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>

				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	  		    <!-- VIDEO 2 -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="HN0g13kMk6s">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=HN0g13kMk6s'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Horizon Hatchery</p>
    		      	<p class="small">Ontario, 2014</p>
    		      </span>
      		  	<div class="video__desc">
      		  		<h5>Horizon Hatchery</h5>
      		  		<h6>Ontario, 2014</h6>
      		  		<p>Hidden-camera video exposed extreme cruelty to animals at a chicken hatchery owned by Maple Leaf Foods, one of Canada's largest meat producers. The shocking video footage shows baby chicks flung by their fragile wings and slammed into metal dividers.</p>
      		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
    		   </ul>
    		  </div>
			</div>

			<!--
			   - DAIRY
			~-->
			<div class="investigation">
				<h4>Dairy</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="dairy" class="vid_frame ytplayer" src="http://www.youtube.com/embed/OGc3samj8N8?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>Winchester Dairy</h5>
			  		<h6>New Mexico, 2014</h6>
						<p>Once again, a Mercy for Animals investigator uncovered criminal cruelty to animals - this time at a milk supplier to Leprino Foods, the world's largest maker of mozzarella cheese. Leprino is a major cheese supplier to Pizza Hut, Domino's, and Papa John's.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>
				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	  		    
	        	<!-- VIDEO 2 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="HEDW78ruLTM">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=HEDW78ruLTM'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Chilliwack Cattle Sales</p>
	            	<p class="small">Vancouver, 2014</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Chilliwack Cattle Sales</h5>
	          		<h6>Vancouver, 2014</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>
	  				
	  				<!-- VIDEO 3 * NEEDS VIDEO ID-->
	          <li class="slide playlist__video" data-video-service="vimeo" data-video-id="87701971">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('http://vimeo.com/87701971'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Wiese Brothers Farms</p>
	            	<p class="small">Wisconsin, 2013</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Wiese Brothers Farms</h5>
	          		<h6>Wisconsin, 2013</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 4 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="lN_YcWOuVqk">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=lN_YcWOuVqk'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">BettenCourt Dairies</p>
	            	<p class="small">Idaho, 2012</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>BettenCourt Dairies</h5>
	          		<h6>Idaho, 2012</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 5 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="Ki57eFs7XFo">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=Ki57eFs7XFo'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">E6 Cattle Co.</p>
	            	<p class="small">Texas, 2011</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>E6 Cattle Co.</h5>
	          		<h6>Texas, 2011</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

    				<!-- VIDEO 6 -->
            <li class="slide playlist__video" data-video-service="youtube" data-video-id="gYTkM1OHFQg">
              <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=gYTkM1OHFQg'); ?>);"></span>
              <span class="playlist__desc">
              	<p class="title">Conklin Dairy Farms</p>
              	<p class="small">Ohio, 2012</p>
              </span>

            	<div class="video__desc">
            		<h5>Conklin Dairy Farms</h5>
            		<h6>Ohio, 2012</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
            		<a href="" class="link" target="_blank">Learn More</a>
            	</div>
            </li>

    				<!-- VIDEO 7 -->
            <li class="slide playlist__video" data-video-service="youtube" data-video-id="6RNFFRGz1Qs">
              <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=6RNFFRGz1Qs'); ?>);"></span>
              <span class="playlist__desc">
              	<p class="title">Willet Dairy</p>
              	<p class="small">New York, 2009</p>
              </span>

            	<div class="video__desc">
            		<h5>Willet Dairy</h5>
            		<h6>New York, 2009</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
            		<a href="" class="link" target="_blank">Learn More</a>
            	</div>
            </li>

	          <!-- VIDEO 1 (current) -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="OGc3samj8N8">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=OGc3samj8N8'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Winchester Dairy</p>
    		      	<p class="small">New Mexico, 2014</p>
    		      </span>
      		  	<div class="video__desc">
  	  		  		<h5>Winchester Dairy</h5>
  	  		  		<h6>New Mexico, 2014</h6>
  	  					<p>Once again, a Mercy for Animals investigator uncovered criminal cruelty to animals - this time at a milk supplier to Leprino Foods, the world's largest maker of mozzarella cheese. Leprino is a major cheese supplier to Pizza Hut, Domino's, and Papa John's.</p>
  	  		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
				  </ul>  
				</div>
			</div>

			<!--
			   - EGGS
			~-->
			<div class="investigation">
				<h4>Eggs</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="eggs" class="vid_frame ytplayer" src="http://www.youtube.com/embed/gEL1RGMKDsM?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>Creekside Farms and Kuku Farms</h5>
			  		<h6>Alberta, 2013</h6>
						<p>Mercy For Animals Canada shocked the nation with hidden-camer video of two suppliers to Burnbrae Farms - McDonald's Canada's exclusive egg provider. The undercover investigation revealed n-camera video of two suppliers.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>
				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	        	
	        	<!-- VIDEO 2 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="r6E8H3C1CrU">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=r6E8H3C1CrU'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Sparboe Farms</p>
	            	<p class="small">Iowa, Minnesota and Colorado 2011</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Sparboe Farms</h5>
	          		<h6>Iowa, Minnesota and Colorado 2011</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>
	  				
	  				<!-- VIDEO 3 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="JJ--faib7to">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=JJ--faib7to'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Hy-Line Hatchery</p>
	            	<p class="small">Iowa, 2009</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Hy-Line Hatchery</h5>
	          		<h6>Iowa, 2009</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 4 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="1dOauM9LNTc">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=1dOauM9LNTc'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Quality Egg of New England</p>
	            	<p class="small">Maine, 2009</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Quality Egg of New England</h5>
	          		<h6>Maine, 2009</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

    				<!-- VIDEO 5 -->
            <li class="slide playlist__video" data-video-service="youtube" data-video-id="1dOauM9LNTc">
              <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=1dOauM9LNTc'); ?>);"></span>
              <span class="playlist__desc">
              	<p class="title">Quality Egg of New England</p>
              	<p class="small">Maine, 2009</p>
              </span>

            	<div class="video__desc">
            		<h5>Quality Egg of New England</h5>
            		<h6>Maine, 2009</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
            		<a href="" class="link" target="_blank">Learn More</a>
            	</div>
            </li>

	  				<!-- VIDEO 6 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="Bd_pCS9N5Vg">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=Bd_pCS9N5Vg'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Norco Ranch</p>
	            	<p class="small">California, 2008</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Norco Ranch</h5>
	          		<h6>California, 2008</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

    				<!-- VIDEO 7 -->
            <li class="slide playlist__video" data-video-service="youtube" data-video-id="XXuY8rK3kTw">
              <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=XXuY8rK3kTw'); ?>);"></span>
              <span class="playlist__desc">
              	<p class="title">Gemperle Enterprises</p>
              	<p class="small">California, 2008</p>
              </span>

            	<div class="video__desc">
            		<h5>Gemperle Enterprises</h5>
            		<h6>California, 2008</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
            		<a href="" class="link" target="_blank">Learn More</a>
            	</div>
            </li>

    				<!-- VIDEO 8 -->
            <li class="slide playlist__video" data-video-service="youtube" data-video-id="KLagc6YaxlI">
              <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=KLagc6YaxlI'); ?>);"></span>
              <span class="playlist__desc">
              	<p class="title">Ohio Fresh Eggs</p>
              	<p class="small">Ohio, 2004</p>
              </span>

            	<div class="video__desc">
            		<h5>Ohio Fresh Eggs</h5>
            		<h6>Ohio, 2004</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
            		<a href="" class="link" target="_blank">Learn More</a>
            	</div>
            </li>

	          <!-- VIDEO 1 (current) -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="gEL1RGMKDsM">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=gEL1RGMKDsM'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Creekside Farms and Kuku Farms</p>
    		      	<p class="small">Alberta, 2013</p>
    		      </span>
      		  	<div class="video__desc">
  	  		  		<h5>Creekside Farms and Kuku Farms</h5>
  	  		  		<h6>Alberta, 2013</h6>
  	  					<p>Mercy For Animals Canada shocked the nation with hidden-camer video of two suppliers to Burnbrae Farms - McDonald's Canada's exclusive egg provider. The undercover investigation revealed n-camera video of two suppliers.</p>
  	  		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
				  </ul>  
				</div>
			</div>

			<!--
			   - TURKEY
			~-->
			<div class="investigation">
				<h4>Turkey</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="turkey" class="vid_frame ytplayer" src="http://www.youtube.com/embed/OJovxS9-RTQ?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>Butterball</h5>
			  		<h6>North Carolina, 2014</h6>
						<p>An MFA investigation documented appalling abuse and neglect at a Butterball facility in Shannon, North Carolina. Butterball workers violently kicked and stomped on birds, dragged them by their wings and necks, slammed them into transport crates and left turkeys.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>
				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	        	
	        	<!-- VIDEO 2 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="zw_i1Yxc4Oo">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=zw_i1Yxc4Oo'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Hybrid Turkeys</p>
	            	<p class="small">Ontario, 2014</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Hybrid Turkeys</h5>
	          		<h6>Ontario, 2014</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>
	  				
	  				<!-- VIDEO 3 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="PRxNj3bbqyc">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=PRxNj3bbqyc'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Butterball</p>
	            	<p class="small">North Carolina, 2012</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Butterball</h5>
	          		<h6>North Carolina, 2012</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 4 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="D5LM06ZvCk4">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=D5LM06ZvCk4'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Butterball</p>
	            	<p class="small">North Carolina, 2011</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Butterball</h5>
	          		<h6>North Carolina, 2011</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 5 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="9Mkgz2iuMpw">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=9Mkgz2iuMpw'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">House of Raeford Farms</p>
	            	<p class="small">North Carolina, 2007</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>House of Raeford Farms</h5>
	          		<h6>North Carolina, 2007</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	          <!-- VIDEO 1 (current) -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="OJovxS9-RTQ">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=OJovxS9-RTQ'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Butterball</p>
    		      	<p class="small">North Carolina, 2014</p>
    		      </span>
      		  	<div class="video__desc">
  	  		  		<h5>Butterball</h5>
  	  		  		<h6>North Carolina, 2014</h6>
  							<p>An MFA investigation documented appalling abuse and neglect at a Butterball facility in Shannon, North Carolina. Butterball workers violently kicked and stomped on birds, dragged them by their wings and necks, slammed them into transport crates and left turkeys.</p>
  	  		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
				  </ul>  
				</div>
			</div>

			<!--
			   - VEAL
			~-->
			<div class="investigation">
				<h4>Veal</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="veal" class="vid_frame ytplayer" src="http://www.youtube.com/embed/x6rQJkaQOUk?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>D&eacute;limax Veal</h5>
			  		<h6>Quebec, 2014</h6>
						<p>An MFA investigator documented appalling abuse and neglect at a Butterball facility in Shannon, North Carolina. Butterball workers violently kicked and stomped on birds, dragged them by their wings and necks, slammed them into transport crates and left turkeys.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>
				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	        	
	        	<!-- VIDEO 2 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="Y82jTI3BqRM">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=Y82jTI3BqRM'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Buckeye Veal Farm</p>
	            	<p class="small">Ohio, 2010</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Buckeye Veal Farm</h5>
	          		<h6>Ohio, 2010</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	          <!-- VIDEO 1 (current) -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="x6rQJkaQOUk">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=x6rQJkaQOUk'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">D&eacute;limax Veal</p>
    		      	<p class="small">Quebec, 2014</p>
    		      </span>
      		  	<div class="video__desc">
  	  		  		<h5>D&eacute;limax Veal</h5>
  	  		  		<h6>Quebec, 2014</h6>
  					<p>An MFA investigator documented appalling abuse and neglect at a Butterball facility in Shannon, North Carolina. Butterball workers violently kicked and stomped on birds, dragged them by their wings and necks, slammed them into transport crates and left turkeys.</p>
  	  		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
				  </ul>  
				</div>
			</div>

			<!--
			   - OTHER
			~-->
			<div class="investigation">
				<h4>Other</h4>

				<!-- THE YOUTUBE PLAYER -->
		  	<div class="videoPlayer span12 mb20">
			  	<div class="span8">
				  	<div class="videoPlayer__container">
						  <iframe id="other" class="vid_frame ytplayer" src="http://www.youtube.com/embed/q3hoK_NZC4M?enablejsapi=1&playerapiid=ytplayer&version=3?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
						</div>
			  	</div>
			  	<div class="span4 video__desc--current">
			  		<h5>Livestock Markets</h5>
			  		<h6>Mississippi, 2014</h6>
						<p>An MFA investigator documented appalling abuse and neglect at a Butterball facility in Shannon, North Carolina. Butterball workers violently kicked and stomped on birds, dragged them by their wings and necks, slammed into them into transport crates and left turkeys.</p>
			  		<a href="" class="link" target="_blank">Learn More</a>
			  	</div>
		  	</div>
				<div class="clearfix"></div>
				<!-- PLAYLIST -->
				<div class="playlist">
				  <ul class="slides">
	        	
	        	<!-- VIDEO 2 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="9ECEf0_nQcI">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=9ECEf0_nQcI'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Hudson Valley Foie Gras</p>
	            	<p class="small">Ontario, 2014</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Hudson Valley Foie Gras</h5>
	          		<h6>Ontario, 2014</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

    				<!-- VIDEO 3 -->
            <li class="slide playlist__video" data-video-service="youtube" data-video-id="jiil6ONtDxU">
              <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=jiil6ONtDxU'); ?>);"></span>
              <span class="playlist__desc">
              	<p class="title">Reichardt Duck Farm</p>
              	<p class="small">California, 2014</p>
              </span>

            	<div class="video__desc">
            		<h5>Reichardt Duck Farm</h5>
            		<h6>California, 2014</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
            		<a href="" class="link" target="_blank">Learn More</a>
            	</div>
            </li>
	  				
	  				<!-- VIDEO 4 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="o2_KlJE5PAc">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=o2_KlJE5PAc'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Ontario Livestock Sales</p>
	            	<p class="small">California, 2012</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Ontario Livestock Sales</h5>
	          		<h6>California, 2012</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 5 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="hsYnAVmF4ac">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=hsYnAVmF4ac'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Illegal Slaughter Operation</p>
	            	<p class="small">California, 2012</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Illegal Slaughter Operation</h5>
	          		<h6>California, 2012</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	  				<!-- VIDEO 6 -->
	          <li class="slide playlist__video" data-video-service="youtube" data-video-id="sD9M8cjXsL0">
	            <span class="playlist__thumb" style="background-image:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=sD9M8cjXsL0'); ?>);"></span>
	            <span class="playlist__desc">
	            	<p class="title">Catfish Corner</p>
	            	<p class="small">Texas, 2010</p>
	            </span>

	          	<div class="video__desc">
	          		<h5>Catfish Corner</h5>
	          		<h6>Texas, 2010</h6>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada, metus varius vehicula blandit, leo nulla venenatis neque, in rutrum dolor sem eget augue.</p>
	          		<a href="" class="link" target="_blank">Learn More</a>
	          	</div>
	          </li>

	          <!-- VIDEO 1 (current) -->
    		    <li class="slide playlist__video" data-video-service="youtube" data-video-id="q3hoK_NZC4M">
    		      <span class="playlist__thumb current" style="background:url(<?php echo get_video_thumb('https://www.youtube.com/watch?v=OGc3samj8N8'); ?>);"></span>
    		      <span class="playlist__desc">
    		      	<p class="title">Livestock Markets</p>
    		      	<p class="small">Mississippi, 2014</p>
    		      </span>
      		  	<div class="video__desc">
  	  		  		<h5>Livestock Markets</h5>
  	  		  		<h6>Mississippi, 2014</h6>
  							<p>An MFA investigator documented appalling abuse and neglect at a Butterball facility in Shannon, North Carolina. Butterball workers violently kicked and stomped on birds, dragged them by their wings and necks, slammed into them into transport crates and left turkeys.</p>
  	  		  		<a href="" class="link" target="_blank">Learn More</a>
      		  	</div>
    		    </li>
				  </ul>  
				</div>
			</div>

		</div><!-- .container -->
	</section>


	<!-- ==================== -->
	<!--    4 CTA / DONATE    -->
	<!-- ==================== -->
	<?php include('partials/cta-bottom.php'); ?>

</div><!-- #main -->

<?php include('footer.php'); ?>