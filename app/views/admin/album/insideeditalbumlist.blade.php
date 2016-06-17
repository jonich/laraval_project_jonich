@extends('admin.layouts')




@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Επεξεργασία Photos of Album</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('/')}}/administrator/insideeditalbumlist/<?=$albumid;?>/<?=$listid;?>/<?=$contid;?>">
						  <fieldset>
						  
						       <div class="control-group">
								<label class="control-label">Ενεργό</label>
								<div class="controls">
								  <label class="checkbox inline">
								  <?php if($contentlist->active==1){ ?>
									<input type="checkbox" checked="checked" name="active" id="inlineCheckbox1" value="1"> 
								  <?php }else{ ?>
									<input type="checkbox" name="active" id="inlineCheckbox1" value="1"> 
                                  <?php } ?>								  
								  </label>
								</div>
							  </div>
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Σειρά</label>
							  <div class="controls">
								<input value="<?=$contentlist->orderid;?>" type="text" class="span3 typeahead" name="orderid" id="typeahead"   />
							  </div>
							</div>
		
							<div class="control-group">
							  <label class="control-label" for="typeahead">Τίτλος</label>
							  <div class="controls">
								<input value="<?=$contentlist->title;?>" type="text" class="span3 typeahead" name="title" id="typeahead"   />
							  </div>
							</div>
							
							
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('upload/'.$contentlist->id.'.jpg')}}" />
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto" id="fileInput" type="file">
							  </div>
							</div>    
							  
							
							 
						
 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							 <button onclick="window.location='{{URL::to('/')}}/administrator/insidealbumlist/<?=$albumid;?>/<?=$listid;?>'" type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
@stop			
			
			