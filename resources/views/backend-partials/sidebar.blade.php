<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a href="/"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	

			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Employees </span><i class="icon-angle-down"></i> </a>
				<ul>
					<li><a class="submenu" href="{{ route('employees.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Employee</span></a></li>
					<li><a class="submenu" href="{{ route('employees.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Employee List</span></a></li>
					
					
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dependends </span><i class="icon-angle-down"></i> </a>
				<ul>
					<li><a class="submenu" href="{{ route('dependends.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add </span></a></li>
					<li><a class="submenu" href="{{ route('dependends.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">  List</span></a></li>
					
					
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Benefits </span><i class="icon-angle-down"></i> </a>
				<ul>
					<li><a class="submenu" href="{{ route('benefits.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add</span></a></li>
					<li><a class="submenu" href="{{ route('benefits.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">  List</span></a></li>
					
					
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Claims </span><i class="icon-angle-down"></i> </a>
				<ul>
					<li><a class="submenu" href="{{ route('claims.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add</span></a></li>
					<li><a class="submenu" href="{{ route('claims.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">  List</span></a></li>
					<li><a class="submenu" href="{{ route('claim.toalico') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">  Transfer To Alico</span></a></li>
					<li><a class="submenu" href="{{ route('claim.chaque') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">  Chaque Info</span></a></li>
					<li><a class="submenu" href="{{ route('claim.paid') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">  Handover Date</span></a></li>
					
					
				</ul>	
			</li>



			
		</ul>
	</div>
</div>