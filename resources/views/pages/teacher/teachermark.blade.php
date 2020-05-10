@extends('layouts/master',['title'=>'Marks'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Marks</h4></div>
                <div class="card-body">
                    <form action="/teachermark" method="post" class="validated" >
                        {{csrf_field()}}
                         <span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Quiz 1</th>
                                    <th>Quiz 2</th>
                                    <th>Quiz 3</th>
                                    <th>Quiz 4</th>
                                    <th>Mid</th>
                                    <th>Final</th>
                                    <th>Att</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($st as $stu)
                                <tr>
                                    <div class="form-group" >
                                        
                                       
                                        <td><input type="number" class="form-control" name="st_id[]" value="{{$stu->student_fk_take}}" readonly style="width: 155%; padding-left: 0%; padding-right: 0%;"></td>
                                        
                                        <td><input type="number" step=".01" class="form-control" name="quiz1[]" style="margin-left: 20%;"></td>
                                        <td><input type="number" step=".01" class="form-control" name="quiz2[]"></td>
                                        <td><input type="number" step=".01" class="form-control" name="quiz3[]"></td>
                                        <td><input type="number" step=".01" class="form-control" name="quiz4[]"></td>
                                        <td><input type="number" step=".01" class="form-control" name="mid[]"></td>
                                        <td><input type="number" class="form-control" step=".01" name="final[]"></td>
                                        <td><input type="number" step=".01" class="form-control" name="attendance[]"></td>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection