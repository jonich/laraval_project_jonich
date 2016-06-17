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
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable ">
						  <thead>
							  <tr>
								 
								  <th>Σειρά</th>
								  <th>Τίτλος</th>
								  <th>Είδος</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php for($i=0; $i<count($menu); $i++){ ?>
							<tr>
								<td><?=$menu[$i]->orderid;?></td>
								<td class="center"><?=$menu[$i]->title;?></td>
								
								
								
								<td class="center">
									<?php if($menu[$i]->kind==1){ echo "Αρχική"; } ?>
									
									<?php if($menu[$i]->kind==2){ echo "Επικοινωνία"; } ?>
									<?php if($menu[$i]->kind==3){ echo "Περιεχόμενο"; } ?>
									<?php if($menu[$i]->kind==4){ echo "Events"; } ?>
									<?php if($menu[$i]->kind==5){ echo "Photo Gallery"; } ?>
									<?php if($menu[$i]->kind==6){ echo "Video Gallery"; } ?>
									<?php if($menu[$i]->kind==9){ echo "News"; } ?>
									<?php if($menu[$i]->kind==10){ echo "Sounds"; } ?>
									<?php if($menu[$i]->kind==11){ echo "Album Sounds"; } ?>
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
			
			
		
		
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>		
<script type="text/javascript" src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
		
			
<script type="text/javascript">
    tinymce.init({
        relative_urls: false,
		paste_as_text: true,
		paste: true,
        default_link_target: "_blank",
		entity_encoding : "raw",
		paste_data_images: true,
        document_base_url: "{{asset('tinymce/path')}}",
        remove_script_host: false,
        selector: "#richtextarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        menu: {
            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
            insert: {title: 'Insert', items: 'link media | template hr'},
            view: {title: 'View', items: 'visualaid'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'spellchecker code'},
            horizline: {title: 'Νέα Σελίδα', items: 'horizline' }
        },
        toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        external_filemanager_path: "{{asset('tinymce/filemanager')}}",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "{{asset('tinymce/filemanager/plugin.min.js')}}"},
        content_css : "{{asset('tinymce/tinycss.css')}}",
        setup: function (editor) {
            editor.addMenuItem('horizline', {
                text: 'Νέα Σελίδα',
                type: 'menubutton',
                context: 'horizline',
                title: 'Οριζόντια Γραμμή',
                onclick: function () {
                    editor.insertContent('<hr>');
                }
            });
            editor.addMenuItem('onecol', {
                text: '1 Στήλη',
                type: 'menubutton',
                context: 'Templates',
                title: 'onecol',
                onclick: function () {
                    var current_content = editor.getContent();
                    var replaced;
                    if (current_content.substr(0,30) == '<div class="article_column_1">'){
                        replaced= current_content;
                    } else {
                        if (current_content.substr(0, 30) !== '<div class="article_column_2">') {
                            console.log(current_content.substr(0, 30));
                            replaced = '<div class="article_column_2">' + current_content + '</div>'
                        } else {
                            replaced = current_content.replace('<div class="article_column_2">', '<div class="article_column_1">');
                        }
                    }
                    editor.setContent(replaced);
                }
            });
            editor.addMenuItem('twocols', {
                text: '2 Στήλες',
                type: 'menubutton',
                context: 'Templates',
                title: 'twocols',
                onclick: function () {
                    var current_content = editor.getContent();
                    var replaced;
                    if (current_content.substr(0,30) == '<div class="article_column_2">'){
                        replaced= current_content;
                    } else {
                        if (current_content.substr(0, 30) !== '<div class="article_column_1">') {
                            console.log(current_content.substr(0, 30));
                            replaced = '<div class="article_column_1">' + current_content + '</div>'
                        } else {
                            replaced = current_content.replace('<div class="article_column_1">', '<div class="article_column_2">');
                        }
                    }
                    editor.setContent(replaced);
                }
            });
//                editor.tinymce.DOM.setStyles('.article_column_1', {'text-align': 'justify','padding': '5px','display': 'inline-block','vertical-align': 'top','-moz-column-count': '1', 'margin-bottom': '50px'});
        },
        skin_url: "{{asset('tinymce/js/tinymce/skins/light') }}",
        inline_styles : true


    });
</script>		




			
@endsection			
			
			