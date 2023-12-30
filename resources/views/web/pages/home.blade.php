@extends('web.layout.index')

@section('content')
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">

                @foreach ($blogData as $blog)
                    <div class="item">
                        <img src="{{ asset($blog->img) }}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>{{ $blog->category->name }}</span>
                                </div>
                                <a href="post-details.html">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <ul class="post-info">
                                    <li><a href="#">{{ $blog->user->name }}</a></li>
                                    <li><a href="#">{{ date('M d, Y', strtotime($blog->created_at)) }} </a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <span>Stand Blog HTML5 Template</span>
                                <h4>Creative HTML Template For Bloggers!</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-button">
                                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog"
                                        target="_parent">Download Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach ($blogData as $blog)
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="{{ asset($blog->img) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <span>{{ $blog->category->name }}</span>
                                            <a href="post-details.html">
                                                <h4>{{ $blog->title }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">{{ $blog->user->name }}</a></li>
                                                <li><a href="#">{{ date('M d, Y', strtotime($blog->created_at)) }}</a></li>
                                                <li><a href="#">12 Comments</a></li>
                                            </ul>
                                            <p>{{ substr($blog->description,0,300) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="{{route('blogPage')}}">View All Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($recentBlogs as $recent)
                                                <li><a href="{{ $recent->id }}">
                                                        <h5>{{ $recent->title }}</h5>
                                                        <span>{{ date('M d, Y', strtotime($recent->created_at)) }}</span>
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @foreach ($cateData as $cate)
                                                <li><b>- {{ $cate->name }}</b></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
