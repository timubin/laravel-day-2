<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {

       return view('contact');
    }


 

    public function store ()
    {
       $validated = $request->validate([
          'name' => 'required | max:55',
          'email' => 'required|unique.usera|max:80',
          'passwoed' => 'required|min:6|max:80',
       ]);
      
      // return view('contactform');
       \Log::channel('contactstore')->info('The contact form submited by'.rand(1,20));
       return redirect()->back();
    }
}
