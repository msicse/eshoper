<!DOCTYPE html>
<html lang="en">

@include('partials.head')


<body>
	@include('partials.header')

	@yield('content')

	@include('partials.footer')

	@include('partials.scripts')

</body>
</html>