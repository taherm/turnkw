  @extends('layouts.admin')
  @section('content')           
                    <div class="col-md-7 main">
        <div class=" content-top-1">
                <h1> Menu : {{$serv->title_en}} </h1>
    <hr>
   
        </div>
    </div>
    <div class="col-md-5 main">
        <div class="content-top-1">
            
    <div>
        <h1>Edit Menu</h1>
        <hr>
        <form method="POST" action="/admin_edit/{{$serv->id}}">
        {{ csrf_field() }}

        
        <div class="form-group">
    <label for="companyName">Title(English)</label>
    <input class="form-control" value="{{$serv->title_en}}" name="title_en" type="text" id="en">
</div>


<div class="form-group">
    <label for="companyName">Title(Arabic)</label>
    <input class="form-control" value="{{$serv->title_ar}}" name="title_ar" type="text" id="ar">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-success" style="width: 100%">Save</button>
</div>        </form>
    </div>


        </div>
    </div>

                <div class="clearfix"> </div>

                @endsection