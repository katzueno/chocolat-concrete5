<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." );

// prevnext nav
$add_prevnext_class .=  ( ! empty( $prevnext_class ) ) ? ' ' . $prevnext_class : '';

$prev_next = new GlobalArea( 'Prev Next Nav' );
if ( $c->isEditMode() || $prev_next->getTotalBlocksInArea( $c ) > 0 ) : ?>
<div class="prevnext-page<?php echo $add_prevnext_class; ?>">
	<div class="paging clearfix">
	<?php $prev_next->display( $c ); ?>
	</div>
</div><!-- .prevnext-page -->
<?php endif;