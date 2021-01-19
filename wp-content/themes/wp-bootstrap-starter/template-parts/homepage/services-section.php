<?php if( have_rows('ascent_homepage_service_group') ): 
    while( have_rows('ascent_homepage_service_group') ): the_row();  ?>

<section class="services mt-4">
    <div class="container">
        <div class="services-title">
            <div class="title">
                <h2><span> Our </span> Services</h2>
            </div>
        </div>
        <div class="services-box">
        	<?php if( have_rows('ascent_homepage_our_services') ): 
    				while( have_rows('ascent_homepage_our_services') ): the_row();  ?>
    			<?
	    			$fa_class = get_sub_field('homepage_service_font_awesome_class');
	    			$service_name = get_sub_field('ascent_homepage_service_name');
	    			$service_desc = get_sub_field('ascent_homepage_service_description');
				?>
            <div class="box">
                <div class="ser-box">
                    <div class="icon">
                        <i class="fa <?php echo $fa_class; ?>" aria-hidden="true"></i>
                    </div>
                    <h4><?php echo $service_name; ?></h4>
                    <p><?php echo $service_desc; ?></p>
                </div>
            </div>

            <?php  endwhile; endif;?>
        </div>
    </div>
</section>

<?php  endwhile;endif; ?>