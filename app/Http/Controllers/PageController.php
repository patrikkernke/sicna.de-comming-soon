<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Show coming soon page to user
	 * @return Response
	 */
	public function coming()
	{
		return view('pages.coming');
	}

	/**
	 * Show impressum page to visitor
	 * @return Response
	 */
	public function impressum()
	{
		return view('pages.coming-impressum');
	}
	

}
