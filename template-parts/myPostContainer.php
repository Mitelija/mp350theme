<?php
/**
 * Template part for displaying MY posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sample_theme
 */

?>


<div class="myPostContainer" id="id-<?php the_ID(); ?>" >


<div class="myPostTitle">

<?php the_title(); ?>



<?php single_month_title(); ?>

<?php next_post_link( $format, $link, $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>




</div>



</div>