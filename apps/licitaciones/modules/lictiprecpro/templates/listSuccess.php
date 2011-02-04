<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: listSuccess.php 32813 2009-09-08 16:19:47Z lhernandez $
 */
// date: 2008/01/17 10:49:34
?>
<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Personalidad Jurídica',
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('lictiprecpro/list_header', array('pager' => $pager)) ?>
</div>

<div id="sf_admin_bar">
<?php include_partial('filters', array('filters' => $filters)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('lictiprecpro/list_messages', array('pager' => $pager)) ?>
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php else: ?>
<?php include_partial('lictiprecpro/list', array('pager' => $pager)) ?>
<?php endif; ?>
<?php include_partial('list_actions') ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('lictiprecpro/list_footer', array('pager' => $pager)) ?>
</div>

</div>
