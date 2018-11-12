<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    const title = 'Welcome to laravel';

    public function index(){
        //$title = 'Welcome to laravvel';
        //return view('pages/index',compact('title'));
        return view('pages/index')->with('title',self::title);
    }

    public function about(){
        return view('pages/about')->with('title',self::title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => array('web design','business solutons','AI solutions')
        );
        return view('pages/services')->with($data);
    }
}
