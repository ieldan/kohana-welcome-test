<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Restricted {

	/**
		Welcomes an authenticated user to the website.
	 */
	public function action_index()
	{
		$username = Auth::instance()->get_user();
		
		$first_name = Model::factory('UserInfo')->get($username, Model_UserInfo::FIRST_NAME);
		$last_name = Model::factory('UserInfo')->get($username, Model_UserInfo::LAST_NAME);
		
		$view = View::factory('page/welcome')
			->set('name', $first_name.' '.$last_name);
		
		$this->response->body($view);
	}
	
}
