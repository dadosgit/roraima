<?php
/*
 * Created on 26/01/2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php use_helper('Object', 'ObjectAdmin', 'I18N') ?>


<?php
$hay=Ingresos::movimientos();
echo select_tag('cidefniv[rupcat]', options_for_select(Array(' ','1','2','3','4','5','6','7','8'),$cidefniv->getRupcat()),array(
   'disabled' => $hay == 1 ? true : false ,
)); ?>




