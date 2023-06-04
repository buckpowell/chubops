<?php /*** chubopsManager* @package chubopsManager*/class Chubops {	 /**    *fetchs records for chubops based on series    * @param string $series    * @return array    */    public static function fetchChubopsRandom() {		$dbh = Db::getInstance();        $query = "SELECT *                FROM chubops 				ORDER BY RAND()				LIMIT 16";				        $stmt = $dbh->prepare($query);		$stmt->execute();		return $stmt->fetchAll();    }	public static function fetchBoxedRandom() {		$dbh = Db::getInstance();        $query = "SELECT *                FROM boxed				ORDER BY RAND()				LIMIT 18";        $stmt = $dbh->prepare($query);		$stmt->execute();		return $stmt->fetchAll();    }   /*fetchs records for chubops or hitpops based on series	* @param string $series    * @return array    */    public static function fetchChubopImages($series) {		$dbh = Db::getInstance();				$query = "SELECT *                FROM chubops				WHERE series =".$series;				        $stmt = $dbh->prepare($query);		$stmt->execute();		return $stmt->fetchAll();    }		/*fetchs records for chubops or hitpops based on series	* @param string $series    * @return array    */    public static function fetchHitpopImages($series) {		$dbh = Db::getInstance();				$query = "SELECT *                FROM hitpops				WHERE series = '".$series."'";				        $stmt = $dbh->prepare($query);		$stmt->execute();		return $stmt->fetchAll();    }	 /**    * displays a page based on passed page    * @param string $page    * @return row    */   public static function fetchPages($page) {	   $dbh = Db::getInstance();        $query = "SELECT *				FROM pageedit				WHERE page like '" . $page."%'";        $stmt = $dbh->prepare($query);		$stmt->execute();		return $stmt->fetchAll();    }		    /**    * fetches all chubops    * @param string $list    * @return array    */    public static function fetchList($list) {		$dbh = Db::getInstance();        switch($list){            case 'chubops':            case 'shopping':                $query = "SELECT * 						  FROM chubops"; 						  				$stmt = $dbh->prepare($query);				$stmt->execute();				return $stmt->fetchAll();            break;            case 'boxed':                $query = "SELECT *                           FROM boxed                          ORDER BY type, sort";				$stmt = $dbh->prepare($query);				$stmt->execute();				return $stmt->fetchAll();            break;			case 'hitpops':                $query = "SELECT *                           FROM hitpops                          ORDER BY series, id";				$stmt = $dbh->prepare($query);				$stmt->execute();				return $stmt->fetchAll();            break;        }		    }	/**    * fetches hitpops based on series    * @param string $series    * @return array    */	public static function fetchHitpops($series) {		$dbh = Db::getInstance();		$query = "SELECT * 				FROM hitpops 				WHERE series = :series				ORDER BY sort";		$stmt = $dbh->prepare($query);		$stmt->bindParam(':series', $series, PDO::PARAM_STR);			$stmt->execute();		return $stmt->fetchAll();	}    /**    * fetches boxed type based on type    * @param string $type    * @return array    */    public static function fetchBoxedType($type) {		$dbh = Db::getInstance();		$type = strtoupper($type);		$query = "SELECT * 				FROM boxed 				WHERE type = :type";		$stmt = $dbh->prepare($query);		$stmt->bindParam(':type', $type, PDO::PARAM_STR);			$stmt->execute();		return $stmt->fetchAll();    }   }?>