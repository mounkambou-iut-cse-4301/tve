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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Class Test</th>
                                <th>CSE 3232</th>
                                <th>CSE 3232</th>
                                <th>CSE 3232</th>
                                <th>CSE 3232</th>
                                <th>CSE 3232</th>
                                <th>CSE 3232</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CT-1</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                            <tr>
                                <td>CT-2</td>
                                 <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                            <tr>
                                <td>CT-3</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                               <tr>
                                <td>CT-4</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                            <tr>
                                <td>3 Highest Values</td>
                                 <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                            <tr>
                                <td>Mid-Semester Exam</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                            <tr>
                                <td>Final Exam</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                                <td>Doe</td>
                                <td>john</td>
                                <td>john</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection