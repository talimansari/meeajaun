</div>
<footer id="footer" class="footer-section">
<div class="container">
	<div class="row">
		<div class="col-md-4 pb-3">
				<a href="#" class="footer-logo"><img src="http://localhost/Meeajaun-H/wp-content/uploads/2020/07/footer-logo_14.png"></a>
			
		</div>
		<div class="col-md-2 pb-3 ">
				<?php  dynamic_sidebar('footer2'); ?>
		</div>
		<div class="col-md-3 pb-3">
				<?php  dynamic_sidebar('footer3'); ?>
		</div>
		<div class="col-md-3 pb-3">
				<?php  dynamic_sidebar('footer4'); ?>
		</div>
	</div>
		<div id="copyright" class="copyright">
		Copyright	&copy; <?php echo esc_html( get_bloginfo( 'name' ) ); ?> <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?>.
        </div>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>