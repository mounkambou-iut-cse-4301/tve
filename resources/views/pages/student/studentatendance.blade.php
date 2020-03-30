@extends('layouts/master',['title'=>'Attendance'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Attendance</h4></div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>CSE 4402</th>
          <th>CSE 4203</th>
          <th>CSE 4404</th>
          <th>CSE 4405</th>
          <th>CSE 4407</th>
          <th>CSE 4408</th>
          <th>EEE 4483</th>
          <th>EEE 4484</th>
          <th>Hum 4441</th>
          <th>Math 4441</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>190040001</td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:40%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:50%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:50%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:40%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:60%">6 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:70%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:10%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:90%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:100%">4 %</div>
            </div>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:80%">4 %</div>
            </div>
          </td>
          
        </tr>

      
      </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection