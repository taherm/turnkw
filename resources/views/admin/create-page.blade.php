@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
  <div class="content-top-1">

    <div class="mTop10">
      <form method="POST" action="/admin" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title_en">
        </div>
        {{-- <div class="form-group">
      <label for="exampleInputEmail1">Title(Arabic)</label>
      <input type="text" class="form-control" name="title_ar"  >
    </div>--}}
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea rows="2" cols="128" name="description_en" class="editor"></textarea>
        </div>
        {{-- <div class="form-group">
          <label for="exampleInputPassword1">Description(Arabic)</label>
          <textarea rows="2" cols="128" name="description_ar" class="editor"></textarea>
        </div>--}}
        <div class="form-group">
          <label for="exampleInputFile">Image</label>
          <input type="file" name="image">
        </div>

        {{-- <b>Add to Menu</b>
        <select name="submenu" class="form-control">

          @foreach($cate as $item)

          <option value="{{$item->title_en}}">{{ $item->title_en }}</option>

        @endforeach

        </select> --}}






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