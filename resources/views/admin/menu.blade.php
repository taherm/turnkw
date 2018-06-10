@extends('layouts.admin')
@section('content')      
                    <div class="col-md-7 main">
        <div class=" content-top-1">
                <h1>Menus</h1>
    <hr>
    <div class="panel-body" style="padding: 0;">
        <table class="table table-striped custom-table">
            <thead>
            <tr>
                <th>Menu(English)</th>
                <th>Menu(Arabic)</th>
                
                <th class="text-center" colspan="2">Action</th>
            </tr>
            </thead>
            @foreach($cat as $item)
                            <tr>
                    <td>{{ $item->title_en }}</td>
                    <td>{{ $item->title_ar }}</td>
                    
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="{{ url('admin/'.$item->id.'/edit_menu') }}">
                           
                            Edit
                        </a>
                        </td>

                     <td>   <form method="POST" action="/admin/delete-menu/{{$item->id}}" class="delete">
										{{ csrf_field() }}
										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-danger btn-xs" type="submit">Delete</button>
									</form>
                    
                    </td>
                </tr>
@endforeach
                            
                    </table>
        


    </div>

        </div>
    </div>
    <div class="col-md-5 main">
        <div class="content-top-1">
            
    <div>
        <h1>Add Menu</h1>
        <hr>

        <form method="POST" action="/main-menu">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="companyName">Name(English)</label>
    <input class="form-control" placeholder="Name (English)" name="title_en" type="text">
</div>

        <div class="form-group">
    <label for="companyName">Name(Arabic)</label>
    <input class="form-control" placeholder="Name (Arabic)" name="title_ar" type="text">
</div>

<span class="form-g"></span>

<div class="form-group">
    <button type="submit" class="btn btn-success" style="width: 100%">Save</button>
</div>
        </form>
    </div>




        </div>
    </div>

                <div class="clearfix"> </div>
                @include('layouts.errors')
            @endsection