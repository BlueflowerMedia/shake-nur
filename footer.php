<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>

	</div><!-- #content -->

	<div class="margin-for-footer"></div>
	<footer id="colophon" class="site-footer">
    <div class="container flex-row">
      <div class="footer-left flex1">
        <p>&copy; <?php the_time('Y') ?>. All rights reserved. BlueFlower Media</p>
      </div>
      <div class="footer-right flex1">
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
