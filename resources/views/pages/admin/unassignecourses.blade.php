@extends('layouts/adminmaster',['title'=>'Unassigned courses'])
@section('content')
<div class="container">
  <div class="card form_addteacher">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Course Id</th>
          <th>semester</th>
        </tr>
      </thead>
      <tbody>
        @foreach($un_course as $u_course)
        <tr>
          <td>{{$u_course->course_id}}</td>
          <td>{{$u_course->course_sem}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>{{$un_course->links()}}</div>
  </div>
</div>
@endsection