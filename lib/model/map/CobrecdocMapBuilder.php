<?php


	
class CobrecdocMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CobrecdocMapBuilder';	

    
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
		
		$tMap = $this->dbMap->addTable('cobrecdoc');
		$tMap->setPhpName('Cobrecdoc');

		$tMap->setUseIdGenerator(false);

		$tMap->addColumn('REFDOC', 'Refdoc', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CODCLI', 'Codcli', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CODREC', 'Codrec', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('FECREC', 'Fecrec', 'int', CreoleTypes::DATE, false);

		$tMap->addColumn('MONREC', 'Monrec', 'double', CreoleTypes::NUMERIC, false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);
				
    } 
} 