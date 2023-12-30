@extends('web.layout.index')

@section('content')
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">

                @foreach ($blogData as $blog)
                    <div class="item">
                        <img src="{{ asset('web/assets/images/banner-item-01.jpg') }}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>{{ $blog->category->name }}</span>
                                </div>
                                <a href="post-details.html">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <ul class="post-info">
                                    <li><a href="#">Admin</a></li>
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
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{ asset('web/assets/images/blog-post-01.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Lifestyle</span>
                                        <a href="post-details.html">
                                            <h4>Best Template Website for HTML CSS</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 31, 2020</a></li>
                                            <li><a href="#">12 Comments</a></li>
                                        </ul>
                                        <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt
                                            or customize it for any kind of CMS or website builder. You are allowed to use
                                            it for your business. You are NOT allowed to re-distribute the template ZIP file
                                            on any template collection site for the download purpose. <a rel="nofollow"
                                                href="https://templatemo.com/contact" target="_parent">Contact
                                                TemplateMo</a> for more info. Thank you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{ asset('web/assets/images/blog-post-02.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Healthy</span>
                                        <a href="post-details.html">
                                            <h4>Etiam id diam vitae lorem dictum</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 24, 2020</a></li>
                                            <li><a href="#">36 Comments</a></li>
                                        </ul>
                                        <p>You can support us by contributing a little via PayPal. Please contact <a
                                                rel="nofollow" href="https://templatemo.com/contact"
                                                target="_parent">TemplateMo</a> via Live Chat or Email. If you have any
                                            question or feedback about this template, feel free to talk to us. Also, you may
                                            check other CSS templates such as <a rel="nofollow"
                                                href="https://templatemo.com/tag/multi-page"
                                                target="_parent">multi-page</a>, <a rel="nofollow"
                                                href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a
                                                rel="nofollow" href="https://templatemo.com/tag/video"
                                                target="_parent">video</a>, etc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{ asset('web/assets/images/blog-post-03.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Fashion</span>
                                        <a href="post-details.html">
                                            <h4>Donec tincidunt leo nec magna</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 14, 2020</a></li>
                                            <li><a href="#">48 Comments</a></li>
                                        </ul>
                                        <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque
                                            tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue,
                                            vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra
                                            leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur
                                            nibh, in vehicula eros orci vel neque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="blog.html">View All Posts</a>
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
                                                
                                            <li><a href="{{$recent->id}}">
                                                    <h5>{{$recent->title}}</h5>
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
