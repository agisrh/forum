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
                        @foreach ($posts as $post)
                            
                        <div class="usr-question">
                            <div class="usr_img">
                                <img src="{{ asset('assets/images/resources/usrr-img1.png') }}" alt="">
                            </div>
                            <div class="usr_quest">
                                <h3><a href="{{ url('/read', $post->id) }}" style="color:black">{{ $post->title }}</a></h3>
                                <ul class="react-links">
                                    <li><a href="#" title=""><i class="fas fa-comment-alt"></i> {{ $post->count }} Komentar</a></li>
                                </ul>
                            </div><!--usr_quest end-->
                            <span class="quest-posted-time"><i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                        </div><!--usr-question end-->

                        @endforeach
                        
                    </div><!--forum-questions end-->
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
