<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." );
$this->inc( 'elements/header.php', array( 'widget_class'=>'single active-sidebar right-sidebar' ) ); ?>
ぶろぐ
<div id="contents" class="clearfix">
	<div id= "main-content" class="clearfix">
		<article id="content-inner" class="clearfix">
			<section class="clearfix">

				<div class="section-top clearfix">
					<div class="entry-dates ms-fc icon-c-entrydates"><?php
					$dh = Loader::helper( 'date' );
					$time = strtotime( $c->getCollectionDatePublic() );
					?><time class="entry-date updated" datetime="<?php echo t( $dh->date( 'Y-m-d', $time ) ); ?>"><span class="entry-year"><?php echo t( $dh->date( 'Y', $time ) ); ?></span><span class="entry-month"><?php echo t( $dh->date( 'm/d', $time ) ); ?></span></time>
					</div>
					<div class="entry-title">
						<h1 class="page-title"><?php echo $c->getCollectionName(); ?></h1>
					</div><!-- .entry-title -->
				</div><!-- .section-top -->

				<div class="section-center clearfix">
					<?php // comments
					$a = new Area( 'Entry Tags' );
					if ( $c->isEditMode() || $a->getTotalBlocksInArea( $c ) > 0 ) : ?>
						<div class="entry-meta clearfix">
							<i class="fa fa-tag"></i>
						<?php $a->display( $c ); ?>
						</div>
					<?php endif; ?>

					<?php // thumbnail
					$a = new Area( 'Thumbnail Image' );
					if ( $c->isEditMode() || $a->getTotalBlocksInArea( $c ) > 0 ) : ?>
						<div class="entry-thumbnail thumbnail clearfix">
						<?php $a->display( $c ); ?>
						</div>
					<?php endif; ?>

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
		<?php $this->inc( 'elements/prevnext.php' ); ?>
	</div><!-- #main-content -->

<?php $this->inc( 'elements/widget.php', array( 'widget_area'=>'sidebar' ) ); ?>
</div><!-- #contents -->

<?php $this->inc( 'elements/footer.php', array( 'is_sidebar'=>'sidebar', 'prevnext'=>true ) ); ?>