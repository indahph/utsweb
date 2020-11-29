<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{
	function showHome(){
		return view('home');
	}

	function showBlog(){
		return view('blog');
	}
	function showDashboard(){
		return view('dashboard');
	}
	function showUser(){
		return view('user');
	}
	function showLogin(){
		return view('login');
	}


}