<?php
// auto-generated by PropelCidesa
// date: 2010/11/23 10:33:14
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
$manmodcontra=H::getConfAppGen('manmodcontra');
if ($manmodcontra=='S')
{
echo __('EdiciÃ³n de ComisiÃ³n de ContrataciÃ³n',
array());
}else {
echo __('EdiciÃ³n de ComisiÃ³n de LicitaciÃ³n', 
array()); } ?></h1>


<div id="sf_admin_header">
<?php include_partial('liccomlic/edit_header', array('licomlic' => $licomlic, 'labels' => $labels, 'params' => $params)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('liccomlic/edit_messages', array('licomlic' => $licomlic, 'labels' => $labels, 'params' => $params)) ?>
<?php include_partial('liccomlic/edit_form', array('licomlic' => $licomlic, 'labels' => $labels, 'params' => $params)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('liccomlic/edit_footer', array('licomlic' => $licomlic, 'labels' => $labels, 'params' => $params)) ?>
</div>

</div>