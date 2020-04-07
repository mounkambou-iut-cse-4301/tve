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
                                <th>St Id</th>
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
                            <tr>
                                <td>CSE 4343</td>
                                <td>12</td>
                                <td>13</td>
                                <td>3</td>
                                <td>10</td>
                                <td>30</td>
                                <td>45</td>
                                <td>80</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>CSE 4343</td>
                                <td>12</td>
                                <td>13</td>
                                <td>3</td>
                                <td>10</td>
                                <td>30</td>
                                <td>45</td>
                                <td>80</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>CSE 4343</td>
                                <td>12</td>
                                <td>13</td>
                                <td>3</td>
                                <td>10</td>
                                <td>30</td>
                                <td>45</td>
                                <td>80</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>CSE 4343</td>
                                <td>12</td>
                                <td>13</td>
                                <td>3</td>
                                <td>10</td>
                                <td>30</td>
                                <td>45</td>
                                <td>80</td>
                                <td>30</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection