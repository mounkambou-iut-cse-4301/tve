@extends('layouts/master',['title'=>'Post on Forum'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Posting on Forum</h4>
                </div>
                <div class="card-body">
                    <form action="/teacher_forum_post" method="post" enctype="multipart/form-data">
                        
                        <p><span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span></p><br>
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="lecture"><b>Title:</b></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="message"><b>Message:</b></label>
                            <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection