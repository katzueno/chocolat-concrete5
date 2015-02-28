<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." );

// sidebar widget or footer widget
if ( ! empty( $widget_area ) && 'sidebar' ) {
	$block_area = 'sidebar';
	$block_class = $block_area;
} else {
	$block_area = 'footer';
	$block_class = 'widget-' . $block_area;
}

// widget start
$block_flag = false;
$block_start = 1;
$block_num = 9;

for ( $i = $block_start; $i <= $block_num; $i++ ) {
	$block_name = ucfirst( $block_area ) . ' Block' . $i;
	$block_title = ucfirst( $block_area ) . ' Block Title' . $i;

	${ 'block_content' . $i } = new GlobalArea( $block_name );
	${ 'block_title' . $i } = new GlobalArea( $block_title );

	if ( ${ 'block_content' . $i }->getTotalBlocksInArea( $c ) > 0 ) {
		$block_flag = true;
	}
}

if ( $c->isEditMode() || $block_flag ) : ?>
<div id="<?php echo $block_class; ?>" class="clearfix">
	<div id="<?php echo $block_class . '-inner'; ?>" class="clearfix">
		<div class="widget-inner clearfix">	
		<?php for ( $i = $block_start; $i <= $block_num; $i++ ) :
			if ( $c->isEditMode() || ${ 'block_content' . $i }->getTotalBlocksInArea( $c ) > 0 ) : ?>
			<nav class="widget widget-common <?php echo $block_area . '-widget'; ?>">
				<div class="widget-top"><div class="widget-title"><?php ${ 'block_title' . $i }->display( $c ); ?></div></div>
				<div class="widget-contents">
					<?php ${ 'block_content' . $i }->display( $c ); ?>
				</div>
			</nav><!-- .widget-common -->
		<?php endif; endfor; ?>
		</div><!-- .widget-inner -->
	</div>
</div>
<?php endif; ?>