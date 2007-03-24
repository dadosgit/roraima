<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/24 17:28:55
?>
<?php echo form_tag('nomnommovnomconcar/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($npasicaremp, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('npasicaremp[codemp]', __($labels['npasicaremp{codemp}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('npasicaremp{codemp}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('npasicaremp{codemp}')): ?>
    <?php echo form_error('npasicaremp{codemp}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($npasicaremp, 'getCodemp', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codemp]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#') ?>
&nbsp;&nbsp;</div>
</div>

<div class="form-row">
<?php echo label_for('npasicaremp[nomemp]', __($labels['npasicaremp{nomemp}']), 'class="required"') ?>
  <div class="content<?php if ($sf_request->hasError('npasicaremp{nomemp}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('npasicaremp{nomemp}')): ?>
    <?php echo form_error('npasicaremp{nomemp}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($npasicaremp, 'getNomemp', array (
  'size' => 80,
  'control_name' => 'npasicaremp[nomemp]',
  'maxlength' => 50,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('npasicaremp[codcar]', __($labels['npasicaremp{codcar}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('npasicaremp{codcar}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('npasicaremp{codcar}')): ?>
    <?php echo form_error('npasicaremp{codcar}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($npasicaremp, 'getCodcar', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codcar]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#') ?>
&nbsp;&nbsp;</div>
</div>

<div class="form-row">
  <?php echo label_for('npasicaremp[codnom]', __($labels['npasicaremp{codnom}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('npasicaremp{codnom}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('npasicaremp{codnom}')): ?>
    <?php echo form_error('npasicaremp{codnom}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($npasicaremp, 'getCodnom', array (
  'size' => 20,
  'control_name' => 'npasicaremp[codnom]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#') ?>
&nbsp;&nbsp;</div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('npasicaremp' => $npasicaremp)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($npasicaremp->getId()): ?>
<?php echo button_to(__('delete'), 'nomnommovnomconcar/delete?id='.$npasicaremp->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
