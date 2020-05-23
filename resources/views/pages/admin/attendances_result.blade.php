@extends('layouts/adminmaster',['title'=>'Attendance'])
@section('content')
<div class="container">
  <div class="card">
    @if($post==0)
    <div class="card-body">
      <div class="alert alert-info" style="text-align: center;">
        <strong>No Student in this Range.</strong>
      </div>
    </div>
    @else
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Percentages</th>
        </tr>
      </thead>
      <tbody>
        @foreach($sel_percentage as $sel_per)
        <tr>
          <td>{{$sel_per->student_fk_percentage}}</td>
          <td>{{getName($sel_per->student_fk_percentage)}}</td>
          <td>
            @if($status=='danger')
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:{{$sel_per->percentage}}%">{{$sel_per->percentage}} %</div>
            </div>
            @elseif($status=='warning')
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:{{$sel_per->percentage}}%">{{$sel_per->percentage}} %</div>
            </div>
            @elseif($status=='success')
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:{{$sel_per->percentage}}%">{{$sel_per->percentage}} %</div>
            </div>
            @endif
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
    @endif
    <div>{{$sel_percentage->links()}}</div>
  </div>
</div>
@endsection