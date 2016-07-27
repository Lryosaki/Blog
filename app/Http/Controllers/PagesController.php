<?php

namespace App\Http\Controllers;
use Mail;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;
use Session;
use GuzzleHttp\Client;
class PagesController extends Controller{

	public function getIndex(){

		$posts=Post::orderBy('created_at','desc')->limit(4)->get();
		$tags=Tag::all();
		$cats=Category::all();
		$coms= Comment::orderBy('created_at','desc')->limit(4)->get();
		return view('pages/welcome2')->withPosts($posts)->withtags($tags)->withCategories($cats)->withComments($coms);
	}

	public function getAbout(){
		
		$first = 'Alaa';
		$last = 'Souiba';

		$fullname = $first." ".$last;
		$email ='souibalaa@gmail.com';
		$data = [];
		$data['email'] =$email;
		$data['fullname']=$fullname;
		return view('pages/aboutus2')->withData($data);

	}
	public function getContact(){

		return view('pages/contact2');
	}

	public function postContact(Request $request){
		$this->validate($request,[
			'email' =>'required|email',
			'subject'=>'required|min:4',
			'message'=>'required|min:10'
			]);

		$token=$request->input('g-recaptcha-response');

		if($token){

			$data=array(
				'email' => $request->email,
				'subject'=> $request->subject,
				'BodyMessage' => $request->message
				);
			Mail::send('emails.contact',$data,function($message) use($data){
				$message->from($data['email']);
				$message->to('souibalaa@gmail.com');
				$message->subject($data['subject']);
			});

			Session::flash('success','The email was successfully sent!');

 		 	return redirect('/');
 		 	
		}else{

			Session::flash('error','The email was not sent!');

 			return redirect('/');
		}
	
	}

}