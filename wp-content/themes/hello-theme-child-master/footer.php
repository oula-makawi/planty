<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


?>
<footer id="site-footer" class="site-footer">
<?php wp_nav_menu( array( 'menu'=> 'footer', 'container'=> 'nav' )); ?>	
</footer>
<?php wp_footer(); ?>

</body>
</html>
