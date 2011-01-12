<?php

/**
 * forasoproobj actions.
 *
 * @package    siga
 * @subpackage forasoproobj
 * @author     $Auhor$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: actions.class.php 32371 2009-09-01 16:06:59Z lhernandez $
 * @copyright  Copyright 2007, Cidesa C.A.
 */

class forasoproobjActions extends autoforasoproobjActions
{

  // Para incluir funcionalidades al executeEdit()
  public function editing()
  {


  }

  public function configGrid($reg = array(),$regelim = array())
  {
    $this->regelim = $regelim;

    if(!count($reg)>0)
    {
      // AquÃ­ va el cÃ³digo para traernos los registros que contendrÃ¡ el grid
      $reg = array();
      // AquÃ­ va el cÃ³digo para generar arreglo de configuraciÃ³n del grid
    $this->obj = array();
    }

    // Insertar el criterio de la busqueda de registros del Grid
    // Por ejemplo:

    // $c = new Criteria();
    // $c->add(CaartaocPeer::AJUOC ,$this->caajuoc->getAjuoc());
    // $reg = CaartaocPeer::doSelect($c);

    // De esta forma se carga la configuraciÃ³n del grid de un archivo yml
    // y se le pasa el parÃ¡metro de los registros encontrados ($reg)
    //                                                                            /nombreformulario/
    // $this->obj = Herramientas::getConfigGrid(sfConfig::get('sf_app_module_dir').'/formulario/'.sfConfig::get('sf_app_module_config_dir_name').'/grid_caartaoc',$reg);

    // Si no se quiere cargar la configuraciÃ³n del grid de un .yml, sedebe hacer a pie.
    // Por ejemplo:

    /*
    // Se crea el objeto principal de la clase OpcionesGrid
    $opciones = new OpcionesGrid();
    // Se configuran las opciones globales del Grid
    $opciones->setEliminar(true);
    $opciones->setTabla('Caartalm');
    $opciones->setAnchoGrid(1150);
    $opciones->setTitulo('Existencia por Almacenes');
    $opciones->setHTMLTotalFilas(' ');
    // Se generan las columnas
    $col1 = new Columna('Cod. Almacen');
    $col1->setTipo(Columna::TEXTO);
    $col1->setEsGrabable(true);
    $col1->setAlineacionObjeto(Columna::CENTRO);
    $col1->setAlineacionContenido(Columna::CENTRO);
    $col1->setNombreCampo('codalm');
    $col1->setCatalogo('cadefalm','sf_admin_edit_form','2');
    $col1->setAjax(2,2);

    $col2 = new Columna('DescripciÃ³n');
    $col2->setTipo(Columna::TEXTO);
    $col2->setAlineacionObjeto(Columna::IZQUIERDA);
    $col2->setAlineacionContenido(Columna::IZQUIERDA);
    $col2->setNombreCampo('codalm');
    $col2->setHTML('type="text" size="25" disabled=true');

    // Se guardan las columnas en el objetos de opciones
    $opciones->addColumna($col1);
    $opciones->addColumna($col2);

    // Se genera el arreglo de opciones necesario para generar el grid
    $this->obj = $opciones->getConfig($per);
     */


  }

  public function executeAjax()
  {
    $codigo = $this->getRequestParameter('codigo','');
    $ajax = $this->getRequestParameter('ajax','');
    $cajtexmos = $this->getRequestParameter('cajtexmos','');
    $javascript=""; $dato="";
    switch ($ajax){
      case '1':
        $r= new Criteria();
        $r->add(FordefproblePeer::CODPRO,$codigo);
        $resul= FordefproblePeer::doSelectOne($r);
        if ($resul)
        {
            $dato=$resul->getNompro();
        }else $javascript="alert_('El Programa no se encuentra registrado'); $('forasoproobj_codpro').value=''; $('forasoproobj_codpro').focus();";

        $output = '[["'.$cajtexmos.'","'.$dato.'",""],["javascript","'.$javascript.'",""],["","",""]]';
        break;
      case '2':
         $longitud = $this->getRequestParameter('longitud');
         $u= new Criteria();
         $u->add(FordefcatprePeer::CODCAT,$codigo);
         $result= FordefcatprePeer::doSelectOne($u);
         if ($result)
         {
            if ($longitud==strlen($codigo)){
             $dato=$result->getNomcat();
            }else $javascript="alert_('La Categoria Program&aacute;tica no es de Ultimo Nivel'); $('forasoproobj_codcat').value=''; $('forasoproobj_codcat').focus();";
         }else $javascript="alert_('La Categoria Program&aacute;tica no Existe'); $('forasoproobj_codcat').value=''; $('forasounicat_codcat').focus();";

        $output = '[["'.$cajtexmos.'","'.$dato.'",""],["javascript","'.$javascript.'",""],["","",""]]';
        break;
      case '3':
        $r= new Criteria();
        $r->add(FordefobjPeer::CODOBJ,$codigo);
        $resul= FordefobjPeer::doSelectOne($r);
        if ($resul)
        {
            $dato=$resul->getDesobj();
        }else $javascript="alert_('El Objetivo no se encuentra registrado'); $('forasoproobj_codobj').value=''; $('forasoproobj_codobj').focus();";

        $output = '[["'.$cajtexmos.'","'.$dato.'",""],["javascript","'.$javascript.'",""],["","",""]]';
        break;
      default:
        $output = '[["","",""],["","",""],["","",""]]';
    }

    $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
    return sfView::HEADER_ONLY;

  }


  /**
   *
   * FunciÃ³n que se ejecuta luego los validadores del negocio (validators)
   * Para realizar validaciones especÃ­ficas del negocio del formulario
   * Para mayor informaciÃ³n vease http://www.symfony-project.org/book/1_0/06-Inside-the-Controller-Layer#chapter_06_validation_and_error_handling_methods
   *
   */
  public function validateEdit()
  {
    if($this->getRequest()->getMethod() == sfRequest::POST){
        $this->forasoproobj = $this->getForasoproobjOrCreate();
        $this->updateForasoproobjFromRequest();

        $t= new Criteria();
        $t->add(ForasoproobjPeer::CODPRO,$this->forasoproobj->getCodpro());
        $t->add(ForasoproobjPeer::CODCAT,$this->forasoproobj->getCodcat());
        $t->add(ForasoproobjPeer::CODOBJ,$this->forasoproobj->getCodobj());
        $result=ForasoproobjPeer::doSelectOne($t);
        if ($result)
           $this->coderr=322;
       

      if($this->coderr!=-1){
        return false;
      } else return true;

    }else return true;



  }

  /**
   * FunciÃ³n para actualziar el grid en el post si ocurre un error
   * Se pueden colocar aqui los grids adicionales
   *
   */
  public function updateError()
  {
    //$this->configGrid();

    //$grid = Herramientas::CargarDatosGrid($this,$this->obj);

    //$this->configGrid($grid[0],$grid[1]);

  }

  public function saving($clasemodelo)
  {
    return parent::saving($clasemodelo);
  }

  public function deleting($clasemodelo)
  {
    return parent::deleting($clasemodelo);
  }


}
