@extends('layouts/master',['title'=>'Change Password'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Change Password</h4></div>
                <div class="card-body">
                    
                   
                   <div class="alert alert-danger" style="text-align: center;">
                        <strong>{{ session('message') }}</strong>
                    </div>
                 
                    
                    <form action="/student_changepassword" method="post" class="validated">
                        {{csrf_field()}}
                        
                        <div class="form-group">
                            <label for="st_pass"><b>Current Password:</b></label>
                            <input type="password" class="form-control" id="st_pass" name="st_pass">
                        </div>
                        
                        <div class="form-group">
                            <label for="st_pass1"><b>New Password:</b></label>
                            <input type="password" class="form-control" id="st_pass1" name="st_pass1">
                        </div>
                        <div class="form-group">
                            <label for="st_pass2"><b>Confirm Password:</b></label>
                            <input type="password" class="form-control" id="st_pass2" name="st_pass2">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection