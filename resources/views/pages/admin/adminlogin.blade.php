@extends('layouts/master',['title'=>'Login'])


@section('content')

<!--================Login start =================-->
<div class="login_background" style='background-image:url("img/home1.jpg") !important;'>
        <div class="container">
            <div class="row"><br>
                <div class="col-sm-4"></div>
                <div class="col-sm-5"><br>

                    <form action="" method="post" class="form_login">
                        <div class="img_login_container">
                            <img src="img/login2.jpg" alt="image" class="img_login">
                        </div>

                        <div class="container_login">
                            <label for="unid"><b style="color: white">Admin_Name</b></label>
                            <input type="text" placeholder="Enter Admin_Name" name="unid" required>

                            <label for="psw"><b style="color: white">Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit" class="button_login">Login</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember" > Remember me
                            </label>
                        </div>
                    </form>

                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>


    <!--================Login End =================-->

@endsection