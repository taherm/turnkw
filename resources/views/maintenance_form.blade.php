@extends('layouts.master-en')
@section('content')


<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            {{-- <img src="{{asset('uploads/scope.jpg')}}" width="100%" height="auto"> --}}
            <br><br><br>
            <h1>Maintenance Form</h1>
            <form action="/maintenance-mail" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col">
                        <label>Type of Issue*</label>
                        <input type="text" value="" data-msg-required="Please enter type of issue." maxlength="100" class="form-control" name="type" id="type" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Location *</label>
                        <input type="text" value="" data-msg-required="Please enter Location." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="location" id="location" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Branch Manager Name *</label>
                        <input type="text" value="" data-msg-required="Branch Manager Name." maxlength="100" class="form-control" name="branch_name" id="branch_name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Branch Manager Contact Number *</label>
                        <input type="text" value="" data-msg-required="Branch Manager Contact Number." maxlength="100" class="form-control" name="branch_no" id="branch_no" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Working Hours *</label>
                        <input type="number" value="" data-msg-required="Working Hours." maxlength="100" class="form-control" name="working_hours" id="working_hours" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Upload Image * (Only jpg)</label>
                        <input type="file" value="" class="form-control" name="image" id="image" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" style="color:white !important" value="Send" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            @endif
        </div>
    </div>
    <br><br><br>
</div>


@endsection