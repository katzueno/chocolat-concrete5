<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." );

if ( ! empty( $prevnext ) ) {
$this->inc( 'elements/prevnext.php', array( 'prevnext_class'=>'prevnext-footer' ) );
}

$this->inc( 'elements/widget.php' );

// footer add class
if ( empty( $is_sidebar ) ) {
	$contents_class = 'no-widget-footer';
} else {
	$contents_class = 'active-widget-footer';
}
?>
<footer id="footer" class="<?php echo $contents_class; ?>">
	<div id="footer-inner">
		<div id="footer-top">
		<?php
		$a = new GlobalArea( 'Footer Social' );
		$a->display( $c );
		?>

			<div class="footer-title">
			<?php
			$a = new GlobalArea( 'Footer Site Title' );
			$a->display( $c );
			?>
			</div>
			<div class="footer-description">
			<?php
			$a = new GlobalArea( 'Footer Site Description' );
			$a->display( $c );
			?>
			</div>
		</div><!-- #footer-top -->

		<div id="footer-bottom">
			<?php
			$a = new GlobalArea( 'Copyright' );
			$a->display( $c );
			?>
			<p id="copyright">Chocolat theme by <a href="http://mignonstyle.com/" target="_blank">Mignon Style</a>.</p>
		</div><!-- #footer-bottom -->
	</div><!-- #footer-inner -->
</footer><!-- #footer -->

<div id="pagetop">
	<a href="#top" class="pagetop-btn ms-fc icon-c-pagetop"><span class="icon-up fa fa-play">PAGE TOP</span></a>
</div><!-- #pagetop -->

</div><!-- #wrapper -->
<?php Loader::element( 'footer_required' ); ?>
<?php $theme_path = $this->getThemePath(); ?>
<script type="text/javascript" src="<?php echo $theme_path; ?>/js/globalnav.js"></script>
<script type="text/javascript" src="<?php echo $theme_path; ?>/js/rollover.js"></script>
<script type="text/javascript" src="<?php echo $theme_path; ?>/js/pagetop.js"></script>
<script type="text/javascript" src="<?php echo $theme_path; ?>/plugin/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_path; ?>/plugin/masonry/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo $theme_path; ?>/js/masonry-widget.js"></script>
</body>
</html>