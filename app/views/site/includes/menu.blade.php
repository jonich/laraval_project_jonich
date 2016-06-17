<div id="hornav" class="container no-padding">
	<div class="row">
		<div class="col-md-12 no-padding">
			<div class="pull-right visible-lg">
				<ul id="hornavmenu" class="nav navbar-nav">
				
					<?php for($i=0; $i<count($mainmenu); $i++){ ?>
					<li>
						<?php if($mainmenu[$i]->kind==1){ ?><a href="{{URL::to('/')}}/<?=$lang;?>/home"><?php } ?>
						<?php if($mainmenu[$i]->kind==3){ ?><a href="{{URL::to('/')}}/<?=$lang;?>/home/content/<?=$mainmenu[$i]->title;?>"><?php } ?>
						<?php if($mainmenu[$i]->kind==2){ ?><a href="{{URL::to('/')}}/<?=$lang;?>/home/contact"><?php } ?>
							<?=$mainmenu[$i]->title;?>
						</a>
					</li>
					<?php } ?>
					
				</ul>
			</div>
		</div>
	</div>
</div>