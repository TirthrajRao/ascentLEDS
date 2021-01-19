<?php 

/**
* Template Name: Inner Page Template
*
* @package WordPress
* @subpackage Ascent_LED
* @since Ascent LED Display 1.0
*/

get_header(); ?>

<?php 

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');   ?>

<?php if( have_rows('ascent_inner_page_hero_section') ): 
        while( have_rows('ascent_inner_page_hero_section') ): the_row();  ?>
<?php 
	 $hero_title = get_sub_field('ascent_inner_page_hero_title');
	 $hero_desc = get_sub_field('ascent_inner_page_hero_discription');
?>

<!-- Hero Banner Section >>> Start -->

<section id="thehero" style="background-image: url(<?php echo $featured_img_url; ?>);">
</section>

<section class="extra_content_wrapper">
	<div class="container">
		<div class="row">
			<?php echo get_the_content(); ?>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<!-- Hero Banner Section >>> End -->

<!-- /* Gallary Images Section  >> Start */ -->

<?php if( have_rows('ascent_inner_pages_gallary_section') ): 
        while( have_rows('ascent_inner_pages_gallary_section') ): the_row();  ?>

<section class="gallery_section_wrapper">
<div class="container" style="margin-top:20px;">
<h1 style="text-align:center;color:#203b94;">Gallery</h1><br>
<div class="row">
	<div class="gal">
		<?php 
		$images = get_sub_field('ascent_inner_page_gallary_images');
		if( $images ): ?>
	        <?php foreach( $images as $image ): ?>
             	<img src="<?php echo esc_url($image); ?>" />
	        <?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>

</section>

<?php endwhile; endif; ?>

<!-- /* Gallary Images Section  >> End */ -->

<?php get_footer(); ?>