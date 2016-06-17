<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Hellas-Shipping</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
       
		<link rel="icon" type="image/png" href="{{asset('shipping/img/favicon.png') }}" />
		
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{asset('shipping/assets/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Template CSS -->
		
		
		
        <link rel="stylesheet" href="{{asset('shipping/assets/css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('shipping/assets/css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('shipping/assets/css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('shipping/assets/css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('shipping/assets/css/custom.css') }}" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div style="background-image:url('{{asset('shipping/img/bgnew2.jpg')}}');" id="body_bg">
            <div id="pre_header" class="container">
                <div class="row margin-top-10 visible-lg">
                    
                </div>
            </div>
			
			
			
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
					<div id="header" class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="logo">
                                <a style="font-size:36px; font-weight:bolder; font-family: initial; color:black;" href="{{URL::to('/')}}/<?=$lang;?>/home" title="">
									<img style="width:76px;" src="{{asset('shipping/img/logo.jpg')}}" alt="Hellas Shipping Agencies" />
                                    Hellas Shipping Agencies
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class="social-icons pull-right hidden-xs">
							
								 <li style="background-image:url('{{asset('shipping/img/uk.gif')}}');" class="social-twitter">
                                    <a href="{{URL::to('/')}}/en/home"  title="Twitter"></a>
                                </li>
                                <li style="background-image:url('{{asset('shipping/img/gr.png')}}');" class="social-rss">
                                    <a href="{{URL::to('/')}}/el/home"  title="RSS">
									
									</a>
                                </li>
                               
                                <li style="background-image:url('{{asset('shipping/img/bra.GIF')}}');" class="social-facebook">
                                    <a href="{{URL::to('/')}}/pu/home"  title="Facebook"></a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
					
					
				
                    
                    <!-- Top Menu -->
					
					@include('site.includes.menu')
                   
					 
					
					
					
					
				
					
					
					@yield('content')
					
					
					
					
					
					
					
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
			
			
			
			
			
			@include('site.includes.footer')
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			  <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="copyright" class="col-md-4">
                            <p style="color:white;">(c) 2016 Copyright</p>
                        </div>
                        
                    </div>
                </div>
            </div>
			
			
			
			
			
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type="text/javascript" src="{{asset('shipping/assets/js/jquery.min.js') }}" type="text/javascript"></script>
            <script type="text/javascript" src="{{asset('shipping/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script type="text/javascript" src="{{asset('shipping/assets/js/scripts.js') }}"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="{{asset('shipping/assets/js/jquery.isotope.js') }}" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="{{asset('shipping/assets/js/jquery.slicknav.js') }}" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="{{asset('shipping/assets/js/jquery.visible.js') }}" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="{{asset('shipping/assets/js/jquery.sticky.js') }}" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="{{asset('shipping/assets/js/slimbox2.js') }}" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="{{asset('shipping/assets/js/modernizr.custom.js') }}" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
			
			
          