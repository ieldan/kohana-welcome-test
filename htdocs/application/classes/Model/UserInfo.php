<?php defined('SYSPATH') or die('No direct script access.');

class Model_UserInfo extends Model_Database {
	
	/**
		Returns the first name of a given user.
		
		@param string $user Username.
		@return string First name of the user.
	 */
	public function get_first_name($user)
	{
		$sql = 'SELECT firstName FROM user_info WHERE user = :user';
		
		$query = DB::query(Database::SELECT, $sql)
			->param(':user', $user);
			
		$result = $query->execute($this->_db);
		
		return $result->get('firstName');
	}
	
	/**
		Returns the last name of a given user.
		
		@param string $user Username.
		@return string Last name of the user.
	 */
	public function get_last_name($user)
	{
		$sql = 'SELECT lastName FROM user_info WHERE user = :user';
		
		$query = DB::query(Database::SELECT, $sql)
			->param(':user', $user);
			
		$result = $query->execute($this->_db);
		
		return $result->get('lastName');
	}

}
