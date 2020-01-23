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
                        </div>
                        <div class="job_descp" style="margin-top:30px">
                            <h3>{{ $post->title }}</h3>
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
                                @foreach ($comment as $row)
                                    <li>
                                        <div class="comment-list">
                                                <div class="bg-img">
                                                    <img src="{{ asset('assets/images/resources/bg-img3.png') }}" alt="">
                                                </div>
                                                <div class="comment">
                                                    <h3>{{ $row->comment_name }}</h3>
                                                    <span><img src="{{ asset('assets/images/clock.png') }}" alt=""> {{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</span>
                                                    <p>{{ $row->comment }}</p>
                                                </div>
                                            </div><!--comment-list end-->
                                        </li>
                                @endforeach
                                </ul>
                            </div><!--comment-sec end-->
                            <div class="post-comment">
                                <div class="cm_img">
                                    <img src="{{ asset('assets/images/resources/bg-img4.png') }}" alt="">
                                </div>
                                <div class="comment_box">
                                    <form action="{{ route('comment.store') }}" method="post">
                                        @csrf
                                        <input type="text" name="comment" placeholder="Berikan komentar...">
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                        <input type="hidden" value="{{ $post->id }}" name="post_id">
                                        <button type="submit">Kirim</button>
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
                        <h3 class="title-wd">Top Member</h3>
                        <ul>
                            @foreach ($users as $row)
                            <li>
                                <div class="usr-msg-details">
                                    <div class="usr-ms-img">
                                        <img src="{{ asset('assets/images/resources/m-img1.png') }}" alt="">
                                    </div>
                                    <div class="usr-mg-info">
                                        <h3>{{ $row->name }}</h3>
                                        <p>{{ $row->email }} </p>
                                    </div><!--usr-mg-info end-->
                                </div>
                                <span><img src="{{ asset('assets/images/price1.png') }}" alt="">{{ $row->count }}</span>
                            </li>
                            @endforeach
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