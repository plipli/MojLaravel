<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class AuthController extends Controller {

	public function redirectToGoogle()
	{
		return Socialite::driver('google')->redirect();
	}
	
	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
	public function handleGoogleCallback()
	{
		$user = Socialite::driver('google')->user();
	
		// dd($user);
		return view('google',compact('user'));
	}
	
	public function redirectToFlickr()
	{
		//return Socialite::driver('flickr')->redirect();
		return Socialite::with('flickr')->redirect();
	}
	
	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
	public function handleFlickrCallback()
	{
		$user = Socialite::driver('flickr')->user();
	
		dd($user);
		//return view('flickr',compact('user'));
	}
	
	
}
