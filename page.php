<?php include('header.php'); ?>

	<div id="main" class="default page">

		<!-- ==================== -->
		<!--         HERO         -->
		<!-- ==================== -->
	 	<section id="hero" class="hero--parallax hero--about">
	    <div class="parallax__bg"
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
	          <h1>&lt;h1&gt; Page Title</h1>
	          <h5>&lt;h5&gt; Page Subtitle</h5>
	          <a href="" class="btn btn--transparent mt20">Button Transparent</a>
	        </div>
	      </div>
	    </div>
	 	</section>

		<section class="section--large pb0">
			<!-- ==================== -->
			<!--       CONTENT        -->
			<!-- ==================== -->
			<div class="container">
				<h1>&lt;h1&gt; Extra Large Callout Text</h1>
				<h2>&lt;h2&gt; Large Callout Text</h2>
				<h3>&lt;h3&gt; Page Titles and Section Headers</h3>
				<h4>&lt;h4&gt; Reasonable Title Size or Larger Paragraph Font Size</h4>
				<p>&lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada aliquam nisl eu tempor. Aenean quis risus malesuada, vehicula nunc id, tempor orci. Fusce eleifend risus ac suscipit vehicula. Donec non tortor quis velit ullamcorper interdum sit amet id mauris. Integer vel rhoncus est. Proin vel orci vestibulum, ornare lorem sit amet, accumsan ante. Curabitur risus ligula, semper nec viverra iaculis, mollis vel lectus. Vivamus augue enim, pulvinar ut congue non, posuere in libero.</p> 
				<blockquote>&lt;blockquote&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam libero lacus, cursus sit amet diam at, placerat rhoncus sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc tincidunt tellus nisi.&lt;/blockquote&gt;</blockquote>
				<p>&lt;p&gt; &lt;span&gt;<span>Vestibulum eu mi sed</span>&lt;/span&gt; libero luctus tempor. Vestibulum tristique lobortis nisi, at posuere orci tristique rutrum. Sed a eleifend augue. In pellentesque turpis sit amet nulla mattis, nec tincidunt elit ornare. Nunc non eros pharetra, euismod lacus ac, vulputate tortor. Quisque porttitor enim vel massa consectetur condimentum ut eget erat. Suspendisse convallis vitae neque in congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec in dictum turpis. Vivamus vehicula enim id sagittis condimentum. Aliquam vulputate tristique velit, ut tristique est ornare sed. Morbi sem nibh, interdum pretium vestibulum vel, egestas sit amet tortor. Maecenas lobortis lacinia velit, et eleifend mi mattis sit amet. In sit amet mi at ante rhoncus pharetra. Maecenas vestibulum scelerisque tortor non interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> 
				<p>&lt;p&gt; Integer iaculis pretium sodales. &lt;a class="link" href=""&gt;<a class="link" href="">Donec condimentum</a>&lt;/a&gt; dapibus viverra. Aliquam erat volutpat. Vestibulum lacinia risus et massa lacinia vehicula. Vestibulum turpis sem, bibendum sollicitudin lacus eget, porttitor molestie lacus. Cras et tempor libero, gravida scelerisque libero. Vivamus dapibus placerat felis non interdum. Cras aliquam cursus orci eget tincidunt. Duis tortor nisl, aliquam ac congue sit amet, consectetur nec ex. Sed tincidunt nulla vel elit lacinia facilisis. Etiam cursus, turpis ac imperdiet tristique, massa tellus feugiat arcu, non vehicula lacus elit sit amet felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> 
				
				<a href="" class="btn btn--primary">Button Primary</a>
				<a href="" class="btn btn--yellow">Button Yellow</a>
				
				<p class="mt50">&lt;hr&gt; small, dark</p>
				<hr class="divide--small divide--dark mt20 mb50">

				<p class="mt50">&lt;hr&gt; large, light</p>
				<hr class="divide--large divide--light mt20 mb50">
				
				<p>SOCIAL BUTTONS</p>
				<ul class="menu--social">
					<li><a id="facebook-like" href="#fb-like" class="modal-trigger btn btn--social"><i class="fa fa-facebook"></i></a></li>
					<li><a class="btn btn--social" href="javascript:sharePop('https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fmfa.dev%2F&region=follow_link&screen_name=mercyforanimals&tw_p=followbutton');"><i class="fa fa-twitter"></i></a></li>
					<li><a class="btn btn--social" href="javascript:sharePop('https://instagram.com/oauth/authorize/?client_id=815fae9633594752a20bde394773be2c&redirect_uri=http://instafollowbutton.com/components/instagram/instagram-redirect-handler.php&state=242021259|mercyforanimals|bf0445370c|http://www.mercyforanimals.org/action-center.aspx&response_type=code&scope=relationships');"><i class="fa fa-instagram"></i></a></li>
				</ul>
				
				<!-- ==================== -->
				<!--        FORMS         -->
				<!-- ==================== -->
				<p class="mt50">SIMPLE FORM</p>
				<form method="" id="" action="" class="form--signup ml0 mr0">
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
	      </form>
	      <div class="clearfix"></div>

				<p class="mt50">EMAIL SIGNUP FORM</p>
				<form method="" id="" action="" class="form--signup extended-fields text-center">
				  <div class="fieldset name fieldset--withicon">
				  	<input name="name_first" id="name_first" type="text" class="" tabindex="1" placeholder="First">
				  	<label class="gfield_label" for=""><i class="fa fa-user"></i></label>
				  	<input name="name_last" id="name_last" type="text" class="" tabindex="1" placeholder="Last">
				  </div>

					<div class="fieldset email fieldset--withicon">
						<input name="user_email" id="" type="text" class="" tabindex="2" placeholder="Email Address">
						<label class="gfield_label" for="input_1_2"><i class="fa fa-envelope-o"></i></label>
					</div>

				<!-- 	<div class="fieldset zipcode fieldset--withicon">
						<input name="user_zipcode" id="" type="text" class="" tabindex="3" placeholder="Zip Code">
						<label class="gfield_label" for="input_1_3"><i class="fa fa-home"></i></label>
					</div> -->
					
					<div class="fieldset address span12 fieldset--withicon">
						<input name="user_address" id="address" type="text" class="" tabindex="3" placeholder="Street Address">
						<label class="" for="input_1_3"><i class="fa fa-home"></i></label>
						<input name="user_city" id="city" type="text" class="" tabindex="4" placeholder="City">

						<input name="user_state" id="state" type="text" class="" tabindex="5" placeholder="State">
						<input name="user_zipcode" id="zipcode" type="text" class="" tabindex="5" placeholder="Zipcode">
						<select name="user_country" id="country">
							<option value="country">Country</option>
						  <option value="unitedstates">United States</option>
						  <option value="canada">Canada</option>
						  <option value="mexico">Mexico</option>
						  <option value="panama">Audi</option>
						</select>
					</div>
					
					<div class="fieldset checkbox align-center">
						<input type="checkbox" name="checkbox" id="checkbox_id" value="value">
						<label for="checkbox_id">Yes, I want to receive emails from Mercy For Animals</label>
					</div>

					<div class="span12 mt10">
					  <input class="btn btn--primary" type="submit" tabindex="4" value="Submit">
					</div>
	      </form>

	      <div class="clearfix"></div>

	      <p>DONATION FORM</p>
	      <div id="form--donation">
	      	<div class="form--donation__container">
      			<form method="get" id="" action="" class="form--donation__form">
      				<input type="hidden" id="" name="" value="">
      				<div class="span12 mb15">
      					<fieldset class="input-amount">
      						<label class="gfield_label" for="input_2_1"><i class="fa fa-dollar"></i></label>
      						<label class="usd gfield_label" for="input_2_1">USD</label>
      						<input name="amount" id="donationAmount" type="number" class="ginput_amount" tabindex="6" placeholder="45" min="1">
      					</fieldset>
      				</div>
            	<div class="clearfix"></div>
            	<div class="span12 mt15">
      	        <button class="btn btn--primary btn--submit" tabindex="12" type="submit">Monthly</button>
      	        <button class="btn btn--primary btn--submit right" tabindex="12" type="submit">Once</button>
            	</div>
          	</form>
	      	</div>	
				</div>

				<p class="mt50">BLOG TILES</p>
			</div><!-- .container -->

			
		</section>

		<!-- ==================== -->
		<!--     BLOG TILES       -->
		<!-- ==================== -->
		<section class="tiles--mosaic">
			<div class="container--full text-center">
				<div class="tiles__row">

					<div class="tiles__box half tiles--slideright" style="background-image:url(/assets/images/tile-update01.jpg);">
						<div class="tiles__details">
							<div class="tiles__slidebg"></div>
							<a class="tiles__text" href="">
								<h5>Market for Vegan Meats Growing</h5>
							</a>
							<div class="tiles__footer">
								<a href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://mercyforanimals.org/&text=Market for Vegan Meats Growing');"><i class="fa fa-facebook"></i></a>
								<a href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://mercyforanimals.com/&text=Market+for+Vegan+Meats+Growing');"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=Market for Vegan Meats Growing&body=Market for Vegan Meats Growing - from Mercy for Animals http://mercyforanimals.org"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
					
					<div class="tiles__box third tiles--slideup" style="background-image:url(/assets/images/tile-update02.jpg);">
						<div class="tiles__details">
							<a class="tiles__text" href="">
								<h5>Canada’s Ag Minister <br>Refuses to Accept over <br>80,000 Signatures</h5>
							</a>
							<div class="tiles__footer">
								<a href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://mercyforanimals.org/&text=Canada's Ag Minister Refuses to Accept over 80,000 Signatures);"><i class="fa fa-facebook"></i></a>
								<a href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://mercyforanimals.com/&text=Canadas+Ag+Minister+Refuses+to+Accept+over+80000+Signatures');"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=Canada's Ag Minister Refuses to Accept over 80,000 Signatures&body=Canada's Ag Minister Refuses to Accept over 80,000 Signatures - from Mercy for Animals http://mercyforanimals.org"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
					
					<div class="tiles__box third tiles--slideup" style="background-image:url(/assets/images/tile-update03.jpg);">
						<div class="tiles__details">
							<a class="tiles__text" href="">
								<h5>Spain Says Adios to Meat</h5>
							</a>
							<div class="tiles__footer">
								<a href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://mercyforanimals.org/&text=Spain Says Adios to Meat');"><i class="fa fa-facebook"></i></a>
								<a href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://mercyforanimals.com/&text=Span+Says+Adios+to+Meat');"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=Spain Says Adios to Meat&body=Spain Says Adios to Meat - from Mercy for Animals http://mercyforanimals.org"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>
			
				<div class="tiles__row">
					<div class="tiles__box third tiles--slideup" style="background-image:url(/assets/images/tile-update04.jpg);">
						<div class="tiles__details">
							<a class="tiles__text" href="">
								<h5>Victory: Supreme Court <br>Upholds California’s Ban <br> of Force-Feeding</h5>
							</a>
							<div class="tiles__footer">
								<a href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://mercyforanimals.org/&text=Victory: Supreme Court Uphold's California's Ban of Force-Feeding);"><i class="fa fa-facebook"></i></a>
								<a href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://mercyforanimals.com/&text=Victory%3A+Supreme+Court+Upholds+Californias+Ban+of+Force-Feeding');"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=Victory: Supreme Court Upholds California's Ban of Force-Feeding&body=Victory: Supreme Court Upholds California's Ban of Force-Feeding - from Mercy for Animals http://mercyforanimals.org"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>

					<div class="tiles__box half tiles--slideright" style="background-image:url(/assets/images/tile-update05.jpg);">
						<div class="tiles__details">
							<div class="tiles__slidebg"></div>
							<a class="tiles__text" href="">
								<h5>Care About Hungry <br>People? Eat More <br>Plants.</h5>
							</a>
							<div class="tiles__footer">
								<a href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://mercyforanimals.org/&text=Care About Hungry People? Eat More Plants.');"><i class="fa fa-facebook"></i></a>
								<a href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://mercyforanimals.com/&text=Care+About+Hungry+People%3F+Eat+More+Plants');"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=Care About Hungry People? Eat More Plants.&body=Care About Hungry People? Eat more Plants. - from Mercy for Animals http://mercyforanimals.org"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
					
					<div class="tiles__box third tiles--slideup" style="background-image:url(/assets/images/tile-update06.jpg);">
						<div class="tiles__details">
							<a class="tiles__text" href="">
								<h5>Cow's Milk Without the <br>Cows</h5>
							</a>

							<div class="tiles__footer">
								<a href="javascript:sharePop('https://www.facebook.com/sharer/sharer.php?u=http://mercyforanimals.org/&text=TITLE');"><i class="fa fa-facebook"></i></a>
								<a href="javascript:sharePop('https://twitter.com/intent/tweet?url=http://mercyforanimals.com/&text=Cows+Milk+Without+the+Cows');"><i class="fa fa-twitter"></i></a>
								<a href="mailto:?subject=Cow's Milk Without the Cows&body=Cow's Milk Without the Cows - from Mercy For Animals http://mercyforanimals.com"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ==================== -->
		<!--        IMAGES        -->
		<!-- ==================== -->
		<section class="section--large interstitial interstitial--stats pb0">
			<div class="container">
				<p>IMAGES</p>
				<div class="span6">
					<div class="circle circle--xlrg" style="background-image:url(/assets/images/circlelrg-cage.jpg);"></div>
				</div>

				<div class="span3 text-center">
					<div class="circle circle--med circle-blue" style="background-image:url(/assets/images/circlelrg-cage.jpg);"></div>
					<p class="larger text-blue">Merchandise</p>
				</div>

				<div class="span3 text-center">
					<div class="circle circle--med" style="background-image:url(/assets/images/circlelrg-cage.jpg);"></div>
					<p class="larger">Literature</p>
				</div>
			
				<div class="span3 text-center">
					<div class="stat__border">
						<span class="icon icon--pig-yellow"></span>
					</div>
					
					<span class="stat text-yellow">
						10
						<span class="stat__sub">BILLION</span>
					</span>
				</div>
	
				<div class="span3 text-center">
					<div class="stat__border">
						<span class="icon icon--meat"></span>
					</div>
					
					<span class="stat text-blue">
						8.5
						<span class="stat__sub">BILLION</span>
					</span>
				</div>

				<div class="span3 mt30">
					<a href="/investigations.php" class="circle circle--med hover-effect">
						<span class="icon icon--investigate"></span>
						<h6 class="text-blue">Undercover <br>Investigations</h6>
					</a>
				</div>

				<div class="span3 mt30">
					<a href="#" class="circle circle--med hover-effect">
						<span class="icon icon--advocacy"></span>
						<h6 class="text-blue">Legal <br>Advocacy</h6>
					</a>
				</div>

				<div class="team-tile fifth">
				  <div class="team-tile__photo" style="background-image:url(/assets/images/team/nathan-runkle.jpg);"></div>
				  <div class="team-tile__name">
				    <p>Nathan Runkle</p>
				    <span>President</span>
				  </div>
				</div>

				<div class="clearfix"></div>
				<div class="span2 text-center">
					<div class="circle center" style="background-image:url(/assets/images/circlelrg-cage.jpg);"></div>
					<p class="text-blue">Dairy</p>
				</div>

				<div class="span2 text-center">
					<div class="circle center circle-blue" style="background-image:url(/assets/images/circlelrg-cage.jpg);"></div>
					<p>Pork</p>
				</div>

				<div class="clearfix"></div>
				<p class="mt50">CALL TO ACTION FORM</p>
			</div>


		</section>

		<!-- ==================== -->
		<!--    4 CTA / DONATE    -->
		<!-- ==================== -->
		<section id="tabs-container" class="tabs-container--cta">
		  <div class="container--full">
		  	<div class="tab">
		  	<ul class="tabs__menu cta cta--blue">
		  	  <li class="span3 current wow fadeIn first">
		  	    <a class="cta__block" href="#donate" style="background-image:url(/assets/images/cta-smallblue01.jpg);">
		  	    	<div class="circle circle--small"><i class="fa fa-dollar"></i></div>
		  	    	<h5>Donate!</h5>
		  	    </a>
		  	  </li>
		  	  <div id="donate" class="tab__content text-white" style="background-image: url(/assets/images/cta-slide01.jpg);">
						<div id="form--donation">
							<div class="container text-center">
								<h1 class="mb0">Help Save Her</h1>
								<h5 class="mb30">You can save an animal's life today!</h5>
								<div class="form--donation__container">
									<form method="get" id="" action="" class="form--donation__form">
										<input type="hidden" id="" name="" value="">
										<div class="span12 mb20">
											<fieldset class="input-amount">
												<label class="gfield_label" for="input_2_1"><i class="fa fa-dollar"></i></label>
												<label class="usd gfield_label" for="input_2_1">USD</label>
												<input name="amount" id="donationAmount" type="number" class="ginput_amount" tabindex="6" placeholder="45" min="1">
											</fieldset>
										</div>
						        <div class="clearfix"></div>
						        <div class="span12">
						        	<button class="btn btn--primary btn--submit" tabindex="12" type="submit">Monthly</button>
						          <button class="btn btn--primary btn--submit right" tabindex="12" type="submit">Once</button>
						        </div>
						       </form>
								</div>
							</div>
						</div>
					</div>
			    <li class="span3 wow fadeIn">
			    	<a class="cta__block" href="#meat-free" style="background-image:url(/assets/images/cta-smallblue02.jpg);">
			    		<div class="circle circle--small"><i class="icon-help icon--salad"></i></div>
			    		<h5>Eat With Compassion</h5>
			    	</a>
			    </li>
			    <div id="meat-free" class="tab__content text-white" style="background: url(/assets/images/cta-slide02.jpg);">
			    	<div class="container text-center">
			    		<h1>Pledge To Go Vegetarian</h1>
			    		<h5>You can save 10 animals' lives annually by altering your diet!</h5>
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
									  <input class="btn btn--primary" type="submit" tabindex="4" value="Sign the Pledge">
									</div>
					      </form>
			    	</div>
			    </div>
			    <li class="span3 wow fadeIn">
			    	<a class="cta__block" href="#join" style="background-image:url(/assets/images/cta-smallblue03.jpg);">
			    		<div class="circle circle--small"><i class="icon-help icon--user"></i></div>
			    		<h5>Join the Team</h5>
			    	</a>
			    </li>
			    <div id="join" class="tab__content text-white" style="background: url(/assets/images/cta-slide01.jpg);">
			    	<div class="container text-center">
			    		<h1>Join the Team</h1>
			    		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			    	</div>
			    </div>
			    <li class="span3 wow fadeIn last">
			    	<a class="cta__block" href="#involved" style="background-image:url(/assets/images/cta-smallblue04.jpg);">
			    		<div class="circle circle--small"><i class="fa fa-plus"></i></div>
			    		<h5>Get Involved</h5>
			    	</a>
			    </li>
			    <div id="involved" class="tab__content text-white" style="background: url(/assets/images/cta-slide02.jpg);">
			    	<div class="container text-center">
			    		<h1>Get Involved</h1>
			    		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			    	</div>
			    </div>
		  	</ul>
		  	</div>
		  </div>
		</section>
	

	</div> <!-- #main -->
	<div class="clearfix"></div>

	<div class="container">
		<p class="mt50">FOOTER</p>
	</div>
	

<!-- ==================== -->
<!--        FOOTER        -->
<!-- ==================== -->
	<footer class="footer--social">
		<div class="container-full">
			<a class="logo logo-color" href="/"></a>
			<ul class="menu--social">
				<li><a href="https://www.facebook.com/mercyforanimals" class="btn btn--social btn--blue" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/MercyForAnimals" class="btn btn--social btn--blue" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://mercyforanimals.tumblr.com/" class="btn btn--social btn--blue" target="_blank"><i class="fa fa-tumblr"></i></a></li>
				<li><a href="https://www.youtube.com/user/mercyforanimals" class="btn btn--social btn--blue" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="http://instagram.com/mercyforanimals" class="btn btn--social btn--blue" target="_blank"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</footer>

	<footer class="footer--contact">
		<div class="container text-center">
			<p><a href="http://www.google.com/maps/place/8033+Sunset+Blvd+%23864,+Los+Angeles,+CA+90046/@34.0981741,-118.3646913,17z/data=!3m1!4b1!4m2!3m1!1s0x80c2bec1ed06229d:0x801744e2608e7077" target="_blank">8033 SUNSET BLVD, SUITE 864 <br class="mobile-only"><span>|</span> LOS ANGELES, CA 90046</a> <span>|</span> <a href="">866-632-6446</a> <span>|</span> <a href="">CONTACT US</a></p>
		</div>
	</footer>

	</div>
	</div><!-- #inject-wrap -->

	<!-- 
	**************************** 
	          MODAL BAY
	****************************
	-->
	<div id="modals">
		<!-- LIKE US ON FACEBOOK -->
		<div id="fb-like" class="modal modal--small">
		  <i class="modal-close fa fa-times"></i>
		  <div class="modal-content">
		  	<iframe name="f65b07774" width="100" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FQjK2hWv6uak.js%3Fversion%3D41%23cb%3Df10d7ce5c8%26domain%3Dmfa.dev%26origin%3Dhttp%253A%252F%252Fmfa.dev%252Ff3d40ec2d4%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmercyforanimals&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false" style="border: none; visibility: visible; width: 275px; height: 221px;" class=""></iframe>		
		  </div>
		</div>
	</div>
	
</body>
</html>



<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="assets/js/vendor/jquery.flexslider.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/skrollr.min.js"></script>
<script src="assets/js/vendor/jquery.isotope.js"></script>
<script src="assets/js/vendor/jquery.isotope.packery.js"></script>
<script src="assets/js/app.js"></script>