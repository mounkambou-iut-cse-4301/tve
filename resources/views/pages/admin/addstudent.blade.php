@extends('layouts/adminmaster',['title'=>'Addstudent'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card form_addteacher">
        <form action="" >
          <div class="form-group">
            <label for="Id_student">Id:</label>
            <input type="number" class="form-control" id="Id_student" placeholder="Enter Student's Id" name="Id_student">
          </div>
          <div class="form-group">
            <label for="student_pass">Password:</label>
            <input type="password" class="form-control" id="student_pass" placeholder="Enter Student's Password" name="student_pass">
          </div>
          <div class="form-group">
            <label for="student_name">Name:</label>
            <input type="text" class="form-control" id="student_name" placeholder="Enter Student's Name" name="student_name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email">
          </div>
          <div class="form-group">
            <label for="student_sem">Semester:</label>
            <input type="number" class="form-control" id="student_sem" name="student_sem">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
@endsection