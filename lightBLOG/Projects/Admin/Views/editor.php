

    <script>tinymce.init({

  selector: '#editor',
  language: 'tr',
  height: 500,
  theme: 'modern',
  plugins: 'image code autolink lists link imagetools',
  toolbar: 'undo redo | image code link lists autolink imagetools',
  contextmenu: "link image paste",
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample responsivefilemanager toc'
  ],

  toolbar1: '| cut copy paste | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ',
  toolbar2: '| responsivefilemanager | print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  
  external_filemanager_path:"/filemanager/",
  filemanager_title:"Dosya Yöneticisi" ,
  external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ],


 });

</script>