@extends('admin.layouts')




@section('content')

<script>

function asktodelete(elem)
{
	var ans=confirm("You want to delete??");
	
	if(ans)
	{
		$('#delid').val(elem);
		$('#delidform').submit();
	}
}

</script>



			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Photo Galleries</h2>
					
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>Σειρά</th>
								  <th>Τίτλος</th>
								  <th>Date</th>
								  <th>Photo</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php for($i=0; $i<count($contentlist); $i++){ ?>
							<tr>
								<td><?=$contentlist[$i]->orderid;?></td>
								<td class="center"><?=$contentlist[$i]->title;?></td>
								
								<td class="center"><?=$contentlist[$i]->contentdate;?></td>
								
								
								
								
								<td class="center"><img style="max-width:200px;" src="{{asset('albums/'.$contentlist[$i]->id.'.jpg')}}" /></td>
								
								<?php if($contentlist[$i]->active==1){ ?>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<?php }else{ ?>
								<td class="center">
									<span class="label label-important">Not Active</span>
								</td>
								<?php } ?>
								
								<td class="center">
								
									<a class="btn btn-success" href="{{URL::to('/')}}/administrator/insidealbumgeneral/<?=$contentlist[$i]->id;?>" >
										<i class="halflings-icon white zoom-in"></i>  
									</a>
								
									<a class="btn btn-info" href="{{URL::to('/')}}/administrator/editalbumgeneral/<?=$contentlist[$i]->id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="javascript:asktodelete(<?=$contentlist[$i]->id;?>);">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
								
								
							</tr>
							<?php } ?>
						  </tbody>
					  </table>            
					</div>
					
			
					
					<button onclick="window.location='{{URL::to('/')}}/administrator/addalbumgeneral'" class="btn btn-large btn-success">Προσθήκη</button>
					
				</div><!--/span-->
			
			</div><!--/row-->
			
			<form id="delidform" method="post" action="{{URL::to('/')}}/administrator/deletealbumgeneral" >
				<input type="hidden" name="delid" id="delid" />
			</form>

			
@stop			
			
			