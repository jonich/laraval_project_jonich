<div id="base">
                <div class="container padding-vert-30 margin-top-40">
                    <div class="row">
                        <!-- Sample Menu -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10"><?=$lekseis[6];?></h3>
                            <ul class="menu">
							
								<?php for($i=0; $i<count($mainmenu); $i++){ ?>
								<li>
									<?php if($mainmenu[$i]->kind==1){ ?><a class="fa-tasks" href="{{URL::to('/')}}/<?=$lang;?>/home"><?php } ?>
									<?php if($mainmenu[$i]->kind==3){ ?><a class="fa-tasks" href="{{URL::to('/')}}/<?=$lang;?>/home/content/<?=$mainmenu[$i]->title;?>"><?php } ?>
									<?php if($mainmenu[$i]->kind==2){ ?><a class="fa-tasks" href="{{URL::to('/')}}/<?=$lang;?>/home/contact"><?php } ?>
										<?=$mainmenu[$i]->title;?>
									</a>
								</li>
								<?php } ?>
							
                               
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <!-- Contact Details -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10"><?=$lekseis[7];?></h3>
                            <p>
                                <span class="fa-phone"></span><?=$contactdetails[0]->title;?>
                                <br>
                                <span class="fa-envelope"></span>
                                <a href="mailto:<?=$contactdetails[0]->title2;?>"><?=$contactdetails[0]->title2;?></a>
                                <br>
                                <span class="fa-link"></span>
                                <a href="http://<?=$contactdetails[0]->title3;?>"><?=$contactdetails[0]->title3;?></a>
                            </p>
                          
                        </div>
                        <!-- End Contact Details -->
                        <!-- Thumbs Gallery -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Portfolio Highlights</h3>
                            <div class="thumbs-gallery">
                                <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_1.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_1.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_2.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_2.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_3.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_3.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_4.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_4.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_5.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_5.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_6.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_6.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_7.jpg')}}">
                                    <img width="60"  height="60" src="{{asset('portfolio/133_7.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_8.jpg')}}">
                                   <img width="60"  height="60" src="{{asset('portfolio/133_8.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                                 <a class="thumbBox" rel="lightbox-thumbs" href="{{asset('portfolio/133_9.jpg')}}">
                                     <img width="60"  height="60" src="{{asset('portfolio/133_9.jpg')}}" alt="image1.jpg">
                                    <i></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Thumbs Gallery -->
                        <!-- Disclaimer -->
                        <div  class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10"><?=$lekseis[8];?></h3>
                            <p style="font-size:12px;"><?=$contactdetails[0]->bigtext;?></p>
							
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Disclaimer -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>