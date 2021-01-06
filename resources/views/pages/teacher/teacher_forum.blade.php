@extends('layouts/master',['title'=>'Your Post'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4> Your Posts </h4>
                </div>
                <div class="card-body">
                   
                        <div class="card-header" style="margin-bottom:2% !important;">
                            <a href="/teacher_post" class="link_studentsidebar">lick1</a>
                        </div>
                        <div class="card-header" style="margin-bottom:2% !important;">
                            <a href="/teacher_post" class="link_studentsidebar">lick2</a>
                        </div>
                        <div class="card-header" style="margin-bottom:2% !important;">
                            <a href="/teacher_post" class="link_studentsidebar">lick3</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection