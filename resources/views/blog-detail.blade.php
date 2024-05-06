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
<!-- blog-area -->
<section class="blog-area pt-120 pb-175">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="blog-list-post blog-details-wrap">
                        <div class="blog-list-post-content">
                                    <a href="#">
                                        <img src="{{config('1937rentals.file_path').$blog->image}}" alt="">
                                    </a>
                                </div>
                        <div class="blog-list-post-content">
                            <h2>{{$blog->name}}</h2>
                            <div class="blog-meta">
                                <ul>
                                    <li> {{date('F d, Y',strtotime($blog->date))}}</li>
                                </ul>
                            </div>
                            {!! $blog->description !!}
                        </div>
                    </div>
                </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
            <!-- blog-area-end -->
<!-- blog-area-end -->

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection