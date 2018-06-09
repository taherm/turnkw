@extends('layouts.master-en')
@section('content')


<div class="container">
	
			<div class="row align-items-center">
				<div class="col-lg-12">
					<img src="{{asset('uploads/'.$ser->image)}}" width="100%" height="auto">
                    <h1>
                    {{$ser->title_en}}
                    </h1>
				<p>
                {!!$ser->description_en!!}
                 </p>
          
               
              
                </div>
				
			</div>
	
		</div>


        @endsection