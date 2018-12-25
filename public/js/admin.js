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
});
