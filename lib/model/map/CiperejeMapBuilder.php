<?php


	
class CiperejeMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CiperejeMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('cipereje');
		$tMap->setPhpName('Cipereje');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('FECINI', 'Fecini', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('FECCIE', 'Feccie', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('PEREJE', 'Pereje', 'string', CreoleTypes::VARCHAR, true, 2);

		$tMap->addColumn('FECDES', 'Fecdes', 'int', CreoleTypes::DATE, true);

		$tMap->addColumn('FECHAS', 'Fechas', 'int', CreoleTypes::DATE, true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 