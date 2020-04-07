@extends('layouts/master',['title'=>'Student Dashboard'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Registered courses</h4></div>
                <div class="card-body">
                    <h2>Choose your courses</h2>
                    <form action="/action_page.php">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>CSE 3231: data structure (3 credit)
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="check2">
                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">CSE 3231: data structure (3 credit)
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">CSE 3231: data structure (3 credit)
                            </label>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection