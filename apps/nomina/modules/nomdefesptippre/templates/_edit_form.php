<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/21 16:26:45
?>
<?php echo form_tag('nomdefesptippre/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($nptippre, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('nptippre[codtippre]', __($labels['nptippre{codtippre}']),'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('nptippre{codtippre}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('nptippre{codtippre}')): ?>
    <?php echo form_error('nptippre{codtippre}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($nptippre, 'getCodtippre', array (
  'size' => 20,
  'control_name' => 'nptippre[codtippre]',
  'maxlength' => 4,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('nptippre[destippre]', __($labels['nptippre{destippre}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('nptippre{destippre}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('nptippre{destippre}')): ?>
    <?php echo form_error('nptippre{destippre}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($nptippre, 'getDestippre', array (
  'size' => 80,
  'control_name' => 'nptippre[destippre]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('nptippre[codcon]', __($labels['nptippre{codcon}']),  'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('nptippre{codcon}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('nptippre{codcon}')): ?>
    <?php echo form_error('nptippre{codcon}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($nptippre, 'getCodcon', array (
  'size' => 20,
  'control_name' => 'nptippre[codcon]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;
<?php echo button_to('...','#') ?>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<strong> <?php echo $nomcon ?></strong>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
</div>
</fieldset>

<?php include_partial('edit_actions', array('nptippre' => $nptippre)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($nptippre->getId()): ?>
<?php echo button_to(__('delete'), 'nomdefesptippre/delete?id='.$nptippre->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
