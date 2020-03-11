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
        <th>Student's Courses </th>
        <th>Student's Lab Courses </th>
        <th>Edit </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="6">John</td>
        <td rowspan="6">john@example.com</td>
        <td rowspan="6">John</td>
        <td rowspan="6">2</td>
        <td>Doe</td>
        <td>CSE 4144</td>
        <td rowspan="6"><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
      <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>

       <tr>
        <td rowspan="6">John</td>
        <td rowspan="6">john@example.com</td>
        <td rowspan="6">John</td>
        <td rowspan="6">2</td>
        <td>Doe</td>
        <td>CSE 4144</td>
        <td rowspan="6"><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
      <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>

       <tr>
        <td rowspan="6">John</td>
        <td rowspan="6">john@example.com</td>
        <td rowspan="6">John</td>
        <td rowspan="6">2</td>
        <td>Doe</td>
        <td>CSE 4144</td>
        <td rowspan="6"><button class="btn btn_edit"><i class="fa fa-edit"></i></button></td>
      </tr>
      <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
       <tr>
        <td>Doe</td>
        <td>CSE 4144</td>
      </tr>
      
    </tbody>
  </table>
</div>

</div>
@endsection