<?php



class IngruprubMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.IngruprubMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('ingruprub');
		$tMap->setPhpName('Ingruprub');

		$tMap->setUseIdGenerator(true);

		$tMap->setPrimaryKeyMethodInfo('ingruprub_SEQ');

		$tMap->addColumn('CODGRUPRUB', 'Codgruprub', 'string', CreoleTypes::VARCHAR, true, 4);

		$tMap->addColumn('DESGRUPRUB', 'Desgruprub', 'string', CreoleTypes::VARCHAR, true, 200);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 