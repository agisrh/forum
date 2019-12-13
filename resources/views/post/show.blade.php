@extends('layouts.main')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')

<section class="forum-page">
    <div class="container">
        <div class="forum-questions-sec">
            <div class="row">
            <div class="col-lg-8">
            <div class="main-ws-sec">
                <div class="posts-section">

                    <div class="posty">
                    <div class="post-bar no-margin">
                        <div class="post_topbar">
                            <div class="usy-dt">
                                <img src="{{ asset('assets/images/resources/us-pic.png') }}" alt="">
                                <div class="usy-name">
                                    <h3>{{ $post->author_name }}</h3>
                                    <span><img src="{{ asset('assets/images/clock.png') }}" alt="">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                    <li><a href="#" title="">Edit Post</a></li>
                                    <li><a href="#" title="">Unsaved</a></li>
                                    <li><a href="#" title="">Unbid</a></li>
                                    <li><a href="#" title="">Close</a></li>
                                    <li><a href="#" title="">Hide</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="job_descp" style="margin-top:30px">
                            <h3>{{ $post->title }}</h3>
                            <ul class="job-dt">
                                <li><a href="#" title="">Full Time</a></li>
                            </ul>
                            <p>{{ $post->content }}</p>
                            <ul class="skill-tags">
                                <li><a href="#" title="">HTML</a></li>
                                <li><a href="#" title="">PHP</a></li>
                                <li><a href="#" title="">CSS</a></li>
                                <li><a href="#" title="">Javascript</a></li>
                                <li><a href="#" title="">Wordpress</a></li> 	
                            </ul>
                        </div>
                    </div><!--post-bar end-->
                        <div class="comment-section">
                            <a href="#" class="plus-ic">
                                <i class="la la-plus"></i>
                            </a>
                            <div class="comment-sec">
                                <ul>
                                <li>
                                    <div class="comment-list">
                                            <div class="bg-img">
                                                <img src="{{ asset('assets/images/resources/bg-img3.png') }}" alt="">
                                            </div>
                                            <div class="comment">
                                                <h3>John Doe</h3>
                                                <span><img src="{{ asset('assets/images/clock.png') }}" alt=""> 3 min ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                                <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                            </div>
                                        </div><!--comment-list end-->
                                    </li>
                                    <li>
                                        <div class="comment-list">
                                            <div class="bg-img">
                                                <img src="{{ asset('assets/images/resources/bg-img3.png') }}" alt="">
                                            </div>
                                            <div class="comment">
                                                <h3>John Doe</h3>
                                                <span><img src="{{ asset('assets/images/clock.png') }}" alt=""> 3 min ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                                <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                            </div>
                                        </div><!--comment-list end-->
                                    </li>
                                </ul>
                            </div><!--comment-sec end-->
                            <div class="post-comment">
                                <div class="cm_img">
                                    <img src="{{ asset('assets/images/resources/bg-img4.png') }}" alt="">
                                </div>
                                <div class="comment_box">
                                    <form>
                                        <input type="text" placeholder="Post a comment">
                                        <button type="submit">Send</button>
                                    </form>
                                </div>
                            </div><!--post-comment end-->
                        </div><!--comment-section end-->
                    </div><!--posty end-->
                </div><!--posts-section end-->
            </div><!--main-ws-sec end-->
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
                        <img src="{{ asset('assets/images/resources/adver-img.png') }}" alt="">
                    </div><!--widget-adver end-->
                </div>
            </div>
        </div><!--forum-questions-sec end-->
    </div>
</section><!--forum-page end-->

@endsection