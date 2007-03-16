<?php


	
class NpcargosMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NpcargosMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('npcargos');
		$tMap->setPhpName('Npcargos');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODCAR', 'Codcar', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('NOMCAR', 'Nomcar', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('SUECAR', 'Suecar', 'double', CreoleTypes::NUMERIC, true);

		$tMap->addColumn('STACAR', 'Stacar', 'string', CreoleTypes::VARCHAR, true, 1);

		$tMap->addColumn('CODOCP', 'Codocp', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('PUNMIN', 'Punmin', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('GRAOCP', 'Graocp', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('COMCAR', 'Comcar', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('PASOCP', 'Pasocp', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('CODTIP', 'Codtip', 'string', CreoleTypes::VARCHAR, false, 4);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 