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
                            <label for="admin_name"><b style="color: black">Admin_Name</b></label>
                            <input type="text" id="admin_name" placeholder="Enter Admin_Name" name="admin_name" required>

                            <label for="admin_pass"><b style="color: black">Password</b></label>
                            <input type="password" id="admin_pass" placeholder="Enter Password" name="admin_pass" required>

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