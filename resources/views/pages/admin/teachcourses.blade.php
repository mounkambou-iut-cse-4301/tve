@extends('layouts/adminmaster',['title'=>'Teach courses'])
@section('content')
<div class="container">
  <div class="card form_addteacher">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Teacher Id</th>
          <th>Course Id</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tch_course as $tch_cse)
        <tr>
          <td>{{$tch_cse->teacher_fk_teach}}</td>
          <td>{{$tch_cse->course_fk_teach}}</td>
           <td><button class="btn btn_trash"><i class="fa fa-trash"></i></button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>{{$tch_course->links()}}</div>
  </div>
</div>
@endsection