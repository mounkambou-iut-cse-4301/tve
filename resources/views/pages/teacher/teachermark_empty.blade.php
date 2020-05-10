@extends('layouts/master',['title'=>'Marks'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Marks</h4></div>
                
                <div class="card-body">
                    
                    
                    <div class="alert alert-info">
                        <strong>You have already submited the marks.</strong>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection