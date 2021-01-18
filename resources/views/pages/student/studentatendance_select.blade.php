@extends('layouts/master',['title'=>'lecturematerials'])
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
                                <h4>Registered courses</h4>
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
                        @if($status==0)
                        <div class="alert alert-info" style="text-align: center;">
                            <strong>Whoops, Sorry but any teacher didn't take the attendance yet.</strong>
                        </div>
                        @elseif($status==1)
                        <form action="/studentatendance_select" method="post" class="validated">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="sort_st_course">Sort By Course:</label>

                                <select class="form-control" id="sort_st_course" name="sort_st_course">
                                    @foreach($course_sort as $cours_sort)
                                    <option value="{{$cours_sort->course_fk_att}}">{{$cours_sort->course_fk_att}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection