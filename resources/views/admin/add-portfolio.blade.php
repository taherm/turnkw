@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
    <div class="content-top-1">
        <div>
            <div class="col-md-10">
                <h1>Add Portfolio Images</h1>
            </div>


        </div>
        <div class="space"></div>
        <hr>
        <div class="mTop10">
            <form method="POST" action="/portfolio/portfolio" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <span class="btn btn-default fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Select Featured Image...</span>
                        <!-- The file input field used as target for the file upload widget -->
                        <input id="image" type="file" name="image" class="cover form-control">
                    </span>
                </div>


                <div class="form-group col-md-3">
                    <input class="btn btn-primary form-control" type="submit" value="Save">
                </div>

            </form>

        </div>

    </div>
</div>

<div class="clearfix"> </div>

@include('layouts.errors')
@endsection