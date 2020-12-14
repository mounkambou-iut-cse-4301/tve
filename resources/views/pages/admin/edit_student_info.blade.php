@extends('layouts/adminmaster',['title'=>'edit'])
@section('content')
<div class="container">

        <div class="row">
            <div class="col-md-8">
                <form action="/edit_student_info_update" method="post" class="validated">
                {{csrf_field()}}
                <p><span class="badge badge-danger" style="text-align: center ">{{ session('message') }}</span></p><br>
                    <table class="table">
                        <tbody>
                        @foreach($student_info as $student_info )
                            <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="id">Student ID:</label>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="id" id="id" value="{{$student_info->student_id}}" readonly>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <td>
                                    <label for="name">Student Name:</label>
                                    </td>
                                    <td>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$student_info->student_name}}" required>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <td>
                                    <label for="email">Email:</label>
                                    </td>
                                    <td>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$student_info->student_email}}" required>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <td>
                                    <label for="semester">Semester :</label>
                                    </td>
                                    <td>
                                    <input type="number" class="form-control" id="semester" name="semester" value="{{$student_info->student_sem}}" required>
                                    </td>
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
@endsection