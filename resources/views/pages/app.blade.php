@extends('layouts.master')

@section('content')
<body>
<!-- Site wrapper -->
	<div id="app">
		@include('includes.header')
		<div class="container is-widescreen">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        @yield('page-content')
                    </div>
                </div>
        </div>
		@include('includes.footer')
	</div>

	@include('includes.default-js')
</body>
@endsection
