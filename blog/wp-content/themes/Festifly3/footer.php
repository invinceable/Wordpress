		<div class="footer">
		
			<div class="row" style="max-width:100%">
					<div class="copyright"><p>copyright <span style="font-size:12px">&copy; 2013  </span>  Festif.ly</p></div>
					<div class="footmenu"><?php wp_nav_menu( array('theme_location' => 'Footer','container'       => false,'menu_class' => 'inline-list', 'link_after'           => '<span class=divider>  &nbsp; | </span>', )); ?></div>				
			</div>
		
		</div>

		

</div>

  <?php wp_footer(); ?>
  		
		<script>
			jQuery(document).foundation();
			$('.background').backstretch([
			"<?php bloginfo('template_url');?>/images/background/bannerimage1.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage2.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage3.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage4.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage5.jpg",
			"<?php bloginfo('template_url');?>/images/background/bannerimage6.jpg"
			], {duration: 3000, fade: 750});
			
		</script>
				 
</body>
</html>