<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/15 20:28:32
?>
<?php echo form_tag('tesmovtraban/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($tsmovtra, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">
<legend>Datos de la Transferencia</legend>
<div class="form-row">
  <?php echo label_for('tsmovtra[reftra]', __($labels['tsmovtra{reftra}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('tsmovtra{reftra}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('tsmovtra{reftra}')): ?>
    <?php echo form_error('tsmovtra{reftra}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($tsmovtra, 'getReftra', array (
  'size' => 20,
  'control_name' => 'tsmovtra[reftra]',
  'maxlength' => 20,
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<strong>Fecha</strong>
<?php $value = object_input_date_tag($tsmovtra, 'getFectra', array (
  'rich' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'tsmovtra[fectra]',
  'date_format' => 'dd/MM/yyyy',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('tsmovtra[destra]', __($labels['tsmovtra{destra}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('tsmovtra{destra}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('tsmovtra{destra}')): ?>
    <?php echo form_error('tsmovtra{destra}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($tsmovtra, 'getDestra', array (
  'size' => 80,
  'control_name' => 'tsmovtra[destra]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('tsmovtra[montra]', __($labels['tsmovtra{montra}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('tsmovtra{montra}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('tsmovtra{montra}')): ?>
    <?php echo form_error('tsmovtra{montra}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($tsmovtra, 'getMontra', array (
  'size' => 25,
  'control_name' => 'tsmovtra[montra]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
<fieldset id="sf_fieldset_none" class="">
<legend>Codigos Bancarios</legend>
<div class="form-row">
  <?php echo label_for('tsmovtra[ctaori]', __($labels['tsmovtra{ctaori}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('tsmovtra{ctaori}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('tsmovtra{ctaori}')): ?>
    <?php echo form_error('tsmovtra{ctaori}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($tsmovtra, 'getCtaori', array (
  'size' => 20,
  'control_name' => 'tsmovtra[ctaori]',
  'maxlength' => 20,
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;
<?php echo button_to('...','#') ?>
&nbsp;
<?php echo input_tag('nomctaori',$nomcueori,'disabled=true,size=40') ?> 

    </div>
</div>

<div class="form-row">
  <?php echo label_for('tsmovtra[ctades]', __($labels['tsmovtra{ctades}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('tsmovtra{ctades}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('tsmovtra{ctades}')): ?>
    <?php echo form_error('tsmovtra{ctades}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($tsmovtra, 'getCtades', array (
  'size' => 20,
  'control_name' => 'tsmovtra[ctades]',
  'maxlength' => 20,
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;
<?php echo button_to('...','#') ?>
&nbsp;
<?php echo input_tag('nomctades',$nomcuedes,'disabled=true,size=40') ?> 

    </div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset id="sf_fieldset_none" class="">
<legend>Comprobante Contable</legend>
<div class="form-row">
  <?php echo label_for('tsmovtra[numcom]', __($labels['tsmovtra{numcom}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('tsmovtra{numcom}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('tsmovtra{numcom}')): ?>
    <?php echo form_error('tsmovtra{numcom}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($tsmovtra, 'getNumcom', array (
  'size' => 20,
  'control_name' => 'tsmovtra[numcom]',
)); echo $value ? $value : '&nbsp;' ?>
&nbsp;
&nbsp;
&nbsp;
<strong>Fecha</strong>
&nbsp;
<?php $value = object_input_date_tag($tsmovtra, 'getFectra', array (
  'rich' => true,
  'disabled' => true, 
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'mio',
  'date_format' => 'dd/MM/yyyy',
)); echo $value ? $value : '&nbsp;' ?>
  &nbsp;
  &nbsp;
  &nbsp;
  <?php echo button_to('Generar Comprobante','#') ?> 
    </div>
</div>
<div class="form-row">
  <?php echo label_for('descri','Descripcion', 'class="required" ') ?>
  <?php echo input_tag('descricon',$tsmovtra->getDestra(),'disabled=true,size=80') ?>
    </div>
</div>
</fieldset>



<?php include_partial('edit_actions', array('tsmovtra' => $tsmovtra)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($tsmovtra->getId()): ?>
<?php echo button_to(__('delete'), 'tesmovtraban/delete?id='.$tsmovtra->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
