@extends('admin.layouts')


@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Προσθήκη Sounds to Album</h2>
					
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('/')}}/administrator/insideaddalbumsound/<?=$albumid;?>/<?=$listid;?>">
						  <fieldset>
						  
						       <div class="control-group">
								<label class="control-label">Ενεργό</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" name="active" id="inlineCheckbox1" value="1"> 
								  </label>
								</div>
							  </div>
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Σειρά</label>
							  <div class="controls">
								<input type="text" class="span3 typeahead" name="orderid" id="typeahead"   />
							  </div>
							</div>
		
							<div class="control-group">
							  <label class="control-label" for="typeahead">Τίτλος</label>
							  <div class="controls">
								<input type="text" class="span3 typeahead" name="title" id="typeahead"   />
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Αρχείο ήχου</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="soundfile" id="fileInput" type="file">
							  </div>
							</div>  
							
							
							
							
 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							   <button onclick="window.location='{{URL::to('/')}}/administrator/insidealbumsound/<?=$albumid;?>/<?=$listid;?>'" type="reset" class="btn">Cancel</button>
							
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
@stop			
			
			