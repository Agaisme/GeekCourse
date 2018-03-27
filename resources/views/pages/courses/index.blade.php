@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-4">
    <h2>List Course</h2>
	@foreach (range(1,5) as $item)
		<dl>
			<dt>Judul</dt>
			<dt>Author</dt>
			<dt>Rating</dt>
			<dt>Harga</dt>
		</dl>
	</div>
</div>
@endsection