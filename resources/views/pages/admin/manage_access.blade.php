@extends('layouts/adminmaster',['title'=>'Manage Access'])
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header"> <div class="alert alert-success" style="text-align: center;">
      <strong>Manage Access</strong>
    </div></div>
    <div class="card-body">
      
      <table class="table">
        <thead>
          <tr>
            <th><h4>Lock Access to the Results</h4></th>
            <td>
              @if($status_result==0)
              <a href="/lock_open_result"><button class="btn btn_edit"><i class="fa fa-lock-open"></i></button></a>
              @elseif($status_result==1)
              <a href="/lock_result"><button class="btn btn-danger"><i class="fa fa-lock"></i></button></a>
              @endif
            </td>
          </tr>
          <tr>
            <th><h4>Lock Access for teachers to give Attendances</h4></th>
            <td>
              @if($status_att==0)
              <a href="/lock_open_attendance"><button class="btn btn_edit"><i class="fa fa-lock-open"> </i></button></a>    
              @elseif($status_att==1)
              <a href="/lock_attendance"><button class="btn btn-danger"><i class="fa fa-lock"> </i></button></a>
              @endif
            </td>
          </tr>
          <tr>
            <th><h4>Lock Access for teachers to give Marks</h4></th>
            <td>
              @if($status_mark==0)
              <a href="/lock_open_mark"><button class="btn btn_edit"><i class="fa fa-lock-open"></i></button></a>
              @elseif($status_mark==1)
              <a href="/lock_mark"><button class="btn btn-danger"><i class="fa fa-lock"> </i></button></a>
              @endif
            </td>
          </tr>
          
        </thead>
        
      </table>
      
      
    </div>
  </div>
</div>
@endsection