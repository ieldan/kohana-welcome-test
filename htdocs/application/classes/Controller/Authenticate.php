<?php defined('SYSPATH') or die('No direct script access.');

/**
	Takes care of the authentication process.
 */
class Controller_Authenticate extends Controller {
	
	/**
		Default action will act as if it was a login action.
	 */
	public function action_index() 
	{
		$this->action_login();
	}
	
	/**
		Takes care of the authentication process.
	 */
	public function action_login()
	{
		$auth = Auth::instance();
		
		if ($auth->logged_in())
		{
			// User already logged in. Nothing to do here.
			$this->redirect('/', 302);
		}
		
		$username = $this->request->post('username');
		$password = $this->request->post('password');
		
		$logged_in = $auth->login($username, $password);

		if ($logged_in)
		{
			$this->redirect('/', 302);
		}
		else
		{
			$view = View::factory('page/authenticate')
				->set('username', $username)
				->set('failed', strlen($username) > 0);
			
			$this->response->body($view);
		}
	}
	
	/**
		If the user is logged in, log him out.
	 */
	public function action_logout()
	{
		$auth = Auth::instance();
		
		if ($auth->logged_in())
		{
			$auth->logout();
		}
		
		$this->redirect('/', 302);
	}
	
}
