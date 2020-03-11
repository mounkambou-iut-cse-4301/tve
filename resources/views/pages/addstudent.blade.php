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
            <label for="student_course1">Course 1:</label>
            <input type="text" class="form-control" id="student_course1" placeholder="Enter Student's Course 1" name="student_course1">
          </div>
          <div class="form-group">
            <label for="student_course2">Course 2:</label>
            <input type="text" class="form-control" id="student_course2" placeholder="Enter Student's Course 2" name="student_course2">
          </div>
            <div class="form-group">
            <label for="student_course3">Course 3:</label>
            <input type="text" class="form-control" id="student_course3" placeholder="Enter Student's Course 3" name="student_course3">
          </div>
            <div class="form-group">
            <label for="student_course4">Course 4:</label>
            <input type="text" class="form-control" id="student_course4" placeholder="Enter Student's Course 4" name="student_course4">
          </div>
            <div class="form-group">
            <label for="student_course5">Course 5:</label>
            <input type="text" class="form-control" id="student_course5" placeholder="Enter Student's Course 5" name="student_course5">
          </div>
            <div class="form-group">
            <label for="student_course6">Course 6:</label>
            <input type="text" class="form-control" id="student_course6" placeholder="Enter Student's Course 6" name="student_course6">
          </div>
            <div class="form-group">
            <label for="student_course7">Course 7:</label>
            <input type="text" class="form-control" id="student_course7" placeholder="Enter Student's Course 7" name="student_course7">
          </div>
            <div class="form-group">
            <label for="student_course8">Course 8:</label>
            <input type="text" class="form-control" id="student_course8" placeholder="Enter Student's Course 8" name="student_course8">
          </div>
            <div class="form-group">
            <label for="student_course9">Course 9:</label>
            <input type="text" class="form-control" id="student_course9" placeholder="Enter Student's Course 9" name="student_course9">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
@endsection