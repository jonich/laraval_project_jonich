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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Κατηγορίες Menu</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Τίτλος</th>
								   <th>Σειρά</th>
								  <th>Είδος</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php for($i=0; $i<count($menu); $i++){ ?>
							<tr>
								
								<td class="center"><?=$menu[$i]->title;?></td>
								<td><?=$menu[$i]->orderid;?></td>
								
								<td class="center">
									<?php if($menu[$i]->kind==1){ echo "Αρχική"; } ?>
									<?php if($menu[$i]->kind==2){ echo "Επικοινωνία"; } ?>
									<?php if($menu[$i]->kind==3){ echo "Περιχόμενο"; } ?>
									<?php if($menu[$i]->kind==4){ echo "Λίστα Περιεχομένου"; } ?>
									<?php if($menu[$i]->kind==5){ echo "Albums"; } ?>
									<?php if($menu[$i]->kind==6){ echo "Videos"; } ?>
								</td>
								
								
								<?php if($menu[$i]->active==1){ ?>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<?php }else{ ?>
								<td class="center">
									<span class="label label-important">Not Active</span>
								</td>
								<?php } ?>
								
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="{{URL::to('/')}}/administrator/menuedit/<?=$menu[$i]->id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="javascript:asktodelete(<?=$menu[$i]->id;?>);">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table>            
					</div>
					
			
					
					<button onclick="window.location='{{URL::to('/')}}/administrator/menucreate'" class="btn btn-large btn-success">Προσθήκη</button>
					
				</div><!--/span-->
			
			</div><!--/row-->
			
			<form id="delidform" method="post" action="{{URL::to('/')}}/administrator/menudelete" >
				<input type="hidden" name="delid" id="delid" />
			</form>

			
@endsection			
			
			