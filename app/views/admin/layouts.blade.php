
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Hellas-Shipping</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{asset('admin/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('admin/img/favicon.ico') }}">
	<!-- end: Favicon -->
	
	
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>		
	<script type="text/javascript" src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
	
		
		
		
</head>




<body>



		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="{{URL::to('/')}}/administrator/menu" ><span>Hellas-Shipping</span></a>
				
				
				
				<a style="float:right" class="brand" href="{{URL::to('/')}}/logout" >
				<span class="hidden-tablet"><i class="icon-lock"></i>  Logout</span>
				</a>
			</div>
			
			
				
			
		</div>
	</div>
	<!-- start: Header -->








	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
		
		
		
		
		<!-- start: Main Menu -->
		
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
					
						<li style="background-color:orange;  border-bottom:1px solid black; padding:5px; border-top:1px solid black;">Κατηγορίες - Menu</li>
						<li  ><a href="{{URL::to('/')}}/administrator/menu"><i class="icon-bar-chart"></i><span class="hidden-tablet">Menu</span></a></li>	
						
						<li><a href="{{URL::to('/')}}/administrator/slider"><i class="icon-bar-chart"></i><span class="hidden-tablet">Slider</span></a></li>
						
						<li><a href="{{URL::to('/')}}/administrator/contact"><i class="icon-bar-chart"></i><span class="hidden-tablet">Contact Details</span></a></li>
						
						<!--<li><a href="{{URL::to('/')}}/administrator/albumgeneral"><i class="icon-bar-chart"></i><span class="hidden-tablet">Photo Galleries</span></a></li>
						<li><a href="{{URL::to('/')}}/administrator/videogeneral"><i class="icon-bar-chart"></i><span class="hidden-tablet">Video Galleries</span></a></li>
						-->
						
						<li style="background-color:orange;  border-bottom:1px solid black; padding:5px; border-top:1px solid black;">Περιεχόμενο</li>
						
						<?php for($i=0; $i<count($leftmenu); $i++){ ?>
						
							<?php if($leftmenu[$i]->kind==3 || $leftmenu[$i]->kind==1){ ?>
							
							
							
							<li <?php if(isset($content) && $content->catid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/content/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
							
							
							
							<?php }elseif($leftmenu[$i]->kind==4){ ?>	
							<li  <?php if(isset($listid) && $listid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/listcontent/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
							
							
							
							<?php }elseif($leftmenu[$i]->kind==6){ ?>	
							<li  <?php if(isset($listid) && $listid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/videocontent/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
							
							
							
							<?php }elseif($leftmenu[$i]->kind==5){ ?>	
							<li  <?php if(isset($listid) && $listid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/albumcontent/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
						
							<?php }elseif($leftmenu[$i]->kind==10){ ?>	
							<li  <?php if(isset($listid) && $listid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/sound/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
							
							<?php }elseif($leftmenu[$i]->kind==11){ ?>	
							<li  <?php if(isset($listid) && $listid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/albumsound/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
						
							
							
							<?php }elseif($leftmenu[$i]->kind==9){ ?>	
							<li  <?php if(isset($listid) && $listid==$leftmenu[$i]->id){ echo "class='active'"; } ?> >
								<a style="color:orange;" href="{{URL::to('/')}}/administrator/news/<?=$leftmenu[$i]->id;?>">
									<i class="icon-folder-close-alt"></i>
									<span class="hidden-tablet"><?=$leftmenu[$i]->title;?></span>
								</a>
							</li>	
							<?php } ?>	
						
						<?php } ?>
						
					</ul>
					
					
				</div>
			</div>
		
			<!-- end: Main Menu -->
		
		
		
		
		
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
				
				
				
				
				@yield('content')
				
				

			

			</div><!--/.fluid-container-->
	
	
	
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	
	
	<div class="clearfix"></div>
	
	
	
	
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2014 <a>synenastudio.gr</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('admin/js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{asset('admin/js/modernizr.js') }}"></script>
	
		<script src="{{asset('admin/js/bootstrap.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.cookie.js') }}"></script>
	
		<script src="{{asset('admin/js/fullcalendar.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.dataTables.min.js') }}"></script>

		<script src="{{asset('admin/js/excanvas.js') }}"></script>
	<script src="{{asset('admin/js/jquery.flot.js') }}"></script>
	<script src="{{asset('admin/js/jquery.flot.pie.js') }}"></script>
	<script src="{{asset('admin/js/jquery.flot.stack.js') }}"></script>
	<script src="{{asset('admin/js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{asset('admin/js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.noty.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.raty.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{asset('admin/js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{asset('admin/js/counter.js') }}"></script>
	
		<script src="{{asset('admin/js/retina.js') }}"></script>

		<script src="{{asset('admin/js/custom.js') }}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>

	
	