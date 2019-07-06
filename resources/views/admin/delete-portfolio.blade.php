@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
    <div class="content-top-1">

        <div class="mTop10">



            <b>Portfolio Images</b>

            <div class="container">
                <div class="row">
                    @foreach($portfolio as $image)
                    <div class="col-md-3 text-center">
                        <a href="/">
                            <img class="img-thumbnail img-responsive" src="{{asset('/uploads/'.$image->image)}}" /> </a>
                        <form method="POST" action="{{url('/admin/delete-portfolio/'.$image->id)}}" class="delete">
                            {{ csrf_field() }}
                            <input name="_method" value="delete" type="hidden">
                            <button class="btn btn-danger" type="submit">X</button>
                        </form>
                    </div>

                    @endforeach
                    <br>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="clearfix"> </div>


@endsection