@extends('layouts/master',['title'=>'Message'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Message</h4></div>
                <div class="card-body">
                    @foreach($notification as $notif)
                       <div class="card-header" style="margin-bottom:2%"> 
                            <div class="card-body">
                            
                            <p class="card-text"><strong>{{$notif->course_fk_notification}}, {{teacherName($notif->sender_id)}}</strong></p>
                                <p class="card-text">{{$notif->content}}</p>
                            </div>
                            <p style="text-align: right;">{{$notif->created_at}}</p>
                        </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection