@extends('layouts/adminmaster',['title'=>'Assign course'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card form_addteacher">
      <span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span>
        <form action="/assigncourses" method="post">
        <div class="form-group">
          @csrf
       
          <label for="teacher_fk_teach">Teacher's Id:</label>
          <select class="form-control" id="teacher_fk_teach" name="teacher_fk_teach">
           @foreach($sel_t as $s_t )
            <option value="{{$s_t->teacher_id}}">{{$s_t->teacher_id}}, {{teacherName($s_t->teacher_id)}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="course_fk_teach">Teacher's course:</label>
          <select class="form-control" id="course_fk_teach" name="course_fk_teach">
            @foreach($sel_courses as $s_courses )
            <option value="{{$s_courses->course_id}}">{{$s_courses->course_id}}, {{$s_courses->course_name}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
</div>
@endsection