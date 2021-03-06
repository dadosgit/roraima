<?php

/**
 * biedefclafun actions.
 *
 * @package    Roraima
 * @subpackage biedefclafun
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id$
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class biedefclafunActions extends autobiedefclafunActions
{

  /**
   * Función para procesar _todas_ las funciones Ajax del formulario
   * Cada función esta identificada con el valor de la vista "ajax"
   * el cual traerá el indice de lo que se quiere procesar.
   *
   */
  public function executeAjax()
  {
	 $cajtexmos=$this->getRequestParameter('cajtexmos');
	 $cajtexcom=$this->getRequestParameter('cajtexcom');
	 if ($this->getRequestParameter('ajax')=='1')
	 {
	 	$dato=BnclafunPeer::getDescla_ajax(trim($this->getRequestParameter('codigo')));
	 	$output = '[["'.$cajtexmos.'","'.$dato.'",""]]';
	 	$this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
	 	return sfView::HEADER_ONLY;
	 }
  }

	public function executeAutocomplete()
	{
		if ($this->getRequestParameter('ajax')=='1')
	    {
		 	$this->tags="";
	    }
	}

	/**
   * Actualiza la informacion que viene de la vista 
   * luego de un get/post en el objeto principal del modelo base del formulario.
   *
   */
  protected function updateBnclafunFromRequest()
	{
		$bnclafun = $this->getRequestParameter('bnclafun');

		if (isset($bnclafun['codcla']))
    {
      $this->bnclafun->setCodcla(str_pad($bnclafun['codcla'],3,'0',STR_PAD_LEFT));
    }
    if (isset($bnclafun['descla']))
    {
      $this->bnclafun->setDescla($bnclafun['descla']);
    }
  }

}
