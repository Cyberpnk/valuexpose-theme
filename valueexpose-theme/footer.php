<?php

/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Arquea
 * @subpackage ValuExpose
 */

?>
<?php wp_footer(); ?>
</div>
<div class="footer-content-1">
<div id="footer-1" class="footer-class1 col-xs-6 col-sm-3 ">
<?php dynamic_sidebar( 'footer-1' ); ?>
</div>
<div id="footer-2" class="footer-class2 col-xs-6 col-sm-3">
<?php dynamic_sidebar( 'footer-2' ); ?>
</div>

<div id="footer-3" class="footer-class3 col-xs-6 col-sm-3">
<?php dynamic_sidebar( 'footer-3' ); ?>
</div>
<div id="footer-4" class="footer-class4 col-xs-6 col-sm-3">
<?php dynamic_sidebar( 'footer-4' ); ?>
</div>
</div>
<div class="footer-content-2">
<ul class="social-l">
<li>Copyright 2013 - ValuExpose Inc. - All Rights Reserved | </li>
<li>
Follow us on 
</li>
<li><a href="<?php echo get_option( 'fb_link' ); ?>" target="_blank">
<img border="0" src="/wp-content/themes/valuexpose-theme/img/facebook-sm.jpg" width="30" height="30">
</a>
</li>
<li>
<a href="<?php echo get_option( 'tw_link' ); ?>" target="_blank">
<img border="0" src="/wp-content/themes/valuexpose-theme/img/twitter-sm.jpg" width="30" height="30">
</a>
</li>
<li>
<a href="<?php echo get_option( 'yt_link' ); ?>" target="_blank">
<img border="0" src="/wp-content/themes/valuexpose-theme/img/youtube-sm.jpg" width="30" height="30">
</a>
</li>
<li>
<a href="<?php echo get_option( 'lin_link' ); ?>" target="_blank">
<img border="0" src="/wp-content/themes/valuexpose-theme/img/linkedin.png" width="30" height="30">
</a>
</li>
</ul>
</div>
</body>
</html>