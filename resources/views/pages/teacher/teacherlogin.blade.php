@extends('layouts/master',['title'=>'Login'])
@section('content')
<!--================Login start =================-->
<div class="login_background" style='background-image:url("img/teacherlogin1.jpg") !important;'>
    <div class="container">
        <div class="row"><br>
            <div class="col-sm-7"></div>
            <div class="col-sm-5"><br>
                <form action="" method="post" class="form_login">
                    <div class="img_login_container">
                        <img src="img/Fingerprint.jpg" alt="image" class="img_finger">
                    </div>
                    <div class="container_login">
                        {{csrf_field()}}
                        <h5 style="color: red; text-align: center;background-color: #333333;"><b> {{ session('message') }}</b></h5>
                        <label for="unid"><b>UserId</b></label>
                        <input type="text" placeholder="Enter UserId" name="unid" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <button type="submit" class="button_login">Login</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--================Login End =================-->
@endsection