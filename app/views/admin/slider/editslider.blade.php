@extends('admin.layouts')




@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Προσθήκη Φωτογραφίας στο Slider</h2>
						
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('/')}}/administrator/slideredit">
						  <fieldset>
						  
						 
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Σειρά</label>
							  <div class="controls">
								<input value="<?=$menu->orderid;?>" type="text" class="span3 typeahead" name="orderid" id="typeahead"   />
							  </div>
							</div>
						  
							
							
							<div>
						
								<img style="max-width:200px;" src="{{asset('slider/'.$menu->id.'.jpg')}}" />
							</div>		
						
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto" id="fileInput" type="file">
							  </div>
							</div> 
							  
							   <div class="control-group">
								<label class="control-label">Ενεργό</label>
								<div class="controls">
								  <label class="checkbox inline">
								  <?php if($menu->active){ ?>
									<input checked="checked" type="checkbox" name="active" id="inlineCheckbox1" value="1" > 
								  <?php }else{ ?>
								    <input type="checkbox" name="active" id="inlineCheckbox1" value="1" > 
								  <?php } ?>
								  </label>
								</div>
							  </div>
						     
							 <input type="hidden" name="editid" value="<?=$menu->id;?>" />
 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Αποθήκευση</button>
							  <button onclick="window.location='{{URL::to('/')}}/administrator/slider'" type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
@endsection			
			
			