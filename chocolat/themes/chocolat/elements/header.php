<?php defined( 'C5_EXECUTE' ) or die( "Access Denied." ); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage(); ?>">
<head>
<?php Loader::element( 'header_required' ); ?>
<?php /* The font-awesome of concrete5 is version 4.2. This theme use version 4.3. */ ?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/style.css">
<?php /*
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
</head>

<?php
// add class in body tag
$add_body_class = $c->getCollectionTypeHandle();
$add_body_class .= ( ! empty( $add_body_class ) ) ? ' ' : '' ;
$add_body_class .= $c->getCollectionHandle();
$add_body_class .=  ( ! empty( $widget_class ) ) ? ' ' . $widget_class : '';
?>
<body id="top" class="<?php echo $add_body_class; ?>">
<div id="wrapper" class="<?php echo $c->getPageWrapperClass(); ?>">
<header id="header">
	<div id="header-inner">
		<div id="header-top" class="clearfix">
			<div class="header-title">
				<?php
				$a = new GlobalArea( 'Header Site Title' );
				if ( $c->isEditMode() || $a->getTotalBlocksInArea( $c ) > 0 ) {
					$a->display( $c );
				} else {
					echo '<h1><a href="' . BASE_URL.DIR_REL . '" title="' . Config::get( 'concrete.site' ) . '">' . Config::get( 'concrete.site' ) . '</a></h1>';
				}
				$a = new GlobalArea( 'Header Site Description' );
				$a->display( $c );
				?>
			</div><!-- .header-title -->

			<div class="header-links">
				<?php
				$a = new GlobalArea( 'Header Social' );
				$a->display( $c );
				?>
				<div class="search-box">
					<span class="icon-search fa fa-search"></span>
					<?php
					$a = new GlobalArea( 'Header Search' );
					$a->display( $c );
					?>
				</div><!-- .search-box -->
			 </div><!-- .header-links -->
		 </div><!-- #header-top -->

		<div id="header-center" class="clearfix">
			<div id="header-image" class="thumbnail">
			<?php
			$a = new GlobalArea( 'Thumbnail' );
			$a->display( $c );
			?>
			</div><!-- #header-image -->

			<div id="nav-control" class="nav-close">
				<span class="icon-menu fa fa-bars"></span>
			</div><!-- #nav-control -->
			<div class="globalnav clearfix">
			<?php
			$a = new GlobalArea( 'Header Navigation' );
			$a->display( $c );
			?>
			</div><!-- .globalnav -->
		</div><!-- #header-center -->

		<div id="header-bottom" class="clearfix">
			<div class="breadcrumb clearfix">
			<?php
			$a = new GlobalArea( 'Breadcrumb' );
			$a->display( $c );
			?>
			</div><!-- .breadcrumb -->
		</div><!-- #header-bottom -->
	</div><!-- #header-inner -->
</header><!-- #header -->