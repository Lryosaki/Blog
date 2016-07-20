<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Tag;
use App\Category;

class BlogController extends Controller
{
    //
    public function getIndex(){
		
		$posts= Post::paginate(4);
		$tags=Tag::all();
		$cats=Category::all();
		return view('blog.blogone')->withPosts($posts)->withtags($tags)->withCategories($cats);
	}

	public function getSingle($slug){

		$post=Post::where('slug','=',$slug)->first();
		$tags=Tag::all();
		$cats=Category::all();
		return view('blog.blogdetails')->withPost($post)->withtags($tags)->withCategories($cats);
		
	}


}
