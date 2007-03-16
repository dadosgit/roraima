<?php


	
class FadevoluMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.FadevoluMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('fadevolu');
		$tMap->setPhpName('Fadevolu');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('NRODEV', 'Nrodev', 'string', CreoleTypes::VARCHAR, true, 8);

		$tMap->addColumn('FECDEV', 'Fecdev', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('REFDES', 'Refdes', 'string', CreoleTypes::VARCHAR, true, 8);

		$tMap->addColumn('CODTIDEV', 'Codtidev', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('CODALM', 'Codalm', 'string', CreoleTypes::VARCHAR, true, 6);

		$tMap->addColumn('DESDEV', 'Desdev', 'string', CreoleTypes::VARCHAR, false, 250);

		$tMap->addColumn('STADPH', 'Stadph', 'string', CreoleTypes::VARCHAR, false, 1);

		$tMap->addColumn('MONDEV', 'Mondev', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('OBSDEV', 'Obsdev', 'string', CreoleTypes::VARCHAR, false, 250);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 