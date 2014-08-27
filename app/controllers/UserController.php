<?php

class UserController extends BaseController {

    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            return Redirect::intended('todo');
        }
        return Redirect::to('user/login');
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('userform');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return Redirect::to('/');
	}
}
