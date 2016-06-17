@extends('site.layouts.default')




@section('content')


                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container no-padding">
                            <div class="row">
							
							
							<?php 
								$slider=$homecontent[1];
								$content=$homecontent[0];
							?>
								
							
								 <!-- Carousel Slideshow -->
								<div id="carousel-example" class="carousel slide" data-ride="carousel">
									<!-- Carousel Indicators -->
									
									
									<ol class="carousel-indicators">
									<?php for($i=0; $i<count($slider); $i++){ ?>
										<li data-target="#carousel-example" data-slide-to="<?=$i;?>" <?php if($i==0){ ?> class="active" <?php } ?>></li>
									<?php } ?>	
									</ol>
									<div class="clearfix"></div>
									<!-- End Carousel Indicators -->
									<!-- Carousel Images -->
									<div class="carousel-inner">
										<?php for($i=0; $i<count($slider); $i++){ ?>
										<div class="item <?php if($i==0){?>active<?php } ?>">
											<img src="{{asset('slider/'.$slider[$i]->id.'.jpg')}}">
										</div>
										<?php } ?>	
									</div>
									
									<!-- End Carousel Images -->
									<!-- Carousel Controls -->
									<a class="left carousel-control" href="#carousel-example" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
									<!-- End Carousel Controls -->
								</div>
								<!-- End Carousel Slideshow -->
								
								
								
								
								
								
								
                            </div>
                        </div>
                       
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Text -->
                                <div class="col-md-12">
                                    <h2><?=$content[0]->title;?></h2>
                                    <p><?=$content[0]->bigtext;?></p>
                                </div>
                                
                            </div>
                        </div>
						
						
						
						
                    </div>


@endsection	