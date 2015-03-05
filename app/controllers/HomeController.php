<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function login()
    {
        $rules = array(
            'email'         => 'required|email|min:4|max:120',
            'password'      => 'required|alpha_num|min:7|max:12',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes()){
            if(Auth::attempt([
                'email' => e(Input::get('email')),
                'password' => e(Input::get('password'))
            ])){
                return Redirect::to('/');
            } else {
                Session::flash('msj', 'Combinacion email/password invalida...');
                return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            }
        } else {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }
    }
}
