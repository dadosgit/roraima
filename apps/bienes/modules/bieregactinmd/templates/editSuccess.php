<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/03 20:00:19
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Registro de Activos Inmuebles', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('bieregactinmd/edit_header', array('bnreginm' => $bnreginm)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('bieregactinmd/edit_messages', array('bnreginm' => $bnreginm, 'labels' => $labels)) ?>
<?php include_partial('bieregactinmd/edit_form', array('bnreginm' => $bnreginm, 'clafun' => $clafun, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('bieregactinmd/edit_footer', array('bnreginm' => $bnreginm)) ?>
</div>

</div>
