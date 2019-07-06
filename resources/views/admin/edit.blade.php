  @extends('layouts.admin')
  @section('content')
  <div class="col-md-12 main">
    <div class="content-top-1">

      <div id="mytoolbar"></div>
      <div class="mTop10">
        <form method="POST" action="/admin/{{$page->id}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title_en" value="{{$page->title_en}}">
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">Title(Arabic)</label>
            <input type="text" class="form-control" name="title_ar" value="{{$page->title_ar}}">
      </div> --}}
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description_en" class="editor" style="visibility:visible" placeholder="{{$page->description_en}}">{{$page->description_en}}</textarea>
      </div>
      {{-- <div class="form-group">
        <label for="exampleInputPassword1">Description(Arabic)</label>
        <textarea name="description_ar" class="editor" style="visibility:visible" placeholder="{{$page->description_ar}}">{{$page->description_ar}}</textarea>
    </div> --}}
    <div class="form-group">
      <label for="exampleInputFile">Image</label>
      <input type="file" name="image" value="{{$page->image}}">
    </div>
    {{-- <b>Add to Menu</b>
    <select name="menu" class="form-control">

      @foreach($cate as $item)

      <option value="{{$item->title_en}}">{{ $item->title_en }}</option>

    @endforeach

    </select>
    --}}
    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

  </div>

  </div>
  </div>

  <div class="clearfix"> </div>
  @endsection