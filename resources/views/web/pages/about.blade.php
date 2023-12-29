@extends('web.layout.index')

@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>about us</h4>
                            <h2>more about us!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="about-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <img src="assets/images/about-us.jpg" alt="">
                    <p>Please tell your friends about TemplateMo website. Thank you. You can browse through different
                        categories of templates such as <a rel="nofollow" href="https://templatemo.com/tag/business"
                            target="_parent">business</a>, <a rel="nofollow" href="https://templatemo.com/tag/portfolio"
                            target="_parent">portfolio</a>, <a rel="nofollow" href="https://templatemo.com/tag/restaurant"
                            target="_parent">restaurant</a>, etc. Pellentesque quis luctus libero. Maecenas pretium molestie
                        erat, ac tincidunt leo gravida ac. Cras ullamcorper eu ipsum eu sollicitudin. Fusce vitae commodo
                        turpis. Integer ullamcorper purus nec justo mollis fermentum. Nunc imperdiet erat nec lacinia
                        laoreet. <br><br>Maecenas faucibus ullamcorper felis vitae finibus. Nullam at quam ut lacus aliquam
                        tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate,
                        cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra
                        leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula
                        eros orci vel neque.</p>
                </div>
            </div>

            <div class="row">
                @foreach ($aboutData as $data)
                    <div class="col-lg-4 col-md-6">
                        <h4>{{ $data->title }}</h4>
                        <p>{{ $data->content }}</p>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </section>
@endsection()
