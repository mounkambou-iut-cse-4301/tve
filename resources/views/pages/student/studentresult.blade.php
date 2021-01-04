@extends('layouts/master',['title'=>'Stdent Result'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <!-- <div class="card-header"><h4>Student Result</h4></div> -->
                <div class="card-body stdent_result">
                    @if($status==1)
                    <div class="alert alert-info" style="text-align: center;">
                        <strong>Whoops, Sorry but you can not see yet your results.</strong>
                    </div>
                    @elseif($status==0)
                    

                    <div id="printpage">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Course No</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $grade)
                            <tr>
                                <td>{{ $grade->course_fk_grade }}</td>
                                <td>{{getCourseName($grade->course_fk_grade)}}</td>
                                <td>{{$grade->credit}}</td>
                                <td>{{$grade->grade_store}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    
                    <div class="card-header">
                        <table class="table">
                            <tr>
                                <td><h5>Grade Point Average (GPA) For This Semester : <b>{{$student_gpa->gpa_result}}</b></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Cumulative Grade Point Average (CGPA) : <b>{{$student_gpa->cgpa_result}}</b></h5></td>
                            </tr>
                        </table>

                    </div>
                    @endif
                    <div>
                    <a class="btn btn-default"><i class="fa fa-print"> <input type="button" onclick="printDiv()" value="print"></i></a>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function printDiv(){
    var value1=document.getElementById('printpage').innerHTML;
    var value2=document.body.innerHTML;
    window.print();
    document.body.innerHTML=value2;
}
</script>
@endsection