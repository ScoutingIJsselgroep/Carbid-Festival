<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function home() {
		return view('page.home');
	}
	
	
	public function geschiedenis() {
		return view('page.geschiedenis');
	}
	public function programma() {
		return view('page.programma');
	}
	public function tien() {
		return view('page.tien');
	}
	public function sponsoren() {
		return view('page.sponsoren');
	}
	public function merchandise() {
		return view('page.merchandise');
	}
	public function media() {
		return view('page.media');
	}
	public function info() {
		return view('page.info');
	}

}
