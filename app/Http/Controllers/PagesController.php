<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;
use App\Category;

class PagesController extends Controller{

	public function getIndex(){

		$posts=Post::orderBy('created_at','desc')->limit(5)->get();
		$tags=Tag::all();
		$cats=Category::all();
		return view('pages/welcome')->withPosts($posts)->withtags($tags)->withCategories($cats);
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

