@extends('layouts/master',['title'=>'Post on Forum'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Post Your Message</h4>
                </div>
                <div class="card-body">
                    <form action="/teachermaterial" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <p><span class="badge badge-success" style="text-align: center ">succes</span></p><br>
                        <div class="form-group">
                            <label for="sel_course"><b>Select course:</b></label>
                            <select class="form-control" id="sel_course" name="sel_course">
                                <option>CSE 4343</option>
                                <option>CSE 4344</option>
                                <option>CSE 4345</option>
                                <option>CSE 4349</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lecture"><b>Title:</b></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" rows="5" id="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection