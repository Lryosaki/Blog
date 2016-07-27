@extends('main3')

@section('title','| Blog')

@section('content') 


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">    
                    @foreach($posts as $post)
                         <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="{{ url('blog/'.$post->slug)}}"><img src="images/post.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                         <span class="uppercase"><a href="#"> <small>{{ date('M j',strtotime($post->created_at)) }}</small></a></span> 
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">{{ $post->title }}</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by {{$post->posted_by}}x</a></h3>
                                       
                                     <p> {{ substr($post->body,0,150) }} {{ strlen($post->body) > 150 ? "...": ""}}</p>

                                    <a href="{{ url('blog/'.$post->slug)}}" class="hvr-underline-from-left" >Read More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>{{ $post->comments()->count()}} comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                            {!! $posts->links()!!}   
                        </ul>
                    </div>

                 </div>


                   <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">

                    <!--commentaires -->
                        <div class="sidebar-item  recent">
                            <h3>Comments</h3>
                            
                           
                               @foreach($comments as $com)
                            <div class="media">
                                <div class="pull-left">
                                    <a href="/blog"><img src="{{"https://www.gravatar.com/avatar/" .md5(strtolower(trim($com->email))) ."?s=50&d=retro"}}" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="/blog">{{$com->comment}}</p>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    <!--commentaires -->

                    <!--catégories -->
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                             <ul class="nav navbar-stacked">
                              @foreach($categories as $cat)

                                 <li><a href="#">{{$cat->name}}<span class="pull-right">({{ $cat->posts()->count() }})</span></a></li>

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
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
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