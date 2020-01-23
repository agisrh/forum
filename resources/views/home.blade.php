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
                <div class="post-topbar">
                        <div class="user-picy">
                            <img src="{{ asset('assets/images/resources/user-pic.png') }}" alt="">
                        </div>
                        <div class="post-st">
                            <ul>
                                <li><a class="post-jb active" href="#" title="">Tanya</a></li>
                            </ul>
                        </div><!--post-st end-->
                    </div><!--post-topbar end-->

                    @foreach ($posts as $row)
                    <div class="post-bar">
                        <div class="post_topbar">
                            <div class="usy-dt">
                                <img src="{{ asset('assets/images/resources/us-pic.png') }}" alt="">
                                <div class="usy-name">
                                    <h3>{{ $row->author_name }}</h3>
                                    <span><img src="{{ asset('assets/images/clock.png') }}" alt="">{{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</span>
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
                            <h3>{{ $row->title }}</h3>
                            
                            <p>{{ $row->content }}</p>
                            <ul class="skill-tags">
                                <li><a href="#" title="">HTML</a></li>
                                <li><a href="#" title="">PHP</a></li>
                                <li><a href="#" title="">CSS</a></li>
                                <li><a href="#" title="">Javascript</a></li>
                                <li><a href="#" title="">Wordpress</a></li> 	
                            </ul>
                        </div>
                        <div class="job-status-bar">
                            <a href="{{ route('post.show',$row->id) }}" class="com"><i class="fas fa-comment-alt"></i> {{ $row->count }} Komentar</a>
                        </div>
                    </div><!--post-bar end-->

                    @endforeach
                   
                  
                    <div class="process-comm">
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div><!--process-comm end-->
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

<div class="post-popup job_post">
    <div class="post-project">
        <h3>Pertanyaan</h3>
        <div class="post-project-fields">
            <form action="{{ route('post.store') }}" method="post">
            @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Judul">
                    </div>
                    <div class="col-lg-12">
                        <textarea name="content" placeholder="Konten"></textarea>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <div class="col-lg-12">
                        <ul>
                            <li><a href="#" title="">Batal</a></li>
                            <li><button class="active" type="submit" value="post">Kirim</button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div><!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div><!--post-project end-->
</div><!--post-project-popup end-->
        
@endsection
