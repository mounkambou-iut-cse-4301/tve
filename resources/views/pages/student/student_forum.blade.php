@extends('layouts/master',['title'=>'Your Post'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"> 
                    <div class="row">
                            <div class="col-lg-10">
                              <h4> Posts </h4>
                            </div>
                            <div class="col-lg-2">
                                <a href="/student_message" class="notification" style="float:left;">
                                    <span><i class="fa fa-bell" style="font-size:24px"></i></span>
                                    @if($notification_status==1)
                                    <span class="badge">{{$student_seen}}</span>
                                    @endif
                                </a>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($message as $post)
                        <div class="card-header" style="margin-bottom:2% !important;">
                            <a href="/student_post/{{$post->message_id}}" class="link_studentsidebar">{{$post->title}},({{$post->course_fk_message}})</a>
                        </div> 
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection