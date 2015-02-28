<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." );
$this->inc( 'elements/header.php' ); ?>

<div id="contents" class="inactive-sidebar page-view clearfix">
	<div id= "main-content" class="clearfix">
		<article id="content-inner" class="clearfix">
			<section class="clearfix">
				<?php print $innerContent; ?>
			</section><!-- /section -->
		</article><!-- #content-inner -->
	</div><!-- #main-content -->
</div><!-- #contents -->

<?php $this->inc( 'elements/footer.php' ); ?>