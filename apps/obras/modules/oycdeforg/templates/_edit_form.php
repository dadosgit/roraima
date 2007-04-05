<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/05 13:39:01
?>
<?php echo form_tag('oycdeforg/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($ocdeforg, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('ocdeforg[codorg]', __($labels['ocdeforg{codorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{codorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{codorg}')): ?>
    <?php echo form_error('ocdeforg{codorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getCodorg', array (
  'size' => 20,
  'control_name' => 'ocdeforg[codorg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ocdeforg[desorg]', __($labels['ocdeforg{desorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{desorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{desorg}')): ?>
    <?php echo form_error('ocdeforg{desorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getDesorg', array (
  'size' => 80,
  'control_name' => 'ocdeforg[desorg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ocdeforg[codtiporg]', __($labels['ocdeforg{codtiporg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{codtiporg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{codtiporg}')): ?>
    <?php echo form_error('ocdeforg{codtiporg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getCodtiporg', array (
  'size' => 20,
  'control_name' => 'ocdeforg[codtiporg]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?>
    </div>
<br>
<?php echo label_for('ocdeforg[destiporg]', __($labels['ocdeforg{destiporg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{destiporg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{destiporg}')): ?>
    <?php echo form_error('ocdeforg{destiporg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getDestiporg', array (
  'disabled' => true,
  'control_name' => 'ocdeforg[destiporg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[entorg]', __($labels['ocdeforg{entorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{entorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{entorg}')): ?>
    <?php echo form_error('ocdeforg{entorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>
  <?php
  ?> <?php if($ocdeforg->getEntorg()=='I') $val = true; else $val=false; ?>
  <?php echo "Organismo ".radiobutton_tag('ocdeforg[entorg]', 'O', !$val) ?>  &nbsp; 
  <?php echo "Institución ".radiobutton_tag('ocdeforg[entorg]', 'I', $val) ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[dirorg]', __($labels['ocdeforg{dirorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{dirorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{dirorg}')): ?>
    <?php echo form_error('ocdeforg{dirorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getDirorg', array (
  'size' => 80,
  'control_name' => 'ocdeforg[dirorg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[codpai]', __($labels['ocdeforg{codpai}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{codpai}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{codpai}')): ?>
    <?php echo form_error('ocdeforg{codpai}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getCodpai', array (
  'size' => 20,
  'control_name' => 'ocdeforg[codpai]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?>
    </div>
<br>
<?php echo label_for('ocdeforg[nompai]', __($labels['ocdeforg{nompai}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{nompai}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{nompai}')): ?>
    <?php echo form_error('ocdeforg{nompai}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getNompai', array (
  'disabled' => true,
  'control_name' => 'ocdeforg[nompai]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[codedo]', __($labels['ocdeforg{codedo}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{codedo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{codedo}')): ?>
    <?php echo form_error('ocdeforg{codedo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getCodedo', array (
  'size' => 20,
  'control_name' => 'ocdeforg[codedo]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?>
    </div>
<br>
<?php echo label_for('ocdeforg[nomedo]', __($labels['ocdeforg{nomedo}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{nomedo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{nomedo}')): ?>
    <?php echo form_error('ocdeforg{nomedo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getNomedo', array (
  'disabled' => true,
  'control_name' => 'ocdeforg[nomedo]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[codciu]', __($labels['ocdeforg{codciu}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{codciu}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{codciu}')): ?>
    <?php echo form_error('ocdeforg{codciu}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getCodciu', array (
  'size' => 20,
  'control_name' => 'ocdeforg[codciu]',
  )); echo $value ? $value : '&nbsp;' ?> &nbsp; <?php echo button_to('...','#')?>
    </div>
<br>
<?php echo label_for('ocdeforg[nomciu]', __($labels['ocdeforg{nomciu}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{nomciu}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{nomciu}')): ?>
    <?php echo form_error('ocdeforg{nomciu}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getNomciu', array (
  'disabled' => true,
  'control_name' => 'ocdeforg[nomciu]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[telorg]', __($labels['ocdeforg{telorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{telorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{telorg}')): ?>
    <?php echo form_error('ocdeforg{telorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getTelorg', array (
  'size' => 30,
  'control_name' => 'ocdeforg[telorg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[faxorg]', __($labels['ocdeforg{faxorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{faxorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{faxorg}')): ?>
    <?php echo form_error('ocdeforg{faxorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getFaxorg', array (
  'size' => 20,
  'control_name' => 'ocdeforg[faxorg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<?php echo label_for('ocdeforg[emaorg]', __($labels['ocdeforg{emaorg}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ocdeforg{emaorg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ocdeforg{emaorg}')): ?>
    <?php echo form_error('ocdeforg{emaorg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ocdeforg, 'getEmaorg', array (
  'size' => 50,
  'control_name' => 'ocdeforg[emaorg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('ocdeforg' => $ocdeforg)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($ocdeforg->getId()): ?>
<?php echo button_to(__('delete'), 'oycdeforg/delete?id='.$ocdeforg->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
