<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id$
 */
// date: 2007/04/09 17:27:37
?>
<?php use_helper('Object', 'Validation', 'Javascript', 'Grid', 'SubmitClick') ?>
<form name="form1" id="form1">
<?
//echo $coderr;
//if (trim($coderr) == '0')
//{
?>
      <script type="text/javascript">
            //mens='Error Interno de la aplicación';
            mens='<? echo $coderr; ?>';
            alert(mens);
        </script>
<?php
//}
?>
</form>