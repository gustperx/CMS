<script>

    $(function () {
        'use strict';

        var url = "/admin/upload";

        $('#fileupload').fileupload({

            url: url,

            dataType: 'json'

        })
        
        .bind('fileuploaddone', function (e, data) {

            $.each(data.result, function (index, file) {

                @yield('uploadFile')
               
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
