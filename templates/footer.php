<footer class="footer-of-page">
	<div class="container">
		<div class="row">
			<div class="span4 downbox">
				Lanttu ry</br>
				Kaukolantie 67</br>
				04500 Kellokoski</br>
				<?php //echo date('Y'); ?> <?php //bloginfo('name'); ?>	
			</div>
			<div class="span4 downbox">
				&nbsp;
			</div>
			<div class="span4 some-right">
				<a href="https://www.facebook.com/JokeLANparty/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/picons46.png" alt="Facebook" /></a>
				<a href="https://twitter.com/lanttury/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/picons43.png" alt="Twitter" /></a>
				<a href="https://www.youtube.com/user/JokeLANchannel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/picons58.png" alt="Youtube" /></a>
			</div>
		</div>
	</div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>


