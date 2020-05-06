@extends('layouts/master',['title'=>'Teacher Dashboard'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>{{$t_log->teacher_id}}</h4></div>
                <div class="card-body">
                    <h1 style="text-align: center;"><b>Hello Mr {{$t_log->teacher_name}}</b></h1>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection