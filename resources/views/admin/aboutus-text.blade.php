@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
    <div class="content-top-1">

        <div class="mTop10">
            <form method="POST" action="/aboutus-text" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="exampleInputPassword1">AboutUs Page Text</label>
                    <textarea rows="2" cols="128" name="description" class="editor">{{$description}}</textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>

    </div>
</div>

<div class="clearfix"> </div>
@include('layouts.errors')
@endsection