@extends('admin.layouts')


@section('content')

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Προσθήκη News</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{URL::to('/')}}/administrator/addnews/<?=$listid;?>">
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
							  <label class="control-label" for="typeahead">Ημερομηνία</label>
							  <div class="controls">
								<input type="text" class="span3 typeahead" name="contentdate" id="typeahead"   />
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Summary</label>
							  <div class="controls">
								<textarea  id="textarea2" name="summary" rows="3"></textarea>
							  </div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Κείμενο</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="content" rows="3"></textarea>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Φωτογραφία</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="myphoto" id="fileInput" type="file">
							  </div>
							</div>    
							
							
								<div class="control-group">
								<label class="control-label" for="selectError">Video Gallery</label>
								<div class="controls">
								  <select name="videoid" id="selectError" >
								     <option value="0">---</option>
									  <?php for($i=0; $i<count($videos); $i++){ ?>
										<option  value="<?=$videos[$i]->id;?>" ><?=$videos[$i]->title;?></option>
									  <?php } ?>	
								  </select>
								</div>
							  </div>
							  
							  
							  <div class="control-group">
								<label class="control-label" for="selectError">Photo Gallery</label>
								<div class="controls">
								  <select name="albumid" id="selectError" >
									<option value="0">---</option>
									  <?php for($i=0; $i<count($albums); $i++){ ?>
										<option  value="<?=$albums[$i]->id;?>" ><?=$albums[$i]->title;?></option>
									  <?php } ?>	
								  </select>
								</div>
							  </div>
							  
							  
							 
						
 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							   <button onclick="window.location='{{URL::to('/')}}/administrator/news/<?=$listid;?>'" type="reset" class="btn">Cancel</button>
							
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
@stop			
			
			