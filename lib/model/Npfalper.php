<?php

/**
 * Subclass for representing a row from the 'npfalper' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Npfalper extends BaseNpfalper
{
  public function getNomemp()
  {
      $c = new Criteria();
  	  $c->add(NphojintPeer::CODEMP,str_pad(self::getCodemp(),3,'0',STR_PAD_LEFT));
  	  $nombre = NphojintPeer::doSelectone($c);
	  if ($nombre)
	  	return $nombre->getNomemp();
	  else 
	    return '<!Nombre no encontrado!>';
  }

  public function getDesmotfal()
  {
      $c = new Criteria();
  	  $c->add(NpmotfalPeer::CODMOTFAL,self::getCodmot());
  	  $motivo = NpmotfalPeer::doSelectone($c);
	  if ($motivo)
	  	return $motivo->getDesmotfal();
	  else 
	    return '<!Nombre no encontrado!>';
  }
	  
}
