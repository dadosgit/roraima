<?php


	
class Tabla45MapBuilder {

	
	const CLASS_NAME = 'lib.model.map.Tabla45MapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('tabla45');
		$tMap->setPhpName('Tabla45');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODCTA', 'Codcta', 'string', CreoleTypes::VARCHAR, true, 32);

		$tMap->addColumn('FECINI', 'Fecini', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('FECCIE', 'Feccie', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('PEREJE', 'Pereje', 'string', CreoleTypes::VARCHAR, true, 2);

		$tMap->addColumn('TOTDEB', 'Totdeb', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('TOTCRE', 'Totcre', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('SALACT', 'Salact', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('SALPRGPER', 'Salprgper', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('SALPRGPERFOR', 'Salprgperfor', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 