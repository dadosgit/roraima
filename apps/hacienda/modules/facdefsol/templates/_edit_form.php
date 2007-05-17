<?php
// auto-generated by sfPropelAdmin
// date: 2007/05/08 12:39:52
?>
<?php echo form_tag('facdefsol/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($fctipsol, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('fctipsol[codtip]', __($labels['fctipsol{codtip}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fctipsol{codtip}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fctipsol{codtip}')): ?>
    <?php echo form_error('fctipsol{codtip}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fctipsol, 'getCodtip', array (
  'size' => 20,
  'control_name' => 'fctipsol[codtip]',
)); echo $value ? $value : '&nbsp;' ?>
</div>
<br>
  <?php echo label_for('fctipsol[destip]', __($labels['fctipsol{destip}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fctipsol{destip}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fctipsol{destip}')): ?>
    <?php echo form_error('fctipsol{destip}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fctipsol, 'getDestip', array (
  'size' => 80,
  'control_name' => 'fctipsol[destip]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br>
  <?php echo label_for('fctipsol[fueing]', __($labels['fctipsol{fueing}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fctipsol{fueing}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fctipsol{fueing}')): ?>
    <?php echo form_error('fctipsol{fueing}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fctipsol, 'getFueing', array (
  'size' => 20,
  'control_name' => 'fctipsol[fueing]',
)); echo $value ? $value : '&nbsp;' ?>
 &nbsp;
<?php echo button_to('...','#') ?>
&nbsp;&nbsp;
  <?php $value = object_input_tag($fctipsol, 'getNomfueing', array (
  'disabled' => true,
  'size' => 45,
  'control_name' => 'fctipsol[nomfueing]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br>
  <?php echo label_for('fctipsol[monsol]', __($labels['fctipsol{monsol}']),'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fctipsol{monsol}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fctipsol{monsol}')): ?>
    <?php echo form_error('fctipsol{monsol}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fctipsol, 'getMonsol', array (
  'size' => 7,
  'control_name' => 'fctipsol[monsol]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br>
  <?php echo label_for('fctipsol[valsol]','Validez Dias:', 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fctipsol{valsol}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fctipsol{valsol}')): ?>
    <?php echo form_error('fctipsol{valsol}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fctipsol, 'getValsol', array (
  'size' => 7,
  'control_name' => 'fctipsol[valsol]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
<br>
 <fieldset id="sf_fieldset_none" class="">
    <legend> <? echo $labels['fctipsol{gendeu}']; ?></legend>
    <div class="form-row" align="center">
<?  if ($fctipsol->getGendeu()=='S') 
   		$valor=true;
   else 
    	$valor=false; 
	
    echo radiobutton_tag('fctipsol[gendeu]','S', $valor) .'  '. "Si".'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo radiobutton_tag('fctipsol[gendeu]','N', !$valor) .'  '. "No";?>
	</div>
</fieldset>     
    
<br>
 <fieldset id="sf_fieldset_none" class="">
    <legend> <? echo $labels['fctipsol{privdeu}']; ?></legend>
    <div class="form-row" align="center">
<?  if ($fctipsol->getPrivdeu()=='S') 
   		$valor=true;
   else 
    	$valor=false; 
	
    echo radiobutton_tag('fctipsol[privdeu]','S', $valor) .'  '. "Si".'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo radiobutton_tag('fctipsol[privdeu]','N', !$valor) .'  '. "No";?>
	</div>
</fieldset>         
<br>
 <fieldset id="sf_fieldset_none" class="">
    <legend> <? echo $labels['fctipsol{anocom}']; ?></legend>
    <div class="form-row" align="center">
<?  if ($fctipsol->getAnocom()=='S') 
   		$valor=true;
   else 
    	$valor=false; 
	
    echo radiobutton_tag('fctipsol[anocom]','S', $valor) .'  '. "Si".'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo radiobutton_tag('fctipsol[anocom]','N', !$valor) .'  '. "No";?>
	</div>
</fieldset>    
<br>
  <?php echo label_for('fctipsol[privmsg]', __($labels['fctipsol{privmsg}']),'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('fctipsol{privmsg}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fctipsol{privmsg}')): ?>
    <?php echo form_error('fctipsol{privmsg}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fctipsol, 'getPrivmsg', array (
  'size' => 80,
  'control_name' => 'fctipsol[privmsg]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
<br>
<fieldset id="sf_fieldset_none" class="">
<legend>Verificación de Deudas</legend>
<div id="grid01" class="grid01">
<table border="0" class="sf_admin_list">
<? 
$titulo=array(0 =>' ', 1 => 'Tipo Verificación', 2 => 'Cuantos', 3 =>'Propietario', 4 =>'Mostrar');
?>
<thead><tr>
  	<?
	$i=0;
	while ($i<=4)
	{
	?>	  
	  <th><?php echo $titulo[$i] ?></th>
    <?
	 $i=$i+1;	
	}//end while
?>
   	</tr> </thead>   	  
	<tr>
	<? $i=0;
	  while ($i<=4)
	  {
	  ?>
	    <td><?php if ($i==0) echo checkbox_tag('uno', 'A', false);  else if ($i==1) echo input_tag($i,'Inmueble','style=border:none'); else echo input_tag($i,'','style=border:none') ?></td>
	<? $i=$i+1;
	  } //end while?>
	</tr>	
	<tr>
	<? $i=0;
	  while ($i<=4)
	  {
	  ?>
	    <td><?php if ($i==0) echo checkbox_tag('uno', 'A', false);  else if ($i==1) echo input_tag($i,'Licencia','style=border:none'); else echo input_tag($i,'','style=border:none') ?></td>
	<? $i=$i+1;
	  } //end while?>
	</tr>	
	<tr>
	<? $i=0;
	  while ($i<=4)
	  {
	  ?>
	    <td><?php if ($i==0) echo checkbox_tag('uno', 'A', false);  else if ($i==1) echo input_tag($i,'Contribuyente','style=border:none'); else echo input_tag($i,'','style=border:none') ?></td>
	<? $i=$i+1;
	  } //end while?>
	</tr>	
</table>
</div>
</fieldset>
<?php include_partial('edit_actions', array('fctipsol' => $fctipsol)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($fctipsol->getId()): ?>
<?php echo button_to(__('delete'), 'facdefsol/delete?id='.$fctipsol->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
