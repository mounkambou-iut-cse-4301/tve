@extends('layouts/master',['title'=>'Setting'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Setting</h4></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <td>{{$te->teacher_id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$te->teacher_name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$te->teacher_email}}</td>
                            </tr>
                            <tr>
                                <th>Office</th>
                                <td>{{$te->teacher_office}}</td>
                            </tr>
                            @foreach($teach as $tea)
                            <tr>
                                <th>Course Teach</th>
                                <td>
                                    
                                    {{$tea->course_fk_teach}}
                                </td>
                            </tr>
                            @endforeach
                            
                            
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection