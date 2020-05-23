@extends('layouts/adminmaster',['title'=>'Attendances'])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <form action="/attendances" method="post" class="validated" >
        <div class="card">
          {{csrf_field()}}
          <div class="form-group">
            <div class="card-header">
              <h5>Sort By Course And Range<h5>
            </div>
            <div class="card-body">
              <label for="sort_st_course"><b>Sort By Course</b></label>
              <select class="form-control" id="sort_st_course" name="sort_st_course">
                @foreach($course_sort as $cours_sort)
                <option value="{{$cours_sort->course_fk_take}}">{{$cours_sort->course_fk_take}}</option>
                @endforeach
              </select><br>
              <label for="sort_st_range"><b>Sort By Range</b></label>
              <select class="form-control" id="sort_st_range" name="sort_st_range">
                
                <option value="49">0-49%</option>
                <option value="74">50-74%</option>
                <option value="75">75-100%</option>
                
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
@endsection