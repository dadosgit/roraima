<?php


	
class FaartpvpMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FaartpvpMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('faartpvp');
		$tMap->setPhpName('Faartpvp');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODART', 'Codart', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('CODPVP', 'Codpvp', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('PVPART', 'Pvpart', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('DESPVP', 'Despvp', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 