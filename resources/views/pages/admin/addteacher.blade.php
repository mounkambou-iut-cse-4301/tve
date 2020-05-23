@extends('layouts/adminmaster',['title'=>'Addteacher'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <form action="/insertNewTeacher" method="post" class="validated">
          <div class="card">
            <div class="card-header">
              <h4>Add Teacher</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                {{csrf_field()}}
                <p><span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span></p><br>
                <label for="teacher_id"><b>Id:</b></label>
                <input type="number" class="form-control" id="teacher_id" placeholder="Enter Teacher's Id" name="teacher_id" required>
              </div>
              <div class="form-group">
                <label for="teacher_pass"><b>Password:</b></label>
                <input type="password" class="form-control" id="teacher_pass" placeholder="Enter Teacher's Password" name="teacher_pass" required>
              </div>
              <div class="form-group">
                <label for="teacher_name"><b>Name:</b></label>
                <input type="text" class="form-control" id="teacher_name" placeholder="Enter Teacher's Name" name="teacher_name" required>
              </div>
              <div class="form-group">
                <label for="teacher_email"><b>Email:</b></label>
                <input type="email" class="form-control" id="teacher_email" placeholder="Enter email" name="teacher_email" required>
              </div>
              <div class="form-group">
                <label for="teacher_office"><b>Office:</b></label>
                <input type="text" class="form-control" id="teacher_office" placeholder="Enter Teacher's office" name="teacher_office" required>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            </form>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
@endsection