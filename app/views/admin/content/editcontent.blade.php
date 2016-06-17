@extends('admin.layouts')




@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Επεξεργασία Περιεχομένου</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('/')}}/administrator/editcontent/<?=$content->id;?>">
						  <fieldset>
						  
		
							<div class="control-group">
							  <label class="control-label" for="typeahead">Τίτλος Ελληνικά</label>
							  <div class="controls">
								<input type="text" value="<?=$content->title;?>" class="span3 typeahead" name="title" id="typeahead"   />
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Τίτλος Αγγικά</label>
							  <div class="controls">
								<input type="text" value="<?=$content->title2;?>" class="span3 typeahead" name="title2" id="typeahead"   />
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Τίτλος Πορτογαλικά</label>
							  <div class="controls">
								<input type="text" value="<?=$content->title3;?>" class="span3 typeahead" name="title3" id="typeahead"   />
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Κείμενο Ελληνικά</label>
							   <div style="width:800px;" class="controls">
								<textarea style='height:300px;' name='content' id='richtextarea1'><?=$content->bigtext;?></textarea>		
								<?php $editor=1; ?>
								@include('site.includes.tiny')
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Κείμενο Αγγικά</label>
							   <div style="width:800px;" class="controls">
								<textarea style='height:300px;' name='content2' id='richtextarea2'><?=$content->bigtext2;?></textarea>		
								<?php $editor=2; ?>
								@include('site.includes.tiny')
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Κείμενο Πορτογαλικά</label>
							   <div style="width:800px;" class="controls">
								<textarea style='height:300px;' name='content3' id='richtextarea3'><?=$content->bigtext3;?></textarea>		
								<?php $editor=3; ?>
								@include('site.includes.tiny')
							  </div>
							</div>
							
						
							
							
							
								
							  
							 
						
 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Αποθήκευση</button>
							
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
@endsection			
			
			