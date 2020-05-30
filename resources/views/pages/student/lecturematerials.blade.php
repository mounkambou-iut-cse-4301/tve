@extends('layouts/master',['title'=>'lecturematerials'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Lectures Materials</h4></div>
                <div class="card-body">
                    @if($status==0)
                       <div class="alert alert-info" style="text-align: center;">
                        <strong>Whoops, Sorry This teacher did not upload any File.</strong>
                    </div>
                    @elseif($status==1)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Courses</th>
                                <th>Lectures</th>
                                <th>Comments</th>
                                <th>Files</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($select as $sel)
                            <tr>
                                <td>{{$sel->course_fk_material}}</td>
                                <td>{{$sel->lecture}}</td>
                                <td>{{$sel->comment}}</td>
                                <td>
                                    <a href="upload/{{$sel->filename}}" download="{{$sel->filename}}">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-download"></i>
                                        Dowload
                                        
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection