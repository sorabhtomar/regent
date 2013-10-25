<footer id="main-footer">
	<div class="footer-content clear grid">
		<div class="widget-container">
			<?php dynamic_sidebar( 'footer-left-widgets' ); ?>
		</div>
		<div class="spacer"></div>
		<div class="widget-container">
			<?php dynamic_sidebar( 'footer-center-widgets' ); ?>
		</div>
		<div class="spacer"></div>
		<div class="widget-container">
			<?php dynamic_sidebar( 'footer-right-widgets' ); ?>
		</div>
	</div><!-- .footer-content -->
	<div id="copyright">
		<p class="clear grid">Customizable WordPress themes by Royalty Themes - Proudly powered by WordPress</p>
	</div>
</footer><!-- #main-footer -->

<?php wp_footer(); ?>
</body>
</html>