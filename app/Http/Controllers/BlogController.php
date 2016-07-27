<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Tag;
use App\Comment;
use App\Category;

class BlogController extends Controller
{
    //
    public function getIndex(){
		
		$posts= Post::paginate(4);
		$tags=Tag::all();
		$cats=Category::all();
				$coms= Comment::orderBy('created_at','desc')->limit(4)->get();

		return view('blog.blogone')->withPosts($posts)->withtags($tags)->withCategories($cats)->withComments($coms);
	}

	public function getSingle($slug){

		$post=Post::where('slug','=',$slug)->first();
		$tags=Tag::all();
		$cats=Category::all();
						$coms= Comment::orderBy('created_at','desc')->limit(4)->get();
		return view('blog.blogdetails')->withPost($post)->withtags($tags)->withCategories($cats)->withComments($coms);
	}


}
