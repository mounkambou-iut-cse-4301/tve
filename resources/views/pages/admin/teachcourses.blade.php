@extends('layouts/adminmaster',['title'=>'Teach courses'])
@section('content')
<div class="container">
  <div class="card form_addteacher">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Teacher Id</th>
          <th>Course Id</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tch_course as $tch_cse)
        <tr>
          <td>{{$tch_cse->teacher_fk_teach}}</td>
          <td>{{$tch_cse->course_fk_teach}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection