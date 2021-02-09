@extends('layouts/adminmaster',['title'=>'Lock Course'])
    @section('content')
    <div class="container">
        <div class="card form_addteacher">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Course's Id</th>
                        <th>Course's Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($course as $cr)
                    <tr>
                        <td>{{$cr->course_id}}</td>
                        <td>{{$cr->course_name}}</td>
                        <td>
                            <a href="/lock_specifique_course/{{$cr->course_id}}">
                                @if($cr->block_course==0)
                                <button class="btn btn_edit"><i class="fa fa-lock-open"></i></button>
                                @elseif($cr->block_course==1)
                                <button class="btn btn-danger"><i class="fa fa-lock"></i></button>
                                @endif
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>{{$course->links()}}</div>
        </div>

    </div>
    @endsection