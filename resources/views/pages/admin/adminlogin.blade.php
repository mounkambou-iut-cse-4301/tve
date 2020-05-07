@extends('layouts/master',['title'=>'Login'])
@section('content')
<!--================Login start =================-->
<div class="login_background" style='background-image:url("img/home1.jpg") !important;'>
    <div class="container">
        <div class="row"><br>
            <div class="col-sm-4"></div>
            <div class="col-sm-5"><br>
                <form action="/LoginAdmin" method="post" class="form_login validated">
                    <div class="img_login_container">
                        <img src="img/login2.jpg" alt="image" class="img_login">
                    </div>
                    <div class="container_login">
                        {{csrf_field()}}
                         <p><span class="badge badge-danger" style="text-align: center ">{{ session('message') }}</span></p>
                        <label for="admin_id"><b style="color: black">Admin_Id</b></label><br>
                        <input type="number" id="admin_id" placeholder="Enter Admin_Id" name="admin_id" required style="width: 100%"><br><br>
                        <label for="admin_pass"><b style="color: black">Password</b></label>
                        <input type="password" id="admin_pass" placeholder="Enter Password" name="admin_pass" required>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <button type="submit" class="button_login">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
<!--================Login End =================-->
@endsection