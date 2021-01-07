@extends('layouts/master',['title'=>'Your Post'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4> Posts </h4>
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