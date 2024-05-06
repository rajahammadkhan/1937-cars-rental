@extends('layouts.master')

@section('title', 'Blogs')

@section('top-styles')

@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>blogs</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- blog-area -->
<section class="blog-area pt-120 pb-175">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-6">
                    <div class="blog-list-post">
                        <div class="blog-list-post-thumb">
                            <a href="{{route('blog_detail',$blog->slug)}}"><img src="{{config('1937rentals.file_path').$blog->image}}" alt=""></a>
                        </div>
                        <div class="blog-list-post-content">
                            <h2><a href="{{route('blog_detail',$blog->slug)}}">{{$blog->name}}</a></h2>
                            <div class="blog-meta">
                                <ul>
                                    <li>{{date('F d, Y',strtotime($blog->date))}}</li>
                                </ul>
                            </div>
                            <p>{{$blog->short_description}}</p>
                        </div>
                        <div class="blog-list-post-bottom">
                            <ul>
                                <li><a href="{{route('blog_detail',$blog->slug)}}">Read More<i class="fas fa-angle-double-right"></i></a></li>
                                <li>
                                    <span>By :</span>
                                    <div class="blog-post-share">
                                        <a href="">{{$blog->by}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection