
$(document).ready(function() {
var host = window.location.href; //backend
host = host.split("backend");
tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: "",
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview",
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host:false,

    filemanager_title:"Responsive Filemanager",
    // filemanager_crossdomain: true,
    external_filemanager_path: host[0]+"filemanager/",
    external_plugins: { "filemanager" : host[0]+"filemanager/plugin.min.js"},
  
   image_advtab: true,
   
 });


	$("#product-startsale").datepicker({'dateFormat':'dd-mm-yy'});
	$("#product-endsale").datepicker({'dateFormat':'dd-mm-yy'});

   $("#imageFile").click(function(event) {
       // alert("sda");
       $("#myModal").modal();
   });    
});