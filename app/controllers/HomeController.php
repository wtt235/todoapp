<?php

class HomeController extends BaseController {

	public function showHome()
	{
        if (Auth::check())
        {
            return Redirect::intended('todo');
        }
		return View::make('home');
	}

}
