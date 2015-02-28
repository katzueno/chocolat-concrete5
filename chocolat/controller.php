<?php
namespace Concrete\Package\Chocolat;

use Package;
use BlockType;
use SinglePage;
use PageTheme;
use BlockTypeSet;
use CollectionAttributeKey;
use Concrete\Core\Attribute\Type as AttributeType;
use Config;

defined ( 'C5_EXECUTE' ) or die( _( "Access Denied." ) );

class Controller extends Package
{
	protected $pkgHandle = 'chocolat';
	protected $appVersionRequired = '5.7.1';
	protected $pkgVersion = '1.0';

	public function getPackageDescription()
	{
		return t( "Adds Chocolat Theme." );
	}

	public function getPackageName()
	{
		return t( "Chocolat" );
	}

	public function install()
	{
		$pkg = parent::install();
		BlockTypeSet::add( "chocolat", "Chocolat", $pkg );
		BlockType::installBlockTypeFromPackage ( 'PageTopChocolat', $pkg );
		//BlockType::installBlockTypeFromPackage ( 'widget_contents_chocolat', $pkg );
		//BlockType::installBlockTypeFromPackage ( 'hero_featurette_fruitful', $pkg );
		//BlockType::installBlockTypeFromPackage ( 'intro_cta_fruitful', $pkg );
		//BlockType::installBlockTypeFromPackage ( 'full_width_content_fruitful', $pkg );
		PageTheme::add ( 'chocolat', $pkg );

		$imgAttr = AttributeType::getByHandle ( 'image_file' );
		$thumb = CollectionAttributeKey::getByHandle ( 'thumbnail' );
		if( !is_object( $thumb ) ) {
			CollectionAttributeKey::add($imgAttr,
			array(
				'akHandle' => 'thumbnail',
				'akName' => t( 'Thumbnail Image' ),
			),$pkg );
		}

		// add thumbnail size
		$small = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle( 'small' );
		if ( !is_object( $small ) ) {
			$type = new \Concrete\Core\File\Image\Thumbnail\Type\Type();
			$type->setName( 'Small' );
			$type->setHandle( 'small' );
			$type->setWidth( 300 );
			$type->save();
		}

		$medium = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle( 'medium' );
		if ( !is_object( $medium ) ) {
			$type = new \Concrete\Core\File\Image\Thumbnail\Type\Type();
			$type->setName( 'Medium' );
			$type->setHandle( 'medium' );
			$type->setWidth( 600 );
			$type->save();
		}

		$large = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle( 'large' );
		if ( !is_object( $large ) ) {
			$type = new \Concrete\Core\File\Image\Thumbnail\Type\Type();
			$type->setName( 'Large' );
			$type->setHandle( 'large' );
			$type->setWidth( 980 );
			$type->save();
		}
	}

	// Called whenever install or upgrade of package is attempted
	// インストールやパッケージのアップグレードのときに呼び出される 
	private function installOrUpgrade()
	{
		// add page template
		//$this->getOrInstallPageTemplate ('【ページテンプレートハンドル】','【ページテンプレート名】', 'テンプレート選択画面で使う画像.png');
		$this->getOrInstallPageTemplate ( 'right_sidebar', 'Right Sidebar', 'right_sidebar.png' );
		$this->getOrInstallPageTemplate ( 'left_sidebar', 'Left Sidebar', 'left_sidebar.png' );
		$this->getOrInstallPageTemplate ( 'full', 'Full', 'full.png' );
		$this->getOrInstallPageTemplate ( 'blog_entryr', 'Blog Entry', 'blog_entry.png' );
	}
	
	
	
	
	
	
}