<?php
namespace Concrete\Package\Chocolat\Block\PageTopChocolat;
use \Concrete\Core\Block\BlockController;
defined('C5_EXECUTE') or die("Access Denied.");
class Controller extends BlockController
{
	protected $btDescription = "Adds a Page Top button to the page";
	protected $btName = "Page Top";
	protected $btTable = 'btPageTopChocolat';
	protected $btInterfaceWidth = "370";
	protected $btInterfaceHeight = "350";
	protected $btWrapperClass = 'ccm-ui';
	protected $btDefaultSet = 'chocolat';
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;

	public function getBlockTypeName() {
		return t("Page Top");
	}


	//protected $btIgnorePageThemeGridFrameworkContainer = true;
/*
	public function getBlockTypeDescription()
	{
		return t("Adds a Page Top button to the page.");
	}

	public function getBlockTypeName()
	{
		return t("Back to Top");
	}
	*/
}