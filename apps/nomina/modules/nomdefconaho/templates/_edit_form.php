<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id$
 */
// date: 2007/03/23 17:11:53
?>
<?php echo form_tag('nomdefconaho/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($npconaho, 'getId') ?>
<?php echo javascript_include_tag('dFilter','ajax','tools') ?>
<fieldset id="sf_fieldset_none" class="">
<div class="form-row">

<fieldset id="sf_fieldset_none" class="">
<legend><? echo __('Tipo de Nomina') ?></legend>
<div class="form-row">
<table>
<tr>
<th>
<?php echo label_for('npconaho[codnom]', __($labels['npconaho{codnom}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('npconaho{codnom}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('npconaho{codnom}')): ?>
    <?php echo form_error('npconaho{codnom}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

 <?php $value = object_input_tag($npconaho, 'getCodnom', array (
  'size' => 20,
  'maxlength' => 3,
  'readonly'  =>  $npconaho->getId()!='' ? true : false ,
  'control_name' => 'npconaho[codnom]',
  'onKeyPress' => "javascript:cadena=this.value;cadena=cadena.toUpperCase();document.getElementById('npconaho_codnom').value=cadena",
  'onBlur'=> remote_function(array(
     'update'   => 'divGrid',
     'url'      => 'nomdefconaho/ajax',
	 'complete' => 'AjaxJSON(request, json), duplicados()',
	 'condition' => "$('npconaho_codnom').value != '' && $('id').value == ''",
	 'script' => true,
  	 'with' => "'ajax=1&cajtexmos=npconaho_nomnom&cajtexcom=npconaho_codnom&codigo='+this.value"
			  )),
)); echo $value ? $value : '&nbsp;' ?>
 </div><?php echo input_hidden_tag('duplicado', '') ?>
</th>
<th>
<?php echo button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Npdefcpt_nomdefconaho/clase/Npnomina/frame/sf_admin_edit_form/obj1/npconaho_codnom/obj2/npconaho_nomnom/campo1/codnom/campo2/nomnom/param1/1/param2/y','','','botoncat')?>
  </th>
<th>
<?php $value = object_input_tag($npconaho, 'getNomnom', array (
  'disabled' => true,
  'size'=> 60,
  'control_name' => 'npconaho[nomnom]',
)); echo $value ? $value : '&nbsp;' ?>
</th>
</tr>
</table>

<br>

<?php
$vale=false;$valc=false;$valo=false;
 if($npconaho->getTipnom()=='E') $vale = true; else $vale=false;
 if($npconaho->getTipnom()=='C') $valc = true; else $valc=false;
 if($npconaho->getTipnom()=='O') $valo = true; else $valo=false;
 ?>
<?php echo "Empleado      " .radiobutton_tag('npconaho[tipnom]', 'E', $vale).'&nbsp;&nbsp;&nbsp;&nbsp;'?>
&nbsp;&nbsp;
<?php echo "Contratado        " .radiobutton_tag('npconaho[tipnom]', 'C', $valc).'&nbsp;&nbsp;&nbsp;&nbsp;' ?>
&nbsp;&nbsp;
<?php echo "Obrero      " .radiobutton_tag('npconaho[tipnom]', 'O', $valo).'&nbsp;&nbsp;&nbsp;&nbsp;' ?>
</div>
</fieldset>

<br>
<?php echo input_hidden_tag('existe', '') ?>
<fieldset id="sf_fieldset_none" class="">
<legend><? echo __('Conceptos Deducción y Aporte') ?></legend>
<div class="form-row">
<?php echo label_for('deduccion','Deducción', 'class="required" ') ?>
<div>
<?php echo input_tag('txtdeduccion',$deduccion, array(
'maxlength' => 3,
'onKeyPress' => "javascript:cadena=this.value;cadena=cadena.toUpperCase();document.getElementById('txtdeduccion').value=cadena",
'onBlur'=> remote_function(array(
     'url'      => 'nomdefconaho/ajax',
	 'complete' => 'AjaxJSON(request, json), verificar("1")',
	 'condition' => "$('txtdeduccion').value != ''",
	 'with' => "'ajax=2&cajtexmos=desdeduccion&cajtexcom=txtdeduccion&cat=0&nomina='+$('npconaho_codnom').value+'&codigo='+this.value"
			  )),
))?>
&nbsp;
<?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Npdefcpt_nomdefconaho/clase/Npdefcpt/frame/sf_admin_edit_form/obj1/txtdeduccion/obj2/desdeduccion/campo1/codcon/campo2/nomcon/param1/'+$('npconaho_codnom').value+'/param2/2")?>

<?php echo input_tag('desdeduccion','', 'disabled="true" size="60"')?></div>

<br>

<?php echo label_for('aportes','Aporte', 'class="required" ') ?>
<div>
<?php echo input_tag('txtaportes',$aporte, array(
'maxlength' => 3,
'onKeyPress' => "javascript:cadena=this.value;cadena=cadena.toUpperCase();document.getElementById('txtaportes').value=cadena",
'onBlur'=> remote_function(array(
     'url'      => 'nomdefconaho/ajax',
	 'complete' => 'AjaxJSON(request, json), verificar("2")',
	 'condition' => "$('txtaportes').value != ''",
	 'with' => "'ajax=2&cajtexmos=desaportes&cajtexcom=txtaportes&cat=1&nomina='+$('npconaho_codnom').value+'&codigo='+this.value"
			  )),
))?>
&nbsp;
<?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Npdefcpt_nomdefconaho/clase/Npdefcpt/frame/sf_admin_edit_form/obj1/txtaportes/obj2/desaportes/campo1/codcon/campo2/nomcon/param1/'+$('npconaho_codnom').value+'/param2/3")?>

<?php echo input_tag('desaportes','', 'disabled="true" size="60"')?></div>
</div>
</fieldset>

<br>

<fieldset id="sf_fieldset_none" class="">
<legend><? echo __('Conceptos Ajustes Deduccion y Aporte')?></legend>
<div class="form-row">
<?php echo label_for('ajudeduccion','Ajuste Deduccion', 'class="required" ') ?>
<div>
<?php echo input_tag('txtajudeduccion',$ajudeduccion,array(
'maxlength' => 3,
'onKeyPress' => "javascript:cadena=this.value;cadena=cadena.toUpperCase();document.getElementById('txtajudeduccion').value=cadena",
'onBlur'=> remote_function(array(
     'url'      => 'nomdefconaho/ajax',
	 'complete' => 'AjaxJSON(request, json), verificar("3")',
	 'condition' => "$('txtajudeduccion').value != ''",
	 'with' => "'ajax=2&cajtexmos=desajudeduccion&cajtexcom=txtajudeduccion&cat=2&nomina='+$('npconaho_codnom').value+'&codigo='+this.value"
			  )),
))?>
&nbsp;
<?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Npdefcpt_nomdefconaho/clase/Npdefcpt/frame/sf_admin_edit_form/obj1/txtajudeduccion/obj2/desajudeduccion/campo1/codcon/campo2/nomcon/param1/'+$('npconaho_codnom').value+'/param2/4")?>
&nbsp;&nbsp;
<?php echo input_tag('desajudeduccion','', 'disabled="true" size="60"')?></div>

<br>

<?php echo label_for('ajuaportes','Ajuste Aporte', 'class="required" ') ?>
<div>
<?php echo input_tag('txtajuaportes',$ajuaporte, array(
'maxlength' => 3,
'onKeyPress' => "javascript:cadena=this.value;cadena=cadena.toUpperCase();document.getElementById('txtajuaportes').value=cadena",
'onBlur'=> remote_function(array(
     'url'      => 'nomdefconaho/ajax',
	 'complete' => 'AjaxJSON(request, json), verificar("4")',
	 'condition' => "$('txtajuaportes').value != ''",
	 'with' => "'ajax=2&cajtexmos=desajuaportes&cajtexcom=txtajuaportes&cat=3&nomina='+$('npconaho_codnom').value+'&codigo='+this.value"
			  )),
))?>
&nbsp;
<?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Npdefcpt_nomdefconaho/clase/Npdefcpt/frame/sf_admin_edit_form/obj1/txtajuaportes/obj2/desajuaportes/campo1/codcon/campo2/nomcon/param1/'+$('npconaho_codnom').value+'/param2/5")?>
&nbsp;&nbsp;
<?php echo input_tag('desajuaportes','', 'disabled="true" size="60"')?></div>
</div>
</fieldset>

<br>

<div id="divGrid">
<?php echo grid_tag($obj);?>
</div>

</div>
</fieldset>
<?php include_partial('edit_actions', array('npconaho' => $npconaho)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-rigth"><?php if ($npconaho->getId()): ?>
<?php echo button_to(__('delete'), 'nomdefconaho/delete?id='.$npconaho->getId().'&nomina='.$npconaho->getCodnom(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>

<script language="JavaScript" type="text/javascript">
  var id='<?php echo $npconaho->getId()?>';
  if (id)
  {
  	$('txtdeduccion').focus();
  	$('txtaportes').focus();
  	$('txtajudeduccion').focus();
  	$('txtajuaportes').focus();
  	$('npconaho_codnom').focus();
  	$$('.botoncat')[0].disabled=true;
  }

   function verificar(nro)
  {
  	if (nro==1)
  	{
  	  if ($('existe').value=='S')
  	  {
  	    alert('El Concepto no esta asociado a la Nomina');
  	    $('txtdeduccion').value="";
  	   }

  	  if ($('existe').value=='SS')
  	  {
  	    alert('El Concepto no existe');
  	    $('txtdeduccion').value="";
  	   }
  	}
  	else if (nro==2)
  	{
  	  if ($('existe').value=='S')
  	  {
  	    alert('El Concepto no esta asociado a la Nomina');
  	    $('txtaportes').value="";
  	   }

  	  if ($('existe').value=='SS')
  	  {
  	    alert('El Concepto no existe');
  	    $('txtaportes').value="";
  	   }
  	}
  	else if (nro==3)
  	{
  	if ($('existe').value=='S')
  	  {
  	    alert('El Concepto no esta asociado a la Nomina');
  	    $('txtajudeduccion').value="";
  	   }

  	  if ($('existe').value=='SS')
  	  {
  	    alert('El Concepto no existe');
  	    $('txtajudeduccion').value="";
  	   }
  	}
  	else
  	{
  	  if ($('existe').value=='S')
  	  {
  	    alert('El Concepto no esta asociado a la Nomina');
  	    $('txtajuaportes').value="";
  	   }

  	  if ($('existe').value=='SS')
  	  {
  	    alert('El Concepto no existe');
  	    $('txtajuaportes').value="";
  	   }
  	}
  }

  function duplicados()
  {
  	if ($('duplicado').value=='S')
  	{
  	  alert('La Nomina ya esta registrada consultela desde la lista para aplicar nuevos cambios');
  	  $('npconaho_codnom').value="";
  	}
  }

  function validar(id)
  {
  	var aux = id.split("_");
	var name=aux[0];
	var fil=aux[1];
	var col=parseInt(aux[2]);

	var colconcepto=col+1;
	var concepto=name+"_"+fil+"_"+colconcepto;
  	if ($(concepto).value==$('txtdeduccion').value)
  	{
  	  alert('El Concepto esta asignado para Concepto por Deducción');
  	  $(id).checked=false;
  	}
  	else if ($(concepto).value==$('txtaportes').value)
  	{
  	  alert('El Concepto esta asignado para Concepto por Aportes');
  	  $(id).checked=false;
  	}
  	else if ($(concepto).value==$('txtajudeduccion').value)
  	{
  	  alert('El Concepto esta asignado para Concepto por Ajuste de Deduccion');
  	  $(id).checked=false;
  	}
  	else if ($(concepto).value==$('txtajuaportes').value)
  	{
      alert('El Concepto esta asignado para Concepto por Ajuste de Aportes');
  	  $(id).checked=false;
  	}
  }
</script>
