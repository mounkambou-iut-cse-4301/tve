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
                    <form action="">
                        <div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="text" class="form-control" id="usr" name="username">
                        </div>
                         <div class="form-group">
                            <label for="usr">Office:</label>
                            <input type="text" class="form-control" id="usr" name="username">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Change Password:</label>
                            <input type="password" class="form-control" id="pwd" name="password">
                        </div>
                          <div class="form-group">
                            <label for="pwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="pwd" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection