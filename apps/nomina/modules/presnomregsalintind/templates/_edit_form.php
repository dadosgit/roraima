<?php
// auto-generated by PropelCidesa
// date: 2008/09/09 10:43:52
?>
<?php echo form_tag('presnomregsalintind/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>
<?php use_helper('Javascript','PopUp','Grid','Date','SubmitClick','tabs') ?>
<?php echo javascript_include_tag('dFilter', 'ajax', 'nomina/presnomregsalintind', 'tools') ?>
<?php echo object_input_hidden_tag($npsalint, 'getId') ?>




<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('npsalint[codcon]', __($labels['npsalint{codcon}']), 'class="required"') ?>
  <?php if ($sf_request->hasError('npsalint{codcon}')): ?> form-error<?php endif; ?>
  <?php if ($sf_request->hasError('npsalint{codcon}')): ?>
    <?php echo form_error('npsalint{codcon}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>



<?php echo input_tag('npsalint[codcon]', $npsalint->getCodcon(),
    	array('maxlength' => 6,
    	      'readonly'  =>  $npsalint->getId()!='' ? true : false ,
			  'onBlur'=> remote_function(array(
			  'update'=> 'grid',
			  'url'      => 'presnomregsalintind/ajax',
			  'condition' => "$('npsalint_codcon').value != '' && $('id').value == ''",
			  'complete' => 'AjaxJSON(request, json)',
  			  'with' => "'ajax=1&cajtexcom=npsalint_codcon&cajtexmos=npsalint_destipcon&codigo='+this.value",
			  )))
  )
?>

   <?php  echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Nptipcon_Presnomregsalint/clase/Nptipcon/frame/sf_admin_edit_form/obj1/npsalint_codcon/obj2/npsalint_destipcon/campo1/codtipcon/campo2/destipcon/param1/",'','','buttoncat')?>

  <?php $value = object_input_tag($npsalint, 'getDestipcon', array (
  'size' => 50,
  'disabled' => true,
  'control_name' => 'npsalint[destipcon]',
)); echo $value ? $value : '&nbsp;' ?>

</div>

<div class="form-row">
  <?php echo label_for('npsalint[codnom]', __($labels['npsalint{codnom}']), 'class="required"') ?>
  <?php if ($sf_request->hasError('npsalint{codnom}')): ?> form-error<?php endif; ?>
  <?php if ($sf_request->hasError('npsalint{codnom}')): ?>
    <?php echo form_error('npsalint{codnom}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php echo input_tag('npsalint[codnom]', $npsalint->getCodnom(),
    	array('maxlength' => 6,
    		  'readonly'  =>  $npsalint->getId()!='' ? true : false ,
			  'onBlur'=> remote_function(array(
			  'update'=> 'grid',
			  'url'      => 'presnomregsalintind/ajax',
			  'complete' => 'AjaxJSON(request, json)',
			  'condition' => "$('npsalint_codnom').value != '' && $('id').value == ''",
  			  'with' => "'ajax=2&cajtexmos1=npsalint_nomnom&codcon='+$('npsalint_codcon').value +'&codnom='+this.value"
			  )))
  )
?>

   <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Npnomina_Presnomregsalint/clase/Npnomina/frame/sf_admin_edit_form/obj1/npsalint_codnom/obj2/npsalint_nomnom/campo1/codnom/campo2/nomnom/param1/'+$('npsalint_codcon').value+' ",'','','buttoncat')?>

 <?php $value = object_input_tag($npsalint, 'getNomnom', array (
  'size' => 50,
  'disabled' => true,
  'control_name' => 'npsalint[nomnom]',
)); echo $value ? $value : '&nbsp;' ?>

</div>
<br/>
<div class="form-row">
  <?php echo label_for('npsalint[codemp]', __($labels['npsalint{codemp}']), 'class="required"') ?>
  <?php if ($sf_request->hasError('npsalint{codemp}')): ?> form-error<?php endif; ?>
  <?php if ($sf_request->hasError('npsalint{codemp}')): ?>
    <?php echo form_error('npsalint{codemp}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

<?php echo input_tag('npsalint[codemp]', $npsalint->getCodemp(),
    	array('maxlength' => 12,
    	      'readonly'  =>  $npsalint->getId()!='' ? true : false ,
			  'onBlur'=> remote_function(array(
			  'update'=> 'grid',
			  'url'      => 'presnomregsalintind/ajax',
			  'complete' => 'AjaxJSON(request, json);$("npsalint_feccal").focus()',
			  'condition' => "$('npsalint_codemp').value != '' && $('id').value == ''",
  			  'with' => "'ajax=3&codcon='+$('npsalint_codcon').value +'&codnom='+$('npsalint_codnom').value +'&codemp='+this.value"
			  )))
  )
?>

   <?php echo  button_to_popup('...',cross_app_link_to('herramientas','catalogo')."/metodo/Npnomina_Presnomregsalintind/clase/Npasiempcont/frame/sf_admin_edit_form/obj1/npsalint_codemp/obj2/npsalint_nomemp/obj3/npsalint_feccal/campo1/codemp/campo2/nomemp/campo3/feccal/param1/'+$('npsalint_codnom').value+'/param2/'+$('npsalint_codcon').value+' ",'','','buttoncat')?>

 <?php $value = object_input_tag($npsalint, 'getNomemp', array (
  'size' => 50,
  'disabled' => true,
  'control_name' => 'npsalint[nomemp]',
)); echo $value ? $value : '&nbsp;' ?>

</div>
<br>
<div class="form-row">
  <?php echo label_for('npsalint[feccal]', __($labels['npsalint{feccal}' ]), ' class="required" Style="text-align:left; width:100px"') ?>
  <div class="content<?php if ($sf_request->hasError('npsalint{feccal}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('npsalint{feccal}')): ?>
    <?php echo form_error('npsalint{feccal}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($npsalint, 'getFeccal', array (
  'rich' => true,
  'readonly'  =>  true ,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'npsalint[feccal]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>

</fieldset>
<br>

<div id=grid>
<?php
 echo grid_tag($obj);
?>
</div>
<?php include_partial('edit_actions', array('npsalint' => $npsalint)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($npsalint->getId()): ?>
<?php echo button_to(__('delete'), 'presnomregsalintind/delete?id='.$npsalint->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
<script type="text/javascript">
  var id="";
  var id='<?php echo $npsalint->getId()?>';
  actualiza(id);

  function actualiza(id)
  {
  	$('trigger_npsalint_feccal').hide();
    if (id!="")
    {
	    $$('.buttoncat')[0].disabled=true;
	  	$$('.buttoncat')[1].disabled=true;
	    $$('.buttoncat')[2].disabled=true;
   }
  }
</script>
