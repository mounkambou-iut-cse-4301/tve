@extends('layouts/master',['title'=>'Attendance Details'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header"><h4>Attendance Details</h4></div>
                <div class="card-body">
                    <form action="/teacherattendance_select" method="post" class="validated">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="sort_st_id">Sort By Id:</label>
                            
                            <select class="form-control" id="sort_st_id" name="sort_st_id">       @foreach($st as $stu)
                                <option value="{{$stu}}">{{$stu}}</option> @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="sort_st_date">Sort By Date:</label>
                            
                            <select class="form-control" id="sort_st_date" name="sort_st_date">        @foreach($st_sort as $stu_sort)
                                <option value="{{$stu_sort->att_date}}">{{$stu_sort->att_date}}</option>
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