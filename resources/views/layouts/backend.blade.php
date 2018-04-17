<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
	<!-- start: Header -->
		@include('backend-partials.navbar')
	<!-- start: Header -->
	
	<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Sidebar -->
			@include('backend-partials.sidebar')
			<!-- end: sidebar-->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
				<!-- start: Content Nav -->
				@include('backend-partials.content-nav')

				@yield('content')

			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	</div><!--/.fluid-container-->
		
		
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	@include('backend-partials.footer')

	
	
	<!-- start: JavaScript-->
		@include('backend-partials.scripts')
		
	<!-- end: JavaScript-->
	
</body>
</html>
