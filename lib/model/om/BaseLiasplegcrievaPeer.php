<?php


abstract class BaseLiasplegcrievaPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'liasplegcrieva';

	
	const CLASS_DEFAULT = 'lib.model.Liasplegcrieva';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const LIREGLIC_ID = 'liasplegcrieva.LIREGLIC_ID';

	
	const CODLIC = 'liasplegcrieva.CODLIC';

	
	const CODPRO = 'liasplegcrieva.CODPRO';

	
	const LIRECAUD_ID = 'liasplegcrieva.LIRECAUD_ID';

	
	const PUNTAJE = 'liasplegcrieva.PUNTAJE';

	
	const ID = 'liasplegcrieva.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('LireglicId', 'Codlic', 'Codpro', 'LirecaudId', 'Puntaje', 'Id', ),
		BasePeer::TYPE_COLNAME => array (LiasplegcrievaPeer::LIREGLIC_ID, LiasplegcrievaPeer::CODLIC, LiasplegcrievaPeer::CODPRO, LiasplegcrievaPeer::LIRECAUD_ID, LiasplegcrievaPeer::PUNTAJE, LiasplegcrievaPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('lireglic_id', 'codlic', 'codpro', 'lirecaud_id', 'puntaje', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('LireglicId' => 0, 'Codlic' => 1, 'Codpro' => 2, 'LirecaudId' => 3, 'Puntaje' => 4, 'Id' => 5, ),
		BasePeer::TYPE_COLNAME => array (LiasplegcrievaPeer::LIREGLIC_ID => 0, LiasplegcrievaPeer::CODLIC => 1, LiasplegcrievaPeer::CODPRO => 2, LiasplegcrievaPeer::LIRECAUD_ID => 3, LiasplegcrievaPeer::PUNTAJE => 4, LiasplegcrievaPeer::ID => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('lireglic_id' => 0, 'codlic' => 1, 'codpro' => 2, 'lirecaud_id' => 3, 'puntaje' => 4, 'id' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/LiasplegcrievaMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.LiasplegcrievaMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LiasplegcrievaPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(LiasplegcrievaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LiasplegcrievaPeer::LIREGLIC_ID);

		$criteria->addSelectColumn(LiasplegcrievaPeer::CODLIC);

		$criteria->addSelectColumn(LiasplegcrievaPeer::CODPRO);

		$criteria->addSelectColumn(LiasplegcrievaPeer::LIRECAUD_ID);

		$criteria->addSelectColumn(LiasplegcrievaPeer::PUNTAJE);

		$criteria->addSelectColumn(LiasplegcrievaPeer::ID);

	}

	const COUNT = 'COUNT(liasplegcrieva.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT liasplegcrieva.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LiasplegcrievaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = LiasplegcrievaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LiasplegcrievaPeer::populateObjects(LiasplegcrievaPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LiasplegcrievaPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LiasplegcrievaPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinLireglic(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(LiasplegcrievaPeer::LIREGLIC_ID, LireglicPeer::ID);

		$rs = LiasplegcrievaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinLirecaud(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(LiasplegcrievaPeer::LIRECAUD_ID, LirecaudPeer::ID);

		$rs = LiasplegcrievaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinLireglic(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		LiasplegcrievaPeer::addSelectColumns($c);
		$startcol = (LiasplegcrievaPeer::NUM_COLUMNS - LiasplegcrievaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		LireglicPeer::addSelectColumns($c);

		$c->addJoin(LiasplegcrievaPeer::LIREGLIC_ID, LireglicPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = LiasplegcrievaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LireglicPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getLireglic(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addLiasplegcrieva($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initLiasplegcrievas();
				$obj2->addLiasplegcrieva($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinLirecaud(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		LiasplegcrievaPeer::addSelectColumns($c);
		$startcol = (LiasplegcrievaPeer::NUM_COLUMNS - LiasplegcrievaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		LirecaudPeer::addSelectColumns($c);

		$c->addJoin(LiasplegcrievaPeer::LIRECAUD_ID, LirecaudPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = LiasplegcrievaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LirecaudPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getLirecaud(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addLiasplegcrieva($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initLiasplegcrievas();
				$obj2->addLiasplegcrieva($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(LiasplegcrievaPeer::LIREGLIC_ID, LireglicPeer::ID);

		$criteria->addJoin(LiasplegcrievaPeer::LIRECAUD_ID, LirecaudPeer::ID);

		$rs = LiasplegcrievaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		LiasplegcrievaPeer::addSelectColumns($c);
		$startcol2 = (LiasplegcrievaPeer::NUM_COLUMNS - LiasplegcrievaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LireglicPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LireglicPeer::NUM_COLUMNS;

		LirecaudPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + LirecaudPeer::NUM_COLUMNS;

		$c->addJoin(LiasplegcrievaPeer::LIREGLIC_ID, LireglicPeer::ID);

		$c->addJoin(LiasplegcrievaPeer::LIRECAUD_ID, LirecaudPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = LiasplegcrievaPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = LireglicPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLireglic(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addLiasplegcrieva($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initLiasplegcrievas();
				$obj2->addLiasplegcrieva($obj1);
			}


					
			$omClass = LirecaudPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getLirecaud(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addLiasplegcrieva($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initLiasplegcrievas();
				$obj3->addLiasplegcrieva($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptLireglic(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(LiasplegcrievaPeer::LIRECAUD_ID, LirecaudPeer::ID);

		$rs = LiasplegcrievaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptLirecaud(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LiasplegcrievaPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(LiasplegcrievaPeer::LIREGLIC_ID, LireglicPeer::ID);

		$rs = LiasplegcrievaPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptLireglic(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		LiasplegcrievaPeer::addSelectColumns($c);
		$startcol2 = (LiasplegcrievaPeer::NUM_COLUMNS - LiasplegcrievaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LirecaudPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LirecaudPeer::NUM_COLUMNS;

		$c->addJoin(LiasplegcrievaPeer::LIRECAUD_ID, LirecaudPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = LiasplegcrievaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LirecaudPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLirecaud(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addLiasplegcrieva($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initLiasplegcrievas();
				$obj2->addLiasplegcrieva($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptLirecaud(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		LiasplegcrievaPeer::addSelectColumns($c);
		$startcol2 = (LiasplegcrievaPeer::NUM_COLUMNS - LiasplegcrievaPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		LireglicPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + LireglicPeer::NUM_COLUMNS;

		$c->addJoin(LiasplegcrievaPeer::LIREGLIC_ID, LireglicPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = LiasplegcrievaPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = LireglicPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getLireglic(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addLiasplegcrieva($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initLiasplegcrievas();
				$obj2->addLiasplegcrieva($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return LiasplegcrievaPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LiasplegcrievaPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(LiasplegcrievaPeer::ID);
			$selectCriteria->add(LiasplegcrievaPeer::ID, $criteria->remove(LiasplegcrievaPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(LiasplegcrievaPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(LiasplegcrievaPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Liasplegcrieva) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LiasplegcrievaPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Liasplegcrieva $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LiasplegcrievaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LiasplegcrievaPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(LiasplegcrievaPeer::DATABASE_NAME, LiasplegcrievaPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LiasplegcrievaPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(LiasplegcrievaPeer::DATABASE_NAME);

		$criteria->add(LiasplegcrievaPeer::ID, $pk);


		$v = LiasplegcrievaPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(LiasplegcrievaPeer::ID, $pks, Criteria::IN);
			$objs = LiasplegcrievaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLiasplegcrievaPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/LiasplegcrievaMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.LiasplegcrievaMapBuilder');
}
