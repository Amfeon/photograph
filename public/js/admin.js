/**
 * Created by Юсик on 25.12.2018.
 */
$(document).ready(function () {
    $('#thumnail').change(function (e) {
        $name_thumnail=$(this).val();
        $('#thumnail_label').html($name_thumnail);
    })
  $('#images').change(function (e) {
          var length=   $(this).get(0).files.length;
          var names=[];
    for(var i=0; i<length; ++i){
        names.push($(this).get(0).files[i].name)
    }
   $('#label_images').text(names);
  })
    $('#thumnailEdit').change(function (e) {
       files= this.files;
        if( typeof files == 'undefined' ) return;
        var data=new FormData();
        $.each(files, function (key,value) {
            data.append(key,value);
        });
        // добавим переменную для идентификации запроса
        data.append( 'my_file_upload', 1 );
        $.ajax({
            url         : '/ajax-load-image',
            type        : 'POST', // важно!
            data        : data,
            cache       : false,
            dataType    : 'json',
            // отключаем обработку передаваемых данных, пусть передаются как есть
            processData : false,
            // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
            contentType : false,
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success     : function(data){
                // ОК - файлы загружены
                newpath='/storage/' + data['path'];
                $('#thumnailImage').attr('src',newpath);
                $('#thumnail').val(data['path']);
            },
            // функция ошибки ответа сервера
            error: function( jqXHR, status, errorThrown ){
                console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
            }
        });

    });
    $('#summernote').summernote({
        placeholder: 'Описание фотосессии',
        tabsize: 2,
        height: 300
    });
});
