<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cookie;

class PageController extends Controller {


	 public function about(){
	 	session(['key1' => 'value1',
            'key2' => 'kim value2',
            'key3' => 'Arale']);

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
		$sessionData1 = session('key1', 'Default value 1');
        $sessionData2 = session()->pull('key2', 'Empty');
//        return view('pages.contact',
//            ['sessionData1' => $sessionData1,
//                'sessionData2' => $sessionData2]);


		$cookieData = Cookie::get('cookie_name');
////        return view('pages.contact',
////            ['cookieData' => $cookieData]);

        return view('pages.contact',
            ['sessionData1' => $sessionData1,
                'sessionData2' => $sessionData2,
                'cookieData' => $cookieData]);


        //return view('pages.contact');
	}

}
