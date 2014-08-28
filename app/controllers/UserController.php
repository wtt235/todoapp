<?php

class UserController extends BaseController {

    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = Input::has('remember');
        if (Auth::attempt(array('email' => $email, 'password' => $password),$remember))
        {
            return Redirect::intended('todo');
        }
        return Redirect::to('/');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('userform');
	}

	/**
	 * Store a newly created user in storage.
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
