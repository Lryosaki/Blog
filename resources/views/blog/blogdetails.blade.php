@extends('main3')

@section('title',"|  $post->title ")

@section('content') 


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog Details</h1>
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{url('images/post.jpg')}}" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                    <span class="uppercase"><a href="#"> <small>{{ date('M j',strtotime($post->created_at))}}</small></a></span>                                     </div>
                                </div>
                                <div class="post-content overflow">

                                    <h2 class="post-title bold"><a href="#">{{ $post->title }}</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>{{ $post->body }}  </p>
                                    <div class="tags">
                                        @foreach($post->tags as $tag)
                                            <spam class="label label-default">{{ $tag->name }}</spam>
                                        
                                        @endforeach
                                        </div>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>

                                    <div class="blog-share">
                                        <span class='st_facebook_hcount'></span>
                                        <span class='st_twitter_hcount'></span>
                                        <span class='st_linkedin_hcount'></span>
                                        <span class='st_pinterest_hcount'></span>
                                        <span class='st_email_hcount'></span>
                                    </div>
                                    <div class="author-profile padding">
                                        <div class="row">
                                            <div class="col-sm-2 gallery"">
                                                <img src="{{url('images/user.jpg')}}" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3>Rodrix Hasel</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                                <span>Website:<a href="www.jooomshaper.com"> www.jooomshaper.com</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="response-area">
                                    <h2 class="bold">Comments</h2>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="post-comment">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{url('images/user.jpg')}}" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="parrent">
                                                <ul class="media-list">
                                                    <li class="post-comment reply">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" src="{{url('images/user.jpg')}}" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="post-comment">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="{{url('images/user.jpg')}}" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>                   
                                </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>


                 
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">

                    <!--commentaires -->
                        <div class="sidebar-item  recent">
                            <h3>Comments</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="{{url('images/portfolio/project1.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="{{url('images/portfolio/project2.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="{{url('mages/portfolio/project3.jpg')}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                        </div>
                    <!--commentaires -->

                    <!--catégories -->
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                             <ul class="nav navbar-stacked">
                              @foreach($categories as $cat)

                                 <li class="{{ ($post->category_id == $cat->id) ? "active":"" }}"><a href="#">{{$cat->name}}<span class="pull-right">({{ $cat->posts()->count() }})</span></a></li>

                              @endforeach
                            </ul>
                        </div>
                    <!--catégories -->

                    <!--tags -->
                        <div class="sidebar-item tag-cloud">
                            <h3>Tag Cloud</h3>
                            <ul class="nav nav-pills">
                                 @foreach($tags as $tag)
                                <li><a href="#">{{$tag->name}}</a></li>
                                 @endforeach
                            </ul>
                        </div>
                    <!--tags --> 

                    <!--photos -->
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="{{url('images/portfolio/popular1.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/portfolio/popular2.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/portfolio/popular3.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/portfolio/popular4.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/portfolio/popular5.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/portfolio/popular1.jpg')}}  " alt=""></a></li>
                            </ul>
                        </div>
                    <!--photos -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@endsection