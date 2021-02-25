@extends('layouts/master',['title'=>'Your Post'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
    @include('layouts/partials/_studentsidebar')
        <div class="col-lg-6">
            <div class="card" style="margin-bottom: 1%;">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-text"><strong>{{$message->person_message}}</strong></p>
                            <p class="card-text" style="text-align: center;">{{$message->title}}</p>
                            <div class="card-body">
                                <p class="card-text">{{$message->content}}
                                </p>
                            </div>
                            <p style="text-align: right;">{{$message->updated_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card"  style="margin-bottom: 1%;">
                <div class="card-body">
                    <form action="/student_post/{{$message->message_id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your comment"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Comment</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Comments</strong></p>
                      @foreach($comment as $comment)
                        <div class="card-header"> 
                            <div class="card-body">
                            
                            <p class="card-text"><strong>{{$comment->person_comment}}</strong></p>
                                <p class="card-text">{{$comment->comment}}</p>
                            </div>
                            <p style="text-align: right;">{{$comment->created_at}}</p>
                        </div>
                        @endforeach
                </div>
                
            </div>

        </div>

        <div class="col-lg-3">
            <div class="card-header">
                <h4> Other Posts </h4>
            </div>
            <div class="card-body">
            @foreach($other_message as $other_message)
                <div class="card-header" style="margin-bottom:2% !important;">
                <a href="/student_post/{{$other_message->message_id}}" class="link_studentsidebar">{{$other_message->title}},({{$other_message->course_fk_message}})</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection