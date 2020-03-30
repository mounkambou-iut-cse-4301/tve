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
      <tr>
        <td>18762265</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>2</td>
        <td><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
         <tr>
        <td>26725638</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>2</td>
        <td><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
      
    </tbody>
  </table>
</div>

</div>
@endsection