@extends('layouts/adminmaster',['title'=>'Result Second semester'])
@section('content')
<div class="container">
  <div class="card form_addteacher">
    <table class="table table-striped table-bordered">
       <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>GPA</th>
          <th>CGPA</th>
        </tr>
      </thead>
      <tbody>
       @foreach($array_gpa as $array_gp)
        <tr>
          <td>{{$array_gp->student_fk_result}}</td>
          <td>{{getName($array_gp->student_fk_result)}}</td>
          <td>{{$array_gp->gpa_result}}</td>
          <td>{{$array_gp->cgpa_result}}</td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
    <div>{{$array_gpa->links()}}</div>
  </div>
</div>
@endsection