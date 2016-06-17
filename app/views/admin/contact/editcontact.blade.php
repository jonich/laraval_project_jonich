@extends('admin.layouts')




@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Στοιχεία επικοινωνίας</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('/')}}/administrator/contact">
						  <fieldset>
						  
		
							<div class="control-group">
							  <label class="control-label" for="typeahead">Telephone:</label>
							  <div class="controls">
								<input type="text" value="<?=$content->title;?>" class="span3 typeahead" name="title" id="typeahead"   />
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">e-mail</label>
							  <div class="controls">
								<input type="text" value="<?=$content->title2;?>" class="span3 typeahead" name="title2" id="typeahead"   />
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Website</label>
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
							
						
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_1.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 1</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto1" id="fileInput" type="file">
							  </div>
							</div> 
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_2.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 2</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto2" id="fileInput" type="file">
							  </div>
							</div> 
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_3.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 3</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto3" id="fileInput" type="file">
							  </div>
							</div> 
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_4.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 4</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto4" id="fileInput" type="file">
							  </div>
							</div> 
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_5.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 5</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto5" id="fileInput" type="file">
							  </div>
							</div> 
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_6.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 6</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto6" id="fileInput" type="file">
							  </div>
							</div> 
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_7.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 7</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto7" id="fileInput" type="file">
							  </div>
							</div> 
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_8.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 8</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto8" id="fileInput" type="file">
							  </div>
							</div> 
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('portfolio/133_9.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία 9</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto9" id="fileInput" type="file">
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
			
			