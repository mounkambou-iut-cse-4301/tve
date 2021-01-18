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
                                <h4>Lectures Materials</h4>
                            </div>
                            <div class="col-lg-2">
                                <a href="/student_message" class="notification" style="float:left;">
                                    <span><i class="fa fa-bell" style="font-size:24px"></i></span>
                                    @if($status==1)
                                    <span class="badge">{{$student_seen}}</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/lecturematerials" method="post" class="validated">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="sort_st_course"><b>Sort By Course</b></label>
                                <select class="form-control" id="sort_st_course" name="sort_st_course">
                                    @foreach($course as $cour)
                                    <option value="{{$cour->course_fk_take}}">{{$cour->course_fk_take}}</option>
                                    @endforeach
                                </select><br>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection