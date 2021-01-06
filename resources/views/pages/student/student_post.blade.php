@extends('layouts/master',['title'=>'Your Post'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="card" style="margin-bottom: 1%;">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-text">Abdel Karim</p>
                            <p class="card-text" style="text-align: center;"><strong>Some example text some example
                                    text.</strong></p>
                            <div class="card-body">
                                <p class="card-text">Some example text some example text. John Doe is an architect and
                                    engineer. Some example text some example text. John Doe is an architect and
                                    engineer.Some example text some example text. John Doe is an architect and engineer.
                                </p>
                            </div>
                            <p style="text-align: right;">12/02/2018</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card"  style="margin-bottom: 1%;">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="message" placeholder="Your comment"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Publish</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="card-text" style="text-align: center;"><strong>Comments</strong></p>
                        <div class="card-header"> 
                            <div class="card-body">
                            <p class="card-text">Abdel Karim</p>
                                <p class="card-text">Some example text some example text. John Doe is an architect and
                                    engineer. Some example text some example text. John Doe is an architect and
                                    engineer.Some example text some example text. John Doe is an architect and engineer.
                                </p>
                            </div>
                            <p style="text-align: right;">12/02/2018</p>
                        </div>
                        <div class="card-header"> 
                            <div class="card-body">
                            <p class="card-text">Amadou Olabi</p>
                                <p class="card-text">Some example text some example text. John Doe is an architect and
                                    engineer. Some example text some example text. John Doe is an architect and
                                    engineer.Some example text some example text. John Doe is an architect and engineer.
                                </p>
                            </div>
                            <p style="text-align: right;">12/02/2018</p>
                        </div>
                        <div class="card-header"> 
                            <div class="card-body">
                            <p class="card-text">Mikayilou Namba</p>
                                <p class="card-text">Some example text some example text. John Doe is an architect and
                                    engineer. Some example text some example text. John Doe is an architect and
                                    engineer.Some example text some example text. John Doe is an architect and engineer.
                                </p>
                            </div>
                            <p style="text-align: right;">12/02/2018</p>
                        </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card-header">
                <h4> Other Posts </h4>
            </div>
            <div class="card-body">
                <div class="card-header" style="margin-bottom:2% !important;">
                    <a href="/teacher_post" class="link_studentsidebar">Some example text some example
                                    text.</a>
                </div>
                <div class="card-header" style="margin-bottom:2% !important;">
                    <a href="/teacher_post" class="link_studentsidebar">lick2</a>
                </div>
                <div class="card-header" style="margin-bottom:2% !important;">
                    <a href="/teacher_post" class="link_studentsidebar">Some example text some example
                                    text.</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection