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
                                    <div class="form-group">
                                        
                                        <td>{{$stu->student_fk_take}}</td>
                                        
                                        <td><input type="number" step="0.1" class="form-control" name="email"></td>
                                         <td><input type="number" class="form-control" name="email"></td>
                                         <td><input type="number" class="form-control" name="email"></td>
                                         <td><input type="number" class="form-control" name="email"></td>
                                         <td><input type="number" class="form-control" name="email"></td>
                                         <td><input type="number" class="form-control" name="email"></td>
                                         <td><input type="number" class="form-control" name="email"></td>
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