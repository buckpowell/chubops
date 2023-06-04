<?php
class Admin {
    public static function fetchAllChubops() {
      $dbh = Db::getInstance();
	  $query = "SELECT * 
				FROM chubops 
				WHERE origin='D'";
				
      $stmt = $dbh->prepare($query);
      $stmt->execute();
	  return $stmt->fetchAll();
    }
	
	public static function fetchChubop($id) {
		$dbh = Db::getInstance();
		$query = "SELECT * 
				  FROM chubops
				  WHERE id = :id";
				  
       $stmt = $dbh->prepare($query);
							
	  $stmt->bindParam(':id', $id, PDO::PARAM_INT);					
      $stmt->execute();
      return $stmt->fetch();
	}
	
	public static function updateChubop($params) {
		$dbh = Db::getInstance();
		$query = "UPDATE chubops
				  SET title = :title, 
					description=:description,
					cond = :cond,
					quantity = :quantity,
					price = :price
				  WHERE id = :id";
				  
      $stmt = $dbh->prepare($query);
							
	  $stmt->bindParam(':title', $params['title'], PDO::PARAM_STR);	
	  $stmt->bindParam(':description', $params['description'], PDO::PARAM_STR);	
	  $stmt->bindParam(':cond', $params['cond'], PDO::PARAM_STR);	
	  $stmt->bindParam(':quantity', $params['quantity'], PDO::PARAM_STR);	
	  $stmt->bindParam(':price', $params['price'], PDO::PARAM_STR);	
	  $stmt->bindParam(':id', $params['id'], PDO::PARAM_INT);	
	  
      return $stmt->execute(); 
	}
	
	public static function fetchAllHitpops() {
      $dbh = Db::getInstance();
	  $query = "SELECT * 
				FROM hitpops";
				
      $stmt = $dbh->prepare($query);
      $stmt->execute();
	  return $stmt->fetchAll();
	}
	  
	  
	  public static function fetchHitpop($id) {
		$dbh = Db::getInstance();
		$query = "SELECT * 
				  FROM hitpops
				  WHERE id = :id";
				  
       $stmt = $dbh->prepare($query);
							
	  $stmt->bindParam(':id', $id, PDO::PARAM_INT);					
      $stmt->execute();
      return $stmt->fetch();
	}
	
	public static function updateHitpop($params) {
		$dbh = Db::getInstance();
		$query = "UPDATE hitpops
				  SET title = :title, 
					description=:description,
					cond = :cond,
					quantity = :quantity,
					price = :price
				  WHERE id = :id";
				  
      $stmt = $dbh->prepare($query);
							
	  $stmt->bindParam(':title', $params['title'], PDO::PARAM_STR);	
	  $stmt->bindParam(':description', $params['description'], PDO::PARAM_STR);	
	  $stmt->bindParam(':cond', $params['cond'], PDO::PARAM_STR);	
	  $stmt->bindParam(':quantity', $params['quantity'], PDO::PARAM_STR);	
	  $stmt->bindParam(':price', $params['price'], PDO::PARAM_STR);	
	  $stmt->bindParam(':id', $params['id'], PDO::PARAM_INT);	
	  
      return $stmt->execute(); 
	}
	
	public static function fetchAllBoxed() {
		$dbh = Db::getInstance();
		$query = "SELECT DISTINCT type, name
				FROM boxed
				ORDER BY type ASC";
		$stmt = $dbh->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
    }
	
	public static function fetchBoxedByType($type) {
		$dbh = Db::getInstance();
		$query = "SELECT * 
				FROM boxed
				WHERE type = :type
				ORDER BY type, typeid";
				
		$stmt = $dbh->prepare($query);				
		$stmt->bindParam(':type', $type, PDO::PARAM_STR);					
		$stmt->execute();
		return $stmt->fetchAll();
    }
	
	public function fetchBoxedById($id) {
		$dbh = Db::getInstance();
		$query = "SELECT * 
				  FROM boxed
				  WHERE id = :id";
				  
		$stmt = $dbh->prepare($query);			
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);					
		$stmt->execute();
		return $stmt->fetch();
	}
	
	public function updateBoxed($params) {
		$dbh = Db::getInstance();
		$query = "UPDATE boxed
				  SET title = :title, 
					  cond = :cond,
					  description = :description,
			          quantity = :quantity,
					  price = :price,
					  sort = :sort
				  WHERE id = :id";
				  
		$stmt = $dbh->prepare($query);
							
		$stmt->bindParam(':title', $params['title'], PDO::PARAM_STR);
		$stmt->bindParam(':cond', $params['cond'], PDO::PARAM_STR);
		$stmt->bindParam(':description', $params['description'], PDO::PARAM_STR);
		$stmt->bindParam(':quantity', $params['quantity'], PDO::PARAM_INT);	
		$stmt->bindParam(':price', $params['price'], PDO::PARAM_STR);	
		$stmt->bindParam(':sort', $params['sort'], PDO::PARAM_INT);
		$stmt->bindParam(':id', $params['id'], PDO::PARAM_INT);			
		return $stmt->execute();
	}
	
	public static function addBoxed($params) {
		switch($params['type']){
			case 'B':
				$name = 'Beatles';
			break;
			case 'E':
			$name = 'Elvis';
			break;
			case 'R':
			$name = 'Stones';
			break;
			case 'S':
			$name = 'Supersar';
			break;
			case 'M':
			$name = 'Collectables';
			break;
			case 'C':
			$name = 'Chubop';
			break;
		}
		
		$dbh = Db::getInstance();
		$query = "INSERT INTO boxed
				  (id, type, typeid, name, title, cond, description, image, quantity, price, sort)
				  VALUES
				  (NULL, :type, :typeid, :name, :title, :cond, :description, :image, :quantity, :price, :sort)";
				  
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('type', $params['type'], PDO::PARAM_STR);
		$stmt->bindParam('typeid', $params['typeid'], PDO::PARAM_STR);
		$stmt->bindParam('name', $name, PDO::PARAM_STR);
		$stmt->bindParam('title', $params['title'], PDO::PARAM_STR);
		$stmt->bindParam('cond', $params['cond'], PDO::PARAM_STR);
		$stmt->bindParam('description', $params['description'], PDO::PARAM_STR);
		$stmt->bindParam('image', $params['photo'], PDO::PARAM_STR);
		$stmt->bindParam('quantity', $params['quantity'], PDO::PARAM_INT);
		$stmt->bindParam('price', $params['price'], PDO::PARAM_STR);
		$stmt->bindParam('sort', $params['sort'], PDO::PARAM_INT);
		
		return $stmt->execute();
	}
	
	public static function fetchPage($page) {
		$dbh = Db::getInstance();
		$query = "SELECT content
				  FROM pageedit
				  WHERE page = :page";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('page', $page, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		
      }
	  
	  public static function editPage($content, $page) {
		$dbh = Db::getInstance();
		$query = "UPDATE pageedit
				  SET content = :content
				  WHERE page = :page";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('content', $content);
		$stmt->bindParam('page', $page, PDO::PARAM_STR);
		return $stmt->execute();
      }
	  
	  public static function listTemplates() {
		  $dbh = Db::getInstance();
		  $query = "SELECT *FROM templates";
		  $stmt = $dbh->prepare($query);
		  $stmt->execute();
		  return $stmt->fetchAll();
	  }
	  
	  public static function listPics() {
		  $dbh = Db::getInstance();
		  $query = "SELECT *FROM templates";
		  $stmt = $dbh->prepare($query);
		  $stmt->execute();
		  return $stmt->fetchAll();
	  }
	  
	public static function fetchList() {
		  $dbh = Db::getInstance();
		  $query = "SELECT * 
                    FROM ebay
                    ORDER BY sort";
		  $stmt = $dbh->prepare($query);
		  $stmt->execute();
		  return $stmt->fetchAll();
	}
	
	public static function fetchEbay($id) {
		$dbh = Db::getInstance();
		$query = "SELECT * 
		          FROM ebay
				  WHERE id = :id";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('id', $id,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}
	
	public static function updateEbay($params) {
		$dbh = Db::getInstance();
		$query = "UPDATE ebay
				  SET title = :title,
				  description = :description,
				  sort = :sort
				  WHERE id = :id";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('title', $params['title'],PDO::PARAM_STR);
		$stmt->bindParam('description', $params['description'],PDO::PARAM_STR);
		$stmt->bindParam('sort', $params['sort'],PDO::PARAM_STR);
		$stmt->bindParam('id', $params['id'],PDO::PARAM_INT);
		return $stmt->execute();
	}
	
	public static function addEbay($params) {
		$dbh = Db::getInstance();
		$query = "INSERT INTO ebay (id, type, typeid, title, description, sort)
		VALUES (NULL, :type, :typeid, :title, :description, :sort)";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('type', $params['type'],PDO::PARAM_STR);
		$stmt->bindParam('typeid', $params['typeid'],PDO::PARAM_STR);
		$stmt->bindParam('title', $params['title'], PDO::PARAM_STR);
		$stmt->bindParam('description', $params['description'], PDO::PARAM_STR);
		$stmt->bindParam('sort', $params['sort'],PDO::PARAM_STR);
		return $stmt->execute();
		
	}
	
	public static function updatePassword($params) {
		$dbh = Db::getInstance();
		$query = "UPDATE users
				SET password = :password
				WHERE username = :username";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam('password', $params['new_password'],PDO::PARAM_STR);
		$stmt->bindParam('username', $params['username'],PDO::PARAM_STR);
		return $stmt->execute();
	}
}
?>