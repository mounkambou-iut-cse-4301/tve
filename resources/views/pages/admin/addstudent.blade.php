@extends('layouts/adminmaster',['title'=>'Addstudent'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card form_addteacher">
        <form action="/insertNewStudent" method="post" class="validated" >
          <div class="form-group">
            {{csrf_field()}}
             <p><span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span></p><br>
            <label for="student_id">Id:</label>
            <input type="number" class="form-control" id="student_id" placeholder="Enter Student's Id" name="student_id" required>
          </div>
          <div class="form-group">
            <label for="student_pass">Password:</label>
            <input type="password" class="form-control" id="student_pass" placeholder="Enter Student's Password" name="student_pass" required>
          </div>
          <div class="form-group">
            <label for="student_name">Name:</label>
            <input type="text" class="form-control" id="student_name" placeholder="Enter Student's Name" name="student_name" required>
          </div>
          <div class="form-group">
            <label for="student_email">Email:</label>
            <input type="email" class="form-control" id="student_email" placeholder="Enter email" name="student_email" required>
          </div>
          <div class="form-group">
            <label for="student_sem">Semester:</label>
            <input type="number" class="form-control" id="student_sem" name="student_sem" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
@endsection