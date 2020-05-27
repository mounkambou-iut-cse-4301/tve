@extends('layouts/master',['title'=>'Statistics'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Statistics</h4></div>
                <div class="card-body">
                    <div id="piechart"></div>
                    @include('layouts/partials/_gstatic_charts_loader')
                    <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
                    // Draw the chart and set the chart values
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['A+', {{$Aplus}}],
                    ['A', {{$A}}],
                    ['A-', {{$Aminus}}],
                    ['B+', {{$Bplus}}],
                    ['B',{{ $B}}],
                    ['B-', {{$Bminus}}],
                    ['C+', {{$Cplus}}],
                    ['C', {{$C}}],
                    ['D', {{$D}}]
                    ]);
                    // Optional; add a title and set the width and height of the chart
                    var options = {'title':'Students Average Grade', 'width':600, 'height':400};
                    // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection