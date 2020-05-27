@extends('layouts/master',['title'=>'lecturematerials'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Lectures Materials</h4></div>
                <div class="card-body">
                    <form action="/lecturematerials" method="post" class="validated">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="sort_st_course"><b>Sort By Course</b></label>
                            <select class="form-control" id="sort_st_course" name="sort_st_course">
                              @foreach($course as $cour)
                                <option value="{{$cour->course_fk_take}}">{{$cour->course_fk_take}}</option>
                            @endforeach
                            </select><br>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection