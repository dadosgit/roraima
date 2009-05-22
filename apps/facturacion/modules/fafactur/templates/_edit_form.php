<?php

// auto-generated by PropelCidesa
// date: 2009/01/07 11:29:22
?>
<?php

echo form_tag('fafactur/save', array (
	'id' => 'sf_admin_edit_form',
	'name' => 'sf_admin_edit_form',
	'multipart' => true,

))
?>
<?php echo javascript_include_tag('dFilter', 'ajax', 'facturacion/facturas', 'tools') ?>
<?php echo object_input_hidden_tag($fafactur, 'getId') ?>

<?php echo object_input_hidden_tag($fafactur, 'getCodcli', array('id' => 'fafactur_codcli', 'name' => 'fafactur[codcli]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getReapor', array('id' => 'fafactur_reapor', 'name' => 'fafactur[reapor]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getStatus', array('id' => 'fafactur_status', 'name' => 'fafactur[status]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getValmon', array('id' => 'fafactur_valmon', 'name' => 'fafactur[valmon]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getNumcom', array('id' => 'fafactur_numcom', 'name' => 'fafactur[numcom]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getNumcomord', array('id' => 'fafactur_numcomord', 'name' => 'fafactur[numcomord]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getNumcominv', array('id' => 'fafactur_numcominv', 'name' => 'fafactur[numcominv]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getIncluircliente', array('id' => 'fafactur_incluircliente', 'name' => 'fafactur[incluircliente]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getTipconpag', array('id' => 'fafactur_tipconpag', 'name' => 'fafactur[tipconpag]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getTipo', array('id' => 'fafactur_tipo', 'name' => 'fafactur[tipo]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getApliclades', array('id' => 'fafactur_apliclades', 'name' => 'fafactur[apliclades]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getDocrefiera', array('id' => 'fafactur_docrefiera', 'name' => 'fafactur[docrefiera]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getCtacli', array('id' => 'fafactur_ctacli', 'name' => 'fafactur[ctacli]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getTipocliente', array('id' => 'fafactur_tipocliente', 'name' => 'fafactur[tipocliente]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getLimitecredito', array('id' => 'fafactur_limitecredito', 'name' => 'fafactur[limitecredito]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getEsretencion', array('id' => 'fafactur_esretencion', 'name' => 'fafactur[esretencion]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getMonedaanterior', array('id' => 'fafactur_monedaanterior', 'name' => 'fafactur[monedaanterior]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getTrajo', array('id' => 'fafactur_trajo', 'name' => 'fafactur[trajo]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getPorcentajedescto', array('id' => 'fafactur_porcentajedescto', 'name' => 'fafactur[porcentajedescto]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getLonart', array('id' => 'fafactur_lonart', 'name' => 'fafactur[lonart]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getRgofijos', array('id' => 'fafactur_rgofijos', 'name' => 'fafactur[rgofijos]')) ?>
<?php echo object_input_hidden_tag($fafactur, 'getCtasociada', array('id' => 'fafactur_ctasociada', 'name' => 'fafactur[ctasociada]')) ?>


<div id="CajaPrinc" style="display:none">
<fieldset id="Caja" class="">
<legend><?php echo __('Clave')?></legend>
<div class="form-row" id="divcodcaj">
<font color="BLACK" size="3" face="Verdana, Arial, Helvetica, sans-serif">
<p align="center">
<?php echo __('Para poder Facturar debe elegir primero un tipo de caja para determinar el funcionamiento del correlativo') ?>
</p>
</font>
<br>
<table width="100%">
<tr>
<td Align="center">
<?php
 echo select_tag('fafactur[codcaj]', options_for_select(FadefcajPeer :: getCajas(), $fafactur->getCodcaj()), array (
	'style' => 'width:200px'
))
?>
</td>
</tr>
</table>
  <br>

  <div align="center">
   <input type="button" value="Aceptar" onClick="aceptar1();">
  </div>

</div>
</fieldset>
</div>

<div id="ClaveDes" style="display:none">
<fieldset id="Descuento" class="">
<legend><?php echo __('Clave')?></legend>
<div id="usudes">
<font color="BLACK" size="3" face="Verdana, Arial, Helvetica, sans-serif">
<p align="center">
<?php echo __('Para poder aplicar un Descuento debe introducir un USUARIO AUTORIZADO') ?>
</p>
</font>
<br>

<table width="100%">
<tr>
<td Align="center">
<?php
 echo select_tag('fafactur[usuarios]', options_for_select(FacladtoPeer :: getUsuarios(), $fafactur->getUsuarios()), array (
	'style' => 'width:150px'
))
?>
<br><br>
  <?php
 $value = object_input_tag($fafactur, 'getPassword', array (
	'size' => 20,
	'control_name' => 'fafactur[password]',
	'maxlength' => 8,

));
echo $value ? $value : '&nbsp;'
?>

</td>
</tr>
</table>


<div class="form-row" align="center">
   <input type="button" value="Aceptar" onClick="aceptar2();">
   <input type="button" value="Cancelar" onClick="ocultar('ClaveDes');">
</div>

</div>
</fieldset>
</div>

<div id="FormaPrinc" style="display:none">
<ul class="sf_admin_actions">
<li class="float-left">
<strong><font color="#CC0000" size="3" face="Verdana, Arial, Helvetica, sans-serif"> <? print $fafactur->getEstatus();?></font></strong>
</li>
<li>
<input id="cerrar" type="button" name="Submit2" value="Cerrar Caja" class="sf_admin_action_delete" onclick="cerrar2();"/>
</li>
</ul>
<h2 class="h2" onclick="javascript: return $('divDatos de la Factura').toggle();"><?php echo __('Datos de la Factura') ?></h2>
<fieldset id="sf_fieldset_datos_de_la_factura" class="">

<div class="form-row" id="divDatos de la Factura">
<table>
<tr>
<th>
<div id="divreffac">
  <?php echo label_for('fafactur[reffac]', __($labels['fafactur{reffac}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{reffac}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{reffac}')): ?>
    <?php echo form_error('fafactur{reffac}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($fafactur, 'getReffac', array (
	'size' => 20,
	'control_name' => 'fafactur[reffac]',
	'maxlength' => 8,
	'readonly'  =>  $fafactur->getId()!='' ? true : false ,
    'onKeyPress' => "javascript:if (event.keyCode==13 || event.keyCode==9){document.getElementById('fafactur_fecfac').focus();}",
    'onBlur'  => "javascript:event.keyCode=13; enter(event,this.value);",
));
echo $value ? $value : '&nbsp;'
?>
 </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divfecfac">
  <?php echo label_for('fafactur[fecfac]', __($labels['fafactur{fecfac}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{fecfac}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{fecfac}')): ?>
    <?php echo form_error('fafactur{fecfac}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_date_tag($fafactur, 'getFecfac', array (
	'rich' => true,
	'calendar_button_img' => '/sf/sf_admin/images/date.png',
	'control_name' => 'fafactur[fecfac]',
	'date_format' => 'dd/MM/yyyy',
	'size' => 10,
	'maxlength' => 10,
	'onkeyup' => "javascript: mascara(this,'/',patron,true)",
	'onBlur'=> remote_function(array(
        'url'      => 'fafactur/ajax',
        'complete' => 'AjaxJSON(request, json)',
        'condition' => "$('fafactur_fecfac').value != '' && $('id').value == ''",
        'with' => "'ajax=17&codigo='+this.value"
        ))
),date('Y-m-d'));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th>
</tr>
</table>

<br/>

<table><tr><th>
<div id="divtipref">
  <?php echo label_for('fafactur[tipref]', __($labels['fafactur{tipref}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{tipref}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{tipref}')): ?>
    <?php echo form_error('fafactur{tipref}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('tipref', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divtipmon">
  <?php echo label_for('fafactur[tipmon]', __($labels['fafactur{tipmon}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{tipmon}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{tipmon}')): ?>
    <?php echo form_error('fafactur{tipmon}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('tipmon', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
</th>
</tr>
</table>

<br/>
<div id="divrifpro">
  <?php echo label_for('fafactur[rifpro]', __($labels['fafactur{rifpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{rifpro}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{rifpro}')): ?>
    <?php echo form_error('fafactur{rifpro}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('rifpro', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<br/>
<table><tr><th>
<div id="divtelpro">
  <?php echo label_for('fafactur[telpro]', __($labels['fafactur{telpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{telpro}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{telpro}')): ?>
    <?php echo form_error('fafactur{telpro}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getTelpro', array (
	'disabled' => true,
	'control_name' => 'fafactur[telpro]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divtipper">
  <?php echo label_for('fafactur[tipper]', __($labels['fafactur{tipper}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{tipper}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{tipper}')): ?>
    <?php echo form_error('fafactur{tipper}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<? if ($fafactur->getTipper()=='N')  {
  ?><?php echo radiobutton_tag('fafactur[tipper]', 'N', true)        ."   Natural".'&nbsp;&nbsp;';
      echo radiobutton_tag('fafactur[tipper]', 'J', false)."     Jurídica";?>
    <?
}else{
  echo radiobutton_tag('fafactur[tipper]', 'N', false)        ."Natural".'&nbsp;&nbsp;';
  echo radiobutton_tag('fafactur[tipper]', 'J', true)."   Jurídica";

} ?>
    </div>
</div>
</th>
</tr>
</table>
<br/>
<div id="divdirpro">
  <?php echo label_for('fafactur[dirpro]', __($labels['fafactur{dirpro}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{dirpro}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{dirpro}')): ?>
    <?php echo form_error('fafactur{dirpro}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getDirpro', array (
	'disabled' => true,
	'control_name' => 'fafactur[dirpro]',
	'size' => 60,

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
<br/>
<div id="divcodconpag">
  <?php echo label_for('fafactur[codconpag]', __($labels['fafactur{codconpag}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{codconpag}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{codconpag}')): ?>
    <?php echo form_error('fafactur{codconpag}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('codconpag', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<br/>
<div id="divdesfac">
  <?php echo label_for('fafactur[desfac]', __($labels['fafactur{desfac}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{desfac}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{desfac}')): ?>
    <?php echo form_error('fafactur{desfac}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getDesfac', array (
	'size' => 80,
	'control_name' => 'fafactur[desfac]',
	'maxlength' => 255,

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
<br/>
<table><tr><th>
<div id="divmonto">
  <?php echo label_for('fafactur[monto]', __($labels['fafactur{monto}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{monto}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{monto}')): ?>
    <?php echo form_error('fafactur{monto}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getMonto', array (
	'readonly' => true,
	'size' => 10,
	'control_name' => 'fafactur[monto]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divmonrgo">
  <?php echo label_for('fafactur[monrgo]', __($labels['fafactur{monrgo}' ]), 'class="required" Style="text-align:left; width:50px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{monrgo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{monrgo}')): ?>
    <?php echo form_error('fafactur{monrgo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getMonrgo', array (
	'readonly' => true,
	'size' => 10,
	'control_name' => 'fafactur[monrgo]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divmondesc">
  <?php echo label_for('fafactur[mondesc]', __($labels['fafactur{mondesc}' ]), 'class="required" Style="text-align:left; width:50px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{mondesc}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{mondesc}')): ?>
    <?php echo form_error('fafactur{mondesc}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, array ('getMondesc',true), array (
	'size' => 10,
	'onKeyPress' => 'return validaDecimal(event)',
	'onBlur' => 'event.keyCode=13;return formatoDecimal(event,this.id)',
	'control_name' => 'fafactur[mondesc]',
));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divmonfac">
  <?php echo label_for('fafactur[monfac]', __($labels['fafactur{monfac}' ]), 'class="required" Style="text-align:left; width:50px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{monfac}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{monfac}')): ?>
    <?php echo form_error('fafactur{monfac}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, array ('getMonfac',true), array (
	'size' => 10,
	'onKeyPress' => 'return validaDecimal(event)',
	'onBlur' => 'event.keyCode=13;return formatoDecimal(event,this.id)',
	'control_name' => 'fafactur[monfac]',
));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th></tr></table>
</div>
</fieldset>
<h2 class="h2" onclick="javascript: return $('divDetalle').toggle();"><?php echo __('Detalle') ?></h2>
<fieldset id="sf_fieldset_detalle" class="">

<div class="form-row" id="divDetalle">
<div id="combosl" style="display:none">
<?php echo label_for('fafactur[combo]', __($labels['fafactur{combo}' ]), 'class="required" Style="text-align:left; width:100px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{combo}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{combo}')): ?>
    <?php echo form_error('fafactur{combo}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php echo input_auto_complete_tag('fafactur[combo]', $fafactur->getCombo(),
    'fafactur/autocomplete?ajax=1',  array('autocomplete' => 'off','maxlength' => 6,
    'readonly'  =>  $fafactur->getId()!='' ? true : false ,
    'onBlur'=>'colocargrid2(this.id)'
    ),
     array('use_style' => 'true')
  )?>
&nbsp; 		&nbsp;		&nbsp;
 <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo').'/metodo/Fadefcom_Fafactur/clase/Fadefcom/frame/sf_admin_edit_form/obj1/fafactur_combo/campo1/codcom','','','botoncat')?>
    </div>
</div>
<ul class="sf_admin_actions">
<li>
<input id="pedid" class="sf_admin_action_save" type="button" value="Pedidos Emitidos" onClick="despachos_pedido();">
</li>
<li>
<input id="despach" class="sf_admin_action_save" type="button" value="Despachos Emitidos" onClick="despachos_pedido();">
</li>
<li>
<input id="descuent" class="sf_admin_action_save" type="button" value="Descuentos" onClick="descuentos();">
</li>
<li>
<input id="recarg" class="sf_admin_action_save" type="button" value="Recargos" onClick="recargos();">
</li>
</ul>
<br/>
<div id="listArt" style="display:none" align="center">
<fieldset id="sf_fieldset_detalle" class="">
<legend><?php echo __('Proveedores con Mercancía a Consignacion')?></legend>
<div class="form-row">
  <?php echo label_for('fafactur[listaart]', __($labels['fafactur{listaart}' ]), 'class="required" id="label19" Style="text-align:left"; width:500px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{listaart}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{listaart}')): ?>
    <?php echo form_error('fafactur{listaart}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>
<div id="lista">
 <?php echo select_tag('fafactur[listaart]', options_for_select(Constantes::ListaRefiereA(),$fafactur->getListaart()),array(
  'onfocus' => "colocarengrid();",
  'multiple' => true,
  'size' => 10,
  'style'=> "width:500px; height:250px;",
  )) ?>
</div>
<div>
</fieldset>
</div>
<br/>
<div id="listaPedidosDespachos" style="display:none">
<fieldset id="sf_fieldset_detalle" class="">
<div class="form-row" id="divgrid_fapeddes">
  <?php echo label_for('fafactur[grid_fapeddes]', __($labels['fafactur{grid_fapeddes}' ]), 'class="required" id="label2" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{grid_fapeddes}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{grid_fapeddes}')): ?>
    <?php echo form_error('fafactur{grid_fapeddes}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>
 <div id="peddes">
  <?php $value = get_partial('grid_fapeddes', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
 </div>
  </div>
<br>
<ul class="sf_admin_actions">
<li class="float-rigth">
<input id="ocul2" class="sf_admin_action_save" type="button" value="ocultar" onClick="ocul_ped_des();">
</li>
</ul>
</div>
</fieldset>
</div>
<br/>
<div id="divgrid_faartfac">
  <?php echo label_for('fafactur[grid_faartfac]', __($labels['fafactur{grid_faartfac}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{grid_faartfac}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{grid_faartfac}')): ?>
    <?php echo form_error('fafactur{grid_faartfac}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

 <div id="articulos">
  <?php $value = get_partial('grid_faartfac', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
 </div>
  <?php echo object_input_hidden_tag($fafactur, 'getTotcanpreart', array('id' => 'fafactur_totcanpreart', 'name' => 'fafactur[totcanpreart]')) ?>
  <?php echo object_input_hidden_tag($fafactur, 'getTottotart', array('id' => 'fafactur_tottotart', 'name' => 'fafactur[tottotart]')) ?>
  <?php echo object_input_hidden_tag($fafactur, 'getTotmonrgo', array('id' => 'fafactur_totmonrgo', 'name' => 'fafactur[totmonrgo]')) ?>
  <?php echo object_input_hidden_tag($fafactur, 'getTotprecio', array('id' => 'fafactur_totprecio', 'name' => 'fafactur[totprecio]')) ?>
    </div>
</div>
<br/>
<div id="datosDesc" style="display:none">
<div id="divgrid_fadescart">
  <?php echo label_for('fafactur[grid_fadescart]', __($labels['fafactur{grid_fadescart}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{grid_fadescart}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{grid_fadescart}')): ?>
    <?php echo form_error('fafactur{grid_fadescart}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('grid_fadescart', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>

    </div>
</div>
<br/>
<table>
<tr>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<?php echo link_to_function(image_tag('/images/salir.gif'), "ocultar('datosDesc')") ?> <font color="#1630EE" size="1" face="Verdana, Arial, Helvetica, sans-serif">
<p align="center"><?php echo __('Ocultar') ?></p></font>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divtotdesc" >
  <?php echo label_for('fafactur[totdesc]', __($labels['fafactur{totdesc}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{totdesc}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{totdesc}')): ?>
    <?php echo form_error('fafactur{totdesc}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getTotdesc', array (
	'readonly' => true,
	'control_name' => 'fafactur[totdesc]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th></tr></table>
</div>
<br/>
<div id="datosRecarg" style="display:none">
<div id="divgrid_fargoart">
  <?php echo label_for('fafactur[grid_fargoart]', __($labels['fafactur{grid_fargoart}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{grid_fargoart}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{grid_fargoart}')): ?>
    <?php echo form_error('fafactur{grid_fargoart}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('grid_fargoart', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<br/>
<table>
<tr>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<?php echo link_to_function(image_tag('/images/salir.gif'), "ocultar('datosRecarg')") ?> <font color="#1630EE" size="1" face="Verdana, Arial, Helvetica, sans-serif">
<p align="center"><?php echo __('Ocultar') ?></p></font>
</th>
<th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<div id="divtotrec" >
  <?php echo label_for('fafactur[totrec]', __($labels['fafactur{totrec}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{totrec}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{totrec}')): ?>
    <?php echo form_error('fafactur{totrec}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getTotrec', array (
	'readonly' => true,
	'control_name' => 'fafactur[totrec]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th></tr></table>
<br/>
</div>
</div>
</fieldset>
<h2 class="h2" onclick="javascript: return $('divForma de Pago').toggle();"><?php echo __('Forma de Pago') ?></h2>
<fieldset id="sf_fieldset_forma_de_pago" class="">

<div class="form-row" id="divForma de Pago">
<div id="divgrid_faforpag">
  <?php echo label_for('fafactur[grid_faforpag]', __($labels['fafactur{grid_faforpag}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{grid_faforpag}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{grid_faforpag}')): ?>
    <?php echo form_error('fafactur{grid_faforpag}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('grid_faforpag', array('type' => 'edit', 'fafactur' => $fafactur)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>
<br/>
<table><tr><th>
<div id="divmoncan">
  <?php echo label_for('fafactur[moncan]', __($labels['fafactur{moncan}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{moncan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{moncan}')): ?>
    <?php echo form_error('fafactur{moncan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getMoncan', array (
	'readonly' => true,
	'size' => 10,
	'control_name' => 'fafactur[moncan]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th><th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th><th>
<div id="divmonres">
  <?php echo label_for('fafactur[monres]', __($labels['fafactur{monres}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{monres}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{monres}')): ?>
    <?php echo form_error('fafactur{monres}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getMonres', array (
	'readonly' => true,
	'size' => 10,
	'control_name' => 'fafactur[monres]',
));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th><th>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th><th>
<div id="divvuelto">
  <?php echo label_for('fafactur[vuelto]', __($labels['fafactur{vuelto}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{vuelto}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{vuelto}')): ?>
    <?php echo form_error('fafactur{vuelto}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, array ('getVuelto',true), array (
	'size' => 10,
	'readonly' => true,
	'onKeyPress' => 'return validaDecimal(event)',
	'onBlur' => 'event.keyCode=13;return formatoDecimal(event,this.id)',
	'control_name' => 'fafactur[vuelto]',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
</th></tr></table>
</div>
</fieldset>
<h2 class="h2" onclick="javascript: return $('divDescripción Detallada/Sucursal').toggle();"><?php echo __('Descripción Detallada/Sucursal') ?></h2>
<fieldset id="sf_fieldset_descripci__n_detallada_sucursal" class="">

<div class="form-row" id="divDescripción Detallada/Sucursal">
<div id="divobserv">
  <?php echo label_for('fafactur[observ]', __($labels['fafactur{observ}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{observ}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{observ}')): ?>
    <?php echo form_error('fafactur{observ}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_textarea_tag($fafactur, 'getObserv', array (
	'control_name' => 'fafactur[observ]',
	'size' => '80x5',
	'maxlength' => 500,
	'onkeyup' => 'return ismaxlength(this)',

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
<br/>
<div id="divsucursal">
  <?php echo label_for('fafactur[sucursal]', __($labels['fafactur{sucursal}' ]), 'class="required" Style="text-align:left; width:150px"') ?>
  <div class="content<?php if ($sf_request->hasError('fafactur{sucursal}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('fafactur{sucursal}')): ?>
    <?php echo form_error('fafactur{sucursal}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php
 $value = object_input_tag($fafactur, 'getSucursal', array (
	'size' => 50,
	'control_name' => 'fafactur[sucursal]',
	'maxlength' => 50,

));
echo $value ? $value : '&nbsp;'
?>
    </div>
</div>
<br/>
</div>
</fieldset>
</div>
<?php include_partial('edit_actions', array('fafactur' => $fafactur)) ?>

</form>

<ul class="sf_admin_actions">
<li class="float-rigth">
<?php if ($fafactur->getId() && $fafactur->getStatus()!='N') {?>
  <input type="button" name="Submit" value="Anular" class="sf_admin_action_delete" onclick="javascript:anular();" />
<?php }?>
</li>
<li class="float-left"><?php if ($fafactur->getId()): ?>
<?php
 echo button_to(__('delete'), 'fafactur/delete?id=' . $fafactur->getId(), array (
	'post' => true,
	'confirm' => __('Are you sure?'
), 'class' => 'sf_admin_action_delete',))
?><?php endif; ?>
</li>
  </ul>

<script language="JavaScript" type="text/javascript">
var consul='<?php echo $fafactur->getId(); ?>';
if (consul!="")
{
  mostrarPromedio();
}

 $('fafactur_tipper_J').disabled=true;
 $('fafactur_tipper_N').disabled=true;
 $('pedid').hide();
 $('despach').hide();
 var ensesion='<?php echo $sf_user->getAttribute('clavecaja','','fafactur')?>';
 if (ensesion=="" && consul=="")
 {
   $('CajaPrinc').show();
   $$('.sf_admin_action_list')[0].hide();
   $$('.sf_admin_action_save')[5].hide();
   $$('.sf_admin_action_create')[0].hide();
 }else if (ensesion!="" && consul=="")
 {
   $('FormaPrinc').show();
   if ($('fafactur_tipo').value=='F')
   {
   	$('fafactur_reffac').readOnly=true;
   }
 }
 else
 {
 	$('FormaPrinc').show();
 }

  function enter(e,valor)
 {
   if (e.keyCode==13 || e.keyCode==9)
   {
     if (valor!='')
     { valor=valor.pad(8, '0',0);}
     $('fafactur_reffac').value=valor;
     $('fafactur_fecfac').focus();
   }
 }

 function perderfocus(e,id,totcol)
 {
   var aux = id.split("_");
   var name=aux[0];
   var fil=parseInt(aux[1]);
   var col=parseInt(aux[2]);

   if (col!=totcol)
   {
    var colsig=col+1;
    var siguiente=name+"_"+fil+"_"+colsig;
   }
   else
   {
    var fila=fil+1;
   	var siguiente=name+"_"+fila+"_1";
   }

   if (e.keyCode==13 || e.keyCode==9)
   {
     if($(siguiente))
     {
      if (!$(siguiente).readOnly) $(siguiente).focus();
     }
   }
  }
</script>
