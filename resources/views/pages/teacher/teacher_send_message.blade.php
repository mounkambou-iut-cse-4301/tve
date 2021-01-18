@extends('layouts/master',['title'=>'Message'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Message</h4></div>
                <div class="card-body">
                <form action="/teacher_send_message" method="post" enctype="multipart/form-data">
                        
                        <p><span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span></p><br>
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="sel_id"><b>Select ID:</b></label>
                            <select class="form-control" id="sel_id" name="sel_id">
                               <option value="all">All Students</option>
                               @foreach($student as $student)
                                 <option value="{{$student}}">{{$student}},{{getName($student)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message"><b>Message:</b></label>
                            <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection