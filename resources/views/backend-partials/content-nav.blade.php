<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
		
	</li>

	<li><a href="#">{{ (\Request::route()->getName() == 'employees.index') ? 'Employee List' : '' }}</a></li>

</ul>