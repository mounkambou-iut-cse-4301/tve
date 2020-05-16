@extends('layouts/master',['title'=>'Marks'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Marks</h4></div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Courses</th>
                                <th>CT-1</th>
                                <th>CT-2</th>
                                <th>CT-3</th>
                                <th>CT-4</th>
                                <th>3 Highest</th>
                                <th>Mid</th>
                                <th>Final</th>
                                <th>Att</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student_mark as $st_mark)
                            
                            <tr>
                                <td>{{$st_mark->course_fk_take}}</td>
                                <td>{{$st_mark->quiz1}}</td>
                                <td>{{$st_mark->quiz2}}</td>
                                <td>{{$st_mark->quiz3}}</td>
                                <td>{{$st_mark->quiz4}}</td>
                                <td>{{highest($st_mark)}}</td>
                                <td>{{$st_mark->mid}}</td>
                                <td>{{$st_mark->final}}</td>
                                <td>{{$st_mark->att_mark}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>{{$student_mark->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection