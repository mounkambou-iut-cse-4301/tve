@extends('layouts/master',['title'=>'Upload materials'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Upload Materials</h4></div>
                <div class="card-body">
                    <form action="/teachermaterial" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <p><span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span></p><br>
                        <div class="form-group">
                            <label for="lecture"><b>Lecture:</b></label>
                            <input type="text" class="form-control" id="lecture" name="lecture" required>
                        </div>

                            <label for="file_name"><b>File Name:</b></label>
                            <input type="text" class="form-control" id="file_name" name="file_name" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="file" id="file" name="file" required style="padding-left: 5%">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="width: 100%">Upload</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection