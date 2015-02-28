<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." );
$this->inc( 'elements/header.php', array( 'widget_class'=>'active-sidebar left-sidebar' ) ); ?>
左サイドバー
<div id="contents" class="clearfix">
	<div id= "main-content" class="clearfix">
		<article id="content-inner" class="clearfix">
			<section class="clearfix">

				<div class="section-top clearfix">
					<div class="entry-title">
						<h1 class="page-title"><?php echo $c->getCollectionName(); ?></h1>
					</div><!-- .entry-title -->
				</div><!-- .section-top -->

				<div class="section-center clearfix">
					<div class="post-content clearfix">
						<div class="entry-content clearfix">
							<?php $a = new Area( 'Main' ); $a->display( $c ); ?>
						</div><!-- .entry-content -->
					</div><!-- .post-content -->
				</div><!-- .section-center -->

				<div class="section-bottom clearfix">
					<div class="section-bottom-inner clearfix">
					</div>
				</div><!-- .section-bottom -->
			</section><!-- /section -->

			<?php // comments
			$a = new Area( 'Comment' );
			if ( $c->isEditMode() || $a->getTotalBlocksInArea( $c ) > 0 ) : ?>
			<div id="comments" class="comments-area">
				<?php $a->display( $c ); ?>
			</div><!-- #comments -->
			<?php endif; ?>

		</article><!-- #content-inner -->
	</div><!-- #main-content -->

<?php $this->inc( 'elements/widget.php', array( 'widget_area'=>'sidebar' ) ); ?>
</div><!-- #contents -->

<?php $this->inc( 'elements/footer.php', array( 'is_sidebar'=>'sidebar' ) ); ?>