<?php


	
class NpnomesptiposMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NpnomesptiposMapBuilder';	

    
    private $dbMap;

	
    public function isBuilt()
    {
        return ($this->dbMap !== null);
    }

	
    public function getDatabaseMap()
    {
        return $this->dbMap;
    }

    
    public function doBuild()
    {
		$this->dbMap = Propel::getDatabaseMap('propel');
		
		$tMap = $this->dbMap->addTable('npnomesptipos');
		$tMap->setPhpName('Npnomesptipos');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODNOMESP', 'Codnomesp', 'string', CreoleTypes::VARCHAR, true, 3);

		$tMap->addColumn('DESNOMESP', 'Desnomesp', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('FECNOMDES', 'Fecnomdes', 'int', CreoleTypes::DATE, false);

		$tMap->addColumn('FECNOMHAS', 'Fecnomhas', 'int', CreoleTypes::DATE, false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 