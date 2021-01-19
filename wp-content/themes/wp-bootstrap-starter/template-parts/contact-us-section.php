<? $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>

<section id="thehero" style="background-image: url(<?php echo $featured_img_url; ?>); background-attachment: inherit;">
</section>

<?php if( have_rows('ascent_contact_us_group') ): 
    while( have_rows('ascent_contact_us_group') ): the_row();  ?>
    <section class="contact_us_main_wrapper">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="contact-us-title text-center">
						<span>Contact Us</span>
					</h2>
    			</div>
    		</div>
	    	<div class="row">
			
			   <?php 
				    $location = get_sub_field('ascent_contact_us_map_code'); 
				    $contact_form = get_sub_field('ascent_contact_us_form_shortcode'); 
			    ?>
			    <div class="col-md-6 contact-us-bg">
			   	<?php echo $location; ?>
			    </div>

			    <div class="col-md-6">
			     <div class="contact_us_form">
			     	
			     	<?php echo do_shortcode($contact_form); ?>
			     </div>
			    </div>

			 </div>
		 </div>
    </section>
			
<?php  endwhile;
endif;