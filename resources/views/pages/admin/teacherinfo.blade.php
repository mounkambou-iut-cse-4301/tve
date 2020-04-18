@extends('layouts/adminmaster',['title'=>'Teacherinfo'])
@section('content')
<div class="container">
 <div class="card form_addteacher">           
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Teacher's Id</th>
        <th>Teacher's Name</th>
        <th>Teacher's Email</th>
        <th>Teacher's Office</th>
        <th>Teacher's Course 1 </th>
        <th>Teacher's Course 2 </th>
        <th>Edit </th>
      </tr>
    </thead>
    <tbody>
      @foreach($s_teacher as $t_info )
      <tr>
        <td>{{$t_info->teacher_id}}</td>
        <td>{{$t_info->teacher_name}}</td>
        <td>{{$t_info->teacher_email}}</td>
        <td>{{$t_info->teacher_office}}</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</div>
@endsection