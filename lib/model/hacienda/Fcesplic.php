<?php

/**
 * Subclass for representing a row from the 'fcesplic'.
 *
 *
 *
 * @package    Roraima
 * @subpackage lib.model
 * @author     $Author: lhernandez $ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id: Fcesplic.php 32426 2009-09-02 03:49:02Z lhernandez $
 *
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class Fcesplic extends BaseFcesplic
{

	protected $dircon = "";
	protected $naccon = "";
	protected $nomcon = "";
	protected $tipcon = "";

	protected $dirconrep = "";
	protected $nacconrep = "";
	protected $nomconrep = "";
	protected $tipconrep = "";

    protected $grid = "";

    protected $fechainicio = "";
    protected $fechafin= "";

	public function hydrate(ResultSet $rs, $startcol = 1) {
		parent :: hydrate($rs, $startcol);

		$this->dirconrep = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'dircon', self :: getRifrep());
		$this->nacconrep = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'naccon', self :: getRifrep());
		$this->nomconrep = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'nomcon', self :: getRifrep());
		$this->tipconrep = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'tipcon', self :: getRifrep());

		$this->dircon = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'dircon', self :: getRifcon());
		$this->nomcon = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'nomcon', self :: getRifcon());
		$this->nacconcon = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'naccon', self :: getRifcon());
		$this->tipconcon = Herramientas :: getX_vacio('rifcon', 'fcconrep', 'tipcon', self :: getRifcon());

		$this->destip = Herramientas :: getX_vacio('tipesp', 'Fctipesp', 'destip', self :: getTipesp());

		$this->fuente = Herramientas :: getX_vacio('codemp', 'Fcdefins', 'codveh', '001');
        $this->frecob = Herramientas :: getX_vacio('codfue', 'fcfuepre', 'frecob', $this->fuente);

	}
}

