
		
			
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
        selector: "#richtextarea<?=$editor;?>",
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
        external_filemanager_path: "{{asset('tinymce/filemanager')}}/",
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
