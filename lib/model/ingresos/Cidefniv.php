<?php

/**
 * Subclass for representing a row from the 'cidefniv'.
 *
 *
 *
 * @package    Roraima
 * @subpackage lib.model
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id: Cidefniv.php 32416 2009-09-02 02:21:12Z lhernandez $
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class Cidefniv extends BaseCidefniv
{

  protected $grid= array();
  protected $gridper= array();
  protected $gridper2= array();

  public function getNomemp()
    {
      $c = new Criteria();
      $c->add(EmpresaPeer::CODEMP,'001');
      $nombre = EmpresaPeer::doSelectone($c);
    if ($nombre)
      return $nombre->getNomemp();
    else
      return 'No encontrado';
    }



}
