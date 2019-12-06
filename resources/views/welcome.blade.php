@extends('layouts.main')

@section('title')
    <title>Welcome</title>
@endsection

@section('content')
<section class="forum-page">
    <div class="container">
        <div class="forum-questions-sec">
            <div class="row">
                <div class="col-lg-8">
                    <div class="forum-questions">
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/usrr-img1.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/m-img2.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/m-img3.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/m-img4.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/m-img5.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/m-img6.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/m-img7.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> Comments  15</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>3 min ago</span>
                        </div><!--usr-question end-->
                    </div><!--forum-questions end-->
                </div>
                <div class="col-lg-4">
                    <div class="widget widget-user">
                        <h3 class="title-wd">Top User of the Week</h3>
                        <ul>
                            <li>
                                <div class="usr-msg-details">
                                    <div class="usr-ms-img">
                                        <img src="{{ asset('assets/images/resources/m-img1.png') }}" alt="">
                                    </div>
                                    <div class="usr-mg-info">
                                        <h3>Jessica William</h3>
                                        <p>Graphic Designer </p>
                                    </div><!--usr-mg-info end-->
                                </div>
                                <span><img src="{{ asset('assets/images/price1.png') }}" alt="">1185</span>
                            </li>
                            <li>
                                <div class="usr-msg-details">
                                    <div class="usr-ms-img">
                                        <img src="{{ asset('assets/images/resources/m-img2.png') }}" alt="">
                                    </div>
                                    <div class="usr-mg-info">
                                        <h3>John Doe</h3>
                                        <p>PHP Developer</p>
                                    </div><!--usr-mg-info end-->
                                </div>
                                <span><img src="{{ asset('assets/images/price2.png') }}" alt="">1165</span>
                            </li>
                            <li>
                                <div class="usr-msg-details">
                                    <div class="usr-ms-img">
                                        <img src="{{ asset('assets/images/resources/m-img3.png') }}" alt="">
                                    </div>
                                    <div class="usr-mg-info">
                                        <h3>Poonam</h3>
                                        <p>Wordpress Developer </p>
                                    </div><!--usr-mg-info end-->
                                </div>
                                <span><img src="{{ asset('assets/images/price3.png') }}" alt="">1120</span>
                            </li>
                            <li>
                                <div class="usr-msg-details">
                                    <div class="usr-ms-img">
                                        <img src="{{ asset('assets/images/resources/m-img4.png') }}" alt="">
                                    </div>
                                    <div class="usr-mg-info">
                                        <h3>Bill Gates</h3>
                                        <p>C & C++ Developer </p>
                                    </div><!--usr-mg-info end-->
                                </div>
                                <span><img src="{{ asset('assets/images/price4.png') }}" alt="">1009</span>
                            </li>
                        </ul>
                    </div><!--widget-user end-->
                    <div class="widget widget-adver">
                        <img src="{{ asset('assets/images/sttdb.png') }}" alt="">
                    </div><!--widget-adver end-->
                </div>
            </div>
        </div><!--forum-questions-sec end-->
    </div>
</section><!--forum-page end-->
@endsection
