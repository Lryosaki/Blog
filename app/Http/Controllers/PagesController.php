<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;

class PagesController extends Controller{

	public function getIndex(){

		$posts=Post::orderBy('created_at','desc')->limit(4)->get();
		$tags=Tag::all();
		return view('pages/welcome')->withPosts($posts)->withtags($tags);
	}

	public function getAbout(){
		
		$first = 'Alaa';
		$last = 'Souiba';

		$fullname = $first." ".$last;
		$email ='souibalaa@gmail.com';
		$data = [];
		$data['email'] =$email;
		$data['fullname']=$fullname;
		return view('pages/about')->withData($data);

	}
	public function getContact(){

		return view('pages/contact');
	}

	
}

