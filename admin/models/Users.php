<?php
class Users {
    public static function find($username) {
      $dbh = Db::getInstance();
      $stmt = $dbh->prepare("SELECT * 
                            FROM users 
                            WHERE username='$username'");
							
      $stmt->execute(array('username' => $username));
   
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data = $row;
    
        return $data;
      }
    }

    public static function update($username, $password) {
        $db = Db::getInstance();

        $stmt = $db->prepare("SET SQL_SAFE_UPDATES=0");
        $stmt->execute();
         
        $stmt = $db->prepare("UPDATE users SET password = 'password' WHERE username='username'");
        $stmt->execute(array('password' => $password));
    }
  }
?>