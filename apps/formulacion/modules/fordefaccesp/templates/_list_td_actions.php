<?php
/**
 * Funciones de la vista.
 *
 * @package    Roraima
 * @subpackage vistas
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id$
 */
// date: 2007/11/21 11:28:20
?>
<td>
<ul class="sf_admin_td_actions">
  <li><?php echo link_to(image_tag('/sf/sf_admin/images/edit_icon.png', array('alt' => __('edit'), 'title' => __('edit'))), 'fordefaccesp/edit?id='.$fordefaccesp->getId().'&codpro='.$fordefaccesp->getCodpro()) ?></li>
  <li><?php echo link_to(image_tag('/sf/sf_admin/images/delete_icon.png', array('alt' => __('delete'), 'title' => __('delete'))), 'fordefaccesp/delete?id='.$fordefaccesp->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
)) ?></li>
</ul>
</td>