<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/16 09:43:43
?>
<?php echo form_tag('alminvfis/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($cainvfis, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('cainvfis[fecinv]', __($labels['cainvfis{fecinv}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('cainvfis{fecinv}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('cainvfis{fecinv}')): ?>
    <?php echo form_error('cainvfis{fecinv}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($cainvfis, 'getFecinv', array (
  'rich' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'cainvfis[fecinv]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('cainvfis[codalm]', __($labels['cainvfis{codalm}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('cainvfis{codalm}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('cainvfis{codalm}')): ?>
    <?php echo form_error('cainvfis{codalm}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($cainvfis, 'getCodalm', array (
  'size' => 20,
  'control_name' => 'cainvfis[codalm]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('cainvfis[codart]', __($labels['cainvfis{codart}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('cainvfis{codart}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('cainvfis{codart}')): ?>
    <?php echo form_error('cainvfis{codart}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($cainvfis, 'getCodart', array (
  'size' => 20,
  'control_name' => 'cainvfis[codart]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('cainvfis[exiact]', __($labels['cainvfis{exiact}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('cainvfis{exiact}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('cainvfis{exiact}')): ?>
    <?php echo form_error('cainvfis{exiact}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($cainvfis, 'getExiact', array (
  'size' => 7,
  'control_name' => 'cainvfis[exiact]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('cainvfis[exiact2]', __($labels['cainvfis{exiact2}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('cainvfis{exiact2}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('cainvfis{exiact2}')): ?>
    <?php echo form_error('cainvfis{exiact2}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($cainvfis, 'getExiact2', array (
  'size' => 7,
  'control_name' => 'cainvfis[exiact2]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<table border="0" class="sf_admin_list">
<?php $nombre=array(0 => 'Fecha de Inventario:', 1 => 'Almacen',2 => 'Articulo Desde:', 3 => 'Articulo Hasta'); ?>
<? if ( count($rs)>0){
$i=0;
foreach ($rs as $k=>$fila) {
    $i++;
    if($i==1){?>
      <thead><tr>
    <? foreach ($fila as $key => $value){?>
        <th><?=$nombre[$key]?></th>
    <? }?>
      </tr> </thead>
    <? }?>
<tr>
<? foreach ($fila as $key => $value){?>
    <td><?=$value?></td>
<? }?>
</tr>
<? }
  }
?></table> 
</fieldset>

<?php include_partial('edit_actions', array('cainvfis' => $cainvfis)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($cainvfis->getId()): ?>
<?php echo button_to(__('delete'), 'alminvfis/delete?id='.$cainvfis->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>

