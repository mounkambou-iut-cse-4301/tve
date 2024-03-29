@extends('layouts/adminmaster',['title'=>'Teach courses'])
@section('content')
<div class="container">
  <div class="card form_addteacher">
  <span class="badge badge-danger" style="text-align: center ">{{ session('message') }}</span>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Teacher's ID</th>
          <th>Teacher's Name</th>
          <th>Course ID</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tch_course as $tch_cse)
        <tr>
          <td>{{$tch_cse->teacher_fk_teach}}</td>
          <td>{{teacherName($tch_cse->teacher_fk_teach)}}</td>
          <td>{{$tch_cse->course_fk_teach}}</td>
           <td><button class="btn btn_trash"><a href="/deletecourse_assign/{{$tch_cse->course_fk_teach}}"><i class="fa fa-trash"></i></a></button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>{{$tch_course->links()}}</div>
  </div>
</div>
@endsection