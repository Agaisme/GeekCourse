@extends('layouts.master')

@section('content')

	<h2>Popular Course</h2>
	<div class="columns">
		@foreach (range(1,5) as $item)
		<div class="column">
			<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
						<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Phasellus nec iaculis mauris. <a>@bulmaio</a>.
						<a href="#">#css</a> <a href="#">#responsive</a>
						<br>
						<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>


	<h2>Recommend Course</h2>
	<div class="columns">
		@foreach (range(1,5) as $item)
		<div class="column">
			<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
						<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Phasellus nec iaculis mauris. <a>@bulmaio</a>.
						<a href="#">#css</a> <a href="#">#responsive</a>
						<br>
						<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>

@endsection