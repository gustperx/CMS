<script>

    $(function () {
        'use strict';

        var url = "/upload";
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json'
        })
        .bind('fileuploaddone', function (e, data) {

            $.each(data.result, function (index, file) {

                

                if(file.status=='OK')
                {
                    simpleAlert('Felicidades','Su imagen se ha subido correctamente','success','Ok');

                    $("#fileUpload").addClass('hide')
                    
                    $('#file_id').val(file.fileId)

                }else{

                    simpleAlert('Error','Imagen excede los 2 MB o es un archivo no permitido','error','Corregir');

                    $('#progress .progress-bar').css(

                        'width',

                        0 + '%'
                        
                    );

                }
               
            });
        })
        .bind('fileuploadprogressall', function (e, data) {

            var progress = parseInt(data.loaded / data.total * 100, 10);

            $('#progress .progress-bar').css(

                'width',

                progress + '%'

            );

        })

    });

</script>
