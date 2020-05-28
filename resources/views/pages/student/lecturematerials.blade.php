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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Courses</th>
                                <th>Lectures</th>
                                <th>Files</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($select as $sel)
                            <tr>
                                <td>{{$sel->course_fk_material}}</td>
                                <td>{{$sel->lecture}}</td>
                                <td>
                                    <a href="/download?name={{$sel->file_name}}"style="">Dowload Now</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection