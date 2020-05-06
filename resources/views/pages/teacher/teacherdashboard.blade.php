@extends('layouts/master',['title'=>'Teacher Dashboard'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Teacher Dashboard</h4></div>
                <div class="card-body">
                    <h2>Choose your course</h2>
                    <form action="/teacherdashboard">
                         {{csrf_field()}}
                        @foreach($te_sel_course as $t_sel_course)
                        <div class="form-check">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="select_course" value="{{$t_sel_course->course_fk_teach}}" checked required> {{$t_sel_course->course_fk_teach}}
                            </label>
                        </div>
                        @endforeach
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection