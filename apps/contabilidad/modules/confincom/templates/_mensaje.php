<?php if ($contabc->getId()!='') { ?>
<div class="form-error">
	<h2 style="color: black; background: green; font-size:  large"  align="center"><?php  echo $contabc->getStapin(); ?></h2>
	<input type="hidden" id="status" name="status" value="<? echo $contabc->getStacom(); ?>">
</div>
<?php } ?>
<script language="Javascript">
function rellenar() {
	  if ($('contabc_numcom').value=='') {
	    $('contabc_numcom').value='########';
	  }else {
	    $('contabc_numcom').value=$('contabc_numcom').value.pad(8,'0',0);
	  }
	}
</script>