<?php defined('SYSPATH') or die('No direct script access.');

/**
	Controllers inheriting from this class will require user
	authentication to be accessed.
 */
abstract class Controller_Restricted extends Controller {
	
	public function before()
	{
		if ( ! Auth::instance()->logged_in())
		{
			$this->redirect('/authenticate', 302);
		}
	}
	
}
