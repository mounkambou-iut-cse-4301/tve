@extends('layouts/adminmaster',['title'=>'Addteacher'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card form_addteacher">
        <form action="" >
          <div class="form-group">
            <label for="Id_teacher">Id:</label>
            <input type="number" class="form-control" id="Id_teacher" placeholder="Enter Teacher's Id" name="Id_teacher">
          </div>
          <div class="form-group">
            <label for="teacher_pass">Password:</label>
            <input type="password" class="form-control" id="teacher_pass" placeholder="Enter Teacher's Password" name="teacher_pass">
          </div>
          <div class="form-group">
            <label for="teacher_name">Name:</label>
            <input type="text" class="form-control" id="teacher_name" placeholder="Enter Teacher's Name" name="teacher_name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email">
          </div>
          <div class="form-group">
            <label for="teacher_office">Office:</label>
            <input type="email" class="form-control" id="teacher_office" placeholder="Enter Teacher's office" name="teacher_office">
          </div>
           <div class="form-group">
            <label for="teacher_course1">Course 1:</label>
            <input type="text" class="form-control" id="teacher_course1" placeholder="Enter Teacher's Course 1" name="teacher_course1">
          </div>
           <div class="form-group">
            <label for="teacher_course2">Course 2:</label>
            <input type="text" class="form-control" id="teacher_course2" placeholder="Enter Teacher's Course 2" name="teacher_course2">
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
@endsection