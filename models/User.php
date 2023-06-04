<?php
/*
* userManager 
* 
* @package userManager 
*/
class userManager{	
	public $db;	
	
	/**
	* constructor sets connection
	* @param object $connection -
	* @return - void
	*/	
	public function __construct($connection)	
	{		
		$this->db = $connection;	
	}
	
	/**
	* validates the login
	*@param string $username - username
	*@param string $password - password
	*@return  boolean
	*/	
	public function verifyUser($username,$password) 	
	{		
	$username = strtolower($username);
	$password = strtolower($password);
	
		$sql = "SELECT id				
				FROM users 	
				WHERE username =:username
				AND password =:password";	

		$stmt = $this->db->prepare($sql);
		$stmt->execute(['username' => $username, 'password'=>$password]);
		$result = $stmt->fetch();

		if($result){
			return $this->setLogin($result['id']);
		}else{
			return false;
		}
	}	

	/**
	* called by verifyUser - updates logged_in field to id
	* @param int id - id
	* @return boolean
	*/
	private function setLogin($id)
	{
		$sql = "UPDATE users
						SET logged_in = 1
						WHERE id = :id";
				
		$stmt = $this->db->prepare($sql);
		$result= $stmt->execute(['id' => $id]);
		
		if($result) {
			return true;
		}else{
			$this->unsetLogin($id);
			return false;
		}
	}
	
	/**
	* updates logged_in field to 0
	* @param int - id
	* @return boolean 
	*/
	public function unsetLogin($id)
	{
		$sql = "UPDATE users
						SET logged_in = 0
						WHERE id = :id";

				
		$stmt = $this->db->prepare($sql);
		return $stmt->execute(['id' => $id]);
	}
	
	/**
	*changes the admin username and/or password
	* @param string $username - username
	* @param string $password - password
	* @return - <<number>>
	*/	
	public function updateChange($params)	
	{		
	$username = mysql_real_escape_string(strtolower($params['username']));
	$password = mysql_real_escape_string(strtolower($params['password']));
	
	if(is_null($username) && is_null($password)) return;
	
	$sql= '';
	
	if(isset($params['user']) && !isset($params['pass'])){
		$sql = "UPDATE users	
						SET username = :username
						WHERE id = 1";
    }elseif(!isset($params['user']) && isset($params['pass'])){
		$sql = "UPDATE users	
		SET password = :password
		WHERE id = 1";	
    }elseif(isset($params['user']) & isset($params['pass'])){
		$sql = "UPDATE users	
		SET username = :username,
		password = :password
		WHERE id = 1";
	}
		if($sql !=''){
			$stmt = $this->db->prepare($sql);
		$result= $stmt->execute(['username' => $username, 'password'=>$password]);
		}		
	}	
}
?>