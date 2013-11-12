<?php defined('SYSPATH') or die('No direct script access.');

class Model_UserInfo extends Model_Database {
	
	const FIRST_NAME = 'firstName';
	const LAST_NAME = 'lastName';
	
	/**
		Returns a certain piece of information about a user.
		
		@param string $user Username.
		@param string $info A constant defined in this class that determines
		what information will be queried.
		@return string Available info on the user.
	 */
	public function get($user, $info)
	{
		$sql = 'SELECT * FROM user_info WHERE user = :user';
		
		$query = DB::query(Database::SELECT, $sql)
			->param(':user', $user);
		
		$result = $query->execute($this->_db);
		
		return $result->get($info);
	}

}
