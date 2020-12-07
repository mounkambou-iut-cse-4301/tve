@extends('layouts/master',['title'=>'Login'])
@section('content')
<!--================Login start =================-->
<div class="login_background" style='background-image:url("img/login-page.jpg") !important;'>
    <div class="container">
        <div class="row"><br>
            <div class="col-sm-7"></div>
            <div class="col-sm-5"><br>
                <form action="/StudentLogin" method="post" class="form_login validated">
                    <div class="img_login_container">
                        <img src="img/Fingerprint.jpg" alt="image" class="img_finger">
                    </div>
                    <div class="container_login">
                        {{csrf_field()}}
                        <p><span class="badge badge-danger" style="text-align: center ">{{ session('message') }}</span></p>
                        <label for="student_id"><b>UserId</b></label><br>
                        <input type="number" id="student_id" placeholder="Enter UserId" name="student_id" required style="width: 100%;"><br><br>
                        <label for="student_pass"><b>Password</b></label><br>
                        <input type="password" id="student_pass" placeholder="Enter Password" name="student_pass" required>
                        <button type="submit" class="button_login">Login</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--================Login End =================-->
@endsection