<?php


	
class NpvacdiasbonovacMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NpvacdiasbonovacMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('npvacdiasbonovac');
		$tMap->setPhpName('Npvacdiasbonovac');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODNOM', 'Codnom', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('PERINI', 'Perini', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('PERFIN', 'Perfin', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addColumn('RANGODESDE', 'Rangodesde', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('RANGOHASTA', 'Rangohasta', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('DIASBONOVAC', 'Diasbonovac', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 