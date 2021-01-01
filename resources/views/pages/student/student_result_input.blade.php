@extends('layouts/master',['title'=>'Student resultt'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Results</h4></div>
                <div class="card-body">
                    <form action="/studentresult" method="post" class="form-inline">
                        {{csrf_field()}}
                            <label for="sort_st_course" style="margin-right:5% !important;">Sort By Semester:</label>
                            
                            <select class="form-control" id="sort_st_sem" name="sort_st_sem" >
                            @if($sel_student->sem_result==1)
                                <option >1</option>
                            @elseif($sel_student->sem_result==2)
                             <option >1</option>
                             <option>2</option>
                            @elseif($sel_student->sem_result==3)
                             <option >1</option>
                             <option>2</option>
                             <option>3</option>
                            @elseif($sel_student->sem_result==4)
                             <option >1</option>
                             <option >2</option>
                             <option>3</option>
                             <option>4</option>
                            @elseif($sel_student->sem_result==5)
                             <option >1</option>
                             <option>2</option>
                             <option >3</option>
                             <option >4</option>
                             <option >5</option>
                            @elseif($sel_student->sem_result==6)
                             <option >1</option>
                             <option >2</option>
                             <option >3</option>
                             <option >4</option>
                             <option >5</option>
                             <option >6</option>
                            @endif
                            </select>

                        <button type="submit" class="btn btn-primary" style="margin-left:2% !important;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection