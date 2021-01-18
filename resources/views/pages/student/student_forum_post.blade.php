@extends('layouts/master',['title'=>'Post on Forum'])
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
                              <h4>Posting on Forum</h4>
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
                    <form action="/student_forum_post" method="post" enctype="multipart/form-data">
                        
                        <p><span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span></p><br>
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="sel_course"><b>Select course:</b></label>
                            <select class="form-control" id="sel_course" name="sel_course">
                               @foreach($course as $cours_sort)
                                 <option value="{{$cours_sort->course_fk_take}}">{{$cours_sort->course_fk_take}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lecture"><b>Title:</b></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="message"><b>Message:</b></label>
                            <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection