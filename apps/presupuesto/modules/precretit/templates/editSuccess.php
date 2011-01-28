<?php
// auto-generated by PropelCidesa
// date: 2010/11/04 09:32:41
?>
<?php

/**
 *
 * @package    Roraima
 * @subpackage vistas
 
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: editSuccess.php 32815 2009-09-08 16:52:04Z lhernandez $
 * @copyright  Copyright 2007, Cide S.A.
 *
 */
 ?>

<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date', 'Catalogo') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php
$cam=H::getConfApp2('cametiq', 'presupuesto', 'precretit');
if ($cam!="")
{
echo __($cam,
array()) ;
}else {
echo __('Crear TÃ­tulos Presupuestarios', 
array()) ;
}
        ?></h1>


<div id="sf_admin_header">
<?php include_partial('precretit/edit_header', array('cpdeftit' => $cpdeftit, 'labels' => $labels, 'params' => $params)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('precretit/edit_messages', array('cpdeftit' => $cpdeftit, 'labels' => $labels, 'params' => $params)) ?>
<?php include_partial('precretit/edit_form', array('cpdeftit' => $cpdeftit, 'labels' => $labels, 'params' => $params)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('precretit/edit_footer', array('cpdeftit' => $cpdeftit, 'labels' => $labels, 'params' => $params)) ?>
</div>

</div>
