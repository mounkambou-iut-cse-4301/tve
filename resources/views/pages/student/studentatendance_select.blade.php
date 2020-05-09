@extends('layouts/master',['title'=>'lecturematerials'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Registered courses</h4></div>
                <div class="card-body">
                    <form action="/studentatendance_select" method="post" class="validated">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="sort_st_course">Sort By Course:</label>
                            
                            <select class="form-control" id="sort_st_course" name="sort_st_course">
                                @foreach($course_sort as $cours_sort)
                                <option value="{{$cours_sort->course_fk_att}}">{{$cours_sort->course_fk_att}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="sort_course_date">Sort By Date:</label>
                            
                            <select class="form-control" id="sort_course_date" name="sort_course_date">
                                @foreach($date_sort as $dat_sort)
                                <option value="{{$dat_sort->att_date}}">{{$dat_sort->att_date}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection