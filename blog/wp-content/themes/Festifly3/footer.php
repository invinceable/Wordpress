		<div id="footer">
		
		<div class="row infoGrid" style="max-width:100%">
			
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
				  		
				  <li class="helpGrid">
						  <div class="helpGridInner">
							  <div class="row">
								  <div class="small-22 medium-22 large-22 columns small-centered">
									  <div class="small-4 medium-4 large-24 columns">
										  <p class="entype">&#59297;</p>
										  </div>
									  
									  <div class="small-20 medium-20 large-24 columns pad">
										  <h4>Find the Right Match</h4>
										  <a href="#" data-reveal-id="myModal" class="link">Learn More</a>
										  </div>
										  
								  </div>	  
							  </div>
						  </div>
				  </li>

				  <li class="helpGrid">
						  <div class="helpGridInner">
							  <div class="row">
								  <div class="small-22 medium-22 large-22 columns small-centered">
									  <div class="small-4 medium-4 large-24 columns">
										  	<p class="entype">&#128101;</p>
										  </div>
									  
									  <div class="small-20 medium-20 large-24 columns pad">
										  	<h4>Get Inspired</h4>
										  <a href="#" data-reveal-id="myModal2" class="link">Learn More</a>
										  </div>
										  
								  </div>	  
							  </div>
						  </div>
				  </li>
				  
				  <li class="helpGrid">
						  <div class="helpGridInner">
							  <div class="row">
								  <div class="small-22 medium-22 large-22 columns small-centered">
									  <div class="small-4 medium-4 large-24 columns">
										  	<p class="entype">&#128161;</p>
										  </div>
									  
									  <div class="small-20 medium-20 large-24 columns pad">
										  	<h4>Dedicated Community</h4>
										  <a href="#" data-reveal-id="myModal3" class="link">Learn More</a>
										  </div>
										  
								  </div>	  
							  </div>
						  </div>
				  </li>
				  				  
				  				  
				  <li class="helpGrid show-for-medium-up">
				  <div class="row">
				 
					  <div class="small-18 columns small-centered specialGrid">
				 
					 <p><strong>San Francisco City Hall</strong></p>
					 <p>Event Venue</p>
				 
					  </div>
					  
				  </div>
				  </li>
				  
				</ul>
			</div>

		<div class="footer">
		
			<div class="row" style="max-width:100%">
					<div class="copyright"><p>copyright <span style="font-size:12px">&copy; 2013  </span>  Festif.ly</p></div>
					<div class="footmenu"><?php wp_nav_menu( array('theme_location' => 'Footer','container'       => false,'menu_class' => 'inline-list', 'link_after'           => '<span class=divider>  &nbsp; | </span>', )); ?></div>				
			</div>
		
		</div>
		</div>

</div>

  <?php wp_footer(); ?>
  		
		<script>
			jQuery(document).foundation();
			jQuery('.background').backstretch([
			"<?php bloginfo('template_url');?>/images/background/bannerimage1.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage2.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage3.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage4.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage5.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage6.jpg",
 			"<?php bloginfo('template_url');?>/images/background/challncourtgotlight.png"
			], {duration: 3000, fade: 750});
			
		</script>


<div id="myModal" class="reveal-modal small">
  <h2>Find the Right Match</h2>
  <p>Festif.ly has created search & filter capabilities to help the right precise service or product match for your event. We understand that when you’re searching on Google for “SF Wedding Photographer” you really mean “SF Photographer with expertise in black & white galas & flair for vintage appeal”.  </p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="myModal2" class="reveal-modal small">
  <h2>Get Inspired</h2>
  <p>Browse the Festiv.ly events database curated by our network of  top event planners & designers, creative artists, top tier service providers and event professionals around the world.   </p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="myModal3" class="reveal-modal small">
  <h2>Dedicated Community</h2>
  <p>Need to plan a big event? Tight on time and resources? Our passionate community of event professionals from around the world is here to help. </p>
  <a class="close-reveal-modal">&#215;</a>
</div>
				 
</body>
</html>