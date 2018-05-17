<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class AboutController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('pages.about',compact('users'));
    }
}
