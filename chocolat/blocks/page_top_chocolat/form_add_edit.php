<?php defined('C5_EXECUTE') or die("Access Denied.");
$formPageSelector = Loader::helper('form/page_selector');
?>
 
<div class="form-group">
	<?php echo $form->label('labelText', t('Label Text'))?>
	<?php echo $form->text('labelText', $labelText); ?>
</div>