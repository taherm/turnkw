@extends('layouts.master-en')
@section('content')




<div class="container">
	<br><br>

	<div class="row portfolio-list lightbox m-0" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
		@foreach($portfolio as $image)
		<div class="col-sm-6 col-lg-3">
			<div class="portfolio-item">
				<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
					<span class="thumb-info-wrapper">
						<img src="{{asset('uploads/'.$image->image)}}" alt="" height="210px">
						<span class="thumb-info-action">
							<a href="{{asset('uploads/'.$image->image)}}" class="lightbox-portfolio">
								<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fa fa-search-plus"></i></span>
							</a>
						</span>
					</span>
				</span>
			</div>
		</div>

		@endforeach
	</div>
	<br><br>
</div>


@endsection