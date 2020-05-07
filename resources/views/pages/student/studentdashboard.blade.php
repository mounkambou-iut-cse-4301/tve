@extends('layouts/master',['title'=>'Student Dashboard'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
      <div class="col-lg-3"></div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Registered courses</h4></div>
                <div class="card-body">
                   <!--  <h1 style="text-align: center;"><b>Hello Abdel Karim Mounkambou</b></h1> -->
                    <h2>Choose your courses</h2>
                    <form action="/studentdashboard" method="post" class="validated">
                       {{csrf_field()}}
                        @foreach($Courses as $cour)

                        <div class="form-check">
                            <label class="form-check-label" >
                                <input type="checkbox" class="form-check-input"  name="select_course[]" value="{{$cour->course_id}}" >{{$cour->course_id}}: {{$cour->course_name}} ({{$cour->course_credit }} credit)
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

