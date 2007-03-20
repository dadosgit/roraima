<?php


	
class OcofeserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.OcofeserMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('ocofeser');
		$tMap->setPhpName('Ocofeser');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODCON', 'Codcon', 'string', CreoleTypes::VARCHAR, true, 32);

		$tMap->addColumn('CODTIPPRO', 'Codtippro', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('NIVPRO', 'Nivpro', 'string', CreoleTypes::VARCHAR, false, 6);

		$tMap->addColumn('EXPPRO', 'Exppro', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('NUMPER', 'Numper', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('CANHOR', 'Canhor', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('CANVAL', 'Canval', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 