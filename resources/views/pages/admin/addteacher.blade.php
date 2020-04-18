@extends('layouts/adminmaster',['title'=>'Addteacher'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card form_addteacher">
        <form action="/insertNewTeacher" method="post" >
          <div class="form-group">
            {{csrf_field()}}
            <label for="teacher_id">Id:</label>
            <input type="number" class="form-control" id="teacher_id" placeholder="Enter Teacher's Id" name="teacher_id">
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
            <label for="teacher_email">Email:</label>
            <input type="email" class="form-control" id="teacher_email" placeholder="Enter email" name="teacher_email">
          </div>
          <div class="form-group">
            <label for="teacher_office">Office:</label>
            <input type="text" class="form-control" id="teacher_office" placeholder="Enter Teacher's office" name="teacher_office">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
@endsection