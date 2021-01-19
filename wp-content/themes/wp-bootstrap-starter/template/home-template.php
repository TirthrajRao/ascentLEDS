<?php

/**
* Template Name: Home Page Template
*
* @package WordPress
* @subpackage Ascent_LED
* @since Ascent LED Display 1.0
*/

get_header();

/*About us Section >> Start */

	get_template_part('template-parts/homepage/about-us','section');

/*About us Section >> End */


/*Service Section >> Start */

	get_template_part('template-parts/homepage/services','section');
	
/*Services Section >> End */


/*Contact us Section >> Start */

	get_template_part('template-parts/homepage/contact-us','section');
	
/*Contact us Section >> End */


get_footer();
?>