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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Sounds of Album</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								 <th>Σειρά</th>
								  <th>Τίτλος</th>
								  <th>Αρχείου Ήχου</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php for($i=0; $i<count($contentlist); $i++){ ?>
							<tr>
								<td><?=$contentlist[$i]->orderid;?></td>
								<td class="center"><?=$contentlist[$i]->title;?></td>
								
								
								<td>
									<audio controls>
										<source src="{{asset('upload/'.$contentlist[$i]->id.'.mp3')}}" type="audio/mpeg">
									</audio> 
								</td>
								
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
								
								
									<a class="btn btn-info" href="{{URL::to('/')}}/administrator/insideeditalbumsound/<?=$albumid;?>/<?=$listid;?>/<?=$contentlist[$i]->id;?>">
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
					
			
					
					<button onclick="window.location='{{URL::to('/')}}/administrator/addinsidealbumsound/<?=$albumid;?>/<?=$listid;?>'" class="btn btn-large btn-success">Προσθήκη</button>
					
					<button onclick="window.location='{{URL::to('/')}}/administrator/albumsound/<?=$listid;?>'" class="btn btn-large btn-success">Back</button>
					
				</div><!--/span-->
			
			</div><!--/row-->
			
			<form id="delidform" method="post" action="{{URL::to('/')}}/administrator/insidedeletealbumsound/<?=$albumid;?>/<?=$listid;?>" >
				<input type="hidden" name="delid" id="delid" />
			</form>

			
@stop			
			
			