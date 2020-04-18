@extends('layouts/adminmaster',['title'=>'Addstudent'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card form_addteacher">
        <div class="form-group">
          <label for="ass_t_name">Teacher's Name:</label>
          <select class="form-control" id="ass_t_name" name="ass_t_name">
            <option> Njoya</option>
            <option>Youssouf</option>
            <option>Olabi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="ass_t_course1">Teacher's course 1:</label>
          <select class="form-control" id="ass_t_course1" name="ass_t_course1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="form-group">
          <label for="ass_t_course2">Teacher's course 2:</label>
          <select class="form-control" id="ass_t_course2" name="ass_t_course2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
</div>
@endsection