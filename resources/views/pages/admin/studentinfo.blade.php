@extends('layouts/adminmaster',['title'=>'Studentinfo'])
@section('content')
<div class="container">
 <div class="card form_addteacher">           
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Student's Id</th>
        <th>Student's Name</th>
        <th>Student's Email</th>
        <th>Semester </th>
        <th>Edit </th>
      </tr>
    </thead>
    <tbody>

      @foreach($s_student as $st_info )
      <tr>
        <td>{{$st_info->student_id}}</td>
        <td>{{$st_info->student_name}}</td>
        <td>{{$st_info->student_email}}</td>
        <td>{{$st_info->student_sem}}</td>
        <td><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</div>
@endsection