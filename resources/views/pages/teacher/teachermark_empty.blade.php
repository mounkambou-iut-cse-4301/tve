@extends('layouts/master',['title'=>'Marks'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Marks</h4></div>
                
                <div class="card-body">
                    @if($status==1)
                    <div class="alert alert-info"  style="text-align: center;">
                        <strong>Whoops, Sorry but you can not give marks in this period.</strong>
                    </div>
                    @elseif($status==0)
                    <div class="alert alert-info"  style="text-align: center;">
                        <strong>You have already submited the marks.</strong>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection