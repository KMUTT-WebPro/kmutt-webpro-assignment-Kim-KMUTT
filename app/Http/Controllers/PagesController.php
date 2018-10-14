<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cookie;

class PagesController extends Controller {


	 public function about(){
	 	//session(['key1' => 'value1', 'key2' => 'value2']);
	 	Cookie::queue('cookie_name', 'cookie value', 1);

		$first = 'Teerapong';
		$last = 'Leelanupab';
		$skills = ['HTML5', 'CSS3', 'Laravel 5.5', 'CakePHP'];
		return view('pages.about')
			->withFirst($first)
			->withLast($last)
			->withSkills($skills);
	}

	public function contact(){
		//$data = session('key1', 'Default value');

//		$data = Cookie::get('cookie_name');
//		return $data;

      	return view('pages.contact');
	}

}
