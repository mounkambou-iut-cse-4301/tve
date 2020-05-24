@extends('layouts/master',['title'=>'Setting'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Setting</h4></div>
                <div class="card-body">
                    
                     <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <td>{{$stu->student_id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$stu->student_name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$stu->student_email}}</td>
                            </tr>
                            <tr>
                                <th>Semester</th>
                                <td>{{$stu->student_sem}}</td>
                            </tr>
                            
                        </thead>
                        
                    </table>
                       
                   
                </div>
            </div>
             </div>
        </div>
    </div>
</div>
@endsection