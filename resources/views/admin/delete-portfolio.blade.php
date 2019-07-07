@extends('layouts.admin') @section('content')
<div class="col-md-12 main">
    <div class="content-top-1">
        <div>
            <div class="col-md-10">
                <h1>Portfolio Images</h1>
            </div>


        </div>

        <div class="space"></div>
        <hr>
        <div class="panel-body">



            <div class="row">
                @foreach($portfolio as $image)
                <div class="col-md-3 text-center">

                    <img style="width: 200px;height: 200px;" class="img-thumbnail img-responsive" src="{{asset('/uploads/'.$image->image)}}" /> </a>
                    <form method="POST" action="{{url('/admin/delete-portfolio/'.$image->id)}}" class="delete">
                        {{ csrf_field() }}
                        <input name="_method" value="delete" type="hidden">
                        <button class="btn btn-danger" type="submit">X</button>
                    </form>
                    <br> <br>
                </div>

                @endforeach
                <br>
            </div>
        </div>

    </div>
</div>

<div class="clearfix"> </div>

@endsection