<?php


	
class Npsalint05022007MapBuilder {

	
	const CLASS_NAME = 'lib.model.map.Npsalint05022007MapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('npsalint_05022007');
		$tMap->setPhpName('Npsalint05022007');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('CODCON', 'Codcon', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('CODEMP', 'Codemp', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('CODASI', 'Codasi', 'string', CreoleTypes::VARCHAR, false, 3);

		$tMap->addColumn('MONASI', 'Monasi', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addColumn('FECINICON', 'Fecinicon', 'int', CreoleTypes::DATE, false);

		$tMap->addColumn('FECFINCON', 'Fecfincon', 'int', CreoleTypes::DATE, false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 