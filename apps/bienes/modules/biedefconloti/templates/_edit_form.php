<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id$
 */
// date: 2007/04/03 11:42:58
?>
<?php echo form_tag('biedefconloti/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($bndefconi, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row"><?php echo label_for('bndefconi[codact]', __($labels['bndefconi{codact}']), 'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{codact}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{codact}')): ?> <?php echo form_error('bndefconi{codact}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCodact', array (
  'size' => 30,
  'control_name' => 'bndefconi[codact]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[codact]', __($labels['bndefconi{codact}']), 'class="required" ') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{codact}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{codact}')): ?> <?php echo form_error('bndefconi{codact}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCodact', array (
'size' => 30,
'control_name' => 'bndefconi[codact]',
)); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>

<fieldset><legend>Incorporación/Desincorporación</legend>
<div class="form-row"><?php echo label_for('bndefconi[ctadepcar]', __($labels['bndefconi{ctadepcar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctadepcar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctadepcar}')): ?> <?php echo form_error('bndefconi{ctadepcar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtadepcar', array (
  'size' => 20,
  'control_name' => 'bndefconi[ctadepcar]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[descta]', __($labels['bndefconi{descta}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{descta}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{descta}')): ?> <?php echo form_error('bndefconi{descta}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDescta', array (
  'disabled' => true,
  'control_name' => 'bndefconi[descta]',
)); echo $value ? $value : '&nbsp;' ?></div>
<br>
<?php echo label_for('bndefconi[ctadepabo]', __($labels['bndefconi{ctadepabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctadepabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctadepabo}')): ?> <?php echo form_error('bndefconi{ctadepabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtadepabo', array (
  'size' => 20,
  'control_name' => 'bndefconi[ctadepabo]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctaabo]', __($labels['bndefconi{desctaabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctaabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctaabo}')): ?> <?php echo form_error('bndefconi{desctaabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctaabo', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctaabo]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>
</fieldset>

<fieldset><legend>Depreciación Mensual</legend>
<div class="form-row"><?php echo label_for('bndefconi[ctaajucar]', __($labels['bndefconi{ctaajucar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctaajucar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctaajucar}')): ?> <?php echo form_error('bndefconi{ctaajucar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtaajucar', array (
  'size' => 20,
  'control_name' => 'bndefconi[ctaajucar]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctaajucar]', __($labels['bndefconi{desctaajucar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctaajucar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctaajucar}')): ?> <?php echo form_error('bndefconi{desctaajucar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctaajucar', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctaajucar]',
)); echo $value ? $value : '&nbsp;' ?></div>
<br>
<?php echo label_for('bndefconi[ctaajuabo]', __($labels['bndefconi{ctaajuabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctaajuabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctaajuabo}')): ?> <?php echo form_error('bndefconi{ctaajuabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtaajuabo', array (
  'size' => 20,
  'control_name' => 'bndefconi[ctaajuabo]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctaajuabo]', __($labels['bndefconi{desctaajuabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctaajuabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctaajuabo}')): ?> <?php echo form_error('bndefconi{desctaajuabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctaajuabo', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctaajuabo]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>
</fieldset>

<fieldset><legend>Depreciación Acumulada</legend>
<div class="form-row"><?php echo label_for('bndefconi[ctarevcar]', __($labels['bndefconi{ctarevcar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctarevcar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctarevcar}')): ?> <?php echo form_error('bndefconi{ctarevcar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtarevcar', array (
  'size' => 20,
  'control_name' => 'bndefconi[ctarevcar]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctarevcar]', __($labels['bndefconi{desctarevcar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctarevcar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctarevcar}')): ?> <?php echo form_error('bndefconi{desctarevcar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctarevcar', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctarevcar]',
)); echo $value ? $value : '&nbsp;' ?></div>
<br>
<?php echo label_for('bndefconi[ctarevabo]', __($labels['bndefconi{ctarevabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctarevabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctarevabo}')): ?> <?php echo form_error('bndefconi{ctarevabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtarevabo', array (
  'size' => 20,
  'control_name' => 'bndefconi[ctarevabo]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctarevabo]', __($labels['bndefconi{desctarevabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctarevabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctarevabo}')): ?> <?php echo form_error('bndefconi{desctarevabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctarevabo', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctarevabo]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>
</fieldset>

<fieldset><legend>Pérdida por Desincorporación</legend>
<div class="form-row"><?php echo label_for('bndefconi[ctapercar]', __($labels['bndefconi{ctapercar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctapercar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctapercar}')): ?> <?php echo form_error('bndefconi{ctapercar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtapercar', array (
  'size' => 32,
  'control_name' => 'bndefconi[ctapercar]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctapercar]', __($labels['bndefconi{desctapercar}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctapercar}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctapercar}')): ?> <?php echo form_error('bndefconi{desctapercar}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctapercar', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctapercar]',
)); echo $value ? $value : '&nbsp;' ?></div>
<br>
<?php echo label_for('bndefconi[ctaperabo]', __($labels['bndefconi{ctaperabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{ctaperabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{ctaperabo}')): ?> <?php echo form_error('bndefconi{ctaperabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getCtaperabo', array (
  'size' => 32,
  'control_name' => 'bndefconi[ctaperabo]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?></div>
<br>
<?php echo label_for('bndefconi[desctaperabo]', __($labels['bndefconi{desctaperabo}']), '') ?>
<div
	class="content<?php if ($sf_request->hasError('bndefconi{desctaperabo}')): ?> form-error<?php endif; ?>">
<?php if ($sf_request->hasError('bndefconi{desctaperabo}')): ?> <?php echo form_error('bndefconi{desctaperabo}', array('class' => 'form-error-msg')) ?>
<?php endif; ?> <?php $value = object_input_tag($bndefconi, 'getDesctaperabo', array (
  'disabled' => true,
  'control_name' => 'bndefconi[desctaperabo]',
)); echo $value ? $value : '&nbsp;' ?></div>
</div>

</fieldset>
</fieldset>
<?php include_partial('edit_actions', array('bndefconi' => $bndefconi)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($bndefconi->getId()): ?>
<?php echo button_to(__('delete'), 'biedefconloti/delete?id='.$bndefconi->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>