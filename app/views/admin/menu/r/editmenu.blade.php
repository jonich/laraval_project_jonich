@extends('admin.layouts')




@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Προσθήκη Κατηγορίας-Menu</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="{{URL::to('/')}}/administrator/menuedit">
						  <fieldset>
						  
						 
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Σειρά</label>
							  <div class="controls">
								<input value="<?=$menu->orderid;?>" type="text" class="span3 typeahead" name="orderid" id="typeahead"   />
							  </div>
							</div>
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Τίτλος</label>
							  <div class="controls">
								<input value="<?=$menu->title;?>" type="text" class="span3 typeahead" name="title" id="typeahead"   />
							  </div>
							</div>
							
							 <div class="control-group">
								<label class="control-label" for="selectError">Είδος Περιεχομένου</label>
								<div class="controls">
								  <select name="kind" id="selectError" data-rel="chosen">
									<option <?php if($menu->kind==1){?> selected="selected" <?php } ?> value="1" >Αρχική</option>
									<option <?php if($menu->kind==2){?> selected="selected" <?php } ?> value="2" >Επικοινωνία</option>
									<option <?php if($menu->kind==3){?> selected="selected" <?php } ?> value="3" >Περιεχόμενο</option>
									<option <?php if($menu->kind==4){?> selected="selected" <?php } ?> value="4" >Λίστα Περιεχομένου</option>
									<option <?php if($menu->kind==5){?> selected="selected" <?php } ?> value="5" >Photo Gallery</option>
									<option <?php if($menu->kind==6){?> selected="selected" <?php } ?> value="6" >Video Gallery</option>
									<option <?php if($menu->kind==7){?> selected="selected" <?php } ?> value="7" >Events</option>
									<option <?php if($menu->kind==8){?> selected="selected" <?php } ?> value="8" >Albums</option>
								  </select>
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
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button onclick="window.location='{{URL::to('/')}}/administrator/menu'" type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
@endsection			
			
			