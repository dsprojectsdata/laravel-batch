@extends('layout.index')

@section('content')
    <div id="main-content" class="main-content">
        <div id="home-main-content" class="home-main-content home-1">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-1"
                data-source="gallery"
                style="padding:0px;background-image:url('images/slides/h1-slider1.jpg');background-repeat:no-repeat;background-size:cover;background-position:center center;">

                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.4">
                    <ul>
                        <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb="images/slides/h1-slider1-100x50.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="{{ asset('web/assets/images/slides/h1-slider1.jpg')}}" alt="" title="hotel-wp-demo3-slider.jpg"
                                width="1422" height="800" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


                            <h1 class="tp-caption   tp-resizeme" id="slide-10-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['8','8','8','7']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-109','-109','-109','-62']"
                                data-fontsize="['66','66','40','30']" data-lineheight="['78','78','50','36']"
                                data-fontweight="['700','700','700','700']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"frame":"999","to":"y:-50px;opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 66px; line-height: 78px; font-weight: 700; color: rgba(255,255,255,1);">
                                Everything you can imagine <br /> is real </h1>

                            <p class="tp-caption   tp-resizeme" id="slide-10-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','1','1']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['5','5','-24','12']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
                                Merry Christmas and Happy New Year 2017! </p>

                            <div class="tp-caption   tp-resizeme  thim-link-slider2" id="slide-10-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['10','10','0','2']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['105','105','89','114']"
                                data-lineheight="['1','1','','']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text"
                                data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"rooms.html","delay":""}]'
                                data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[17,17,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[16,16,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 1px; font-weight: 400; color: rgba(255,255,255,1);text-transform:uppercase;">
                                <a href="rooms.html">Discover</a>
                            </div>
                        </li>

                        <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="{{ asset('web/assets/images/slides/h1-slider2-100x50.jpg')}}" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">

                            <img src="{{ asset('web/assets/images/slides/h1-slider2.jpg')}}" alt="" title="hotel-wp-slider-2"
                                width="1461" height="800" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


                            <h1 class="tp-caption   tp-resizeme" id="slide-11-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','1','9']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-75','-48']"
                                data-fontsize="['64','64','40','30']" data-lineheight="['','','50','36']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 64px; font-weight: 700; color: rgba(255,255,255,1);">
                                A Five Stars Hotel </h1>

                            <p class="tp-caption   tp-resizeme" id="slide-11-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','5','3']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','-14','6']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
                                And We Like To Keep It That Way! </p>

                            <div class="tp-caption   tp-resizeme  thim-link-slider2" id="slide-11-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['3','3','0','-1']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['105','105','88','108']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"contact.html","delay":""}]'
                                data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 15px;font-weight: 400; color: rgba(255,255,255,1);text-transform:uppercase;">
                                <a href="contact.html">Contact Us</a>
                            </div>
                        </li>

                        <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="images/slides/h1-slider3-100x50.jpg" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">

                            <img src="images/slides/h1-slider3.jpg" alt="" title="hotel-wp-slider-3"
                                width="1461" height="800" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


                            <h1 class="tp-caption   tp-resizeme" id="slide-12-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','10']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-80','-60']"
                                data-fontsize="['64','64','40','30']" data-lineheight="['','','50','36']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 64px;font-weight: 700; color: rgba(255,255,255,1);">
                                Book Early Save More </h1>

                            <p class="tp-caption   tp-resizeme" id="slide-12-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','4','7']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','-21','-3']"
                                data-fontsize="['18','18','18','20']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
                                Room Availability Checker and Booking </p>

                            <div class="tp-caption   tp-resizeme  thim-link-slider2" id="slide-12-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['3','3','0','1']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['105','105','68','97']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"rooms.html","delay":""}]'
                                data-responsive_offset="on"
                                data-frames='[{"delay":900,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 15px;font-weight: 400; color: rgba(255,255,255,1); text-transform:uppercase;">
                                <a href="rooms.html">Explore</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <div class="empty-space"></div>
            {{-- <div class="h1-introduce">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="sc-heading style-02">
                                <h3 class="title">Comfort are perfectly combined here</h3>
                                <div class="description">
                                    <p>This charming private 19th century mansion, which originally belonged to the
                                        family, has been completely renovated with care & passion while respecting
                                        the spirit of place.</p>
                                    <p>Divo Hotel surrounded herself by a team of French artisans to create a
                                        sophisticated place in a refined.</p>
                                </div>
                                <div class="head-button">
                                    <a href="about-us.html" class="more-info">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="sc-img-box row">
                                <div class="col-sm-6">
                                    <a href="gallery-full-width.html"><img src="images/home/h1-img1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="gallery-full-width.html"><img src="images/home/h1-img2.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="empty-space"></div>
            {{-- <div class="h1-video rectangle-overlay">
                <div class="sc-video">
                    <div class="background-video">
                        <div class="cover-image"></div>
                        <div class="content container">
                            <h3 class="title">Summer is here. Get ready <br> to enjoy it!</h3>
                            <i class="video-play ion-ios-play"></i>
                            <span class="text-icon">Play Video</span>
                        </div>
                        <video loop="" class="full-screen-video" data-autoplay="">
                            <source src="images/home/hotel.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="sc-list-box style-01">
                    <div class="container">
                        <div class="list-box-slider owl-carousel owl-theme">
                            <div class="box-item">
                                <i class="ion-ribbon-a "></i>
                                <h5 class="box-title">Rooms</h5>
                                <p class="description">Lose yourself in the lush textures, rich colors and French
                                    amenities.</p>
                                <a href="rooms.html" class="btn-link">Take a look</a>
                            </div>
                            <div class="box-item">
                                <i class="ion-ios-flower"></i>
                                <h5 class="box-title">Aqua Spa</h5>
                                <p class="description">Finnish sauna and gym, comfortable massage rooms.</p>
                                <a href="rooms.html" class="btn-link">Take a look</a>
                            </div>
                            <div class="box-item">
                                <i class="ion-ios-nutrition "></i>
                                <h5 class="box-title">Restaurants</h5>
                                <p class="description">Discover our global cuisine, set menus, extensive wine list.
                                </p>
                                <a href="rooms.html" class="btn-link">Take a look</a>
                            </div>
                            <div class="box-item">
                                <i class="ion-wifi "></i>
                                <h5 class="box-title">Wifi</h5>
                                <p class="description">Finnish sauna and gym, comfortable massage rooms.</p>
                                <a href="rooms.html" class="btn-link">Take a look</a>
                            </div>
                            <div class="box-item">
                                <i class="ion-bonfire "></i>
                                <h5 class="box-title">Activity</h5>
                                <p class="description">For the perfect family holidays.</p>
                                <a href="rooms.html" class="btn-link">Take a look</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="group-destination">
                <div class="sc-content-overlay">
                    <div class="container">
                        <div class="empty-space"></div>
                        {{-- <div class="sc-heading style-01 text-center">
                            <h3 class="title">Top Destinations</h3>
                            <p class="description">For anything that brings people together to celebrate an
                                occasion, we create truly memorable experiences that you will cherish forever</p>
                        </div> --}}
                        <div class="sc-posts style-01 auto-height">
                            <div class="item row">
                                <div class="post col-sm-6 col-md-4">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="blog-single.html"><img src="images/gallery/img-10.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"> <a href="blog-single.html">Futurethon</a></h3>
                                            <div class="short-text"> 2 Day 3 night, Start from $500</div>
                                            <div class="summary">We continuously strive to enhance our living and
                                                working environments. The environments we live in today are almost
                                                unrecognisable.</div>
                                            <a href="blog-single.html" class="read-more">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post col-sm-6 col-md-4">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="blog-single.html"><img src="images/gallery/img-1.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"> <a href="blog-single.html">Beach</a></h3>
                                            <div class="short-text"> 2 Day 3 night, Start from $500</div>
                                            <div class="summary">We continuously strive to enhance our living and
                                                working environments. The environments we live in today are almost
                                                unrecognisable.</div>
                                            <a href="blog-single.html" class="read-more">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post col-sm-6 col-md-4">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="blog-single.html"><img src="images/gallery/img-3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"> <a href="blog-single.html">Spa</a></h3>
                                            <div class="short-text"> 2 Day 3 night, Start from $500</div>
                                            <div class="summary">We continuously strive to enhance our living and
                                                working environments. The environments we live in today are almost
                                                unrecognisable.</div>
                                            <a href="blog-single.html" class="read-more">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post col-sm-6 col-md-4">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="blog-single.html"><img src="images/gallery/img-7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"> <a href="blog-single.html">Pool</a></h3>
                                            <div class="short-text"> 2 Day 3 night, Start from $500</div>
                                            <div class="summary">We continuously strive to enhance our living and
                                                working environments. The environments we live in today are almost
                                                unrecognisable.</div>
                                            <a href="blog-single.html" class="read-more">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post col-sm-6 col-md-4">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="blog-single.html"><img src="images/gallery/img-8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"> <a href="blog-single.html">Outdoor</a></h3>
                                            <div class="short-text"> 2 Day 3 night, Start from $500</div>
                                            <div class="summary">We continuously strive to enhance our living and
                                                working environments. The environments we live in today are almost
                                                unrecognisable.</div>
                                            <a href="blog-single.html" class="read-more">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post col-sm-6 col-md-4">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="blog-single.html"><img src="images/gallery/img-11.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"> <a href="blog-single.html">Outdoor</a></h3>
                                            <div class="short-text"> 2 Day 3 night, Start from $500</div>
                                            <div class="summary">We continuously strive to enhance our living and
                                                working environments. The environments we live in today are almost
                                                unrecognisable.</div>
                                            <a href="blog-single.html" class="read-more">More Info</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h1-banner">
                <div class="sc-content-overlay">
                    <div class="container rectangle-overlay">
                        <div class="sc-box style-01 text-center">
                            <h3 class="title">Get up to 20% off on your next
                                <br> travel
                            </h3>
                            <p class="description">Choose the package you would like to offer to your clients and
                                <br> send us an inquiry using the contact form.
                            </p>
                            <div class="button-box"><a href="#" class="btn-box">Get it now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h1-rooms">
                <div class="sc-content-overlay">
                    <div class="empty-space"></div>
                    <div class="container">
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Awesome Offer</h3>
                            <p class="description">For anything that brings people together to celebrate an
                                occasion, we create truly memorable experiences that you will cherish forever</p>
                        </div>
                        <div class="sc-rooms style-01">
                            <div class="rooms-content layout-grid style-01">
                                <div class="row">
                                    <div class="room col-sm-4 clearfix">
                                        <div class="room-item">
                                            <div class="room-media">
                                                <a href="room-single.html"><img src="images/gallery/img-4.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="room-summary">
                                                <h3 class="room-title">
                                                    <a href="room-single.html">Classic Room</a>
                                                </h3>
                                                <div class="room-price">From: <span class="price">$100.0</span>
                                                </div>
                                                <p class="room-description">Lorem ipsum dolor sit amet, consecte
                                                    adipiscing elit, sed diam nonummy wisi enim ad minim vel eum
                                                    iriure</p>
                                                <div class="room-meta clearfix">
                                                    <div class="comment-count">1 Reviews</div>
                                                    <div class="rating"><span class="star"></span>(5/5)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room col-sm-4 clearfix">
                                        <div class="room-item">
                                            <div class="room-media">
                                                <a href="room-single.html"><img src="images/gallery/img-11.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="room-summary">
                                                <h3 class="room-title">
                                                    <a href="room-single.html">Budget Room</a>
                                                </h3>
                                                <div class="room-price">From: <span class="price">$200.0</span>
                                                </div>
                                                <p class="room-description">Lorem ipsum dolor sit amet, consecte
                                                    adipiscing elit, sed diam nonummy wisi enim ad minim vel eum
                                                    iriure</p>
                                                <div class="room-meta clearfix">
                                                    <div class="comment-count">1 Reviews</div>
                                                    <div class="rating"><span class="star"></span>(5/5)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room col-sm-4 clearfix">
                                        <div class="room-item">
                                            <div class="room-media">
                                                <a href="room-single.html"><img src="images/gallery/img-6.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="room-summary">
                                                <h3 class="room-title">
                                                    <a href="room-single.html">Premium Room</a>
                                                </h3>
                                                <div class="room-price">From: <span class="price">$300.0</span>
                                                </div>
                                                <p class="room-description">Lorem ipsum dolor sit amet, consecte
                                                    adipiscing elit, sed diam nonummy wisi enim ad minim vel eum
                                                    iriure</p>
                                                <div class="room-meta clearfix">
                                                    <div class="comment-count">1 Reviews</div>
                                                    <div class="rating"><span class="star"></span>(5/5)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space"></div>
                </div>
            </div>
            <div class="h1-bg-testimonial">
                <div class="sc-content-overlay">
                    <div class="container rectangle-overlay">
                        <div class="sc-testimonials style-01">
                            <h3 class="heading">Comments from our happy <br> Guests</h3>
                            <div class="testimonial-slider" data-itemsvisible="3" data-nav="false">
                                <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="images/blog/sidebar.jpg" alt="">
                                        </div>
                                        <div class="rating-star"></div>
                                        <div class="description">
                                            " Conversations can be a tricky business. Sometimes, decoding what is
                                            said with what is meant is difficult at best. However, communication is
                                            a necessary tool in today’s world. "
                                        </div>
                                        <div class="user-info">
                                            <h4 class="name">Bobby Tom</h4>
                                            <div class="regency">Manager</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="images/blog/author1.jpg" alt="">
                                        </div>
                                        <div class="rating-star"></div>
                                        <div class="description">
                                            " Conversations can be a tricky business. Sometimes, decoding what is
                                            said with what is meant is difficult at best. However, communication is
                                            a necessary tool in today’s world. "
                                        </div>
                                        <div class="user-info">
                                            <h4 class="name">Kenny White</h4>
                                            <div class="regency">Designer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="images/blog/author2.jpg" alt="">
                                        </div>
                                        <div class="rating-star"></div>
                                        <div class="description">
                                            " Conversations can be a tricky business. Sometimes, decoding what is
                                            said with what is meant is difficult at best. However, communication is
                                            a necessary tool in today’s world. "
                                        </div>
                                        <div class="user-info">
                                            <h4 class="name">Neymar</h4>
                                            <div class="regency">Foreman</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-destination">
                <div class="sc-content-overlay">
                    <div class="container">
                        <div class="empty-space"></div>
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Our Gallery</h3>
                            <p class="description">For anything that brings people together to celebrate an
                                occasion, we create truly memorable experiences that you will cherish forever</p>
                        </div>
                        <div class="sc-gallery style-01">
                            <div class="gallery-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-1" class="btn-gallery"><img src="images/gallery/img-6.jpg"
                                                alt=""></a>
                                        <div id="gallery-1" class="hidden">
                                            <a href="images/gallery/img-10.jpg"><img src="images/gallery/img-10.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-6.jpg"><img src="images/gallery/img-6.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-11.jpg"><img src="images/gallery/img-11.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Rooms</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <div class="gallery">
                                            <a href="#gallery-2" class="btn-gallery"><img src="images/gallery/img-7.jpg"
                                                    alt=""></a>
                                            <div id="gallery-2" class="hidden">
                                                <a href="images/gallery/img-2.jpg"><img src="images/gallery/img-2.jpg"
                                                        alt=""></a>
                                                <a href="images/gallery/img-7.jpg"><img src="images/gallery/img-7.jpg"
                                                        alt=""></a>
                                                <a href="images/gallery/img-8.jpg"><img src="images/gallery/img-8.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Restaurant</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-3" class="btn-gallery"><img src="images/gallery/img-9.jpg"
                                                alt=""></a>
                                        <div id="gallery-3" class="hidden">
                                            <a href="images/gallery/img-12.jpg"><img src="images/gallery/img-12.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-1.jpg"><img src="images/gallery/img-1.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-9.jpg"><img src="images/gallery/img-9.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Pool</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-4" class="btn-gallery"><img src="images/gallery/img-13.jpg"
                                                alt=""></a>
                                        <div id="gallery-4" class="hidden">
                                            <a href="images/gallery/img-14.jpg"><img src="images/gallery/img-14.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-7.jpg"><img src="images/gallery/img-7.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-13.jpg"><img src="images/gallery/img-13.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Activities</a>
                                        </h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-5" class="btn-gallery"><img src="images/gallery/img-1.jpg"
                                                alt=""></a>
                                        <div id="gallery-5" class="hidden">
                                            <a href="images/gallery/img-12.jpg"><img src="images/gallery/img-12.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-1.jpg"><img src="images/gallery/img-1.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-9.jpg"><img src="images/gallery/img-9.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Beach</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-7" class="btn-gallery"><img src="images/gallery/img-3.jpg"
                                                alt=""></a>
                                        <div id="gallery-6" class="hidden">
                                            <a href="images/gallery/img-4.jpg"><img src="images/gallery/img-4.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-7.jpg"><img src="images/gallery/img-7.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-3.jpg"><img src="images/gallery/img-3.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Spa</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-7" class="btn-gallery"><img src="images/gallery/img-14.jpg"
                                                alt=""></a>
                                        <div id="gallery-7" class="hidden">
                                            <a href="images/gallery/img-13.jpg"><img src="images/gallery/img-13.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-14.jpg"><img src="images/gallery/img-14.jpg"
                                                    alt=""></a>
                                            <a href="images/gallery/img-12.jpg"><img src="images/gallery/img-12.jpg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Outdoor</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
