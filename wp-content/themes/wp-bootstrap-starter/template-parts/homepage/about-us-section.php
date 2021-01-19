<?php if( have_rows('ascent_home_about_us_group') ): 
    while( have_rows('ascent_home_about_us_group') ): the_row();  ?>

    <section class="about_us_main_wrapper">
    	<div class="container-fluid">
	    	<div class="row">
			<?php if( have_rows('ascent_homepage_left_side_section') ): 
	    			while( have_rows('ascent_homepage_left_side_section') ): the_row();  
					$image_src = get_sub_field('ascent_homepage_upload_image'); ?>
				   <div class="col-md-6 about-us-bg"  style="background-image: url(<?php echo $image_src; ?>)">
				   </div>
				   <?php endwhile; endif; ?>

				   <?php if( have_rows('ascent_homepage_right_side_content') ): 
	    			while( have_rows('ascent_homepage_right_side_content') ): the_row();  
					$description = get_sub_field('ascent_homepage_right_side_description'); ?>

				   <div class="col-md-6">
				     <div class="about_us_description">
				     	<h2 class="section-title">
							<span>About Us</span>
						</h2>

				     	<?php echo wpautop($description); ?>
				     </div>
				   </div>

				   <?php endwhile; endif; ?>
			 </div>
		 </div>
    </section>
			
<?php  endwhile;
endif;