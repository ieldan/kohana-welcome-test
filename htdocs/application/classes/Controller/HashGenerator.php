<?php defined('SYSPATH') or die('No direct script access.');

class Controller_HashGenerator extends Controller {
	
	/**
		Outputs a page that provides input facilities to generate hashes
		to be used as passwords for the auth module.
	 */
	public function action_index()
	{
		$input = $this->request->query('input');

		if (is_string($input) && strlen($input) > 0)
		{
			$hash = Auth::instance()->hash($input);
		}
		else
		{
			$hash = '';
		}
		
		$view = View::factory('Page/HashGenerator')
			->set('input', $input)
			->set('hash', $hash);
		
		$this->response->body($view);
	}

}
