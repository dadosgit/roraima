<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date', 'tabs', 'Javascript', 'PopUp', 'Grid') ?>
<?php echo grid_tag_v2($params['grid']);?>
<script language="Javascript">
    if($('status').value=='A')
    {    	
    	disableAllObjetos_(a=new Array(''),true);		    	
    }
		
</script>

